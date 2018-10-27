<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Elective Selection</title>

<style type="text/css">
/*form css*/
.demo-card-wide.mdl-card {
  width: 80%;
  height: 80%;
  
}

.mdl-card__actions {

  outline: skyblue solid 5px;
  z-index: 4;

  
}
#name {
  display:flex;
margin-top: 10px;
  justify-content: left;
}

#contact{
  diplay: flex;

}


.mdl-button {
// outline: red solid 5px; 
  margin-left: 10px ;
  
}
.demo-card-wide {
  height: 200px;
 // outline: limegreen 10px solid;
}


.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 64px;
  background-color:indigo;
}

.mdl-card__title-text {
  position: relative;
  top: 6px;
  
}

.demo-card-wide > .mdl-card__menu {
  color: #fff;
}


#mycard {
  height: 600px;
  width:100%;
 display:flex;
  flex-direction: row;
  // outline: red solid 10px;
  justify-content: center;
  align-items: center;
}

.mdl-textfield {
  width: 250px;
  margin-right: 10px;
}


/*---form css ends---*/
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

<!--Sidebar navigation html...-->
  
 <!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Title</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
        <a class="mdl-navigation__link" href="">Link</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href=""><i class="material-icons">
publish
</i> Upload Elective List</a>
      <a class="mdl-navigation__link" href=""><i class="material-icons">
pageview
</i> Check Form</a>
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
      <!--elective selection admin form-->
<!--form to be made-->

<div id ="mycard">

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title">
    <h2 class="mdl-card__title-text">Elective Selection</h2>
  </div>
  
  
  <div class="mdl-card__supporting-text">
   * marked fields are required.
    <form action="#">
      
      <div id="name">
  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="first" required="required">
    <label class="mdl-textfield__label" for="sample3">First Name*</label>
  </div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="last">
    <label class="mdl-textfield__label" for="sample3">Last Name</label>
  </div>
      </div>
 <div id ="registration">
      <div id="reg">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="regno" required="required">
    <label class="mdl-textfield__label" for="sample2">Registration Number*</label>
    <span class="mdl-textfield__error">Registration no. must be a number!</span>
  </div>
      </div>

<!--select option for course-->
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <label class="mdl-textfield__label" for="octane">Course</label>
    <select class="mdl-textfield__input" id="coursel" name="coursel"><br>
      <option></option>
      <option value="85">85</option>
      <option value="87">87</option>
      <option value="89">89</option>
      <option value="91">91</option>
      <option value="diesel">Diesel</option>
    </select>
    
  </div>
<!--select option for course-->

<!--select option for branch-->
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <label class="mdl-textfield__label" for="branchl">Branch</label>
    <select class="mdl-textfield__input" id="branchl" name="coursel"><br>
      <option></option>
      <option value="85">85</option>
      <option value="87">87</option>
      <option value="89">89</option>
      <option value="91">91</option>
      <option value="diesel">Diesel</option>
    </select>
    
  </div>

<!--/select option for branch ends-->



<!--select option for year-->
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <label class="mdl-textfield__label" for="year">Choose Year</label>
    <select class="mdl-textfield__input" id="year" name="coursel"><br>
      <option></option>
      <option value="I">I</option>
      <option value="II">II</option>
      <option value="III">III</option>
      <option value="IV">IV</option>
    </select>
    
  </div>

<!--/--select option for year ends-->


<!--/--select option for semester starts-->
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <label class="mdl-textfield__label" for="sem">Choose Semester</label>
    <select class="mdl-textfield__input" id="octane" name="seml"><br>
      <option></option>
      <option value="odd">Odd</option>
      <option value="even">Even</option>
    </select>
    
  </div>
<!--/--select option for semester ends-->



<!-- Accent-colored raised button with ripple --><br><br>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
 Submit
</button>
      <!--
      
      <div id ="contact">
      <div id="phone">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="mobile">
    <label class="mdl-textfield__label" for="sample2">Mobile Phone</label>
    <span class="mdl-textfield__error">Mobile must be a number!</span>
  </div>
      </div>
      
       <div id="email">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="email" >
    <label class="mdl-textfield__label" for="sample2">E-mail</label>
    <span class="mdl-textfield__error">Enter a valid email!</span>
  </div>
      </div>
      </div> -->
</form>
  </div>
  
  
  
  
</div>

</div>






<!--form ends-->
      <!-- page-content div ends-->
    </div>
  </main>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="<?php echo base_url() ?>jquery-3.3.1.min.js"></script>
    Include all compiled plugins (below), or include individual files as needed
    <script src="<?php echo base_url();?>bootstrap-3.3.7-dist/js/bootstrap.min.js "></script>
 -->

<!--End of body tag-->

<script type="text/javascript">
</script>
  </body>
</html>