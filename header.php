<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
        <meta name="author" content="ink, cookbook, recipes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        
        <!-- Place favicon.ico and apple-touch-icon(s) here  -->
        <link rel="shortcut icon" href="http://cdn.ink.sapo.pt/3.0.2/<?php bloginfo('template_directory'); ?>/img/favicon.ico">
        <script>
			document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';
		</script>
        <?php wp_head(); ?>
        <script type="text/javascript">
            Modernizr.load({
              test: Modernizr.flexbox,
              nope : 'http://cdn.ink.sapo.pt/3.1.1/css/ink-legacy.min.css'
            });
        </script>
    </head>

    <body class="ink-drawer <?php body_class(); ?>">
    
<!-- Header -->
<div class="header_bg">
    <div class="ink-grid">
        <div class="column-group">
            <!-- Logo -->
            <div class="xlarge-35 large-30 medium-30 small-30 tiny-100 logo">
                <figure>
                    <img class="wow animated rotateIn" src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="Logo">
                </figure>
                <h4>Your unique community</h4>
                <h5>Gaming Gilde & Gaming Community</h5>
            </div>
            <!-- /Logo -->
            <!-- Slider -->
                <?php include( TEMPLATEPATH . '/template/slider.php' ); ?>
            <!-- /Slider -->
            
            <div class="xlarge-100 large-100 medium-100 small-100 tiny-100">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
            </div>
            <!-- Selector -->
            <div class="xlarge-100 large-100 medium-100 small-100 tiny-100">                         
                <div class="selector_bg">                    
                    <div class="column-group">
                        <div class="xlarge-70 large-70 medium-50 small-100 tiny-100">
                            <div class="selector">
                                <div class="section_title"><span>Schnellauswahl</span></div>
                                <div class="breadcrumbs">
                                    <nav class="ink-navigation">
                                    <ul class="breadcrumbs black">
                                    <?php if(function_exists('bcn_display'))
                                    {
                                        bcn_display_list();
                                    }?>
                                    </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="xlarge-30 large-30 medium-50 small-100 tiny-100 clearfix">
                            <div class="social_bar">
                                <a data-tip-text="Yucom @ Facebook" class="s_fb tiptop" href="#"></a>
                                <a data-tip-text="Yucom @ Google Plus" class="s_gplus tiptop" href="#"></a>
                                <a data-tip-text="Yucom @ Twitter" class="s_twitter tiptop" href="#"></a>
                                <a data-tip-text="Yucom @ Youtube" class="s_youtube tiptop" href="#"></a>
                                <a data-tip-text="Yucom RSS Feed" class="s_rss tiptop" href="#"></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- /Selector -->
        </div>
    </div>
</div>
<!-- /Header -->