<?php
/**
 * Template Name: Games Pages
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<div class="b-maingames-list middle-maingames">
    <div class="middle" style="padding-top: 0;">
        <ul class="maingames-list__ul">
            <li class="maingames-list__li maingames-list-world_of_warships">
                <div class="maingames-list-i">
                    <div class="logo-game">
                        <a target="_blank" href="http://www.wargaming.com/en/games/world_of_warships/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/WoWS_Logo.png" alt="" width="250" height="204"></a>
                    </div>
                    <div class="forHiddenBtn">
                        <a target="_blank" href="http://www.wargaming.com/en/games/world_of_warships/" class="buttons button-sm-4"><span><span>More</span></span></a>
                    </div>
                    <div class="ph">
                        <a target="_blank" href="http://www.wargaming.com/en/games/world_of_warships/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/wobs_screen.jpg" alt="" width="288" height="288"></a>
                    </div>
                    <div class="txt">
                        <h2><a target="_blank" href="http://www.wargaming.com/en/games/world_of_warships/">World of Warships</a></h2>
                        <p>World of Warships is a free-to-play naval action MMO that plunges players into the world of the XX century devastating sea wars. Dive into the massive naval battles and tame the overwhelming power of multiton titans to conquer the high seas using numerous strategic opportunities and well-coordinated teamwork.</p>
                    </div>
                </div>
                <i class="bdr"></i>
                <i class="shad"></i>
            </li>
            <li class="maingames-list__li maingames-list-world_of_warplanes">
                <div class="maingames-list-i">
                    <div class="logo-game">
                        <a target="_blank" href="http://www.wargaming.com/en/games/world_of_warplanes/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/WoWP_logo_s.png" alt="" width="250" height="204"></a>
                    </div>
                    <div class="forHiddenBtn">
                        <a target="_blank" href="http://www.wargaming.com/en/games/world_of_warplanes/" class="buttons button-sm-4"><span><span>More</span></span></a>
                    </div>
                    <div class="ph">
                        <a target="_blank" href="http://www.wargaming.com/en/games/world_of_warplanes/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/wowp_screen.jpg" alt="" width="288" height="288"></a>
                    </div>
                    <div class="txt">
                        <h2><a target="_blank" href="http://www.wargaming.com/en/games/world_of_warplanes/">World of Warplanes</a></h2>
                        <p>Throwing players into a never-ending tussle for air dominance, the free-to-play flight combat action MMO World of Warplanes allows you to build a full-scale career as a virtual pilot across several key eras of warfare, from early biplanes of the 1930s to superfast jet fighters from the Korean War. </p>
                    </div>
                </div>
                <i class="bdr"></i>
                <i class="shad"></i>
            </li> 
            <li class="maingames-list__li maingames-list-world_of_tanks">
                <div class="maingames-list-i">
                    <div class="logo-game">
                        <a target="_blank" href="http://www.wargaming.com/en/games/world_of_tanks/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/WoT_logo_s.png" alt="" width="250" height="204"></a>
                    </div>
                    <div class="forHiddenBtn">
                        <a target="_blank" href="http://www.wargaming.com/en/games/world_of_tanks/" class="buttons button-sm-4"><span><span>More</span></span></a>
                    </div>
                    <div class="ph">
                        <a target="_blank" href="http://www.wargaming.com/en/games/world_of_tanks/"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/wot_art.jpg" alt="" width="288" height="288"></a>
                    </div>
                    <div class="txt">
                        <h2><a target="_blank" href="http://www.wargaming.com/en/games/world_of_tanks/">World of Tanks</a></h2>
                        <p>World of Tanks is a team-based massively multiplayer online game dedicated to armored warfare of the mid-XX century. Throw yourself into epic online tank battles to fight shoulder to shoulder with other steel cowboys and dominate the world with the sheer power of tank supremacy and refined tactical thinking.</p>
                    </div>
                </div>
                <i class="bdr"></i>
                <i class="shad"></i>
            </li>
        </ul>
    </div>
</div>
<?php get_footer(); ?>