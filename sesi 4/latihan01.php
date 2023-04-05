<?php
$usr ="";
$ps ="";
if(isset($_GET['txuser'])){
   $usr = $_GET['txuser'];
   $ps = $_GET['txpassword'];
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Menggunakan methode GET</title>
</head>
<body>
    
      <Form method="GET" action="latihan01.php">

     <div>
        user name
        <input type="text" name="txuser"required>
     </div>

    <div>
        password
        <input type="password" name="txpassword"required>
     </div>

      <div>
        <button type="submit">login </button>
     </div>
       </form>

       <div>
        <pre>
            user name: <?=$usr?>
            password : <?=$ps?>
        <pre>

       </div>
</body>
</html>