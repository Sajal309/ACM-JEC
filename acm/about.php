
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans+Condensed:300|Quicksand|Merriweather" rel="stylesheet">
</head>
<title>
About us
</title>

<style>
@media screen and (min-width: 800px) {

#open{
	display:none;
}
#header{
  height:70px; 
  
}
#logo{
 width:180px;
 
}
}
@media screen and (max-width:800px){
	
	#head{
		display:none;
	}
	
	
	#header{
		height:60px;
	}
	#logo{
		width:130px;
	}
	
	
}
#head li{
	display:inline;
}
#head{
	margin-top:15px;
}
#head li a {
   position:relative;
	color:rgb(250,250,250);
	margin-left:30px;
	font-size:20px;
	
	font-family: 'Open Sans Condensed', sans-serif;
	text-decoration:none;
}
#head li a:hover{
font-size:20px;
color:white; 
opacity:1;
}

	
a:hover{
	text-decoration:none;
}
.r {
	
    width: 0px;
    position: fixed;
  list-style-type:none;
    top: 0%;
    left: 0;
    background-color: ;
    overflow-x: hidden;
	overflow-y: auto;

height:600px;    transition: 0.5s;
   
}
#r li span {
	display:inline;
	margin:25px;
	float:left;
	list-style-type:none;
   font-family: 'Open Sans Condensed', sans-serif;
	font-size:35px
	
}
#r li a{

	color:white;
	
}
#active{
	font-weight:bold;
}
</style>

<body style="background:white; background-size:100% 100%"> 



<div id="r" style="z-index:2;background:#20bbac; " class="r">
 <a href="javascript:void(0)" class="closebtn" onclick="closeA()"><h1 style="font-size:50px;color:rgb(250,250,250);float:left; margin-left:40px; ">&times;</h1></a>
<center>
<div style="display:block; width:50%; min-width:140px; 	">
  <li><a href="home.php"><span style="">Home</span></a></li>
<li><a id="active" href="about.php"><span>   About </a></span></li>
<li><a href="contact.php"><span>   Contact </a></span></li>
<li><a href="team.php"><span>   Team </a></span></li>
<li><a href="events.php"><span>  Events </a></span></li>
</div>
  </center>
  
</div>	


<div id="header" style="display:block; background:#20bbac; width:100%;">

<span style="font-size:30px;margin-top:2px;position:absolute;left:90%; height:5px;cursor:pointer" onclick="openA()"><h4  id="open" style="font-size:30px;color:rgb(250,250,250);">&#9776;</h4></span>

<img id="logo"  src="acm.png" style=" float:left;">

<div id="head" style="position:absolute; padding:2px; min-width:300px;">
<li><a href="home.php"><span>   Home     </a></span></li>
<li><a id="active"  href="about.php"><span>   About </a></span></li>
<li><a href="contact.php"><span>   Contact </a></span></li>
<li><a href="team.php"><span>   Team </a></span></li>
<li><a href="events.php"><span>  Events </a></span></li>
</div>
</div>
</center>

<center>
<h3 style="font-size:20px; font-family: 'Quicksand', sans-serif; font-weight:bold; margin-top:20px;color:rgb(10,10,10); ">Welcome to <span style="color:#20bbac;;">ACM </span>JEC.</h3>

<img src="jec.jpg" style="width:40%; min-width:300px; border-radius:4px; margin-top:50px; ">

<p align="left" style="color:rgb(0,0,0); margin-top:40px; padding-left:10px; width:70%; min-width:300px; font-size:15px;
font-family: 'Roboto', sans-serif; ">
The IIIT Allahabad ACM Student Chapter is an official student body incepted in 2018 , IIIT Allahabad. The chapter aims at uniting the computing fraternity at IIIT Allahabad under one tag and allowing the students to learn together and share their knowledge to cater the interests of the individuals as well as the institute as a whole. The chapter organizes a number of events including programming contests, talks by renowned speakers, workshops etc. Which give the students an exposure to the competitive computing world as well as allow them to understand the advancements going on in the computing sphere worldwide.
</p>


</body>
<script>
window.onload = move();
function  move(){
	
	var x = document.getElementById('head');
	var pos = 30;
	
	
	var id = setInterval(frame,20);
	function frame(){
		if(pos == 60){
			
	
			clearInterval(id);
		}
		else{
			
			if(pos > 36 && pos < 45){
				pos+=2;
			}
			else if(pos > 45){
				pos+=1;
			}
			else{
				pos+=4;
			}
			
			x.style.left=pos+'%';
		}
	}

}

function openA() {
    document.getElementById("r").style.width = "340px";
}

function closeA() {
    document.getElementById("r").style.width = "0";
}
</script>
</html>