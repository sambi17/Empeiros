
<?php

   include("config.php");




   if($_SERVER["REQUEST_METHOD"] == "POST") {

session_start();

      // username and password sent from form

      $username = mysqli_real_escape_string($db,$_POST['Username']);
      $password = mysqli_real_escape_string($db,$_POST['Password']);

      $sql = "SELECT userid FROM Users WHERE Username = '$username' and Password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);
session_start();
      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {


if($username == 'admin' && $password == 'Welcome123')
{

session_start();
if($_session['Username']=$username)
{

echo "good work";
}
else
{header("location: login.php");
}
//include("session timeout.php");
$_SESSION["userid"] = $row['userid'];
$_SESSION['login_user']=$username;
//put this at the first line
session_start();
//if  authentication successful
$_SESSION['login'] = true;
if(!$_SESSION['login']){
   header("location:index.php");
   die;
}
//echo "Hai $Username you made a successful login with password as $Password";
//echo "We made it";
//header("location:authorize.php");
header("location:work.php");
         session_register("userid");
         //$_SESSION['user'] = $username;
//echo "We made it!!!". $username;

//header("location: welcome.php");


}else
{
header("location: work1.php");
}

}

else {
         $error = "Your Login Name or Password is invalid";
      }

}

  //include ('session timeout.php');

?>
<?php
/**
 * Plugin Name: WP Session Manager
 * Plugin URI:  http://jumping-duck.com/wordpress/plugins
 * Description: Prototype session management for WordPress.
 * Version:     1.2.2
 * Author:      Eric Mann
 * Author URI:  http://eamann.com
 * License:     GPLv2+
 */

// let users change the session cookie name
if( ! defined( 'WP_SESSION_COOKIE' ) ) {
	define( 'WP_SESSION_COOKIE', '_wp_session' );
}

if ( ! class_exists( 'Recursive_ArrayAccess' ) ) {
	include 'includes/class-recursive-arrayaccess.php';
}

// Include utilities class
if ( ! class_exists( 'WP_Session_Utils' ) ) {
	include 'includes/class-wp-session-utils.php';
}

// Include WP_CLI routines early
if ( defined( 'WP_CLI' ) && WP_CLI ) {
	include 'includes/wp-cli.php';
}

// Only include the functionality if it's not pre-defined.
if ( ! class_exists( 'WP_Session' ) ) {
	include 'includes/class-wp-session.php';
	include 'includes/wp-session.php';
}
?>

<html>

   <head>
      <title>Login Page</title>

      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }

         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }

         .box {
            border:#666666 solid 1px;
         }
      </style>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="http://empeiros.internship-test.us/xmlrpc.php">

