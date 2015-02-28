<?php
/** 
 * User: Haidv
 * Date: 01/26/15 
 */

class Eri_Clinic_Copy_Right extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'eri_clinic_copy_right', /* Base ID */
            'Eri - Footer Copy Right', /* Name */
            array( 'description' => __( 'Eri - Footer Copy Right', ERI_LIB_DIR ), ) /* Args */
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
        $content = ( ! empty( $instance['content_slider'] ) ) ? __($instance['content_slider']) : __('');     
        $lang = ( ! empty( $instance['lang'] ) ) ? __($instance['lang']) : __('');                    
        
        $locale_code_exp = explode("_", $locale_code);
        if ($locale_code_exp[0] != $lang)
            return;  
            echo $content;
            //echo $args['after_widget']      
    
}

   

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {        
        $content    = isset( $instance['content_slider'] ) ? ( $instance['content_slider'] ) : ''; 
        $lang = isset($instance['lang']) ? $instance['lang'] : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'content_slider' ); ?>"><?php _e( 'Content Slider:' ); ?></label>
            <textarea class="widefat" rows="3" cols="20" id="<?php echo $this->get_field_id('content_slider'); ?>" name="<?php echo $this->get_field_name('content_slider'); ?>"><?php echo $content; ?></textarea>
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