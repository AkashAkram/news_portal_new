
<?php
include "header.php";
include "Controller/myblogController.php";

?>

<div class="col-md-8">

    <?php
    if(empty($_SESSION)){
        echo "Nothing Found !";
    }
    else {
        foreach ($rows as $row) {

            $sql2 = "SELECT * FROM users WHERE `id` = '" . $row['author_id'] . "'";
            $author = $select->SelectRow($sql2);
            ?>

            <div class="well">
                <h2>
                    <a href="post/<?php ?>"><?php echo $row["title"] ?></a>
                </h2>
                <p>
                    by <a href="/"><?php echo $author[0]['name'] ?></a> |
                    <span class="glyphicon glyphicon-time"></span> <?php echo $row['created_at'] ?>

                </p>

                <div align="right">

                    <?php
                    if (!empty($_SESSION)) {
                        if ($row['author_id'] == $_SESSION['id']) { ?>
                            <a href="edit/post/<?php ?>">update</a> |
                            <a href="remove/post/<?php ?>">Delete</a>
                            <br><br>
                        <?php }
                    }
                    ?>

                </div>

                <a href="post/">
                    <img class="img-responsive my-image " src="resource/images/<?php echo $row['cover'] ?>" alt="">
                </a>


                <br>
                <p class="well-p"><?php echo substr($row['body'], 0, 500) ?><br><br>
                    <a class="btn btn-primary" href="../post/<?php ?>">Read More <span
                            class="glyphicon glyphicon-chevron-right"></span></a>
            </div>


        <?php }
    }
    ?>

</div>


<?php include('footer.php'); ?>