<title>empeiros &#8211; You dream it, We build it</title>
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="empeiros &raquo; Feed" href="http://empeiros.internship-test.us/feed/" />
<link rel="alternate" type="application/rss+xml" title="empeiros &raquo; Comments Feed" href="http://empeiros.internship-test.us/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/2.3\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/empeiros.internship-test.us\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.8.2"}};
			!function(a,b,c){function d(a){var b,c,d,e,f=String.fromCharCode;if(!k||!k.fillText)return!1;switch(k.clearRect(0,0,j.width,j.height),k.textBaseline="top",k.font="600 32px Arial",a){case"flag":return k.fillText(f(55356,56826,55356,56819),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,56826,8203,55356,56819),0,0),c=j.toDataURL(),b!==c&&(k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447),0,0),b=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447),0,0),c=j.toDataURL(),b!==c);case"emoji4":return k.fillText(f(55358,56794,8205,9794,65039),0,0),d=j.toDataURL(),k.clearRect(0,0,j.width,j.height),k.fillText(f(55358,56794,8203,9794,65039),0,0),e=j.toDataURL(),d!==e}return!1}function e(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i,j=b.createElement("canvas"),k=j.getContext&&j.getContext("2d");for(i=Array("flag","emoji4"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='dashicons-css'  href='http://empeiros.internship-test.us/wp-includes/css/dashicons.min.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' id='admin-bar-css'  href='http://empeiros.internship-test.us/wp-includes/css/admin-bar.min.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' id='sydney-bootstrap-css'  href='http://empeiros.internship-test.us/wp-content/themes/sydney/css/bootstrap/bootstrap.min.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='sydney-body-fonts-css'  href='//fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C400italic%2C600&#038;ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' id='sydney-headings-fonts-css'  href='//fonts.googleapis.com/css?family=Raleway%3A400%2C500%2C600&#038;ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' id='sydney-style-css'  href='http://empeiros.internship-test.us/wp-content/themes/sydney/style.css?ver=4.8.2' type='text/css' media='all' />
<style id='sydney-style-inline-css' type='text/css'>
.site-title { font-size:32px; }
.site-description { font-size:16px; }
#mainnav ul li a { font-size:14px; }
h1 { font-size:52px; }
h2 { font-size:42px; }
h3 { font-size:32px; }
h4 { font-size:25px; }
h5 { font-size:20px; }
h6 { font-size:18px; }
body { font-size:14px; }
.header-image { background-size:cover;}
.header-image { height:300px; }
.widget-area .widget_fp_social a,#mainnav ul li a:hover, .sydney_contact_info_widget span, .roll-team .team-content .name,.roll-team .team-item .team-pop .team-social li:hover a,.roll-infomation li.address:before,.roll-infomation li.phone:before,.roll-infomation li.email:before,.roll-testimonials .name,.roll-button.border,.roll-button:hover,.roll-icon-list .icon i,.roll-icon-list .content h3 a:hover,.roll-icon-box.white .content h3 a,.roll-icon-box .icon i,.roll-icon-box .content h3 a:hover,.switcher-container .switcher-icon a:focus,.go-top:hover,.hentry .meta-post a:hover,#mainnav > ul > li > a.active, #mainnav > ul > li > a:hover, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, .text-color, .social-menu-widget a, .social-menu-widget a:hover, .archive .team-social li a, a, h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color:#f25000}
.project-filter li a.active, .project-filter li a:hover,.preloader .pre-bounce1, .preloader .pre-bounce2,.roll-team .team-item .team-pop,.roll-progress .progress-animate,.roll-socials li a:hover,.roll-project .project-item .project-pop,.roll-project .project-filter li.active,.roll-project .project-filter li:hover,.roll-button.light:hover,.roll-button.border:hover,.roll-button,.roll-icon-box.white .icon,.owl-theme .owl-controls .owl-page.active span,.owl-theme .owl-controls.clickable .owl-page:hover span,.go-top,.bottom .socials li:hover a,.sidebar .widget:before,.blog-pagination ul li.active,.blog-pagination ul li:hover a,.content-area .hentry:after,.text-slider .maintitle:after,.error-wrap #search-submit:hover,#mainnav .sub-menu li:hover > a,#mainnav ul li ul:after, button, input[type="button"], input[type="reset"], input[type="submit"], .panel-grid-cell .widget-title:after { background-color:#f25000}
.roll-socials li a:hover,.roll-socials li a,.roll-button.light:hover,.roll-button.border,.roll-button,.roll-icon-list .icon,.roll-icon-box .icon,.owl-theme .owl-controls .owl-page span,.comment .comment-detail,.widget-tags .tag-list a:hover,.blog-pagination ul li,.hentry blockquote,.error-wrap #search-submit:hover,textarea:focus,input[type="text"]:focus,input[type="password"]:focus,input[type="datetime"]:focus,input[type="datetime-local"]:focus,input[type="date"]:focus,input[type="month"]:focus,input[type="time"]:focus,input[type="week"]:focus,input[type="number"]:focus,input[type="email"]:focus,input[type="url"]:focus,input[type="search"]:focus,input[type="tel"]:focus,input[type="color"]:focus, button, input[type="button"], input[type="reset"], input[type="submit"], .archive .team-social li a { border-color:#f25000}
.site-header.float-header { background-color:rgba(0,0,0,0.9);}
@media only screen and (max-width: 991px) { .site-header { background-color:#000000;}}
.site-title a, .site-title a:hover { color:#ffffff}
.site-description { color:#ffffff}
#mainnav ul li a, #mainnav ul li::before { color:#00ffd4}
#mainnav .sub-menu li a { color:#ffffff}
#mainnav .sub-menu li a { background:#1c1c1c}
.text-slider .maintitle, .text-slider .subtitle { color:#00d8f9}
body { color:#000000}
#secondary { background-color:#ffffff}
#secondary, #secondary a, #secondary .widget-title { color:#767676}
.footer-widgets { background-color:#252525}
.site-footer { background-color:#1c1c1c}
.site-footer,.site-footer a { color:#666666}
.overlay { background-color:#000000}
.page-wrap { padding-top:83px;}
.page-wrap { padding-bottom:100px;}

</style>
<link rel='stylesheet' id='sydney-font-awesome-css'  href='http://empeiros.internship-test.us/wp-content/themes/sydney/fonts/font-awesome.min.css?ver=4.8.2' type='text/css' media='all' />
<!--[if lte IE 9]>
<link rel='stylesheet' id='sydney-ie9-css'  href='http://empeiros.internship-test.us/wp-content/themes/sydney/css/ie9.css?ver=4.8.2' type='text/css' media='all' />
<![endif]-->
<script type='text/javascript' src='http://empeiros.internship-test.us/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://empeiros.internship-test.us/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='http://empeiros.internship-test.us/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://empeiros.internship-test.us/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://empeiros.internship-test.us/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 4.8.2" />
<link rel="canonical" href="http://empeiros.internship-test.us/" />
<link rel='shortlink' href='http://empeiros.internship-test.us/' />
<link rel="alternate" type="application/json+oembed" href="http://empeiros.internship-test.us/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fempeiros.internship-test.us%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://empeiros.internship-test.us/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fempeiros.internship-test.us%2F&#038;format=xml" />
<style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
	html { margin-top: 32px !important; }
	* html body { margin-top: 32px !important; }
	@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
	}
</style>
<style>
/*
Theme Name: Sydney
Theme URI: http://athemes.com/theme/sydney
Author: aThemes
Author URI: http://athemes.com
Description: Sydney is a powerful business theme that provides a fast way for companies or freelancers to create an awesome online presence. Sydney brings plenty of customization possibilities like access to all Google Fonts, full color control, layout control, logo upload, full screen slider, header image, sticky navigation and much more. Also, Sydney provides all the construction blocks you need to rapidly create an engaging front page.
Version: 1.30
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: sydney
Tags: light, two-columns, right-sidebar, fluid-layout, responsive-layout, custom-colors, custom-background, custom-header, custom-menu, featured-images, sticky-post, theme-options, threaded-comments, translation-ready

This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
Sydney is based on Underscores http://underscores.me/, (C) 2012-2015 Automattic, Inc.
*/


/*--------------------------------------------------------------
Social
--------------------------------------------------------------*/
.social-menu-widget {
	padding: 0;
	margin: 0 auto;
	display: table;
	text-align: center;
}
.widget-area .widget_fp_social a,
.social-menu-widget a,
.social-menu-widget a:hover {
	color: #d65050;
}
.social-menu-widget li {
	display: inline-block;
	padding: 5px 20px;
	list-style: none;
	line-height: 1;
}
.widget-area .widget_fp_social div ul li {
	padding: 5px 10px;
	line-height: 1;
}
.social-menu-widget a {
	text-decoration: none;
}
.social-widget li a::before,
.social-menu-widget a:before {
	font-family: FontAwesome;
	color: inherit;
}
.social-menu-widget li a,
.social-widget a {
	-webkit-backface-visibility: visible;
	backface-visibility: visible;
}
.social-menu-widget li a:hover,
.social-widget a:hover {
}
.social-menu-widget a:before {
	font-size: 50px;
	text-shadow: 0 0 1px #222;
}
.widget-area .widget_fp_social a:before {
	font-size: 34px;
}
.social-menu-widget a[href*="twitter.com"]::before {
	content: '\f099';
}
.social-menu-widget a[href*="facebook.com"]::before {
	content: '\f09a';
}
.social-menu-widget a[href*="plus.google.com"]::before {
	content: '\f0d5';
}
.social-menu-widget a[href*="google.com/+"]::before {
	content: '\f0d5';
}
.social-menu-widget a[href*="dribbble.com"]::before {
	content: '\f17d';
}
.social-menu-widget a[href*="pinterest.com"]::before {
	content: '\f231';
}
.social-menu-widget a[href*="youtube.com"]::before {
	content: '\f167';
}
.social-menu-widget a[href*="flickr.com"]::before {
	content: '\f16e';
}
.social-menu-widget a[href*="vimeo.com"]::before {
	content: '\f194';
}
.social-menu-widget a[href*="instagram.com"]::before {
	content: '\f16d';
}
.social-menu-widget a[href*="linkedin.com"]::before {
	content: '\f0e1';
}
.social-menu-widget a[href*="foursquare.com"]::before {
	content: '\f180';
}
.social-menu-widget a[href*="tumblr.com"]::before {
	content: '\f173';
}
.social-menu-widget a[href*="behance.net"]::before {
	content: '\f1b4';
}
.social-menu-widget a[href*="deviantart.com"]::before {
	content: '\f1bd';
}
.social-menu-widget a[href*="soundcloud.com"]::before {
	content: '\f1be';
}
.social-menu-widget a[href*="spotify.com"]::before {
	content: '\f1bc';
}
.social-menu-widget a[href*="weibo.com"]::before {
	content: '\f18a';
}
.social-menu-widget a[href*="xing.com"]::before {
	content: '\f168';
}
.social-menu-widget a[href*="trello.com"]::before {
	content: '\f181';
}
/*--------------------------------------------------------------
Navigation
--------------------------------------------------------------*/
.site-main .comment-navigation,
.site-main .posts-navigation,
.site-main .post-navigation {
	margin: 0 0 1.5em;
	overflow: hidden;
}
.comment-navigation .nav-previous,
.posts-navigation .nav-previous,
.post-navigation .nav-previous {
	float: left;
	width: 50%;
}
.comment-navigation .nav-next,
.posts-navigation .nav-next,
.post-navigation .nav-next {
	float: right;
	text-align: right;
	width: 50%;
}
.posts-navigation .nav-previous {
	padding-left: 15px;
}
.posts-navigation .nav-next {
	padding-right: 15px;
}
.post-navigation {
	margin: 30px 0;
}
/*--------------------------------------------------------------
Accessibility
--------------------------------------------------------------*/
/* Text meant only for screen readers. */
.screen-reader-text {
	clip: rect(1px, 1px, 1px, 1px);
	position: absolute !important;
	height: 1px;
	width: 1px;
	overflow: hidden;
}
.screen-reader-text:hover,
.screen-reader-text:active,
.screen-reader-text:focus {
	background-color: #f1f1f1;
	border-radius: 3px;
	box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.6);
	clip: auto !important;
	color: #21759b;
	display: block;
	font-size: 14px;
	font-size: 0.875rem;
	font-weight: bold;
	height: auto;
	left: 5px;
	line-height: normal;
	padding: 15px 23px 14px;
	text-decoration: none;
	top: 5px;
	width: auto;
	z-index: 100000; /* Above WP toolbar. */
}
/*--------------------------------------------------------------
Alignments
--------------------------------------------------------------*/
.alignleft {
	display: inline;
	float: left;
	margin-right: 1.5em;
}
.alignright {
	display: inline;
	float: right;
	margin-left: 1.5em;
}
.aligncenter {
	clear: both;
	display: block;
	margin-left: auto;
	margin-right: auto;
}
.widget select {
	max-width: 100%;
}
/* Search widget. */
.widget_search .search-submit {
	display: none;
}
/*--------------------------------------------------------------
Content
--------------------------------------------------------------*/
.sticky {
	display: block;
}
.hentry {
}
.byline,
.updated:not(.published) {
	display: none;
}
.single .byline,
.group-blog .byline {
	display: inline;
}
.single .entry-header,
.page .entry-header {
	margin-bottom: 30px;
}
.entry-footer {
	clear: left;
	margin-top: 30px;
}
.page-links {
	clear: both;
	margin: 0 0 30px;
}
.page-header {
	margin: 0;
	border: 0;
}
.page-wrap .content-wrapper {
	padding-top: 15px;
	padding-bottom: 15px;
	background-color: #fff;
}
.page .page-wrap .content-wrapper,
.single .page-wrap .content-wrapper {
	padding: 30px;
}
.page-template-page_front-page .page-wrap .content-wrapper {
	padding-top: 0;
	padding-bottom: 0;
	background-color: transparent;
}
/*--------------------------------------------------------------
Asides
--------------------------------------------------------------*/
.blog .format-aside .entry-title,
.archive .format-aside .entry-title {
	display: none;
}
/*--------------------------------------------------------------
Comments
--------------------------------------------------------------*/
.comment-content a {
	word-wrap: break-word;
}
.bypostauthor {
	display: block;
}
/*--------------------------------------------------------------
Infinite scroll
--------------------------------------------------------------*/
/* Globally hidden elements when Infinite Scroll is supported and in use. */
.infinite-scroll .posts-navigation, /* Older / Newer Posts Navigation (always hidden) */
.infinite-scroll.neverending .site-footer { /* Theme Footer (when set to scrolling) */
	display: none;
}
/* When Infinite Scroll has reached its end we need to re-display elements that were hidden (via .neverending) before. */
.infinity-end.neverending .site-footer {
	display: block;
}
/*--------------------------------------------------------------
Media
--------------------------------------------------------------*/
.page-content .wp-smiley,
.entry-content .wp-smiley,
.comment-content .wp-smiley {
	border: none;
	margin-bottom: 0;
	margin-top: 0;
	padding: 0;
}
/* Make sure embeds and iframes fit their containers. */
embed,
iframe,
object {
	max-width: 100%;
}
img {
	max-width: 100%;
	height: auto;
}
/*--------------------------------------------------------------
Captions
--------------------------------------------------------------*/
.wp-caption {
	margin-bottom: 1.5em;
	max-width: 100%;
}
.wp-caption img[class*="wp-image-"] {
	display: block;
	margin: 0 auto;
}
.wp-caption-text {
	text-align: center;
}
.wp-caption .wp-caption-text {
	margin: 0.8075em 0;
}
/*--------------------------------------------------------------
Galleries
--------------------------------------------------------------*/
.gallery {
	margin-bottom: 1.5em;
}
.gallery-item {
	display: inline-block;
	text-align: center;
	vertical-align: top;
	width: 100%;
}
.gallery-columns-2 .gallery-item {
	max-width: 50%;
}
.gallery-columns-3 .gallery-item {
	max-width: 33.33%;
}
.gallery-columns-4 .gallery-item {
	max-width: 25%;
}
.gallery-columns-5 .gallery-item {
	max-width: 20%;
}
.gallery-columns-6 .gallery-item {
	max-width: 16.66%;
}
.gallery-columns-7 .gallery-item {
	max-width: 14.28%;
}
.gallery-columns-8 .gallery-item {
	max-width: 12.5%;
}
.gallery-columns-9 .gallery-item {
	max-width: 11.11%;
}
.gallery-caption {
	display: block;
}
/*--------------------------------------------------------------
Repeatable Patterns
--------------------------------------------------------------*/
	*,
	*:before,
	*:after {
		-webkit-box-sizing: border-box;
		   -moz-box-sizing: border-box;
				box-sizing: border-box;
	}
	body {
		font: 14px/24px "Source Sans Pro", sans-serif;
		background: #fff;
		color: #767676;
	}
	a {
		text-decoration: none;
		-webkit-transition: all 0.3s ease-in-out;
		   -moz-transition: all 0.3s ease-in-out;
			-ms-transition: all 0.3s ease-in-out;
			 -o-transition: all 0.3s ease-in-out;
				transition: all 0.3s ease-in-out;
	}
	a:hover,
	a:focus {
		color: #443f3f;
		text-decoration: none;
		outline: 0;
		-webkit-transition: all 0.3s ease-in-out;
		   -moz-transition: all 0.3s ease-in-out;
			-ms-transition: all 0.3s ease-in-out;
			 -o-transition: all 0.3s ease-in-out;
				transition: all 0.3s ease-in-out;
	}
	img {
		max-width: 100%;
		height: auto;
	}
	.widget ul {
		list-style: none;
		padding: 0;
	}
	.widget .children {
		padding-left: 15px;
	}
	.img-left {
		margin: 0 33px 0 0 !important;
		float: left;
	}
	.img-right {
		margin: 0 0 0 33px !important;
		float: right;
	}
	strong {
		font-weight: 600;
	}
	h1 { font: 52px/1.1 "Raleway", sans-serif;}
	h2 { font: 42px/1.1 "Raleway", sans-serif;}
	h3 { font: 32px/1.1 "Raleway", sans-serif;}
	h4 { font: 25px/1.1 "Raleway", sans-serif;}
	h5 { font: 20px/1.1 "Raleway", sans-serif;}
	h6 { font: 18px/1.1 "Raleway", sans-serif;}
	h1, h2, h3, h4, h5, h6 {
		color: #443f3f;
		font-weight: 600;
		margin: 10px 0 24px;
	}
	.text-white { color: #fff !important; }
	.text-dark { color: #443f3f !important;}
	button,
	input[type="button"],
	input[type="reset"],
	input[type="submit"] {
		position: relative;
		display: inline-block;
		font-family: "Raleway", sans-serif;
		font-size: 13px;
		line-height: 24px;
		font-weight: 700;
		padding: 12px 34px;
		color: #fff;
		text-transform: uppercase;
		-webkit-border-radius: 3px;
		   -moz-border-radius: 3px;
			 -o-border-radius: 3px;
				border-radius: 3px;
		-webkit-transition: all 0.3s;
		   -moz-transition: all 0.3s;
		    -ms-transition: all 0.3s;
		     -o-transition: all 0.3s;
		        transition: all 0.3s;
	}
	button:hover,
	input[type="button"]:hover,
	input[type="reset"]:hover,
	input[type="submit"]:hover {
		background-color: transparent;
	}
	select,
	textarea,
	input[type="text"],
	input[type="password"],
	input[type="datetime"],
	input[type="datetime-local"],
	input[type="date"],
	input[type="month"],
	input[type="time"],
	input[type="week"],
	input[type="number"],
	input[type="email"],
	input[type="url"],
	input[type="search"],
	input[type="tel"],
	input[type="color"] {
		color: #767676;
		background-color: #fafafa;
		border: 1px solid #dbdbdb;
		height: 50px;
		padding: 4px 20px;
		border-radius: 0;
		-webkit-transition: all 0.3s ease-in-out;
		   -moz-transition: all 0.3s ease-in-out;
		    -ms-transition: all 0.3s ease-in-out;
		     -o-transition: all 0.3s ease-in-out;
		        transition: all 0.3s ease-in-out;
	}
	textarea:focus,
	input[type="text"]:focus,
	input[type="password"]:focus,
	input[type="datetime"]:focus,
	input[type="datetime-local"]:focus,
	input[type="date"]:focus,
	input[type="month"]:focus,
	input[type="time"]:focus,
	input[type="week"]:focus,
	input[type="number"]:focus,
	input[type="email"]:focus,
	input[type="url"]:focus,
	input[type="search"]:focus,
	input[type="tel"]:focus,
	input[type="color"]:focus {
		-webkit-box-shadow: none;
		   -moz-box-shadow: none;
				box-shadow: none;
	}
	textarea {
		width: 100%;
		height: 120px;
		padding: 15px 20px;
	}
	input[type="checkbox"] {
		display: inline;
	}
	input:-moz-placeholder,
	textarea:-moz-placeholder,
	input::-moz-placeholder,
	textarea::-moz-placeholder {
	  color: #a3a2a2;
	}
	input:-ms-input-placeholder,
	textarea:-ms-input-placeholder {
	  color: #c3c3c3;
	}
	input::-webkit-input-placeholder,
	textarea::-webkit-input-placeholder {
	  color: #cacaca;
	}
	.orches-animation {
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);
		opacity: 0;
	}
	.orches-animation.animated {
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		filter: alpha(opacity=100);
		opacity: 1;
	}
	@-webkit-keyframes pop-scale { 0% { -webkit-transform: scale(0.7) } 100% { -webkit-transform: scale(1) } }
	@-moz-keyframes pop-scale { 0% { -moz-transform: scale(0.7) } 100% { -moz-transform: scale(1) } }
	@keyframes pop-scale { 0% { transform: scale(0.7) } 100% { transform: scale(1) } }
	@-webkit-keyframes pop-scale2 { 0% { -webkit-transform: scale(0.5) } 100% { -webkit-transform: scale(1) } }
	@-moz-keyframes pop-scale2 { 0% { -moz-transform: scale(0.5) } 100% { -moz-transform: scale(1) } }
	@keyframes pop-scale2 { 0% { transform: scale(0.5) } 100% { transform: scale(1) } }
	/* bootstrap resetting elements */
	.btn {
		background-image: none;
	}
	textarea,
	input[type="text"],
	input[type="submit"],
	input[type="password"],
	input[type="datetime"],
	input[type="datetime-local"],
	input[type="date"],
	input[type="month"],
	input[type="time"],
	input[type="week"],
	input[type="number"],
	input[type="email"],
	input[type="url"],
	input[type="search"],
	input[type="tel"],
	input[type="color"],
	.uneditable-input,
	.dropdown-menu,
	.navbar .nav > .active > a,
	.navbar .nav > .active > a:hover,
	.navbar .nav > .active > a:focus {
		-webkit-appearance: none;
		text-shadow: none;
		-webkit-box-shadow: none;
		   -moz-box-shadow: none;
		     -o-box-shadow: none;
		        box-shadow: none;
	}
table {
	width: 100%;
}
th,td {
	border: 1px solid #333;
	padding: 5px;
	text-align: center;
}
/*--------------------------------------------------------------
Header
--------------------------------------------------------------*/
	.site-title {
		font-size: 32px;
		line-height: 1.2;
	}
	.site-title a,
	.site-title a:hover {
		color: #fff;
	}
	.site-logo {
		max-height: 100px;
	}
	.site-header {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		z-index: 1000;
		background-color: transparent;
		padding: 20px 0;
		-webkit-transition: all 0.3s ease-out;
		   -moz-transition: all 0.3s ease-out;
		    -ms-transition: all 0.3s ease-out;
		     -o-transition: all 0.3s ease-out;
		        transition: all 0.3s ease-out;
	}
	.admin-bar .site-header,
	.admin-bar .site-header.float-header {
		top: 32px;
	}
	.header-image {
		display: none;
		position: relative;
		height: 300px;
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
	}
	.header-inner {
		display: none;
	}
	.site-title {
		margin: 0;
	}
	.site-description {
		font-size: 16px;
		margin: 15px 0 0;
		line-height: 1.6;
		color: #efefef;
	}
	.site-header.fixed {
		position: fixed;
	}

	.site-header .col-md-4,
	.site-header .col-md-8 {
		min-height: 0;
	}

	.site-header .logo {
		margin: 40px 0;
		float: left;
		-webkit-transition: all 0.3s linear;
		   -moz-transition: all 0.3s linear;
		    -ms-transition: all 0.3s linear;
		     -o-transition: all 0.3s linear;
		        transition: all 0.3s linear;
	}

	.site-header .logo a {
		display: block;
		height: 100%;
	}

	.site-header .logo {
		width: 135px;
		height: 27px;
	}

	.site-header.float-header {
		background-color: rgba(0,0,0,0.9);
		padding: 5px;
	}
	.site-header.float-header #mainnav {
		padding: 0;
	}

	.site-header.float-header #mainnav > ul > li > a {
	    height: 70px;
	    line-height: 70px;
	}

	.site-header.float-header .logo {
	    margin: 20px 0;
	}
	/* navigation */
	#mainnav {
		display: block;
		float: right;
		-webkit-transition: all 0.3s linear;
		   -moz-transition: all 0.3s linear;
		    -ms-transition: all 0.3s linear;
		     -o-transition: all 0.3s linear;
		        transition: all 0.3s linear;
	}
	#mainnav ul {
		list-style: none;
		margin: 0;
		padding: 0;
	}
	#mainnav li {
		float: left;
		padding: 0 14px;
	}
	#mainnav ul ul li {
		padding: 0;
	}
	#mainnav ul li a {
		position: relative;
		display: block;
		font-size: 14px;
		font-family: "Raleway", sans-serif;
		color: #fff;
		font-weight: 500;
		text-decoration: none;
		outline: none;
	}
	#mainnav ul li a:hover {
		color: #d65050;
	}
	#mainnav ul ul a {
		width: 180px;
		font-family: "Source Sans Pro", sans-serif !important;
	}
	#mainnav > ul > li:last-child {
		padding-right: 0;
	}
	#mainnav ul li {
		position: relative;
	}
	#mainnav ul li ul {
		width: 180px;
		position: absolute;
		top: 100%;
		left: initial;
		opacity: 0;
		visibility: hidden;
		-webkit-border-radius: 0 0 2px 2px;
		   -moz-border-radius: 0 0 2px 2px;
			 -o-border-radius: 0 0 2px 2px;
				border-radius: 0 0 2px 2px;
	    -webkit-transition: all 0.3s ease;
	       -moz-transition: all 0.3s ease;
	        -ms-transition: all 0.3s ease;
	         -o-transition: all 0.3s ease;
	            transition: all 0.3s ease;
	}
	#mainnav ul li ul ul {
		top: 0;
	}
	#mainnav ul li ul:after {
		content: "";
		position: absolute;
		left: 0;
		width: 100%;
		height: 1px;
	}
	#mainnav ul li ul ul:after {
		top: 0;
	}
	#mainnav ul li ul li ul {
		left: 100%;
	}
	#mainnav li:hover > ul {
	    opacity: 1;
	    padding-top: 10px;
	    visibility: visible;
	    left: auto;
	    -webkit-transition: all 0.3s ease;
	       -moz-transition: all 0.3s ease;
	        -ms-transition: all 0.3s ease;
	         -o-transition: all 0.3s ease;
	            transition: all 0.3s ease;
	}
	#mainnav li:hover > ul ul {
		padding-top: 0;
		left: 100%;
	}
	#mainnav .sub-menu {
		z-index: 99999;
	}
	#mainnav .sub-menu li a {
		color: #fff;
		display: block;
		line-height: 30px;
		background: #1c1c1c;
		padding: 0 18px;
		border-top: 1px solid #252525;
	    -webkit-transition: all 0.3s ease;
	       -moz-transition: all 0.3s ease;
	        -ms-transition: all 0.3s ease;
	         -o-transition: all 0.3s ease;
	            transition: all 0.3s ease;
	}
	#mainnav .sub-menu li:hover > a {
		color: #fff;
	}
	#mainnav li:hover > .sub-menu > li > a {
		padding: 8px 18px;
	}
	/* Icons */
	#mainnav ul li::before {
		font-family: Fontawesome;
		color: #fff;
		float: left;
		margin: 5px 5px 0 0;
		font-size: 14px;
		line-height: 1;
		font-weight: 400;
	}
	#mainnav ul li a {
		float: left;
	}
	#mainnav .sub-menu li:before {
		content: '';
		margin: 0;
		transition: all 0.3s ease;
		-webkit-transition: all 0.3s ease;
	}
	#mainnav-mobi ul li a {
		float: none;
	}
	#mainnav-mobi ul li::before {
		content: '';
	}
