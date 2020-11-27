<html>
<head>
    <title>ITF Lab</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="utf-8">
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070070_test', 'MESjmr18', 'it63070070_1', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM newtable');
?>
<table width="1000" border="1" class="table table-striped table-dark">
    <tr>
    <th width="500"> <div align="center">Product</div></th>
    <th width="150"> <div align="center">Price </div></th>
    <th width="150"> <div align="center">Discount</div></th>
    <th width="150"> <div align="center">Total</div></th>
    <th width="300"> <div align="center">Action</div></th>
  </tr>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td class="text-success"><?php echo $Result['Product'];?></div></td>
    <td class="text-success"><?php echo $Result['Price'];?></td>
    <td class="text-success"><?php echo $Result['Discount'];?></td>
    <td class="text-success"><?php echo $Result['Total'];?></td>
    <td><a href="form_edit.php?ID=<?php echo $Result['id']?>" class="btn btn-outline-warning">แก้ไข</a></td>
  </tr>
<?php
}
?>
</table>
<tr><button type="button" class="btn btn-outline-success" onclick="location.href='form_add.html'">เพิ่ม</button></tr>
<?php
mysqli_close($conn);
?>
</body>
_</html>