<?php
		 
		 $con =  mysqli_connect("localhost" , "root" , "") or die("connect failed" .mysqli_error());	
          mysqli_select_db($con, "user") or die (mysqli_error());

?>
	
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Roboto+Condensed:300" rel="stylesheet">
	  <title>
	  Team
	  </title>
<style>
body{
		padding:0px;
		margin:0px;
		background:rgb(250,240,230,0.8)
}
@media screen and (min-width:800px){
	#top{
		width:100%;
		height:70%;
		
	}
	#open{
		display:none;
	}
	#top2{
		width"25%;
		height:50%;
	}
	
	#top3{
		width:100%;
		height:70px;
	}
	
	#top4{
		width:100%;
		height:60px;
	}
	#logo{
		width:180px;
	}
	#head2{
	margin-left:30%;
	margin-right:30%;
	}
	#row{
		width:100%;
		display:inline-block;
	padding:50px;
		
	}
	#col{
	float:left;
	margin:50px;
	
	
	}
	#header2{
		padding-left:80px;
}

#header{
	height:70px;
}
}

@media screen and (max-width:800px){
	#top{
		width:100%;x
		background-width:100%;
		height:50%;
	}
	
#header{
	height:60px;
}
	#top2{
		display:none;
	}
	#top3{
		height:60px;
	}
	#top4{
		width:100%;
	height:60px;
	} 	
	#logo{
		width:100px;
	}
	#head{
		display:none;
	}
	#head2{
	margin-left:0%;
	margin-right:0%;
	}
	#col{
		float:left;
		margin:20px;
	}
#header2{
		padding-left:30px;
}		
}
#top{
	background-image:url("main.jpg");
	background-size:cover;
	background-width:50%;
	margin-left:auto;
	margin-right:auto;
	display:block;
	width:100%;

}
#top2{
	background:	rgb(150, 145, 140,0.5);
	height:50%;
	width:25%;
	
	margin:8% 5%;
	position:absolute;
	border-radius:50%;
	
}
#top3{

	display:block;
	width:100%;
	height:0px;
	background:rgb(32, 187, 172);
}

#top4{
	background:rgb(150, 145, 140,0.5);
	display:block;
	text-align:center;
	box-shadow: 5px 10px 18px #888888;
}

#logo{
	width:180px;
}

.text{
	color:rgb(250,240,230,0.7);
	font-size:26px;
	font-family: 'Open Sans Condensed', sans-serif;
	text-align:center;
	padding-top:30%;


	
}
.text2{
	color:rgb(250,240,230,0.8);
	font-size:30px;
	font-family: 'Open Sans Condensed', sans-serif;
	text-align:center;
	
}
#header2{
font-family: 'Roboto Condensed', sans-serif;
	font-size:17px;
	color:(20,20,20);
	float:left;

	
} 
#head2{
   margin-left:-20px;
	padding-top:15px;
	display:inline-block;
}

#box{
background:white;
display:inline-block; 	
width:100%;
text-align:center;
border-radius:0px 0px 5px 5px;
font-family: 'Open Sans Condensed', sans-serif;
padding:20px 0px;
}
#box2{

display:inline-block; 	
width:100%;
border-radius:5px 5px 0px 0px;
text-align:center;

font-family: 'Open Sans Condensed', sans-serif;
height:60%;
padding:20px;
}

#social{

    background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);
    opacity:0.95;display:inline-block; 	
width:100%;
text-align:center;
height:40%;
border-radius:0px 0px 5px 5px;
padding:20px;
font-family: 'Open Sans Condensed', sans-serif;
	
}

.container {
  position:relative;
}

.image {
 
 
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background:white;

  overflow: hidden;
  width: 100%;
  height: 101%;
  -webkit-transform:scale(0);
  transition: .2s ease;
}

.container:hover .overlay {
  transform: scale(1)
}

.hello {

  display:inline-block; 	
  width:100%;
    border-radius:5px;
  background:white;
  height:101%;
  text-align:center;
  font-family: 'Open Sans Condensed', sans-serif;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);

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

#active{
	font-weight:bold;
}


</style>

</head>
<body>




<div id="top">

<div id="top2">
<center><p class="text">One<span style="color:pink"> Team</span></p>
<p class="text2">One <span style="color:orange">Dream</span></p><center></div>




<div id="r" style="z-index:2;background:#20bbac; " class="r">
 <a href="javascript:void(0)" class="closebtn" onclick="closeA()"><h1 style="font-size:50px;color:rgb(250,250,250);float:left; margin-left:40px; ">&times;</h1></a>
<center>
<div style="display:block; width:50%; min-width:140px; 	">
  <li><a  href="home.php"><span style="">Home</span></a></li>
<li><a href="about.php"><span>   About </a></span></li>
<li><a href="contact.php"><span>   Contact </a></span></li>
<li><a id="active" href="team.php"><span>   Team </a></span></li>
<li><a href="events.php"><span>  Events </a></span></li>
</div>
  </center>
  
</div>	


<div id="header" style="display:block; background:#20bbac; width:100%;">

<span style="font-size:30px;margin-top:2px;position:absolute;left:90%; height:5px;cursor:pointer" onclick="openA()"><h4  id="open" style="font-size:30px;color:rgb(250,250,250);">&#9776;</h4></span>

<img id="logo"  src="acm.png" style="width:170px; float:left;">

<div id="head" style="position:absolute; padding:2px; min-width:300px;">
<li><a href="home.php"><span>   Home     </a></span></li>
<li><a href="about.php"><span>   About </a></span></li>
<li><a href="contact.php"><span>   Contact </a></span></li>
<li><a id="active" href="team.php"><span>   Team </a></span></li>
<li><a href="events.php"><span>  Events </a></span></li>
</div>
</div>




</div>

<center>
<div  style="" id="top4">

<div style="" id="head2" >

<p style="" id="header2">Developers</p>
<p style="" id="header2">Designers</p>
<p style="" id="header2">Leaders</p>
</div>

</div>
</center>


<center>

<div style="margin-left:-10px;">
<div id="row">
<?php 
$qry ="select * from team";
$result = mysqli_query($con,$qry);
$row = mysqli_num_rows($result);
while($row = mysqli_fetch_array($result))
{
?>

<div  id="col" style="width:300px; padding:0px; border-radius:5px;;display:border-box; box-shadow: 5px 10px 18px #888888;" class="container">
<div style="width:100%; height:200px; overflow:hidden;">

<img src="<?php echo $row['image'];?>" style="width:100%;border-radius:5px 5px 0px 0px;" class="image">
</div>
<div  id="box">
<p style="color:black;font-size:22px;font-style:bold;"><?php echo $row['name'];?></p> 

<p style="color:gray;font-size:16px;"><?php echo $row['post'];?></p>  

</div>
<div class="overlay"><div class="hello">
<div  id="box2" style="background:rgb(150,150,150,0.2)">
<p style="color:black;font-size:22px;font-style:bold;"><?php echo $row['name'];?></p> 
<p style="color:gray;font-size:16px;"><?php echo $row['details'];?></p>  

</div>
	
	<div id="social" style="">
	<div style="padding:20px">
	<a href="<?php echo $row['instagram'];?>"><img src="ins.png" style="width:30px;margin:10px"><a/>
	<a href="<?php echo $row['facebook'];?>"><img src="fb.png" style="width:30px;margin:10px"></a>
	<a href="<?php echo $row['gmail'];?>"><img src="google.png" style="width:30px;margin:10px"></a>
	</div>
	</div>
</div>

</div>

  </div>

<?php } ?>
</div>
  </center>
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

