<footer class="container-fluid text-center"><!--div-->
                  <img class="img-fluid" src="ihttp://206.189.45.97/~mesh22/sub3/wp-content/uploads/2022/04/landscape.jpg" alt="landscape">

                <div class="container"><!--div-->
                    <div class="row"><!--row-->
                        <div class="col-md-6 ">
                          <!-- <a class="navbar-brand" href="#"><span class="josh">JOSH</span> <span class="orange">WHITKIN</span></a> -->
                          <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-left') ) : 
endif; ?>
                        </div>
                        <div class="col-md-6 ">
                            <!-- <p>Terms and Conditions</p> -->
                            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-right') ) : 
endif; ?>
              </div><!--row-->
                    </div><!--Container-->
                </div><!--container-fluid-->
            </footer>
            <?php get_footer();?>
</body>
</html>