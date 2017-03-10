
<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>

<?php

JLoader::import('joomla.filesystem.file');
?>



<!DOCTYPE html>
<html lang="pl">

<head>
<jdoc:include type="head"/> <?php // z bazy zamaist meta ?>




<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/css/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template ?>/css/nipnet.css" type="text/css" media="all">

<?php

JHtml::_('bootstrap.framework');






$this->addScript($this->baseurl . '/templates/' . $this->template . '/js/bootstrap.min.js');
$this->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery.min.js');



?>

</head>

<script type="text/javascript">
  
jQuery.noConflict();



// You might need this, usually it's autoloaded   
jQuery.noConflict();

// Replace $ with jQuery
jQuery(document).ready(function() {
     jQuery(".item-102").hover(
  function () {
     jQuery('ul.file_menu').stop(true, true).slideDown('fast');
  }, 
  function () {
     jQuery('ul.file_menu').stop(true,true).slideUp('fast');
  }
);
});

</script>
<?php
$menu = &JSite::getMenu();
$active = $menu->getActive();
?>
<body id="<?php print $active->alias; ?>">

<nav class="navbar navbar-inverse">
  <div class="container">

	<div class="col-md-12">
    <div class="navbar-header">
    <a href="<?php echo $this->baseurl ?>"> <img src="templates/<?php echo $this->template ?>/images/Langlia_logo.png" ></a>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

    </div>
 
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     

		
 <jdoc:include type="modules" name="menu" style="xhtml"/>



  
     
  
    </div><!-- /.navbar-collapse -->
	
	 </div>
	 
	 
  </div><!-- /.container-fluid -->
</nav>

	<?php $menu = JSite::getMenu();
    if ($menu->getActive() == $menu->getDefault()) : ?>

<div id="carousel-example-generic" class="full carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="templates/<?php echo $this->template ?>/images/baner_new1.jpg" >
      <div class="carousel-caption">

      </div>
    </div>
     <div class="item">
      <img src="templates/<?php echo $this->template ?>/images/baner_new2.jpg" >
      <div class="carousel-caption">

      </div>
    </div>
    <div class="item">
      <img src="templates/<?php echo $this->template ?>/images/baner_new3.jpg" >
      <div class="carousel-caption">

      </div>
    </div>
	    <div class="item">
      <img src="templates/<?php echo $this->template ?>/images/baner_new4_1.jpg" >
      <div class="carousel-caption">

      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php endif ?>



<div id="carousel-example-generic" class="full carousel slide niefront" data-ride="carousel">
    <img src="images/site/wrapper-inner-bg.jpg" class="img-responsive">
</div>






  <div class="container">



	     <jdoc:include type="message" />  
         <jdoc:include type="component" />
 
	<?php $menu = JSite::getMenu();
    if ($menu->getActive() == $menu->getDefault()) : ?>
<div class="row"> 
      <div class="headertitle clearfix">
  <div class="col-md-12">

<h3 class="moduleTitle "><span class="item_title_part0">Zobacz jak wygląda lekcja </span> </h3>
  </div> 
  </div>
    <div class="col-md-12 nopadding">
      <div class="inner-blok">

          <iframe width="100%" height="600px" src="https://www.youtube.com/embed/yh9wN5s5gZ0" frameborder="0" allowfullscreen></iframe>
          
      </div>  
    </div>


    

  </div>


<div class="row"> 
     <div class="headertitle clearfix">
  <div class="col-md-12">

<h3 class="moduleTitle "><span class="item_title_part0">Langlia i jeszcze więcej   </span> </h3>
</div>
</div>
   <div class="white clearfix">
          <div class="col-md-3">
            <div class="inner-blok-gray">

                <h5> Langlia mobilnie          </h5>
                 <img src="templates/<?php echo $this->template ?>/images/Langlia_mobilnie_front5.jpg" class="img-responsive" >
                <p>Nie dasz rady, by skończyć lekcję na komputerze? Nic nie szkodzi, wykonaj ją na tablecie lub telefonie w drodze na spotkanie, w autobusie lub kafejce. Zainstaluj darmową aplikację mobilną a zyskasz dostęp do wykupionego kursu Langlia o każdej porze dnia i w każdym miejscu z internetem. </p>
                <a class="btn btn-info readmore" href="/index.php/33-news-events/72-langlia-mobilnie"><span>Czytaj dalej</span></a>
            </div>  
          </div>

          <div class="col-md-3">
            <div class="inner-blok-gray">

                <h5>  Langlia Vocabulary         </h5>
                 <img src="templates/<?php echo $this->template ?>/images/Langlia_volcabulary2.jpg" class="img-responsive" >
                <p>Nie masz czasu na systematyczny kurs języka angielskiego? Ucz sie w biegu! Przejrzyj słówka przy porannej kawie a ćwiczenia wykonaj w drodze do pracy korzystając z aplikacji Langlia Vocabulary. Wykonując jedną lekcję dziennie w ciągu miesiąca z łatwością poznasz nawet 250 słów. </p>
                <a class="btn btn-info readmore" href="/index.php/33-news-events/72-langlia-mobilnie"><span>Czytaj dalej</span></a>
            </div>  
          </div>

              <div class="col-md-3">
            <div class="inner-blok-gray">

                <h5>  Langlia Listening </h5>
                 <img src="templates/<?php echo $this->template ?>/images/Langlia_listening_2.jpg" class="img-responsive" >
                <p>Mało czasami znaczy więcej! Jeśli nie masz czasu na realizowanie całego kursu Langlia nie zarzucaj nauki angielskiego. Wykorzystaj czas w autobusie lub prowadząc samochód polepszaj swój angielski słuchając podcastów z dialogami native speakerów z Langlia Listening.
       </p>
       <a class="btn btn-info readmore" href="/index.php/33-news-events/72-langlia-mobilnie"><span>Czytaj dalej</span></a>
            </div>  
          </div>

              <div class="col-md-3">
            <div class="inner-blok-gray">

                <h5>  Langlia dla firm    </h5>
                 <img src="templates/<?php echo $this->template ?>/images/Langlia_dla_firm_2.jpg" class="img-responsive" >
                <p>Formuła tradycyjnych lekcji w sali szkoleniowej wyczerpała się? Twoja firma szuka nowoczesnych i ekonomiczniejszych rozwiązań? Mamy dla Ciebie rozwiązanie! To kurs języka angielskiego online - wygodny, efektywny oraz wyjątkowo łatwy do wdrożenia i monitorowania. </p>
                <a class="btn btn-info readmore" href="/index.php/33-news-events/72-langlia-mobilnie"><span>Czytaj dalej</span></a>
            </div>  
          </div>
     </div>       

    

  </div>
<?php endif ?>


  </div>




<footer class="clearfix">
 <div class="container">
  <div class="row"> 

     <div class="col-md-12">
              <div class="text-center">  Langlia © 2017kontakt@langlia.pl tel: 22 308 17 17 | PLIKI COOKIES </div>
     </div>

  </div>

  </div>

</footer>



  </body>
</html>