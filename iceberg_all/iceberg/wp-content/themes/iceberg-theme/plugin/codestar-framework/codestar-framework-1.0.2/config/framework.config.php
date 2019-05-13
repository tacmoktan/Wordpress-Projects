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
          array(
          'id'    => 'header_logo2',
          'type'  => 'image',
          'title' => 'Logo',
          'desc'  => 'This allow you to upload/edit logo.',
        ),          
        // end: a field
          array(
          'id'    => 'company_description',
          'type'  => 'textarea',
          'title' =>  'Company Description',
        ),
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
    array(
      'id'       => 'alternate_header_email',
      'type'     => 'text',
      'title'    => 'Alternate Email',
      'info'     => 'This allows you to enter your shop Alternate Email Address',
      'attributes'    => array(
        'placeholder' => 'Email'
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
          'id'  => 'slider_title1',
          'type'=> 'text',
          'title' => 'Slider title 1'
        ),
        array(
          'id'  => 'slider_description1',
          'type'=>'text',
          'title'=> 'Slider Description 1'
        ),
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Image Slider Upload Section'
        ),
        array(
          'id'        => 'slider2',
          'type'      => 'image',
          'title'     => 'Image Slider 2',
          'add_title' => 'Upload Image',
        ),
        array(
          'id'  => 'slider_title2',
          'type'=> 'text',
          'title' => 'Slider title 2'
        ),
        array(
          'id'  => 'slider_description2',
          'type'=>'text',
          'title'=> 'Slider Description 2'
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
        array(
          'id'  => 'slider_title3',
          'type'=> 'text',
          'title' => 'Slider title 3'
        ),
        array(
          'id'  => 'slider_description3',
          'type'=>'text',
          'title'=> 'Slider Description 3'
        ),
        array(
          'type'    => 'notice',
          'class'   => 'info',
          'content' => 'Image Slider Upload Section'
        ),
        array(
          'id'        => 'slider4',
          'type'      => 'image',
          'title'     => 'Image Slider 4',
          'add_title' => 'Upload Image',
        ),
        array(
          'id'  => 'slider_title4',
          'type'=> 'text',
          'title' => 'Slider title 4'
        ),
        array(
          'id'  => 'slider_description4',
          'type'=>'text',
          'title'=> 'Slider Description 4'
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
      'id'  => 'instagram',
      'type'=> 'text',
      'title'=>'Instagram',
      'info' =>'Copy Instagram Link and Paste it here.',
      'attributes' => array(
          'placeholder'=>'Web URL'
      ),
    ),
  ),
);

$options[] = array(
    'name' => 'company_description',
    'title' => 'Company Description',
    'fields'=> array(
      /*begin a field*/
      array(
          'type'=> 'notice',
          'class'=> 'info',
          'content'=> 'Company Descripton Section'
      ),
      /*icon*/
      array(
          'id' => 'company_description_icon1',
          'type'=>'icon',
          'title'=>'Add icon1',
      ),
      /*title*/
      array(
          'id' => 'company_description_title1',
          'type'=> 'text',
          'title'=> 'Add Company Description Title1'
      ),
      /*content*/
      array(
          'id'  => 'company_description_content1',
          'type'=> 'textarea',
          'title'=> 'Add Company Description Content1'
      ),
      /*end a field*/

      /*begin a field*/
      array(
          'type'=> 'notice',
          'class'=> 'info',
          'content'=> 'Company Descripton Section'
      ),
      /*icon*/
      array(
          'id' => 'company_description_icon2',
          'type'=>'icon',
          'title'=>'Add icon2',
      ),
      /*title*/
      array(
          'id' => 'company_description_title2',
          'type'=> 'text',
          'title'=> 'Add Company Description Title2'
      ),
      /*content*/
      array(
          'id'  => 'company_description_content2',
          'type'=> 'textarea',
          'title'=> 'Add Company Description Content2'
      ),
      /*end a field*/

      /*begin a field*/
      array(
          'type'=> 'notice',
          'class'=> 'info',
          'content'=> 'Company Descripton Section'
      ),
      /*icon*/
      array(
          'id' => 'company_description_icon3',
          'type'=>'icon',
          'title'=>'Add icon3',
      ),
      /*title*/
      array(
          'id' => 'company_description_title3',
          'type'=> 'text',
          'title'=> 'Add Company Description Title3'
      ),
      /*content*/
      array(
          'id'  => 'company_description_content3',
          'type'=> 'textarea',
          'title'=> 'Add Company Description Content3'
      ),
      /*end a field*/
    
      /*begin a field*/
      array(
          'type'=> 'notice',
          'class'=> 'info',
          'content'=> 'Company Descripton Section'
      ),
      /*icon*/
      array(
          'id' => 'company_description_icon4',
          'type'=>'icon',
          'title'=>'Add icon4',
      ),
      /*title*/
      array(
          'id' => 'company_description_title4',
          'type'=> 'text',
          'title'=> 'Add Company Description Title4'
      ),
      /*content*/
      array(
          'id'  => 'company_description_content4',
          'type'=> 'textarea',
          'title'=> 'Add Company Description Content4'
      )
      /*end a field*/
    ),
);

