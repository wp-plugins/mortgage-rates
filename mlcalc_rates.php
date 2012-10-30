<?php

// Mortgage Rates widget
//
// Copyright (c) 2008-2012 MLCALC.COM
// http://www.mlcalc.com/free-widgets/mortgage-rates/wordpress.htm
// Oct 2012
//
// This is an add-on for WordPress
// http://wordpress.org/
//
// **********************************************************************
// This program is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; either version 2
// of the License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
// *****************************************************************

/*
Plugin Name: Mortgage Rates
Plugin URI: http://www.mlcalc.com/free-widgets/mortgage-rates/wordpress.htm
Description: Mortgage rates widget for your blog.
Author: Free Mortgage Tools
Version: 1.2
Author URI: http://www.mlcalc.com/free-widgets/
*/

/* Function: display_mlcalc_rates_widget
	** This function does the actual display of the widget in the sidebar
	**
	** args: $args (environment variables handled automatically by the hook)
	** returns: nothing
*/

define('MLCALC_RATES_URL', get_option('siteurl') . '/wp-content/plugins/mortgage-rates');
$mlcalc_rates_states = array ( 'XX' => array ( 'alias' => 'XX', 'name' => 'US Average', 'url' => 'http://www.mlcalc.com/mortgage-rates/', ), 'AL' => array ( 'alias' => 'AL', 'name' => 'Alabama', 'url' => 'http://www.mlcalc.com/mortgage-rates/alabama/', ), 'AK' => array ( 'alias' => 'AK', 'name' => 'Alaska', 'url' => 'http://www.mlcalc.com/mortgage-rates/alaska/', ), 'AZ' => array ( 'alias' => 'AZ', 'name' => 'Arizona', 'url' => 'http://www.mlcalc.com/mortgage-rates/arizona/', ), 'AR' => array ( 'alias' => 'AR', 'name' => 'Arkansas', 'url' => 'http://www.mlcalc.com/mortgage-rates/arkansas/', ), 'CA' => array ( 'alias' => 'CA', 'name' => 'California', 'url' => 'http://www.mlcalc.com/mortgage-rates/california/', ), 'CO' => array ( 'alias' => 'CO', 'name' => 'Colorado', 'url' => 'http://www.mlcalc.com/mortgage-rates/colorado/', ), 'CT' => array ( 'alias' => 'CT', 'name' => 'Connecticut', 'url' => 'http://www.mlcalc.com/mortgage-rates/connecticut/', ), 'DE' => array ( 'alias' => 'DE', 'name' => 'Delaware', 'url' => 'http://www.mlcalc.com/mortgage-rates/delaware/', ), 'DC' => array ( 'alias' => 'DC', 'name' => 'District of Columbia', 'url' => 'http://www.mlcalc.com/mortgage-rates/district-of-columbia/', ), 'FL' => array ( 'alias' => 'FL', 'name' => 'Florida', 'url' => 'http://www.mlcalc.com/mortgage-rates/florida/', ), 'GA' => array ( 'alias' => 'GA', 'name' => 'Georgia', 'url' => 'http://www.mlcalc.com/mortgage-rates/georgia/', ), 'HI' => array ( 'alias' => 'HI', 'name' => 'Hawaii', 'url' => 'http://www.mlcalc.com/mortgage-rates/hawaii/', ), 'ID' => array ( 'alias' => 'ID', 'name' => 'Idaho', 'url' => 'http://www.mlcalc.com/mortgage-rates/idaho/', ), 'IL' => array ( 'alias' => 'IL', 'name' => 'Illinois', 'url' => 'http://www.mlcalc.com/mortgage-rates/illinois/', ), 'IN' => array ( 'alias' => 'IN', 'name' => 'Indiana', 'url' => 'http://www.mlcalc.com/mortgage-rates/indiana/', ), 'IA' => array ( 'alias' => 'IA', 'name' => 'Iowa', 'url' => 'http://www.mlcalc.com/mortgage-rates/iowa/', ), 'KS' => array ( 'alias' => 'KS', 'name' => 'Kansas', 'url' => 'http://www.mlcalc.com/mortgage-rates/kansas/', ), 'KY' => array ( 'alias' => 'KY', 'name' => 'Kentucky', 'url' => 'http://www.mlcalc.com/mortgage-rates/kentucky/', ), 'LA' => array ( 'alias' => 'LA', 'name' => 'Louisiana', 'url' => 'http://www.mlcalc.com/mortgage-rates/louisiana/', ), 'ME' => array ( 'alias' => 'ME', 'name' => 'Maine', 'url' => 'http://www.mlcalc.com/mortgage-rates/maine/', ), 'MD' => array ( 'alias' => 'MD', 'name' => 'Maryland', 'url' => 'http://www.mlcalc.com/mortgage-rates/maryland/', ), 'MA' => array ( 'alias' => 'MA', 'name' => 'Massachusetts', 'url' => 'http://www.mlcalc.com/mortgage-rates/massachusetts/', ), 'MI' => array ( 'alias' => 'MI', 'name' => 'Michigan', 'url' => 'http://www.mlcalc.com/mortgage-rates/michigan/', ), 'MN' => array ( 'alias' => 'MN', 'name' => 'Minnesota', 'url' => 'http://www.mlcalc.com/mortgage-rates/minnesota/', ), 'MS' => array ( 'alias' => 'MS', 'name' => 'Mississippi', 'url' => 'http://www.mlcalc.com/mortgage-rates/mississippi/', ), 'MO' => array ( 'alias' => 'MO', 'name' => 'Missouri', 'url' => 'http://www.mlcalc.com/mortgage-rates/missouri/', ), 'MT' => array ( 'alias' => 'MT', 'name' => 'Montana', 'url' => 'http://www.mlcalc.com/mortgage-rates/montana/', ), 'NE' => array ( 'alias' => 'NE', 'name' => 'Nebraska', 'url' => 'http://www.mlcalc.com/mortgage-rates/nebraska/', ), 'NV' => array ( 'alias' => 'NV', 'name' => 'Nevada', 'url' => 'http://www.mlcalc.com/mortgage-rates/nevada/', ), 'NH' => array ( 'alias' => 'NH', 'name' => 'New Hampshire', 'url' => 'http://www.mlcalc.com/mortgage-rates/new-hampshire/', ), 'NJ' => array ( 'alias' => 'NJ', 'name' => 'New Jersey', 'url' => 'http://www.mlcalc.com/mortgage-rates/new-jersey/', ), 'NM' => array ( 'alias' => 'NM', 'name' => 'New Mexico', 'url' => 'http://www.mlcalc.com/mortgage-rates/new-mexico/', ), 'NY' => array ( 'alias' => 'NY', 'name' => 'New York', 'url' => 'http://www.mlcalc.com/mortgage-rates/new-york/', ), 'NC' => array ( 'alias' => 'NC', 'name' => 'North Carolina', 'url' => 'http://www.mlcalc.com/mortgage-rates/north-carolina/', ), 'ND' => array ( 'alias' => 'ND', 'name' => 'North Dakota', 'url' => 'http://www.mlcalc.com/mortgage-rates/north-dakota/', ), 'OH' => array ( 'alias' => 'OH', 'name' => 'Ohio', 'url' => 'http://www.mlcalc.com/mortgage-rates/ohio/', ), 'OK' => array ( 'alias' => 'OK', 'name' => 'Oklahoma', 'url' => 'http://www.mlcalc.com/mortgage-rates/oklahoma/', ), 'OR' => array ( 'alias' => 'OR', 'name' => 'Oregon', 'url' => 'http://www.mlcalc.com/mortgage-rates/oregon/', ), 'PA' => array ( 'alias' => 'PA', 'name' => 'Pennsylvania', 'url' => 'http://www.mlcalc.com/mortgage-rates/pennsylvania/', ), 'RI' => array ( 'alias' => 'RI', 'name' => 'Rhode Island', 'url' => 'http://www.mlcalc.com/mortgage-rates/rhode-island/', ), 'SC' => array ( 'alias' => 'SC', 'name' => 'South Carolina', 'url' => 'http://www.mlcalc.com/mortgage-rates/south-carolina/', ), 'SD' => array ( 'alias' => 'SD', 'name' => 'South Dakota', 'url' => 'http://www.mlcalc.com/mortgage-rates/south-dakota/', ), 'TN' => array ( 'alias' => 'TN', 'name' => 'Tennessee', 'url' => 'http://www.mlcalc.com/mortgage-rates/tennessee/', ), 'TX' => array ( 'alias' => 'TX', 'name' => 'Texas', 'url' => 'http://www.mlcalc.com/mortgage-rates/texas/', ), 'UT' => array ( 'alias' => 'UT', 'name' => 'Utah', 'url' => 'http://www.mlcalc.com/mortgage-rates/utah/', ), 'VT' => array ( 'alias' => 'VT', 'name' => 'Vermont', 'url' => 'http://www.mlcalc.com/mortgage-rates/vermont/', ), 'VA' => array ( 'alias' => 'VA', 'name' => 'Virginia', 'url' => 'http://www.mlcalc.com/mortgage-rates/virginia/', ), 'WA' => array ( 'alias' => 'WA', 'name' => 'Washington', 'url' => 'http://www.mlcalc.com/mortgage-rates/washington/', ), 'WV' => array ( 'alias' => 'WV', 'name' => 'West Virginia', 'url' => 'http://www.mlcalc.com/mortgage-rates/west-virginia/', ), 'WI' => array ( 'alias' => 'WI', 'name' => 'Wisconsin', 'url' => 'http://www.mlcalc.com/mortgage-rates/wisconsin/', ), 'WY' => array ( 'alias' => 'WY', 'name' => 'Wyoming', 'url' => 'http://www.mlcalc.com/mortgage-rates/wyoming/', ),);

