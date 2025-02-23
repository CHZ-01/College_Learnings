<html>
    <head>
        <title>FILES</title>
        <style>
            body
            {
                margin: 0px;
                height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 30px;
            }            
        </style>
    </head>
    <body>
        <?php
            $file=fopen("file.txt","r") or die("ERROR: FILE NOT FOUND.");
            $read=fread($file,filesize("file.txt"));
            echo $read;
            fclose($file);
        ?>
    </body>
</html>