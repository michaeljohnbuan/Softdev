<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title></title>
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('assetsForSearchAlternatives/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetsForSearchAlternatives/css/font-awesome.min.css')); ?>">
</head>
<body>
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/agegroups">Food & Other Essensials</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/index">HOME</a> </li>
                    <li> <a href="#"></a></li>
                </ul>

            <div class="col-md-6">
             <?php echo Form::open(['method' => 'GET', 'url' => 'agegroups', 'class' => 'navbar-form navbar-left', 'role'=> 'search']); ?>

               <div class="input-group custom-search-form">
                  <input type="text" name="search" class="form-control" placeholder="Search......">
                   <span class="input-group-btn">
                      <button type="submit" class="btn btn-default-sm">
                        <i class="fa fa-search"></i>
                  </span>
             <?php echo Form::close(); ?>

              </div>
          </div>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"></a></li>
                </ul>
            </div> <!--/.navbar-collapse -->
        </div><!--/.container-fluid --> 
    </nav>
    <div class="container">
        <div class="row">
           <?php echo $__env->yieldContent('content'); ?>
                
        </div>


    </div>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo e(asset('assetsForSearchAlternatives/js/bootstrap.min.js')); ?>"></script>
</body>
</html>