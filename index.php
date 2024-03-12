<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
    
    <div class="container">
        <!-- This row is for navigation -->
        <div class="row">
          <?php include_once('nav.html');?>
        </div>
        <!-- This row is for the main content -->
        <div class="row">
          <div id="mycarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
            <center>
            <div class="carousel-inner">
              <div class="carousel-item active">

                <div class="overlay"> </div>

                <img src="images/image1.png" alt="GFG" width="600" height="400" class="d-block w-50"  >
                <div class="carousel-content">
                  <h2>Superb training in frontend</h2>
                  <p style="text-align: center;">We offer training in HTML5, CSS, Bootstrap5 and Javascript Frameworks</p>
                </div>
            
            </div>

              <div class="carousel-item">
                <div class="overlay"></div>

                <img src="images/logo.png" alt="GFG" width="600" height="400" class="d-block w-50">
              
                <div class="carousel-content">
                  <h2>Superb training in frontend</h2>
                  <p style="text-align: center;">We offer training in HTML5, CSS, Bootstrap5 and Javascript Frameworks</p>
                </div>
              
              </div>
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#mycarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#mycarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </center>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
              <div class="card bg-danger">
                <img src="images/image1.png" alt="card image" class="card-img-top mx-auto d-block img-fluid" />
              
                <div class="card-img-overlay">
                  <i class="card-text"> This is an image for a code snippet written in html</i>
                </div>
                <div class="card-footer" style="text-align:center">
                  <button type="submit" class="btn btn-success btn-sm">
                    <a href="#" class="nav-link">Read More</a>
                  </button>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-sm-6 col-md-6">
                <ol type="i">
                    <li>Python</li>
                    <li>Java</li>
                    <li class="text-muted">PhP</li>
                    <li>Javascript</li>
                    <li>Ruby and Rails</li>
                </ol>
            </div>

            <div class="col-lg-3">
                <h2>Un Ordered List Items</h2>
                <p class="h3">The following are three front end technologies</p>
                <ul>
                    <li>HTML5</li>
                    <li>CSS</li>
                    <li></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <div class="jumbotron">
                    <h3 style="color:azure">Cool website</h3>
                    <p class="text-success">Welcome to my website</p>
                    <p class="text-primary">We are good at programming</p>
                    <p class="text-danger">Thanks for visiting us</p>
                    <p class="text-default">Welcome to my website</p>
                    <p class="text-warning">We are good at programming</p>
                </div>
            </div>
        </div>
        <!-- This is a footer row -->
        <div class="row" style="border:3px blue solid">
            <h3>This is the footer</h3>
        </div>
    </div>
    

    <script type="Text/Javascript" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>