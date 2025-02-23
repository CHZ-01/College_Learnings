<html>
    <head>
        <title>SUM OF DIGITS</title>
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
                    $dig=0;
                    $sum=0;
                    $len=strlen($num);
                    for($i=0;$i<=$len;$i++)
                    {
                        $dig=$num%10;
                        $sum+=$dig;
                        $num=$num/10;
                    }
                    echo "SUM OF DIGITS: ",$sum;
                }
            ?>
        </center>
    </body>
</html>