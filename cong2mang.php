<?php
$a = array(344,224,223,7737,9922,-828);
$b = array(-344,-324,123,773,-9922,828);
$m = array(1, 2, 3, 4, 5, 6);
$n = array(1, 2, 3, 4, 6);

function add_array($a, $b) {
    if (count($a) == count($b)) {
        $c = array_merge($a, $b);
        return array_sum($c);
    } 
    else {
        return "Lỗi";
    }
}
echo ("Tổng 2 mảng a và b:  ");
print_r(add_array($a, $b));
echo "<br>";
echo ("Tổng 2 mảng m và n: ");
print_r(add_array($m, $n));
?>