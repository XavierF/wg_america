<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	<!-- bottom -->
<footer class="bottom ">
    <div class="b-joinus-nav">
        
        <h2 class="b-joinus-nav-title">Join us:</h2>
        <div class="b-joinus-nav-wrpr" addthis:url="wargaming.com">
            <a class="b-joinus-nav-wrpr_twitter"  target="_blank" href="https://twitter.com/#!/wargaming_corp" style="background-image: url(http://wargaming.com/static/img/soc-tw.png);"></a>
            <a class="b-joinus-nav-wrpr_facebook"  target="_blank" href="http://www.facebook.com/wargaming.corp" style="background-image: url(http://wargaming.com/static/img/soc-fb.png);"></a>
            
        </div>
        
    </div>
    
<nav class="b-bottom-nav">
<?php
                /* A sidebar in the footer? Yep. You can can customize
                 * your footer with three columns of widgets.  See Appearance - > Menus, and also Appearance -> Widgets
                 */
                if ( ! is_404() )
                    get_sidebar( 'footer' );
            ?>
</nav>
    <div class="b-develop">
        <div class="copyright_right">
            
        </div>
        <div class="copyright_left">
            <span class="copyright_left-txt">Copyright &copy; 2012</span>
            <a href="http://wargamingamerica.com/" class="logo_footer" title="Wargamingamerica.com"></a>
        </div>
    </div>
</footer>
<!-- / bottom -->

<!-- Custom Scripts -->
<script type="text/javascript">
    //INSERT CUSTOM JS HERE
</script>

<!-- End of Custom Scripts -->
<!-- Google Analytics counter -->
<script type="text/javascript">
    
</script>
<!-- /Google Analytics counter -->
</body>
</html>