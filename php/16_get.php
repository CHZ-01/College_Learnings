<html>
    <head>
        <title>GET METHOD</title>
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
            <form method="GET">
                ENTER A TEXT: <input type="text" name="txt" required>
                <br><br>
                <button type="submit" name="submit">SUBMIT</button>
                <br>
            </form>
            <?php
                if(isset($_GET['submit']))
                {
                    $txt=$_GET['txt'];
                    echo "ENTERED TEXT: ",$txt;
                }
            ?>
        </center>
    </body>
</html>