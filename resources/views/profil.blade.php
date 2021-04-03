<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href='//cdn.jsdelivr.net/devicons/1.8.0/css/devicons.min.css' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald:700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><link rel='stylesheet' href='https://rawgit.com/animsaj/animsaj.github.io/master/css/styles.min.css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
<style>
    @import url(https://fonts.googleapis.com/css?family=Montserrat);
.page {
  width: 60vw;
  margin: 0 auto;
}

.headCV{
  background-color: #36497e;
  font-family: 'Montserrat', sans-serif;
  color: #CCCCCC;
   text-align: center;
  overflow: auto; 
}

.imageCV{
  width: 100px;
  height: auto;
  border : 5px solid #336699;
   border-radius: 50%;
   
}

.mainCV {
  background-color: #3f4a6b;
  font-family: 'Montserrat', sans-serif;
  padding: 2em;
  overflow: auto;
  
}

.h2 {
  color: #f8f8f8;
  
}

.li {
    color: #ffff;
}
.liste {
  border-bottom : 2px #333 solid;
  color: #ffff;
}

</style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
      <a href="/" class="brand-logo"><img class="responsive-img circle" src="/me.jpg"></a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#about">Home</a></li>
        <li><a href="#showcase">About</a></li>
        <li><a href="#toolbox">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#about">Home</a></li>
        <li><a href="#showcase">About</a></li>
        <li><a href="#toolbox">Skills</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
  </nav>
</div>
<div id="intro" class="paralax">
  <div class="container">
    <div class="row">
      <div class="col s12 center-align">
        <span class="fade hello">Hello,</span><span class="fade iam">I am </span><span class="fade jasmina">Wawan Gunawan.</span>
      </div>
    </div>
  </div>
</div>
<div class="container section scrollspy" id="about">
  <div class="row">
    <div class="col m2 offset-m5 s6 offset-s3"><img class="responsive-img circle" src="/me.jpg"></div>
    <div class="col m8 offset-m2 s12 center-align">
      <p>Saya adalah seorang Data Scientist yang berprofesi untuk mengolah data dengan metode ilmiah 
          ntuk menghasilkan informasi yang akurat dan bernilai tinggi sehingga dapat membantu pengambilan keputusan.</p>
      <blockquote>Tetaplah hidup walaupun anda tidak berguna. Setidaknya anda bisa menjadi contoh yang tidak patut Untuk ditiru.</blockquote>
      <em>- Wawan Gunawan -</em>
    </div>
  </div>
</div>
<div class="container section scrollspy" id="about">
  <div class="row">
    <div class="col s12 center-align">
      <h3>let's get to know me</h3>
    </div>
    <div class="page">
        
        <main class="mainCV">
        <h2 class="h2">Personal Data</h2>
        <ul class="liste">
            <table class="table">
                <thead>
                  <tr>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Name</td>
                    <td>: Wawan Gunawan</td>
                  </tr>
                  <tr>
                    <td>Place & Date of Birdth</td>
                    <td>: Labuapi, 3 Descember 2000</td>
                  </tr>
                  <tr>
                    <td>Gender</td>
                    <td>: Male</td>
                  </tr>
                  <tr>
                    <td>Religion</td>
                    <td>: Muslim</td>
                  </tr>
                  <tr>
                    <td>Address</td>
                    <td>: Labuapi, West Lombok, NTB</td>
                  </tr>
                  <tr>
                    <td>Marital</td>
                    <td>: Not Married</td>
                  </tr>
                  <tr>
                    <td>Nationality</td>
                    <td>: Indonesia</td>
                  </tr>
                </tbody>
              </table>
        </ul>  
        <h2 class="h2">Educational Background</h2>
        <ul class="liste">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2018 - Now</td>
                        <td>Bumigora University</td>
                    </tr>
                    <tr>
                        <td>2015 - 2018</td>
                        <td>SMKN 2 Kuripan</td>
                      </tr>
                      <tr>
                        <td>2012 - 2015</td>
                        <td>SMPN 1 Labuapi</td>
                      </tr>
                      <tr>
                        <td>2007 - 2012</td>
                        <td>SDN 1 Labuapi</td>
                      </tr>
                </tbody>
              </table>
        </ul>  
        <h2 class="h2">Hobbies</h2>
        <ul class="liste">
            <table class="table table-bordered">
                <thead>
                  <tr>
                    
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Reading</td>
                    </tr>
                    <tr>
                        <td>Playing Football</td>
                      </tr>
                      <tr>
                        <td>Studying</td>
                      </tr>
                      <tr>
                        <td>Playing Game</td>
                      </tr>
                </tbody>
              </table>
        </ul>  
        </main>
          </div>
  </div>
</div>
<div class="container section scrollspy" id="toolbox">
  <div class="row">
    <div class="col s12 center-align">
      <h3>a look into my skills</h3>
    </div>
    <div class="col s6 m2 center-align tool-card">
      <span class="icon">&#xe64e</span>
      <span class="name">javascript</span>
    </div>
    <div class="col s6 m2 center-align tool-card">
        <span class="icon" ><i class="fab fa-java" style="width: 60px"></i></span>
        <span class="name">Java</span>
      </div>
    <div class="col s6 m2 center-align tool-card">
      <span class="icon">&#xe619</span>
      <span class="name">nodeJS</span>
    </div>
    <div class="col s6 m2 center-align tool-card">
      <span class="icon">&#xe647</span>
      <span class="name">bootstrap</span>
    </div>
    <div class="col s6 m2 center-align tool-card">
      <span class="icon">&#xe649</span>
      <span class="name">css3</span>
    </div>
    <div class="col s6 m2 center-align tool-card">
      <span class="icon">&#xe636</span>
      <span class="name">html5</span>
    </div>
  </div>
</div>
<div id="contact" class="paralax section scrollspy">
  <div class="container">
    <div class="row">
      <div class="col s12 center-align ">
        <div class="row" id="form">
          <form class="col s12" action="https://formspree.io/pichulix@yahoo.gr" method="POST">
            
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<footer class="page-footer">
  <div class="container">
    <div class="row">
      
        <div class="col s12 center-align ">
        <h5>Follow me</h5>
        <ul>
            <a class="footer-link" href="https://m.facebook.com/profile.php?ref=bookmarks"><i class="fab fa-fw fa-facebook-f"></i></a>
          <a class="footer-link"
          href="https://mobile.twitter.com/gunawan_wawan43"><i class="fab fa-fw fa-twitter"></i></a><a
          class="footer-link"
          href="https://www.linkedin.com/in/gunawan-wawan-56b9b81aa"><i
              class="fab fa-fw fa-linkedin-in"></i></a><a class="footer-link"
          href="https://www.instagram.com/gunawan_wawan43/"><i class="fab fa-fw fa-instagram"></i></a>
        </ul>
      </div>
    </div>
  </div>
  
</footer>
<!-- partial -->
  <script src='https://rawgit.com/animsaj/animsaj.github.io/master/js/main.min.js'></script>
</body>
</html>
