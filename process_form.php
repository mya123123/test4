<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = pg_connect("ec2-34-234-228-127.compute-1.amazonaws.com
dbname=da1elld1tbreo6 
user=fkbxrzlfibwcuz 
password=0445b45feb9e8a733c34a49b4df14da739767f25ddc4f401b45b69744093a68c");
 
// // Check connection
if($link === false){
    die("ERROR: Could not connect. ");
} else {
    echo " connection in herokuapp "
}
 
// // Escape user inputs for security
// $id = mysqli_real_escape_string($link, $_REQUEST['id']);
// $name = mysqli_real_escape_string($link, $_REQUEST['name']);
// $cat = mysqli_real_escape_string($link, $_REQUEST['cat']);
// $date = mysqli_real_escape_string($link, $_REQUEST['date']);
// $price = mysqli_real_escape_string($link, $_REQUEST['price']);
// $description = mysqli_real_escape_string($link, $_REQUEST['description']);
 
 
// // Attempt insert query execution
// $sql = "INSERT INTO Product (Id, Product_Name, Category, Date, Price, Descriptions) VALUES ('$id', '$name', '$cat','$date','$price','$description')";
// if(pg_query($link, $sql)){
//     echo "Records added successfully.";
// } else{
//     echo "ERROR: Could not able to execute $sql. " . pg_error($link);
// }
 
// Close connection
pg_close($link);
?>