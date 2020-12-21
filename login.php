<?php
		$host="localhost";
		$uname="root";
		$pas="";
		$db_name="cman";
		$tbl_name="members";
		
		$conn = new mysqli($host,$uname,$pas,$db_name);
		if ($conn->connect_errno) {
			echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
		} else {
			header('location:members/dashboard.php');
		}

		
		//@mysql_connect("$host","$uname","$pas") or die ("cannot connect");
		//@mysql_select_db("$db_name") or die ("cannot select db");
		?>
<?php

if (isset($_POST['login'])){

$username=$_POST['username'];
$password=$_POST['password'];

$sql = "select * from members where mobile='$username' and password='$password'";
echo "<br>" . $sql;
$query = $conn->query($sql);

$count = mysqli_num_rows($query);
if ($count > 0){
session_start();
$_SESSION['id']=$row['id'];
header('location:members/dashboard.php');

}else{
	header('location:members/dashboard.php');
}

/*
//$login_query=mysqli_query($conn,"select * from members where mobile='$username' and password='$password'");


	if($count > 0){
		while($dados = $query->mysqli_fetch_array()){
		session_start();
		$_SESSION['id']=$row['id'];
		echo $_SESSION['id'];
		header('location:members/dashboard.php');
		}else{
		
		header('location:members/dashboard.php');
		}
}
/*
$count=@mysql_num_rows($login_query);
$row=@mysql_fetch_array($login_query);


if ($count > 0){
session_start();
$_SESSION['id']=$row['id'];
header('location:members/dashboard.php');

}else{
	header('location:members/dashboard.php');
}
*/
}

?>