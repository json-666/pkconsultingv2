<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uncreative_s
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">


	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

	<link
		href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Playfair+Display:wght@700&display=swap"
		rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css"
		integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />

	<?php wp_head(); ?>
	<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
	<meta name="cdp-version" content="1.3.9" /><style type="text/css">
		ul.cnss-social-icon li.cn-fa-icon a:hover{opacity: 0.7!important;color:#ffffff!important;}
		</style><!-- Global site tag (gtag.js) - Google Analytics -->
<script type="text/plain" data-service="google-analytics" data-category="statistics" async src="https://www.googletagmanager.com/gtag/js?id=UA-212294555-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-212294555-1');
</script>

<meta name="facebook-domain-verification" content="mnnzbdh8x772820jc0uvizm9ukf85r" />

<!-- Messenger Wtyczka czatu Code -->
    <div id="fb-root"></div>

    <!-- Your Wtyczka czatu code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script type="text/plain" data-service="facebook" data-category="marketing">
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "100755695486243");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pl_PL/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>


<!-- Facebook Pixel Code -->
<script type="text/plain" data-service="facebook" data-category="marketing">
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '315561110046571');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=315561110046571&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


<!-- Hotjar Tracking Code for https://pkconsulting.pl/ -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2836183,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>


</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary">
			<?php esc_html_e('Skip to content', 'uncreative_s'); ?>
		</a>

		<header id="masthead" class="site-header-wrapper">
			<div class="site-header">
				<div class="row align-items-center justify-content-between">
					<!-- .site-branding -->
					<div class="site-branding col-xl-2 col-md-3 col-sm-4 col-5 p-0 pe-xl-5">
						<a href="<?php echo get_site_url(); ?>">
							<img src="<?php echo esc_url(wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'full')[0]); ?>"
								alt="pkconsulting logo">
						</a>
					</div>
					<nav id="site-navigation" class="col-auto main-navigation">
						<button class="hamburger hamburger--collapse menu-toggle " type="button"
							aria-controls="primary-menu" aria-expanded="false"
							onclick="this.classList.toggle( 'is-active' )">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
						<?php
						wp_nav_menu(
							array(
								'menu_id' => 'primary-menu',
							)
						);
						?>
					</nav><!-- #site-navigation -->
				</div>
			</div>
		</header><!-- #masthead -->

		<div class="go-up" onclick="window.scroll(0,0)"></div>