function display_mlcalc_rates_widget( $args ) {
	extract( $args );
	$options = get_option( 'widget_mlcalc_rates' );
	$title   = $options['title'];

	echo $before_widget;
	echo $before_title
		 . $title
		 . $after_title;

	display_mlcalc_rates($options);

	echo $after_widget;
}

/* Function: display_mlcalc_rates
	** This function does the actual display of the common part of the widget
	**
	** args: $options - to skip duplicate get_options calls
	** returns: nothing
*/
function display_mlcalc_rates($options = array()) {
	global $mlcalc_ratesURL, $mlcalc_rates_states;
	if(empty($options)) $options = get_option( 'widget_mlcalc_rates' );

	$state     = empty( $options['state'] ) ? 'XX' : $options['state'];
	$form_size = empty( $options['form_size'] ) ? 'small' : $options['form_size'];
	
	$SECTION = $mlcalc_rates_states[$state];

	echo "<!-- MLCALC RATES BEGIN -->"."\r\n";
	if($form_size == 'small'){
		?>
		<script type="text/javascript">if(typeof jQuery == "undefined"){document.write(unescape("%3Cscript src='" + (document.location.protocol == 'https:' ? 'https:' : 'http:') + "//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));mlcalc_jquery_noconflict=1;};</script>
		 <!-- Oct 2012 --> <div id="MLCalcRatesForm<?php echo $SECTION["alias"]; ?>" class="MLCalcRatesForm"> <!--[if lte IE 6]> <script type="text/javascript" src="http://cdn.mlcalc.com/themes/mlcalc/jquery.pngFix.js"></script> <![endif]--> <table cellpadding="0" cellspacing="0" width="150"> <tr> <td colspan="3" class="zeroHeight"><img src="http://cdn.mlcalc.com/themes/mlcalc/images/top-small.png" width="150" height="13" alt="" /></td> </tr> <tr> <td style="background: url(http://cdn.mlcalc.com/themes/mlcalc/images/left-bg.png) repeat-y" width="7"></td> <td class="formPlaceHolder" width="136"> <form action="<?php echo $SECTION["url"]; ?>" method="post" id="MLCalcRatesFormTrend<?php echo $SECTION["alias"]; ?>" target="MLCalcRatesFrame"> <input type="hidden" name="state" value="<?php echo $SECTION["alias"]; ?>" /> <input type="hidden" name="wg" value="widget" /> </form> <table cellpadding="0" cellspacing="0" width="136"> <tr><td width="7"></td><td colspan="4"><?php if ($SECTION['alias'] == "XX") { echo '<div class="name">US Average<a href="' . $SECTION['url'] . '" class="nameB">Mortgage Rates</a></div>'; } else { echo '<a href="'. $SECTION['url'] . '" class="name">' . $SECTION['name'] . ' <b>Mortgage Rates</b></a>'; } ?></td></tr> <tr><td width="7" height="5"></td></tr> <tr class="odd" id="type30yf"> <td width="7"></td> <td width="83">30 Year Fixed</td> <td width="36"><span class="loading">loading...</span></td> <td width="5"></td> <td width="5"></td> </tr> <tr class="even" id="type15yf"> <td width="7"></td> <td width="83">15 Year Fixed</td> <td width="36"><span class="loading">loading...</span></td> <td width="5"></td> <td width="5"></td> </tr> <tr class="odd" id="type51arm"> <td width="7"></td> <td width="83">5/1 ARM</td> <td width="36"><span class="loading">loading...</span></td> <td width="5"></td> <td width="5"></td> </tr> <tr><td width="7" height="4" colspan="5"></td></tr> <tr><td colspan="5"> <center><table cellpadding="0" cellspacing="0"><tr> <td valign="bottom"><img src="http://cdn.mlcalc.com/themes/mlcalc/images/icon-trend-small.gif" width="15" height="12" alt="" /></td> <td width="5"></td> <td id="trendLink">View Trend</td> </tr></table></center> </td></tr> </table> </td> <td style="background: url(http://cdn.mlcalc.com/themes/mlcalc/images/right-bg.png) repeat-y" width="7"></td> </tr> <tr> <td colspan="3" class="zeroHeight"><img src="http://cdn.mlcalc.com/themes/mlcalc/images/bottom-small.png" width="150" height="13" alt="" /></td> </tr> </table> </div> 
		<script type="text/javascript" src="<?php echo str_replace('http://www.', 'http://cdn.', $SECTION['url']); ?>wordpress.js"></script>
		<?php

	} else {
		?>
		<script type="text/javascript">if(typeof jQuery == "undefined"){document.write(unescape("%3Cscript src='" + (document.location.protocol == 'https:' ? 'https:' : 'http:') + "//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js' type='text/javascript'%3E%3C/script%3E"));mlcalc_jquery_noconflict=1;};</script>
		 <!-- Oct 2012 --> <div id="MLCalcRatesForm<?php echo $SECTION["alias"]; ?>" class="MLCalcRatesForm"> <!--[if lte IE 6]> <script type="text/javascript" src="http://cdn.mlcalc.com/themes/mlcalc/jquery.pngFix.js"></script> <![endif]--> <table cellpadding="0" cellspacing="0" width="300"> <tr> <td colspan="3" class="zeroHeight"><img src="http://cdn.mlcalc.com/themes/mlcalc/images/top.png" width="300" height="13" alt="" /></td> </tr> <tr> <td style="background: url(http://cdn.mlcalc.com/themes/mlcalc/images/left-bg.png) repeat-y" width="7"></td> <td class="formPlaceHolder" width="286"> <form action="<?php echo $SECTION["url"]; ?>" method="post" id="MLCalcRatesFormTrend<?php echo $SECTION["alias"]; ?>" target="MLCalcRatesFrame"> <input type="hidden" name="state" value="<?php echo $SECTION["alias"]; ?>" /> <input type="hidden" name="wg" value="widget" /> </form> <table cellpadding="0" cellspacing="0" width="286"> <tr><td width="14"></td><td colspan="4" width="272"><?php if ($SECTION['alias'] == "XX") { echo '<div class="name">US Average<a href="' . $SECTION['url'] . '" class="nameB">Mortgage Rates</a></div>'; } else { echo '<a href="'. $SECTION['url'] . '" class="name">' . $SECTION['name'] . ' <b>Mortgage Rates</b></a>'; } ?></td></tr> <tr><td width="14" height="5"></td></tr> <tr class="odd" id="type30yf"> <td width="14"></td> <td width="157">30 Year Fixed</td> <td width="52"><span class="loading">loading...</span></td> <td width="35" class="change"></td> <td width="14"></td> </tr> <tr class="even" id="type15yf"> <td width="14"></td> <td width="157">15 Year Fixed</td> <td width="52"><span class="loading">loading...</span></td> <td width="35" class="change"></td> <td width="14"></td> </tr> <tr class="odd" id="type51arm"> <td width="14"></td> <td width="157">5/1 ARM</td> <td width="52"><span class="loading">loading...</span></td> <td width="35" class="change"></td> <td width="14"></td> </tr> <tr><td width="14" height="7" colspan="5"></td></tr> <tr><td colspan="6"> <center><table cellpadding="0" cellspacing="0"><tr> <td valign="bottom"><img src="http://cdn.mlcalc.com/themes/mlcalc/images/icon-trend.gif" width="18" height="15" alt="" /></td> <td width="6"></td> <td id="trendLink">View Trend</td> </tr></table></center> </td></tr> <tr><td width="14" height="3" colspan="5"></td></tr> </table> </td> <td style="background: url(http://cdn.mlcalc.com/themes/mlcalc/images/right-bg.png) repeat-y" width="7"></td> </tr> <tr> <td colspan="3" class="zeroHeight"><img src="http://cdn.mlcalc.com/themes/mlcalc/images/bottom.png" width="300" height="13" alt="" /></td> </tr> </table> </div> 
		<script type="text/javascript" src="<?php echo str_replace('http://www.', 'http://cdn.', $SECTION['url']); ?>wordpress.js"></script>
		<?php
	}

	echo "<!-- MLCALC RATES END -->\r\n";
}

/* Function: mlcalc_rates_head_data
**
** This function inserts link to CSS file into header
**
** args: nothing
** returns: nothing
*/

function mlcalc_rates_head_data(){
	$options = get_option( 'widget_mlcalc_rates' );
	$form_size = empty( $options['form_size'] ) ? 'small' : $options['form_size'];
	if($form_size == 'small'){
		echo '<link type="text/css" rel="stylesheet" href="http://cdn.mlcalc.com/themes/mlcalc/rates-widget-form-small.css" />';
	} else {
		echo '<link type="text/css" rel="stylesheet" href="http://cdn.mlcalc.com/themes/mlcalc/rates-widget-form.css" />';
	}
}

/* Function: mlcalc_rates_control
**
** This function draws the controls form on the widget page and
** saves the settings when the "Save" button is clicked
**
** args: nothing
** returns: nothing
*/

function mlcalc_rates_control() {
	global $mlcalc_ratesURL, $mlcalc_rates_states;
	$options = $newoptions = get_option('widget_mlcalc_rates');

	if ( $_POST['mlcalc_rates-submit'] ) {
		$newoptions['title']     = strip_tags(stripslashes($_POST['mlcalc_rates-title']));
		$newoptions['state']     = strip_tags(stripslashes($_POST['mlcalc_rates-state']));
		$newoptions['form_size'] = strip_tags(stripslashes($_POST['mlcalc_rates-form_size']));
	}
	if ( $options != $newoptions ) {
		$options = $newoptions;
		update_option('widget_mlcalc_rates', $options);
	}

	$title = esc_attr($options['title']);
	$state = esc_attr($options['state']);
	$form_size = esc_attr($options['form_size']);
?>
		<p><label for="mlcalc_rates-title"><?php _e('Title:'); ?> <input class="widefat" id="mlcalc_rates-title" name="mlcalc_rates-title" type="text" value="<?php echo $title; ?>" /></label></p>
		<p>
			<label for="mlcalc_rates-state"><?php _e( 'State:' ); ?>
				<select name="mlcalc_rates-state" id="mlcalc_rates-state" class="widefat">
					<?php
						foreach($mlcalc_rates_states as $SECTION) {
							echo '<option value="' . $SECTION['alias'] .'"' . ( $options['state'] == $SECTION['alias'] ? ' selected="selected"' : '' ). '>' . $SECTION['name'] . '</option>';
						}
					?>
				</select>
			</label>
		</p>
		<p>
			<label for="mlcalc_rates-form_size"><?php _e( 'Form size:' ); ?>
				<select name="mlcalc_rates-form_size" id="mlcalc_rates-form_size" class="widefat">
					<option value="small"<?php selected( $options['form_size'], 'small' ); ?>><?php _e('Narrow (width = 150px)'); ?></option>
					<option value="big"<?php selected( $options['form_size'], 'big' ); ?>><?php _e('Wide (width = 300px)'); ?></option>
				</select>
			</label>
		</p>
		<input type="hidden" id="mlcalc_rates-submit" name="mlcalc_rates-submit" value="1" />
<?php
}

/* Function: mlcalc_rates_register
**
** Registers the MLCALC widget with the widget page
**
** args: none
** returns: nothing
*/

function mlcalc_rates_register() {
	$widget_ops = array('classname' => 'widget_mlcalc_rates', 'description' => __('Mortgage rates widget for your blog'));
	$name = __('Mortgage Rates');

	wp_register_sidebar_widget( 'mlcalc_rates', $name, 'display_mlcalc_rates_widget', $widget_ops );
	wp_register_widget_control( 'mlcalc_rates', $name, 'mlcalc_rates_control' );
}

// This is important
add_action( 'widgets_init', 'mlcalc_rates_register' );
add_action( 'wp_head', 'mlcalc_rates_head_data' );


?>