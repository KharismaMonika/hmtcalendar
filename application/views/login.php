<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>HMTCalendar - Login</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/reset.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/site.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/container.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/grid.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/header.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/image.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/menu.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/divider.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/segment.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/form.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/input.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/button.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/list.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/components/message.css">
  <!--<link rel="stylesheet" type="text/css" href="../dist/components/icon.css">-->
  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.1.8/components/icon.min.css'>

  <script src="<?php echo base_url(); ?>assets/library/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/components/form.js"></script>
  <script src="<?php echo base_url(); ?>assets/components/transition.js"></script>

  <style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
    .ui.header > .image:not(.icon),
    .ui.header > img {
      display: inline-block;
      margin-top: 0.14285714em;
      width: 15.5em;
      height: auto;
      vertical-align: middle;
    }
    .ui.header > .image:not(.icon):only-child,
    .ui.header > img:only-child {
      margin-right: 0.75rem;
    }
    .ui.teal.buttons .button,
    .ui.teal.button {
    background-color: #1565c0;
    }
    .ui.teal.buttons .button:hover,
    .ui.teal.button:hover {
    background-color: #1e88e5;
    }
    .ui.teal.buttons .button:focus,
    .ui.teal.button:focus {
    background-color: #1976d2;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your e-mail'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }
        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="<?php echo base_url('assets/logo-hmtcalendar.jpg'); ?>" class="image">
      <!--<div class="content">
        Log-in to your account
      </div>-->
    </h2>
      <?php echo form_open('login_controller/login_cek', array('class'=>'ui large form')); ?> 
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <?php echo form_input('NRP', '', array('placeholder'=> 'NRP')); ?>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <?php echo form_input('PASSWORD', '', array('placeholder'=> 'password', 'type'=>'password')); ?>
          </div>
        </div>
        <?php echo form_submit('SUBMIT', 'LOGIN', array('class'=>'ui fluid large teal submit button')); ?>
        
      </div>

      <div class="ui error message"></div>
    <?php echo form_close(); ?>

    
    <a style="color: #d32f2f;"><p>&copy; 2017 MPPL-C Kelompok 5</p></a>
  </div>
</div>

</body>

</html>
