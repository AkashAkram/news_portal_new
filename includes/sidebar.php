                                        <div class="search">
                                            <form>
                                                <input type="text" value="to search, type and hit enter" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'to search, type and hit enter';}" required="">
                                            </form>
                                        </div>

                                            
                                        <div class="">
                                            <div class="product-tabs">
                                            <!--Horizontal Tab-->


                                                <div id="horizontalTab">
                                                    

                                                    <div id="tab-1" class="product-complete-info">
                                                    <br>
                                                    <h2>Most Recent</h2>
                                                        <div class="">
                                                            <?php for ($i=0; $i < 3; $i++) { ?>
                                                            <div class="blog-grids">
                                                                <div class="blog-grid-left">
                                                                    <img src="resource/images/1b.jpg" class="img-responsive" alt="">
                                                                </div>
                                                                <div class="blog-grid-right">
                                                                    <a href="single.html">Little Invaders Fly Fishers Serving as Transports for Noxious </a>
                                                                    <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                                </div>
                                                                <div class="clearfix"> </div>
                                                            </div>
                                                            
                                                            <?php } ?>
                                                        </div>
                                                    </div>

                                                    <div class="clearfix"> </div>

                                                    <div id="tab-2" class="product-complete-info">
                                                    <br>
                                                    <h2>Trending</h2>
                                                        <div class="">
                                                            <?php for ($i=0; $i < 3; $i++) { ?>                            
                                                            <div class="blog-grids">
                                                                <div class="blog-grid-left">
                                                                    <img src="resource/images/5b.jpg" class="img-responsive" alt="">
                                                                </div>
                                                                <div class="blog-grid-right">
                                                                    <a href="single.html">Invaders Little Fly Fishers Serving as Transports for Noxious  </a>
                                                                    <p class="comments">August 4 2010, <a href="#">8 Comments</a></p>
                                                                </div>
                                                                <div class="clearfix"> </div>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                    </div>


                                    
                                                </div>


                                                
                                                
                                                <!-- Responsive Tabs JS -->
                                                <script src="resource/js/jquery.responsiveTabs.js" type="text/javascript"></script>
                                            
                                                <script type="text/javascript">
                                                    $(document).ready(function () {
                                                        $('#horizontalTab').responsiveTabs({
                                                            rotate: false,
                                                            startCollapsed: 'accordion',
                                                            collapsible: 'accordion',
                                                            setHash: true,
                                                            disabled: [4,5],
                                                            activate: function(e, tab) {
                                                                $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                                                            }
                                                        });
                                            
                                                        $('#start-rotation').on('click', function() {
                                                            $('#horizontalTab').responsiveTabs('active');
                                                        });
                                                        $('#stop-rotation').on('click', function() {
                                                            $('#horizontalTab').responsiveTabs('stopRotation');
                                                        });
                                                        $('#start-rotation').on('click', function() {
                                                            $('#horizontalTab').responsiveTabs('active');
                                                        });
                                                        $('.select-tab').on('click', function() {
                                                            $('#horizontalTab').responsiveTabs('activate', $(this).val());
                                                        });
                                            
                                                    });
                                                </script>



                                            </div>  
                                        </div>


                                        <div class="sponsors">
                                            <div class="sponsors-grids">
                                                <div class="sponsors-grid-left">
                                                    <div class="sponsors-grid">
                                                        <img src="images/125x125.gif" class="img-responsive" alt="">
                                                    </div>
                                                </div>
                                                <div class="sponsors-grid-left">
                                                    <div class="sponsors-grid">
                                                        <img src="images/125x125.gif" class="img-responsive" alt="">
                                                    </div>
                                                </div>
                                                    <div class="clearfix"> </div>
                                            </div>
                                        </div>



                                        <div class="lor-ip">
                                            <div class="lor-ip">
                                                <div class="fb-page" data-href="https://www.facebook.com/w3layouts" data-hide-cover="true" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/facebook"><a href="https://www.facebook.com/w3layouts">Facebook</a></blockquote></div></div>
                                                    <div id="fb-root"></div>
                                                        <script>(function(d, s, id) {
                                                          var js, fjs = d.getElementsByTagName(s)[0];
                                                          if (d.getElementById(id)) return;
                                                          js = d.createElement(s); js.id = id;
                                                          js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";
                                                          fjs.parentNode.insertBefore(js, fjs);
                                                        }(document, 'script', 'facebook-jssdk'));</script>
                                            </div>
                                                        <div class="clearfix"> </div>
                                            <p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro</p>
                                        </div>


                                        <div class="twt">
                                            <a href="https://twitter.com/intent/tweet?button_hashtag=TwitterStories" class="twitter-hashtag-button" data-size="large">Tweet #TwitterStories</a>
                                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                        </div>