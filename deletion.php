<?php
$size=sizeof($_POST);
$j=1;
for($i=1;$i<=$size;$i++,$j++)
{
    $index="b".$j;
    if(isset($_POST[$index]))
    $id[$i]=$_POST[$index];
    else
    $i--;
}
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'chandrashekhar');
for($k=1;$k<=$size;$k++)
{
    $q="delete from data where id=".$id[$k];
    mysqli_query($con,$q);
    
}
mysqli_close($con);
header('location:home.php');
?>