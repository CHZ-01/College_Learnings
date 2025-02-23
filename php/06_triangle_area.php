<html>
    <head>
        <title>TRIANGLE AREA</title>
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
                HEIGHT: <input type="phone" name="h" required>
                <br><br>
                BASE: <input type="phone" name="b" required>
                <br><br>
                <button type="submit" name="submit">SUBMIT</button>
                <br>
            </form>
            <?php
                if(isset($_POST['submit']))
                {
                    $h=$_POST['h'];
                    $b=$_POST['b'];
                    $area=($h*$b)/2;
                    echo "AREA OF THE TRIANGLE: ",$area;
                }
            ?>
        </center>
    </body>
</html>