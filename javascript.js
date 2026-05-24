var username=document.getElementBydonor_ID("username");
var fullname = document.getElementBydonor_ID("fullname");
var outletname = document.getElementBydonor_ID("outletname");
var registrationnumber = document.getElementBydonor_ID("registrationnumber");
var email = document.getElementBydonor_ID("email");
var contact_num = document.getElementBydonor_ID("contact_num");
var donoraddress = document.getElementBydonor_ID("donoraddress");
var showPass1 = document.getElementBydonor_ID("password1");
var showPass2 = document.getElementBydonor_ID("password2");
var state = document.getElementBydonor_ID("state");
var postcode = document.getElementBydonor_ID("postcode");
var error = document.getElementBydonor_ID("errormsg");

function check(){
	if(username.value == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}
	if(fullname.value == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}
	if(outletname.value == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}
	if(registrationnumber.checked == "" && female.checked == "" && other.checked == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}
	if(email.value == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}
	if(contact_num.value == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}
	if(donoraddress.value == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}
	if(showPass1.value == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}
	if(showPass1.value == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}
	if(showPass2.value == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}
	if(state.value == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}
	if(postcode.value == ""){
		alert('Please Fill In All The Fields Given.');
		return false;}	
	if(showPass1.value != showPass2.value)
		{alert
			('Please make sure both your passwords are the same');
		return false;}
		}

function showPassword1(){
	var showPass1 = document.getElementBydonor_ID("password1");
		if (showPass1.type == "password"){
			showPass1.type = "text";
		}
		else 	
			showPass1.type = "password";
}
function showPassword2(){
	var showPass2 = document.getElementBydonor_ID("password2");
		if (showPass2.type == "password"){
			showPass2.type = "text";
		}
		else 	
			showPass2.type = "password";
}

function confirmPassword(){
	if(showPass1.value != showPass2.value){
		error.innerHTML="Please make sure both your passwords are the same."
	}
	else{error.innerHTML=""}
}

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}