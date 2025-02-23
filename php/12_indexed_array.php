<html>
    <head>
        <title>INDEXED ARRAY</title>
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
        </style>
    </head>
    <body>
        <?php
            $arr=array("BMW","BENZ","BUGATTI");
            $len=count($arr);

            for($i=0;$i<$len;$i++)
            {
                echo $arr[$i],"<br><br>";
            }
        ?>
    </body>
</html>