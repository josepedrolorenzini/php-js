<?php

if(isset($_POST['submit'])){
$username = $_POST['username'];
$password = $_POST['password'];
echo $username . " "  .  $password;
}

$id = $_GET['id'];
echo $id++;
// if(isset($_GET['click'])){
//     return $id++;
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


   <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" placeholder="username" name="username">
    <input type="password" placeholder="Password" name="password">
    <br>
    <input type="submit" name="submit" value="Submit">
   </form> 
   <!-- <a href="<?php //$_SERVER['PHP_SELF'];?>?id=$id">click</a> -->
   <!-- <a name="click" href="<?php // echo $_SERVER['PHP_SELF'].'?id='.$id;?>" id="click">click</a>
   <p id="displayid"><?php // echo $id ?></p> -->

     <a href="<?php echo $_SERVER['PHP_SELF'].'?id='.$id;?>" id="click" onclick="increment()">click</a>

     <script>
     <?php $id; 
     $text = "hello world"; ?>
        function increment(){
           console.log(<?php echo $id ;?>) ;
            
        }
        increment();
       alert("<?php echo $id;?>");
       alert("<?php echo $text;?>");
</script>

</body>
</html>
