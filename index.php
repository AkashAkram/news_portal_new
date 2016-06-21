<?php
    include('header.php');
    include "Controller/indexController.php";
?>
   
               
                            <div class="banner-middle">
                                <!-- banner-bottom-grids -->
                                <div class="banner-bottom-grids">
                                    <!-- banner-bottom-left -->
                                    <div class="col-md-8 banner-bottom-left">
                                        <div class="banner-bottom-left-grids">
                                            
                                           <!--slider-->
                                           <?php include "includes/slider.php" ?>

                                            <div class="clearfix"> </div>
                                            <hr>
                                        </div>



                                        <!-- post -->
                                        <div class="post">
                            <div class="content_top">
                                <div class="heading">
                                    <h3>Latest</h3>
                                </div>
                                <div class="see">
                                    
                                </div>
                                <div class="clear"></div>
                            </div>
                                   <div class="row panel-wrap">
                                               
                                    <?php 
                            $sql4 = "SELECT * FROM `articles` ORDER BY id DESC LIMIT 4";
                           
                            $articles = $crud->SelectRow($sql4); 
                                           
                            foreach ($articles as $art) { ?>
                                            <div class="panel-grid ">
                                                
                                                <div class=" post-right">

                                                    <div class="">
                                                        <a href="post.php?id=<?php echo $art["id"]?>">
                                                        <img src="resource/images/<?php echo $art['cover']; ?>" alt="" /></a>
                                                    </div>

                                                    <h4><a href="post.php?id=<?php echo $art["id"]?>"><?php echo $art["title"]?></a></h4>
                                                    <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                    <p class="text"><?php echo substr($art['body'],0,100) ?>...</p>
                                                </div>
                                            </div>

                                            <?php } ?>
                            </div>
                                       


                                            <!--category-->
                            <?php foreach ($categories as $cat) { ?>
                               
                                    
                                    
                                            
                    <div class="content_top">
                        <div class="heading">
                            <h3><?php echo $cat['name'] ?></h3>
                        </div>
                        <div class="see">
                            <p><a href="sortbycategory.php?cat_id=<?php echo $cat['id'] ?>">See all Products</a></p>
                        </div>
                        <div class="clear"></div>
                    </div>


                        <div class="row panel-wrap">

                            <?php 
                            $sql3 = "SELECT * FROM `articles` where category_id = '".$cat['id']."' ORDER BY id DESC LIMIT 4";
                            // WHERE 'category_id' = '".$cat['id']."' ";
                            // ORDER BY id DESC";
                            $articles = $crud->SelectRow($sql3); 
                                            //for ($i=0; $i < 4; $i++) { 
                            foreach ($articles as $art) {
                                # code...
                            ?>
                                            <div class="panel-grid ">
                                                
                                                <div class=" post-right">

                                                    <div class="">
                                                        <a href="post.php?id=<?php echo $art["id"]?>">
                                                        <img src="resource/images/<?php echo $art['cover']; ?>" alt="" /></a>
                                                    </div>

                                                    <h4><a href="post.php?id=<?php echo $art["id"]?>"><?php echo $art["title"]?></a></h4>
                                                    <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                    <p class="text"><?php echo substr($art['body'],0,100) ?>...</p>
                                                </div>
                                            </div>

                                            <?php } ?>
                            </div>
                                       

                            <?php } ?>


                                            
                                        </div>





                                        
                                    </div>











                                    <div class="col-md-4 banner-bottom-right">
                                        <div class="banner-bottom-left-grids">

                                        <?php include 'includes/sidebar.php'; ?>


                                        </div>
                                    </div>
                                    <!-- banner-bottom-right -->
                                    <div class="clearfix"> </div>
                                    
                  





                                </div>
                                                <!-- //banner-bottom-grids -->
                            </div>







                        </div> <!-- banner-grids -->
                </div><!-- banner -->
            </div><!--banner-bg-->
            </div> <!--banner-bottom-bg-->
        </div> <!--bg-banner-->

    </div> <!--container-->
</div> <!--home-->


    <?php include('footer.php'); ?>
