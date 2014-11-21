<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  Templates.Puravida
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;



$app = JFactory::getApplication();
$doc = JFactory::getDocument();
$this->language = $doc->language;


$itemid   = $app->input->getCmd('Itemid', '');

// Add JavaScript Frameworks
//JHtml::_('bootstrap.framework');

// Add Stylesheets
//$doc->addStyleSheet('templates/'.$this->template.'/css/normalize.min.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/main.css');
$doc->addStyleSheet('templates/'.$this->template.'/css/colorbox.css');


?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<jdoc:include type="head" />
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
	<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/modernizr-2.6.2.min.js"></script>
     
     
</head>


 <body class="<?php echo ($itemid ? ' bgid-' . $itemid : '')?>">
    <header class="header">
         <a href="#" class="btn-menu"><i class="icon-menu"></i></a>
         <div class="languajes">
             <a href="<?php echo $this->baseurl ?>/es" class="languajes-item">Español</a>
             <a href="<?php echo $this->baseurl ?>/en" class="languajes-item">English</a>
         </div>
         <div class="reservation">
             <jdoc:include type="modules" name="reservation" style="none" />
         </div>
         
    </header>
    <div class="bg">
        <?php if ($this->countModules('video')) : ?>
            
            <div class="bg-video">
                <jdoc:include type="modules" name="video" style="none" />
            </div>
        <?php endif; ?>
       
    </div>
    <section class="wrapper">
        <a href="<?php echo $this->baseurl ?>" class="logo"><img src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/logo.png" alt="Guanabikers"></a>
        <nav class="menu">
            <?php if ($this->language == "es-es") : ?>
                <a class="btn-home" href="<?php echo $this->baseurl ?>/es" class="languajes-item">Inicio</a>
            <?php else : ?>
                <a class="btn-home"  href="<?php echo $this->baseurl ?>/en" class="languajes-item">Home</a>
            <?php endif; ?>   
            <jdoc:include type="modules" name="menu" style="none" />
        </nav>
        <section class="main">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
        </section>
    </section>
    <footer class="footer">
        <div class="copyright"><p>Guanabikers © 2014</p></div>
        <div class="redes"><a href="http://www.facebook.com/Guanabikers" target="_blank">Facebook</a> • <a href="http://twitter.com/#!/Guanabikers" target="_blank">Twitter</a> • <a href="http://youtube.com/user/Guanabikers/feed" target="_blank">Youtube</a> • <a href="http://www.tripadvisor.com.mx/Attraction_Review-g309240-d3179993-Reviews-Guanabikers_Private_Day_Tours-Liberia_Province_of_Guanacaste.html" target="_blank">Trip Advisor</a> • <a href="http://www.magcloud.com/browse/issue/389771" target="_blank">XXC Magazine</a>  </div>
    </footer>
        
        
    
    <!--<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery-1.10.2.min.js"></script>-->
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/vendor/jquery.colorbox-min.js"></script>
  
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
      <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-21485543-13', 'auto');
          ga('send', 'pageview');

    </script>


        <jdoc:include type="modules" name="debug" style="none" />
    </body>

</html>
