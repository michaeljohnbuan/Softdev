<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Food & Other Essensials</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script src="assets/js/modernizr.js"></script>
  </head>

  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/index">Food & Other Essensials.</a>
        </div>
        <div class="navbar-collapse collapse navbar-right">
          <ul class="nav navbar-nav">
            <li><a href="/index">HOME</a></li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/requestForm">Request</a></li>
                <li><a href="/accessMap">Access Map</a></li>
                <li><a href="/searchalternative">Search Alternatives</a></li>
                <li><a href="/search_procedures">Search Emergency Procedures</a></li>
                <li><a href="/agegroups">View Age Groups</a></li>
                <li><a href="/viewrequest">View Requests</a></li>
              </ul>
            </li>
            
            <li class="active"><a href="/about">ABOUT</a></li>
            <li><a href="/contact">CONTACT</a></li>
            
            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- *****************************************************************************************************************
	 BLUE WRAP
	 ***************************************************************************************************************** -->
	<div id="blue">
	    <div class="container">
			<div class="row">
				<h3>About.</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	 
	<!-- *****************************************************************************************************************
	 AGENCY ABOUT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 		<div class="col-lg-6">
	 			<img class="img-responsive" src="assets/img/rescue.jpg" alt="">
	 		</div>
	 		
	 		<div class="col-lg-6">
	 		<br>
		 		<h4>About Our App.</h4>
		 		<br>
		 		<p>Disaster Response in Food and non-food items are very essential when it comes to saving lives </p>
		 		<br>
		 		<p>From the "Disaster Response: Supply Chain Management for response cluster" research done by the graduate students of Asia Pacific College, the project team come up with the system that will improve the current relief activities of agencies in order to have proper coordination and to carry out effective, efficient, and timely delivery of Food and non-food services to the affected families/communities.</p>
		 		<p></p>
		 		<br>
		 		<br>		 		
 				<p><br/><a href="/contact" class="btn btn-theme">Contact Us</a></p>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->

	<!-- *****************************************************************************************************************
	 TEEAM MEMBERS
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row centered">
		 	<h3 class="mb">MEET OUR TEAM</h3>
		 	
		 	<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="he-wrap tpl6">
				<img src="assets/img/team/buan.jpg" alt="">
					<div class="he-view">
						<div class="bg a0" data-animate="fadeIn">
                            <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
                    	</div><!-- he bg -->
					</div><!-- he view -->		
				</div><!-- he wrap -->
				<h4>Michael John Buan</h4>
				<h5 class="ctitle">Project Manager</h5>
				
				<div class="hline"></div>
		 	</div><! --/col-lg-3 -->

		 	<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="he-wrap tpl6">
				<img src="assets/img/team/carlos.jpg" alt="">
					<div class="he-view">
						<div class="bg a0" data-animate="fadeIn">
                            <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
                    	</div><!-- he bg -->
					</div><!-- he view -->		
				</div><!-- he wrap -->
				<h4>Christian Carlos</h4>
				<h5 class="ctitle">Project Developer</h5>
				
				<div class="hline"></div>
		 	</div><! --/col-lg-3 -->

		 	<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="he-wrap tpl6">
				<img src="assets/img/team/nophoto.jpg" alt="">
					<div class="he-view">
						<div class="bg a0" data-animate="fadeIn">
                            <h3 class="a1" data-animate="fadeInDown">Contact Me:</h3>
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-envelope"></i></a>
                            <a href="#" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-twitter"></i></a>
                    	</div><!-- he bg -->
					</div><!-- he view -->		
				</div><!-- he wrap -->
				<h4>Rempson Dulitin</h4>
				<h5 class="ctitle">Project Developer</h5>
				
				<div class="hline"></div>
		 	</div><! --/col-lg-3 -->

		 		 	
	 	</div><! --/row -->
	 </div><! --/container -->
	 
	<!-- *****************************************************************************************************************
	 OUR CLIENTS
	 ***************************************************************************************************************** -->
	 <div id="cwrap">
		 <div class="container">
		 	<div class="row centered">
			 	<h3>OUR CLIENTS</h3>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="assets/img/clients/ndrrmc.png" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="assets/img/clients/dswd.jpg" class="img-responsive">
			 	</div>
			 	<div class="col-lg-3 col-md-3 col-sm-3">
			 		<img src="" class="img-responsive">
			 	</div>
		 	</div><! --/row -->
		 </div><! --/container -->
	 </div><! --/cwrap -->

	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>About</h4>
		 			<div class="hline-w"></div>
		 			
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Social Links</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				<a href="#"><i class="fa fa-dribbble"></i></a>
		 				<a href="#"><i class="fa fa-facebook"></i></a>
		 				<a href="#"><i class="fa fa-twitter"></i></a>
		 				<a href="#"><i class="fa fa-instagram"></i></a>
		 				<a href="#"><i class="fa fa-tumblr"></i></a>
		 			</p>
		 		</div>
		 		<div class="col-lg-4">
		 			<h4>Location</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				 3 Humabon, Makati<br/>
		 				 1232 ,<br/>
		 				 Kalakhang Maynila<br/>
		 			</p>
		 		</div>
		 	
		 	</div><! --/row -->
	 	</div><! --/container -->
	 </div><! --/footerwrap -->
	 
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/retina-1.1.0.js"></script>
	<script src="assets/js/jquery.hoverdir.js"></script>
	<script src="assets/js/jquery.hoverex.min.js"></script>
	<script src="assets/js/jquery.prettyPhoto.js"></script>
  	<script src="assets/js/jquery.isotope.min.js"></script>
  	<script src="assets/js/custom.js"></script>


  </body>
</html>
