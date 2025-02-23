<html>
    <head>
        <title>TABLE INSERT</title>
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
                ROLL NUMBER: <input type="phone" name="rno" required>
                <br><br>
                NAME: <input type="text" name="name" required>
                <br><br>
                MARK: <input type="phone" name="mark" required>
                <br><br>
                <button type="submit" name="submit">SUBMIT</button>
                <br>
            </form>
            <?php
                if(isset($_POST['submit']))
                {
                    $rno=$_POST['rno'];
                    $name=$_POST['name'];
                    $mark=$_POST['mark'];
                    
                    $con=mysqli_connect("localhost","root","","exm");

                    $ins="INSERT INTO student(rno,name,mark) VALUES('$rno','$name','$mark')";
                    $qry=mysqli_query($con,$ins);

                    if($qry)
                    {
                        echo "DATA ENTERED SUCCESSFULLY";
                    }
                    else
                    {
                        echo "DATA ENTER ERROR";
                    }
                }
            ?>
        </center>
    </body>
</html>