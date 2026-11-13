<!DOCTYPE html>
<html lang="hu">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Karrier - Adamic</title>
      <meta name="description" content="Nézz szét a nyitott potzicióink között!">
      <link rel="stylesheet" href="includes/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" type="text/css" href="includes/page.css?3">
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <style>
        /*.title-page {text-align:center;}*/
        .first-y-p {padding-bottom:35px; padding-top:20px;}
        .second-y-h {padding-top:80px;}
        .m-link {color:#000000; transition:all .3s ease-in-out}
        .m-link:hover {    
    text-shadow: 0.5px 0 0 #000000;;}
         .team-pic-page {grid-template-columns: 130px 130px}
         a {margin-bottom:0;}
         .team-pic-page div {padding-top:32px;}
         .team-page h4 {font-size:37px;}
         @media screen and (max-width: 1850px){ .team-page h4 {font-size: clamp(1.9rem, 1.5vw, 37px);}  
         .first-y-p {padding-bottom:25px; padding-top:5px;} .second-y-h {padding-top:60px;}
         .team-pic-page div {padding-top:26px;}}
         @media screen and (max-width: 1100px){
         .team-adamic {display:unset; padding-left:0; padding-right:0;}
         .team-page {display:unset; text-align:left;}
         .team-pic-page {grid-template-columns: repeat(auto-fit, minmax(119px, 1fr));  
         grid-auto-flow: dense; width:auto; padding-left:var(--padvar);padding-right:var(--padvar);}
         .team-page h4 {margin-bottom:30px;font-size: 2rem;
         padding-bottom: 5px;
         padding-left: var(--padvar);}
         .team-pic-page p {color:black;}
         .team-works {padding-top: 60px;}
         }
         .team-pic-page div {
    padding-top: 0;
}

@media screen and (max-width: 990px){
.yellow-h {
   line-height: 1.3;
    font-size: 24px;
}
.first-y-p {padding-bottom:25px; padding-top:0px;} .second-y-h {padding-top:60px;}
}

@media screen and (max-width: 650px){
.vidb {
    height: 320px;
    object-fit: cover;
}

}


@media screen and (max-width: 400px){
   .menu-page {
    background-position: 50% 50%;} }

@media screen and (max-width: 370px){
.yellow-h {
    font-size: 24px;
}}

@media screen and (max-width: 359px){ .team-works a {font-size:14px!important; }}
@media screen and (max-width: 350px){ .g-recaptcha {width:200px!important; }}
      </style>
      <!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '337648337642528');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=337648337642528&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
   </head>
   <body onload="lineFunction()">
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-176414093-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-176414093-1');
</script>
    <!-- cookie popup -->
<div id="cp-bg"></div>
<div id="cp-content">
 <div id="cp-content-header">Cookie-k használata a honlapon</div>
 <div id="cp-content-text">Mint a legtöbb weboldal, az adamic.hu is használ cookie-kat, hogy kellemesebb felhasználói élményben legyen részed, amikor az oldalunkon jársz. A Hozzájárulok gomb megnyomásával elfogadod a cookie-k használatát. További tudnivalókat a cookie-król, és arról, hogy lehet ezeket kikapcsolni, az <a href="adatkezelesi-tajekoztato.pdf" target="_blank">adatkezelési tájékoztatóban </a> találsz.</div>
 <div id="cp-content-btn" onclick="close_and_agree_cp();">Hozzájárulok</div>
 <div class="cp-close-button" onclick="close_cp();"></div>
</div>
<script type="text/javascript">
function setCookie(cname,cvalue,exdays) {
var d = new Date();
d.setTime(d.getTime()+(exdays*6*60*60*1000));
var expires = "expires="+d.toGMTString();
document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
var name = cname + "=";
var ca = document.cookie.split(';');
for(var i=0; i<ca.length; i++) {
var c = ca[i].trim();
if (c.indexOf(name)==0) return c.substring(name.length,c.length);
}
return "";
}

function close_and_agree_cp() {
 document.getElementById("cp-content").style.display = 'none';
 document.getElementById("cp-bg").style.display = 'none';
 setCookie("cookie-permission",1,30);
}

function close_cp() {
 document.getElementById("cp-content").style.display = 'none';
 document.getElementById("cp-bg").style.display = 'none';
}

var tmp_cookie=getCookie("cookie-permission");
if (tmp_cookie!="" && tmp_cookie=="1") { setCookie("cookie-permission",1,30); }
else {
 document.getElementById("cp-content").style.display = 'block';
 document.getElementById("cp-bg").style.display = 'block';
}
</script>
<!-- cookie popup end -->
      <div class="main">
         <div class="menu-page" style="background-image:url(img/karrier-19.jpg);">
            <div class="da-line"></div>
            <div class="mm">
               <div class="mobile-menu">
                  <a href="" class="moba">
                  </a>
                  <div class="menu-icon" onclick="openNav()">
                     <div id="nav-icon1" class="greeee">
                        <span></span>
                        <span></span>
                        <span></span>
                     </div>
                  </div>
               </div>
               <a href="/" class="main-mob"><img src="img/adamic-logo-yellow.png" class="main-mob-logo-c"
                  alt="Adamic logó"></a>
               <div id="mySidenav" class="sidenav">
                  <a href="/#rolunk" onclick="closeNav()" id="m-c" class="animated scroller">Rólunk</a>
                  <a href="/#csapatunk" onclick="closeNav()" id="m-c-2" class="animated-2 scroller">Csapatunk</a>
                  <a href="/#munkaink" onclick="closeNav()" id="m-c-3" class="animated-3 scroller">Munkáink</a>
                  <a href="/#kapcsolat" onclick="closeNav()" style="color:rgb(255, 215, 55);" id="m-c-4" class="animated-4">Karrier</a>
                  <a href="/#kapcsolat" onclick="closeNav()" id="m-c-5" class="animated-5 scroller">Kapcsolat</a>
                  <a href="#" onclick="closeNav()" id="m-c-6" class="animated-6" style="display:none;">Ingyenes
                  próbalencse</a>
               </div>
            </div>
            <div class="menu-top">
               <div class="top-right-menu">
                  <a href="/#kapcsolat">Karrier</a>
                  <a href="/#kapcsolat" class="scroller">Kapcsolat</a>
               </div>
            </div>
            <div class="adamic-hero">
               <div class="menu-side">
                  <a href="/" class="adamic-logo"><img src="img/logo-white-a.png" class="logo"></a>
                  <div class="side-menu">
                     <a href="/#rolunk" class="scroller">rólunk</a>
                     <a href="/#csapatunk" class="scroller">csapat</a>
                     <a href="/#munkak" class="scroller">munkák</a>
                  </div>
                  <img src="img/down-logo-white.png" class="another-logo">
               </div>
               <div class="adamic-movie">
                  <div class="title-page">
                     <h1 id="firstLine">Digitális Account Manager</h1>
                     <span id="longLine" class="titleline"></span>
                     <span class="mobline"></span>
                     <p id="p-line">Legyél az Adamic tagja!</p>
                  </div>
               </div>
            </div>
         </div>
      <!--   <div class="yellow">
            <div class="yellow-content">
               <h2 class="yellow-h">Nézd meg a nyitott pozicióinkat!</h2>
               <p class="yellow-p">Az alábbiakban láthatod, hogy milyen poziciókra keresünk munkatársat. Ha úgy érzed, hogy rád illik a leírás, küldj egy email-t <a href="mailto:hello@adamic.hu" class="m-link">hello@adamic.hu</a> címre. Akkor is nyugodtan írj, ha épp nem látsz nyitott poziciót, de szívesen dolgoznál nálunk.</p>
               
            </div>
         </div>-->
         <div class="yellow" style="background:transparent;">
            <div class="yellow-content">
               <h2 class="yellow-h" style="color: #000000!important;">Téged keresünk ha:</h2>
               <p class="yellow-p first-y-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
            
               <p class="yellow-p">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
               
               <h2 class="yellow-h second-y-h" style="color: #000000!important;" >Erre számíthatsz tőlünk:</h2>
               <p class="yellow-p first-y-p">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type.</p>
          
               <p class="yellow-p">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
            </div>
         </div>
    
      <script src="includes/jquery-3.5.1.min.js"></script>
      <?php include('inc_contact.php'); ?>
      <footer></footer>

      <script src="includes/menu.js"></script>
      <script src="includes/jquery.fancybox.min.js?2"></script> 
   
      <script>
         function lineFunction() { 
         const element = document.getElementById('firstLine');
         const elementTwo = document.getElementById('longLine');
         const elementThree = document.getElementById('p-line');
         const positionInfo = element.getBoundingClientRect();
         const positionInfoTwo = elementThree.getBoundingClientRect();
         const widthOne = positionInfo.width;
         const widthTwo = positionInfoTwo.width;
         if (widthOne > widthTwo) {
         document.documentElement.style.setProperty('--wth', widthOne + 'px');
         }
         
         else  {
         document.documentElement.style.setProperty('--wth', widthTwo + 'px');
         }
         }
         
         var globalResizeTimer = null;
         
         $(window).resize(function() {
         if(globalResizeTimer != null) window.clearTimeout(globalResizeTimer);
         globalResizeTimer = window.setTimeout(function() {
         lineFunction();
         }, 200);
         });
         
         
         function openNav() {
         var navIcon = document.querySelector("#nav-icon1");
         var navfirst = document.querySelector("#m-c");
         var navsec = document.querySelector("#m-c-2");
         var navth = document.querySelector("#m-c-3");
         var navfour = document.querySelector("#m-c-4");
         var navfive = document.querySelector("#m-c-5");
         var navsix = document.querySelector("#m-c-6");
         var mySidenav = document.querySelector("#mySidenav");
         navIcon.classList.toggle("open");
         navfirst.classList.toggle("fadeInDown");
         navsec.classList.toggle("fadeInDown");
         navth.classList.toggle("fadeInDown");
         navfour.classList.toggle("fadeInDown");
         navfive.classList.toggle("fadeInDown");
         navsix.classList.toggle("fadeInDown");
         mySidenav.classList.toggle("open-sidemenu");
         }
         
         function closeNav() {
         var navIcon = document.querySelector("#nav-icon1");
         var navfirst = document.querySelector("#m-c");
         var navsec = document.querySelector("#m-c-2");
         var navth = document.querySelector("#m-c-3");
         var navfour = document.querySelector("#m-c-4");
         var navfive = document.querySelector("#m-c-5");
         var navsix = document.querySelector("#m-c-6");
         var mySidenav = document.querySelector("#mySidenav");
         navIcon.classList.remove("open");
         navfirst.classList.remove("fadeInDown");
         navsec.classList.remove("fadeInDown");
         navth.classList.remove("fadeInDown");
         navfour.classList.remove("fadeInDown");
         navfive.classList.remove("fadeInDown");
         navsix.classList.remove("fadeInDown");
         mySidenav.classList.remove("open-sidemenu");
         }
         

        
         
      
      </script>
   </body>
</html>