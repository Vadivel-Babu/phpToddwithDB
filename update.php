<?php
include 'DB.php';
extract($_REQUEST);

?>
<html>
 <body>

 <?php 
 $query = "SELECT * FROM todo WHERE id=$id";
 $res = $connection ->query($query);
 if(mysqli_num_rows($res) > 0){
 ?>
 <form action="create.php" method="post">
    <?php while($row = mysqli_fetch_assoc($res)){ ?>
        <h1><?php $row['id'] ?></h1>
        <input type="text" name='id' value="<?= $row['id'] ?>" readonly=""><br><br>
     <input type="text" name="lastname" id="" value="<?=$row['firstname']?>"><br><br>
     <input type="text" name="name" id="" value="<?=$row['lastname']?>">
     <button type="submit" id="" name="update" value="edit">update</button>
     </form>
    <?php }} ?>
 </body>
</html>


