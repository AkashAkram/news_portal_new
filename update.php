<?php
//session_start();

include('header.php');
include('Model/SelectClass.php');



$select = new Select();

$sql1 =  "SELECT * FROM categories";
$rows = $select->SelectRow($sql1);

$sql2 = "SELECT * FROM `articles` WHERE `id` = '".$_GET['post_id']."'";
$blog = $select->SelectRow($sql2);


//echo $blog[0]['author_id'];


if(empty($_SESSION) or $_SESSION['id']!=$blog[0]['author_id'])
{
    header("Location: index.php");
}

else{
    $_SESSION['post_id'] = $_GET['post_id'];
    echo $_SESSION['post_id'];
}

?>

    <div class="col-md-8">
        <div class="panel panel-default">
            <div class="panel-heading"><h4>Edit post</h4></div>

            <div class="panel-body">

                <div>
                    <form class="form-horizontal" name="new" action="Controller/updateController.php" role="form" method="POST" enctype="multipart/form-data">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Title</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" id="" name="title" value="<?php echo $blog[0]['title'] ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Category</label>
                            <div class="col-md-6">
                                <!--       -->
                                <select name="category_id" id="" class="form-control">
                                    <?php

                                    foreach($rows as $row){
                                        ?>
                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                                    <?php  } ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Cover</label>
                            <div class="col-md-6">
                                <img class="img-responsive" src="resource/images/<?php echo $blog[0]['cover'] ?>" alt="No Image">
                                <input type="file"   value=""  name="image">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Article</label>
                            <div class="col-md-6">
                                <textarea  class="post"  class="form-control" name="body" required><?php echo $blog[0]['body'] ?></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" class="btn btn-primary" id="postButton" name="update" value="post">
                            </div>
                        </div>

                    </form>
                </div>


            </div>
        </div>
    </div>

<?php include('footer.php'); ?>



<?php

?>