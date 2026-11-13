
 
        function openDepartment(evt, depName) {
            // Declare all variables
            var i, tabcontent, tablinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(depName).style.display = "block";
            evt.currentTarget.className += " active";
        }


        document.getElementById("defaultOpen").click();
      

        function openDepartmentM(evt, depName) {
            // Declare all variables
            var i, tabcontentM, moblinks;

            // Get all elements with class="tabcontent" and hide them
            tabcontentM = document.getElementsByClassName("tabcontentM");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }

            // Get all elements with class="tablinks" and remove the class "active"
            moblinks = document.getElementsByClassName("moblinks");
            for (i = 0; i < moblinks.length; i++) {
                moblinks[i].className = moblinks[i].className.replace(" active", "");
            }

            // Show the current tab, and add an "active" class to the button that opened the tab
            document.getElementById(depName).style.display = "block";
            evt.currentTarget.className += " active";
        }


        document.getElementById("defaultOpenM").classList.add("active");
   
        function scrollToTop(x) {
            const scrollTab = document.getElementById(x);
            scrollTab.scrollIntoView({ behavior: "auto", block: "start" });
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


 
        function openNav() {
            var navIcon = document.querySelector("#nav-icon1");
            var navfirst = document.querySelector("#m-c");
            var navsec = document.querySelector("#m-c-2");
            var navth = document.querySelector("#m-c-3");
            var navfour = document.querySelector("#m-c-4");
            var navfive = document.querySelector("#m-c-5");
            var navsix = document.querySelector("#m-c-6");
             var navseven = document.querySelector("#m-c-7");
            var mySidenav = document.querySelector("#mySidenav");
            navIcon.classList.toggle("open");
            navfirst.classList.toggle("fadeInDown");
            navsec.classList.toggle("fadeInDown");
            navth.classList.toggle("fadeInDown");
            navfour.classList.toggle("fadeInDown");
            navfive.classList.toggle("fadeInDown");
            navsix.classList.toggle("fadeInDown");
            navseven.classList.toggle("fadeInDown");
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
            var navseven = document.querySelector("#m-c-7");
            var mySidenav = document.querySelector("#mySidenav");
            navIcon.classList.remove("open");
            navfirst.classList.remove("fadeInDown");
            navsec.classList.remove("fadeInDown");
            navth.classList.remove("fadeInDown");
            navfour.classList.remove("fadeInDown");
            navfive.classList.remove("fadeInDown");
            navsix.classList.remove("fadeInDown");
            navseven.classList.remove("fadeInDown");
            mySidenav.classList.remove("open-sidemenu");
          }


       