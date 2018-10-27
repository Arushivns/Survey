<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

<style type="text/css">
.demo-card-wide.mdl-card {
  
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 176px;
  background: url('<?php echo base_url();?>assets/breakfast-801827_1280.jpg') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}




input{
  padding: 10px;
}

a :hover {
  text-decoration: none;
}

.mdl-card__title {
  border-bottom: solid 1px #ddd;
}

body {
  background: #dfdfdf;
}
.mdl-tabs__tab-bar {
  justify-content: flex-start;
}

.figure {
height: 500px;
width: 100%;
background-image: url("<?php echo base_url();?>assets/back3.jpg");
background-size: contain;
border-bottom-left-radius: 100%100px;
border-bottom-right-radius: 100%100px;  
z-index: 1;

}

img.center {
display: block;
margin-left: auto;
margin-right: auto;
position: relative;
top: 100px;
}

/*header design mdl*/


..mdl-layout {
  background: url('https://www.getmdl.io/assets/demos/transparent.jpg') center / cover;
}

.mdl-layout__header {
  // add background transition
  transition-property: max-height,box-shadow,background;
}

.mdl-layout__header.is-casting-shadow {
  // override initial background when scrolling
  background: rgb(63,81,181);
}

.mdl-layout__header,
.mdl-layout__drawer-button {
  /* This background is dark, so we set text to white. Use 87% black instead if
     your background is light. */
  color: white;
}

.mdl-card__title {
    color: #fff;
    height: 176px;
    background: url('https://www.getmdl.io/assets/demos/welcome_card.jpg') center / cover;
}

.mdl-card__menu {
    color: #fff;
}

.is-focused .mdl-textfield__input {
    border-color: #fff;
}


/*particle background css*/




</style>
    <!--Custom CSS external file link-->
    
<!--Material Design Lite CDN-->
 <script src = "https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
<link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
<!--Indigo-pink colored theme-->
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />


    <!-- Bootstrap -->


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!--icon for project-->

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

<div class="figure">

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header mdl-layout__header--transparent mdl-layout__header--waterfall">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Navigatio</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Search -->
     
      <!-- Navigation -->





      <nav class="mdl-navigation">
        
        <a class="mdl-navigation__link" href=""><i class="material-icons">
hotel
</i> Hotel</a>
        <a class="mdl-navigation__link" href=""><i class="material-icons">
card_giftcard
</i> Packages</a>
        <a class="mdl-navigation__link" href=""><i class="material-icons">
local_taxi
</i> Transfers</a>
        <a class="mdl-navigation__link" href=""><i class="material-icons">
free_breakfast
</i> Meals</a>

<a class="mdl-navigation__link" href=""><i class="material-icons">
place
</i> Sightseeing</a>

      </nav>
    



      <form action="">
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right">
        <label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
          <i class="material-icons">search</i>
        </label>
        <div class="mdl-textfield__expandable-holder">
          <input class="mdl-textfield__input" type="text" name="sample"
                 id="fixed-header-drawer-exp" />
        </div>
      </div>
      </form>
      
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title"><i class="material-icons">
account_circle
</i> Hello Guest!</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Profile</a>
      <a class="mdl-navigation__link" href="" id="mdl-custom-btn">Sign Up</a>
      <a class="mdl-navigation__link" href="">Login</a>
      
      <a class="mdl-navigation__link" href="">Terms and Conditions</a>
    </nav>
  </div><!--/header ends-->



  <main class="mdl-layout__content"></main>
    
</div>

  

<!--for particle background-->
<!-- particles.js container -->
<!--
 <div id="particles-js"></div> stats - count particles 
-->
<!--code for time line starts-->


<img src="<?php echo base_url();?>assets/transparent_logo.png" style="object-fit: contain;height: 350px;width: 350px; " class="center">



  
</div><!--end of figure div-->

<!--grid system begins-->

