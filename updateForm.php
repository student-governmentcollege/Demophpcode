<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'chandrashekhar');
$q="select * from data";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data Record</title>
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
 <h1>Data Record Management</h1>   
 <hr>
 <form action="update.php" method="post">
 <table id="view">
 <tr>
 <th>Data Id</th>
 <th>Title</th>
 <th>Price</th>
 <th>Author</th>
 </tr> 
 <?php
for ($i=1; $i<=$num ; $i++) 
 {
     $row=mysqli_fetch_array($result);
 
 ?>
 <tr>
 <td><?php echo $row['ID'];?>
<input type="hidden" name="ID<?php echo $i; ?>" value="<?php echo $row['ID'];?>" /></td>
 <td><input type="text" name="title<?php echo $i; ?>" value="<?php echo $row['title'];?>"/></td>
 <td><input type="text" name="price<?php echo $i; ?>" value="<?php echo $row['price'];?>"/></td>
 <td><input type="text" name="author<?php echo $i; ?>" value="<?php echo $row['author'];?>"/></td>
 
 </tr>
 
 <?php
 
 }

?>
  <tr>
 <td colspan="4"><input type="submit" id="button" value="Update" /></td>
 </tr>
 </table>
 </form>
 </body>
 </html>