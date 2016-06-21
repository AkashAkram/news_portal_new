

		


        <script src="resource/js/jquery.min.js"></script>
        <script type="text/javascript" src="resource/js/move-top.js"></script>
        <script type="text/javascript" src="resource/js/easing.js"></script>

        <script src="resource/js/jquery.easydropdown.js"></script>
        <script src="resource/js/scripts.js" type="text/javascript"></script>
     
        <script src="resource/js/easyResponsiveTabs.js" type="text/javascript"></script>

   	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#horizontalTab').easyResponsiveTabs({
                                type: 'default', //Types: default, vertical, accordion           
                                width: 'auto', //auto or any width like 600px
                                fit: true   // 100% fit in a container
                            });
                        });
                       </script>    
<!-- start-smoth-scrolling -->

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){     
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
<!-- slider -->
        <script src="resource/js/responsiveslides.min.js"></script>
        <script>
            // You can also use "$(window).load(function() {"
            $(function () {
              $("#slider").responsiveSlides({
                auto: true,
                manualControls: '#slider3-pager',
              });
            });
          </script>


				                 <script>
                                        $("span.menu").click(function(){
                                            $(" ul.nav").slideToggle("slow" , function(){
                                            });
                                        });
                                    </script>




                                    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } 
                                    </script>




</body>
</html>



