<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <link rel="shortcut icon" href="<?php echo base_url();?>resources/imagenes/iconos/favicon.ico" />
    <title><?= isset($html_titulo)?$html_titulo:"GOL"; ?></title>
    
    <link type="text/css" href="<?php echo base_url();?>resources/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
    .fondo{ background-color: #519427;}
    .fondo1{background-color: #519427;}    
    .navbar-brand > li > a {color: #fff;}

    </style>        
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
   	<meta name="author" content="banny,gol, fixture, clasificatorias" />
    <?= isset($html_head_tags)?$html_head_tags:""; ?>
    <script>
        path = "<?php echo base_url();?>";
    </script>
    
</head>
<body>

<header class="navbar navbar-default navbar-static-top fondo" role="banner">
  <div class="container">
    <div class="navbar-header">
        <?=anchor("portada", 'GOL', "class='navbar-brand'")?>
    </div>
    <nav class="collapse navbar-collapse role="navigation">
        <ul class="nav navbar-nav">
            <?php if(isset($admin)):?>
            <?php if($admin == "SI"):?>
                        <?=$html_menu?>
                 <?php endif?>   
            <?php endif?>
            <?php if(isset($usuario)):?>
                <li><?=anchor('mis-jugadas', 'Mis Jugadas')?></li>
                <li><?=anchor('mis-grupos', 'Mis Grupos')?></li>
            <?php endif?>
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php if(isset($usuario)):?>
                    <li><?=anchor("#", "<span class='glyphicon glyphicon-user'></span>&nbsp".$usuario)?></li>
                    <li><?=anchor("cerrar-sesion", "<span class='glyphicon glyphicon-off'></span>&nbspCerrar Sesion")?></li>
                 <?php else:?>
                    <li><?=anchor("login-usuario", "<span class='glyphicon glyphicon-home'></span>&nbspIniciar Sesion")?></li>
            <?php endif?>
            <li>
                <?php if(isset($usuario)):?>
                    &nbsp;
                <?php else:?>
                    <?=anchor("registro-usuario", "Registrarme", "class='blanco'")?>                    
                <?php endif ?>
            </li>
            
            
        </ul>
  </div>
</header>


<div class="container">
    <?php $contenido = isset($html_contenido)?$html_contenido:"";?>
    <?=$contenido?>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-footer">
                <div class="row">
                    <p style="padding: 8px;">Esta aplicaci&oacute;n fue desarrollada usando Codeigniter 2.1 y Bootstrap 3.</p>
                    <blockquote>
                          <footer>Por : <a href="https://plus.google.com/+BannySolano">Banny Solano Ar&eacute;valo</a> :: Lima-Per&uacute; 2014 </footer>
                    </blockquote>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url();?>resources/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url();?>resources/bootstrap/js/bootstrap.min.js"></script>

<link rel="shortcut icon" href="<?php echo base_url();?>resources/imagenes/iconos/favicon.ico" />
<script>
    $(function () {
      $('[data-toggle="tooltip"]').tooltip()
    })
    </script>
<script>
      /*
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-46815962-2', 'bannysolano.com');
      ga('send', 'pageview');
      */
    </script>
</body>
</html>