<?php
/**
 * Created by PhpStorm.
 * User: HiepLT
 * Date: 12/26/14
 * Time: 14:36
 */
// override class WP_Nav_Menu_Widget
class Eri_Menu_Footer_Widget extends WP_Widget {

    public function __construct() {
        $widget_ops = array( 'description' => __('Add a custom menu to your footer.') );
        parent::__construct( 'nav_menu_footer', __('Eri - Menu: Footer'), $widget_ops );
    }

    public function widget($args, $instance) {

        /** This filter is documented in wp-includes/default-widgets.php */
        $instance['title'] = apply_filters( 'widget_title', empty( $instance['title'] ) ? '' : $instance['title'], $instance, $this->id_base );

        if(get_layout_page_template() && get_layout_page_template() == "page_home.php" && $instance['title'] != ""){
            $layoutOther = "<span></span>";
        }else{
            $layoutOther = "";
        }
        // Get menu
        $nav_menu = ! empty( $instance['nav_menu'] ) ? wp_get_nav_menu_object( $instance['nav_menu'] ) : false;

        if ( !$nav_menu )
            return;



        echo $args['before_widget'];

        echo "<h3>";
        echo $instance['title'] . $layoutOther. "&nbsp;";
        echo "</h3>";

        $menu_items = wp_get_nav_menu_items($nav_menu);
        if(count($menu_items)>0){
            echo "<ul class=\"li-item-foo\">";
            foreach($menu_items as $item){
                echo "<li><a href=\"$item->url\">$item->post_title</a></li>";
            }
            echo "</ul>";
        }


        echo $args['after_widget'];
    }

    public function update( $new_instance, $old_instance ) {
        $instance = array();
        if ( ! empty( $new_instance['title'] ) ) {
            $instance['title'] = strip_tags( stripslashes($new_instance['title']) );
        }
        if ( ! empty( $new_instance['nav_menu'] ) ) {
            $instance['nav_menu'] = (int) $new_instance['nav_menu'];
        }
        return $instance;
    }

    public function form( $instance ) {
        $title = isset( $instance['title'] ) ? $instance['title'] : '';
        $nav_menu = isset( $instance['nav_menu'] ) ? $instance['nav_menu'] : '';

        // Get menus
        $menus = wp_get_nav_menus( array( 'orderby' => 'name' ) );

        // If no menus exists, direct the user to go and create some.
        if ( !$menus ) {
            echo '<p>'. sprintf( __('No menus have been created yet. <a href="%s">Create some</a>.'), admin_url('nav-menus.php') ) .'</p>';
            return;
        }
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:') ?></label>
            <input type="text" class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id('nav_menu'); ?>"><?php _e('Select Menu:'); ?></label>
            <select id="<?php echo $this->get_field_id('nav_menu'); ?>" name="<?php echo $this->get_field_name('nav_menu'); ?>">
                <option value="0"><?php _e( '&mdash; Select &mdash;' ) ?></option>
                <?php
                foreach ( $menus as $menu ) {
                    echo '<option value="' . $menu->term_id . '"'
                        . selected( $nav_menu, $menu->term_id, false )
                        . '>'. esc_html( $menu->name ) . '</option>';
                }
                ?>
            </select>
        </p>
    <?php
    }
}