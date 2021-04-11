<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.cssS">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.4/semantic.js"></script>

    <!-- <link rel="stylesheet" href="{{ mix('/css/layout.css') }}">
    <script src="{{ mix('/js/layout.js') }}"></script> -->
</head>
<body>
    <div class="ui sidebar vertical left menu overlay visible" style="-webkit-transition-duration: 0.1s; overflow: visible !important;">
    <div class="item logo">
        <!-- <img src="https://www.pikpng.com/pngl/m/229-2291946_students-teachers-student-parent-team-group-three-svg.png" /><img src="https://www.pikpng.com/pngl/m/229-2291946_students-teachers-student-parent-team-group-three-svg.png" style="display: none" /> -->
    </div>
    <div class="ui accordion">

        <a class="item" href="/student" >
        <b>Student</b>
        </a>
        <a class="item" href="/search">
        <b>Search students</b>
        </a>

    </div>
    <div class="ui dropdown item displaynone">
        <z>Dashboard</z>
        <i class="icon demo-icon user icon-user"></i>

        <div class="menu">
        <!-- <div class="ui divider"></div> -->
        <a class="item" href="/student">Сурагчид</a>
        </div>
    </div>
    <div class="ui dropdown item displaynone">
        <z>Сурагч хайх</z>
        <i class="icon demo-icon search icon-search"></i>

        <div class="menu">
        <div class="ui divider"></div>
        <a class="item"  href="/search"">Сурагч хайх</a>
        </div>
    </div>

    </div>
    <div class="pusher">
        <div class="ui menu asd borderless" style="border-radius: 0!important; border: 0; margin-left: 260px; -webkit-transition-duration: 0.1s;">
            <a class="item openbtn">
            <i class="icon content"></i>
            </a>
            <a class="item">Сурагчид</a>
            <div class="right menu">
            <!-- <div class="ui dropdown item">
                Language <i class="dropdown icon"></i>
                <div class="menu">
                <a class="item">English</a>
                <a class="item">Russian</a>
                <a class="item">Spanish</a>
                </div>
            </div> -->
            <div class="item">
                <h4>Bolortoli Munkhsaikhan</h4>
            </div>
            <div class="item">
                <img src="https://www.pikpng.com/pngl/m/229-2291946_students-teachers-student-parent-team-group-three-svg.png" /><img src="https://www.pikpng.com/pngl/m/229-2291946_students-teachers-student-parent-team-group-three-svg.png" style="display: none" />
            </div>
            </div>
        </div>
    </div>
    <div class="content-body-fullpage" id="content-body">
        @yield('content')
    </div>
</body>

<style>
 .content-body-fullpage {
    /* background-color: blue; */
    margin-left: 250px;
    padding: 40px;
    background-color: #666aff;
    height: 100%;
 }

 .content-body-halfpage {
    /* background-color: blue; */
    margin-left: 40px;
    padding: 40px;
 }

 .marginlefting {
   margin-left: 60px !important;
 }
 
 .displaynone {
   display: none !important;
 }
 
 .displayblock {
   display: block !important;
 }
 
 .sidebar .item i {
   font-size: 24px;
   margin-top: -5px !important;
 }
 
 .logo {
   height: 48px !important;
   padding: 10px !important;
 }
 
 .logo img {
   width: 100% !important;
   height: 38px !important;
 }
 
 .title.item {
   padding: .92857143em 1.14285714em !important;
 }
 
 .dropdown .menu .header {
   padding-top: 3.9px!important;
   padding-bottom: 3.9px!important;
 }

</style>
<script>
const toggleClasses = ['content-body-fullpage', 'content-body-halfpage']
    
$(".openbtn").on("click", function() {
   $(".ui.sidebar").toggleClass("very thin icon");
   $(".asd").toggleClass("marginlefting");
   $(".sidebar z").toggleClass("displaynone");
   $(".ui.accordion").toggleClass("displaynone");
   $(".ui.dropdown.item").toggleClass("displayblock");

   $(".logo").find('img').toggle();
   $("#content-body").toggleClass("content-body-halfpage")
  //  console.log("asdasd")
  //  if ($("#content-body").attr("class") == "content-body-halfpage") {
  //       $("#content-body").removeClass()
        // $("#content-body").addClass("content-body-fullpage")
  //      console.log("bisda")
  //  }
  //  if ($("#content-body").attr("class") == "content-body-fullpage") {
  //       $("#content-body").removeClass()
  //       $("#content-body").addClass("content-body-halfpage")
  //      console.log("bosda")
  //  }

 })
 $(".ui.dropdown").dropdown({
   allowCategorySelection: true,
   transition: "fade up",
   context: 'sidebar',
   on: "hover"
 });

 $('.ui.accordion').accordion({
   selector: {

   }
 });
</script>
</html>