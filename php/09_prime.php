<html>
    <head>
        <title>PRIME NUMBER</title>
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
                    $n=0;

                    for($i=2;$i<$num;$i++)
                    {
                        if(($num%$i)==0)
                        {
                            $n=1;
                            break;
                        }
                    }

                    if($n==0)
                    {
                        echo $num," IS A PRIME NUMBER";
                    }
                    else
                    {
                        echo $num," IS NOT A PRIME NUMBER";
                    }
                }
            ?>
        </center>
    </body>
</html>