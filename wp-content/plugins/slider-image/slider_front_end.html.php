<?php

function front_end_slider($images, $paramssld, $slider)
{
    ob_start();
    $slidertitle = $slider[0]->name;    
    ?>

        <?php
        // init html replace
        $htmlReplace = array();

        // html replace for slide type one
        $htmlReplace["slider_01_wp"] = "";
        $htmlReplace["slider_01_wp"] .= "<div class=\"service-top\">";
        $htmlReplace["slider_01_wp"] .= "<div class=\"col-md-12\">";
        $htmlReplace["slider_01_wp"] .= "<h4>__title__</h4>";
        $htmlReplace["slider_01_wp"] .= "</div>";
        $htmlReplace["slider_01_wp"] .= "<aside data-analytics-region=\"promos\" data-promo-classes=\"promo1,promo2,promo3,promo4,hero\" data-promo-key=\"homepage-201412071041\" id=\"promos\" class=\"promos\">";
        $htmlReplace["slider_01_wp"] .= "<ul>";
        $htmlReplace["slider_01_wp"] .= "__wp__";
        $htmlReplace["slider_01_wp"] .= "</ul>";
        $htmlReplace["slider_01_wp"] .= "</aside>";
        $htmlReplace["slider_01_wp"] .= "</div>";

        $htmlReplace["slider_01_item"] = "";
        $htmlReplace["slider_01_item"] .= "<li>";
        $htmlReplace["slider_01_item"] .= "<a href=\"__link__\" class=\"promo promo__index__\" style=\"background-image:url('__src_img__')\">";
        $htmlReplace["slider_01_item"] .= "<span>";
        $htmlReplace["slider_01_item"] .= "__text_one__";
        $htmlReplace["slider_01_item"] .= "</span>";
        $htmlReplace["slider_01_item"] .= "</a>";
        $htmlReplace["slider_01_item"] .= "</li>";

        // html replace for slide type Two
        $htmlReplace["slider_02_wp"] = "";
        $htmlReplace["slider_02_wp"] .= "<div class=\"worries\">";
        $htmlReplace["slider_02_wp"] .= "<div class=\"col-md-12\">";
        $htmlReplace["slider_02_wp"] .= "<h4>__title__</h4>";
        $htmlReplace["slider_02_wp"] .= "</div>";
        $htmlReplace["slider_02_wp"] .= "<div class=\"carousel slide promos viq\" data-ride=\"carousel\" data-type=\"multi\" id=\"myCarousel\">";
        $htmlReplace["slider_02_wp"] .= "<div class=\"carousel-inner\">";
        $htmlReplace["slider_02_wp"] .= "__wp__";
        $htmlReplace["slider_02_wp"] .= "</div>";
        $htmlReplace["slider_02_wp"] .= "<a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\"><span></span></a>";
        $htmlReplace["slider_02_wp"] .= "<a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\"><span></span></a>";
        $htmlReplace["slider_02_wp"] .= "</div>";
        $htmlReplace["slider_02_wp"] .= "</div>";

        $htmlReplace["slider_02_item"] = "";
        $htmlReplace["slider_02_item"] .= "<div class=\"item __active__\">";
        $htmlReplace["slider_02_item"] .= "<div class=\"col-md-3 col-sm-6 col-xs-12\">";
        $htmlReplace["slider_02_item"] .= "<div class=\"promo promo1 promo-wor__index__\" style=\"background-image:url('__src_img__')\"></div>";
        $htmlReplace["slider_02_item"] .= "<span>";
        $htmlReplace["slider_02_item"] .= "__text_one__";
        $htmlReplace["slider_02_item"] .= "</span>";
        $htmlReplace["slider_02_item"] .= "</div>";
        $htmlReplace["slider_02_item"] .= "</div>";


        // html replace for slide type Three
        $htmlReplace["slider_03_wp"] = "";
        $htmlReplace["slider_03_wp"] .= "<div class=\"services-browsing\">";
        $htmlReplace["slider_03_wp"] .= "<div class=\"col-md-12\">";
        $htmlReplace["slider_03_wp"] .= "<h4>__title__</h4>";
        $htmlReplace["slider_03_wp"] .= "</div>";
        $htmlReplace["slider_03_wp"] .= "<aside data-analytics-region=\"promos\" data-promo-classes=\"promo1,promo2,promo3,promo4,hero\" data-promo-key=\"homepage-201412071041\" id=\"promos\" class=\"promos\">";
        $htmlReplace["slider_03_wp"] .= "<ul>";
        $htmlReplace["slider_03_wp"] .= "__wp__";
        $htmlReplace["slider_03_wp"] .= "</ul>";
        $htmlReplace["slider_03_wp"] .= "</aside>";
        $htmlReplace["slider_03_wp"] .= "</div>";

        $htmlReplace["slider_03_item"] = "";
        $htmlReplace["slider_03_item"] .= "<li>";
        $htmlReplace["slider_03_item"] .= "<span class=\"promo promo1 promo-se__index__\" style=\"background-image:url('__src_img__')\">";
        $htmlReplace["slider_03_item"] .= "<span>";
        $htmlReplace["slider_03_item"] .= "__text_one__";
        $htmlReplace["slider_03_item"] .= "</span>";
        $htmlReplace["slider_03_item"] .= "</span>";
        $htmlReplace["slider_03_item"] .= "</li>";

        // html replace for slide type Four
        $htmlReplace["slider_04_wp"] = "";
        $htmlReplace["slider_04_wp"] .= "<div class=\"visit-miss worries\">";
        $htmlReplace["slider_04_wp"] .= "<div class=\"col-md-12 title-worries\">";
        $htmlReplace["slider_04_wp"] .= "<h4>__title__</h4>";
        $htmlReplace["slider_04_wp"] .= "</div>";
        $htmlReplace["slider_04_wp"] .= "<div class=\"right\">";
        $htmlReplace["slider_04_wp"] .= "<div class=\"col-md-12 miss\">";
        $htmlReplace["slider_04_wp"] .= "<div class=\"carousel slide carousel promos view\" id=\"myCarousel2\" data-type=\"multi\">";
        $htmlReplace["slider_04_wp"] .= "<div class=\"carousel-inner sl9\">";
        $htmlReplace["slider_04_wp"] .= "__wp__";
        $htmlReplace["slider_04_wp"] .= "</div>";
        $htmlReplace["slider_04_wp"] .= "<a class=\"left carousel-control\" href=\"#myCarousel2\" data-slide=\"prev\"><img src=\"".ERI_IMG_URL."/prw_hover.png\" alt=\"\"/></a>";
        $htmlReplace["slider_04_wp"] .= "<a class=\"right carousel-control\" href=\"#myCarousel2\" data-slide=\"next\"><img src=\"".ERI_IMG_URL."/ntw_hover.png\" alt=\"\"/></a>";
        $htmlReplace["slider_04_wp"] .= "</div>";
        $htmlReplace["slider_04_wp"] .= "</div>";
        $htmlReplace["slider_04_wp"] .= "</div>";
        $htmlReplace["slider_04_wp"] .= "</div>";

        $htmlReplace["slider_04_item"] = "";
        $htmlReplace["slider_04_item"] .= "<div class=\"item vip __active__\">";
        $htmlReplace["slider_04_item"] .= "<div class=\"col-md-2 col-sm-6 col-xs-12 promo promo1 promo-hh__index__\">";
        $htmlReplace["slider_04_item"] .= "<a href=\"__link__\">";
        $htmlReplace["slider_04_item"] .= "<div class=\"img-boder\">";
        $htmlReplace["slider_04_item"] .= "<div class=\"img-border-radius\">";
        $htmlReplace["slider_04_item"] .= "<img class=\"img-responsive\" src=\"__src_img__\" alt=\"\"/>";
        $htmlReplace["slider_04_item"] .= "</div>";
        $htmlReplace["slider_04_item"] .= "</div>";
        $htmlReplace["slider_04_item"] .= "</a>";
        $htmlReplace["slider_04_item"] .= "<div class=\"carousel-caption-text\">";
        $htmlReplace["slider_04_item"] .= "<p><strong>__text_one__</strong></p>";
        $htmlReplace["slider_04_item"] .= "<p class=\"miss-sin\">__text_two__</p>";
        $htmlReplace["slider_04_item"] .= "</div>";
        $htmlReplace["slider_04_item"] .= "</div>";
        $htmlReplace["slider_04_item"] .= "</div>";

        // html replace for slide type Five
        $htmlReplace["slider_05_wp"] = "";
        $htmlReplace["slider_05_wp"] .= "<div class=\"banner-top\">";
        $htmlReplace["slider_05_wp"] .= "<div id=\"carousel-banner\" class=\"carousel slide  carousel-fade div_class\" data-ride=\"carousel\">";
        $htmlReplace["slider_05_wp"] .= "__wp__";
        $htmlReplace["slider_05_wp"] .= "</div>";
        $htmlReplace["slider_05_wp"] .= "</div>";

        $htmlReplace["slider_05_wp1"] = "";
        $htmlReplace["slider_05_wp1"] .= "<ol class=\"carousel-indicators\">";
        $htmlReplace["slider_05_wp1"] .= "__wp1__";
        $htmlReplace["slider_05_wp1"] .= "</ol>";

        $htmlReplace["slider_05_wp2"] = "";
        $htmlReplace["slider_05_wp2"] .= "<div class=\"carousel-inner\" role=\"listbox\">";
        $htmlReplace["slider_05_wp2"] .= "__wp2__";
        $htmlReplace["slider_05_wp2"] .= "</dev>";

        $htmlReplace["slider_05_item"] = "";
        $htmlReplace["slider_05_item"] .= "<div class=\"item div_class __active__\">";
        $htmlReplace["slider_05_item"] .= "<div class=\"img_clss it0__index__\" style=\"background:url('__src_img__') center top\">";
        $htmlReplace["slider_05_item"] .= "<div class=\"caption-text\">";
        $htmlReplace["slider_05_item"] .= "__text_one__";
        $htmlReplace["slider_05_item"] .= "</div>";
        $htmlReplace["slider_05_item"] .= "<div class=\"caption-text phone\">";
        $htmlReplace["slider_05_item"] .= "__text_two__";
        $htmlReplace["slider_05_item"] .= "</div>";
        $htmlReplace["slider_05_item"] .= "</div>";
        $htmlReplace["slider_05_item"] .= "</div>";

        $htmlReplace["slider_05_item1"] = "<li data-target=\"#carousel-banner\" data-slide-to=\"__index__\" class=\"__active__\"></li>";


        // html replace for slide type Six
        $htmlReplace["slider_06_wp"] = "";
        $htmlReplace["slider_06_wp"] .= "<div class=\"celebrities\">";
        $htmlReplace["slider_06_wp"] .= "<div class=\"container\">";
        $htmlReplace["slider_06_wp"] .= "<div class=\"col-md-12\">";
        $htmlReplace["slider_06_wp"] .= "<h4>__title__</h4>";
        $htmlReplace["slider_06_wp"] .= "</div>";
        $htmlReplace["slider_06_wp"] .= "<div class=\"col-md-12\">";
        $htmlReplace["slider_06_wp"] .= "__wp__";
        $htmlReplace["slider_06_wp"] .= "</div>";
        $htmlReplace["slider_06_wp"] .= "</div>";
        $htmlReplace["slider_06_wp"] .= "</div>";

        $htmlReplace["slider_06_item"] = "";
        $htmlReplace["slider_06_item"] .= "<div class=\"col-md-6\">";
        $htmlReplace["slider_06_item"] .= "<a href=\"__link__\">";
        $htmlReplace["slider_06_item"] .= "<img src=\"__src_img__\" alt=\"\"/>";
        $htmlReplace["slider_06_item"] .= "</a>";
        $htmlReplace["slider_06_item"] .= "<div class=\"text-cele\">";
        $htmlReplace["slider_06_item"] .= "<p class=\"textl__index__\"><strong>__text_one__</strong></p>";
        $htmlReplace["slider_06_item"] .= "<p class=\"miss-sin\">__text_two__</p>";
        $htmlReplace["slider_06_item"] .= "</div>";
        $htmlReplace["slider_06_item"] .= "</div>";




        // html replace for slide type Seven
        
        $htmlReplace["slider_07_wp"] = "";
        $htmlReplace["slider_07_wp"] .= "<div class=\"worries\">";
        $htmlReplace["slider_07_wp"] .= "<div class=\"col-md-12 your-concerns\">";
        $htmlReplace["slider_07_wp"] .= "<h4>__title__</h4>";        
        $htmlReplace["slider_07_wp"] .= "</div>";
        $htmlReplace["slider_07_wp"] .= "<div class=\"promos\">";
        $htmlReplace["slider_07_wp"] .= "<div id=\"sidebar-carousel-wrr\" data-ride=\"carousel\" class=\"inner-wrries carousel1 \">";        
        $htmlReplace["slider_07_wp"] .= "<div class=\"carousel-inner\">";
        $htmlReplace["slider_07_wp"] .= "__wp__";                    
        $htmlReplace["slider_07_wp"] .= "</div>";        
        $htmlReplace["slider_07_wp"] .= "<a class=\"left carousel-control\" href=\"#sidebar-carousel-wrr\" data-slide=\"prev\"><img src=\"".ERI_IMG_URL."/prw_hover.png\" alt=\"\"/></a>";
        $htmlReplace["slider_07_wp"] .= "<a class=\"right carousel-control\" href=\"#sidebar-carousel-wrr\" data-slide=\"next\"><img src=\"".ERI_IMG_URL."/ntw_hover.png\" alt=\"\"/></a>";                
        $htmlReplace["slider_07_wp"] .= "</div>";
        $htmlReplace["slider_07_wp"] .= "</div>";
        $htmlReplace["slider_07_wp"] .= "</div>";        
        //$htmlReplace["slider_07_wp"] .= "</div>";
        

        $htmlReplace["slider_07_item"] = "";
        $htmlReplace["slider_07_item"] .= "<div class=\"item __active__\">";
        $htmlReplace["slider_07_item"] .= "<div class=\"col-md-3 col-sm-6 col-xs-12\">";
        $htmlReplace["slider_07_item"] .= "<div class=\"img-boder-w\">";
        $htmlReplace["slider_07_item"] .= "<a href=\"__link__\">";
        $htmlReplace["slider_07_item"] .= "<div class=\"img-bd-img\">";
        $htmlReplace["slider_07_item"] .= '<img class=\"img-responsive\" src="__src_img__" >';
        $htmlReplace["slider_07_item"] .= "</div>";
        $htmlReplace["slider_07_item"] .= "</a>";
        $htmlReplace["slider_07_item"] .= "</div>";
        $htmlReplace["slider_07_item"] .= "<div class=\"caption-text-wr\">";
        $htmlReplace["slider_07_item"] .= "<h4 class=\"h4_cl__id__\">__text_one__</h4>";
        $htmlReplace["slider_07_item"] .= "<p>__text_two__</p>";
        $htmlReplace["slider_07_item"] .= "</div>";
        $htmlReplace["slider_07_item"] .= "</div>";            
        $htmlReplace["slider_07_item"] .= "</div>";





        // html replace for slide type Eight
        $htmlReplace["slider_08_wp"] = "";
        $htmlReplace["slider_08_wp"] .= "<div class=\"services-browsing\">";
        $htmlReplace["slider_08_wp"] .= "<div class=\"col-md-12\">";
        $htmlReplace["slider_08_wp"] .= "<h4>__title__</h4>";
        $htmlReplace["slider_08_wp"] .= "</div>";
        $htmlReplace["slider_08_wp"] .= "<aside data-analytics-region=\"promos\" data-promo-classes=\"promo1,promo2,promo3,promo4,hero\" data-promo-key=\"homepage-201412071041\" id=\"promos\" class=\"promos scroll-pane\">";
        $htmlReplace["slider_08_wp"] .= "<ul>";
        $htmlReplace["slider_08_wp"] .= "__wp__";
        $htmlReplace["slider_08_wp"] .= "</ul>";
        $htmlReplace["slider_08_wp"] .= "</aside>";
        $htmlReplace["slider_08_wp"] .= "</div>";

        $htmlReplace["slider_08_item"] = "";
        $htmlReplace["slider_08_item"] .= "<li>";                                            
        $htmlReplace["slider_08_item"] .= "<span class=\"promo promo1 promo-se__index__\" style=\"background-image:url('__src_img__')\">";
        $htmlReplace["slider_08_item"] .= "</span>";
        $htmlReplace["slider_08_item"] .= "<div class=\"full-caption\">";
        $htmlReplace["slider_08_item"] .= "<span>Services</span>";
        $htmlReplace["slider_08_item"] .= "<h3>__text_one__</h3>";
        $htmlReplace["slider_08_item"] .= "<span class=\"line-se\"></span>";
        $htmlReplace["slider_08_item"] .= "<p><a href='__link__'>view more</a></p>";
        $htmlReplace["slider_08_item"] .= "</div>";                
        $htmlReplace["slider_08_item"] .= "</li>";


        $htmlReplace["slider_09_wp"] = "";
        $htmlReplace["slider_09_wp"] .= "<div class=\"service-top\">";
        $htmlReplace["slider_09_wp"] .= "<div class=\"col-md-12\">";
        $htmlReplace["slider_09_wp"] .= "<h4>__title__</h4>";
        $htmlReplace["slider_09_wp"] .= "</div>";
        $htmlReplace["slider_09_wp"] .= "<aside data-analytics-region=\"promos\" data-promo-classes=\"promo1,promo2,promo3,promo4,hero\" data-promo-key=\"homepage-201412071041\" id=\"promos\" class=\"promos\">";        
        $htmlReplace["slider_09_wp"] .= "<div id=\"carousel-one-id\" class=\"scroll-pane\">";
        $htmlReplace["slider_09_wp"] .= "<div role='listbox' class=\"inner\" style=\"width: auto;\">";
        $htmlReplace["slider_09_wp"] .= "__wp__";
        $htmlReplace["slider_09_wp"] .= "</div>";
        $htmlReplace["slider_09_wp"] .= "</aside>";
        $htmlReplace["slider_09_wp"] .= "</div>";
        $htmlReplace["slider_09_wp"] .= "</div>";

        $htmlReplace["slider_09_item"] = "";
        $htmlReplace["slider_09_item"] .= "<a href=\"__link__\">";
        $htmlReplace["slider_09_item"] .= "<div class=\"item promo promo1 promo\" style=\"background-image:url('__src_img__')\">";        
       // $htmlReplace["slider_09_item"] .= "<a href=\"__link__\" class=\"promo promo__index__\" style=\"background-image:url('__src_img__')\">";        
        $htmlReplace["slider_09_item"] .= "<span class=\"service-top-en\">";
        $htmlReplace["slider_09_item"] .= "__text_one__";
        //$htmlReplace["slider_09_item"] .= "<a href='__link__'>View details recommended <i class=\"fa fa-angle-right\"></i></a>";
        $htmlReplace["slider_09_item"] .= "</span>";        
        $htmlReplace["slider_09_item"] .= "</div>";
        $htmlReplace["slider_09_item"] .= "</a>";







        $htmlReplace["slider_10_wp"] = "";
        $htmlReplace["slider_10_wp"] .= "<div class=\"worries\">";
        $htmlReplace["slider_10_wp"] .= "<div class=\"col-md-12 your-concerns\">";
        $htmlReplace["slider_10_wp"] .= "<h4>__title__</h4>";        
        $htmlReplace["slider_10_wp"] .= "</div>";
        $htmlReplace["slider_10_wp"] .= "<div class=\"promos\">";
        $htmlReplace["slider_10_wp"] .= "<div id=\"sidebar-carousel-wrr\" data-ride=\"carousel\" class=\"inner-wrries carousel1  carousel-fade\">";        
        $htmlReplace["slider_10_wp"] .= "<div class=\"carousel-inner\">";
        $htmlReplace["slider_10_wp"] .= "__wp__";                    
        $htmlReplace["slider_10_wp"] .= "</div>";        
        $htmlReplace["slider_10_wp"] .= "<a class=\"left carousel-control\" href=\"#sidebar-carousel-wrr\" data-slide=\"prev\"><img src=\"".ERI_IMG_URL."/prw_hover.png\" alt=\"\"/></a>";
        $htmlReplace["slider_10_wp"] .= "<a class=\"right carousel-control\" href=\"#sidebar-carousel-wrr\" data-slide=\"next\"><img src=\"".ERI_IMG_URL."/ntw_hover.png\" alt=\"\"/></a>";                
        $htmlReplace["slider_10_wp"] .= "</div>";
        $htmlReplace["slider_10_wp"] .= "</div>";
        $htmlReplace["slider_10_wp"] .= "</div>";                

        $htmlReplace["slider_10_item"] = "";
        $htmlReplace["slider_10_item"] .= "<div class=\"item prod__id__\">";
        $htmlReplace["slider_10_item"] .= "<div class=\"col-md-3 col-sm-6 col-xs-12\">";
        $htmlReplace["slider_10_item"] .= "<div class=\"img-boder-w\">";
        $htmlReplace["slider_10_item"] .= "<div class=\"img-bd-img\">";
        $htmlReplace["slider_10_item"] .= '<img class=\"img-responsive\" src="__src_img__" >';
        $htmlReplace["slider_10_item"] .= "</div>";
        $htmlReplace["slider_10_item"] .= "</div>";
        $htmlReplace["slider_10_item"] .= "<div class=\"caption-text-wr\">";
        $htmlReplace["slider_10_item"] .= "<h4 class=\"h4_cl__id__\">__text_one__</h4>";
        $htmlReplace["slider_10_item"] .= "<p>__text_two__</p>";
        $htmlReplace["slider_10_item"] .= "</div>";
        $htmlReplace["slider_10_item"] .= "</div>";            
        $htmlReplace["slider_10_item"] .= "</div>";



        $htmlReplace["slider_11_wp"] = "";
        $htmlReplace["slider_11_wp"] .= "<div class=\"service-top\">";
        $htmlReplace["slider_11_wp"] .= "<div class=\"col-md-12\">";
        $htmlReplace["slider_11_wp"] .= "<h4>__title__</h4>";
        $htmlReplace["slider_11_wp"] .= "</div>";
        $htmlReplace["slider_11_wp"] .= "<aside data-analytics-region=\"promos\" data-promo-classes=\"promo1,promo2,promo3,promo4,hero\" data-promo-key=\"homepage-201412071041\" id=\"promos\" class=\"promos\">";        
        $htmlReplace["slider_11_wp"] .= "<div id=\"carousel-one-id\" class=\"scroll-pane\">";
        $htmlReplace["slider_11_wp"] .= "<div role='listbox' class=\"inner\" style=\"width: auto;\">";
        $htmlReplace["slider_11_wp"] .= "__wp__";
        $htmlReplace["slider_11_wp"] .= "</div>";
        $htmlReplace["slider_11_wp"] .= "</aside>";
        $htmlReplace["slider_11_wp"] .= "</div>";
        $htmlReplace["slider_11_wp"] .= "</div>";

        $htmlReplace["slider_11_item"] = "";
        $htmlReplace["slider_11_item"] .= "<a href='__link__'>";
        $htmlReplace["slider_11_item"] .= "<div class=\"item promo promo1 promo\" style=\"background-image:url('__src_img__')\">";               
        $htmlReplace["slider_11_item"] .= "<span class=\"service-top-en\">";
        $htmlReplace["slider_11_item"] .= "__text_one__";
        //$htmlReplace["slider_11_item"] .= "<a href='__link__'>おススメ<i class=\"fa fa-angle-right\"></i></a>";        
        $htmlReplace["slider_11_item"] .= "</span>";        
        $htmlReplace["slider_11_item"] .= "</div>";
        $htmlReplace["slider_11_item"] .= "</a>";        





        // html replace for slide type Eight
        $htmlReplace["slider_12_wp"] = "";
        $htmlReplace["slider_12_wp"] .= "<div class=\"services-browsing\">";
        $htmlReplace["slider_12_wp"] .= "<div class=\"col-md-12\">";
        $htmlReplace["slider_12_wp"] .= "<h4>__title__</h4>";
        $htmlReplace["slider_12_wp"] .= "</div>";
        $htmlReplace["slider_12_wp"] .= "<aside data-analytics-region=\"promos\" data-promo-classes=\"promo1,promo2,promo3,promo4,hero\" data-promo-key=\"homepage-201412071041\" id=\"promos\" class=\"promos scroll-pane\">";
        $htmlReplace["slider_12_wp"] .= "<ul>";
        $htmlReplace["slider_12_wp"] .= "__wp__";
        $htmlReplace["slider_12_wp"] .= "</ul>";
        $htmlReplace["slider_12_wp"] .= "</aside>";
        $htmlReplace["slider_12_wp"] .= "</div>";

        $htmlReplace["slider_12_item"] = "";
        $htmlReplace["slider_12_item"] .= "<li>";                                            
        $htmlReplace["slider_12_item"] .= "<span class=\"promo promo1 promo-se__index__\" style=\"background-image:url('__src_img__')\">";
        $htmlReplace["slider_12_item"] .= "</span>";
        $htmlReplace["slider_12_item"] .= "<div class=\"full-caption\">";
        $htmlReplace["slider_12_item"] .= "<span>Dịch vụ</span>";
        $htmlReplace["slider_12_item"] .= "<h3>__text_one__</h3>";
        $htmlReplace["slider_12_item"] .= "<span class=\"line-se\"></span>";
        $htmlReplace["slider_12_item"] .= "<p><a href='__link__'>view more</a></p>";
        $htmlReplace["slider_12_item"] .= "</div>";                
        $htmlReplace["slider_12_item"] .= "</li>";



        $htmlReplace["slider_13_wp"] = "";
        $htmlReplace["slider_13_wp"] .= "<div class=\"visit-miss worries\">";        
        $htmlReplace["slider_13_wp"] .= "<div class=\"right\">";
        $htmlReplace["slider_13_wp"] .= "<div class=\"col-md miss\">";                                          
        $htmlReplace["slider_13_wp"] .= "<div class=\"carousel slide carousel promos view_history\" id=\"myCarousel2\" data-type=\"multi\">";
        $htmlReplace["slider_13_wp"] .= "<div class=\"carousel-inner sl9\">";
        $htmlReplace["slider_13_wp"] .= "__wp__";
        $htmlReplace["slider_13_wp"] .= "</div>";
        $htmlReplace["slider_13_wp"] .= "<a class=\"left carousel-control\" href=\"#myCarousel2\" data-slide=\"prev\"><img src=\"".ERI_IMG_URL."/prw_hover.png\" alt=\"\"/></a>";
        $htmlReplace["slider_13_wp"] .= "<a class=\"right carousel-control\" href=\"#myCarousel2\" data-slide=\"next\"><img src=\"".ERI_IMG_URL."/ntw_hover.png\" alt=\"\"/></a>";
        $htmlReplace["slider_13_wp"] .= "</div>";
        $htmlReplace["slider_13_wp"] .= "</div>";
        $htmlReplace["slider_13_wp"] .= "</div>";
        $htmlReplace["slider_13_wp"] .= "</div>";

        $htmlReplace["slider_13_item"] = "";
        $htmlReplace["slider_13_item"] .= "<div class=\"item vip __active__\">";
        $htmlReplace["slider_13_item"] .= "<div class=\"col-md-2 col-sm-6 col-xs-12 promo promo1 promo-hh1 __index__\">";        
        $htmlReplace["slider_13_item"] .= "<div class=\"img-boder\">";
        $htmlReplace["slider_13_item"] .= "<div class=\"img-border-radius\">";
        $htmlReplace["slider_13_item"] .= "<a href=\"__link__\">";
        $htmlReplace["slider_13_item"] .= "<img class=\"img-responsive\" src=\"__src_img__\" alt=\"\"/>";
        $htmlReplace["slider_13_item"] .= "</a>";
        $htmlReplace["slider_13_item"] .= "</div>";
        $htmlReplace["slider_13_item"] .= "</div>";        
        $htmlReplace["slider_13_item"] .= "<div class=\"carousel-caption-text\">";
        $htmlReplace["slider_13_item"] .= "<p><strong>__text_one__</strong></p>";
        $htmlReplace["slider_13_item"] .= "<p class=\"miss-sin\">__text_two__</p>";
        $htmlReplace["slider_13_item"] .= "</div>";
        $htmlReplace["slider_13_item"] .= "</div>";
        $htmlReplace["slider_13_item"] .= "</div>";

        /*$htmlReplace["slider_09_wp"] = "";
        $htmlReplace["slider_09_wp"] .= "<div class=\"service-top\">";
        $htmlReplace["slider_09_wp"] .= "<div class=\"col-md-12\">";
        $htmlReplace["slider_09_wp"] .= "<h4>__title__</h4>";
        $htmlReplace["slider_09_wp"] .= "</div>";
        $htmlReplace["slider_09_wp"] .= "<aside data-analytics-region=\"promos\" data-promo-classes=\"promo1,promo2,promo3,promo4,hero\" data-promo-key=\"homepage-201412071041\" id=\"promos\" class=\"promos\">";
        $htmlReplace["slider_09_wp"] .= "<div id=\"carousel-one-id\" class=\"scroll-pane\">";
        $htmlReplace["slider_09_wp"] .= "<div role='listbox' class=\"inner\" style=\"width: auto;\">";
        $htmlReplace["slider_09_wp"] .= "__wp__";
        $htmlReplace["slider_09_wp"] .= "</div>";
        $htmlReplace["slider_09_wp"] .= "</aside>";
        $htmlReplace["slider_09_wp"] .= "</div>";
        $htmlReplace["slider_09_wp"] .= "</div>";

        $htmlReplace["slider_09_item"] = "";
        $htmlReplace["slider_09_item"] .= "<div class=\"item promo promo1 promo\" style=\"background-image:url('__src_img__')\">";
        $htmlReplace["slider_09_item"] .= "<span class=\"service-top-en\">";
        $htmlReplace["slider_09_item"] .= "__text_one__";
        $htmlReplace["slider_09_item"] .= "<a href='__link__'>View details recommended <i class=\"fa fa-angle-right\"></i></a>";
        $htmlReplace["slider_09_item"] .= "</span>";
        $htmlReplace["slider_09_item"] .= "</div>";*/


    $htmlReplace["slider_14_wp"] = "";
    $htmlReplace["slider_14_wp"] .= "<div class=\"col-md-12\">";
    $htmlReplace["slider_14_wp"] .= "<div id=\"carousel-about\" class=\"carousel slide  carousel-fade\" data-ride=\"carousel\">";
    $htmlReplace["slider_14_wp"] .= "<div class=\"carousel-inner\" role=\"listbox\">";
    $htmlReplace["slider_14_wp"] .= "__wp__";
    $htmlReplace["slider_14_wp"] .= "</div>";
    $htmlReplace["slider_14_wp"] .= "<a class=\"left carousel-control\" href=\"#carousel-about\" role=\"button\" data-slide=\"prev\"></a>";
    $htmlReplace["slider_14_wp"] .= "<a class=\"right carousel-control\" href=\"#carousel-about\" role=\"button\" data-slide=\"next\"></a>";
    $htmlReplace["slider_14_wp"] .= "</div>";
    $htmlReplace["slider_14_wp"] .= "</div>";

    $htmlReplace["slider_14_item"] = "";
    $htmlReplace["slider_14_item"] .= "<div class=\"item __active__\">";
    $htmlReplace["slider_14_item"] .= "<img src=\"__src_img__\"  alt=\"\"/>";
    $htmlReplace["slider_14_item"] .= "</div>";



    $htmlReplace["slider_15_wp"] = "";
    $htmlReplace["slider_15_wp"] .= "<div class=\"slide-men\">";
    $htmlReplace["slider_15_wp"] .= "<div id=\"men-carousel\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">";
    $htmlReplace["slider_15_wp"] .= "<ol class=\"carousel-indicators\">";
    $htmlReplace["slider_15_wp"] .= "<li data-target=\"#men-carousel\" data-slide-to=\"0\" class=\"active\"></li>";
    $htmlReplace["slider_15_wp"] .= "<li data-target=\"#men-carousel\" data-slide-to=\"1\"></li>";
    $htmlReplace["slider_15_wp"] .= "<li data-target=\"#men-carousel\" data-slide-to=\"2\"></li>";
    $htmlReplace["slider_15_wp"] .= "</ol>";
    $htmlReplace["slider_15_wp"] .= "<div class=\"carousel-inner\" role=\"listbox\">";
    $htmlReplace["slider_15_wp"] .= "__wp__";
    $htmlReplace["slider_15_wp"] .= "</div>";
    $htmlReplace["slider_15_wp"] .= "</div>";
    $htmlReplace["slider_15_wp"] .= "</div>";
    $htmlReplace["slider_15_item"] = "";
    $htmlReplace["slider_15_item"] .= "<div class=\"item __active__\">";
    $htmlReplace["slider_15_item"] .= "<img src=\"__src_img__\">";
    $htmlReplace["slider_15_item"] .= "</div>";




               /* <div class="item promo promo1 promo-change">
                  <span>Acid hyaluronic &amp; Botox shot
                    <a href="">View details recommended <i class="fa fa-angle-right"></i></a>
                    </span>
                </div>*/




        $htmlWp = $htmlReplace[$slider[0]->template."_wp"];

        $html = "";
        foreach ($images as $key => $image_row) {                    
            $htmlItem = $htmlReplace[$slider[0]->template."_item"];
                    
            $htmlItem = str_replace("__link__", $image_row->sl_url, $htmlItem);
            $htmlItem = str_replace("__src_img__", $image_row->image_url, $htmlItem);
            $htmlItem = str_replace("__text_one__", $image_row->name, $htmlItem);
            $htmlItem = str_replace("__id__", $image_row->id, $htmlItem);
            $htmlItem = str_replace("__text_two__", $image_row->description, $htmlItem);
            $htmlItem = str_replace("__index__", $key+1, $htmlItem);

            if($key==0){
                $htmlItem = str_replace("__active__", "active", $htmlItem);
            }else{
                $htmlItem = str_replace("__active__", "", $htmlItem);
            }
            $html .= $htmlItem;
        }
        if($slider[0]->template=="slider_05"){
            $html1 = "";
            foreach ($images as $key => $image_row) {
                $htmlItem1 = $htmlReplace[$slider[0]->template."_item1"];
                $htmlItem1 = str_replace("__index__", $key, $htmlItem1);
                if($key==0){
                    $htmlItem1 = str_replace("__active__", "active", $htmlItem1);
                }else{
                    $htmlItem1 = str_replace("__active__", "", $htmlItem1);
                }
                $html1 .= $htmlItem1;
            }
            $htmlWp1 = $htmlReplace[$slider[0]->template."_wp1"];
            $htmlWp1 = str_replace("__wp1__", $html1, $htmlWp1);

            $htmlWp2 = $htmlReplace[$slider[0]->template."_wp2"];
            $htmlWp2 = str_replace("__wp2__", $html, $htmlWp2);
            $html = $htmlWp1 . $htmlWp2;
        }
        $htmlWp = str_replace("__wp__", $html, $htmlWp);
        echo str_replace("__title__", $slidertitle, $htmlWp);
    return ob_get_clean();
}

