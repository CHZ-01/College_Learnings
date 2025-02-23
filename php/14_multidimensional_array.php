<html>
    <head>
        <title>MULTIDIMENSIONAL ARRAY</title>
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
            $arr=array(array("retro","20","bca"),
                       array("dark","40","bca"),
                       array("ghost","247","bca"));
            
            for($row=0;$row<3;$row++)
            {
                echo "<br><br>ROW ",$row,"<br>";
                for($col=0;$col<3;$col++)
                {
                    echo $arr[$row][$col],",<br>";
                }
            }
        ?>
    </body>
</html>