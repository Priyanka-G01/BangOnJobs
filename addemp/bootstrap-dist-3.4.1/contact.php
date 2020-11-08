<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="veiwport" content="width=device-width initial-scale=1.0">
        <meta https-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="bootstrap-dist-3.4.1/css/styles.css">
        <link rel="stylesheet"  href="bootstrap-dist-3.4.1/css/bootstrap.css">
       
        <!--Add font awesome CDN-->
        
         <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <link rel="stylesheet"  href="css/contact.css">
        <title>Responsive Form</title>

        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav id="header-nav" class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a href="Project.html" class="Pull-left">
                        <div id="logo-img" alt="logo image"></div>
                    </a>
                </div>
                <div id="navbar-brand">
                    
                           <h1>BangOnJobs</h1>
                   
                   <span id="tag-line">for better Job Oppurtunity</span>
                </div>
                <div>
                      <ul id="nav-list" class="nav navbar-nav navbar-right">
                        <li>
                            <a href="Logindet.php">
                                Login
                            </a>
                        </li>
                        <li>
                            <a href="Signupdet.php">
                                Sign Up
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav id="header-nav1" class="navbar navbar-default">
            <div class="container">
                <div id="collapsable-nav" class="collapse navbar-collapse">
                    <div>
                      <ul id="nav-list1" class="nav navbar-nav">
                        <li>
                            <a href="">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="Discussion.html">
                                Discussions
                            </a>
                        </li>
                        <li class="dropdown">
                           <a class="dropdown-toggle" data-toggle="dropdown" >Services
                                <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                      <li><a href="Buy.html">Buy</a></li>
                                       <li><a href="Sell.html">Sell</a></li>
                                   </ul>
                        </li>
                       
                        <li>
                            <a href="contact.html">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>
    </header>
    <!--contact section-->
    <section id="contact-section">
        <div class="container" id="cpg">
            <h2 >Contact us</h2>
            <p>Email us and keep upto date with our latest news</p>
            <div class="contact-form">
                <!--first grid section-->
                <div>
                    <i class="fa fa-map-marker"></i><span class="forms-info" >UVCE,K R Circle,Bangalore.</span>
    <br>
                    <i class="fa fa-phone"></i><span class="forms-info">7349067911</span>
                    <br><i class="fa fa-phone"></i><span class="forms-info">9880394465</span>
                   <br> <i class="fa fa-phone"></i><span class="forms-info">9019920165</span>
                    <br><i class="fa fa-phone"></i><span class="forms-info">9008978931</span>
                    <br>
                    <i class="fa fa-envelope"></i><span class="forms-info">e-lifter@gmail.com</span>
                    
                </div>
                <!--second grid-->
                <div>
                    <form>
                        <input type="text" placeholder="your name" required="">
                        <input type="text" placeholder="last name" required="">
                        <input type="email" placeholder="your email" required="">
                        <input type="text" placeholder="subject of this message" required="">
                        <textarea name="message" placeholder="message" rows="5" required=""></textarea>                    
                        <button class="submit">Send Message</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="panel-footer">
    <div class="container">
      <div class="row">
       
        <section id="address" class="col-sm-4">
          <span id="a">Address:</span><br>
          <span id="b">University Visvesvaraya College of Engineering<br>
          K.R.Circle,Bangalore</span>
          
        </section>
        
      </div>
      
    </div>
  </footer>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
</body>
</html>