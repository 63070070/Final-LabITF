<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'ihost.it.kmitl.ac.th', 'it63070070_test', 'MESjmr18', 'it63070070_1', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$product = $_POST['Product'];
$price = $_POST['Price'];
$discount = $_POST['Discount'];
$total = $_POST['Price']-($_POST['Price']*$_POST['Discount']/100);


$sql = "INSERT INTO newtable (Product , Price , Discount, Total) VALUES ('$product', '$price', '$discount', '$total')";


if (mysqli_query($conn, $sql)) {
    header('location: index.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
mysqli_close($conn);


?>