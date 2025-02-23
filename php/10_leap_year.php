<html>
    <head>
        <title>LEAP YEAR</title>
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
                ENTER A YEAR: <input type="phone" name="year" required>
                <br><br>
                <button type="submit" name="submit">SUBMIT</button>
                <br>
            </form>
            <?php
                if(isset($_POST['submit']))
                {
                    $year=$_POST['year'];
                    
                    if(($year%4)==0 && $year%100!=0 && $year%400!=0)
                    {
                        echo $year," IS A LEAP YEAR";
                    }
                    else
                    {
                        echo $year," IS NOT A LEAP YEAR";
                    }
                }
            ?>
        </center>
    </body>
</html>