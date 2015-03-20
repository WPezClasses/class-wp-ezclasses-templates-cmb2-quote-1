<?php
/** 
 * Predefined CMB2 meta box / fields for quotes, testimonials, etc.
 *
 * Leans on (i.e., inherits) Class_WP_ezClasses_Admin_CMB2_Setup_1 which handles the brunt of the magic.
 *
 * PHP version 5.3
 *
 * LICENSE: TODO
 *
 * @package WPezClasses
 * @author Mark Simchock <mark.simchock@alchemyunited.com>
 * @since 0.5.1
 * @license TODO
 */
 
/**
 * == Change Log == 
 *
 * == 0.5.0 - Mon 1 Dec 2014 ==
 * --- Pop the champagne!
 */
 
/**
 * == TODO == 
 *
 *
 */

// No WP? Die! Now!!
if (!defined('ABSPATH')) {
	header( 'HTTP/1.0 403 Forbidden' );
    die();
}

if ( ! class_exists('Class_WP_ezClasses_Templates_CMB2_Quote_1') ) {
  class Class_WP_ezClasses_Templates_CMB2_Quote_1 extends Class_WP_ezClasses_Admin_CMB2_Setup_1{
    
	public function __construct() {
	  parent::__construct();
	}
			
	/**
	 *
	 */	
	public function cmb2_todo(){
	
	  $arr_todo = array(
	    'prefix'						=> '_ez_quote_1_',  // you can also pass this in via the arr_args
		'post_types'					=> array( 'TODO' ),	
		'localization_domain'			=> 'TODO',
		'priority'						=> 10,
		);
		
	  return $arr_todo;
	}
	
/**
 * ================ THIS IS WHERE YOUR MAGIC HAPPENS =========================================
 */

	/**
	 * The metabox "meta control center". 
	 *
	 * Note the 'active' arg for simple on/off of a given meta box. You can also switch the 
	 * methods for 'meta' and 'fields'. This ideally make it easier to reuse meta boxes and 
	 * fields from a library and not recode all the time.
	 *
	 * Finally you can also define the prefix here. This prefix will overide any others. 
	 * That said, in theory you could make this prefix blank ('') and define the prefix 
	 * on a field by field basis when you define the fields. If ya want. I guess :)
	 */
	public function metabox_active(){
	
	  $arr_metabox_active = array(
	  
		'ez_quote_1' => array(
		  'active'	=> true,
		  'meta'	=> 'ez_quote_1_meta',
		  'fields'	=> 'ez_quote_1_fields',
		                                // no prefix here, then use the "global" default
		  ),

          'ez_quote_1_design' => array(
              'active'	=> true,
              'meta'	=> 'ez_quote_1_design_meta',
              'fields'	=> 'ez_quote_1_design_fields',
              // no prefix here, then use the "global" default
          ),
	  );
	  return  $arr_metabox_active;
	} 
	
	/**
	 * The meta for the meta box gets "decoupled" from the fields.
	 */
	 
	public function ez_quote_1_meta(){
	
	  $mb_meta = array(
	    'cmb2' => array(
		  'id'           	=> 'ez-quote',
		  'title'			=> 'ezQuote',
		  'post_types' 		=> $this->_arr_post_types,
		  'context'       	=> 'normal',
		  'priority'      	=> 'high',
		  'layout'			=> 'col_two', 	// NEW & IMPROVED - this will be mapped to CMB2's 'show_names'		  
		  'cmb_styles' 		=> true, 		// false to disable the CMB stylesheet
		  )
		);
	  return $mb_meta;
	}

      public function ez_quote_1_design_meta(){

          $mb_meta = array(
              'cmb2' => array(
                  'id'           	=> 'ez-quote-design',
                  'title'			=> 'ezQuote: Design',
                  'post_types' 		=> $this->_arr_post_types,
                  'context'       	=> 'normal',
                  'priority'      	=> 'high',
                  'layout'			=> 'col_two', 	// NEW & IMPROVED - this will be mapped to CMB2's 'show_names'
                  'cmb_styles' 		=> true, 		// false to disable the CMB stylesheet
              )
          );
          return $mb_meta;
      }
		
	/**
	 * Aside for creating a slightly smoother and more logically structured CMB2 setup 
	 * workflow, it is now possible to build a library of fields / groups of fields and 
	 * then be able to reuse them "on demand." 
	 *
	 * Yes, in theory this is also possible with plain ol' CMB2. But that mindset is baked
	 * into this classes. Validation is also part of the fun & games now. 
	 */
	 
	public function ez_quote_1_fields(){
	
	  $mb_fields = array(
	  
	    'ezq1_f100' => array(
		  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
		  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot. 
		    'label' => 'The Quote',
		//	'desc' => 'TODO field description (optional)',
			'name'   => 'quote',
			'type' => 'textarea',
			),
		  ),
	  
	    'ezq1_f200' => array(
		  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
		  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot. 
		    'label' => 'Attributed to',
		//	'desc' => 'TODO', // 'File type: jpg. Dimensions should be square and no smaller than 450 x 450.',
			'name'   => 'attributed_to',
			'type' => 'text',
			),
		  ),
	  
	    'ezq1_f300' => array(
		  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
		  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot. 
		    'label' => 'Context',
		//	'desc' => 'TODO field description (optional)',
			'name'   => 'context',
			'type' => 'text',
			),
		  ),

        'ezq1_f400' => array(
              'active' => true, 	// NEW - not found in (nor actually used by) CMB2
              'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
                  'label' => 'Call to Action',
                  //	'desc' => 'TODO field description (optional)',
                  'name'   => 'call_to_action',
                  'type' => 'text',
              ),
          ),
		  
	    'ezq1_f500' => array(
		  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
		  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot. 
		    'label' => 'Link',
		//	'desc' => 'TODO field description (optional)',
			'name'   => 'link',
			'type' => 'text_url',
			),
		  ),
		  
	    'ezq1_f600' => array(
		  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
		  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot. 
		    'label' => 'Link Target',
		//	'desc' => 'TODO field description (optional)',
			'name'   => 'link_target',
			'type' => 'select',
            'options'          => array(
                '_self'     => 'Same frame (_self)',
                '_blank'    => 'New window (_blank)',
                '_parent'   => 'Parent frameset (_parent)',
                '_top'      => 'Full body of the window (_top)',
                ),
            'default' => '_self',
			),
		  ),
		  
	    'ezq1_f700' => array(
		  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
		  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
		    'label' => 'Caption',
		//	'desc' => 'TODO field description (optional)',
			'name'   => 'caption',
			'type' => 'text',
			),
		  ),
		  
		  
		);
	
	  $str_this_method = __FUNCTION__;
	  $str_this_method = $str_this_method . '_ezfilter';
	  if (method_exists($this, $str_this_method)){
	    $mb_fields = $this->$str_this_method($mb_fields);
	  }
	  
	  return $mb_fields;
	}
	
	/**
	 * Add, for example, your desc's here
	 */
	public function ez_quote_1_fields_ezfilter($arr_args = array()){
	
	  return $arr_args;
	}


      public function ez_quote_1_design_fields(){

          $mb_fields = array(

              'ezqd1_f100' => array(
                  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
                  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
                      'label' => 'Background Image',
                      //	'desc' => 'TODO field description (optional)',
                      'name'   => 'background_image',
                      'type' => 'file',
                  ),
              ),

              'ezqd1_f200' => array(
                  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
                  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
                      'label' => 'Background Image Position',
                      //	'desc' => 'TODO field description (optional)',
                      'name'   => 'background_position',
                      'type' => 'select',
                      'options' => array(

                          'left top'    => 'Left Top',
                          'left center' => 'Left Center',
                          'left bottom' => 'Left Bottom',

                          'center top'    => 'Center Top',
                          'center center' => 'Center Center',
                          'center bottom' => 'Center Bottom',

                          'right top'    => 'Right Top',
                          'right center' => 'Right Center',
                          'right bottom' => 'Right Bottom',

                      ),
                      'default' => 'center center'
                  ),
              ),

              'ezqd1_f300' => array(
                  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
                  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
                      'label' => 'Background Image Size',
                      //	'desc' => 'TODO field description (optional)',
                      'name'   => 'background_size',
                      'type' => 'select',
                      'options' => array(
                          'none'    => 'None',
                          'cover'   => 'Cover',
                          'contain' => 'Contain',
                          'auto'    => 'Auto',

                      ),
                      'default' => 'cover'
                  ),
              ),

              'ezqd1_f400' => array(
                  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
                  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
                      'label' => 'Overlay Background Image',
                      //	'desc' => 'TODO', // 'File type: jpg. Dimensions should be square and no smaller than 450 x 450.',
                      'name'   => 'overlay_background_image',
                      'type' => 'file',
                  ),
              ),

              'ezqd1_f500' => array(
                  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
                  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
                      'label' => 'Overlay Background Image Repeat',
                      //	'desc' => 'TODO field description (optional)',
                      'name'   => 'overlay_background_image_repeat',
                      'type' => 'select',
                      'options' => array(
                          'repeat'      => 'Repeat both vertically and horizontally',
                          'repeat-x'    => 'Repeat only horizontally',
                          'repeat-y'    => 'Repeat only vertically',
                          'no-repeat'   => 'Background-image will not be repeated'
                      ),
                      'default' => 'repeat'
                  ),
              ),

              'ezqd1_f600' => array(
                  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
                  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
                      'label' => 'Background Color',
                      //	'desc' => 'TODO field description (optional)',
                      'name'   => 'background_color',
                      'type' => 'select',
                      'options' => array(
                          'none'      => 'None',
                          'todo-1'    => 'TODO 1',
                          'todo-2'    => 'TODO 2',
                          'todo-n'    => 'TODO 3'
                      ),
                      'default' => 'repeat'
                  ),
              ),

              'ezqd1_f700' => array(
                  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
                  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
                      'label' => 'Font Size',
                      //	'desc' => 'TODO field description (optional)',
                      'name'   => 'font_size',
                      'type' => 'select',
                      'options' => array(
                          'xs'  => 'X-Small',
                          'sm'  => 'Small',
                          'md'  => 'Medium',
                          'lg'  => 'Large',
                          'xl'  => 'X-Large'
                      ),
                      'default' => 'repeat'
                  ),
              ),

              'ezqd1_f800' => array(
                  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
                  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
                      'label' => 'Font Color',
                      //	'desc' => 'TODO field description (optional)',
                      'name'   => 'font_color',
                      'type' => 'select',
                      'options' => array(
                          'none'      => 'None',
                          'todo-1'    => 'TODO 1',
                          'todo-2'    => 'TODO 2',
                          'todo-n'    => 'TODO 3'
                      ),
                      'default' => 'repeat'
                  ),
              ),

              'ezqd1_f900' => array(
                  'active' => true, 	// NEW - not found in (nor actually used by) CMB2
                  'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
                      'label' => 'Text Align',
                      //	'desc' => 'TODO field description (optional)',
                      'name'   => 'text_align',
                      'type' => 'select',
                      'options' => array(
                          'none'    => 'None',
                          'left'    => 'Left',
                          'center'  => 'Center',
                          'right'   => 'Right',
                          'justify' => 'Justify'
                      ),
                      'default' => 'left'
                  ),
              ),

              'ezqd1_f1000' => array(
              'active' => true, 	// NEW - not found in (nor actually used by) CMB2
              'cmb2'	=> array(	// NEW (KINDA) - the cmb2 stuff gets its own spot.
                  'label' => 'Text Position',
                  //	'desc' => 'TODO field description (optional)',
                  'name'   => 'text_position',
                  'type' => 'select',
                  'options' => array(

                      'left top'    => 'Left Top',
                      'left center' => 'Left Center',
                      'left bottom' => 'Left Bottom',

                      'center top'    => 'Center Top',
                      'center center' => 'Center Center',
                      'center bottom' => 'Center Bottom',

                      'right top'    => 'Right Top',
                      'right center' => 'Right Center',
                      'right bottom' => 'Right Bottom',

                  ),
                  'default' => 'center center'
              ),
          ),

          );

          $str_this_method = __FUNCTION__;
          $str_this_method = $str_this_method . '_ezfilter';
          if (method_exists($this, $str_this_method)){
              $mb_fields = $this->$str_this_method($mb_fields);
          }

          return $mb_fields;
      }

      /**
       * Add, for example, your desc's here
       */
      public function ez_quote_1_design_fields_ezfilter($arr_args = array()){

          return $arr_args;
      }

	
/**
 * ================ THAT'S IT - MAGIC COMPLETE =========================================
 */	
	
  }
} 

/**
 * And this is how you instantiate: 
 */
//$obj_instantiate = Class_WP_ezClasses_Templates_CMB2_Quote_1::ez_new();
