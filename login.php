<!DOCTYPE HTML>
<html>
  <head>
    <title>login</title>
    <!--        Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

       <style type="text/css">
            @import url(https://weloveiconfonts.com/api/?family=entypo);
           .box{
               width: 50px;
               height: 50px;
               border-radius: 50px;
               font-family: entypo;
               color: #212121;
               background: #fff;
               text-align: center;
               line-height: 50px;
               font-family: 25px;
               display: block;
               cursor: pointer;
               margin: 10px;
               transition: 1s;
           }
           .box:hover{
               color: #fff;
               transform: scale(1.15);
               transition: 1s;
           }
           #facebook:hover{
               background-color: rgb(59,89,152);
               box-shadow: inset 0 0 0 22px #3a5795;
               transform: rotate(360deg) scale(1.15);
               transition: 1s;
               
           }
           #twitter:hover{
               background-color: rgb(85,172,238);
               box-shadow: inset 0 0 0 22px #3a5795;
               transform: rotate(360deg) scale(1.15);
               transition: 1s;
               
           }
           #google:hover{
               background-color: rgb(221,75,57);
               box-shadow: inset 0 0 0 22px #3a5795;
               transform: rotate(360deg) scale(1.15);
               transition: 1s;
               
           }
           #linkedin:hover{
               background-color: rgb(0,123,101);
               box-shadow: inset 0 0 0 22px #3a5795;
               transform: rotate(360deg) scale(1.15);
               transition: 1s;
               
           }
          #banner_image{
              padding-top: 75px;
              padding-bottom: 50px;
              text-align: center;
              color: #f8f8f8;
              background-image: url(index.jpg);
              background-size: cover;
          }
           #banner_content{
               position: relative;
               padding-top: 6%;
               padding-bottom: 6%;
               margin-top: 12%;
               margin-bottom: 12%;
               background-color: rgba(0,0,0,1);
               max-width: 660px;
           }
           footer{
               padding: 10px 0;
               background-color: #101010;
               color: #9d9d9d;
               bottom: 0;
               width: 100%;
           }
        #boder{margin-top: 0px;}
           #position{
               position: relative;
               padding-top: 3%;
               padding-bottom: 6%;
               margin-top: 2%;
               margin-bottom: 12%;
               max-width: 660px;
           }
           #position{
               margin-left: 100px;
               margin-bottom: 100px;
           }
           #shift{
               padding-right: 180px;
           }
           #side{
              margin-top: 8px;
              padding-left: 500px;
          }
           font{
               font-family:sans-serif;
           }
           #section2{
               padding-left: 400px;
           }#logo{
               font-family: serif;
               font-size: 25px;
           }
           #logo:hover{
               color: red;
           }
           #navcol:hover{
               color: blue;
               font-size: 16px;
           } 
    </style>
  </head>
    <body>
         <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color: black">
        <div class="container">
                <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><font color="blue" id="logo"><strong>BIJENDRA</strong></font></a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right" style="color: red">
                        <li><a href="login.html" style="font-family:fantasy"><font color="white"id="navcol"><span class="glyphicon glyphicon-log-in"></span><b> LOGIN</b></font></a></li>
                    </ul>
        </div>
      </div>
      </div>
    </nav>
        <br>
        <br>
        <div id="banner_image">
            <div class="container">
                <div class="row" id="position">
                <div class="col-lg-6">
                <div>
          <div id="padding_left">
              <br>
              <h1><b><font color="white">LOGIN</font></b></h1>
              <p><a href="signup.html"><font color="white">Create an account ?</font></a></p>
              <form action="main.html" onsubmit="return validation()">
                  <div class="form-group">
          <label for="email"></label>
          <input type="email" id="email" class="form-control" placeholder="Email" value="" required>

          <label for="password"></label>
          <input type="password" id="password" class="form-control" placeholder="Password" value="" required>
                      <div id="shift">
                          <br>
                      <input type="checkbox" name="remember_me"> Remember me
                      <br>
                          <br>
                          <a href="settings.html"><strong><font color="red">forgot password?</font></strong></a>
                      <br>
                      </div>
                  </div>
                  
                      <input type="submit" value="Login" style="color: blue">
              </form>
              </div>
              
      </div>
      </div>
        </div>
        </div>
        </div>
        <!--java script-->
        <script>
            function validation()
            {
                var p=document.getElementById("password").value;
                var e=document.getElementById("email").value;

                if(p.length<5 || p.length>20)
                    {
                        alert("**password must be between 5 to 20 characters");
                        return false;
                    }
                
               if(atindex<1 || dotindex>=e.length-2 || dotindex-atindex<3)
                 return false;
                
            }
        </script>
        <footer style="background-color: black">
            <div class="container">
                <div class="row">
                <div class="col-md-4" id="section1">
                    <p>OFFICE ADDRESS:<br>
                  CAREER CAPSULE
OFFICE: <br>F. NO. 71,  
HIRA NAGAR, NEAR HHH,
HAMIRPUR,<br> HIMACHAL PRADESH 
<br>INDIA 177001
 </p>
                </div>
                  <div class="col-xs-8" id="section2">
                    <div class="row">
                    <div class="col-xs-2">
                        <a href="https://www.facebook.com/" target="_blank"><div class="box" id="facebook">&#62220;</div></a>
                    </div>
                        <div class="col-xs-2">
                            <a href="https://twitter.com/login?lang=en" target="_blank"><div class="box" id="twitter">&#62217;</div></a>
                        </div>
                        <div class="col-xs-2">
                            <a href="www.google+.com" target="_blank"><div class="box" id="google">&#62223;</div></a>
                        </div>
                        <div class="col-xs-2">
                            <a href="https://www.linkedin.com/uas/login" target="_blank"><div class="box" id="linkedin">&#62232;</div></a>
                        </div>
                </div>
        </div>
        </div></div><hr/>
                <div class="container">
                <center>
                    Copyright © Career capsule 2019. All Rights
Reserved | contact Us:+91 90000 00000
                </center>
            </div>
        </footer>
    </body>
</html>