/*--------------------------------------------------------------
Mobile navigation
--------------------------------------------------------------*/
	#mainnav-mobi {
		display: block;
		margin: 0 auto;
		width: 100%;
		position: absolute;
		top:28px;
		background-color: #1c1c1c;
		z-index: 1000;
	}
	#mainnav-mobi ul {
		display: block;
		list-style: none;
		margin: 0;
		padding: 0;
	}
	#mainnav-mobi ul li {
		margin:0;
		position: relative;
		text-align: left;
		border-top: 1px solid #252525;
		cursor: pointer;
	}
	#mainnav-mobi ul > li > a {
		display: block;
		text-decoration: none;
		padding: 10px 50px;
		color: #fff;
	}
	#mainnav-mobi ul.sub-menu {
		top: 100%;
		left: 0;
		z-index: 2000;
		position: relative;
		background-color: #161625;
	}
	#mainnav-mobi > ul > li > ul > li,
	#mainnav-mobi > ul > li > ul > li > ul > li {
		position: relative;
		border-top: 1px solid #252525;
		background-color: #222;
	}
	#mainnav-mobi > ul > li > ul > li >  a {
		padding-left: 70px !important
	}
	#mainnav-mobi > ul > li > ul > li > ul > li a {
		padding-left: 90px !important
	}
	#mainnav-mobi ul.sub-menu > li > a {
		display: block;
		text-decoration: none;
		padding: 5px 60px;
		border-top-color: rgba(255,255,255,0.1);
		-webkit-transition: all 0.2s ease-out;
		   -moz-transition: all 0.2s ease-out;
		     -o-transition: all 0.2s ease-out;
		        transition: all 0.2s ease-out;
	}
	#mainnav-mobi > ul > li > ul > li:first-child a {
		border-top: none;
	}
	#mainnav-mobi ul.sub-menu > li > a:hover,
	#mainnav-mobi > ul > li > ul > li.active > a {
		color: #fff;
	}
	.btn-menu {
		float: right;
		font-size: 28px;
		font-family: "FontAwesome";
		color: #fff;
		text-align:center;
		width: 28px;
		height: 28px;
		cursor: pointer;
		-webkit-transition: all 0.3s ease-out;
		   -moz-transition: all 0.3s ease-out;
		    -ms-transition: all 0.3s ease-out;
		     -o-transition: all 0.3s ease-out;
		        transition: all 0.3s ease-out;
	}
	.btn-menu:before{
		content: "\f0c9";
	}
	.btn-submenu {
		position: absolute;
		right: 20px;
		top: 0;
		font-family: "FontAwesome";
		font-size: 20px;
		line-height: 45px;
		text-align: center;
		cursor: pointer;
		width: 70px;
		height: 44px;
	}
	.btn-submenu:before {
		content: "\f107";
		color: #fff;
	}
	.btn-submenu.active:before {
		content: "\f106"
	}
	.btn-menu {
		display: none
	}
