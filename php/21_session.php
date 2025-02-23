<?php
    session_start();
    $_SESSION['name']="Vaisakh";
    $_SESSION['data']="20, BCA, 5th sem";
?>
<html>
    <head>
        <title>SESSION CREATION</title>
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
                if(isset($_SESSION['name']) && isset($_SESSION['data']))
                {
                    echo "SESSION IS CREATED <br><br>";
                    echo "SESSION NAME: ",$_SESSION['name'],"<br><br>";
                    echo "SESSION VALUE: ",$_SESSION['data'];
                }
                else
                {
                    echo "SESSION IS NOT CREATED";
                }
            ?>
        </center>
    </body>
</html>