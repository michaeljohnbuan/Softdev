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
			 <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Features <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="/requestForm">Request for Food</a></li>
                <li><a href="/requestFormForUtensils">Request for Utensils</a></li>
                <li><a href="/accessMap">Access Map for Food</a></li>
                <li><a href="/accessMapForUtensils">Access Map for Utensils</a></li>
                <li><a href="/searchalternative">Search Alternatives</a></li>
                <li><a href="/search_procedures">Search Alternative Cooking Procedures</a></li>
                <li><a href="/agegroups">View Age Groups</a></li>
                <li><a href="/viewrequest">View Request for Food</a></li>
                <li><a href="/viewrequestforutensils">View Request for Utensils</a></li>
              </ul>
            </li>
           
            <li><a href="/about">ABOUT</a></li>
            
            
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
				<h3>Blog List.</h3>
			</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /blue -->

	 
	<!-- *****************************************************************************************************************
	 BLOG CONTENT
	 ***************************************************************************************************************** -->

	 <div class="container mtb">
	 	<div class="row">
	 	
	 		<! -- BLOG POSTS LIST -->
	 		<div class="col-lg-8">
	 			<! -- Blog Post 1 -->
		 		<p><img class="img-responsive" src="assets/img/post01.jpg"></p>
		 		<a href="single-post.html"><h3 class="ctitle">Time to change your apps.</h3></a>
		 		<p><csmall>Posted: April 25, 2014.</csmall> | <csmall2>By: Admin - 3 Comments</csmall2></p>
		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		 		<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
		 		<p><a href="single-post.html">[Read More]</a></p>
		 		<div class="hline"></div>
		 		
		 		<div class="spacing"></div>
		 		
	 			<! -- Blog Post 2 -->
		 		<p><img class="img-responsive" src="assets/img/post02.jpg"></p>
		 		<a href="single-post.html"><h3 class="ctitle">Our new project is here.</h3></a>
		 		<p><csmall>Posted: April 25, 2014.</csmall> | <csmall2>By: Admin - 3 Comments</csmall2></p>
		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		 		<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
		 		<p><a href="single-post.html">[Read More]</a></p>
		 		<div class="hline"></div>

		 		<div class="spacing"></div>
		 		
	 			<! -- Blog Post 3 -->
		 		<p><img class="img-responsive" src="assets/img/post03.jpg"></p>
		 		<a href="single-post.html"><h3 class="ctitle">Logo design contest starts now.</h3></a>
		 		<p><csmall>Posted: April 25, 2014.</csmall> | <csmall2>By: Admin - 3 Comments</csmall2></p>
		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
		 		<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
		 		<p><a href="single-post.html">[Read More]</a></p>
		 		<div class="hline"></div>
		 		
			</div><! --/col-lg-8 -->
	 		
	 		
	 		<! -- SIDEBAR -->
	 		<div class="col-lg-4">
		 		<h4>Search</h4>
		 		<div class="hline"></div>
		 			<p>
		 				<br/>
		 				<input type="text" class="form-control" placeholder="Search something">
		 			</p>
		 			
		 		<div class="spacing"></div>
		 		
		 		<h4>Categories</h4>
		 		<div class="hline"></div>
			 		<p><a href="#"><i class="fa fa-angle-right"></i> Wordpress</a> <span class="badge badge-theme pull-right">9</span></p>
			 		<p><a href="#"><i class="fa fa-angle-right"></i> Photoshop</a> <span class="badge badge-theme pull-right">3</span></p>
			 		<p><a href="#"><i class="fa fa-angle-right"></i> Web Design</a> <span class="badge badge-theme pull-right">11</span></p>
			 		<p><a href="#"><i class="fa fa-angle-right"></i> Development</a> <span class="badge badge-theme pull-right">5</span></p>
			 		<p><a href="#"><i class="fa fa-angle-right"></i> Tips & Tricks</a> <span class="badge badge-theme pull-right">7</span></p>
			 		<p><a href="#"><i class="fa fa-angle-right"></i> Code Snippets</a> <span class="badge badge-theme pull-right">12</span></p>

		 		<div class="spacing"></div>
		 		
		 		<h4>Recent Posts</h4>
		 		<div class="hline"></div>
					<ul class="popular-posts">
		                <li>
		                    <a href="#"><img src="assets/img/thumb01.jpg" alt="Popular Post"></a>
		                    <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
		                    <em>Posted on 02/21/14</em>
		                </li>
		                <li>
		                    <a href="#"><img src="assets/img/thumb02.jpg" alt="Popular Post"></a>
		                    <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
		                    <em>Posted on 03/01/14</em>
		                <li>
		                    <a href="#"><img src="assets/img/thumb03.jpg" alt="Popular Post"></a>
		                    <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
		                    <em>Posted on 05/16/14</em>
		                </li>
		                <li>
		                    <a href="#"><img src="assets/img/thumb04.jpg" alt="Popular Post"></a>
		                    <p><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></p>
		                    <em>Posted on 05/16/14</em>
		                </li>
		            </ul>
		            
		 		<div class="spacing"></div>
		 		
		 		<h4>Popular Tags</h4>
		 		<div class="hline"></div>
		 			<p>
		            	<a class="btn btn-theme" href="#" role="button">Design</a>
		            	<a class="btn btn-theme" href="#" role="button">Wordpress</a>
		            	<a class="btn btn-theme" href="#" role="button">Flat</a>
		            	<a class="btn btn-theme" href="#" role="button">Modern</a>
		            	<a class="btn btn-theme" href="#" role="button">Wallpaper</a>
		            	<a class="btn btn-theme" href="#" role="button">HTML5</a>
		            	<a class="btn btn-theme" href="#" role="button">Pre-processor</a>
		            	<a class="btn btn-theme" href="#" role="button">Developer</a>
		            	<a class="btn btn-theme" href="#" role="button">Windows</a>
		            	<a class="btn btn-theme" href="#" role="button">Phothosop</a>
		            	<a class="btn btn-theme" href="#" role="button">UX</a>
		            	<a class="btn btn-theme" href="#" role="button">Interface</a>		            	
		            	<a class="btn btn-theme" href="#" role="button">UI</a>		            	
		            	<a class="btn btn-theme" href="#" role="button">Blog</a>		            	
		 			</p>
	 		</div>
	 	</div><! --/row -->
	 </div><! --/container -->


	<!-- *****************************************************************************************************************
	 FOOTER
	 ***************************************************************************************************************** -->
	 <div id="footerwrap">
	 	<div class="container">
		 	<div class="row">
		 		<div class="col-lg-4">
		 			<h4>About</h4>
		 			<div class="hline-w"></div>
		 			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
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
		 			<h4>Our Bunker</h4>
		 			<div class="hline-w"></div>
		 			<p>
		 				Some Ave, 987,<br/>
		 				23890, New York,<br/>
		 				United States.<br/>
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
