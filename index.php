<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php bloginfo('name'); ?> | <?php wp_title(); ?></title>

<div class="logo-wrap">
  <div class="logo">
    <div class="play"></div>
    <span>TEAMMOVIES</span>
  </div>
</div>

<div style="text-align:center;">
        <b style="color:#FF0000;">NO.1 TELUGU MOVIES SITE</b>
    </div>

<div class="search-box" style="text-align:center; margin:15px 0;">
    <form method="get" action="<?php echo home_url('/'); ?>">
        <input type="text" name="s" placeholder="Search Movies..." 
               style="padding:8px; width:60%; max-width:300px;">
        <button type="submit" 
                style="padding:8px 12px; background:#ff1744; color:#fff; border:none;">
            🔍 Search
        </button>
    </form>
</div>

    <div style="text-align:center; color:green; font-weight:600;">
        <b>Telugu Movie Site heartily welcomes all the visitors</b>
    </div>
    
    

    <div style="text-align:center; color:blue; font-weight:600;">
        <b>To be more powerful than any man you know, and have to live like a sha</b>
    </div>

<meta name="description" content="Download Latest Telugu Tamil Hindi English Movies
">
<meta name="keywords" content="Download Latest Telugu Tamil Hindi English Movies
">
<meta name="robots" content="index, follow">

<meta name="google-site-verification" content="iOMXEPldbBFC9Y3-dAdg_iLMKy9de2EI8FTy_ZvsOXc">

<meta property="og:site_name" content="Team Movies">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo home_url(); ?>">
<meta property="og:title" content="<?php bloginfo('name'); ?>">
<meta property="og:description" content="Download Latest Telugu Tamil Hindi English Movies
">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div class="container">

<div style="text-align:center; font-size:13px; font-weight:700;">

    OFFICIAL DOMAIN ~ 
    <span style="color:#990099;">wapmovies.ct.ws</span>

    <br><br>

    CURRENT DOMAIN ~ 
    <a href="http://wapmovies.ct.ws/" style="color:#ff0000; text-decoration:none; font-weight:700;">
        Telugu Movies Site
    </a>

    <br><br>

    TELEGRAM ~ 
    <a href="https://t.me/Teamwapmovies" style="color:#008000; text-decoration:none; font-weight:700;">
        Join Us Telegram
    </a>

</div

</div>

<div class="custom-breadcrumb">
   Trending Movies
</div>

<div class="list">

<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>

<?php
$title = get_the_title();

// Only RED highlight
$title = str_ireplace('1080p', '<span class="t-red">1080p</span>', $title);
$title = str_ireplace('720p', '<span class="t-red">720p</span>', $title);
$title = str_ireplace('360p', '<span class="t-red">360p</span>', $title);
$title = str_ireplace('HD', '<span class="t-red">HD</span>', $title);
$title = str_ireplace('Telugu', '<span class="t-red">Telugu</span>', $title);
$title = str_ireplace('Hindi', '<span class="t-red">Hindi</span>', $title);
$title = str_ireplace('English', '<span class="t-red">English</span>', $title);
$title = str_ireplace('Tamil', '<span class="t-red">Tamil</span>', $title);
$title = str_ireplace('Korean', '<span class="t-red">Korean</span>', $title);
$title = str_ireplace('Web Series', '<span class="t-red">Web Series</span>', $title);
$title = str_ireplace('BluRay', '<span class="t-red">BluRay</span>', $title);
$title = str_ireplace('WEB-DL', '<span class="t-red">WEB-DL</span>', $title);
?>

<div class="movie-card">

    <span class="movie-title">
        <?php echo $title; ?>
    </span>

    - 
    <a href="<?php the_permalink(); ?>" class="quality-link">
        [1080p & 720p - x264 - 480p + Rips]
    </a>

</div>

<?php endwhile; ?>
<?php endif; ?>

</div>

<!-- Pagination -->
<div class="pagination">
<?php
echo paginate_links(array(
    'total' => $wp_query->max_num_pages
));
?>
</div>

</div>  
  
<?php get_footer(); ?>  


<div class="custom-breadcrumb">
     Copyright © 2026. All Rights Reserved
</div>