/*--------------------------------------------------------------
Layout
--------------------------------------------------------------*/
	.aside-image {
		padding: 0;
		position: relative;
	}
	.aside-image .image-container {
	    height: 100%;
	    overflow: hidden;
	    padding: 0;
	    position: absolute;
	    left: 0;
	    top: 0;
	}
	.aside-image .image-holder {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		background-size: cover !important;
		z-index: 0;
		background-position: 50% 50%;
	}
	.aside-image .content-wrap {
		padding: 70px 0 70px 50px;
	}
	.aside-image.right .image-container {
		left: auto;
		right: 0;
	}
	.aside-image.right .content-wrap {
		padding: 70px 50px 70px 0;
	}
	.error-wrap h1 {
		font-size: 35px;
		color: #ddd;
		font-weight: 600;
		margin: 0 0 40px;
		line-height: normal;
	}
	.error-wrap h5 {
		margin-top: 60px;
		font-size: 18px;
		font-weight: normal;
	}
	.error-wrap .error-search {
		padding: 0 80px;
	}
	.error-wrap #search-form {
	    height: 50px;
	    margin-bottom: 17px;
	    position: relative;
	    width: 100%;
	}
	.error-wrap .search-input {
	    margin: 0;
	    width: 100%;
	}
	.error-wrap #search-submit {
	    height: 50px;
	    padding: 0;
	    position: absolute;
		top: 0;
		right: 0;
	    width: 120px;
	    border-radius: 0 3px 3px 0;
		background: blue;
		border-color: blue;
	}
	.error-wrap #search-submit:hover {
		color: #fff;
	}
	/* Page sider */
	#page-slider {
		position: relative;
		height: 250px;
	}
	.overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
		filter: alpha(opacity=70);
		opacity: 0.7;
	}
	.page-wrap {
		padding: 83px 0 100px;
		clear: both;
	}
	.page-template-page_front-page .page-wrap {
		padding: 0;
	}
	.entry-page p,
	.entry-post p {
		margin-bottom: 24px;
	}
	.entry-post img {
		margin: 10px 0 20px;
	}
	.header-slider,
	.owl-wrapper {
		direction: ltr;
	}
	.header-slider,
	.owl-carousel {
	      -webkit-transform: translate3d(0,0,0);
	}
/*--------------------------------------------------------------
Parallax
--------------------------------------------------------------*/
	.parallax {
		width: 100%;
		background-attachment: fixed;
		background-position: 50% 0;
	}
/*--------------------------------------------------------------
Hero section
--------------------------------------------------------------*/
	.header-slider {
		position: relative;
	    max-width: 100%;
	}
	.slide-text.slides {
	   padding-left: 0;
	}
	.slides-container .slide-item {
	    background-attachment: fixed;
	    background-position: center;
	    background-repeat: no-repeat;
	    background-size: cover;
	}
	.sliderFix {
		display: block !important;
	}
	.text-slider-section {
		position: absolute;
	    top: 50%;
	    left: 0;
	    right: 0;
	    text-align: center;
	    z-index: 2;
	    width: 100%;
		padding-top: 5px;
	    -webkit-transform: translateY(-50%);
	       -moz-transform: translateY(-50%);
	        -ms-transform: translateY(-50%);
	         -o-transform: translateY(-50%);
	            transform: translateY(-50%);
	}
	.text-slider .maintitle,
	.text-slider .subtitle {
		z-index: 10;
		color: #fff;
		margin: 0;
		letter-spacing: 1px;
		text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
	}
	.text-slider .maintitle {
		position: relative;
		display: inline-block;
		font-size: 57px;
		line-height: 67px;
		font-weight: 700;
		padding-bottom: 10px;
	}
	.text-slider .maintitle:after {
		content: "";
		position: absolute;
		left: 50%;
		bottom: 0;
		width: 40%;
		height: 1px;
		margin-left: -20%;
	}
	.text-slider .subtitle {
		font-size: 30px;
		line-height: 40px;
		padding: 20px 0 50px;
		font-weight: 300;
	}
.text-slider {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
  -webkit-animation-name: fadeInRightBig;
  animation-name: fadeInRightBig;
}
@-webkit-keyframes fadeInRightBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInRightBig {
  from {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0);
  }

  to {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}
.slide-inner {
	position: absolute;
	top: 50%;
	left: 0;
	right: 0;
	text-align: center;
	z-index: 2;
	width: 100%;
	min-height: 260px;
	padding-top: 5px;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	-o-transform: translateY(-50%);
	transform: translateY(-50%);
}
.header-slider {
	overflow: hidden;
}
/*--------------------------------------------------------------
Page title
--------------------------------------------------------------*/
	.page-title {
		color: #ccc;
		padding-top: 100px;
	}
	.page-title .col-md-6 {
		float: none;
	}
	.page-title-inner {
		display: table;
		width: 100%;
		height: 100%;
		position: relative;
		z-index: 1;
	}
	.page-title-cap {
		display: table-cell;
		vertical-align: middle;
	}
	.page-title .breadcrumbs {
		display: table-cell;
		list-style: none;
		text-align: left;
		vertical-align: middle;
	}
	.page-title h1 {
		margin: 0;
		font-size: 18px;
		color: #ccc;
	}
	.breadcrumbs ul {
		margin: 0;
	}
	.breadcrumbs ul li {
		display: inline;
	}
	.breadcrumbs ul li a:hover {
		text-decoration: underline;
	}
/*--------------------------------------------------------------
Blog
--------------------------------------------------------------*/
	.content-area .post-wrap,
	.contact-form-wrap {
		padding-right: 20px;
	}
	.content-area .hentry {
		position: relative;
		padding-top: 50px;
		padding-bottom: 20px;
	}
	.content-area .hentry:first-child {
		padding-top: 0;
	}
	.content-area .hentry:after {
		content: "";
		position: absolute;
		left: 0;
		top: 0;
		width: 30px;
		height: 1px;
	}
	.content-area .hentry:first-child:after {
		height: 0;
	}
	.hentry .post-content {
		overflow: hidden;
	}
	.content-area .entry-thumb {
		text-align: center;
		margin-bottom: 30px;
	}
	.hentry .title-post {
		font-size: 20px;
		font-weight: 600;
		line-height: normal;
		padding-bottom: 10px;
		margin: 0;
	}
	.hentry .meta-post {
		margin-bottom: 20px;
	}
	.hentry .meta-post,
	.hentry .meta-post a {
		color: #5e5e5e;
		font-size: 13px;
	}
	.hentry .meta-post span {
		position: relative;
		padding-left: 20px;
		margin-right: 18px;
	}
	.hentry .meta-post .cat-links {
		display: inline-block;
	}
	.hentry .meta-post span:before {
		position: absolute;
		left: 0;
		top: 1px;
		font-family: "FontAwesome";
		line-height: normal;
	}
	.hentry .meta-post span.posted-on:before {
		content:"\f073";
	}
	.hentry .meta-post span.byline:before {
		content:"\f007";
	}
	.hentry .meta-post span.comments-link:before {
		content:"\f086";
	}
	.hentry .meta-post span.cat-links:before {
		content:"\f114";
		top: 4px;
	}
	span.author.vcard {
		padding: 0;
		margin: 0;
	}
	.hentry blockquote {
	    background-color: #333;
	    color: #fff;
	    font-size: 16px;
	    font-style: italic;
	    line-height: 23px;
	    margin-bottom: 30px;
	    padding: 30px 35px;
	    position: relative;
	}
	.fullwidth {
		width: 100%;
	}
	.error-404 {
		text-align: center;
	}
	.error-404 .page-content p {
		margin-bottom: 30px;
	}
	.masonry-layout {
		width: 100%;
		padding: 0;
	}
	.masonry-layout .hentry {
		width: 360px;
		margin: 15px;
		padding: 0;
	}
	.masonry-layout .post-wrap {
		padding: 0;
	}
	.masonry-layout .hentry:after {
		width: 0;
		height: 0;
	}
	/* Blog pagination */
	.blog-pagination ul {
		width: 100%;
		text-align: right;
		list-style: none;
	}
	.blog-pagination ul li,
	.blog-pagination ul li a {
		display: inline-block;
		background-color: transparent;
		width: 40px;
		height: 40px;
		line-height: 40px;
		text-align: center;
	}
	.blog-pagination ul li {
		margin-left: 3px;
	}
	.blog-pagination ul li.active,
	.blog-pagination ul li:hover a {
		color: #fff;
	}
/*--------------------------------------------------------------
Widgets
--------------------------------------------------------------*/
	.widget-area .widget {
		position: relative;
		margin-bottom: 30px;
		padding-top: 50px;
	}
	.widget-area .widget:before {
		content: "";
		position: absolute;
		left: 0;
		top: 0;
		width: 30px;
		height: 1px;
	}
	.widget-area .widget:first-child {
		padding-top: 0;
	}
	.widget-area .widget:first-child:before {
		height: 0;
	}
	.widget-area .widget-title {
		font-size: 16px;
		line-height: normal;
		color: #443f3f;
		font-weight: 600;
		padding-bottom: 24px;
		margin: 0;
		text-transform: uppercase;
	}
	.widget ul {
		list-style: none;
	}
	.widget-area .widget ul li {
		padding: 5px 0;
	}
	.widget-area .widget ul li:first-child {
		padding-top: 0;
	}
	.widget-area .widget ul li:last-child {
		padding-bottom: 0;
	}
	.widget-area,
	.widget-area  a {
		color: #767676;
	}
	/* widget popular posts */
	.widget-popular-post .news .thumb {
		width: 65px;
		height: auto;
		margin: 3px 18px 0 0;
		float: left;
	}
	.widget-popular-post .news .text {
		min-height: 65px;
	}
	.widget-popular-post .news h6 {
		font-size: 13px;
		line-height: 20px;
		font-weight: 500;
		margin: 0 0 4px;
	}
	.widget-popular-post .news p,
	.widget-popular-post .news p a {
		font-size: 13px;
		margin: 0;
	}
	.widget-popular-post .news p a:hover {
		text-decoration: underline;
	}
	/* widget categories */
	.widget-categories .categories li a {
		position: relative;
		display: block;
	}
	.widget-categories .categories li span {
		position: absolute;
		right: 0;
		top: 0;
	}
	/* widget tags */
	.widget-tags .tag-list a {
		display: inline-block;
		font-size: 13px;
		color: #767676;
		border: 1px solid #dbdbdb;
		padding: 7px 15px;
		margin: 4px;
		margin-left: 0;
	}
	.widget-tags .tag-list a:hover {
		color: #5e5e5e;
	}
