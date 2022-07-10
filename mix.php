<?php

use function Matrix\multiply;

if(isset($_POST["submit"])){

    $callmelater = function ($val , $i){
        return  $val + $i; 
    };
    
        $multiply = function ($x, $y) {
            return $x * $y;
    };
            $number1 = $_POST['number1'];
            $number2 = $_POST['number2'];
            echo $number1 + $number2;
            echo multiply($number1,$number2);

}


?>
<!-- <a href="<?php //echo $_SERVER['PHP_SELF']; ?>" onclick="xhsgsh(x,y)">click</a>

<script>
<?php //$result = $multiply(1,2); ?>
function xhsgsh(x,y){
    console.log(<?php //echo $result; ?>);
    console.log(x + y );
}

xhsgsh(2,3);
</script> -->
<br>
<br>
<br>
<br>
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="number" name="number1" value="number1" placeholder="number1"><br>
<input type="number" name="number2" value="number2" placeholder="number2"><br>
<input type="submit" name="submit" value="submit">
</form>


<div id="container">nada</div>