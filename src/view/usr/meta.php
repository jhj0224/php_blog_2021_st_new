<?php
if ( !isset($meta) ) {
  $meta = [];
}

$meta['siteName'] = "BBB BLOG";
$meta['siteCanonicalUrl'] = $_SERVER['REQUEST_URI'];
$meta['siteKeywords'] = "IT, Java, PHP, HTML, CSS, Javascript, MySQL";

if ( !isset($meta['pageGenDate']) ) {
  $meta['pageGenDate'] = date("Y-m-d") . 'T' . date("H:i:s") . 'Z';
}

if ( !isset($meta['siteSubject']) ) {
  $meta['siteSubject'] = "누구나 쉽게 공부 할 수 있는 IT 블로그 플랫폼, 준이의 코딩천국";
}

if ( !isset($meta['siteDescription']) ) {
  $meta['siteDescription'] = "누구나 쉽게 공부 할 수 있는 IT 블로그 플랫폼, 준이의 코딩천국 입니다. 코딩, 그리 어렵지 않아요~ 누구나 할 수 있어요!";
}

if ( !isset($meta['og:title']) ) {
  $meta['og:title'] = $meta['siteSubject'];
}

$meta['siteDomain'] = $prodSiteDomain;
$meta['siteMainUrl'] = "https://{$prodSiteDomain}";
$meta['siteMetaImgUrl'] = "/resource/img/logo/logo_meta.png";
?>

<meta name="apple-mobile-web-app-title" content="<?=$meta['siteName']?>" />
<!-- 메타태그정보 //-->
<!-- META -->
<link rel="canonical" href="<?=$meta['siteCanonicalUrl']?>" />
<meta name="subject" content="<?=$meta['siteSubject']?>"/>
<meta name="title" content="<?=$meta['siteSubject']?>" />
<meta name="keywords" content="<?=$meta['siteKeywords']?>" />
<meta name="copyright" content="<?=$meta['siteName']?>" />
<meta name="pubdate" content="<?=$meta['pageGenDate']?>" />
<meta name="lastmod" content="<?=$meta['pageGenDate']?>" />
<!-- OPENGRAPH -->
<meta property="og:site_name" content="<?=$meta['siteName']?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?=$meta['og:title']?>" />
<meta property="og:description" content="<?=$meta['siteDescription']?>" />
<meta property="og:locale" content="ko_KR" />
<meta property="og:image" content="<?=$meta['siteMainUrl']?><?=$meta['siteMetaImgUrl']?>" />
<meta property="og:image:alt" content="<?=$meta['siteDomain']?>" />
<meta property="og:image:width" content="486" />
<meta property="og:image:height" content="254" />
<meta property="og:updated_time" content="<?=$meta['pageGenDate']?>"/>
<meta property="og:pubdate" content="<?=$meta['pageGenDate']?>" />
<meta property="og:url" content="<?=$meta['siteCanonicalUrl']?>" />
<!-- TWITTER -->
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="<?=$meta['siteSubject']?>" />
<meta name="twitter:site" content="<?=$meta['siteName']?>" />
<meta name="twitter:creator" content="<?=$meta['siteName']?>" />
<meta name="twitter:image" content="<?=$meta['siteMetaImgUrl']?>">
<meta name="twitter:description" content="<?=$meta['siteDescription']?>" />
<!-- GOOGLE+ -->
<meta itemprop="headline" content="<?=$meta['siteName']?>" />
<meta itemprop="name" content="<?=$meta['siteName']?>" />
<meta itemprop="description" content="<?=$meta['siteDescription']?>" />
<meta itemprop="image" content="<?=$meta['siteMetaImgUrl']?>" />