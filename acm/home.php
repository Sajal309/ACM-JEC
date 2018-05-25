
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
Home
</title>

<style>
 #links li {
	 font-family: 'Roboto', sans-serif;
	 margin:10px; 
	 float:left;
	 width:150px;
	 margin-left:-29px;
	 
	 color:#20bbac;
 
 }
 #links li a {
 color:#20bbac;
 } 
 #contact li{
	 font-family: 'Roboto', sans-serif;
	 margin:5px;
	 color:rgb(170,170,170);
	 
	 
 }
 #contact li span{
	 color:rgb(200,200,200);
 }
 
 

@media screen and (min-width: 800px) {
#img1{
width:100%;	

}
#open{
	display:none;
}
#header{
  height:70px; 
  
}
#logo{
 width:180px;
 
}
#bg{
	height:400px;
	background-size:100%;
}
#shadow{
	height:400px;
}
#title{
	left:30%; top:30%; font-size:25px;
}
#chapter{
	font-size:46px;
}
}
@media screen and (max-width:800px){
	
	#head{
		display:none;
	}
	
	#info{
		display:none;
	}
	#img1{
		width:100%;
	}
	#header{
		height:60px;
	}
	#logo{
		width:130px;
	}
	
	#bg{
		height:200px;
		background-size:100%;
	}
	#shadow{
		height:200px;
	}
	
#title{
	left:6%; top:20%; font-size:13px;
}

#chapter{
	font-size:20px;
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

#platform{
	width:130px; margin-left:30px; margin-top:50px;float:left
}
#header1 li {
	display:inline;
	
	list-style-type:none;
	margin:40px; 
	font-family: 'Open Sans Condensed', sans-serif;
	font-size:35px;
	
	
	
}
#header1 li a{
	color:#20bbac;
	
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
  <li><a id="active" href="home.php"><span style="">Home</span></a></li>
<li><a href="about.php"><span>   About </a></span></li>
<li><a href="contact.php"><span>   Contact </a></span></li>
<li><a href="team.php"><span>   Team </a></span></li>
<li><a href="events.php"><span>  Events </a></span></li>
</div>
  </center>
  
</div>	


<div id="header" style="display:block; background:#20bbac; width:100%;">

<span style="font-size:30px;margin-top:2px;position:absolute;left:90%; height:5px;cursor:pointer" onclick="openA()"><h4  id="open" style="font-size:30px;color:rgb(250,250,250);">&#9776;</h4></span>

<img id="logo"  src="acm.gif" style=" float:left;">

<div id="head" style="position:absolute; padding:2px; min-width:300px;">
<li><a id="active" href="home.php"><span>   Home     </a></span></li>
<li><a href="about.php"><span>   About </a></span></li>
<li><a href="contact.php"><span>   Contact </a></span></li>
<li><a href="team.php"><span>   Team </a></span></li>
<li><a href="events.php"><span>  Events </a></span></li>
</div>
</div>

</center>



<div id="bg" style="display:block; width:100%;background:url('bg2.jpg');  background-size:150%;    ">
<div id="shadow" style="display:block; position:absolute; opacity:0.6; background:linear-gradient(to left, rgb(0,30,30), rgb(120,120,120)); width:100%; ">

</div>

<span id="title" style="position:absolute; color:white; padding:17px;  width:50%; min-width:270px; opacity:0.8;  
font-family: 'Merriweather', serif; ">

ACM, the world's largest educational and scientific 
computing society, dellivers resources that advance 
computing as a science and a profession.</span>
</div>



<div style="display:block;  width:100%;  background:white; padding-bottom:100px; ">

<center>
<h2 id="chapter" style="color:rgb(50,50,55);  opacity:0.9; font-weight:bold;font-family: 'Quicksand', sans-serif; margin:40px; "><span style="color:#20bbac;font-family: 'Anton', sans-serif; "> ACM </span> Students Chapter</h2>

<div class="col-sm-5" style="margin-left:5%; margin-top:40px;;padding-bottom:10px;; min-height:340px; box-shadow: 5px 10px 18px #888888;
">
 <span style="font-size:30px; color:black; font-weight:bold; font-family: 'Roboto', sans-serif;  ">#Introduction</span>

