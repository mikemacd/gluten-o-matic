<?

require_once "dBug.class.php";

$lines = file('gluten_words.txt');

$total_found=0;
foreach ($lines as $badword) {
    $pattern = 
        // beginning of regex
        "/"
        // one of begining of line or one character that is space comma period dash 0-9 as a word boundry
        ."((?<=^)|(?<=[\s,.-0-9()]))"
        ."(?<!<b>)"
        ."("
        . str_replace(
            "/"
            ,"\/"
            , chop($badword) 
        )
        .")"
        ."(?!<\/b>)"
        ."((?<=$)|(?=[\s,.-0-9()]))"
        ."/i"
    ;
    $count=0;
    $_REQUEST["ingredients"] = preg_replace(
        $pattern
        , "<b>$2</b>"
        , $_REQUEST["ingredients"]
        , -1
        , $count
    );
    $total_found+=$count;
}
echo $total_found ." words found<br><br>".$_REQUEST["ingredients"] ;