/*--------------------------------------------------------------
Blog single
--------------------------------------------------------------*/
	.single-post .hentry {
		padding-bottom: 0;
	}
	.single-post .author-post {
		position: relative;
		margin-top: 50px;
		background-color: #eee;
		padding: 20px;
	}
	.single-post .author-post .author-avatar {
		float: left;
		width: 145px;
		background-color: #f5f5f5;
		padding: 3px;
	}
	.single-post .author-post .author-info {
		position: relative;
		padding: 0 20px 0 35px;
		margin-left: 140px;
		min-height: 140px;
	}
	.single-post .author-post .name {
		margin: 3px 0 17px 0;
	}
	.single-post .author-post .name h6 {
		font-size: 20px;
		font-weight: 600;
		display: inline-block;
		margin: 0;
	}
	.single-post .author-post .intro {
		margin: 0;
	}
	.single-post .author-post ul.socials {
		position: absolute;
		top: 10px;
		right: 20px;
		list-style: none;
		margin: 0;
	}
	.single-post .author-post ul.socials li {
		float: left;
		text-align: center;
		margin-right: 5px;
	}
	.single-post .author-post ul.socials li a {
		display: inline-block;
		width: 25px;
		height: 25px;
		font-size: 18px;
		line-height: 25px;
		color: #ccc;
	}
	/* comment post */
/*--------------------------------------------------------------
Comments
--------------------------------------------------------------*/
.comments-area {
	margin-bottom: 60px;
}
.comments-title {
	margin: 0 0 30px 0;
	font-size: 24px;
}
.comments-area ol {
	list-style: none;
}
.comments-area ol {
	padding: 0;
}
.comments-area .children {
	padding-left: 20px;
}
.comments-area .fn {
	color: #505050;
}
.comment-author .avatar {
	position: absolute;
}
.comment-author .fn,
.comment-metadata {
	margin-left: 80px;
}
.comment-metadata {
	font-size: 12px;
	margin-bottom: 30px;
}
.comment-body {
	padding: 15px;
	margin-bottom: 20px;
	border-bottom: 1px solid #f3f3f3;
	background-color: #fff;
}
.reply {
	text-align: right;
}
.comment-reply-link {
	padding: 5px;
	font-size: 12px;
}
.comment-meta a {
	color: #c7c7c7;
}
.comments-area a.url {
	color: #505050;
	text-decoration: underline;
}
.bypostauthor {
}
.comment-reply-title {
	font-size: 25px;
}
.comment-form input {
	width: 100%;
	max-width: 100%;
}
.form-submit input {
	width: auto;
}
/*--------------------------------------------------------------
Portfolio single
--------------------------------------------------------------*/
	.portfolio-images {
		margin-bottom: 40px;
	}
	.portfolio-info {
		background-color: #f7f7f7;
		border: 1px solid #eee;
		padding: 25px 25px 40px;
		font-family: "Raleway", sans-serif;
	}
	.portfolio-info h5 {
		margin: 0 0 15px;
		text-transform: uppercase;
	}
	.portfolio-info ul {
		list-style: none;
		font-size: 14px;
		margin-bottom: 10px;
	}
	.portfolio-info ul li {
		padding: 10px 0;
	}
	.portfolio-info ul li span {
		float: right;
		color: #443f3f;
	}
	.portfolio-info .button-group {
		text-align: center;
	}
	.portfolio-info .button-group a {
		width: 100%;
		margin-top: 10px;
	}
/*--------------------------------------------------------------
Footer
--------------------------------------------------------------*/
	.footer-widgets {
		padding: 95px 0;
		background-color: #252525;
	}
	.footer .copyr {
		color: #a8a8a8;
		margin-bottom: 0;
	}
	.footer-widgets .widget-title {
		text-transform: uppercase;
		color: #c5c5c5;
		line-height: normal;
		margin: 5px 0 0;
	}
	/* widget info */
	.widget-info .logo-footer {
		margin-bottom: 36px;
	}
	.widget-info p {
		margin-bottom: 24px;
	}
	.widget-info .infomation {
		list-style: none;
		margin: 0;
	}
	.widget-info .infomation li {
		position: relative;
		padding: 0 0 0 30px;
		margin-bottom: 15px;
		line-height: 24px;
	}
	.widget-info .infomation li.address:before,
	.widget-info .infomation li.phone:before,
	.widget-info .infomation li.email:before {
		position: absolute;
		left: 0;
		top: 0;
		content: "\f041";
		font-family: "FontAwesome";
		font-size: 16px;
	}
	.widget-info .infomation li.phone:before {
		content: "\f095";
	}
	.widget-info .infomation li.email:before {
		content: "\f040";
	}
	/* widget links */
	.widget-links ul {
		list-style: none;
		margin: 0;
	}
	.widget-links ul li {
		padding: 10px 0 7px;
	}
	.widget-links ul li:first-child {
		padding-top: 0;
	}
	.widget-mail-subscribe p {
		padding-bottom: 10px;
	}
	.widget-mail-subscribe .email-sub input {
		width: 205px;
		margin-bottom: 10px;
	}
/*--------------------------------------------------------------
Bottom
--------------------------------------------------------------*/
	.site-footer {
		background-color: #1c1c1c;
		line-height: 35px;
		padding: 15px 0;
	}
	.site-footer,
	.site-footer a {
		color: #666;
	}
	.site-footer .socials {
		margin: 0;
		list-style: none;
	}
	.bottom .socials li {
		display: inline-block;
		margin-left: 5px;
	}
	.site-footer .socials li a {
		display: inline-block;
		color: #666;
		font-size: 14px;
		background-color: #2e2e2e;
		width: 35px;
		height: 35px;
		line-height: 35px;
		text-align: center;
		-webkit-border-radius: 50%;
		   -moz-border-radius: 50%;
			 -o-border-radius: 50%;
				border-radius: 50%;
	}
	.site-footer .socials li:hover a {
		color: #fff;
	}
/*--------------------------------------------------------------
Preloader
--------------------------------------------------------------*/
	.preloader {
	    background: none repeat scroll 0 0 #fff;
	    height: 100%;
	    opacity: 1;
	    position: fixed;
	    text-align: center;
	    transition: all 0.2s ease 0s;
	    width: 100%;
	    z-index: 9999;
	}
	.preloader .spinner {
	    height: 30px;
	    left: 50%;
	    margin-left: -15px;
	    margin-top: -15px;
	    position: relative;
	    top: 50%;
	    width: 30px;
	}
	.preloader .pre-bounce1,
	.preloader .pre-bounce2 {
	    -webkit-animation: 2s ease 0s normal none infinite bounce;
	            animation: 2s ease 0s normal none infinite bounce;
	    background-color: #de4939;
	    border-radius: 50%;
	    height: 100%;
	    left: 0;
	    opacity: 0.6;
	    position: absolute;
	    top: 0;
	    width: 100%;
	}
	.preloader .pre-bounce2 {
	    -webkit-animation-delay: -0.5s;
	            animation-delay: -0.5s;
	}
	@-webkit-keyframes bounce {
	  0%, 20%, 50%, 80%, 100% {
	    -webkit-transform: translateY(0);
	    transform: translateY(0);
	  }

	  40% {
	    -webkit-transform: translateY(-30px);
	    transform: translateY(-30px);
	  }

	  60% {
	    -webkit-transform: translateY(-15px);
	    transform: translateY(-15px);
	  }
	}

	@keyframes bounce {
	  0%, 20%, 50%, 80%, 100% {
	    -webkit-transform: translateY(0);
	    -ms-transform: translateY(0);
	    transform: translateY(0);
	  }

	  40% {
	    -webkit-transform: translateY(-30px);
	    -ms-transform: translateY(-30px);
	    transform: translateY(-30px);
	  }

	  60% {
	    -webkit-transform: translateY(-15px);
	    -ms-transform: translateY(-15px);
	    transform: translateY(-15px);
	  }
	}
/*--------------------------------------------------------------
Go to top button
--------------------------------------------------------------*/
	.go-top {
		position: fixed !important;
		right: 20px;
		bottom: -45px;
		color: #fff;
		display: block;
		font-size: 22px;
		line-height: 35px;
		text-align: center;
		width: 40px;
		height: 40px;
		visibility: hidden;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);
		opacity: 0;
		z-index: 9999;
		cursor: pointer;
		-webkit-border-radius: 2px;
		   -moz-border-radius: 2px;
			 -o-border-radius: 2px;
				border-radius: 2px;
		-webkit-transition: all 0.5s;
		   -moz-transition: all 0.5s;
		    -ms-transition: all 0.5s;
		     -o-transition: all 0.5s;
		        transition: all 0.5s;
	}
	.go-top:hover {
		background-color: #fff;
	}
	.go-top.show {
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		filter: alpha(opacity=100);
		opacity: 1;
		visibility: visible;
		bottom : 11px;
	}

/*--------------------------------------------------------------
Panels
--------------------------------------------------------------*/
	.panel-grid-cell .widget-title {
		text-align: center;
		margin-bottom: 50px;
		position: relative;
		font-weight: 600;
		line-height: normal;
		text-transform: uppercase;
		padding-bottom: 10px;
	}
	.panel-grid-cell .widget-title:after {
		content: "";
		position: absolute;
		left: 50%;
		bottom: 0;
		width: 50px;
		height: 1px;
		margin-left: -25px;
		background-color: #d65050;
	}
	.panel-grid {
		max-width: 1170px;
		margin-left: auto !important;
		margin-right: auto !important;
	}
	.panel-row-style {
		background-size: cover;
		background-attachment: fixed;
		background-repeat: no-repeat;
		position: relative;
		z-index: 11;
		overflow: hidden;
	}
	.panel-grid .overlay {
		z-index: -1;
	}
	.no-col-padding .panel-grid-cell {
		padding-left: 0 !important;
		padding-right: 0 !important;
	}
/* Counter
-------------------------------------------------------------- */
	.roll-counter {
		text-align: center;
	}
	.roll-counter i {
		font-size: 30px;
	}
	.roll-counter .name-count,
	.roll-counter .numb-count {
		font-family: "Raleway", sans-serif;
	}
	.roll-counter .name-count {
		font-size: 14px;
		font-weight: 600;
		padding: 15px 0;
	}
	.roll-counter .numb-count {
		font-size: 44px;
		padding: 0;
		font-weight: 600;
	}
/* Clients
-------------------------------------------------------------- */
	.roll-client {
	    text-align: center;
	}
	.roll-client .client-item {
	    float: none;
	    display: inline-block;
		width: 19%;
		text-align: center;
		margin-bottom: 30px;
	}
	.roll-client .client-item img {
		max-width: 150px;
	}

/* Spacer
-------------------------------------------------------------- */
	.roll-spacer {
		display: block;
		clear: both;
		width: 100%;
		height: 47px;
		overflow: hidden;
	}
	.roll-spacer.small {
		height: 27px;
	}
	.roll-spacer.large {
		height: 60px;
	}
/* Icon Box
-------------------------------------------------------------- */
	.service {
		margin-bottom: 30px;
	}
	.widget_sydney_services_type_b .service {
		margin-bottom: 20px;
	}
	.widget_sydney_services_type_b .service-thumb {
		float: left;
		max-width: 120px;
    	margin-right: 30px;
    	margin-top: 7px;
	}
	.service.col-md-4:nth-of-type(3n+1) {
		clear: left;
	}
	.service.col-md-6:nth-of-type(2n+1) {
		clear: left;
	}
	.roll-icon-box {
		text-align: center;
	}
	.roll-icon-box .service-thumb {
		margin: 0 auto 20px;
	}
	.roll-icon-box .icon {
		text-align: center;
		width: 70px;
		height: 70px;
		line-height: 75px;
		margin: 0 auto 20px;
		-webkit-border-radius: 50%;
		   -moz-border-radius: 50%;
			 -o-border-radius: 50%;
				border-radius: 50%;
	}
	.roll-icon-box.left {
		text-align: left;
	}
	.roll-icon-box.left .icon {
		float: left;
		margin-top: 7px;
		margin-right: 30px;
	}
	.roll-icon-box .icon i {
		font-size: 26px;
	}
	.roll-icon-box .content {
		overflow: hidden;
	}
	.roll-icon-box .content h3 {
		font-size: 16px;
		font-weight: 500;
		line-height: normal;
		margin: 7px 0 10px;
	}
	.roll-icon-box .content h3,
	.roll-icon-box .content h3 a {
		color: #443f3f;
	}
	.roll-icon-box .content p {
		margin: 0;
	}

