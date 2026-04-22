<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script>
if (window.location.search.includes("?i=")) {
    window.location.href = window.location.origin + window.location.pathname;
}
</script>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="google-site-verification" content="iOMXEPldbBFC9Y3-dAdg_iLMKy9de2EI8FTy_ZvsOXc" />

<?php wp_head(); ?>
</head>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="container">

<?php if ( is_home() || is_front_page() ) : ?>

<!-- Search Box -->
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

<div class="logo-wrap">
  <div class="logo">
    <div class="play"></div>
    <span>TEAMMOVIES</span>
  </div>
</div>

<div style="text-align:center;">
    <b style="color:#FF0000;">NO.1 TELUGU MOVIES SITE</b>
</div>

<div style="text-align:center; color:green; font-weight:600;">
    <b>Telugu Movie Site heartily welcomes all the visitors</b>
</div>



<div style="text-align:center; color:blue; font-weight:600;">
    <b>To be more powerful than any man you know, and have to live like a sha</b>
</div>

<?php endif; ?>