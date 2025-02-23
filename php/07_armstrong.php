<html>
    <head>
        <title>ARMSTRONG</title>
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
            <form method="POST">
                ENTER A NUMBER: <input type="phone" name="num" required>
                <br><br>
                <button type="submit" name="submit">SUBMIT</button>
                <br>
            </form>
            <?php
                if(isset($_POST['submit']))
                {
                    $num=$_POST['num'];
                    $len=strlen($num);
                    $sum=0;

                    for($i=0;$i<$len;$i++)
                    {
                        $sum+=pow($num[$i],$len);
                    }

                    if($num==$sum)
                    {
                        echo $num," IS ARMSTRONG";
                    }
                    else
                    {
                        echo $num," IS NOT ARMSTRONG";
                    }
                }
            ?>
        </center>
    </body>
</html>