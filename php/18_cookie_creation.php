<?php
    $c_name="Student";
    $c_value="Vaisakh 20 BCA";
    setcookie($c_name,$c_value,time()+3600,"/");
?>
<html>
    <head>
        <title>COOKIES CREATE</title>
        <style>
            body
            {
                margin: 0px;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 20px;
            }
            button
            {
                font-size: 15px;
            }
        </style>
    </head>
    <body>
        <center>
            <?php
                if(isset($_COOKIE[$c_name]))
                {
                    echo "COOKIE IS SET <br><br>";
                    echo "COOKIE NAME: ",$c_name,"<br><br>";
                    echo "COOKIE VALUE: ",$_COOKIE[$c_name];
                }
                else
                {
                    echo "COOKIE IS NOT SET";
                }
            ?>
        </center>
    </body>
</html>