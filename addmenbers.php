<!DOCTYPE html>
<?php

    include_once('db.php');
	
?>
<html>
<head>
    <title>Add Menbers</title>
</head>
<body>
<?php
   
    if(isset($_POST['submit'])){
		$first_name= $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$phone_number = $_POST['phone_number'];
		$comment =$_POST['comment'];
		$query = "INSERT INTO menbers(first_name,last_name,phone_number,comment) Values('$first_name','$last_name','$phone_number','$comment')"; 
		$result = $conn->query($query);
	}

?>
<div class="container">
     <div class="col-lg-12">
          <img src="images/website-demo5.jpg"/>






     </div>
</div>
<form action="addmenbers.php" method="post">
      <b>Add new Menber</b>
	  <p>First Name:<input type="text" name="first_name" value=""/></p>
	  <p>Last Name:<input type="text" name="last_name" value=""/></p>
	  <p>Phone Number:<input type="number" name="phone_number" value=""/></p>
	  <p><textarea input="text" name="comment" rows="10" col="20"></textarea></p>
	  <p>
	  <input type="submit" name="submit" value="send"/>
	  </p>
	  
</form>
      <?php
          $query = "SELECT * FROM menbers";
		  $result = $conn->query($query);
          if($result->num_rows > 0){
			  while($row=$result->fetch_assoc()){
				  echo $row['id']."<br>";
				  echo $row['first_name']."<br>";
				  echo $row['last_name']."<br>";
				  echo $row['phone_number']."<br>";
				  echo $row['comment']."<br>";
				  echo $row['timestamp']."<br>";
				  
			  }
			  
		  }



      ?>
</body>
</html>