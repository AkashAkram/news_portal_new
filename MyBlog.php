
<?php


include('header.php');
include "Controller/myblogController.php";

if(empty($_SESSION))
    header("Location: index.php");


?>

<div class="col-md-8">

    <?php
    foreach ($rows as $row)
    {
        $select = new Select();

        $sql2 = "SELECT * FROM users WHERE `id` = '".$row['author_id']."'";
        $author = $select->SelectRow($sql2);

        $sql3 = "SELECT * FROM categories WHERE `id` = '".$row['category_id']."'";
        $category = $select->SelectRow($sql3);
        ?>

        <div class="well">
            <h2>
                <a href="post.php?id=<?php echo $row["id"]?>"> <?php echo $row["title"] ?></a>
            </h2>
            <p >
                by <a href="sortbyuser.php?user_id=<?php echo $author[0]['id'] ?>"><?php echo $author[0]['name'] ?></a> |
                Category <a href="sortbycategory.php?cat_id=<?php echo $category[0]['id'] ?>"><?php echo $category[0]['name'] ?></a> |
                <span class="glyphicon glyphicon-time"></span> <?php echo $row['created_at'] ?>

            </p>

            <div align="right">

                <?php
                if(!empty($_SESSION)){
                    if($row['author_id']==$_SESSION['id']){ ?>
                        <a href="update.php?post_id=<?php echo $row['id'] ?>">update</a> |
                        <a href="Controller/deleteController.php?delete_post=<?php echo $row['id'] ?>&author_id=<?php echo $row['author_id'] ?>">Delete</a>
                        <br><br>
                    <?php    }
                }
                ?>

            </div>

            <a href="post.php?id=<?php echo $row["id"]?>">
                <img class="img-responsive my-image " src="resource/images/<?php echo $row['cover'] ?>" alt="">
            </a>


            <br>
            <p class="well-p"><?php echo substr($row['body'],0,500) ?><br><br>
                <a class="btn btn-primary" href="post.php?id=<?php echo $row["id"]?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>


    <?php } ?>

</div>


<?php //include('footer.php'); ?>
