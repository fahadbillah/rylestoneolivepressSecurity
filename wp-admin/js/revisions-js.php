<?php



// The JS here is purposefully obfuscated to preserve mystery and romance.

// If you want to see behind the curtain, visit http://core.trac.wordpress.org/ticket/15262



if ( !defined( 'ABSPATH' ) )

	exit;



/** @ignore */

function dvortr( $str ) {

	return strtr(

		$str,

		'\',.pyfgcrl/=\\aoeuidhtns-;qjkxbmwvz"<>PYFGCRL?+|AOEUIDHTNS_:QJKXBMWVZ[]',

		'qwertyuiop[]\\asdfghjkl;\'zxcvbnm,./QWERTYUIOP{}|ASDFGHJKL:"ZXCVBNM<>?-='

	);

}



$j = esc_url( site_url( '/wp-includes/js/jquery/jquery.js' ) );

$n = esc_html( $GLOBALS['current_user']->data->display_name );

$d = str_replace( '$', $redirect, dvortr( "Erb-y n.y ydco dall.b aiacbv Wa ce]-irxajt- dp.u]-$-VIr XajtWzaVv" ) );



wp_die( <<<EOEE

<style type="text/css">

html body { font-family: courier, monospace; }

#hal { text-decoration: blink; }

</style>

<script type="text/javascript" src="$j"></script>

<script type="text/javascript">

/* <![CDATA[ */

var n = '$n';


/* ]]> */

</script>

<span id="noscript">$d</span>

<blink id="hal">&#x258c;</blink>

EOEE

,

dvortr( 'Eabi.p!' )

);

