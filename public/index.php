<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/index.css">
    <link rel="shortcut icon" href="/img/icon.png" type="image/png">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="~/Scripts/handlebars-v2.0.0.js"></script>
    

    <title>RootCase</title>
  </head>
  <body>
    <!--Modal-->      
    <div class="modal hide fade" id="newsletter" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">A chance to win a phone case!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="lead">
                        All you have to do is like our 
                        <a href="https://www.instagram.com/root.case/">post</a> and
                        tag 3 friends and follow us!
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Nav bar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light navbar-inverse" style="background-color: #d4e2f9;">
        <a class="navbar-brand" href="index.html">
            <img src="/img/icon.png" width="30" height="30" class="d-inline-block align-top" alt="">
            RootCase
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/website/feature.html">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">Store</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/website/contact.php">Contact</a>
            </li> 
          </ul>
        </div>
    </nav>

    <div class="jumbotron fade">
        <div class="h-100 row justify-content-center">
            <div class="col-md-6 text-center">
                <h2 class="display-3 mt-3 pt-3">RootCase</h2>
                <p class="lead text-dark">The case that doesn't pollute our space</p>
                <div class="arrow bounce mt-2 pt-2">
                    <p class="arrow-color fa fa-arrow-down fa-2x"></p>
                </div>
                <p class="lead text-dark">Scroll to learn more!</p>
            </div>
        </div>
    </div>
    <hr width="50%" class="hideElement">

    <!--Info-->
    <div class="container">
        <h2 class="display-4 text-center fade">What special about RootCase?</h2>

        <div id="info1" class="fade mt-3 pt-3">
            <div class="row">
                <div class="col-12 col-md-8 text-left">
                    <h4>
                        Help reduce your carbon footprint today!
                    </h4>
                    <p class="lead">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
                        sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                        consequuntur magni dolores eos qui ratione voluptatem s
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <img class="images" src="/img/recycle.png" alt="">
                </div>
            </div>
        </div>
    
        <div id="info2" class="clearfix fade pt-3 mt-3">
            <div class="row hideElement">
                <div class="col-12 col-md-8 text-left">
                    <h4>
                        Made from completely recycleable materials!
                    </h4>
                    <p class="lead">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
                        sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                        consequuntur magni dolores eos qui ratione voluptatem s
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <img class="images" src="/img/ecofriendly.png" alt="">
                </div>
            </div>
        </div>

        <div id="info3" class="fade pt-3 mt-3">
            <div class="row hideElement">
                <div class="col-12 col-md-8 text-left">
                    <h4>
                        In parternship with Charity101!
                    </h4>
                    <p class="lead">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
                        sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                        consequuntur magni dolores eos qui ratione voluptatem s
                    </p>
                </div>
                <div class="col-6 col-md-4">
                    <img class="images" src="/img/charity.png" alt="">
                </div>
            </div>
        </div>

        <!--Carousel-->
        <div class="mt-3 pt-3">
            <h4 class="display-4">Photo Gallery</h2>
            <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-interval="10000">
                        <img src="/img/phones.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-interval="2000">
                        <img src="/img/phones.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/phones.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <!--Contact-->
        <hr width="75%">
        <div id="contact" class="text-center hideElement">
            <div class="d-flex justify-content-between">
                <div class="p-1"></div>
                <div class="p-1">
                    <h1>Got questions?</h1>
                    <p class="paragraph">
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque <br>laudantium, 
                        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae <br>vitae dicta 
                        sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit
                    </p>
                    <a href="/website/contact.php">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" >Contact Us</button>
                    </a>
                </div>
                <div class="p-1"></div>
            </div>
        </div>
    </div>
 
    <!--Footer-->
    <div id="footer" class="text-center bg-light">
        <p class="footText">
            <h5><b>RootCase</b></h5>
            Junior Achievement CIBC
            <br>101 College Street, Toronto, ON, M5G 1L7
        </p>

        <div class="d-flex justify-content-between">
            <div class="p-1"></div>
            <div class="p-1">
                <a href="https://www.instagram.com/root.case/" class="center-block fa fa-instagram"></a>
                <a href="#" class="center-block fa fa-google"></a>
                <a href="#" class="center-block fa fa-youtube"></a>
            </div>
            <div class="p-1"></div>
        </div>  
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <!-- Load React. -->
    <!-- Note: when deploying, replace "development.js" with "production.min.js". -->
    <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
    <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

    <!--JS-->
    <script src="/js/index.js"></script>
  </body>
</html>