<p align="left" style="color:rgb(0,0,0); margin-top:40px; padding-left:40px; font-size:15px;
font-family: 'Roboto', sans-serif; ">
The JEC Jabalpur ACM Student Chapter is an official student body incepted in 2018 , JEC Jabalpur. The chapter aims at uniting the computing fraternity at JEC Jabalpur under one tag and allowing the students to learn together and share their knowledge to cater the interests of the individuals as well as the institute as a whole. The chapter organizes a number of events including programming contests, talks by renowned speakers, workshops etc. Which give the students an exposure to the competitive computing world as well as allow them to understand the advancements going on in the computing sphere worldwide.
</p>
</div>

<div class="col-sm-5" style="margin-left:5%; margin-top:40px;padding-bottom:10px;;  min-height:340px;	box-shadow: 5px 10px 18px #888888;
">
 <span style="font-size:30px; color:black; font-weight:bold; font-family: 'Roboto', sans-serif;  ">#Latest Event</span>
<img src="event.png" style="width:200px; float:left;margin:40px; margin-bottom:10px;">
<p align="left" style="color:rgb(0,0,0); margin-top:40px; padding-left:40px; font-size:15px;
font-family: 'Roboto', sans-serif; ">
This is a coding competition organized by acm team of JEC Jabalpur ,going to be organized  on 29th june 2018 . The competition is open and any one can take part in it. 
In this event students will given a problem about the data analysis and they would have to solve the problem in efficient way and to show up in a viable form.
They can choose any programming language and any user interface platform to build the application. Students can form group of maximum of 3. Top 5 group will select for the further round which is going to held in IIT delhi. 
Also the top three team will given prize money upto 10000 rupees.
</p>
</div>



<div class="col-sm-10" style="background:rgb(30,30,30); padding:10px;width:100%; margin-bottom:-100px; margin-top:100px;">
<center>

<div class="col-sm-6" style=" ;margin-top:100px;;padding:0; 
">
<br/>
<iframe allow="autoplay=1; encrypted-media" allowfullscreen=""  style="min-height:250px; width:70%; min-width:300px;"frameborder="0" src="https://www.youtube.com/embed/gqc_rWc3wGI?playlist=gqc_rWc3wGI&amp;loop=1"></iframe><br />
</div>

<div class="col-sm-6" style="margin-top:100px;margin-bottom:100px; padding:0; 
"><br/>

<iframe allow="autoplay; encrypted-media" allowfullscreen="" frameborder="0" style="min-height:250px;width:70%; min-width:300px;" src="https://www.youtube.com/embed/j_t_nXzm100?playlist=j_t_nXzm100&amp;loop=1" ></iframe></p></div>



</div>






<div class="col-sm-10" style="background:rgb(20,20,20); width:100%; margin-bottom:-100px; margin-top:100px;">
<div style="display:block; width:100%;">
<div class="col-sm-3">
<br/><br/>
<h3 style="color:rgb(250,250,250); font-size:17px; font-weight:bold;  float:left; margin-left:20px;">Get updates</h3>
<input type="text" class="form-control" style="max-width:220px; height:40px;" placeholder="Enter your email"><br/>
<button class="btn btn-default" style="width:220px; border:none; background:rgb(20,80,80); border-radius:1px; height:45px;color:white">Submit </button>
</div>	
<div class="col-sm-4"style=" " >
<br/><br/>
<h3 style="color:rgb(250,250,250); font-size:17px; font-weight:bold;  float:left; margin-left:20px;">Useful Links</h3><div id="links" style="width:30%;  min-width:100px;height:250px; ">
<br/><br/>
<br/>
<li><a href="about.php" >About us</a></li>
<li><a href="contact.php" >Contact us </a></li>
<li><a href="team.php" >Our Team</a></li>

</div>
</div>
<div class="col-sm-4"style=" " >
<br/><br/>
<h3 style="color:rgb(250,250,250); font-size:17px; font-weight:bold;  float:left; margin-left:20px;">ACM </h3><div id="links" style="width:30%;  min-width:100px;height:250px; ">
<br/><br/>
<br/>
<li>© ACM.JEC </li>
<li>All rights reserved</li>
<li><a href="team.php" >Privacy Policy</a></li>

</div>
		</div>
		
		</div>
		</div>
		
		
		
		

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