<div class="mdl-grid">


  <main class="mdl-layout__content">

    <!-- MDL Tab Container -->
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <!-- Tab Bars -->
  <div class="mdl-tabs__tab-bar">
      <a href="#Hotel-panel" class="mdl-tabs__tab is-active">Hotel</a>
      <a href="#transfer-panel" class="mdl-tabs__tab">Transfers</a>
      <a href="#meals-panel" class="mdl-tabs__tab">Meals</a>
      <a href="#pack-panel" class="mdl-tabs__tab">Packages</a>
      <a href="#sight-panel" class="mdl-tabs__tab">Sightseeing</a>
  </div>

  <!-- MDL tab panels, is-active to denote currently active -->
  <div class="mdl-tabs__panel is-active" id="Hotel-panel">
   

      <div class="mdl-card__supporting-text">
        <form action="#">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="location" />
            <label class="mdl-textfield__label" for="location">Location <i class="material-icons" style="float: right;">place</i></label>
          </div>
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="num_person" />
            <label class="mdl-textfield__label" for="userpass">Number of people</label>
          </div>
        </form>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"><i class="material-icons">search</i> Search</button>
      </div>
   
  
  </div>
  
  <!-- MDL Tab panel 2 -->
  <div class="mdl-tabs__panel" id="transfer-panel"><!--
    <ul>
      <li>England</li>
      <li>France</li>
      <li>Germany</li>
      <li>Spain</li>
    </ul>-->
  </div>
  
  <!-- MDL Tab panel 3 -->
  <div class="mdl-tabs__panel" id="meals-panel"><!--
    <ul>
      <li>United States of America</li>
      <li>Canada</li>
    </ul>-->
  </div>

<!-- MDL Tab panel 4 -->
  <div class="mdl-tabs__panel" id="pack-panel"><!--
    <ul>
      <li>United States of America</li>
      <li>Canada</li>
    </ul>-->
  </div>

<!-- MDL Tab panel 5 -->
  <div class="mdl-tabs__panel" id="sight-panel">
    <div class="mdl-card__supporting-text">
        <form action="#">
          <div class="mdl-textfield mdl-js-textfield">
            <input class="mdl-textfield__input" type="text" id="location" />
            <label class="mdl-textfield__label" for="location">Location <i class="material-icons" style="float: right;">place</i></label>
          </div>

           </form>
      </div>
      <div class="mdl-card__actions mdl-card--border">
        <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect"><i class="material-icons">search</i> Search</button>
      </div>
  </div>
</div><br><br><br><br><br>

<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--4-col">
    <div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Offer on first booking</h2>
  </div>
  <div class="mdl-card__supporting-text">
    20% Off on first booking.
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      More Details
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>

  </div>
  <div class="mdl-cell mdl-cell--4-col">
     <div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">No Worries</h2>
  </div>
  <div class="mdl-card__supporting-text">
    Travel Insurance
  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      More Details
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>

  </div>
  <div class="mdl-cell mdl-cell--4-col"> <div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Offer on hotels</h2>
  </div>
  <div class="mdl-card__supporting-text">
    10% discount on Hotels  </div>
  <div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      More Details
    </a>
  </div>
  <div class="mdl-card__menu">
    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">share</i>
    </button>
  </div>
</div>
</div>
</div>

<!--div for rss news feed and sign in form-->
<div class="mdl-grid">
  <div class="mdl-cell mdl-cell--6-col">
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



  </div>


  <div class="mdl-cell mdl-cell--6-col">
    




  </div>
</div>






    </main>










  </div><!--grid ends-->

<!--sign up modal-->






<!--sign up modal ends-->

<!--footer design-->
<footer class="mdl-mega-footer">
  <div class="mdl-mega-footer__middle-section">

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Features</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">About</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Partners</a></li>
        <li><a href="#">Updates</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Details</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">Specs</a></li>
        <li><a href="#">Tools</a></li>
        <li><a href="#">Resources</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">Technology</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">How it works</a></li>
        <li><a href="#">Patterns</a></li>
        <li><a href="#">Usage</a></li>
        <li><a href="#">Products</a></li>
        <li><a href="#">Contracts</a></li>
      </ul>
    </div>

    <div class="mdl-mega-footer__drop-down-section">
      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
      <h1 class="mdl-mega-footer__heading">FAQ</h1>
      <ul class="mdl-mega-footer__link-list">
        <li><a href="#">Questions</a></li>
        <li><a href="#">Answers</a></li>
        <li><a href="#">Contact us</a></li>
      </ul>
    </div>

  </div>

  <div class="mdl-mega-footer__bottom-section">
    <div class="mdl-logo">Title</div>
    <ul class="mdl-mega-footer__link-list">
      <li><a href="#">Help</a></li>
      <li><a href="#">Privacy & Terms</a></li>
    </ul>
  </div>

</footer>



<!--footer design ends-->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<!--End of body tag-->

<script type="text/javascript" src="<?php echo base_url();?>particles.min.js" defer="defer">
</script>

<script type="text/javascript" src="<?php echo base_url();?>app.js">
</script>

<script type="text/javascript">




</script>
  </body>
</html>