<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-Edge" >
	<meta name="viewport " content="width=device-width initial-scale=1">
	<title>Economic Lifter</title>
	<link rel="stylesheet"  href="bootstrap-dist-3.4.1/css/bootstrap.css">
	<link rel="stylesheet"  href="bootstrap-dist-3.4.1/css/styles.css">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Tangerine:wght@400;700&display=swap" rel="stylesheet">
	<style type="text/css">
		body{
  background: green;
}

#header-nav{
  background: #585858;
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


	</style>
</head>
<body>
	<header>
		<nav id="header-nav" class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					
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

  <div class="container" id="dpg">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="State">State</label>
      </div>
      <div class="col-75">
        <select id="state" name="state">
          <option value="Karnataka">Karnataka</option>
          <option value="Kerala">Kerala</option>
          <option value="ap">AndraPradesh</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>



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