/* Contact widget
-------------------------------------------------------------- */

.sydney_contact_info_widget span {
	color: #d65050;
	margin-right: 15px;
}
.sydney_contact_info_widget div {
	margin-bottom: 15px;
}
/* Icon List
-------------------------------------------------------------- */
	.roll-icon-list {
		padding-top: 15px;
	}
	.roll-icon-list .icon {
		text-align: center;
		width: 70px;
		height: 70px;
		line-height: 75px;
		float: left;
		margin-right: 30px;
		margin-top: 7px;
		-webkit-border-radius: 50%;
		   -moz-border-radius: 50%;
			 -o-border-radius: 50%;
				border-radius: 50%;
	}
	.roll-icon-list .icon i {
		font-size: 26px;
	}
	.roll-icon-list .list-item {
		margin-bottom: 30px;
	}
	.roll-icon-list .content {
		overflow: hidden;
	}
	.roll-icon-list .content h3 {
		font-size: 16px;
		font-weight: 500;
		line-height: normal;
		margin: 7px 0 10px;
	}
	.roll-icon-list .content h3 a {
		color: #443f3f;
	}
	.roll-icon-list .content p {
		margin-bottom: 0;
	}
/* List
-------------------------------------------------------------- */
	.roll-list {
		list-style: none;
		margin: 0 0 30px 10px;
	}
	.roll-list li {
		line-height: 32px;
		position: relative;
		padding-left: 40px;
	}
	.roll-list li:before {
		content: "\f006";
		font-family: "FontAwesome";
		font-size: 15px;
		position: absolute;
		left: 0;
		top: 0;
	}
/* Button
-------------------------------------------------------------- */
	.roll-button {
		position: relative;
		display: inline-block;
		font-family: "Raleway", sans-serif;
		font-size: 13px;
		line-height: 24px;
		font-weight: 700;
		padding: 12px 35px;
		color: #fff;
		text-transform: uppercase;
		-webkit-border-radius: 3px;
		   -moz-border-radius: 3px;
			 -o-border-radius: 3px;
				border-radius: 3px;
		-webkit-transition: all 0.3s;
		   -moz-transition: all 0.3s;
		    -ms-transition: all 0.3s;
		     -o-transition: all 0.3s;
		        transition: all 0.3s;
	}
	.roll-button:hover {
		background-color: transparent;
	}
	.roll-button.border {
		background-color: transparent;
		text-transform: uppercase;
	}
	.roll-button.border:hover {
		color: #fff;
	}
	.roll-button.border.text-white {
		color: #fff;
	}
	.roll-button.light {
		background-color: #fff;
		border: 1px solid #fff;
		color: button;
	}
	.roll-button.light:hover {
		color: #fff;
	}
	.roll-button.light.border {
		border: 1px solid #fff;
		background-color: transparent;
		color: #fff;
	}
	.roll-button.light.border:hover {
		border: 1px solid blue;
		background-color: #443f3f;
		color: #fff;
	}
	.roll-button.dark {
		background-color:blue;
		border: 1px solid #443f3f;
	}
	.roll-button.dark:hover {
		border: 1px solid #443f3f;
		background-color: transparent;
		color: #443f3f;
	}
	.roll-button.dark.border {
		border: 1px solid #443f3f;
		background-color: transparent;
		color: #443f3f;
	}
	.roll-button.dark.border:hover {
		border: 1px solid blue;
		background-color: blue;
		color: #fff;
	}
	.more-button {
		display: table;
		margin: 30px auto 0;
		clear: both;
	}
/* Button Group
-------------------------------------------------------------- */
	.roll-button-group {
		text-align: center;
	}
	.roll-button-group .roll-button {
		margin-left: 8px;
	}
	.roll-button-group .roll-button:first-child {
		margin-left: 0;
	}
/* Lastest news
-------------------------------------------------------------- */
.blog-post {
	margin-bottom: 30px;
}
.blog-post .entry-title {
	margin: 15px 0;
	font-size: 16px;
}
/* Lastest Projects
-------------------------------------------------------------- */
	.project-filter {
		margin: 20px 0 50px 0;
		text-align: center;
	}
	.project-filter li  {
		display: inline-block;
	    position: relative;
	    text-align: center;
	    margin-left: -4px;
	    background-color: #f5f5f5;
		-webkit-transition: background 0.3s;
		   -moz-transition: background 0.3s;
		    -ms-transition: background 0.3s;
		     -o-transition: background 0.3s;
		        transition: background 0.3s;
	}
	.widget-area .widget .project-filter li {
			padding: 0;
	}
	.project-filter li a {
	    color: #767676;
	    display: block;
	    font-family: "Raleway",sans-serif;
	    font-size: 13px;
	    font-weight: 600;
	    outline: 0;
			padding: 10px;
	}
	.project-filter li a.active,
	.project-filter li a:hover,
	#secondary .project-filter li a.active,
	#secondary .project-filter li a:hover {
		color: #fff;
	}
	.roll-project {
		width: 100%;
		padding-bottom: 50px;
		margin: 0;
	}
	.roll-project .project-item {
		margin: 0 0 30px;
	}
	.roll-project.fullwidth .project-item {
		float: left;
	}
	.roll-project.fullwidth .project-item {
		width: 20%;
		margin: 0;
	}
	.roll-project .project-item .item-wrap {
		position: relative;
	}
	.roll-project .project-item .pop-overlay {
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		padding: 10px;
		z-index: 10;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);
		opacity: 0;
		-webkit-transition: all 1s;
		   -moz-transition: all 1s;
		    -ms-transition: all 1s;
		     -o-transition: all 1s;
		        transition: all 1s;
	}
	.roll-project .project-item .project-pop-wrap {
		z-index: 20;
		width: 100%;
		height: 100%;
		position: absolute;
	}
	.roll-project .project-item .project-pop {
		color: #fff;
		text-align: center;
		z-index: 1;
		width: 100%;
		height: 100%;
		cursor: pointer;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);
		opacity: 0;
		position: absolute;
		-webkit-transition: all 0.3s;
		   -moz-transition: all 0.3s;
		    -ms-transition: all 0.3s;
		     -o-transition: all 0.3s;
		        transition: all 0.3s;
	}
	.roll-project .project-item .project-pop a {
		color: #fff;
	}
	.roll-project .project-item:hover .project-pop {
		opacity: 0.5;
	}
	.roll-project .project-item .project-pop h3 {
		font-size: 16px;
		font-weight: 700;
		line-height: 26px;
		position: absolute;
		left: 0;
		bottom: 50%;
		width: 100%;
		margin-bottom: -4px;
	}
	.roll-project .project-item .project-cat {
		width: 100%;
		position: absolute;
		left: 0;
		top: 50%;
		padding-top: 20px;
		margin: 0;
	}
	.roll-project .project-item .project-cat li {
		display: inline-block;
	}
	.roll-project .project-item .project-cat li a {
		position: relative;
		font-style: italic;
		padding: 0 5px;
	}
	.roll-project .project-item .project-cat li a:before {
		position: absolute;
		content: "/";
		left: -3px;
		top: -1px;
	}
	.roll-project .project-item .project-cat li:first-child a:before {
		content: "";
	}
	.roll-project .project-item:hover .project-title-wrap,
	.roll-project .project-item:hover > .item-wrap .project-pop{
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		filter: alpha(opacity=100);
		opacity: 1;
		-webkit-animation: pop-scale 0.5s 1 cubic-bezier(0.15, 0.85, 0.35, 1.25);
		   -moz-animation: pop-scale 0.5s 1 cubic-bezier(0.15, 0.85, 0.35, 1.25);
		        animation: pop-scale 0.5s 1 cubic-bezier(0.15, 0.85, 0.35, 1.25);
	}
	.roll-project .project-item:hover > .item-wrap .pop-overlay {
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		filter: alpha(opacity=100);
		opacity: 1;
	}

	.project-title-wrap{
		position:absolute;
		width: 100%;
		height: 100%;
		opacity: 0;
		z-index: 2;
	}

	.roll-project .project-item:hover > .item-wrap .project-title-wrap {
		border: 2px solid yellow;
	}

	.roll-project .project-title{
	  display: table;
	  width: 100%;
	  height: 100%;
	  text-align: center;
		color: #fff;
	}

	.roll-project .project-title span{
	  display: table-cell;
	  vertical-align: middle;
	  padding-left: 10px;
	  padding-right: 10px;
	}

/* Testimonials
-------------------------------------------------------------- */
	.roll-testimonials {
		max-width: 750px;
		margin: 0 auto 30px;
		text-align: center;
	}
	.roll-testimonials .avatar {
		width: 100px;
		margin: 7px auto 26px;
		border: 2px solid #fff;
	}
	.roll-testimonials .avatar,
	.roll-testimonials .avatar img {
		-webkit-border-radius: 50%;
		   -moz-border-radius: 50%;
			 -o-border-radius: 50%;
				border-radius: 50%;
	}
	.roll-testimonials .whisper {
		font-size: 18px;
		font-style: italic;
		line-height: 26px;
		padding: 0 0 20px;
		margin: 0;
		border: 0;
	}
	.roll-testimonials .name {
		font-family: "Raleway", sans-serif;
		font-size: 18px;
		font-weight: 500;
	}
	.roll-testimonials .name span {
		font-size: 13px;
		display: block;
		color: #767676;
	}
	.roll-testimonials .owl-controls {
		margin-top: 40px;
	}
	.hentry .roll-testimonials blockquote {
		background: transparent;
	}
	.owl-carousel .owl-wrapper:after {
		content: ".";
		display: block;
		clear: both;
		visibility: hidden;
		line-height: 0;
		height: 0;
	}
	.owl-carousel{
		display: none;
		position: relative;
		-ms-touch-action: pan-y;
		-webkit-transition: all 0.3s !important;
		transition: all 0.3s !important;
	}
	.owl-carousel .owl-wrapper{
		display: none;
		position: relative;
		-webkit-transform: translate3d(0px, 0px, 0px);
	}
	.owl-carousel .owl-wrapper-outer{
		overflow: hidden;
		position: relative;
		width: 100%;
	}
	.owl-carousel .owl-wrapper-outer.autoHeight{
		-webkit-transition: height 500ms ease-in-out;
		-moz-transition: height 500ms ease-in-out;
		-ms-transition: height 500ms ease-in-out;
		-o-transition: height 500ms ease-in-out;
		transition: height 500ms ease-in-out;
	}
	.owl-carousel .owl-item{
		float: left;
	}
	.owl-controls .owl-page,
	.owl-controls .owl-buttons div{
		cursor: pointer;
	}
	.owl-controls {
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
		-webkit-tap-highlight-color: rgba(0, 0, 0, 0);
	}
	.owl-carousel  .owl-wrapper,
	.owl-carousel  .owl-item{
		-webkit-backface-visibility: hidden;
		-moz-backface-visibility:    hidden;
		-ms-backface-visibility:     hidden;
	  -webkit-transform: translate3d(0,0,0);
	  -moz-transform: translate3d(0,0,0);
	  -ms-transform: translate3d(0,0,0);
	}
	.owl-theme .owl-controls{
	  text-align: center;
	  margin-top: 45px;
	}
	.owl-theme .owl-controls .owl-page{
	  display: inline-block;
	  zoom: 1;
	  *display: inline;/*IE7 life-saver */
	}
	.owl-theme .owl-controls .owl-page span{
	  display: block;
	  width: 9px;
	  height: 9px;
	  margin: 4px;
	  background-color: transparent;
	  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	  filter: alpha(opacity=100);
	  opacity: 1;
	  -webkit-border-radius: 50%;
	     -moz-border-radius: 50%;
	     -o-border-radius: 50%;
	      border-radius: 50%;
	  -webkit-transition: background 0.3s;
	     -moz-transition: background 0.3s;
	      -ms-transition: background 0.3s;
	       -o-transition: background 0.3s;
	          transition: background 0.3s;
	}

