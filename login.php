<?php
include ('header.php');

    //session_start();

if(!empty($_SESSION))
    header("Location: index.php");
?>

    
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <?php
       
        
        ?>
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="Controller/loginController.php">

                            <div class="form-group">
                                <label class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" value="">

                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="password">

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary" name="login">
                                        <i class="fa fa-btn fa-sign-in"></i>Login
                                    </button>
                                    <span class="Password_recovery"><a href="/password_recovery">Forgot Password ?</a></span>
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