<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Alternative</title>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('assetsForSearchAlternatives/css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assetsForSearchAlternatives/css/font-awesome.min.css')); ?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="/searchalternative">Food & Other Essensials</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/index">Home</a></li>
            <li><a href="#"></a></li>

          </ul>
          <div class="col-md-6">
             <?php echo Form::open(['method' => 'GET', 'url' => 'searchalternative', 'class' => 'navbar-form navbar-left', 'role'=> 'search']); ?>

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
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <div class="container">
      <div class="row">
        <?php echo $__env->yieldContent('content'); ?>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo e(asset('assetsForSearchAlternatives/js/bootstrap.min.js')); ?>"></script>
  </body>
</html>