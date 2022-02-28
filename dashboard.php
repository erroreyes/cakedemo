<?php
include "connection.php";
$query = "SELECT * FROM ORDERCAKE1";
$reslt = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        table{
            width:90%;
            border:1px solid black;
            margin:auto;
        }
        td,th{
            border-bottom:1px solid black;
            text-align:center;
            border-right:1px solid black;
        }
        td{
            color:darkblue;
            padding: 10px;
        }
    </style>
</head>
<body>
    <!-- <div class="container"> -->
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>CUSTOMER NAME</th>
                <th>MOBILE</th>
                <th>EMAIL</th>
                <th>CATEGORY</th>
                <th>RATE</th>
                <th>QUANTITY</th>
                <th>TOTAL AMOUNT</th>
                <th>IMAGE</th>
                <th colspan="2">OPERATIOS</th>

            </tr>
        </thead>
        <tbody>
            <?php while($data = mysqli_fetch_assoc($reslt)){?>
            <tr>
                <td><?php echo $data['id'];?></td>
                <td><?php echo $data['custName'];?></td>
                <td><?php echo $data['mobile'];?></td>
                <td><?php echo $data['email'];?></td>
                <td><?php echo $data['listCake'];?></td>
                <td><?php echo $data['rate'];?></td>
                <td><?php echo $data['quntity'];?></td>
                <td><?php echo $data['totalAmt'];?></td>
                <td><?php echo $data['imgpath'];?></td>
                <td><a href="update.php?id=<?php echo $data['id'];?>" >Edit</a></td>
                <td><a href="delete.php?iddel=<?php echo $data['id'];?> ">Delete</a></td>

            </tr>
            <?php }?>
        </tbody>
    </table>
    <!-- </div> -->
</body>
</html>