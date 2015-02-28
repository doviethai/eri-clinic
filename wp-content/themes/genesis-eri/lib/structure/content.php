<?php

add_action('genesis_after_content', 'eri_do_after_content');
function eri_do_after_content()
{

}
add_action('genesis_after', 'eri_do_after');
function eri_do_after()
{
    ?>
    <script type="text/javascript" id="sourcecode">
        $(function () {
            $('nav .navbar li').hover(function () {
                $(this).find('.dropdown-menu').first().stop(true, true).slideDown(150);
                $(this).addClass('open');
            }, function () {
                $(this).find('.dropdown-menu').first().stop(true, true).slideUp(105);
                $(this).removeClass('open');
            });
            $('.scroll-pane').jScrollPane();
        });
    </script>
<?php
}