<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cochav</title>
        <meta name="description" content="products">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- nav @todo: this can be included in a separate section, but for this excercise will remain this way :) -->
	    <nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="/"><b>Cochav - Product Management</b></a>
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li><a href="#about">About</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>

	    <br />

        <div class="container">
			<div class="row">
			  
			  <div class="col-xs-4">
			  	<a href="/product" class="btn btn-primary btn-lg btn-block" role="button">List</a>
			  </div>
			  
			  <div class="col-xs-4">
			  	<a href="/product/create" class="btn btn-primary btn-lg btn-block" role="button">Manage</a>
			  </div>
			  
			  <div class="col-xs-4">
			  	<button type="button" class="btn btn-danger btn-lg btn-block">Clear</button>
			  </div>

			</div>
        </div>	  

	    <div class="cochav-basic">
	        @yield('content')
	    </div>

    </body>
</html>