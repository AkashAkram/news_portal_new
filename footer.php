<!--Main colomn div</div>-->

<!-- Sidebar Widgets-->
<div class="col-md-3">

    <!-- Blog Search well-custom -->
    <div class="well-custom">
        <h4>Blog Search</h4>
        <div class="input-group">
            <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                        </span>
        </div>
        <!-- /.input-group -->
    </div>

    <!-- Blog Categories well-custom-custom -->
    <div class="well-custom">
        <h4>Blog Categories</h4>


        <ul class="list-unstyled well-custom-list">
            <?php
            $select  = new Select();
            $sql =  "SELECT * FROM categories";
            $rows = $select->Select($sql);
            foreach($rows as $row){ ?>
                <li value=""><a href="category/<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></li>
            <?php  } ?>
        </ul>

        <!-- /.col-lg-6 -->


    </div>

    <!-- Side Widget well-custom -->
    <div class="">
        <br>
        <p> <center><a href="http://akashakram.xyz"><b>Akash Akram &copy; 2016</b></a></center> </p>
    </div>
</div>

</div>
</div>

<!-- JavaScript

 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</body>
</html>



