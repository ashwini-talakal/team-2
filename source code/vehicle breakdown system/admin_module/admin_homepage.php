<html>
	<head>
		<title>Admin Home</title>
		
		<style>
		* {box-sizing:border-box}

.slideshow-container {
  max-width: 900px;
  max-height: 250px;
  position: relative;
  margin: auto;
}

.mySlides {
  display: none;
}

.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

img {vertical-align: middle;}
img {horizontal-align: middle;}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

</style>
	</head>
	<body bgcolor="#C4C7F1">
	<center><h1>ON ROAD VEHICLE BREAKDOWN SYSTEM</h1></center>
	<marquee dir="left"><h3><font color=maroon>On Road Vehicle Breakdown System is going to be a good solution for the people who seek 
	help in the remote locations with mechanical issues of their vehicle. Users of the On Road Vehicle 
	Breakdown System will be the registered public and they be getting connected with the particular mechanic 
	through the trustworthy On Road Vehicle Breakdown System. Because only the legally and approved mechanics 
	are enlisted in the On Road Vehicle Breakdown system. Also they are under monitoring by the system 
	for not charging any extra service fee from the users</font></h3></marquee></br></br>
	
	<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">Module 1</a></li>
  <li><a href="#news">Module 2</a></li>
  <li><a href="#contact">About</a></li>
  <li><a href="#about">Logout</a></li>
</ul>
	
	</br></br></br>
	<!----<div class="slideshow-container">-->

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <center><img src="backimg.jpg" height=550 width=800 align=center style="width:70%" "height:15%"></center>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <center><img src="backimg2.jpg" height=550 width=800 style="width:70%" "height:15%"></center>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <center><img src="img3.jpg" height=550 width=800 style="width:70%" "height:15%"></center>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <center><img src="shop_image.jpg" height=550 width=800 style="width:70%" "height:15%"></center>
  </div> 

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
</div>

<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
</script>
</br></br><h3>
<h3><font color="#004E6C">
* The main objective is to provide a better service
 and to make the process easily and finally appointing a mechanic quickly.</br>
* Proposed system is accessed by three entities namely, Admin, Shop and User.</br> 
* A mechanic can perform task such as viewing request received from users and can also 
 send feedback to the admin.</br>
* User can send a request and can appoint a mechanic on respective date.</br>
 </font>
</br></br></br>
<center>Developed By: Ashwini Talakal and Varsha Meti</center></h3>
	</body>
</html>