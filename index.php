
<?php


    include('header.php');
    include "Controller/indexController.php";

?>

<div class="col-md-8">

<?php
foreach ($rows as $row)
{

    $sql2 = "SELECT * FROM users WHERE `id` = '".$row['author_id']."'";
    $author = $select->SelectRow($sql2);
    ?>

    <div class="well">
        <h2>
            <a href="post.php?id=<?php echo $row["id"]?>"> <?php echo $row["title"] ?></a>
        </h2>
        <p >
            by <a href="/"><?php echo $author[0]['name'] ?></a> |
            <span class="glyphicon glyphicon-time"></span> <?php echo $row['created_at'] ?>

        </p>

        <div align="right">

        <?php
            if(!empty($_SESSION)){
                if($row['author_id']==$_SESSION['id']){ ?>
                    <a href="update.php?post_id=<?php echo $row['id'] ?>">update</a> |
                    <a href="delete.php?post_id=<?php echo $row['id'] ?>">Delete</a>
                    <br><br>
        <?php    }
            }
        ?>

        </div>

        <a href="post/">
            <img class="img-responsive my-image " src="resource/images/<?php echo $row['cover'] ?>" alt="">
        </a>


        <br>
        <p class="well-p"><?php echo substr($row['body'],0,500) ?><br><br>
            <a class="btn btn-primary" href="post.php?id=<?php echo $row["id"]?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>


    <?php } ?>

</div>


    <?php include('footer.php'); ?>
