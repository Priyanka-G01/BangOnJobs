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
    
        <link rel="stylesheet"  href="bootstrap-dist-3.4.1/css/contact.css">
        <title>Responsive Form</title>

        <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bree+Serif&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
<style>
    body{
  background: rgb(25,25,112);
}

#header-nav{
  background: #585858;
  border: 1px solid black;
  margin-bottom: 0px;
  border-radius: 0px;
}


#navbar-brand{
  padding-top: 25px;
}
#navbar-brand h1{
  font-family: 'Cinzel Decorative', cursive;
  color:  #004225;
  font-size: 70px;
  margin-top: 0;
  margin-bottom: 0;
 margin-right: 2px;
 margin-left: 10px;
}

#navbar-brand a:hover, #navbar-brand a:focus{
  text-decoration: none;
  
}

#tag-line{
  font-family: 'Dancing Script', cursive;

 color: black;
  font-size: 30px;
  margin-top: 0;
  margin-bottom: 0;
 margin-right: 2px;
 margin-left: 30px;
 word-spacing: 8px;
 font-weight: bold;
}


#nav-list{
  margin-top: 0px;
}

#nav-list a{
  color: black;
  font-size: 2.4em;
  font-family: 'Libre Caslon Display', serif;
  font-weight: bold;
}

#nav-list a:hover{
  background-color: #E7E7E7;
}

#header-nav1{
   background: #C0C0C0;
  border: 1px solid black;
  margin-bottom: 0px;
  border-radius: 0px;
}

#nav-list1{
  margin-top: 0px;
}

#nav-list1 a{
  color: black;
  font-size: 2.4em;
  font-family: 'Libre Caslon Display', serif;
  font-weight: bold;
  margin-right: 10px;
   margin-left: 10px;
  margin-top: 2px;
  margin-bottom: 2px;
}

#nav-list1 a:hover{
  background-color: #E7E7E7;

}

.dropdown-menu{
  background-color: #C0C0C0;
  text-align: center;
  font-size: .8em;
}


@keyframes slider{
  0%{
    left: 0;
  }

  20%{
    left: 0;
  }

  25%{
    left: -100%;
  }

  45%{
    left: -100%;
  }

  50%{
    left: -200%;
  }

  70%{
    left: -200%;
  }

  75%{
    left: -300%;
  }

  95%{
    left: -300%;
  }

  100%{
    left: -400%;
  }
}

#slider{
  overflow: hidden;
}

#slider figure img{
  width:20%;
 float: left;
}

#slider figure{
  position: relative;
  width: 500%;
  height: 110vh;
  margin:0;
  left: 0;
  text-align:center;
  font-size: 0;
  animation: 20s slider infinite;
}

#images img{
  width: 100%;
  height: 100%;
}

.panel-footer{
  margin-top: 10px;
  padding-top: 45px;
  padding-bottom: 30px;
  background-color: #222;
  border-top: 0;
}



#a{
  font-size: 1.8em;
  font-family: 'Playfair Display', serif;
  color: green;
}

#b {
  color: white;
  font-size: 1.4em;
  line-height: 1.8;
  font-style: italic;
  color: white;
}

body{
    padding:0px;
    margin:0px;
    font-family:sans-serif;
    background:  green;
}
    
#cpg {
    width:90%;
    margin:auto;
    overflow:hidden;

}
#contact-section{
    background: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.9)),url(../contact.png);
    background-size: cover;
    background-position:  center;
    height:100%;
    width:100%;
    padding-bottom:2%
}
#contact-section .container h2{
    text-align:center;
    
     font-size: 50px;
    color:#fff;
    letter-spacing:2px;
    font-family: 'Bree Serif', serif;
  
  text-transform: uppercase;
}

#contact-section .container p{
    font-family: 'Dancing Script', cursive;
font-family: 'Philosopher', sans-serif;
    text-align:center;
    width:90%;
    margin-left:auto;
    margin-right:auto;
    padding-bottom:1%;
    color:yellow;
    letter-spacing:2px;
    font-size: 30px;
}

.contact-form i.fa{
    font.size:22px;
    padding:3%;
    background-color:none;
    margin:2%;
    boder-radius:80%
    cursor:pointer;
    border:2px solid rgd(190,190,190);
    color:rgb(190,190,190)
}

