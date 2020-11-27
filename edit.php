<?php
$id=$_GET['ID'];

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070070_test', 'MESjmr18', 'it63070070_1', 3306);




$product = $_POST['Product'];
$price = $_POST['Price'];
$discount = $_POST['Discount'];
$total = $_POST['Price']-($_POST['Price']*$_POST['Discount']/100);


$sql = "UPDATE newtable SET Product='$product', Price='$price', Discount='$discount', Total='$total' WHERE ID='$id'"; 
if (mysqli_query($conn, $sql)) {
    header("Location: index.php"); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
  
mysqli_close($conn);
?>