

 const menu = document.querySelector(".menu");
 const menuMain = menu.querySelector(".menu-main");
 const goBack = menu.querySelector(".go-back");
 const menuTrigger = document.querySelector(".mobile-menu-trigger");
 const closeMenu = menu.querySelector(".mobile-menu-close");
 let subMenu;
 menuMain.addEventListener("click", (e) =>{
 	if(!menu.classList.contains("active")){
 		return;
 	}
   if(e.target.closest(".menu-item-has-children")){
   	 const hasChildren = e.target.closest(".menu-item-has-children");
      showSubMenu(hasChildren);
   }
 });
 goBack.addEventListener("click",() =>{
 	 hideSubMenu();
 })
 menuTrigger.addEventListener("click",() =>{
 	 toggleMenu();
 })
 closeMenu.addEventListener("click",() =>{
 	 toggleMenu();
 })
 document.querySelector(".menu-overlay").addEventListener("click",() =>{
 	toggleMenu();
 })
 function toggleMenu(){
 	menu.classList.toggle("active");
 	document.querySelector(".menu-overlay").classList.toggle("active");
 }
 function showSubMenu(hasChildren){
    subMenu = hasChildren.querySelector(".sub-menu");
    subMenu.classList.add("active");
    subMenu.style.animation = "slideLeft 0.5s ease forwards";
    const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
    menu.querySelector(".current-menu-title").innerHTML=menuTitle;
    menu.querySelector(".mobile-menu-head").classList.add("active");
 }

 function  hideSubMenu(){  
    subMenu.style.animation = "slideRight 0.5s ease forwards";
    setTimeout(() =>{
       subMenu.classList.remove("active");	
    },300); 
    menu.querySelector(".current-menu-title").innerHTML="";
    menu.querySelector(".mobile-menu-head").classList.remove("active");
 }
 
 window.onresize = function(){
 	if(this.innerWidth >991){
 		if(menu.classList.contains("active")){
 			toggleMenu();
 		}

 	}
 }

function hideBanner(elem) {
   elem.parentElement.style.display = 'none';
}

function showAlert(type, message) {
   var alertBox = $('.alert-box');
   var messageBox = alertBox.find('.message');
   var closeBtn = alertBox.find('.close-btn');
   
   // set the alert box color based on the type of message
   switch (type) {
     case 'success':
       alertBox.addClass('success');
       break;
     case 'warning':
       alertBox.addClass('warning');
       break;
     case 'danger':
       alertBox.addClass('danger');
       break;
     default:
       break;
   }
   
   // set the message text
   messageBox.text(message);
   
   // show the alert box
   alertBox.fadeIn(500);
   
   // close the alert box when the close button is clicked
   closeBtn.on('click', function() {
     alertBox.fadeOut(500, function() {
       alertBox.removeClass('success warning danger');
     });
   });
   
   // hide the alert box after 5 seconds
   setTimeout(function() {
     alertBox.fadeOut(500, function() {
       alertBox.removeClass('success warning danger');
     });
   }, 5000);
 }
 

$(document).ready(function(){
   $('#myForm').submit(function(event){
     event.preventDefault();
     // Get form data
     var formData = $(this).serialize();
   //   console.log(formData)
   //   Submit form data using Ajax
   $.ajax({
      type: 'POST',
      url: 'store_form_data.php',
      data: formData,
      success: function(response) {
         
        if(response == "1") {
           showAlert('success', 'Congratulations! Your form has been submitted successfully! Our team will contact you shortly.');
           $('form')[0].reset();
         }else if(response=="0"){
         showAlert('danger', 'Some Error occoured');
        }
         else if(response == "All fields are required.") {
           showAlert('danger', 'All fields are required.');
        } else if(response == "Name must be greater than 3 characters.") {
           showAlert('danger', 'Name must be greater than 3 characters.');
        } else if(response == "Invalid email format.") {
           showAlert('danger', 'Invalid email format.');
        } else if(response == "Phone number must contain only numeric values.") {
           showAlert('danger', 'Phone number must contain only numeric values.');
        } else if(response == "Organization name must be greater than 2 characters.") {
           showAlert('danger', 'Organization name must be greater than 2 characters.');
        } else if(response == "Message must be greater than 5 characters.") {
           showAlert('danger', 'Message must be greater than 5 characters.');
        } else {
           showAlert('danger', 'There was an error submitting the form. Please try again later.');
        }
      }
   });
   });
 });
 


 