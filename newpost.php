<?php
//session_start();

include('header.php');

include('Model/SelectClass.php');
include('Model/InsertClass.php');


$insert = new Insert();
$select = new Select();


?>

<div class="col-md-8">
    <div class="panel panel-default">
        <div class="panel-heading"><h4>Create New Blog</h4></div>

        <div class="panel-body">

            <div>
                <form class="form-horizontal" name="new" action="Controller/newpostController.php" role="form" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="col-md-4 control-label">Title</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="" name="title" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Category</label>
                        <div class="col-md-6">
<!--       -->
                            <select name="category_id" id="" class="form-control">
                                <?php
                                $sql =  "SELECT * FROM categories";
                                $rows = $select->SelectRow($sql);
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
                            <input type="file" class="" name="image">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-4 control-label">Article</label>
                        <div class="col-md-6">
                            <textarea  class="post"  class="form-control" name="body" required></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <input type="submit" class="btn btn-primary" id="postButton" name="postButton" value="post">
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