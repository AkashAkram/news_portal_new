<?php
include ('header.php');
//include ('Model/SelectClass.php');


if(empty($_SESSION))
    header("Location: index.php");
?>

    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
       
        
        ?>
                <div class="panel panel-default">
                    <div class="panel-heading">Profile</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="Controller/myprofileController.php">

                            <div class="form-group">
                                <label class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input type="name" class="form-control" name="name" required value="<?php echo $_SESSION['name']?>">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" required value="<?php echo $_SESSION['email']?>">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">New Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="con_password">

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-6">
                                    <input type="submit" class="btn btn-danger" value="Update Profile" name="updateprofile">

                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            
    <div class="col-md-2"></div>


<?php
include ('footer.php');
?>