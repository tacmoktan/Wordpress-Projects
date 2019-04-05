<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Option',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Theme Options  <small>Iceberg Technology</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general-setting',
  'title'       => 'General Setting',
  'icon'        => 'fa fa-star',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
          'id'      => 'scroll_to_top',
          'type'    => 'switcher',
          'title'   => 'Show Scroll Top',
          'label'    => 'This allow you to show or hide Scroll top button',
          'default' => true,
        ),
    // end: a field

    array(
      'id'      => 'custom_css',
      'type'    => 'textarea',
      'title'   => 'Custom CSS',
      'desc'  => 'Add a Custom CSS to your site.',
    ),
  ), // end: fieldsnav 
);

// ------------------------------
// a option section with tabs   -
// ------------------------------
$options[]      = array(
  'name'        => 'header',
  'title'       => 'Header',
  'icon'        => 'fa fa-header',

  // begin: fields
  // begin: fields
      'fields'    => array(

        // begin: a field
          array(
          'id'    => 'header_logo1',
          'type'  => 'image',
          'title' => 'Logo',
          'desc'  => 'This allow you to upload/edit logo.',
        ),
        // end: a field

        // begin: a field
        array(
          'id'    => 'favicon',
          'type'  => 'image',
          'title' => 'Favicon',
          'desc'  => 'This allow you to add favicon of your website.',
        ),

        // // begin: a field
        // array(
        //   'type'    => 'notice',
        //   'class'   => 'info',
        //   'content' => 'UPLOAD BACKGROUND IMAGE/COLOR FOR YOUR HEADER',
        // ),
        // array(
        //   'id'    => 'header_background',
        //   'type'  => 'background',
        //   'title' => 'Background',
        //   'desc'  => 'This allow you to add background image/color to Header.',
        //   'info' =>  '<b>Note:</b>If you choose both image and color, then image will override your color.'
        // ),

        // begin: a field
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'STICKY HEADER',
        ),

        array(
          'id'      => 'sticky_header',
          'type'    => 'switcher',
          'title'   => 'STICKY',
          'label'    => 'This allow you to show or hide Scroll top button',
        ),
        // end: a field
      ), // end: fields
);

// begin: Top Bar options     -
    // -----------------------------
$options[]      = array(
  'name'      => 'contact-info',
  'title'     => 'Header Contact Details',
  'icon'      => 'fa fa-phone',
  'fields'    => array(

    
    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Top Bar Phone Number Section',
    ),
    
    array(
      'id'       => 'header_countrycode',
      'type'     => 'number',
      'title'    => 'Country Code',
      'info'     => 'This allows you to country code to your phone number',
      'attributes'    => array(
        'placeholder' => 'Eg. +41'
      ),
    ),
    array(
      'id'       => 'header_phone',
      'type'     => 'text',
      'title'    => 'Phone Number',
      'info'     => 'This allows you to enter your shop phone number',
      'attributes'    => array(
        'placeholder' => 'Phone Number'
      ),
    ),


    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Header  Address Section',
    ),


    array(
      'id'       => 'header_address',
      'type'     => 'text',
      'title'    => 'Address',
      'info'     => 'This allows you to enter your  Address',
      'attributes'    => array(
        'placeholder' => 'Address'
      ),
    ),

     array(
      'id'       => 'header_subaddress',
      'type'     => 'text',
      'title'    => 'Sub Address',
      'info'     => 'This allows you to enter your Sub Address',
      'attributes'    => array(
        'placeholder' => 'sub address'
      )
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Header Email Address Section',
    ),
    array(
      'id'       => 'header_email',
      'type'     => 'text',
      'title'    => 'Email',
      'info'     => 'This allows you to enter your shop Email Address',
      'attributes'    => array(
        'placeholder' => 'Email'
      ),


array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Welcome Note Section',
    ),
     array(
      'id'       => 'welcome_note',
      'type'     => 'textarea',
      'title'    => 'Welcome Note',
      'info'     => 'This allows you to enter your welcome Note',
      'attributes'    => array(
        'placeholder' => 'welcome note'
      ),
    ),
    ),
  ),
);

