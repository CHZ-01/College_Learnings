<html>
    <head>
        <title>STRING FUNCTIONS</title>
        <style>
            body
            {
                margin: 0px;
                height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                font-size: 20px;
            }
        </style>
    </head>
    <body>
        <?php
            $str="Hello world!";
            echo $str,"<br><br>";

            echo "STRING LENGTH: ",strlen($str),"<br><br>";

            echo "STRING COUNT: ",str_word_count($str),"<br><br>";

            echo "STRING REVERSE: ",strrev($str),"<br><br>";

            echo "STRING POSITION: ",strpos($str,"world"),"<br><br>";

            echo "STRING REPLACE: ",str_replace("world","friends",$str),"<br><br>";

            echo "STRING FIRST CAPITAL: ",ucwords($str),"<br><br>";

            echo "STRING UPPERCASE: ",strtoupper($str),"<br><br>";

            echo "STRING LOWERCASE: ",strtolower($str),"<br><br>";

            echo "STRING REPEAT: ",str_repeat($str,"5"),"<br><br>";
            
            echo "STRING EXTRACT: ",substr($str,0,5),"<br><br>";

            echo "STRING REMOVE: ",trim($str,"Hed!"),"<br><br>";

        ?>
    </body>
</html>