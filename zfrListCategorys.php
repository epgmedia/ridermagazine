<?php
//18Jul2012 FR List WP categories
//
// note where other functions reside
//  ./general-template.php:function get_header( $name = null ) {
//  ./query.php:function have_posts() {

//lines below from index.php
define('WP_USE_THEMES', true);
//fr commented out: require('./wp-blog-header.php');

////lines below from wp-blog-header.php
if ( !isset($wp_did_header) ) {
	$wp_did_header = true;
	require_once( dirname(__FILE__) . '/wp-load.php' );

/*   
    //////lines below from template-loader.php
if ( defined('WP_USE_THEMES') && WP_USE_THEMES )
	do_action('template_redirect');
	$name='header-FRtest.php';
    $templates[] = $name;
	if ('' == locate_template($templates, true))
		echo "<br />$name file not found<br />";
    
*/

/*

//275 81 BMW Motorcycle Reviews BMW motorcycle reviews, comparisons and news from Rider magazine. Search for a specific review using our search option or browse our full collection of BMW road tests.
$cat_id = 81; // The category id to select
$pop = $wpdb->get_results("SELECT p.id, p.post_title, p.comment_count, p.post_date
FROM $wpdb->posts p
JOIN $wpdb->term_relationships tr ON (p.ID = tr.object_id)
JOIN $wpdb->term_taxonomy tt ON (tr.term_taxonomy_id = tt.term_taxonomy_id)
JOIN $wpdb->terms t ON (tt.term_id = t.term_id)
WHERE p.post_type='post'
AND p.post_status = 'publish'
AND tt.taxonomy = 'category'
AND t.term_id = $cat_id
ORDER BY post_date DESC LIMIT 9");  	      
//ORDER BY comment_count DESC LIMIT 9");  	      
foreach($pop as $post){
    echo "$post->id ||| $post->post_title ||| $post->comment_count ||| $post->post_date<br>";
    }


$pop = $wpdb->get_results("SELECT * FROM $wpdb->term_taxonomy WHERE taxonomy = 'category'");
foreach($pop as $post){
    echo "$post->term_taxonomy_id ||| $post->term_id ||| $post->description<br>";
    }
*/
echo "WP Category List<br>";
echo "term_id ||| name<br>";
$pop = $wpdb->get_results("SELECT * FROM $wpdb->terms");
foreach($pop as $post){
    echo "$post->term_id ||| $post->name<br>";
    }

/*
query_posts('cat=81');
while (have_posts()) : the_post();
the_content();//lists all posts & text
endwhile;
*/


/*
//275 81 BMW Motorcycle Reviews BMW motorcycle reviews, comparisons and news from Rider magazine. Search for a specific review using our search option or browse our full collection of BMW road tests.
//query_posts('cat=81');
query_posts('cat=81'.'&orderby=date&order=asc&showposts=4');
while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a></li>
<?php endwhile;
*/


    }

//lines below from
//lines below from
//lines below from
//lines below from
//lines below from
//lines below from
//lines below from


?>