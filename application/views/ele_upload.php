<!DOCTYPE html>
<html lang="en">
<!--elective upload panel-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Elective List Upload</title>

<style type="text/css">
/*form css*/
.demo-card-wide.mdl-card {
  width: 60%;
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
  width: 500px;
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
</i> View Form</a>
      <a class="mdl-navigation__link" href=""><i class="material-icons">
trending_up
</i> Report of Responses</a>
      <a class="mdl-navigation__link" href=""><i class="material-icons">
highlight_off
</i> Logout</a>
    </nav>
  </div>
<!--header and sidebar ends-->


  <main class="mdl-layout__content">
    <div class="page-content" style="margin-left: 60px;"><!-- Your content goes here -->
      <!--elective selection admin form-->
<!--form to be made-->
<h2 style="text-align: center;">Elective List Upload</h2>
<div id ="mycard">


 
  
  
  <div class="mdl-card__supporting-text">
  
    <form action="#" method="POST" style="padding: 40px;">
      
      
           <!--/--select option for Course name starts-->
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
  <label class="mdl-textfield__label" for="sem">Choose Course Name</label>
    <select class="mdl-textfield__input" id="coursen" name="course_name"><br>
      <option></option>
      <option value="btech">BACHELOR OF TECHNOLOGY (B.Tech.)</option>
      <option value="mtech">MASTER OF TECHNOLOGY (M.Tech.)</option>
      <option value="mca">MASTER OF COMPUTER APPLICATION (MCA)</option>
      <option value="mba">MASTER IN BUSINESS ADMINISTRATION</option>
      <option value="phd">DOCTORAL & RESEARCH PROGRAM</option>
    </select>
    
  </div>
<!--/--select option for course name ends--><br><br><br>
         <!--/--select option for Branch name starts-->
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
  <label class="mdl-textfield__label" for="sem">Choose Branch Name</label>
    <select class="mdl-textfield__input" id="branchn" name="branch_name"><br>
      <option></option>
      <option value="ce">Civil Engineering</option>
      <option value="che">Chemical Engineering</option>
      <option value="cse">Computer Science and Engineering</option>
      <option value="ee">Electrical Engineering</option>
      <option value="ece">Electronics and Communication Engineering</option>
      <option value="ece">Mechanical Engineering</option>
    </select>
    
  </div>
<!--/--select option for branch name ends--><br>
    <!--select option for year-->
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
  <label class="mdl-textfield__label" for="octane">Year</label>
    <select class="mdl-textfield__input" id="octane" name="coursel"><br>
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
    <select class="mdl-textfield__input" id="octane" name="coursel"><br>
      <option></option>
      <option value="odd">Odd</option>
      <option value="even">Even</option>
    </select>
    
  </div>
<!--/--select option for semester ends-->



  
<!--we will use DOM append function to keep adding more text field to input the no. of elective subject available for that semester-->
<div id="subject_child">
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
    <input class="mdl-textfield__input" type="text" id="sub1" name="name">
    <label class="mdl-textfield__label" for="sample3">Add Subject Code</label>
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;">
    <input class="mdl-textfield__input" type="text" id="subn1" name="name">
    <label class="mdl-textfield__label" for="sample3">Add Subject Name</label>
</div>


<!-- Colored FAB button with ripple -->
<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--mini-fab" title="Add Subject" id="add">
  <i class="material-icons">add</i>
</button>


<!--
<button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--mini-fab">
  <i class="material-icons">remove</i>
</button>-->

  </div><!--subject child ends--> 








<!-- Accent-colored raised button with ripple --><br><br>
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
 Save Details
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






<!--form ends-->
      <!-- page-content div ends-->
    </div>
  </main>
</div>



<!--
<script>
 
$(document).ready(function(e){
//Variables
var html='<div><div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width: 100%;"><input class="mdl-textfield__input" type="text" id="sub" name="name"><label class="mdl-textfield__label" for="sample3">Add Subject Code and Name</label></div><button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--mini-fab" title="Add Subject" id="remove"><i class="material-icons">remove</i></button><div>';


//Add rows to the form
$("#add").click(function(e){

  $("#subject_child").append(html);

});

//remove rows from the form
$("#subject_child").on("click","#remove",function(e){
$(this).parent("div").remove();
    });

});



</script>
--><!--Eariler code to append DOM element-->





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url() ?>jquery-3.3.1.min.js"></script>
    <!--Include all compiled plugins (below), or include individual files as needed
    <script src="<?php echo base_url();?>bootstrap-3.3.7-dist/js/bootstrap.min.js "></script>
 -->

<!--End of body tag-->

<script type="text/javascript">
</script>
  </body>
</html>