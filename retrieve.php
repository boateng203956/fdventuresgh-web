<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "honey";

$conn = mysqli_connect($servername, $username, $password, $dbname);

    $result = mysqli_query($con, "SELECT * FROM hony");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if(mysqli_num_row(@result)>0){ 
    ?>
    <table>
        <tr>
            <td>Full Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Message</td>
        </tr>
    <?php
        $i=1;
        while($row = mysqli_fetch_array($result)){ 
    ?>

    <tr>
        <td><?php echo $row['full_name'];?></td>
        <td><?php echo $row['email'];?></td>
        <td><?php echo $row['phone'];?></td>
        <td><?php echo $row['messag'];?></td>
    </tr>
    <?php 
    $i++;
    }  
    ?>
    </table>
    <?php
    }else{
        echo "No result found";
    }
    ?>
</body>
</html>