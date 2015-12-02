<?php
/**
 * Template Name: Homepage Template
 * Description: by Andrew Van Wart
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<noscript>

	<div class="noscript-msg">
		<div class="noscript-msg-wrpr">
			<p class="noscript-attention">Certain website functionality is unavailable. Please enable JavaScript in your browser to view the site properly.</p>
		</div>
	</div>

</noscript>
<!-- middle -->


<div id="video_preview_wot" style="top: 200px; display:none;">



	<div class="block-video">
		<div class="hr-video"><div class="title-video" title="Video"></div></div>
		<div class="content-video" style="position: relative;">
			<video id="video_20" class="video-js vjs-default-skin" controls preload="none" width="582" height="357"
			poster="<?php bloginfo( 'stylesheet_directory' ); ?>/img/tanks-screenshot.jpg"
			data-setup="{}">
			<source src="<?php bloginfo( 'stylesheet_directory' ); ?>/media/WoT_Exclusive_Gamescom_Trailer_1.mp4" type='video/mp4' />
				<source src="<?php bloginfo( 'stylesheet_directory' ); ?>/media/wot_1.webm" type='video/webm' />
					<source src="<?php bloginfo( 'stylesheet_directory' ); ?>/media/WoT_Exclusive_Gamescom_Trailer_1.ogv" type='video/ogg' />
					</video>
				</div>
			</div>
			<a id="fancybox-close" style="display: inline;"></a>
		</div>

		<div id="video_preview_wob" style="top: 200px; display:none;">




			<div class="block-video">
				<div class="hr-video"><div class="title-video" title="Video"></div></div>
				<div class="content-video" style="position: relative;">
					<video id="video_271" class="video-js vjs-default-skin" controls preload="none" width="582" height="357"
					poster="<?php bloginfo( 'stylesheet_directory' ); ?>/img/warships_image.jpg"
					data-setup="{}">
					<source src="http://wargaming.com/media/cms_page_media/3/WoWS_COM_1.mp4" type='video/mp4' />
					<source src="http://wargaming.com/media/cms_page_media/3/WoWS_COM_1.webm" type='video/webm' />
					<source src="http://wargaming.com/media/cms_page_media/3/WoWS_COM_1.ogv" type='video/ogg' />
				</video>
			</div>
		</div>
		<a id="fancybox-close" style="display: inline;"></a>
	</div>

	<div id="video_preview_wow" style="top: 200px; display:none;">
		
		


		<div class="block-video">
			<div class="hr-video"><div class="title-video" title="Video"></div></div>
			<div class="content-video" style="position: relative;">
				<video id="video_260" class="video-js vjs-default-skin" controls preload="none" width="582" height="357"
				poster="<?php bloginfo( 'stylesheet_directory' ); ?>/img/warplanes-screenshot.jpg"
				data-setup="{}">
				<source src="http://wargaming.com/media/cms_page_media/4/WoWP_Video_Trailers_CBT_Launch_NA_1.mp4" type='video/mp4' />
				<source src="http://wargaming.com/media/cms_page_media/4/WoWP_Video_Trailers_CBT_Launch_NA_1.webm" type='video/webm' />
				<source src="http://wargaming.com/media/cms_page_media/4/WoWP_Video_Trailers_CBT_Launch_NA_1.ogv" type='video/ogg' />
			</video>
		</div>
	</div>
	<a id="fancybox-close" style="display: inline;"></a>
</div>
<!-- visual -->
<div class="b-visual">
	<span class="ars"><a href="" class="ar ar-l"></a><a href="" class="ar ar-r"></a></span>
	<ul class="b-visual-i">

		<li class="visual__li visual-wot" data-imgsrc="<?php bloginfo( 'stylesheet_directory' ); ?>/img/visual-wot.jpg">
			<div class="visabout-logo">
				<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/visual-wot-logo.png" alt="World of Tanks" width="321" height="162" />
			</div>
			<div class="b-vis-about">
				<div class="txt">
					<p>World of Tanks is a team-based massively multiplayer online game dedicated to armored warfare of the mid-XX century.Throw yourself into epic online tank battles to fight shoulder to shoulder with other steel cowboys to dominate the world with the sheer power of tank supremacy and refined tactical thinking.</p>
					<nav class="visabout-more">
						<a href="#video_preview_wot" class="buttons button-sm-2" target="_blank">
							<span>
								<span>
									Video
									<i class="ico ico-"></i>
								</span>
							</span>
						</a><a href="http://wargaming.com/en/games/world_of_tanks/" class="buttons button-sm-1" target="_blank">
						<span>
							<span>
								More
								<i class="ico ico-"></i>
							</span>
						</span>
					</a>
				</nav>
			</div>
		</div>
	</li>

	<li class="visual__li visual-wow" data-imgsrc="<?php bloginfo( 'stylesheet_directory' ); ?>/img/visual-wow.jpg">

		<div class="visabout-logo">
			<img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/visual-wow-logo.png" alt="World of Planes" width="243" height="194" />
		</div>
		<div class="b-vis-about">
			<div class="txt">
				<p>Throwing players into a never-ending tussle for air dominance, the free-to-play flight combat action MMO World of Warplanes allows you to build a full-scale career as a virtual pilot across several key eras of warfare, from early biplanes of the 1930s to turbojet fighters from the Korean War.</p>
				<nav class="visabout-more">
					<a href="#video_preview_wow" class="buttons button-sm-2" target="_blank">
						<span>
							<span>
								Video
								<i class="ico ico-"></i>
							</span>
						</span>
					</a><a href="http://wargaming.com/en/games/world_of_warplanes/" class="buttons button-sm-1" target="_blank">
					<span>
						<span>
							More
							<i class="ico ico-"></i>
						</span>
					</span>
				</a>
			</nav>
		</div>
	</div>
</li>

<li class="visual__li visual-wob" data-imgsrc="<?php bloginfo( 'stylesheet_directory' ); ?>/img/visual-wob.jpg">

	<div class="visabout-logo"><img src="<?php bloginfo( 'stylesheet_directory' ); ?>/img/visual-wob-logo.png" alt="World of Battleship" width="272" height="209" /></div>
	<div class="b-vis-about">
		<div class="txt">
			<p>World of Warships is a free-to-play naval action MMO that plunges players into the world of the XX century devastating sea wars. Dive into the massive naval battles and tame the overwhelming power of multiton titans to conquer the high seas.</p>
			<nav class="visabout-more">
				<a href="#video_preview_wob" class="buttons button-sm-2" target="_blank">
					<span>
						<span>
							Video
							<i class="ico ico-"></i>
						</span>
					</span>
				</a><a href="http://wargaming.com/en/games/world_of_warships/" class="buttons button-sm-1" target="_blank">
				<span>
					<span>
						More
						<i class="ico ico-"></i>
					</span>
				</span>
			</a>
		</nav>
	</div>
</div>
</li>

</ul>
</div>
<!-- / visual -->

<div class="inner">
	<!-- middle -->
	<div class="b-mainmiddle">
		<div class="b-mainmiddle-i">
			<div class="b-mainmiddle-bd">
				<table class="mainmiddle-grid">
					<tbody>
						<tr>
							<td class="l-col-1">
								<h2 class="s-title s-title-4">
									<i class="b-ico ico-1"></i> <a href="careers/">Hot vacancies</a>
								</h2>
								<ul class="b-listvacancy">
									<?php $args = array( 'numberposts' => 3, 'category' => 4 );
									$lastposts = get_posts( $args );
									foreach($lastposts as $post) : setup_postdata($post); ?>
									<li>
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
											<?php the_excerpt(); ?>
										</li>
									<?php endforeach; ?>  
								</ul>
								<div class="show-all">
									<p class="show-all-i"><a href="careers/" class="tp-2">All vacancies</a></p>
								</div>
							</td>
							<td class="l-col-2">
								<h2 class="s-title s-title-4">
									<i class="b-ico ico-2"></i> <a href="news/">News</a>
									<a target="_blank" href="feed" style="float: right;">
										<img src="<?php bloginfo('stylesheet_directory'); ?>/img/rss_feed.png">
									</a>
								</h2>
								<ul class="b-mainnews">
									<?php $args = array( 'numberposts' => 3, 'category' => 5 );
									$lastposts = get_posts( $args );
									foreach($lastposts as $post) : setup_postdata($post); ?>
									<li>
										<time><?php the_time('j.m') ?><br><small><?php the_time('Y') ?></small></time>
										<h3 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
										</li>
									<?php endforeach; ?>
								</ul>
								<div class="show-all">
									<p class="show-all-i"><a href="news/" class="tp-2">All news</a></p>
								</div>
							</td>
							<td class="l-col-3">
								<h2 class="s-title s-title-4">
									<i class="b-ico ico-3"></i> <a href="blog">Blog</a>
								</h2>
								<div class="b-blogmain">
									<ul class="blogmain__ul">
										<?php $args = array( 'numberposts' => 3, 'category' => 3 );
										$lastposts = get_posts( $args );
										foreach($lastposts as $post) : setup_postdata($post); ?>
										<li>
											<time><?php the_time('j.m') ?></time>
											<h3 class="post_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<?php the_excerpt(); ?>
										</li>
									<?php endforeach; ?>  
								</ul><!--blogmain__ul-->
								<i class="brd"><i></i></i>
							</div><!--b-blogmain-->
							<div class="show-all">
								<p class="show-all-i nobd"><a href="blog/" class="tp-2">All posts</a></p>
							</div>
						</td><!--l-col-3-->
					</tr>
				</tbody>
			</table><!--mainmiddle-grid-->
		</div><!--b-mainmiddle-bd-->
	</div><!--b-mainmiddle-i-->
</div><!--b-mainmiddle-->
</div><!--inner-->


<!-- /middle -->

</div>
<?php get_footer(); ?>