/* Socials
-------------------------------------------------------------- */
	.roll-socials li {
		display: inline-block;
		text-align: center;
		margin: 2px 8px 8px 0;
	}
	.roll-socials li:last-child {
		margin-right: 0;
	}
	.roll-socials li a {
		display: inline-block;
		width: 40px;
		height: 40px;
		line-height: 40px;
		background-color: transparent;
		font-size: 16px;
		-webkit-border-radius: 50%;
		   -moz-border-radius: 50%;
			 -o-border-radius: 50%;
				border-radius: 50%;
	}
	.roll-socials li a:hover {
		color: #fff;
	}
/* Infomation
-------------------------------------------------------------- */
	.roll-infomation {
		margin-bottom: 50px;
		list-style: none;
	}
	.roll-infomation li {
		position: relative;
		padding-left: 30px;
		margin-bottom: 15px;
		line-height: 24px;
	}
	.roll-infomation li.time span {
		color: #d91d1d;
		font-weight: 700;
	}
	.roll-infomation li.address:before,
	.roll-infomation li.phone:before,
	.roll-infomation li.email:before {
		position: absolute;
		left: 0;
		top: 4px;
		content: "\f041";
		font-family: "FontAwesome";
		font-size: 20px;
	}
	.roll-infomation li.phone:before {
		content: "\f095";
	}
	.roll-infomation li.email:before {
		content: "\f040";
	}
/* Progress Bar
-------------------------------------------------------------- */
	.roll-progress {
		position: relative;
		margin-bottom: 20px;
	}
	.roll-progress .name {
		position: absolute;
		left: 0;
		top:0;
	}
	.roll-progress .name,
	.roll-progress .perc {
		font-weight: 400;
	}
	.roll-progress .progress-animate {
		height: 10px;
		width: 0;
		-webkit-border-radius: 2px;
		   -moz-border-radius: 2px;
		     -o-border-radius: 2px;
		        border-radius: 2px;
	}
	.roll-progress .progress-bar {
		background: #f3f3f3;
		width: 100%;
		margin-top: 10px;
		-webkit-border-radius: 2px;
		   -moz-border-radius: 2px;
		     -o-border-radius: 2px;
		        border-radius: 2px;
	}
	.roll-progress .perc {
		width: 0;
		text-align: right;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);
		opacity: 0;
		-webkit-transition: opacity 1s ease-in-out;
		  -moz-transition: opacity 1s ease-in-out;
		   -ms-transition: opacity 1s ease-in-out;
		    -o-transition: opacity 1s ease-in-out;
		       transition: opacity 1s ease-in-out;
	}
	.roll-progress .perc.show {
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		filter: alpha(opacity=100);
		opacity: 1;
	}
/* Service Box
-------------------------------------------------------------- */
	.roll-servicebox .service-content h3 {
		font-size: 16px;
		font-weight: 500;
		margin: 10px 0 10px;
	}
/* Tabs
-------------------------------------------------------------- */
	.roll-tabs {
		margin-bottom: 20px;
	}
	.roll-tabs .menu-tab {
		overflow: hidden;
		margin: 0;
		list-style: none;
	}
	.roll-tabs .menu-tab li {
		position: relative;
		bottom: -1px;
		float: left;
		margin-right: 2px;
	}
	.roll-tabs .menu-tab li a {
		font-family: "Raleway", sans-serif;
		font-size: 14px;
		font-weight: 500;
		display: block;
		color: #2d3340;
		padding: 12px 25px 10px;
	}
	.roll-tabs .menu-tab li a:hover {
		background-color: #f7f7f7;
		text-decoration: none;
	}
	.roll-tabs .menu-tab li.active a {
		background-color: #fff;
		border: 1px solid #dbdbdb;
		transition: none;
	}
	.roll-tabs .content-tab {
		margin-top: 50px;
		border: 1px solid #dbdbdb;
		padding: 25px 20px 10px 25px;
		margin-top: -1px;
		background-color: #fff;
	}
	.roll-tabs .content-tab p {
		margin-bottom: 20px;
	}
/* Promo Box
-------------------------------------------------------------- */
	.roll-promobox {
		text-align: center;
		padding: 20px 0;
	}
	.roll-promobox .promo-controls {
		margin-top: 25px;
	}
	.roll-promobox .title {
		font-size: 18px;
		margin-bottom: 10px;
		color: #8e8e8e;
		font-weight: 500;
	}
	.roll-promobox .promo-content p {
		margin-bottom: 40px;
		font-size: 16px;
	}
	.roll-promobox.aside-style {
		text-align: left
	}
	.roll-promobox.aside-style .promo-content p {
		padding-bottom: 15px;
	}
	.roll-promobox.aside-style .promo-wrap {
	    display: table;
		overflow: hidden;
		width: 100%;
	}
	.roll-promobox.aside-style .promo-content {
	    display: table-cell;
	    vertical-align: middle;
		width: 70%;
	}
	.roll-promobox.aside-style .promo-content p {
		margin: 0 0 5px;
	}
	.roll-promobox.aside-style .promo-controls {
	    display: table-cell;
	    margin: 0;
	    text-align: center;
	    vertical-align: middle;
	    white-space: nowrap;
		width: 30%;
	}
/* Team
-------------------------------------------------------------- */
	.roll-team.carousel .team-item {
		padding: 0 25px;
	}
	.post-type-archive-employees .team-item {
  		margin-bottom: 30px;
	}
	.roll-team .team-inner {
		padding: 4px;
		background-color: #fff;
		position: relative;
		text-align: center;
	}
	.roll-team .team-item .team-pop .name {
		font-family: "Raleway", sans-serif;
		font-size: 16px;
		font-weight: 600;
		color: #fff;
		padding: 10px 0;
	}
	.roll-team .team-item .team-pop .pos {
		font-style: italic;
	}
	.roll-team .team-item .team-pop .team-info {
	    top: 30%;
	    position: relative;
		width: 100%;
	}
	.roll-team .team-item .pop-overlay {
		position: absolute;
		left: 0;
		top: 0;
		width: 100%;
		height: 100%;
		padding: 10px;
		z-index: 10;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);
		opacity: 0;
		-webkit-transition: all 1s;
		   -moz-transition: all 1s;
		    -ms-transition: all 1s;
		     -o-transition: all 1s;
		        transition: all 1s;
	}
	.roll-team .team-item .team-social {
		text-align: center;
		padding: 17px 0 0;
		margin: 0;
	}
	.roll-team .team-item .team-social li {
		display: inline-block;
	}
	.roll-team .team-social li a {
		font-size: 16px;
		color: #fff;
		display: block;
		margin-left: 5px;
		height: 30px;
		width: 30px;
		line-height: 28px;
		border: 1px solid #fff;
		background-color: transparent;
		-webkit-border-radius: 50%;
		   -moz-border-radius: 50%;
			 -o-border-radius: 50%;
				border-radius: 50%;
		-webkit-transition: all 0.3s;
		   -moz-transition: all 0.3s;
		    -ms-transition: all 0.3s;
		     -o-transition: all 0.3s;
		        transition: all 0.3s;
	}
	.roll-team .team-item .team-social li:first-child a {
		margin-left: 0;
	}
	.roll-team .team-item .team-social li:hover a {
		background-color: #fff;
	}
	.archive .team-social li a {
		color: #d65050;
		border: 1px solid #d65050;
	}
	.roll-team .team-item .team-pop {
		color: #fff;
		z-index: 20;
		width: 100%;
		height: 100%;
		padding: 0 10px;
		cursor: pointer;
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
		filter: alpha(opacity=0);
		opacity: 0;
		-webkit-transition: all 0.3s;
		   -moz-transition: all 0.3s;
		    -ms-transition: all 0.3s;
		     -o-transition: all 0.3s;
		        transition: all 0.3s;
	}
	.roll-team .team-item:hover > .team-inner .team-pop {
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		filter: alpha(opacity=100);
		opacity: 1;
		-webkit-animation: pop-scale 0.5s 1 cubic-bezier(0.15, 0.85, 0.35, 1.2);
		   -moz-animation: pop-scale 0.5s 1 cubic-bezier(0.15, 0.85, 0.35, 1.2);
		        animation: pop-scale 0.5s 1 cubic-bezier(0.15, 0.85, 0.35, 1.2);
	}
	.roll-team .team-item:hover > .team-inner .pop-overlay {
		-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
		filter: alpha(opacity=100);
		opacity: 1;
	}
	.roll-team .team-content {
		text-align: center;
	}
	.roll-team .team-content .name {
		font-family: "Raleway", sans-serif;
		font-size: 16px;
		font-weight: 600;
		padding: 12px 0 2px;
	}
	.roll-team .team-content .pos {
		padding-bottom: 12px;
		color: #443f3f;
	}
	.archive .team-item:nth-of-type(3n+1) {
		clear: left;
	}

