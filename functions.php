	<?php



	function bootblog_pagination()

	{

		global $wp_query, $wp_rewrite;



		// Don't print empty markup if there's only one page.



		if ($wp_query->max_num_pages < 2) {

			return;

		}



		$paged = get_query_var('paged') ? intval(get_query_var('paged')) : 1;

		$pagenum_link = html_entity_decode(get_pagenum_link());

		$query_args = array();

		$url_parts = explode('?', $pagenum_link);

		if (isset($url_parts[1])) {

			wp_parse_str($url_parts[1], $query_args);

		}



		$pagenum_link = remove_query_arg(array_keys($query_args) , $pagenum_link);

		$pagenum_link = trailingslashit($pagenum_link) . '%_%';

		$format = $wp_rewrite->using_index_permalinks() && !strpos($pagenum_link, 'index.php') ? 'index.php/' : '';

		$format.= $wp_rewrite->using_permalinks() ? user_trailingslashit($wp_rewrite->pagination_base . '/%#%', 'paged') : '?paged=%#%';



		// Set up paginated links.



		$links = paginate_links(array(

			'base' => $pagenum_link,

			'format' => $format,

			'total' => $wp_query->max_num_pages,

			'current' => $paged,

			'mid_size' => 1,

			'add_args' => array_map('urlencode', $query_args) ,

			'prev_text' => __('← Previous', 'bootstrap-blog') ,

			'next_text' => __('Next →', 'bootstrap-blog') ,

			'type' => 'list'

		));

		if ($links):

	?>

		<nav class="navigation paging-navigation" role="navigation">

			

				<?php

			echo $links; ?>

				

		</nav><!-- .navigation -->

		<?php

		endif;

	}



	?>

	 

	 

	 <?php



	function bootstrap_blog_widgets_init()

	{



		// default sidebar



		register_sidebar(array(

			'name' => __('Default_sidebar', 'bootstrap-blog') ,

			'id' => 'default-sidebar',

			'description' => 'This is the default sidebar',

			'before_widget' => '<div id="%1$s" class="sidebar-module %2$s">',

			'after_widget' => '</div>',

			'before_title' => '<h4 class="widget-title">',

			'after_title' => '</h4>'

		));

		register_sidebar(array(

			'name' => __('Footer Widgets', 'bootstrap-blog') ,

			'id' => 'footer-widgets',

			'description' => 'Widgets in this area will appear in the footer',

			'before_widget' => '<div class="col-md-4 %2$s">',

			'after_widget' => '</div>',

			'before_title' => '<h4 class="widget-title">',

			'after_title' => '</h4>'

		));

	}



	add_action('widgets_init', 'bootstrap_blog_widgets_init');

	add_theme_support('title-tag');



	// contact form with boostrap



	add_filter('comment_form_default_fields', 'bootstrap3_comment_form_fields');



	function bootstrap3_comment_form_fields($fields)

	{

		$commenter = wp_get_current_commenter();

		$req = get_option('require_name_email');

		$aria_req = ($req ? " aria-required='true'" : '');

		$html5 = current_theme_supports('html5', 'comment-form') ? 1 : 0;

		$fields = array(

			'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __('Name') . ($req ? ' <span class="required">*</span>' : '') . '</label> ' . '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr($commenter['comment_author']) . '" size="30"' . $aria_req . ' /></div>',

			'email' => '<div class="form-group comment-form-email"><label for="email">' . __('Email') . ($req ? ' <span class="required">*</span>' : '') . '</label> ' . '<input class="form-control" id="email" name="email" ' . ($html5 ? 'type="email"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_email']) . '" size="30"' . $aria_req . ' /></div>',

			'url' => '<div class="form-group comment-form-url"><label for="url">' . __('Website') . '</label> ' . '<input class="form-control" id="url" name="url" ' . ($html5 ? 'type="url"' : 'type="text"') . ' value="' . esc_attr($commenter['comment_author_url']) . '" size="30" /></div>',

		);

		return $fields;

	}



	add_filter('comment_form_defaults', 'bootstrap3_comment_form');



	function bootstrap3_comment_form($args)

	{

		$args['comment_field'] = '<div class="form-group comment-form-comment">

								    <label for="comment">' . _x('Comment', 'noun') . '</label>

								    <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>

								    </div>';

		return $args;

	}



	add_action('comment_form', 'bootstrap3_comment_button');



	function bootstrap3_comment_button()

	{

		echo '<button class="btn btn-default" type="submit">' . __('Submit') . '</button>';

	}



	?>





	<?php

	require_once ('wp_bootstrap_navwalker.php');

	 ?>



	<?php

	register_nav_menus(array(

		'primary' => __('Primary Menu', 'Phobs') ,

	));

	add_theme_support('post-thumbnails');

	add_image_size('custom-size', 220, 180, TRUE);

	add_image_size('custom-size', 300, 300, TRUE);

	?>

	

<?php

add_theme_support( 'post-thumbnails' ); 







?>