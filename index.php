<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gluten for Punishment</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.toJSON.min.js"></script>

        <script type="text/javascript">
        function checkForm() {
            console&&console.log('check called');
             $('#response').html("Checking....");
            $.ajax({
                    url:        "check.php"
                    , type:     'POST'
                    , data:     $('#theForm').toJSON()
                    , datatype: "json"
                    , success:  function(data) {
                        $('#response').html(data);
                        console&&console.log(data);
                    }
                }
            );

        }
        </script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. 
            Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve 
            your experience.</p>
        <![endif]-->

        <h1>Gluten for Punishment</h1>

        <p>This is a simple tool to check to see if a submitted ingredient list <em>might</em> 
        have gluten, gluten containing ingredients, or ingredients which may have come into 
        contact with gluten by checking against a <a href="gluten_words.txt">list of suspected 
        gluten containing items</a>.</p>



        <p><b>WARNING:</b> This is not a comprehensive tool. Use at your own peril. 
        You assume full responsibilty for the consequences of any decisions you make based 
        on the response of this tool.</p>

        <h2>Version 1.1 Features</h2>

        <ul>
            <li>Mark, as bold, which terms were found</li>
            <li>Count the number of items found</li>
        </ul>

        <p>If you have any problems/comments/suggestions please let me know by 
        <a href="https://github.com/mikemacd/gluten-o-matic/issues" target="_blank">creating an issue</a>.

        <form action="#" id="theForm" method="post">
            <label>
                <p>Enter the list of ingredients you would like to check</p>
                <textarea id="ingredients" name="ingredients" rows="10" cols="100"></textarea>
                <br>
            </label>
            <input type="button" name="check" value="check" onclick="checkForm()">

            <p>Results</p>
            <div id="response" style="border:1px solid black;width:50em;"> </div>
        </form>

        <?php
        /*
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        */
        ?>

	<small>Authored by 
	<a href="mailto:mikemad+gluten-o-matic@gmail.com?subject=Gluten-o-matic%20website" 
	target="_blank">Michael MacDonald</a>. 
	Source code licensed under GPL <a href="https://github.com/mikemacd/gluten-o-matic" 
	target="_blank">available on github</a></small>
    </body>
</html>
