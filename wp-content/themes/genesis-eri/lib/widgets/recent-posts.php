<?php
/**
 * Created by PhpStorm.
 * User: HiepLT
 * Date: 12/26/14
 * Time: 14:36
 */

/**
 * Recent_Posts widget class
 *
 * @since 2.8.0
 */
class Eri_Widget_Recent_Posts extends WP_Widget {

    public function __construct() {
        $widget_ops = array('classname' => 'eri_widget_recent_entries', 'description' => __( "Your site&#8217;s most recent Posts.") );
        parent::__construct('eri-recent-posts', __('Eri - News'), $widget_ops);
        $this->alt_option_name = 'widget_recent_entries';

        add_action( 'save_post', array($this, 'flush_widget_cache') );
        add_action( 'deleted_post', array($this, 'flush_widget_cache') );
        add_action( 'switch_theme', array($this, 'flush_widget_cache') );
    }

    public function widget($args, $instance) {





        $cache = array();
        if ( ! $this->is_preview() ) {
            $cache = wp_cache_get( 'widget_recent_posts', 'widget' );
        }
        if ( ! is_array( $cache ) ) {
            $cache = array();
        }
        if ( ! isset( $args['widget_id'] ) ) {
            $args['widget_id'] = $this->id;
        }
        if ( isset( $cache[ $args['widget_id'] ] ) ) {
            echo $cache[ $args['widget_id'] ];
            return;
        }

        ob_start();

        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : __( 'Clinic News' );
        $title2 = ( ! empty( $instance['title2'] ) ) ? $instance['title2'] : __( '続きを読む' );
        $link = ( ! empty( $instance['link'] ) ) ? $instance['link'] : __( '#' );

        /** This filter is documented in wp-includes/default-widgets.php */
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

        $number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 5;
        if ( ! $number )
            $number = 5;
        $show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;


        
        $lang = ( ! empty( $instance['lang'] ) ) ? __($instance['lang']) : __(''); 
        $locale_code = get_locale();  
        $locale_code_exp = explode("_", $locale_code);
             if ($locale_code_exp[0] != $lang)
        return;  


        /**
         * Filter the arguments for the Recent Posts widget.
         *
         * @since 3.4.0
         *
         * @see WP_Query::get_posts()
         *
         * @param array $args An array of arguments used to retrieve the recent posts.
         */
        $r = new WP_Query( apply_filters( 'widget_posts_args', array(
            'posts_per_page'      => $number,
            'no_found_rows'       => true,
            'post_status'         => 'publish',
            'ignore_sticky_posts' => true,
            'post_type' => 'news',
            'cat' => 279,

        ) ) );

        if ($r->have_posts()) :
            ?>
            <?php echo $args['before_widget']; ?>
            <div class="cor-top">
                <div class="pull-left"><?php _e($title);?><span></span></div>
                <div class="pull-right"><a href="<?php echo $link;?>"><?php _e($title2);?> <i class="fa fa-caret-right"></i></a></div>
            </div>
            <div class="cor-content scroll-pane">
                <ul>
                    <?php while ( $r->have_posts() ) : $r->the_post(); ?>
                        <li>
                            <p>
                                <?php if ( $show_date ) : ?>
                                    <span class="post-date"><?php echo get_the_date('Y/m/d'); ?></span><br/>
                                <?php endif; ?>
                                <?php //get_the_title() ? the_title() : the_ID(); ?>
                                <a class="news-title-box-footer" href="<?php the_permalink(); ?>"><?php get_the_title() ? the_title() : the_ID(); ?></a>
                            </p>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </div>
            <?php echo $args['after_widget']; ?>
            <?php
            // Reset the global $the_post as this query will have stomped on it
            wp_reset_postdata();
        endif;
        if ( ! $this->is_preview() ) {
            $cache[ $args['widget_id'] ] = ob_get_flush();
            wp_cache_set( 'widget_recent_posts', $cache, 'widget' );
        } else {
            ob_end_flush();
        }
    }

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['title2'] = strip_tags($new_instance['title2']);
        $instance['link'] = strip_tags($new_instance['link']);
        $instance['number'] = (int) $new_instance['number'];
        $instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;
        $instance['lang'] = strip_tags($new_instance['lang']);
        $this->flush_widget_cache();

        $alloptions = wp_cache_get( 'alloptions', 'options' );
        if ( isset($alloptions['widget_recent_entries']) )
            delete_option('widget_recent_entries');

        return $instance;
    }

    public function flush_widget_cache() {
        wp_cache_delete('widget_recent_posts', 'widget');
    }

    public function form( $instance ) {
        $title      = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $title2     = isset( $instance['title2'] ) ? esc_attr( $instance['title2'] ) : '';
        $link       = isset( $instance['link'] ) ? esc_attr( $instance['link'] ) : '#';
        $number      = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
        $show_date  = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
        $lang = isset($instance['lang']) ? $instance['lang'] : '';


        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'title2' ); ?>"><?php _e( 'Title 2:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title2' ); ?>" name="<?php echo $this->get_field_name( 'title2' ); ?>" type="text" value="<?php echo $title2; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'link' ); ?>"><?php _e( 'Link:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'link' ); ?>" name="<?php echo $this->get_field_name( 'link' ); ?>" type="text" value="<?php echo $link; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
            <input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo $number; ?>" size="3" />
        </p>
        <p>
            <input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
            <label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label>
        </p>


        
            <p>
                <label for="<?php echo $this->get_field_id('lang'); ?>"><?php _e('Select Language:'); ?></label>
                <select id="<?php echo $this->get_field_id('lang'); ?>" name="<?php echo $this->get_field_name('lang'); ?>">
                    <option value="0"><?php _e('&mdash; Select &mdash;') ?></option>
                    <?php
                    $languages = icl_get_languages('skip_missing=0&orderby=code');                     
                     foreach ($languages as $option) {
                        echo '<option value="' . $option['language_code'] . '"'
                            . selected($lang, $option['language_code'], false)
                            . '>' . esc_html($option['native_name'])
                            . '</option>';
                    }
                  ?>
                </select>
            </p>



    <?php
    }
}