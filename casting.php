<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="" method="POST">
            <label for="name">name</label>
            <input type="text" name="name">
            <button type="submit">submit</button>
        </form>
        
        <script src="" async defer></script>
    </body>
</html>
<?php
    $name =$_POST["name"];
    
    echo "how are you" ." ". $name;
    
?>