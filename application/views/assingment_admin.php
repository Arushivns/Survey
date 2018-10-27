<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Assingment Admin</title>

<!-- Javascript for datepicker jQuery UI plugin -->
      <script>
         $(function() {
            $( "#datepicker-13" ).datepicker();
            $( "#datepicker-13" ).datepicker("show");
         });
      </script>
<!--Script for datepicker jQuery UI ends-->




<style type="text/css">

</style>
    <!--Custom CSS external file link-->
    
<!--Material Design Lite CDN-->
 <script src = "https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>
 <!--material design icons-->
<link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
<!--Indigo-pink colored theme-->
<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css" />


    <!-- jQuery UI cdn script and css stylesheet link -->
    <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
         <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
 <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<!--jQuery UI script ends and stylesheet ends-->


<!-- Latest compiled and minified CSS 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

<!-- jQuery library 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->

<!-- Latest compiled JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->


    <!--Css and script source Link for dataTable plugin
 <link href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>-->
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
      <span class="mdl-layout-title">Assignment Admin</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href=""><i class="material-icons" title="Upload Assignment">publish</i></a>
        <a class="mdl-navigation__link" href=""><i class="material-icons" title="View Form">pageview</i></a>
        <a class="mdl-navigation__link" href=""><i class="material-icons" title="Report of Responses">trending_up</i></a>
        <a class="mdl-navigation__link" href=""><i class="material-icons" title="Account Settings">person</i></a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Assignment Upload</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href=""><i class="material-icons">
publish
</i> Upload Assignment</a></a>
      <a class="mdl-navigation__link" href=""><i class="material-icons">
pageview
</i> View Form</a>
      <a class="mdl-navigation__link" href=""><i class="material-icons">
trending_up
</i> Report of Responses</a>
      <a class="mdl-navigation__link" href=""><i class="material-icons">
highlight_off
</i> Logout</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here -->
      

 <input type = "text" id = "datepicker-13"> 




      <!--page-content div ends--> 
    </div>
  </main>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins)
    <script src="<?php echo base_url() ?>jquery-3.3.1.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed
    <script src="<?php echo base_url();?>bootstrap-3.3.7-dist/js/bootstrap.min.js "></script>
 -->

<!--End of body tag-->

<script type="text/javascript">
</script>
  </body>
</html>