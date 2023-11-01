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
    <title>Delete Data Record</title>
    <link rel="stylesheet" href="./css/style.css"/>
</head>
<body>
 <h1>Data Record Management</h1>   
 <hr>
 <form action="deletion.php" method="post">
 <table id="view">
 <tr>
 <th>Data Id</th>
 <th>Title</th>
 <th>Price</th>
 <th>Author</th>
 <th>Select to delete</th>
 </tr> 
 <?php
for ($i=1; $i<=$num ; $i++) 
 {
     $row=mysqli_fetch_array($result);
 
 ?>
 <tr>
 <td><?php echo $row['ID'];?></td>
 <td><?php echo $row['title'];?></td>
 <td><?php echo $row['price'];?></td>
 <td><?php echo $row['author'];?></td>
 <td><input type="checkbox" value="<?php echo $row['ID'];?>" name="b<?php echo $i;?>"/></td>
 </tr>
 <?php
 }
?>
<tr>
     <td colspan="5"><input type="submit" id="button" value="Delete"/></td>
 </tr>
 </table>
</form>
 </body>
 </html>