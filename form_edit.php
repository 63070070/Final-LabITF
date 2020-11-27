<html>
<head>
    <title>Update Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta charset="utf-8">
</head>
<body>
<?php
$id=$_GET['ID'];
$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070070_test', 'MESjmr18', 'it63070070_1', 3306);
$res = mysqli_query($conn, "SELECT * FROM newtable WHERE id='$id'");
$row = mysqli_fetch_array($res)

?>
 
<div class="container-fluid">
    
        <form action = "edit.php?ID=<?php echo $row['id']; ?>" method = "post" id="CommentForm" class="form-group">
            Product:<br>
            <input type="text" name = "Product" id="idName" value="<?php echo "$row[Product]"; ?>"> <br>
            Price:<br>
            <input type="text" name = "Price" id="idComment" value="<?php echo "$row[Price]"; ?>"> <br>
            Discount:<br>
            <input type="text" name = "Discount" id="idLink" value="<?php echo "$row[Discount]"; ?>"> <br><br>
            <input type="submit" id="commentBtn"class="btn btn-outline-warning" value="Update">
        </form> 
    
</div>
</body>
</html>