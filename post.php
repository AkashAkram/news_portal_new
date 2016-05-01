
<?php


include('header.php');
include "Controller/postController.php";

?>

<div class="col-md-8">

    <?php

        $sql2 = "SELECT * FROM users WHERE `id` = '".$row[0]['author_id']."'";
        $author = $select->SelectRow($sql2);

        $sql3 = "SELECT * FROM categories WHERE `id` = '".$row[0]['category_id']."'";
        $category = $select->SelectRow($sql3);
        ?>

        <div class="well">
            <div align="right">
                <a class="btn-close hover-animate" href="../"></a>
            </div>
            <h2>
                <a href="post.php?id=<?php echo $row[0]["id"]?>"> <?php echo $row[0]["title"] ?></a>
            </h2>
            <p >
                by <a href="/"><?php echo $author[0]['name'] ?></a> |
                Category: <a href="/"><?php echo $category[0]['name'] ?></a> |
                <span class="glyphicon glyphicon-time"></span> <?php echo $row[0]['created_at'] ?>

            </p>

            <div align="right">

                <?php
                if(!empty($_SESSION)){
                    if($row[0]['author_id']==$_SESSION['id']){ ?>
                        <a href="update.php?post_id=<?php echo $row[0]['id'] ?>">update</a> |
                        <a href="Controller/deleteController.php?delete_post=<?php echo $row[0]['id'] ?>&author_id=<?php echo $row[0]['author_id'] ?>">Delete</a>
                        <br><br>
                    <?php    }
                }
                ?>

            </div>

            <a href="post.php?id=<?php echo $row[0]["id"]?>">
                <img class="img-responsive my-image " src="resource/images/<?php echo $row[0]['cover'] ?>" alt="">
            </a>


            <br>
            <p class="well-p"><?php echo $row[0]['body'] ?><br><br>
        </div>


</div>


<?php include('footer.php'); ?>
