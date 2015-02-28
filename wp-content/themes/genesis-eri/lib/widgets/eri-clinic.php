<?php
/**
 * Created by PhpStorm.
 * User: HiepLT
 * Date: 12/27/14
 * Time: 14:42
 */

class Eri_Clinic extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'eri_clinic', /* Base ID */
            'Eri - Contacts Info', /* Name */
            array( 'description' => __( '衣理クリニック表参道', ERI_LIB_DIR ), ) /* Args */
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
        $title = ( ! empty( $instance['title'] ) ) ? __($instance['title']) : __( '' );
        $address = ( ! empty( $instance['address'] ) ) ? __($instance['address']) : __('');
        $phone = ( ! empty( $instance['phone'] ) ) ? __($instance['phone']) : __('');
        $phone2 = ( ! empty( $instance['phone2'] ) ) ? __($instance['phone2']) : __('');
        $fax = ( ! empty( $instance['fax'] ) ) ? __($instance['fax']) : __('');
        $consultation_hours = ( ! empty( $instance['consultation_hours'] ) ) ? __($instance['consultation_hours']) : __('');
        $final_acceptance = ( ! empty( $instance['final_acceptance'] ) ) ? __($instance['final_acceptance']) : __('');
        $text_one = ( ! empty( $instance['text_one'] ) ) ? __($instance['text_one']) : __('');
        $text_two = ( ! empty( $instance['text_two'] ) ) ? __($instance['text_two']) : __('');
        echo $args['before_widget'];
        echo "<h3>";
        echo $title . "<span></span>&nbsp;";
        echo "</h3>";
        ?>
        <ul class="li-item-foo contact-dr">
            <li>衣理クリニック表参道</li>
            <li><strong>住所</strong>: <?php echo $address;?></li>
            <li><strong>TEL</strong>: <?php echo $phone;?></li>
            <li><strong>TEL</strong>: <?php echo $phone2;?></li>
            <li><strong>FAX</strong>: <?php echo $fax;?></li>
            <li><strong>診療時間</strong>: <?php echo $consultation_hours;?></li>
            <li><strong>最終受付</strong>: <?php echo $final_acceptance;?></li>
            <li><?php echo $text_one;?></li>
            <li><?php echo $text_two;?></li>
        </ul>
    <?php
        echo $args['after_widget'];
    }

    public function update( $new_instance, $old_instance ) {

        $instance = $old_instance;
        $instance['title'] = ($new_instance['title']);
        $instance['address'] = ($new_instance['address']);
        $instance['phone'] = ($new_instance['phone']);
        $instance['phone2'] = ($new_instance['phone2']);
        $instance['fax'] = $new_instance['fax'];
        $instance['consultation_hours'] = ($new_instance['consultation_hours']);
        $instance['final_acceptanc'] = ($new_instance['final_acceptanc']);
        $instance['text_one'] = ($new_instance['text_one']);
        $instance['text_two'] = $new_instance['text_two'];
        return $instance;
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
        $address    = isset( $instance['address'] ) ? ( $instance['address'] ) : '';
        $phone    = isset( $instance['phone'] ) ? ( $instance['phone'] ) : '';
        $phone2    = isset( $instance['phone2'] ) ? ( $instance['phone2'] ) : '';
        $fax    = isset( $instance['fax'] ) ? ( $instance['fax'] ) : '';
        $consultation_hours    = isset( $instance['consultation_hours'] ) ? ( $instance['consultation_hours'] ) : '';
        $final_acceptanc    = isset( $instance['final_acceptanc'] ) ? ( $instance['final_acceptanc'] ) : '';
        $text_one    = isset( $instance['text_one'] ) ? ( $instance['text_one'] ) : '';
        $text_two    = isset( $instance['text_two'] ) ? ( $instance['text_two'] ) : '';
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'address' ); ?>"><?php _e( 'Address:' ); ?></label>
            <textarea class="widefat" rows="3" cols="20" id="<?php echo $this->get_field_id('address'); ?>" name="<?php echo $this->get_field_name('address'); ?>"><?php echo $address; ?></textarea>
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'phone' ); ?>"><?php _e( 'Tel:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'phone' ); ?>" name="<?php echo $this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo $phone; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'phone2' ); ?>"><?php _e( 'Tel:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'phone2' ); ?>" name="<?php echo $this->get_field_name( 'phone2' ); ?>" type="text" value="<?php echo $phone2; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'fax' ); ?>"><?php _e( 'Fax:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'fax' ); ?>" name="<?php echo $this->get_field_name( 'fax' ); ?>" type="text" value="<?php echo $fax; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'consultation_hours' ); ?>"><?php _e( '診療時間:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'consultation_hours' ); ?>" name="<?php echo $this->get_field_name( 'consultation_hours' ); ?>" type="text" value="<?php echo $consultation_hours; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'final_acceptanc' ); ?>"><?php _e( '最終受付:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'final_acceptanc' ); ?>" name="<?php echo $this->get_field_name( 'final_acceptanc' ); ?>" type="text" value="<?php echo $final_acceptanc; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'text_one' ); ?>"><?php _e( 'Text one:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'text_one' ); ?>" name="<?php echo $this->get_field_name( 'text_one' ); ?>" type="text" value="<?php echo $text_one; ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'text_two' ); ?>"><?php _e( 'Text two:' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'text_two' ); ?>" name="<?php echo $this->get_field_name( 'text_two' ); ?>" type="text" value="<?php echo $text_two; ?>" />
        </p>
        <?php
    }
}