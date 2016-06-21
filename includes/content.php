
    <?php

$sql2 = "select * from `articles` order by id DESC"; 
$article_rows = $crud->SelectRow($sql2);
foreach ($article_rows as $row)
{
    

    $sql3 = "SELECT * FROM users WHERE `id` = '".$row['author_id']."'";
    $author = $crud->SelectRow($sql3);
    $sql4 = "SELECT * FROM categories WHERE `id` = '".$row['category_id']."'";
    $category = $crud->SelectRow($sql4);

    ?>

    <div class="panel-grid">
        <h2>
            <a href="post.php?id=<?php echo $row["id"]?>"> <?php echo $row["title"] ?></a>
        </h2>
        <p >
            Reported by: <a href="sortbyuser.php?user_id=<?php echo $author[0]['id'] ?>"><?php echo $author[0]['name'] ?></a> <br>
            Category <a href="sortbycategory.php?cat_id=<?php echo $category[0]['id'] ?>"><?php echo $category[0]['name'] ?></a> <br>
            <span class="glyphicon glyphicon-time"></span> <?php echo $row['created_at'] ?><br>


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
        <p class="well-p"><?php echo substr($row['body'],0,200) ?><br><br>
            <a class="btn btn-primary" href="post.php?id=<?php echo $row["id"]?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

    </div>


    <?php } ?>