// // -----------------------------
// // begin: Menu Bar options     -
// // -----------------------------
// $options[]    =   array(
//   'name'      => 'navigation_menu',
//   'title'     => 'Nav Menu Bar',
//   'icon'      => 'fa fa-medium',
//   'fields'    => array(

//     // begin: a field
//     array(
//       'id'      => 'navmenu_background',
//       'type'    => 'color_picker',
//       'title'   => 'Navigation Menu Background Color',
//       'info'   => 'This allow you to Add color to your Nav-Menu background.',
//       //'rgba'    => false,
//       //'default' => '#fff',
//     ),
//     // begin: a field
//     array(
//       'id'      => 'navmenu_color',
//       'type'    => 'color_picker',
//       'title'   => 'Navigation Menu Text Color',
//       'info'   => 'This allow you to Add color to your Nav-Menu Text.',
//       //'rgba'    => false,
//       'default' => '#fff',
//     ),
//   ),
// ); // end: checkbox options


// // begin: Slider Image options     -
//     // -----------------------------
    $options[]      = array(
      'name'      => 'image-slider',
      'title'     => 'Image Slider',
      'icon'      => 'fa fa-image',
      'fields'    => array(
    
        
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Image Slider Upload Section',
        ),
        array(
          'id'        => 'slider1',
          'type'      => 'image',
          'title'     => 'Image Slider 1',
          'add_title' => 'Upload Image',
        ),
        
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Image Slider Upload Section',
        ),
        array(
          'id'        => 'slider2',
          'type'      => 'image',
          'title'     => 'Image Slider 2',
          'add_title' => 'Upload Image',
        ),
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Image Slider Upload Section',
        ),
        array(
          'id'        => 'slider3',
          'type'      => 'image',
          'title'     => 'Image Slider 3',
          'add_title' => 'Upload Image',
        ),
      ),
    );


// // begin: Top Bar options     -
//     // -----------------------------
// $options[]      = array(
//   'name'      => 'contact-us',
//   'title'     => 'Contact Us',
//   'icon'      => 'fa fa-address-card',
//   'fields'    => array(

    
//     array(
//       'type'    => 'notice',
//       'class'   => 'info',
//       'content' => 'Shop Address Section',
//     ),
//     array(
//       'id'      => 'contact-address',
//       'type'    => 'icon',
//       'title'   => 'Icon',
//       'default' => 'fa fa-map-marker',
//     ),

//     array(
//       'id'       => 'address',
//       'type'     => 'text',
//       'title'    => 'Address',
//       'info'     => 'This allows you to enter your shop Address',
//       'attributes'    => array(
//         'placeholder' => 'Address'
//       ),
//     ),

//     array(
//       'type'    => 'notice',
//       'class'   => 'info',
//       'content' => 'Shop Phone Number Section',
//     ),
//     array(
//       'id'      => 'contact-phone',
//       'type'    => 'icon',
//       'title'   => 'Icon',
//       'default' => 'fa fa-phone',
//     ),

//     array(
//       'id'       => 'country-code',
//       'type'     => 'number',
//       'title'    => 'Country Code',
//       'info'     => 'This allows you to enter your Country Code',
//       'validate' => 'numeric',
//       'attributes'    => array(
//         'placeholder' => '977'
//       )
//     ),

//     array(
//       'id'       => 'phone',
//       'type'     => 'text',
//       'title'    => 'Phone Number',
//       'info'     => 'This allows you to enter your shop phone number',
//       'attributes'    => array(
//         'placeholder' => 'Phone Number'
//       ),
//     ),

//     array(
//       'type'    => 'notice',
//       'class'   => 'info',
//       'content' => 'Shop Email Address Section',
//     ),
//     array(
//       'id'      => 'contact-email',
//       'type'    => 'icon',
//       'title'   => 'Icon',
//       'default' => 'fa fa-envelope',
//     ),

//     array(
//       'id'       => 'email-address',
//       'type'     => 'text',
//       'title'    => 'Email',
//       'info'     => 'This allows you to enter your shop Email Address',
//       'attributes'    => array(
//         'placeholder' => 'Email'
//       ),
//     ),

//     array(
//       'type'    => 'notice',
//       'class'   => 'info',
//       'content' => 'Shop Website URL Section',
//     ),
//     array(
//       'id'      => 'contact-website',
//       'type'    => 'icon',
//       'title'   => 'Icon',
//       'default' => 'fa fa-globe',
//     ),

