<!DOCTYPE html>
<html>
<head>
  <!-- Standard Meta -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

  <!-- Site Properties -->
  <title>Login Example - Semantic</title>
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/reset.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/site.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/container.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/grid.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/header.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/image.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/menu.css">

  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/divider.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/segment.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/form.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/input.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/button.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/list.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/message.css">
  <link rel="stylesheet" type="text/css" href="http://localhost/Simple_elearning-master/components/icon.css">

  <script src="http://localhost/Simple_elearning-master/assets/library/jquery.min.js"></script>
  <script src="http://localhost/Simple_elearning-master/components/form.js"></script>
  <script src="http://localhost/Simple_elearning-master/components/transition.js"></script>

  <style type="text/css">
    body {
      background : url(web-image/web-login-bg.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
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
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            username: {
              identifier  : 'nim',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Masukkan NIM Anda!'
                },
               
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Masukkan Password'
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
  
 <a class="ui inverted button" href="welcome">Beranda</a> 
<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
       
        <font color="white">
        Login untuk Mahasiswa
        </font>
    </h2>
    <form class="ui large form" action="<?php echo base_url().'login/aksi_login';?>" method="POST">
        <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="nim" placeholder="Masukkan NIM">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="ui fluid large teal submit button">Login</div>
      </div>
      <div class="ui error message"></div>

    </form>

    <div class="ui message">
        <h3><font color="Grey">Belum daftar?</font> <?= anchor('http://localhost/Simple_elearning-master/regist','Daftar disini'); ?>
    </div>
  </div>
</div>


</body>

</html>
