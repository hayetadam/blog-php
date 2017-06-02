<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>delete.php</title>
</head>
<body>
    <?php
   $var=$_GET["fileName"];
   unlink('posts/'.$var);
   ?>
   <script>
       location.href="index.php";
       </script>
</body>
</html>