


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$id = $_GET['id'];
echo "the id is:" . $id++ ;
//echo  $id++;
?>
   <!-- <a href="<?php //$_SERVER['PHP_SELF'];?>?id=$id">click</a> -->
   <!-- <a name="click" href="<?php // echo $_SERVER['PHP_SELF'].'?id='.$id;?>" id="click">click</a>
   <p id="displayid"><?php // echo $id ?></p> -->
        <br>
     <a href="<?php echo $_SERVER['PHP_SELF'].'?id='.$id;?>" id="click" onclick="increment()">click</a>
    
     <script>
     <?php $id; 
     $text = "hello world"; ?>
        function increment(){
           console.log(<?php echo $id ;?>) ;
            
        }
        increment();
    //    alert("<?php echo $id;?>");
    //    alert("<?php echo $text;?>");
</script>

</body>
</html>
