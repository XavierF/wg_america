<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?><!DOCTYPE html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript">document.documentElement.className += " js"</script>
    <meta name="keywords" content="" />
    
    <link rel="shortcut icon" href="<?php bloginfo( 'stylesheet_directory' ); ?>/favicon.ico" />
    <!-- CSS -->

    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/style.css" />
    <!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/ie.css" /><![endif]-->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_directory' ); ?>/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />


    <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/css/video-js.css" type="text/css" rel="stylesheet">


    <!-- JS -->

    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.tools.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.imagesloaded.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/jquery.wot.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/addthis_widget.js#pubid=xa-4fa7c7626fe8a2ce"></script>
    <script>
        var image_bg = new Image(); image_bg.src = '<?php bloginfo( 'stylesheet_directory' ); ?>/img/bg.jpg';
    </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-47453401-1', 'wargamingamerica.com');
  ga('send', 'pageview');

</script>

    <script type="text/javascript">
        var videoUrl = new Object;
        videoUrl.swfPlauer = '<?php bloginfo( 'stylesheet_directory' ); ?>/flash/video-js.swf';
    </script>
    <script type="text/javascript" src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/video.js"></script>


<script>
    $(document).ready(function(){
        video_preview_init();
    });
</script>


    <script>
        $(document).ready(function(){
            if( $("a#image").length > 0){
                $("a#image").fancybox();
            }
        });
    </script>


    
    <title><?php
    /*
     * Print the <title> tag based on what is being viewed.
     */
    global $page, $paged;

    wp_title();

   
    ?></title>
</head>
<body <?php body_class($class); ?>>
<div id="minWidth">
    <!-- top -->
    <div class="top">
        <header class="header-top">
            <div class="logo">
                <a href="<?php bloginfo( 'url' ); ?>"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/logo.png" alt="wargaming" width="196" height="56" /></a>
            </div>
            
<nav id="access">
    <?php
        if (  in_category( array( 3,4,5 ) )  ) {    
            // the page is "About", or the parent of the page is "About"
            wp_nav_menu( array( 'menu' => 'Category Nav' ) );

        } else {  
            wp_nav_menu( array( 'theme_location' => 'primary' ) );

        }
    ?>
</nav>
            <script type="text/javascript">
                $(document).ready(function(){
                    var onTouchHoverLang = function()
                    {
                        var langTitle = $(this);
                        if(!langTitle.hasClass("touch"))
                        {
                            langTitle.addClass("touch").find("ul").show();
                        }
                        else{
                            langTitle.removeClass("touch").find("ul").hide();
                        };
                    };
                    var onTouchLang = function()
                    {
                        $(this).unbind('hover', onTouchHoverLang);
                        onTouchHoverLang.call(this);
                    };
                    $(".langbar-i").bind('hover', onTouchHoverLang);
                    //$(".langbar-touch").bind('touchstart', onTouchLang);
                });
            </script>
            
        </header>
    </div>
    <!-- /top -->