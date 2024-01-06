<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package karenclinic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<div class="clkarenTopHeaderContainer">
	<div class="clkarenTopHeader mainView">
		<div class="generalFlexPart topHeaderLocationPart">
			<a href="#">
				<span><svg height="20" width="20" fill="#fff" stroke="#fff" stroke-width="10px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 390 380" xml:space="preserve"><path d="M184.277 0c-71.683 0-130 58.317-130 130 0 87.26 119.188 229.855 124.263 235.883a7.498 7.498 0 0 0 5.705 2.67h.032a7.5 7.5 0 0 0 5.696-2.621c5.075-5.926 124.304-146.165 124.304-235.932-.001-71.683-58.317-130-130-130zm.045 349.251C160.385 319.48 69.277 201.453 69.277 130c0-63.411 51.589-115 115-115s115 51.589 115 115c-.001 73.49-90.95 189.829-114.955 219.251z"/><path d="M184.277 72.293c-30.476 0-55.269 24.793-55.269 55.269s24.793 55.269 55.269 55.269 55.269-24.793 55.269-55.269-24.793-55.269-55.269-55.269zm0 95.537c-22.204 0-40.269-18.064-40.269-40.269s18.064-40.269 40.269-40.269 40.269 18.064 40.269 40.269-18.066 40.269-40.269 40.269z"/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg></span>
				<span>تهران، خیابان فلسطین، بین خیابان انقلاب و کوچه نایبی، پلاک 328، طبقه سوم</span>
			</a>
		</div>
		<div class="generalFlexPart topHeaderIconPart">
			<a href="#">
				<svg width="20" height="20" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
			</a>
			<a href="#">
				<svg width="20" height="20" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
			</a>
			<a href="#">
				<svg width="20" height="20" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
			</a>
			<a href="#">
				<svg width="20" height="20" fill="#fff" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><path d="M349.33 69.33a93.62 93.62 0 0 1 93.34 93.34v186.66a93.62 93.62 0 0 1-93.34 93.34H162.67a93.62 93.62 0 0 1-93.34-93.34V162.67a93.62 93.62 0 0 1 93.34-93.34h186.66m0-37.33H162.67C90.8 32 32 90.8 32 162.67v186.66C32 421.2 90.8 480 162.67 480h186.66C421.2 480 480 421.2 480 349.33V162.67C480 90.8 421.2 32 349.33 32Z"></path><path d="M377.33 162.67a28 28 0 1 1 28-28 27.94 27.94 0 0 1-28 28ZM256 181.33A74.67 74.67 0 1 1 181.33 256 74.75 74.75 0 0 1 256 181.33m0-37.33a112 112 0 1 0 112 112 112 112 0 0 0-112-112Z"></path></svg>
			</a>
		</div>
	</div>