$options[] = array(
    'name'  =>'our_clients',
    'title' =>'Our Clients',
    'fields'=>array(
        /*begin field*/
        /*heading*/
        array(
          'type'  =>  'notice',
          'class' =>  'info',
          'content' =>  "Add Client's logos"
        ),
        
        array(
          'id'        =>  'logo_client1',
          'type'      =>  'image',
          'title'     =>  'Logo Client1',
          'add_title' =>  'Add Logo Client1'
        ),

        array(
          'id'        =>  'logo_client2',
          'type'      =>  'image',
          'title'     =>  'Logo Client2',
          'add_title' =>  'Add Logo Client2'
        ),

        array(
          'id'        =>  'logo_client3',
          'type'      =>  'image',
          'title'     =>  'Logo Client3',
          'add_title' =>  'Add Logo Client3'
        ),

        array(
          'id'        =>  'logo_client4',
          'type'      =>  'image',
          'title'     =>  'Logo Client4',
          'add_title' =>  'Add Logo Client4'
        ),

        array(
          'id'        =>  'logo_client5',
          'type'      =>  'image',
          'title'     =>  'Logo Client5',
          'add_title' =>  'Add Logo Client5'
        ),

        array(
          'id'        =>  'logo_client6',
          'type'      =>  'image',
          'title'     =>  'Logo Client6',
          'add_title' =>  'Add Logo Client6'
        ),

        array(
          'id'        =>  'logo_client7',
          'type'      =>  'image',
          'title'     =>  'Logo Client7',
          'add_title' =>  'Add Logo Client7'
        ),

        array(
          'id'        =>  'logo_client8',
          'type'      =>  'image',
          'title'     =>  'Logo Client8',
          'add_title' =>  'Add Logo Client8'
        ),

        array(
          'id'        =>  'logo_client9',
          'type'      =>  'image',
          'title'     =>  'Logo Client9',
          'add_title' =>  'Add Logo Client9'
        ),

        array(
          'id'        =>  'logo_client10',
          'type'      =>  'image',
          'title'     =>  'Logo Client10',
          'add_title' =>  'Add Logo Client10'
        ),

        array(
          'id'        =>  'logo_client11',
          'type'      =>  'image',
          'title'     =>  'Logo Client11',
          'add_title' =>  'Add Logo Client11'
        ),

        array(
          'id'        =>  'logo_client12',
          'type'      =>  'image',
          'title'     =>  'Logo Client12',
          'add_title' =>  'Add Logo Client12'
        ),

        array(
          'id'        =>  'logo_client13',
          'type'      =>  'image',
          'title'     =>  'Logo Client13',
          'add_title' =>  'Add Logo Client13'
        ),
        /*end field*/
    ),
);

/*about objectives*/
$options[] = array(
    'name'  =>'about_objectives',
    'title' =>'About Objectives',
    'fields'=>array(
        /*begin field*/
        /*first objective*/
        array(
          'type'  =>  'notice',
          'class' =>  'info',
          'content' =>  "Add Objective1"
        ),

        /*objective image*/
        array(
          'id'        =>  'objective_image1',
          'type'      =>  'image',
          'title'     =>  'Objective Image1',
          'add_title' =>  'Add Objective Image1'
        ),
        /*objective title*/
        array(
          'id'  => 'objective_title1',
          'type'=> 'text',
          'title'=> 'Add Objective title1'
        ),
        /*objective description*/
        array(
          'id'  => 'objective_description1',
          'type'=> 'textarea',
          'title'=> 'Add Objective Description1'
        ),
        /*end field*/

                /*begin field*/
        /*first objective*/
        array(
          'type'  =>  'notice',
          'class' =>  'info',
          'content' =>  "Add Objective2"
        ),

        /*objective image*/
        array(
          'id'        =>  'objective_image2',
          'type'      =>  'image',
          'title'     =>  'Objective Image2',
          'add_title' =>  'Add Objective Image2'
        ),
        /*objective title*/
        array(
          'id'  => 'objective_title2',
          'type'=> 'text',
          'title'=> 'Add Objective title2'
        ),
        /*objective description*/
        array(
          'id'  => 'objective_description2',
          'type'=> 'textarea',
          'title'=> 'Add Objective Description2'
        ),
        /*end field*/
        /*begin field*/
        /*first objective*/
        array(
          'type'  =>  'notice',
          'class' =>  'info',
          'content' =>  "Add Objective3"
        ),

        /*objective image*/
        array(
          'id'        =>  'objective_image3',
          'type'      =>  'image',
          'title'     =>  'Objective Image3',
          'add_title' =>  'Add Objective Image3'
        ),
        /*objective title*/
        array(
          'id'  => 'objective_title3',
          'type'=> 'text',
          'title'=> 'Add Objective title3'
        ),
        /*objective description*/
        array(
          'id'  => 'objective_description3',
          'type'=> 'textarea',
          'title'=> 'Add Objective Description3'
        ),
        /*end field*/
    ),
);
CSFramework::instance( $settings, $options );