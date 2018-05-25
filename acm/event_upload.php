<?php
	
		 $con =  mysqli_connect("localhost" , "root" , "") or die("connect failed" .mysqli_error());	
          mysqli_select_db($con,"user") or die (mysqli_error());

?>
<form method="post" action="event_upload.php" enctype="multipart/form-data">

<input type="text" placeholder="title" Name="title">
<input type="text" placeholder="descr" Name="descr">
<input type="file"  Name="file">
<input type="text" placeholder="venue" Name="venue">
<input type="text" placeholder="timing" Name="timing">

<input type="submit" Value="upload" name="submit"	>

</form>
<?php 
if(isset($_POST["submit"])){

		$file = "".basename($_FILES['file']['name']);
		move_uploaded_file($_FILES['file']['tmp_name'],$file);

		  $title = $_POST['title'];
		  $descr =$_POST['descr'];
		  $venue = $_POST['venue'];
		  $timing = $_POST['timing'];
		  
			$q = "INSERT  INTO  a_event(title,file,descr,venue,time) VALUES ('$title','$file','$descr','$venue','$timing')";
			if($r = mysqli_query($con,$q)){
			echo "uploaded";
		 }
      }


?>
