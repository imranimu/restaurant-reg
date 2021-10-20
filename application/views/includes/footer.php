        <style type="text/css">
            #site-footer .footer-menu li a,
            #site-footer .footer-menu li a:hover {
                color: #c6c6c6;
            }
        </style>

        <!--=========================-->
        <!--=        Footer         =-->
        <!--=========================-->
        <footer id="site-footer">
            <div class="container">
                <div class="footer-nner">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="footer-widget widget">
                                <h3 class="widget-title"><?=CHEFONLINE_RESTAURANT_NAME?>
                                </h3>

                                <ul class="footer-menu">
                                    <li>Tel: <?=CHEFONLINE_RESTAURANT_BUSINESS_TEL;?>
                                    </li>
                                    <li>
                                        <?=substr(CHEFONLINE_ADDRESS_DOOR.CHEFONLINE_ADDRESS_HOUSE.CHEFONLINE_ADDRESS_ADDRESS1.CHEFONLINE_ADDRESS_ADDRESS2.CHEFONLINE_ADDRESS_TOWN, 0, -2).' '.CHEFONLINE_ADDRESS_POSTCODE;?>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.footer-widget widget -->
                        </div>
                        <!-- /.col-md-6 col-lg-4 -->

                        <div class="col-md-6 col-lg-6">
                            <div class="widget-title">
                                <h3>Opening Hours</h3>
                                <ul class="list-unstyled timing">
                                    <li>Monday - Saturday : 12:00 PM - 08:00 PM</li> 
                                    <li>Sunday : Closed</li> 
                                </ul>
                            </div>
                            <!-- /.footer-widget widget -->
                        </div>
                        <!-- /.col-md-6 col-lg-4 -->

                    </div>
                    <!-- /.row -->


                </div>
                <!-- /.footer-nner -->
            </div>
            <!-- /.container -->

            <div class="container">
                <div class="site-info">
                    <p class="copy-right">ChefOnline Partner Restaurant<br>Copyright &copy; <?php echo date("Y"); ?>
                        chefonline.co.uk</p>
                </div>
                <!-- /.site-info -->
            </div>
            <!-- /.container -->
        </footer>
        <!-- /#footer -->

        </div>
        <!-- /#site -->

        <!-- Dependency Scripts -->
        <script src="<?=base_url('assets/js/app.min.js')?>">
        </script>
        <script src="<?=base_url('assets/js/zoom.js')?>">
        </script>
        <!-- <script>

    $(window).on('load',function(){
        $('#message_pop').modal('show');
    });

</script> -->


        </body>

        </html>