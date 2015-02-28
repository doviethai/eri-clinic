<?php
/**
 * Created by PhpStorm.
 * User: HiepLT
 * Date: 12/26/14
 * Time: 14:36
 */
// override class Mltlngg_Widget
class Eri_Language_Widget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'eri_language_widget', /* Base ID */
            'Eri Language', /* Name */
            array( 'description' => __( 'Content language switch', ERI_LIB_DIR ), ) /* Args */
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
        $languages = icl_get_languages('skip_missing=N&orderby=KEY&order=DIR&link_empty_to=str');

        if(count($languages)<=1) return;

        $currentLanguage = array();
        echo $args['before_widget'];
        echo '<div class="lg">';
        ?>

        <div class="dropdown">
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <?php foreach ( $languages as $language ) :?>
                    <?php if($language["active"]==1){ $currentLanguage = $language; continue;} ?>
                    <li>
                        <a href="<?php echo $language["url"];?>">
                            <img src="<?php echo $language["country_flag_url"];?>" alt="<?php echo $language["native_name"];?>">
                            <?php echo $language["native_name"];?>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
            <button id="dLabel" type="button" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                <img src="<?php echo $currentLanguage["country_flag_url"];?>" alt="<?php echo $currentLanguage["native_name"];?>">
                <?php echo $currentLanguage["native_name"];?>
                <span class="caret"></span>
            </button>
        </div>
        <?php
        echo '</div>';
        echo $args['after_widget'];
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form( $instance ){
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        return $instance;
    }
}