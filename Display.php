<?php 
    include("Function/conn.php");

    $sql = "SELECT * FROM `wcatalog`";
    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <a href="uploads/<?php echo $row['fileName']; ?>" download="<?php echo $row['fileName']; ?>"><?php echo $row['fileName']; ?></a>
        <?php
    }
    }
?>