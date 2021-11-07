<?php
$units = 50;

if($units <= 50 ){
$bill = $units*3.50;
echo 'your electricty bill is:'.' '.$bill.' '.'EGP';
}
elseif(($units > 50 ) && ($units <= 150)){
$bill = $units*4.00;
echo 'your electricty bill is:'.' '.$bill.' '.'EGP';
}
else{
$bill = $units*6.50;
echo 'your electricty bill is:'.' '.$bill.' '.'EGP';


}

?>