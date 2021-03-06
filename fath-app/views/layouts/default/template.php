<!DOCTYPE html>
<!--[if IE 8]>         <html class="ie8"> <![endif]-->
<!--[if IE 9]>         <html class="ie9 gt-ie8"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="gt-ie8 gt-ie9 not-ie"> <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?php echo ($title) ? $title : 'Azware Dev.'; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="<?php echo $this->security->get_csrf_hash(); ?>"/>
    <meta name="csrf-name" content="<?php echo $this->security->get_csrf_token_name(); ?>"/>
    <meta name="csrf-cookie" content="<?php echo $this->config->item('csrf_cookie_name'); ?>"/>
    <?php echo $metadata; ?>
    <!-- Open Sans font from Google CDN -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css" />

    <!-- main css -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>fath-assets/images/favicon.png" />
    <link href="<?php echo base_url(); ?>fath-assets/stylesheets/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>fath-assets/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>fath-assets/stylesheets/pixel-admin.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>fath-assets/stylesheets/widgets.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>fath-assets/stylesheets/rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>fath-assets/stylesheets/pages.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url(); ?>fath-assets/stylesheets/themes.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>fath-assets/stylesheets/themes/yellow/pace-theme-flash.css" media="all" rel="stylesheet" type="text/css" />  
    <!-- FATH css -->
    <link rel="stylesheet" href="<?php echo base_url();?>fath-assets/style.css" type="text/css">

    <!-- custom css -->
    <?php echo $css; ?>
    <noscript>
    <style> #subcontent-element { display: none } </style>
    </noscript>

    <!-- initJS -->
    <!--[if lt IE 9]>
            <script src="fath-assets/javascripts/ie.min.js"></script>
    <![endif]-->
    <!--[if !IE]> -->
    <script src="<?php echo base_url(); ?>fath-assets/javascripts/jquery-2.0.3.min.js"></script><!-- <![endif]-->
    <!--[if lte IE 9]>
        <script src="<?php //echo base_url(); ?>fath-assets/javascripts/jquery-1.8.3.min.js"></script>
    <![endif]-->

    <style type="text/css">            
      .bg {
        /* The image used */
        background-image: url("<?php echo base_url(); ?>fath-images/back.jpg");

        /* Full height */
        height: 100%; width:100%;

        background-size: cover;
        background-repeat: no-repeat;
        position: fixed;
        background-attachment: scroll;
        background-position: 50% 50%;
        top: 0; right: 0; bottom: 0; left: 0;
        content: ""; z-index: 0;
      }
    </style>
  </head>
  <body class="theme-clean main-menu-animated main-navbar-fixed main-menu-fixed page-profile <?php echo $body_class; ?>">
    <script type="text/javascript">
      var init = [];
      var checked = [];
      var env = "<?php echo $_SERVER['CI_ENV']; ?>";
      var base = "<?php echo base_url(); ?>";
      localStorage['fathCache'] = '';
    </script>
    <script src="<?php echo base_url(); ?>fath-assets/javascripts/demo.js"></script>

    <div id="main-wrapper" class="bg">
      <div id="main-navbar" class="navbar navbar-inverse" role="navigation">
        <?php echo $this->header(); ?>
      </div>
      <div id="main-menu" role="navigation">
        <?php echo $this->menu(); ?>
      </div>
      <div id="content-wrapper">
        <div class="busy-indicator modal-backdrop fade in" style='background-color: #fff; display:none;'>
          <div class="row">
            <div class='col-sm-12' style='text-align:center;margin-top:13%;'>
              <img src="<?php echo base_url(); ?>fath-assets/images/azware_trans.png" height="110" width="110"/>
              <h4><?php echo $this->config->item('nama_sistem'); ?> Framework</h4>
              <img src="<?php echo base_url(); ?>fath-assets/images/loading42.gif"/><br/>
            </div>
          </div>
        </div>
        <noscript>
        <div class="page-header">
          <div class="row">
            <h1 class="col-xs-12 col-sm-12 text-center text-left-sm">
              <i class="fa fa-unlink" page-header-icon></i>&nbsp;Error Occurred
            </h1>
          </div>
        </div>
        <div class="note note-danger"><b>Sorry</b>, You don't have javascript enabled in your browser.</div>
        </noscript>
        <div id="subcontent-element">
          <?php echo $content; ?>
        </div>  
        <footer class="px-footer p-t-0 px-footer-fixed" id="px-demo-footer" style="border: 1px solid #bac8db; border-radius: 3px; background-color: #fff;">
          <div style="padding: 10px;">
            <span class="text-muted" style="color: #605ca8;">Copyright &copy; <?php 
              echo "  <a href=\"#\" target=\"_blank\" style=\"text-decoration: none; color: #053daf;\">".$this->config->item('azware')."</a> 2018 - 
                      <a href=\"#\" target=\"_blank\" style=\"text-decoration: none; color: #605ca8;\">".$this->config->item('devby')."</a>" ?>
            </span>
          </div>
        </footer>
      </div>
      <div id="main-menu-bg"></div>
    </div>

    <!-- main js -->
    <script src="<?php echo base_url(); ?>fath-assets/javascripts/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>fath-assets/javascripts/pixel-admin.min.js"></script>
    <script src="<?php echo base_url(); ?>fath-assets/javascripts/ajax.js"></script>
    <script src="<?php echo base_url(); ?>fath-assets/javascripts/main.js"></script>
    <script src="<?php echo base_url(); ?>fath-assets/javascripts/pace.min.js"></script>
    <script src="<?php echo base_url(); ?>fath-assets/javascripts/jsTree/jquery.jstree.min.js"></script>
    <!--[if lt IE 9]>
        <script src="<?php echo base_url(); ?>fath-assets/javascripts/ie.min.js"></script>
    <![endif]-->

    <!-- custom js -->
    <?php echo $js; ?> 
    <script type="text/javascript">
      init.push(function () {
          menu_selected();
      });
      window.PixelAdmin.start(init);
    </script>
  </body>
</html>