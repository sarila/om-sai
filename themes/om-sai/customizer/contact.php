<?php
  function omsai_contact_customizer_section($wp_customize){
    // Header  Section
    $wp_customize->add_section('omsai_header_section', array(
      'title' => __('Top Header', 'omsai'),
      // 'priority' => 200
    ));

    // Phone Handle
    $wp_customize->add_setting('omsai_phone_handle', array(
       'default' => ''
    ));

    // Phone Customizer
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'omsai_phone_text', array(
       'label' => __('Phone Number', 'omsai'),
       'section' => 'omsai_header_section',
       'settings' => 'omsai_phone_handle',
       'description' => __('Enter Phone Number', 'omsai'),
       'type' => 'text'
    )));

    // address Handle
    $wp_customize->add_setting('omsai_address_handle', array(
       'default' => ''
    ));

    // address Customizer
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'omsai_address_text', array(
       'label' => __('address ', 'omsai'),
       'section' => 'omsai_header_section',
       'settings' => 'omsai_address_handle',
       'description' => __('Enter address ', 'omsai'),
       'type' => 'text'
    )));

    // email Handle
    $wp_customize->add_setting('omsai_email_handle', array(
       'default' => ''
    ));

    // email Customizer
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'omsai_email_text', array(
       'label' => __('email address', 'omsai'),
       'section' => 'omsai_header_section',
       'settings' => 'omsai_email_handle',
       'description' => __('Enter email Number', 'omsai'),
       'type' => 'text'
    )));



    //For Social (New section)
    $wp_customize->add_section('omsai_social_section', array(
      'title' => __('Social Media', 'omsai'),
      // 'priority' => 200
    ));
    //for Faacebook (handle)
    $wp_customize->add_setting('omsai_facebook_handle', array(
       'default' => ''
    ));
    //for facebook(customizer)
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'omsai_facebook_text', array(
       'label' => __('Facebook URL', 'omsai'),
       'section' => 'omsai_social_section',
       'settings' => 'omsai_facebook_handle',
       'description' => __('Enter Facebook Page Link', 'omsai'),
       'type' => 'url'
    )));

    //for instagram (handle)
    $wp_customize->add_setting('omsai_instagram_handle', array(
       'default' => ''
    ));
    //for instagram(customizer)
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'omsai_instagram_text', array(
       'label' => __('instagram URL', 'omsai'),
       'section' => 'omsai_social_section',
       'settings' => 'omsai_instagram_handle',
       'description' => __('Enter instagram Page Link', 'omsai'),
       'type' => 'url'
    )));

    //for twitter (handle)
    $wp_customize->add_setting('omsai_twitter_handle', array(
       'default' => ''
    ));
    //for twitter(customizer)
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'omsai_twitter_text', array(
       'label' => __('twitter URL', 'omsai'),
       'section' => 'omsai_social_section',
       'settings' => 'omsai_twitter_handle',
       'description' => __('Enter twitter Page Link', 'omsai'),
       'type' => 'url'
    )));
    //for footer image

    $wp_customize->add_setting('omsai_image_setting', array(
      'transport' => 'refresh',
      'height' => 325,
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'omsai_image_setting_control', array(
      'label' => __('Footer Image', 'omsai'),
      'section' => 'title_tagline',
      'settings' => 'omsai_image_setting'
    )));

    //for content in footer
    $wp_customize->add_setting('omsai_footertext_handle', array(
       'default' => ''
    ));
   
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'omsai_footertext_text', array(
       'label' => __('footertext URL', 'omsai'),
       'section' => 'title_tagline',
       'settings' => 'omsai_footertext_handle',
       'description' => __('Enter footer Text', 'omsai'),
       'type' => 'text'
    )));
  }
 ?>
