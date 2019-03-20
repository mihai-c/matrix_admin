<!DOCTYPE html>
<html lang="ro" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?= !empty($page_title) ? $page_title : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="keywords"
          content="<?php echo (isset($keywords)) ? $keywords : ''; ?>">
    <meta name="description"
          content="<?php echo (isset($description)) ? $description : ''; ?>"/>
    <meta name="google-site-verification" content=""/>
    <meta name="author" content="Alaskan Global Network">
    <meta name="<?= $this->security->get_csrf_token_name(); ?>" content="<?= $this->security->get_csrf_hash(); ?>"/>
    <link rel="canonical" href="<?= base_url(); ?>"/>
    <link rel='shortlink' href='<?= base_url(); ?>'/>
    <link rel="icon" href="<?php echo base_url(); ?>media/images/favicon.png" type="image/x-icon"/>
    <link rel="canonical" href="<?php echo base_url(); ?>"/>
    <link rel="alternate" hreflang="ro" href="<?php echo base_url(); ?>"/>
	<?php if (!empty($css)) {
		foreach ($css as $load_css) { ?>
            <link rel="stylesheet" href="<?php echo ASSETS . $load_css; ?>" type="text/css" media="all">
		<?php }
	} ?>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper" >