//     array(
//       'id'       => 'website-url',
//       'type'     => 'text',
//       'title'    => 'Website URL',
//       'info'     => 'This allows you to enter your Website URL',
//       'attributes'    => array(
//         'placeholder' => 'Website URL'
//       ),
//     ),
//   ),
// );


// begin: Top Bar options     -
    // -----------------------------
$options[]      = array(
  'name'      => 'footer',
  'title'     => 'Footer and Social',
  'icon'      => 'fa fa-copyright',
  'fields'    => array(

    
    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Footer Copyright Section',
    ),
    array(
      'id'       => 'copyright',
      'type'     => 'textarea',
      'title'    => 'Footer Copyright',
      'info'     => 'This allows you to enter your copyright text.',
    ),

    array(
      'type'    => 'notice',
      'class'   => 'info',
      'content' => 'Social Icons Section',
    ),
    
    array(
      'id'       => 'facebook',
      'type'     => 'text',
      'title'    => 'Facebook',
      'info'     => 'Copy Facebook Link and Paste it here.',
      'attributes'    => array(
        'placeholder' => 'Web URL'
      ),
    ),
    array(
      'id'    => 'youtube',
      'type'  => 'text',
      'title' => 'Youtube',
      'info'  => 'Copy Youtube Link and Paste it here.',
      'attributes'    => array(
        'placeholder' => 'Web URL'
      ),
    ),
    array(
      'id'       => 'twitter',
      'type'     => 'text',
      'title'    => 'Twitter',
      'info'     => 'Copy Twitter Link and Paste it here.',
      'attributes'    => array(
        'placeholder' => 'Web URL'
      ),
    ),
    array(
      'id'       => 'plus-google',
      'type'     => 'text',
      'title'    => 'Google Plus',
      'info'     => 'Copy Google Plus Link and Paste it here.',
      'attributes'    => array(
        'placeholder' => 'Web URL'
      ),
    ),
    array(
      'id'       => 'linkedin',
      'type'     => 'text',
      'title'    => 'Linkedin',
      'info'     => 'Copy Linkedin Link and Paste it here.',
      'attributes'    => array(
        'placeholder' => 'Web URL'
      ),
    ),
    array(
      'id'       => 'rss',
      'type'     => 'text',
      'title'    => 'RSS',
      'info'     => 'Copy RSS Link and Paste it here.',
      'attributes'    => array(
        'placeholder' => 'Web URL'
      ),
    ),
  ),
);
/* Begin Service Section options */
$options[] = array(
    'name'  => 'service_section',
    'title' =>  'Service Section',
    'fields' => array(

      /*begin a field*/
      array(
        'type'    => 'notice',
        'class'   => 'info',
        'content' => 'Add service 1',
      ),
      array(
        'id'       => 'service_logo1',
        'type'     => 'image',
        'title'    => 'Service Logo',
        'add_title'=> 'Add logo'
      ),
      array(
        'id'   => 'service_title1',
        'type' => 'text',
        'title'=> 'Add Service Title'
      ),
      array(
        'id'  => 'service_description1',
        'type' => 'textarea',
        'title' => 'Add Service Description'
      ),
      /*end a field*/
      /*begin a field*/
      array(
        'type'    => 'notice',
        'class'   => 'info',
        'content' => 'Add service 2',
      ),
      array(
        'id'       => 'service_logo2',
        'type'     => 'image',
        'title'    => 'Service Logo',
        'add_title'=> 'Add logo'
      ),
      array(
        'id'   => 'service_title2',
        'type' => 'text',
        'title'=> 'Add Service Title'
      ),
      array(
        'id'  => 'service_description2',
        'type' => 'textarea',
        'title' => 'Add Service Description'
      ),
      /*end a field*/
      /*begin a field*/
      array(
        'type'    => 'notice',
        'class'   => 'info',
        'content' => 'Add service 3'
      ),
      array(
        'id'       => 'service_logo3',
        'type'     => 'image',
        'title'    => 'Service Logo',
        'add_title'=> 'Add logo'
      ),
      array(
        'id'   => 'service_title3',
        'type' => 'text',
        'title'=> 'Add Service Title'
      ),
      array(
        'id'  => 'service_description3',
        'type' => 'textarea',
        'title' => 'Add Service Description'
      ),
      /*end a field*/

    ),
    
);

