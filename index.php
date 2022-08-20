<?php
 include "DB.php";
?>

<html >
<body>
    <style>
        .items{
            min-width: 50%;
            width: 30%;
            background-color: black;
            color: white;
            padding: 1rem;
            margin-bottom: 0.5rem;
        }
        a{
            color: white;
            text-decoration: none;
        }
        button{
            cursor: pointer;
        }
    </style>
    <form action="create.php" method="post">
        <input type="text" name="lastname" id=""><br><br>
        <input type="text" name="name" id="">
        <button type="submit" id="4" name="submit">Submit</button>
    </form>
    <?php
    $query = "SELECT * FROM todo";
      $res = $connection ->query($query);
    ?>
    <?php foreach($res as $todo){?>
                <div class="items">
                  <h2 ><?php echo $todo['firstname']. " ".$todo['lastname']; ?> </h2>
                  <a href="update.php?id=<?= $todo['id']?>&submit=edit">Edit</a>
                  <a href="create.php?id=<?= $todo['id']?>&submit=delete">delete</a>
                </div>
            
     <?php } ?>

</body>
</html>
