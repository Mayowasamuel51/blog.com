 <?php 




$localhost = '127.0.0.1:3308';
$username = 'root';
$password = '';
$dataname  = 'blog.com';


$conn = mysqli_connect($localhost,$username,$password,$dataname);
if(!$conn){
	"error";
}else{
	return $conn;
}