/* Elements
-------------------------------------------------------------- */
	a {
		color: #d65050;
	}
	h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
		color: #d65050;
	}
	.text-color { color: #d65050;}
	button,
	input[type="button"],
	input[type="reset"],
	input[type="submit"] {
		background-color: blue;
		border: 1px solid #d65050;
	}
	button:hover,
	input[type="button"]:hover,
	input[type="reset"]:hover,
	input[type="submit"]:hover {
		background-color: transparent;
		color: #d65050;
	}
	textarea:focus,
	input[type="text"]:focus,
	input[type="password"]:focus,
	input[type="datetime"]:focus,
	input[type="datetime-local"]:focus,
	input[type="date"]:focus,
	input[type="month"]:focus,
	input[type="time"]:focus,
	input[type="week"]:focus,
	input[type="number"]:focus,
	input[type="email"]:focus,
	input[type="url"]:focus,
	input[type="search"]:focus,
	input[type="tel"]:focus,
	input[type="color"]:focus {
		border: 1px solid #d65050;
	}
	#mainnav > ul > li > a.active,
	#mainnav > ul > li > a:hover {
		color: #d65050;
	}
	#mainnav ul li ul:after {
		background-color: #d65050;
		transition: all 0.3s ease;
		-webkit-transition: all 0.3s ease;
	}
	#mainnav .sub-menu li:hover > a {
		background-color: #d65050;
	}
	.error-wrap #search-submit:hover {
		background-color:blue;
		border-color: #d65050;
	}
	.text-slider .maintitle:after {
		background-color: #d65050;
	}
	.content-area .hentry:after {
		background-color: #d65050;
	}
	.hentry .meta-post a:hover {
		color: #d65050;
	}
	.hentry blockquote {
	    border-left: 3px solid #d65050;
	}
	.blog-pagination ul li {
		border: 1px solid #d65050;
	}
	.blog-pagination ul li.active,
	.blog-pagination ul li:hover a {
		background-color: #d65050;
	}
	.sidebar .widget:before {
		background-color: #d65050;
	}
	.widget-tags .tag-list a:hover {
		border: 1px solid #d65050;
	}
	.comment .comment-detail {
		border: 1px solid #d65050;
	}
	.bottom .socials li:hover a,
	.go-top {
		background-color: #d65050;
	}
	.go-top:hover {
		color: #d65050;
	}
	.switcher-container .switcher-icon a:focus {
		color: #d65050;
	}
	.owl-theme .owl-controls .owl-page span{
	  border: 2px solid #d65050;
	}
	.owl-theme .owl-controls .owl-page.active span,
	.owl-theme .owl-controls.clickable .owl-page:hover span{
	  background-color: #d65050;
	}
	.roll-icon-box .icon {
		border: 1px solid #d65050;
	}
	.roll-icon-box .icon i,
	.roll-icon-box .content h3 a:hover {
		color: #d65050;
	}
	.roll-icon-box.white .icon {
		background-color: #d65050;
	}
	.roll-icon-box.white .content h3 a {
		color: #d65050;
	}
	.roll-icon-list .icon {
		border: 1px solid #d65050;
	}
	.roll-icon-list .icon i,
	.roll-icon-list .content h3 a:hover {
		color: #d65050;
	}
	.roll-button {
		background-color: blue;
		border: 1px solid #d65050;
	}
	.roll-button:hover {
		color: #d65050;
	}
	.roll-button.border {
		color: #d65050;
		border: 1px solid #d65050;
	}
	.roll-button.border:hover {
		background-color: #d65050;
	}
	.roll-button.light:hover {
		border: 1px solid blue;
		background-color: blue;
	}
	.project-filter li a.active,
	.project-filter li a:hover {
		background-color: #d65050;
	}
	.roll-testimonials .name {
		font-family: "Raleway", sans-serif;
		font-size: 18px;
		font-weight: 500;
		color: #d65050;
	}
	.roll-project .project-item .project-pop {
		background-color: #d65050;
	}
	.roll-socials li a {
		border: 1px solid #d65050;
	}
	.roll-socials li a:hover {
		background-color: #d65050;
		border: 1px solid #d65050;
	}
	.roll-infomation li.address:before,
	.roll-infomation li.phone:before,
	.roll-infomation li.email:before {
		color: #d65050;
	}
	.roll-progress .progress-animate {
		background-color: #d65050;
	}
	.roll-team .team-item .team-pop .team-social li:hover a {
		color: #d65050;
	}
	.roll-team .team-item .team-pop {
		background-color: #d65050;
	}
	.roll-team .team-content .name {
		color: #d65050;
	}
/* Media Queries
-------------------------------------------------------------- */
	@media only screen and (min-width: 1930px) {
		.parallax {
			background-size: cover;
		}
	}
	/* Smaller than standard 1200 */
	@media only screen and (max-width: 1199px) {
		.roll-icon-list .list-item {
			margin-bottom: 18px;
		}
		.roll-project.fullwidth .project-item {
			width: 25%;
		}
		.masonry-layout .hentry {
			width: 455px;
		}
	}
	/* Smaller than standard 980 */
	@media only screen and (max-width: 991px) {
		.site-header.fixed {
			position: static !important;
		}
		.parallax {
			background-size: cover;
			background-attachment: scroll;
			background-position: top center!important;
		}
		.roll-counter .numb-count {
			font-size: 24px;
		}
		.masonry-layout .hentry {
			width: 345px;
		}
		.header-wrap .col-md-8 {
			padding: 0;
		}
		.last {
			margin-bottom: 0 !important;
		}
		.margin-bottom-device {
			margin-bottom: 50px;
		}
		.margin-top-device {
			margin-top: 50px;
		}
		.content-area .post-wrap,
		.contact-form-wrap {
			padding-right: 0;
		}
		.contact-form-aside,
		.sidebar {
			margin-top: 50px;
		}
		.roll-icon-box {
			margin-bottom: 30px;
		}
		.roll-promobox.aside-style,
		.roll-promobox.aside-style .promo-wrap,
		.roll-promobox.aside-style .promo-content,
		.roll-promobox.aside-style .promo-controls {
			display: block;
			text-align: center;
			width: 100%;
		}
		.roll-promobox.aside-style .title {
			margin-bottom: 20px;
		}
		.roll-project.fullwidth .project-item {
			width: 33.3%;
		}
		.footer-widgets .widget {
			margin-bottom: 50px;
		}
		.text-slider-stopped {
			top: 70%;
		}
	}
	@media only screen and (max-width: 1024px) {
		.slides-container .slide-item,
		.panel-row-style {
			background-attachment: scroll;
			background-position: center !important;
		}
		.panel-row-style.mob-pad-0 {
			padding: 0 !important;
		}
		.panel-row-style.mob-pad-15 {
			padding: 15px 0 !important;
		}
		.panel-row-style.mob-pad-30 {
			padding: 30px 0 !important;
		}
		.panel-row-style.mob-pad-45 {
			padding: 45px 0 !important;
		}
		#mainnav {
			display: none;
		}
		.btn-menu {
			display: block;
		}
		.site-header {
			position: static;
			background-color: rgba(0,0,0,0.9);
		}
		.posts-navigation {
			overflow: hidden;
			margin-bottom: 30px;
		}
	}
	@media only screen and (max-width: 780px) {
		.roll-client .client-item img {
			max-width: 100%;
  		}
  		.panel-grid-cell {
   			padding-left:15px !important;
    		padding-right:15px !important;
    		margin-bottom: 15px !important;
  		}
		h1 { font-size: 32px;}
		h2 { font-size: 28px;}
		h3 { font-size: 22px;}
		h4 { font-size: 18px;}
		h5 { font-size: 16px;}
		h6 { font-size: 14px;}
	}
	/* Tablet Landscape */
	 @media only screen and (min-device-width : 768px) and (max-device-width : 1024px) and (orientation : landscape) {
		.parallax {
			background-size: cover;
			background-attachment: scroll;
			background-position: top center!important;
		}
	}
	/* All Mobile Sizes */
	@media only screen and (max-width: 767px) {
		.posts-layout {
			max-width: 100%;
		}
		.masonry-layout .hentry {
			width: 100%;
			margin: 0 0 30px;
			padding: 0 15px;
		}
		.text-slider-section {
			min-height: 190px;
		}
		.text-slider .maintitle {
			font-size: 32px;
		    line-height: 1.1;
		    padding-bottom: 10px;
		}
		.text-slider .subtitle {
		    font-size: 16px;
		    line-height: 24px;
		    padding: 15px 0;
		}
		.roll-button {
			padding: 10px 30px;
		}
		.roll-project .project-item {
			width: 100%;
		}
		.roll-project.fullwidth .project-item {
			width: 50%;
		}
		.roll-counter {
			margin-bottom: 50px;
		}
		.single-post .author-post .author-avatar {
			float: none;
			margin-bottom: 20px;
		}
		.single-post .author-post .author-info {
			margin-left: 0;
			padding: 0;
		}
		.single-post .author-post ul.socials {
			position: static;
		}
		.single-post .author-post .intro {
			clear: left;
			padding-top: 10px;
		}
		.comment-list .children {
			margin-left: 75px;
		}
		.error-wrap .error-search {
			padding: 0 20px;
		}
		.aside-image .content-wrap {
			padding-left: 0;
			padding-right: 0;
		}
		.social-menu-widget a:before {
			font-size: 42px;
		}
		.btn-menu {
			float: none;
			margin: 15px auto 0;
		}
		.header-wrap {
			text-align: center;
		}
		#mainnav-mobi {
			top: auto;
		}
		.site-header.float-header {
			padding-top: 20px;
			padding-bottom: 20px;
		}

        .text-slider-section {
			min-height: 0;
			top: auto;
			bottom: 0;
		}
		.site-title {
			font-size: 22px !important;
		}
	}
	/* Mobile Portrait Size */
	@media only screen and (max-width: 479px) {
		.roll-project.fullwidth .project-item {
			width: 100%;
		}
		.blog-post,
		.service,
		.sidebar-column {
			padding: 0;
		}
		.roll-button {
			font-size: 12px;
		}
		.text-slider .maintitle {
			font-size: 20px;
		}
		.text-slider .subtitle {
			font-size: 14px;
		}
		.text-slider {
			margin-bottom: 15px;
		}
	}
	@media only screen and (max-width: 320px) {
		.text-slider {
			margin-bottom: 0;
		}
	}

.dropdownmenu ul, .dropdownmenu li {
	margin: 0;
	padding: 0;
}
.dropdownmenu ul {
	background: gray;
	list-style: none;
	width: 100%;
}
.dropdownmenu li {
	float: left;
	position: relative;
	width:auto;
}
.dropdownmenu a {
	background: #30A6E6;
	color: #FFFFFF;
	display: block;
	font: bold 12px/25px sans-serif;
	padding: 62px 69px;
	text-align: center;
	text-decoration: none;
	-webkit-transition: all .25s ease;
	-moz-transition: all .25s ease;
	-ms-transition: all .25s ease;
	-o-transition: all .25s ease;
	transition: all .25s ease;
}
.dropdownmenu li:hover a {
	background: #000000;
}
#submenu {
	left: 0;
	opacity: 0;
	position: absolute;
	top: 35px;
	visibility: hidden;
	z-index: 1;
}
li:hover ul#submenu {
	opacity: 1;
	top: 40px;	/* adjust this as per top nav padding top & bottom comes */
	visibility: visible;
}
#submenu li {
	float: none;
	width: 100%;
}
#submenu a:hover {
	background: #DF4B05;
}
#submenu a {
	background-color:#000000;
}
</style>

<script>
function myFunction() {
    document.getElementById("myForm").reset();
}
</script>

   </head>

   <body bgcolor = "#FFFFFF">

<table border="0" cellpadding="0" cellspacing="0" align="center" width="904" style="background-color:#06C">
	<tr>
</tr/></table>		
<td width="194" height="153" align="center" bgcolor="#FFFFFF" ><a href="http://empeiros.internship-test.us"><img src="images/Company-logo.jpg" alt="Company Logo"></a> </td>
		<td width="419" bgcolor="#FFFFFF"><img src="images/spacer.gif" width="5" height="1" border="0" alt="">
		  
</td>

      <div align = "center">
         <div style = "width:300px; border: solid 1px #30A6E6; " align = "left">
            <div style = "background-color:blue; color:#FFFFFF; padding:3px;"><b>Login</b></div>

            <div style = "margin:30px">

               <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "post" id="myForm">
                  <label>UserName  :</label><input type = "text" name = "Username" class = "box" required/><br /><br />
                  <label>Password  :</label><input type = "password" name = "Password" class = "box" required/><br/><br />
                  <input type = "submit" value = " Submit " background-color: #008CBA;/><input type="button" onclick="myFunction()" value="Reset">

               </form>

               <div style = "font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

            </div>

         </div>

      </div>

<?php

WP_Session::get_instance();
?>

   </body>
</html>
