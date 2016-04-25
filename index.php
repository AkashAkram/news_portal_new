
<?php

    include('Model/SelectClass.php');
    include('header.php');

    $select = new Select();
    $sql1 =  "SELECT * FROM articles ORDER BY id DESC ";
    $rows = $select->Select($sql1);



?>

<div class="col-md-8">

<?php
foreach ($rows as $row)
{

    $sql2 = "SELECT * FROM users WHERE `id` = '".$row['author_id']."'";
    $author = $select->Select($sql2);
    ?>

    <div class="well">
        <h2>
            <a href="post/<?php  ?>"><?php echo $row["title"] ?></a>
        </h2>
        <p >
            by <a href="/"><?php echo $author[0]['name'] ?></a> |
            <span class="glyphicon glyphicon-time"></span> <?php echo $row['created_at'] ?>



        </p>

        <div align="right">
          <!--
            @if(!Auth::guest())
            @if($blog->author_id == Auth::user()->id)




              @endif
            @endif

          -->

            <a href="edit/post/<?php  ?>">update</a> |
            <a href="remove/post/<?php  ?>">Delete</a>


        </div>

        <a href="post/">
            <img class="img-responsive my-image " src="resource/images/<?php echo $row['cover'] ?>" alt="">
        </a>


        <br>
        <p class="well-p"><?php echo substr($row['body'],0,500) ?><br><br>
            <a class="btn btn-primary" href="../post/<?php  ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>


    <?php } ?>

</div>


    <?php include('footer.php'); ?>
