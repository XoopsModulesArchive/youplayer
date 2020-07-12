<?php
// $Id: xoops_version.php,v 2.4 2009/12/02 20:35:40 ganga Exp $

// 02.12.2009 by Ganga
// module youtubeplayer

//================================================================
// YouTubePlayer module
// xoops_version.php
// 02.12.2009 by Ganga
//================================================================

$YOUPLAYER_DIRNAME   = basename( dirname( __FILE__ ) );
$YOUPLAYER_ROOT_PATH = XOOPS_ROOT_PATH.'/modules/'.$YOUPLAYER_DIRNAME;
$YOUPLAYER_URL       = XOOPS_URL.'/modules/'.$YOUPLAYER_DIRNAME;

if( ! preg_match( '/^(\D+)(\d*)$/' , $YOUPLAYER_DIRNAME , $regs ) )
{	echo ( 'invalid dirname: ' . htmlspecialchars( $YOUPLAYER_DIRNAME ) );	}
$YOUPLAYER_NUMBER = $regs[2] === '' ? '' : intval( $regs[2] ) ;

if ( $regs[1] == 'youplayer' )
{
	$name_ext = ' '.$YOUPLAYER_NUMBER;
}
else
{
	$name_ext = ':'.$YOUPLAYER_DIRNAME;
}

$modversion['name'] = _MI_YOUPLAYER_NAME;
$modversion['version'] = 2;
$modversion['description'] = _MI_YOUPLAYER_DESC;
$modversion['credits'] = '';
$modversion['author']   = 'Ganga';
$modversion['help'] = 'hercegovina24@hotmail.de';
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 1;
$modversion['image']    = 'images/logo.png';
$modversion['dirname']  = 'youplayer';

//Admin things
$modversion['hasAdmin'] = 0;
$modversion['adminmenu'] = '';

// Menu
$modversion['hasMain'] = 1;

?>