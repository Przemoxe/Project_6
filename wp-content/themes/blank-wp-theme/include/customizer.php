<?php 
  
    function theme_customizer_function($wp_customize){

             // hedaer
             $wp_customize->add_section('header', array(
                'title' => "Header",
                'priority' => 2,
                'description' => __('Header section'),
            ));
    
            $wp_customize->add_setting( 'header_logo', array(
                'sanitize_callback' => 'esc_url_raw'
            ));

            $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'header_logo_control', array(
                'label' => 'Upload Logo',
                'section' => 'header',
                'settings' => 'header_logo',
                'button_labels' => array(// All These labels are optional
                            'select' => 'Select Logo',
                            'remove' => 'Remove Logo',
                            'change' => 'Change Logo',
                            )
            )));

            //footer
        $wp_customize->add_section('footer', array(
            'title' => "Footer",
            'priority' => 2,
            'description' => __('Footer section'),
        ));


        $wp_customize->add_setting( 'footer_logo', array(
            'sanitize_callback' => 'esc_url_raw'
        ));
     
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo_control', array(
            'label' => 'Upload Logo',
            'section' => 'footer',
            'settings' => 'footer_logo',
            'button_labels' => array(// All These labels are optional
                        'select' => 'Select Logo',
                        'remove' => 'Remove Logo',
                        'change' => 'Change Logo',
                        )
        )));
        $wp_customize->add_setting('address_info', array(
            'default' => ''
        ));
        $wp_customize ->add_control('address_info', array(
            'label' => 'Address',
            'section' => 'footer'
        ));
        $wp_customize->add_setting('linkedin', array(
            'default' => ''
        ));
        $wp_customize ->add_control('linkedin', array(
            'label' => 'Linkedin',
            'section' => 'footer'
        ));
        $wp_customize->add_setting('facebook', array(
            'default' => ''
        ));
        $wp_customize ->add_control('facebook', array(
            'label' => 'Facebook',
            'section' => 'footer'
        ));
        $wp_customize->add_setting('twitter', array(
            'default' => ''
        ));
        $wp_customize ->add_control('twitter', array(
            'label' => 'Twitter',
            'section' => 'footer'
        ));
        $wp_customize->add_setting('instagram', array(
            'default' => ''
        ));
        $wp_customize ->add_control('instagram', array(
            'label' => 'Instagram',
            'section' => 'footer'
        ));
        $wp_customize->add_setting('rights', array(
            'default' => ''
        ));
        $wp_customize ->add_control('rights', array(
            'label' => 'Copyright texts',
            'section' => 'footer'
        ));
}
  add_action('customize_register','theme_customizer_function');
?>