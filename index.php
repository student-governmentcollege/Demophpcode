<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertion Form</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
 <h1>Data Record Management</h1>   
 <hr>
 <form action="insertion.php" method="post">
 <center>
 <table id="a">
 <tr>
 <th>Title</th>
 <td><input type="text" name="title" required ></td>
 </tr>
 <tr>
 <th>Price</th>
 <td><input type="text" name="price" required></td>
 </tr>
 <tr>
 <th>Author</th>
 <td><input type="text" name="author" required></td>
 </tr>
 <tr>
 <th></th>
 <td><input type="submit" id="button" value="insert" required></td>
 </tr>
 </table>
</center>
 </form>
</body>
</html>