<?php
/**
 * Created by PhpStorm.
 * User: HiepLT
 * Date: 12/26/14
 * Time: 14:36
 */
// override class WP_Nav_Menu_Widget
class Eri_Menu_Main_Widget extends WP_Widget {

    public function __construct() {
        $widget_ops = array( 'description' => __('Add a custom menu to your header.') );
        parent::__construct( 'nav_menu_main', __('Eri - Menu: Main'), $widget_ops );
    }

    public function widget($args, $instance) {

        $locale_code = get_locale();

        // Get menu and appropriate menu's language.
        $nav_menu = ! empty( $instance['nav_menu'] ) ? wp_get_nav_menu_object( $instance['nav_menu'] ) : false;
        // $nav_menu_lang = ! empty( $instance['nav_menu_lang'] ) ? wp_get_nav_menu_object( $instance['nav_menu_lang'] ) : false;
        // $nav_menu_lang = isset($instance['nav_menu_lang']) ? $instance['nav_menu_lang'] : '';

        if (!$nav_menu) // || !$nav_menu_lang
            return;

        // Disable for WMPL
        // HiepLT: Checking the mapping language code with their menu.
        // $locale_code_exp = explode("_", $locale_code);
        // if ( $locale_code_exp[0] != $nav_menu_lang)
        //     return;

        /** This filter is documented in wp-includes/default-widgets.php */
        $instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

        ?>
        <div class="bs-example">
            <nav role="navigation" class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collection of nav links and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul>
                        <?php
                        // get all main menu items
                        $menu_items = wp_get_nav_menu_items($nav_menu);
                        $parent = array();
                        $child = array();

                        while (count($menu_items) > 0) {
                            $curentItem = array_shift($menu_items);

                            if ($curentItem->menu_item_parent == 0) {
                                $parent[] = $curentItem;
                            } else {
                                if (!isset($child[$curentItem->menu_item_parent])) {
                                    $child[$curentItem->menu_item_parent] = array();
                                }
                                $child[$curentItem->menu_item_parent][] = $curentItem;
                            }
                        }

                        foreach($parent as $menuParrent) {
                            echo    '<li>';
                            //echo    "<a data-toggle=\"dropdown\" class=\"dropdown $menuParrent->ID\" href=\"$menuParrent->url\">".$menuParrent->post_title."</a>";
                            echo    "<a class=\"dropdown $menuParrent->ID\" href=\"$menuParrent->url\">".$menuParrent->post_title."</a>";

                            //get menu level 2
                            if (isset($child[$menuParrent->ID]) && count($child[$menuParrent->ID]) > 0) {                            
                                echo    "<div role=\"menu\" class=\"dropdown-menu sub-mn mul-$menuParrent->attr_title \">";                                   
                                echo    "<div class=\"col-md-12\">";
                                echo    "<dl>";
                                    foreach($child[$menuParrent->ID] as $menuChild){
                                    echo    "<dd>";
                                    echo    "<a href=\"$menuChild->url\"><i class=\"fa fa-caret-right\"></i>".$menuChild->post_title."</a>";

                                    //get menu level 3
                                    if(isset($child[$menuChild->ID]) && count($child[$menuChild->ID])>0){
                                        echo    "<div class=\"sub3\">";
                                        foreach($child[$menuChild->ID] as $menuChild3){
                                            echo    "<a href=\"$menuChild3->url\"><i class=\"fa fa-caret-right\"></i>".$menuChild3->post_title."</a>";
                                        }
                                        echo    "</div>";
                                    }
                                    echo    "</dd>";
                                }
                                echo    "</dl>";
                                echo    "</div>";
                                echo    "</div>";
                            }
                            echo    '</li>';
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();

        if ( ! empty( $new_instance['title'] ) ) {
            $instance['title'] = strip_tags( stripslashes($new_instance['title']) );
        }

        if ( ! empty( $new_instance['nav_menu'] ) ) {
            $instance['nav_menu'] = (int) $new_instance['nav_menu'];
        }

        // if ( ! empty( $new_instance['nav_menu_lang'] ) ) {
        //  $instance['nav_menu_lang'] = strip_tags( stripslashes($new_instance['nav_menu_lang']) );
        // }

        return $instance;
    }

    public function form( $instance )
    {
        $title = isset($instance['title']) ? $instance['title'] : '';
        $nav_menu = isset($instance['nav_menu']) ? $instance['nav_menu'] : '';
        // $nav_menu_lang = isset($instance['nav_menu_lang']) ? $instance['nav_menu_lang'] : '';

        // Get menus
        $menus = wp_get_nav_menus(array('orderby' => 'name'));

        // If no menus exists, direct the user to go and create some.
        if (!$menus) {
            echo '<p>' . sprintf(__('No menus have been created yet. <a href="%s">Create some</a>.'), admin_url('nav-menus.php')) . '</p>';
            return;
        }
            ?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:') ?></label>
                <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>"/>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('nav_menu'); ?>"><?php _e('Select Menu:'); ?></label>
                <select id="<?php echo $this->get_field_id('nav_menu'); ?>" name="<?php echo $this->get_field_name('nav_menu'); ?>">
                    <option value="0"><?php _e('&mdash; Select &mdash;') ?></option>
                    <?php
                    foreach ($menus as $menu) {
                        echo '<option value="' . $menu->term_id . '"'
                            . selected($nav_menu, $menu->term_id, false)
                            . '>' . esc_html($menu->name)
                            . '</option>';
                    }
                    ?>
                </select>
            </p>

            <?php
            if (function_exists('is_plugin_active') && is_plugin_active('mqtranslate/mqtranslate.php')) {
                $mq_languages = get_option('mqtranslate_language_names');
                if (count($mq_languages) > 0) {
            ?>
            <p>
                <label for="<?php echo $this->get_field_id('nav_menu_lang'); ?>"><?php _e('Select Language:'); ?></label>
                <select id="<?php echo $this->get_field_id('nav_menu_lang'); ?>" name="<?php echo $this->get_field_name('nav_menu_lang'); ?>">
                    <option value="0"><?php _e('&mdash; Select &mdash;') ?></option>
                    <?php
                    foreach ($mq_languages as $key => $option) {
                        echo '<option value="' . $key . '"'
                            . selected($nav_menu_lang, $key, false)
                            . '>' . esc_html($option)
                            . '</option>';
                    }
                    ?>
                </select>
            </p>
        <?php
                }
            }
        ?>
    <?php
    }
}