</div>
<div class="mainDesctopHeaderContainer">
	<div class="mainDesctopHeader mainView">
		<a href="#" class="desctopLogoPart">
			<svg xmlns="http://www.w3.org/2000/svg" width="100" height="80" viewBox="130 130 790 790" style="enable-background:new 0 0 1080 1080" xml:space="preserve"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="269.18" y1="878.832" x2="911.804" y2="236.208"><stop offset="0" style="stop-color:#fbf397"/><stop offset="1" style="stop-color:#d7b855"/></linearGradient><path d="M794.55 548.65h-80l-15.53-38.92-55.82 102.41-40.3-105.36-22.02 40.3H534.1v225.26h139.36V622.16L820.7 772.34h178.09L794.55 548.65zm-37.35-41.08 226.05-199.91H804.97l-106.15 80.4h-23.78v-80.4H534.1v217.79h33.22l38.72-68.21 40.3 103.79 54.25-102.41 29.48 68.21h44.82l-17.69-19.26zm-480.79-82.36h33.02v54.45c0 21.03-5.31 37.54-15.73 49.53-10.42 11.99-29.09 20.05-51.7 20.05h-10.02v-33.22H242c12.38 0 21.03-2.75 26.34-8.26 5.31-5.5 8.06-14.94 8.06-28.11v-54.44zm197.54 17.69c2.3 5.28 3.57 10.95 3.73 16.71v.79a29.65 29.65 0 0 1-2.56 11.99 33.93 33.93 0 0 1-6.29 9.63 39.32 39.32 0 0 1-13.56 8.65 76.637 76.637 0 0 1-27.72 4.32h-57.2c-6.94.06-13.83-1.27-20.25-3.93a34.99 34.99 0 0 1-11.79-8.06c-3.35-3.4-6.01-7.4-7.86-11.79a46.847 46.847 0 0 1-3.93-20.05V349.33h33.02v101.82c0 4.13.79 6.88 2.16 8.45 1.38 1.57 4.32 2.16 8.65 2.16h57.2c10.61 0 16.71-.39 18.87-1.57l-1.18-2.75-2.56-4.32c-3.53-5.1-7.47-9.9-11.79-14.35-11.79-12.58-21.82-22.8-30.47-31.25l-4.32-3.93-2.95-2.75c-.2-.39-.59-.59-.98-.98l-.59-.59h-.79l3.93-27.72 88.45-40.3 13.76 30.27L430.71 391c5.7 5.7 13.96 14.15 24.37 25.16s15.14 18.48 18.87 26.74zm-314.89-4.33-21.03-21.43 21.03-21.23 21.43 21.43c-.01 0-21.43 21.23-21.43 21.23zm34.79-13.36h33.02v62.9c0 17.89-4.32 31.84-13.17 41.87a50.798 50.798 0 0 1-21.43 14.55 86.014 86.014 0 0 1-29.88 4.72h-15.14a73.613 73.613 0 0 1-31.45-6.49 56.672 56.672 0 0 1-24.77-21.03 67.143 67.143 0 0 1-9.63-35.77c0-1.57.2-3.34.2-4.91.79-15.73 5.7-33.22 14.55-52.29l30.07 13.76c-7.08 15.33-11.01 28.7-11.6 40.1v3.54a31.246 31.246 0 0 0 4.52 17.69c3.19 4.92 8.09 8.5 13.76 10.02 2.5.82 5.06 1.41 7.67 1.77l6.68.39h15.14c12.58 0 21.23-2.36 25.75-7.08s5.7-10.81 5.7-20.84l.01-62.9zm296.62 226.24a45.464 45.464 0 0 0-6.29-14.35c-7.86-11.6-21.03-17.3-39.12-17.3-10.1.1-20.01 2.67-28.9 7.47l-7.08 4.13.39-3.54v-61.52h-33.02v101.62l-6.88 11.01h-79.22c-4.72 0-8.06-1.18-9.83-3.34-1.6-2.67-2.42-5.73-2.36-8.85v-24.57h-33.22v31.25c0 4.32-2.36 6.68-7.27 6.68h-119.3a4.517 4.517 0 0 1-4.32-2.75 8.43 8.43 0 0 1-.79-3.34c0-.39.2-.98.2-1.57 1.63-10.16 3.93-20.21 6.88-30.07l-31.84-9.04c-.1.4-.23.8-.39 1.18l-.59 2.36c-.79 2.56-1.38 5.11-1.97 7.67-1.77 5.84-3.02 11.83-3.73 17.89-.39 2.93-.58 5.89-.59 8.85 0 2.75.2 5.31.39 7.67.75 6.32 2.97 12.38 6.49 17.69a33.624 33.624 0 0 0 23.78 15.14c5.31.98 17.49 1.38 36.36 1.38h57.4c17.3 0 29.48-.39 36.17-1.18 7.75-.53 15.28-2.81 22.02-6.68 5.5 4.52 14.55 6.68 26.54 6.68h157.65c2.25-.07 4.48-.33 6.68-.79 5.65-.91 11.1-2.77 16.12-5.5 13.96-8.06 21.03-22.02 21.03-41.87-.06-4.19-.52-8.34-1.39-12.41zm-29.69 17.89a10.39 10.39 0 0 1-1.97 4.72c-2.75 3.34-7.86 4.91-15.53 4.91h-38.92c1.74-2.05 3.65-3.96 5.7-5.7 3.54-3.15 7.08-6.09 10.81-8.85 10.42-7.67 19.07-11.6 25.95-11.6s14.35 3.73 14.35 11.2c.01 1.79-.12 3.56-.39 5.32zm-278.33 56.61 21.43 21.43-21.23 21.23-21.23-21.43c-.01 0 21.03-21.23 21.03-21.23z" style="fill:url(#a)"/></svg>
		</a>
		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container_class' => 'mainMenu',
				)
			);
		?>
		<a class="generalButton" href="#">دریافت نوبت</a>
	</div>
</div>


