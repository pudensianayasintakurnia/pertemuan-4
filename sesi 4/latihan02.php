<?php
$usr ="";
$ps ="";
$eusr ="";
$eps ="";
if(isset($_POST['txuser'])){
   $usr = $_POST['txuser'];
   $ps = $_POST['txpassword'];

   if ($usr== ""){
      $eusr = "<div style='color: red;font-size: 9px;'>user name masih kosong </div>";

     
   }
   if ($ps== ""){
    $eps = "<div style='color: red;font-size: 9px;'>user name masih kosong </div>";
   
  }
}   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Menggunakan methode POST</title>
</head>
<body>
    
      <Form method="POST" action="latihan02.php">

     <div>
        user name
        <input type="text" name="txuser">
        <?=$eusr;?>
     </div>

    <div>
        password
        <input type="password" name="txpassword">
        <?=$eusr;?>
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