<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jennifer Bochniak</title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="/css/business-casual.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        @if (Auth::check())
            {{ Auth::user()->email }}
            {{ link_to_action('PostsController@create', 'Create Post') }}
            {{ link_to_action('HomeController@logout', 'Log Out') }}
        @else
            {{ link_to_action('HomeController@showLogin', 'Login') }}
        @endif
    </div>


    <div class="brand">Jennifer Bochniak</div>
    <div class="address-bar">Web Developer | HTML, CSS, PHP, Laravel, Javascript, JQuery, MySQL | San Antonio, Texas</div>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{{ action('HomeController@home')}}}">Home</a> 
                    </li>
                    <li><a href="{{{ action('HomeController@about')}}}">About</a> 
                    </li>
                    <li><a href="{{{ action('HomeController@blog')}}}">Blog</a> 
                    </li>
                    <li><a href="{{{ action('HomeController@portfolio')}}}">Portfolio</a> 
                    </li>
                    <li><a href="{{{ action('HomeController@resume')}}}">Resume</a> 
                    </li>
                    <li><a href="{{{ action('HomeController@contact')}}}">Contact</a> 
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">
        @yield('content')
        <!-- <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide"> -->
                         <!-- Indicators -->
                        <!-- <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <!-- <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/hanna.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/henry.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/hannahenry.jpg" alt="">
                            </div>
                        </div> -->

                        <!-- Controls -->
                        <!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2>
                        <small>Hello I'm</small>
                    </h2>
                    <h1>
                        <span class="brand-name">Jennifer Bochniak</span>
                    </h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>This is my <strong>resume</strong></small>
                    </h2>
                </div>
            </div>
        </div> -->

       <!-- <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr> -->

             <!--    </div>
            </div>
        </div> -->

        {{ Form::open(array('action' => 'PostsController@index', 'class' => 'form-inline', 'method' => 'GET')) }}
        <div class="form-group">
         {{ Form::text('search', null, array('placeholder' => 'Search Posts', 'class' => 'form-control col-lg-4')) }}
         <button type="submit" class="btn btn-danger">Submit</button>
        </div>
        {{ Form::close() }}


<!-- Form::label('image','Image Uplaod', array('class' =>)) FORM FOR IMAGE -->


        @yield('content2')

    </div>

     <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Company {{ date('Y') }}</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script src="/js/jquery-1.10.2.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script>
    // Activates the Carousel
    $('.carousel').carousel({
        interval: 5000
    });
    </script>

</body>

</html>