/*end service section options*/

/*begin: Service Promotion*/
$options[] = array(
    'name'  => 'service_promotion' ,
    'title' => 'Service Promotion',
    'fields'=> array(
        /*begin a field*/
        array(
            'type'    => 'notice',
            'class'   => 'info', //this highlights the content
            'content' => 'Add Title & Description'
        ),
        array(
            'id'   =>'service_promotion_title',
            'type' =>'text',
            'title'=>'Service Promotion title'
        ),
        array(
            'id'    => 'service_promotion_description',
            'type'  =>'textarea',
            'title' =>'Service Promotion Description'  
        )
    )
);
/*end: Service Promotion*/

/*begin: User actions*/
$options[] = array(
      'name'  =>'user_actions',
      'title' =>'User Actions',
      'fields'=> array(
            /*begin a field*/
            /*array(
              'type'    => 'notice',
              'class'   => 'info',
              'content' => 'Add User Action'
            ),
            array(
              'id'  => 'user_action_image1',
              'type'=> 'image',
              'title'=>'User Action Image',
              'add_title'=>'Add User Action Image'
            ),*/
            array(
              'id' => 'font_awesome_icons1',
              'type'=>'icon',
              'title'=>'Font Awesome Icons'
            ),
            array(
              'id'=>'user_action_title1',
              'type'=>'text',
              'title'=>'User Action title'
            ),
            /*ends a field*/
            /*begins a field*/
            /*array(
              'type'=>'notice',
              'class'=>'info',
              'content'=>'Add User Action'
            ),
            array(
              'id'=>'user_action_image2',
              'type'=>'image',
              'title'=>'User Action Image',
              'add_title'=>'Add User Action Image'
            ),*/
            array(
              'id' => 'font_awesome_icons2',
              'type'=>'icon',
              'default' => 'fa-inbox',
              'title'=>'Font Awesome Icons'
            ),
            array(
              'id'=>'user_action_title2',
              'type'=>'text',
              'title'=>'User Action Title'
            ),
            /*end a field*/
            /*begin a field*/
            /*array(
              'type'=>'notice',
              'class'=>'info',
              'content'=>'Add User Action'
            ),
            array(
              'id'=>'user_action_image3',
              'type'=>'image',
              'title'=>'User Action Image',
              'add_title'=>'Add User Action Image'
            ),*/
            array(
              'id' => 'font_awesome_icons3',
              'type'=>'icon',
              'title'=>'Font Awesome Icons'
            ),
            array(
              'id'=>'user_action_title3',
              'type'=>'text',
              'title'=>'User Action Title'
            )
            /*end a field*/
      )
);
/*end: User actions*/
/*begin: Footer*/
$options[] = array(
      'name'=>'footer_logo_description',
      'title'=>'Footer logo description',
      'fields'=> array(
            /*begin a field*/
            array(
              'type'=>'notice',
              'class'=>'info',
              'content'=>'Add footer logo and description'
            ),
            array(
               'id'=>'footer_logo',
               'type'=>'image',
               'title'=>'Footer logo',
               'add_title'=>'Add footer logo' 
            ),
            array(
               'id'=>'footer_description',
               'type'=>'textarea',
               'title'=>'Footer Description'
            )
            /*end a field*/
      )

);
/*end: Footer*/

/*begin: front-page slider*/
$options[] = array(
      'name'=> 'front_page_slider',
      'title'=>'Front Page Slider',
      'fields'=> array(
            /*begin a field*/
            array(
                'type'=>'notice',
                'class'=>'info',
                'content'=>'Add front-page slider image and description'
            ),
            array(
                'id'=>'slider_image',
                'type'=>'image',
                'title'=>'Slider Image',
                'add_title'=>'Add slider image'
            ),
            array(
                'id'=>'slider_description',
                'type'=>'textarea',
                'title'=>'Slider Description'
            )
            /*end a field*/
      )
);
/*end: front-page slider*/
  
CSFramework::instance( $settings, $options ); 