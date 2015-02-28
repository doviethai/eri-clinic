<?php
/** 
 * User: Haidv
 * Date: 01/26/15 
 */

class Eri_Clinic_Ads extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'eri_clinic_ads', /* Base ID */
            'Eri - Advertise', /* Name */
            array( 'description' => __( 'Eri - Advertise', ERI_LIB_DIR ), ) /* Args */
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        $locale_code = get_locale();    
        $title = ( ! empty( $instance['title'] ) ) ? __($instance['title']) : __( '' );
        $content = ( ! empty( $instance['content'] ) ) ? __($instance['content']) : __('');    
         $lang = ( ! empty( $instance['lang'] ) ) ? __($instance['lang']) : __('');  
          $locale_code_exp = explode("_", $locale_code);
        if ($locale_code_exp[0] != $lang)
            return;     
        echo $args['before_widget'];        
        echo $content;
        ?>
        
    <?php
        echo $args['after_widget'];
    }

   

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        $title    = isset( $instance['title'] ) ? ( $instance['title'] ) : '';
        $content    = isset( $instance['content'] ) ? ( $instance['content'] ) : '';   
        $lang = isset($instance['lang']) ? $instance['lang'] : '';     
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'content' ); ?>"><?php _e( 'Content:' ); ?></label>
            <textarea class="widefat" rows="3" cols="20" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>"><?php echo $content; ?></textarea>
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