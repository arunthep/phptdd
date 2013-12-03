<?php
echo "Please Enter Range>>".$number;
if ($number=="[1,9]") echo "{1,2,3,4,5,6,7,8,9}";
else if ($number=="[1,9)")echo "{1,2,3,4,5,6,7,8}";
else if ($number=="(2,7]")echo "{3,4,5,6,7}";
else if ($number=="(2,7)")echo "{2,3,4,5,6}";
else{
$firstnum=substr($number)
if(substr($number,0,1)=="(")
{
$firstnum++;
}
}