.contact-form i.fa:hover{
    cursor:pointer;
    border:2px solid #fff;
    color:#fff;
}
.contact-form{
    display:grid;
    grid-template-columns:auto auto;
    color:#fff;
}
.contact form .form-info{
    font-size:16px;
    font-style:italic;
    
    letter-spacing:2px;
}
input{
    padding:10px;
    margin:10px;
    width:70%;
    background-color:rga(136,133,133,0.5);
    color:#fff;    
    border:none;
    outline:none;
}

input:placeholder{
    color:#fff;
}

textarea{
        padding:100px;
        margin:10px;
        width:70%;
        background-color: rgba(136,133,133.0.5);
        color:#fff;
        border:none;
        outline:none;

    }

text area::placeholder{
    color:#fff;
}
.submit{
    width:40%;
    background:none;
    padding:4px;
    outline:none;
    font-size:13px;
    font-weight:bold;
    letter-spacing:2px;
    height:33px;
    text-align:center;
    cursor:pointer;
    letter-spacing:2px;
    margin-left:3%;
    border:2px solid rgb(190,190,190);
    color:rgb(190,190,190);
    background: #03a9f4;

}
.submit:hover{
    border:2px solid #fff;
    color:#fff;
    cursor:pointer;
}
/*media queries*/
@media(max-width:768px){
    #contact-section .contact-form{
        display:block;
        width:100%;
        text-align:center;
    }
    #contact-section .submit{
       width:60%; 
    }
}

/*nav-bar */
#header-nav{
  background:#585858;
  border: 1px solid black;
  margin-bottom: 0px;
  border-radius: 0px;
}

#logo-img{
   background: url('../Screenshots/L1.png')no-repeat;
   width: 221px;
   height: 204px;
   padding-top: 10px;
   padding-bottom: 10px;
   margin: 10px 15px 10px 0;
}

#navbar-brand{
  padding-top: 25px;
}
#navbar-brand h1{
  font-family: 'Cinzel Decorative', cursive;
  color:  #004225;
  font-size: 70px;
  margin-top: 0;
  margin-bottom: 0;
 margin-right: 2px;
 margin-left: 150px;
}
#tag-line{
  font-family: 'Dancing Script', cursive;

 color: black;
  font-size: 30px;
  margin-top: 0;
  margin-bottom: 0;
 margin-right: 2px;
 margin-left: 30px;
 word-spacing: 8px;
}

#navbar-brand a:hover, #navbar-brand a:focus{
  text-decoration: none;
}

#nav-list{
  margin-top: 0px;
}

#nav-list a{
  color: black;
  font-size: 2.4em;
  font-family: 'Libre Caslon Display', serif;
  font-weight: bold;
}

#nav-list a:hover{
  background-color: #E7E7E7;
}

#header-nav1{
   background: #C0C0C0;
  border: 1px solid black;
  margin-bottom: 0px;
  border-radius: 0px;
}

#nav-list1{
  margin-top: 0px;
}

#nav-list1 a{
  color: black;
  font-size: 2.4em;
  font-family: 'Libre Caslon Display', serif;
  font-weight: bold;
  margin-right: 10px;
   margin-left: 10px;
  margin-top: 2px;
  margin-bottom: 2px;
}

#nav-list1 a:hover{
  background-color: #E7E7E7;
}
/* footer */
.panel-footer{
  margin-top: 10px;
  padding-top: 35px;
  padding-bottom: 30px;
  background-color: #222;
  border-top: 0;
}



#a{
  font-size: 1.8em;
  font-family: 'Playfair Display', serif;
  color: green;
}

#b {
  color: white;
  font-size: 1.4em;
  line-height: 1.8;
  font-style: italic;
  color: white;
}


</style>
</head>
<body>
    <header>
        <nav id="header-nav" class="navbar navbar-default">
            <div class="container">
                
                <div id="navbar-brand">
                    
                           <h1>BangOnHands</h1>
                   
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
                            <a href="codefurywebpage.php">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="Discussion.php">
                                Discussions
                            </a>
                        </li>
                       <li class="dropdown">
                           <a class="dropdown-toggle" data-toggle="dropdown" >Services
                                <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                      <li><a href="#">Apply for Jobs</a></li>
                                       <li><a href="business.php">Create Your Own Business</a></li>
                                       <li><a href="#">Appy for Volunteering</a></li>
                                   </ul>
                        </li>
                       
                        <li>
                            <a href="contact.php">
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
                    <i class="fa fa-envelope"></i><span class="forms-info">bangonjobs@gmail.com</span>
                    
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