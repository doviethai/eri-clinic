<?php
/**
 * Created by PhpStorm.
 * User: HiepLT
 * Date: 12/27/14
 * Time: 14:42
 */

class Eri_Phone_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'eri_phone_widget', /* Base ID */
            'Eri - Phone', /* Name */
            array( 'description' => __( 'Phone contact number', ERI_LIB_DIR ), ) /* Args */
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
        $content = $instance['content'];
        $lanCode = get_locale(); 
        if($lanCode == 'ja'){ $numberPhone = 'お問い合わせ: ';}
        if($lanCode == 'vi'){ $numberPhone = 'Hotline: ';}
        if($lanCode == 'en_US'){ $numberPhone = 'Hotline: ';}
        ?>
        <div class="number-phone"><?php echo $numberPhone; ?><span><?php echo $content;?></span></div>
    <?php
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ) {
        $instance = array();
        $instance['content'] = ( ! empty( $new_instance['content'] ) ) ? ( $new_instance['content'] ) : "03-5786-1155";
        $content = $instance['content'];
        ?>
        <p>
            <label for="<?php echo $this->get_field_id('content'); ?>"><?php _e('Content:'); ?></label>
            <textarea class="widefat" rows="16" cols="20" id="<?php echo $this->get_field_id('content'); ?>" name="<?php echo $this->get_field_name('content'); ?>"><?php echo $content; ?></textarea>
        </p>
        <?php
        return $instance;
    }
}