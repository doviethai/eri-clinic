<?php

// override function "genesis_footer" - file:genesis\lib\structure\footer.php
add_action('genesis_footer', 'eri_do_footer');
function eri_do_footer()
{
    ?>
    <!-- FOOTER-->
    <footer id="footer">
        <div class="footer-wp">
            <div class="container">
                <div class="row">
                    <?php //if (get_layout_page_template() && (get_layout_page_template() == "page_sub.php" || get_layout_page_template() == "page_home.php")): ?>
                        <!-- footer menu other -->
                        <div class="col-md-3 fixfoo1">                                                      
                                <?php if (is_active_sidebar("eri-footer-menu-one")){ ?>
                                        <?php dynamic_sidebar("eri-footer-menu-one"); ?>
                                <?php }  ?>                                        
                        </div>
                        <div class="col-md-3 fixfoo2">                                                      
                                <?php if (is_active_sidebar("eri-footer-menu-two")){ ?>
                                        <?php dynamic_sidebar("eri-footer-menu-two"); ?>
                                <?php }  ?>                               
                        </div>
                        <div class="col-md-6 fixfoo3">
                            <div class="col-md-6">                                                              
                                <?php if (is_active_sidebar("eri-footer-menu-three")){ ?>
                                        <?php dynamic_sidebar("eri-footer-menu-three"); ?>
                                <?php }  ?>                                
                            </div>
                            <div class="col-md-6 last">                                                              
                                <?php if (is_active_sidebar("eri-footer-menu-four")){ ?>
                                        <?php dynamic_sidebar("eri-footer-menu-four"); ?>
                                <?php } ?>                               
                            </div>
                        </div>
                    <?php  //else: ?>
                        <!-- footer menu standard -->
                <!--         <div class="col-md-3">
                            <?php if (is_active_sidebar("eri-footer-menu-two")): ?>
                                <?php dynamic_sidebar("eri-footer-menu-two"); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            <?php if (is_active_sidebar("eri-footer-menu-three")): ?>
                                <?php dynamic_sidebar("eri-footer-menu-three"); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3">
                            <?php if (is_active_sidebar("eri-footer-menu-four")): ?>
                                <?php dynamic_sidebar("eri-footer-menu-four"); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3 last">
                            <?php if (is_active_sidebar("eri-footer-newsletter")): ?>
                                <?php dynamic_sidebar("eri-footer-newsletter"); ?>
                            <?php endif; ?>
                        </div> -->
                    <?php //endif; ?>
                </div>
            </div>
        </div>
        <div class="cls-foo-end">
            <div class="container">
                <?php if (is_active_sidebar("eri-footer-bottom")): ?>
                    <?php dynamic_sidebar("eri-footer-bottom"); ?>
                <?php endif; ?>
            </div>
        </div>
    </footer>
    <a href="#0" class="cd-top"><i class="fa fa-chevron-up"></i></a>
<?php
}

add_action('genesis_before_footer', 'eri_do_before_footer');
function eri_do_before_footer()
{
    if (get_layout_page_template() && get_layout_page_template() == "page_home.php") {
        ?>
        <div class="new-info">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 sdl">                        
                         <?php if (is_active_sidebar("eri-about")){ ?>
                                <?php dynamic_sidebar("eri-about"); ?>
                          <?php }   ?>                                 
                    </div>
                    <div class="col-md-6 sdl two">
                        <?php if (is_active_sidebar("eri-home-clinic-news")): ?>
                            <?php dynamic_sidebar("eri-home-clinic-news"); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
}

add_action('genesis_after_footer', 'eri_do_after_footer');
function eri_do_after_footer()
{
    ?>
    <div class="cls-foo-end">
        <div class="container">
            <aside id="text-5" class="widget widget_text">
                <div class="textwidget">
                    <div class="row">
                        <div class="col-md-2">
                            <h1><img src="<?php echo ERI_IMG_URL;?>/logo-foo.png" alt=""></h1>
                        </div>
                        <div class="col-md-6">
                             <?php if (is_active_sidebar("eri-copy-right")){ ?>
                                    <?php dynamic_sidebar("eri-copy-right"); ?>
                              <?php }   ?>                            
                        </div>
                        <div class="col-md-4">
                            <ul class="pull-right social ">
                                <li><a href=""><i class="fa fa-facebook"></i></a></li>
                                <li><a href=""><i class="fa fa-twitter"></i></a></li>
                                <li><a href=""><i class="fa fa-behance"></i></a></li>
                                <li><a href=""><i class="fa fa-rss"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
<?php
}