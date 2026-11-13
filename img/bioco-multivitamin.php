<!DOCTYPE html>
<html lang="hu">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>BioCo Multivitamin 200% landing oldal - Adamic</title>
      <meta name="description" content="A BioCo-nak social media tartalmak gyártása és PPC kampányok tervezése mellett landing oldalakat is tervezünk. Legutóbb azzal bíztak meg minket, hogy mutassuk be legújabb terméküket, a Multivitamin 200% étrend-kiegészítőt.">
      <link rel="stylesheet" href="includes/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" type="text/css" href="includes/page.css?4">
      <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
      <link rel="manifest" href="/site.webmanifest">
      <style>
        
         .changepc {display:none;}
         .titleline { background:transparent;  transition:all .2s ease;}
         .cmn-line {
            animation: colorin .3s ease normal forwards;
         }
         .title-page {margin-bottom:0px;}
         @keyframes colorin {
         0% {background:transparent;}
         100% {background:var(--yellow)}
         }
         @media screen and (min-width: 1000px){.changepc {display:block;}
         .changemobile {display:none;}}
         .project-href-asdf {transition:color .3s ease-in-out; display:inline;}
         .project-href-asdf:hover {color:#000!important;}
       
         .title-page {margin-bottom:50px;}
         .moblib {display:none;}
         .team-pic-page {
    grid-template-columns: repeat(4, 110px);
    grid-gap:15px;
   width:500px;}
         a {margin-bottom:0;}
         .team-pic-page div {padding-top:32px;}
         .team-page h4 {font-size:37px;}
         @media screen and (max-width: 1850px){ .team-page h4 {font-size: clamp(1.9rem, 1.5vw, 37px);}
         .title-page {margin-bottom:140px;}
         .team-pic-page div {padding-top:26px;}}
         @media screen and (max-width: 1190px){ .menu-page {background-position:50% 50%;}  .title-page {margin-bottom:auto;}}
         @media screen and (max-width: 1100px){
            .menu-page {background-position:50% 50%;}
            .title-page {margin-bottom:auto;}
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

@media screen and (max-width: 650px) {
.vidb {
    height: auto;
    width:100%;
}
.menu-page {background-position:50% 50%;}
.changemobile {
    margin-bottom: 16px!important;
}
}

@media screen and (max-width: 510px){
.pclib {
    display:none;
}
.moblib
{display:block; width:100%; height:auto;}
.menu-page {    background-image: linear-gradient(
            rgba(0, 11, 41, 0.55), 
            rgba(0, 11, 41, 0.55)
            ),url(img/mob-hero-bioco.jpg)!important;}
}

@media screen and (max-width: 359px){ .team-works a {font-size:14px!important; }}
@media screen and (max-width: 350px){ .g-recaptcha {width:200px!important; }}

@media screen and (min-width: 1850px){.team-works {padding-top:80px;}}

.mobile-menu {background:transparent; }
.menu-icon {z-index:10000;}
.sidenav {top:0;}
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
         <div class="menu-page" style="background-image:url(img/ad-hero-bioco-200.jpg);">
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
                  <a href="/#rolunk" onclick="closeNav()" id="m-c" class="animated">Rólunk</a>
                  <a href="/#csapatunk" onclick="closeNav()" id="m-c-2" class="animated-2">Csapatunk</a>
                  <a href="/#munkaink" onclick="closeNav()" id="m-c-3" class="animated-3">Munkáink</a>
                  <a href="/karrier" onclick="closeNav()" id="m-c-4" class="animated-4">Karrier</a>
                  <a href="#kapcsolat" onclick="closeNav()" id="m-c-5" class="animated-5">Kapcsolat</a>
                  <a href="#" onclick="closeNav()" id="m-c-6" class="animated-6" style="display:none;">Ingyenes
                  próbalencse</a>
               </div>
            </div>
            <div class="menu-top">
               <div class="top-right-menu">
                  <a href="/karrier">Karrier</a>
                  <a href="#kapcsolat" class="scroller">Kapcsolat</a>
               </div>
            </div>
            <div class="adamic-hero">
               <div class="menu-side">
                  <a href="/" class="adamic-logo"><img src="img/logo-white-a.png" class="logo"></a>
                  <div class="side-menu">
                     <a href="/#rolunk">rólunk</a>
                     <a href="/#csapatunk">csapat</a>
                     <a href="/#munkak">munkák</a>
                  </div>
                  <img src="img/down-logo-white.png" class="another-logo">
               </div>
               <div class="adamic-movie">
                  <div class="title-page">
                     <h1 id="firstLine">BIOCO MULTIVITAMIN 200% LANDING OLDAL</h1>
                     <span id="longLine" class="titleline"></span>
                     <span class="mobline"></span>
                     <p id="p-line">PÖRÖGJ MINDEN NAP 200%-ON</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="yellow">
            <div class="yellow-content">
               <h2 class="yellow-h">Összefoglaló</h2>
               <p class="yellow-p">
               A BioCo-nak social media tartalmak gyártása és PPC kampányok tervezése mellett landing oldalakat is tervezünk. Legutóbb azzal bíztak meg minket, hogy mutassuk be legújabb terméküket, a Multivitamin 200% étrend-kiegészítőt.
                  </p>
                  <div class="manager-page">
                     <div>
                        <p>Kővári Bálint<br>
                        </p><p class="pm">Projekt Manager</p>
                     </div>
                     <img src="img/people/kovari.png" class="employee" style="padding-top:0; width:100px; height:100px;" alt="Projekt Manager fotó">
                  </div>
            </div>
         </div>
         <div class="video-page">
            <img src="img/ad-video-poster-bioco-200.jpg" class="vidb pclib" alt="Bioco projekt lépek" style="cursor:auto">
            <img src="img/ad-video-poster-bioco-200.jpg" class="vidb moblib" alt="Bioco projekt képek" style="cursor:auto">
         </div>
         <div class="team-works">
            <div class="results-adamic">
               <div class="results-page">
                  <h4>
                     Feladatunk:
                  </h4>
                  <p>&bull;    Kreatív koncepció tervezése</p>
                  <p>&bull;   Szövegírás</p>
                  <p>&bull; Kreatív gyártás</p>
                  <p>&bull;    Webfejlesztés</p>
                 
                  
               </div>
            </div>
            <div class="right-page">
               <div class="data-page">
                  <div class="client-page">
                     <h4>
                        Márka
                     </h4>
                     <p>BioCo Magyarország Kft.</p>
                  </div>
                  <div class="brand-page" style="display:none;">
                     <h4>
                        Márka
                     </h4>
                     <p>BioCo</p>
                  </div>
               </div>
            <a href="https://multivitamin.bioco.hu/" target="_blank" style="color:var(--yellow); font-weight:400;" class="project-href-asdf">multivitamin.bioco.hu</a> 
            </div>
         </div>
         <div class="team-adamic-back">
            <div class="team-adamic">
               <div class="team-page">
                  <h4>
                     Csapat:
                  </h4>
               </div>
               <div class="team-pic-page">
               <div>
                     <img src="img/people/nagy.jpg" class="employee" alt="Csapattag fotó">
                     <p>Kriszti</p>
                  </div>
                  
                  <div>
                     <img src="img/people/lippert.jpg" class="employee" alt="Csapattag fotó">
                     <p>Gábor</p>
                  </div>
                  <div>
                     <img src="img/people/zavodni3.jpg" class="employee" alt="Csapattag fotó">
                     <p>Réka</p>
                  </div>
                  <div>
                     <img src="img/people/safar.jpg" class="employee" alt="Csapattag fotó">
                     <p>Attila</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="black-part-background">
            <img src="img/bb-back.png" class="b-b-b"> 
            <div class="black-part">
               <h2 class="black-part-title b-h">
                  Mi volt az ügyfél<br>problémája?
               </h2>
               <p class="b-p">
               A BioCo legújabb zászlóshajója, a Multivitamin 200% étrend-kiegészítő bevezetésével bízott meg minket. Egyszerű, promóciós landing oldal helyett egy összetett, edukatív felület elkészítése mellett döntöttünk, az egészséges életmódra, és a kiegyensúlyozott táplálkozásra helyezve a hangsúlyt. 
               <br> <br>  
               A terméket elfoglalt emberek számára fejlesztették, akik a folyamatos rohanás miatt nem tudnak odafigyelni a kiegyensúlyozott táplálkozásra. Őket szólítjuk meg a weboldalon.
                 </p>
               <img src="img/ad-ref-box-bioco200-box-1.png">
            </div>
         </div>
         <div class="black-part-background gray-part">
            <div class="black-part">
               <h2 class="black-part-title b-h">
                  Milyen megoldást<br>hoztunk?		
               </h2>
               <p class="b-p">
               A “Pörögj minden nap 200%-on!” szlogen megfogalmazásakor az célközönség legégetőbb problémáját és a termék egyedi tulajdonságait (USP) kötöttük össze.
                  <br> <br>       
A készítmény minden összetevőjéből 200%-ot tartalmaz a standard multivitaminokhoz képest. Ezt tolmácsolják a dinamikus vizuális elemek is: a fehér háttér előtt látható színrobbanás a sok felszabadult energiát jelképezi, amelyet a termék elérhetővé tesz. Grafikailag ábrázoltuk, hogyan oldja meg a termék az önmagára időhiány miatt nem figyelő célközönség problémáját. Egyetlen kapszula annyi vitamint és nyomelemet tartalmaz, hogy azt szinte lehetetlen élelmiszerekből fedezni. 
               </p>
               <img src="img/big-ad-ref-box-bioco200-box-2.png" class="changepc">
               <img src="img/big-ad-ref-box-bioco200-box-2.png" class="changemobile">
            </div>
         </div>
         <div class="black-part-background gray-part another-part">
            <div class="black-part gray-part-two">
               <h2 class="black-part-title b-h">
                  Mi lett<br>a végeredmény?		
               </h2>
               <p class="b-p">Az egy hónapon át tartó Őszi Egészség Kihívás hatalmas sikert aratott az emberek körében. A kampány során több, mint 2,5 millió felhasználót értünk el, a kihívásokhoz érkező  kommentek és reakciók száma meghaladta a 30.000-et, a BioCo Facebook oldalának követábora pedig 18%-kal nőtt egy hónap alatt. 

<br> <br> <span style="font-weight:600;">Értékelés:</span>
"Az étrend-kiegészítő termékek kategóriájában gyakran kihívásokkal teli feladatok közé tartoznak a szövegírási munkák és a megfelelő kreatívok elkészítése. Nem volt ez máshogy legújabb hero termékünknél sem, a BioCo Multivitamin 200 % vitality-nál, melyhez szerettünk volna egy látványos, dinamikus arculatot és egy "pörgős" gondolatokkal, kreatív megjelenéssel teli microsite-ot is kialakítani.
<br><br>
Az Adamic csapata – szokásukhoz híven - rendkívül jó ötleteket és megoldásokat hozott a projekt folyamán és azt gondolom, hogy a végeredmény minden leendő vásárlónk tetszését is elnyeri majd. Ha BioCo Multivitamin nyelven szeretném megfogalmazni a végeredményt: az ügynökség 200 %-osan teljesített!
<br><br>
Köszönet érte."
<br><br>
                  

               </p>
               <img src="img/box3.png">
            </div>
         </div>
         <div class="close">
            <a href="/#munkak" class="comp">
            <img src="img/x.png" class="hovx">
            </a>
            <a href="/#munkaink" class="mob">
               <img src="img/x.png" class="hovx">
               </a>
            <p>Vissza a munkákhoz</p>
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
         elementTwo.classList.add('cmn-line');
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
         

         const links = document.querySelectorAll(".scroller");

for (const link of links) {
  link.addEventListener("click", clickHandler);
}

function clickHandler(e) {
  e.preventDefault();
  const href = this.getAttribute("href");
  const offsetTop = document.querySelector(href).offsetTop;

  scroll({
    top: offsetTop,
    behavior: "smooth"
  });
}
  

      </script>
   </body>
</html>