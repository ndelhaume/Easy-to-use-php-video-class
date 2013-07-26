<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simple and Easy-to-use PHP Video Class</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar">1</span>
                        <span class="icon-bar">1</span>
                        <span class="icon-bar">1</span>
                    </a>
                    <a class="brand" href="http://ndelhaume.github.io/">ndelhaume.github.com</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="http://ndelhaume.github.com">GitHub Home</a></li>
                            <li><a href="http://nicolasdelhaume.com">Personnal Website</a></li>

                        </ul>
                        
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1>Easy-to-use PHP video Class </h1>
                <p>Don't lose time to copy/paste the embed code from YouTube, Vimeo or DailyMotion, just use the class. <br>
                    The class can also retrieve the video thumb for you.</p>
                <p><a class="btn btn-primary btn-large" href="https://github.com/ndelhaume/php-video-providers-utility">View on GitHub &raquo;</a></p>
            </div>
            <?php
            require('class.video.php');

            $params = array('provider' => 'vimeo', 'videoID' => '38527548', 'width' => 350, 'height' => 296);
$video = new Video($params);
            ?>
            <!-- Example row of columns -->
            <div class="row">
                <div class="span4">
                    <h2>Video Embedding</h2>
                    <p><?php echo $video->embed(); ?></p>
                </div>
                <div class="span4">
                    <h2>Thumb retrieving</h2>
                    <p><?php echo '<img src="' . $video->thumb() . '" /><br>'; ?></p>
                </div>
                <div class="span4">
                    <h2>Easy to use:</h2>
                    <p><pre>require('class.video.php');<br>
$params = array('provider' => 'vimeo', 
'videoID' => '38527548', 
'width' => 370);<bR>
$video = new Video($params); 
echo $video->embed();</pre></p>
                <h2>Features:</h2>
                    <p><ul>
                        <li>Many options available: Width, Height, Autoplay, etc...</li>
                        <li>HQ Thumb (for YouTube only)</li>
                        <li>3 different providers (YouTube, Vimeo, Dailymotion)</li>
                        <li>More options to come</li>
                    </ul></p>

                </div>
            </div>



            <hr>

            

            <footer>
                <p>&copy; Nicolas Delhaume <?php echo date('Y'); ?></p>
            </footer>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <script>
            var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
            (function(d, t) {
                var g = d.createElement(t), s = d.getElementsByTagName(t)[0];
                g.src = '//www.google-analytics.com/ga.js';
                s.parentNode.insertBefore(g, s)
            }(document, 'script'));
        </script>
    </body>
</html>
