<?php include "db.php";

$query="SELECT * FROM users ORDER BY id";
$run=$con->query($query);

while($row=$run->fetch_array()) :

    ?>
    <div id="chat_data">
        <span style="color:green;"> <?php echo $row['nmes'];   ?> </span>:
        <span style="color: brown;"> <?php echo $row['msg'];  ?> </span>
        <span style="float: right;"> <?php echo formatdate($row['date']);  ?> </span>
    </div>

<?php endwhile; ?>