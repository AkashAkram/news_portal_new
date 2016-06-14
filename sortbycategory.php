<?php
/**
 * Created by PhpStorm.
 * User: akash
 * Date: 03-May-16
 * Time: 12:37 PM
 */

//echo $_GET['cat_id'];
include "header.php";
//include('Model/SelectClass.php');

$select = new Select();
$sql1 =  "SELECT * FROM articles WHERE `category_id` = '".$_GET['cat_id']."' ORDER BY id DESC ";
$rows = $select->SelectRow($sql1);

$sql4 =  "SELECT * FROM  `categories` WHERE `id` = '".$_GET['cat_id']."' ORDER BY id DESC ";
$category = $select->SelectRow($sql4);
?>

<div class="col-md-2">
</div>
<div class="col-md-8">
    <div class="well">
        <div align="right">
            <a class="btn-close hover-animate" href="http://localhost/xmp/news_portal/"></a>
        </div>
        <h1>All News in <?php echo $category[0]['name'] ?></h1>
        <hr>
    </div>
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
        </h2><br><br>
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



<div class="col-md-2">
</div>