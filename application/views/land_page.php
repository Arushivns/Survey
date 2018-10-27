<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

<style type="text/css">
/*for fading in content on scroll*/
#content_fade
{
    height:200px;    
}

#content_fade DIV
{ 
    margin:20px; 
    padding:20px; 
    background-color:transparent;
  text-align:justify;
  font-size:20px; 
}

.hideme
{
    opacity:0;
}


.carousel {
  /* any dimensions are fine, it can be responsive with max-width */
  width: 100%;
  height: 80%;
  display: block;
    margin-left: auto;
    margin-right: auto;
    
}

.carousel-inner {
  /* make sure your .items will get correct height */
  height: 100%;
}

.item {
  background-size: 500px;
  
  width: 100%;
  height: 100%;
}

.item img{
width:100%;
}

.mono {
    font-family: 'Monoton';font-size: 50px;
}

body{

    font-family: 'Montserrat Alternates';font-size: 22px;

}


</style>
    <!--Custom CSS external file link-->
    
<!--Material Design Lite CDN-->
 <script src = "https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
<!--Indigo-pink colored theme-->
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />


    <!-- Monotron Google font -->
<link href='https://fonts.googleapis.com/css?family=Monoton' rel='stylesheet'>
<!-- Montserrat Google font -->
<link href='https://fonts.googleapis.com/css?family=Montserrat Alternates' rel='stylesheet'>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  

    <!--Css and script source Link for dataTable plugin-->
 <link href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <!--font awesome stylesheet link tag-->
<!--company icon to placed below-->

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

 <!--this is the link to font awesome stylesheet-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--Content of this web page-->

<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Navigatio</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">About Us</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Navigatio</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
<!--carousel bootstrap-->

<div class="mdl-grid">
  <!--carousel-->


<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="<?php echo base_url();?>assets/back.jpg" alt="Bangkok">
    <div class="carousel-caption">
        <h2 class="mono">Bangkok</h2>
      </div>
    
    </div>

    <div class="item">
      <img src="<?php echo base_url();?>assets/back.jpg" alt="Chiang Mai">
    <div class="carousel-caption">
        <h2 class="mono">Chiang Mai</h2>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url();?>assets/back.jpg" alt="Pattaya">
    <div class="carousel-caption">
        <h2 class="mono">Pattaya</h2>
      </div>
    </div>

<div class="item">
      <img src="<?php echo base_url();?>assets/back.jpg" alt="Phi Phi Island">
    <div class="carousel-caption">
        <h2 class="mono">Phi Phi Island</h2>
      </div>
    </div>



  </div>


 
</div>
<!--carousel ends-->

</div>
        <!--carousel ends-->
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--6-col">
<!--news feed -->

<!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="https://news.google.com/news/rss/search/section/q/football+players%7Cbasketball+players%7Cbaseball+players?ned=us&gl=US&hl=en";  
rssfeed_frame_width="400"; 
rssfeed_frame_height="400"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url="https://feed.surfing-waves.com/css/style6.css"; 
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#3366ff"; 
rssfeed_title_color="#fff"; 
rssfeed_title_bgimage=""; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage=""; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage=""; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "189fcadd4f5fb41ce212268522e4d37e"; 
//--> 
</script> 
<script type="text/javascript" src="//feed.surfing-waves.com/js/rss-feed.js"></script> 
<!-- The link below helps keep this service FREE, and helps other people find the SW widget. Please be cool and keep it! Thanks. --> 
<div style="text-align:right; width:400px;">powered by <a href="http://www.surfing-waves.com" rel="noopener" target="_blank" style="color:#ccc;font-size:10px">Surfing Waves</a></div> 
<!-- end sw-rss-feed code -->

<!--news feed ends-->
  </div>
  <div class="mdl-cell mdl-cell--6-col">
    





  </div>
  
</div>





      <!--page-content div ends-->
    </div>
  </main>
</div>

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="<?php echo base_url() ?>jquery-3.3.1.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed-->
    <script src="<?php echo base_url();?>bootstrap-3.3.7-dist/js/bootstrap.min.js "></script>



<script type="text/javascript">
$(function(){  // $(document).ready shorthand
  $('.monster').fadeIn('slow');
});

$(document).ready(function() {
    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.hideme').each( function(i){
            
            var bottom_of_object = $(this).position().top + $(this).outerHeight();
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
                
                $(this).animate({'opacity':'1'},1500);
                    
            }
            
        }); 
    
    });
    
});

</script>



<!--End of body tag-->

<script type="text/javascript">
</script>
  </body>
</html>