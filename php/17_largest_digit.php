<html>
    <head>
        <title>LARGEST DIGIT</title>
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
                    $largest=0;
                    
                    while($num)
                    {
                        $dig=$num%10;
                        $largest=max($dig,$largest);
                        $num=$num/10;
                    }

                    echo "LARGEST DIGIT: ",$largest;
                }
            ?>
        </center>
    </body>
</html>