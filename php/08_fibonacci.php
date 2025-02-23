<html>
    <head>
        <title>FIBONACCI</title>
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
            <h1>FIBONACCI SERIES</h1>
            <h2>FIRST 12 NUMBERS</h2>
            <?php
                $num1=0;
                $num2=1;                
                $fibo=0;

                echo "0<br>1<br>";

                $num=0;

                while($num<10)
                {
                    $fibo=$num1+$num2;
                    echo $fibo,"<br>";
                    $num1=$num2;
                    $num2=$fibo;
                    $num++;
                }
            ?>
        </center>
    </body>
</html>