<?php
include "connection.php";
$query = "SELECT * FROM ORDERCAKE1";
if (isset($_REQUEST['submit'])) {
if (!mysqli_query($conn, $query)) {
    $createtbl = "CREATE TABLE ORDERCAKE1(
        id int(10) auto_increment primary key,
        custName text,
        mobile int(10),
        email text,
        listCake text,
        rate int(10),
        quntity int(10),
        totalAmt int(60),
        imgpath longblob
    )";
    $tblchk = mysqli_query($conn, $createtbl);
    if (!$tblchk) {
        echo mysqli_error($conn);
    }
}
$err="";

    if(empty($_POST['custname']&&$_POST['mobile']&&$_POST['mobile']&& $_POST['email']&&$_POST['cake']&&$_POST['quantity'])){
        $err=" all value is required";
    }
    else{
    $cname = $_POST['custname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $list = $_POST['cake'];
    $rate = $_POST['rate'];
    $quantity = $_POST['quantity'];
    $image = $_POST['imgpath'];

    $insert = "INSERT INTO ORDERCAKE1(`custName`,`mobile`,`email`,`listCake`,`rate`,`quntity`,`totalAmt`,`imgpath`) VALUES('$cname','$mobile','$email','$list','$rate','$quantity','$total','$image')";
    $insertchk = mysqli_query($conn, $insert);
    if ($insert) {
       header("location:display.php");
    }
    else{
        echo mysqli_errno($conn);
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
         h1 {
            text-align: center;
            margin: 40px;
        }

        .container {
            width: 60%;
            border: 1px solid black;
            padding: 10px;
        }
        .error {
            color: brown;
        }
    
    </style>
</head>

<body>
    <h1>Order Form</h1>
<div class="container">
        <form method="POST" class="form-group">
        <span class="error">*<?php echo $err;?></span><br>
            <label>Customer Name :</label>
            <input type="text" name="custname" class="form-control"><br>
            <label>Mobile No :</label>
            <input type="text" name="mobile" class="form-control"><br>
            <label>Email :</label>
            <input type="text" name="email" class="form-control"><br>
            <div class="liststyle">
            <label>Cake List :</label>
            <select name="cake" class="form-group">
                <option value="vanila">VANILA </option>
                <option value="chocolate">CHOCOLATE</option>
                <option value="red valvet">RED VALVET</option>
                <option value="royal chocolate">ROYAL CHOCOLATE</option>
            </select>
            <label>Rate:</label>
            <select name="rate"class="form-group" >
                <option value="vanila">Rs.350</option>
                <option value="chocolate">Rs.350</option>
                <option value="red valvet">Rs.350</option>
                <option value="royal chocolate">Rs.350</option>
            </select>
            </div><br>
            <label>Quantity</label>
            <input type="text" name="quantity" class="form-control"><br>
            <label>Image</label>
            <input type="file" name="imgpath" class="form-control"><br>
            <input type="submit" name="submit" class="btn btn-info">
            <input type="reset" class="btn btn-danger">
        </form>
    </div>

</body>

</html>