<html>
    <head>
        <title>SUM</title>
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
                FIRST NUMBER: <input type="phone" name="num1" required>
                <br><br>
                SECOND NUMBER: <input type="phone" name="num2" required>
                <br><br>
                <button type="submit" name="submit">SUBMIT</button>
                <br>
            </form>
            <?php
                if(isset($_POST['submit']))
                {
                    $num1=$_POST['num1'];
                    $num2=$_POST['num2'];
                    $sum=$num1+$num2;
                    echo "SUM: ",$sum;
                }
            ?>
        </center>
    </body>
</html>