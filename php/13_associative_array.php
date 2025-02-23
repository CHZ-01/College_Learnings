<html>
    <head>
        <title>ASSOCIATIVE ARRAY</title>
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
            $arr=array("retro"=>"20","dark"=>"40","ghost"=>"247");
            
            foreach($arr as $k=>$v)
            {
                echo "KEY: ",$k,", VALUE: ",$v,"<br><br>";
            }
        ?>
    </body>
</html>