<?php
$size=sizeof($_POST);
$records=$size/4;
for($i=1; $i<=$records ; $i++) 
{ 
    $index1="ID".$i;
    $ID[$i]=$_POST[$index1];
    $index2="title".$i;
    $title[$i]=$_POST[$index2];
    $index3="price".$i;
    $price[$i]=$_POST[$index3];
    $index4="author".$i;
    $author[$i]=$_POST[$index4];
    
}
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'chandrashekhar');
for ($i=1; $i<=$records ; $i++)
{ 
    $q="update data SET title='$title[$i]',price='$price[$i]',author='$author[$i]' where ID=$ID[$i]";
    mysqli_query($con,$q);
}

mysqli_close($con);
header('location:home.php');
?>

