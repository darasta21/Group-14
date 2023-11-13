window.onload = function(){

const menu = document.getElementById("menu")
const close = document.getElementById("close");
const sideBar = document.getElementById("sidebar");
const phoneUl = document.getElementById("phone__ul")
const header = document.getElementById("header");
const sticky = header.offsetTop;
const sections = Array.from(document.getElementsByTagName('section'));

menu.addEventListener('click', function(){

    sideBar.style.transform = "translateX(0)"
    sideBar.style.opacity = "1"
    sideBar.style.transition = "all 1s ease-in"
  
  
 });

close.addEventListener('click', function(){
 
    sideBar.style.transform = "translateX(-100%)"
    sideBar.style.opacity = "0"
    sideBar.style.transition = "all 1s ease-in"
  
});




phoneUl.addEventListener('click', function(){
  sideBar.style.transform = "translateX(-100%)"
  sideBar.style.opacity = "0"
  sideBar.style.transition = "all 1s ease-in"
});


//For my sticky header 

 //Onscroll function for my sticky header
 window.onscroll = function() {
    myFunction()
  };
  
    function myFunction() {
      if (window.scrollY > sticky) {
        header.classList.add("sticky__header", "text-white");

   
      } else {
        
        header.classList.remove("sticky__header", "text-white");
   
      }
  
    }


    // scrollReveal function for each page section

function scrollReveal(){
    for(let i = 0; i<sections.length; i++){
      if(sections[i].getBoundingClientRect().top < window.innerHeight){
        sections[i].classList.add('active')
      }
    }
  
  }
  
  scrollReveal();
  
  window.addEventListener('scroll', scrollReveal);


// Code when the window is clicked to hide menu
window.addEventListener('click', function(event){

  var target = event.target;

  //Check if the clicked element is outside the menu

  if (!phoneUl.contains(target)) {
    //Clicked outside the menu, dismiss it
    sideBar.style.transform = "translateX(-100%)"
    sideBar.style.opacity = "0"
    sideBar.style.transition = "all 1s ease-in"
  }
});

//Code to exclude the open menu button from the window so it does not prevent opening the menu
  menu.addEventListener('click', function(event) {

  event.stopPropagation(); //Prevent the click event from propagating to the window
  sideBar.style.transform = "translateX(0)"
  sideBar.style.opacity = "1"
  sideBar.style.transition = "all 1s ease-in"
 
});


//Scroll Active(Adds active class to menu item when clicked and during scrolling)

function scrollActive () {
  const scrollY = window.scrollY;

  sections.forEach(section => {
    const sectionHeight = section.offsetHeight;
    const sectionTop = section.offsetTop;
    const sectionBottom = sectionTop + sectionHeight //Derived since it is not a built in function
    

    let sectionId = section.getAttribute('id');
    
    console.log(sectionId)
    if (scrollY >= sectionTop - 1   && scrollY <= sectionBottom) {
      document.querySelector('.Header__ul ul li a[href *= ' + sectionId +']').classList.add('Active');
     

    }else {
      document.querySelector('.Header__ul ul li a[href *=' + sectionId +']').classList.remove('Active');
   


    }
    
  })

}

window.addEventListener('scroll', scrollActive);

}