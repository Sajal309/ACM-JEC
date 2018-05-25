
<?php
		 
		 $con =  mysqli_connect("localhost" , "root" , "") or die("connect failed" .mysql_error());	
          mysqli_select_db($con,"user") or die (mysql_error());

?>
<form method="post" action="team_upload.php" enctype="multipart/form-data">

<input type="text" placeholder="name" Name="a">
<input type="file" title="choose"  name="b" >
<input type="text" placeholder="post" Name="c">
<input type="text" placeholder="details" Name="d">
<input type="text" placeholder="ingtagram" Name="e">
<input type="text" placeholder="facebook" Name="f">
<input type="text" placeholder="gmail" Name="g">

<input type="submit" Value="upload" >

</form>
<?php 
if(!empty($_POST["a"])){

		$name = $_FILES['b'];
		$target = "".basename($_FILES['b']['name']);
		move_uploaded_file($_FILES['b']['tmp_name'],$target);

			$q = "INSERT  INTO  team(name,image,post,details,instagram,facebook,gmail) VALUES ('$_POST[a]','$target','$_POST[c]','$_POST[d]','$_POST[e]','$_POST[f]','$_POST[g]')";
			if($r = mysqli_query($con,$q)){
			echo "uploaded";
		 }
      }


?>
