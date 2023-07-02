<?php
$sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    $num = mysqli_num_rows($result);
    echo $num;
    echo " records found in the DataBase<hr>";

    while($row = mysqli_fetch_assoc($result)){
        // echo var_dump($row);
        echo "Name: ".$row['name'] ."<br>Email: ". $row['email'] ."<br>Phone Number: ". $row['phone'] ."<br>Register Date: ". $row['date'];
        echo "<hr>";
    }
?>