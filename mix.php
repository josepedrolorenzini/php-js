<?php
 
 $callmelater = function ($val , $i){
    return  $val + $i; 
};

    $multiply = function ($x, $y) {
        return $x * $y;
};


?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>" onclick="xhsgsh()">click</a>

<script>
<?php $result = $multiply(1,2); ?>
function xhsgsh(){
    console.log(<?php echo $result; ?>);
}

xhsgsh();

</script>
