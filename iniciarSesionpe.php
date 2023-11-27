<?php header('Access-Control-Allow-Origin: *'); header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method"); header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE"); header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$db_host='db4free.net'; 
$db_usuario='fezgugel'; 
$db_password='dbesmejor2k'; 
$db_nombre = 'aritmetica1';

//shell_exec("ssh -f -L localhost:3307:localhost:3306 qwerty@70.35.200.221 sleep 60 >> logfile");  
$db = mysqli_connect("localhost", "qwerty", "qwerty2k2", "cursofg2022", 3306);

//dddssdd
//$username = $_GET['login'];
//$email = $_POST['editEmail'];
//$password = $_GET['senha'];

$username = $_POST['login'];
//$password = mysqli_real_escape_string($db, $_GET['password']);
$password = $_POST['password'];
$quienes = $_POST['quienes'];
//$tipouser = mysqli_real_escape_string($db, $_GET['tipouser']);
//$seleck =mysqli_real_escape_string($db, $_GET['seleck']);

//$password = md5($password);
//$wField = $_POST['wField'];
//$wFieldcondition = $_POST['wFieldcondition'];

//$sql = "update users set username = '".$username."', email='".$email."', password='".$password."' where ".$wField."='".$wFieldcondition."'";
//$username = $_POST['editUsername'];
//$email = $_POST['editEmail'];

//$username = 'Jon';
$ci ='123';
$email ='world@';
//$password = '123';
$Colegio = 'abaroa';
$wFieldcondition = 'was';
$quien = 'usuario';
$usuario=$username;
/*
$sql = "select idis from IniciarSesion where  ".$quien."='".$usuario."'";
//echo $sql;
//echo "  ";
$result= $db->query($sql) ;

$seleck='idis';
//$fila = "3";
 while ($fila = $result->fetch_assoc()) {
        $idis = ($fila["idis"]);
		//printf
    }
*/
    /* liberar el conjunto de resultados */
    //$result->free();

//if($seleck=="idis"){
	/*while ($row = mysqli_fetch_assoc($result) )
	{
		$idis = "".$row['idis']."";
		echo "".$row['idis']."";
		
	}*/
	//}

$sql = "select * from ".$quienes." where usuario='".$username."' and password='".$password."'";
//echo $sql;
$result= $db->query($sql);

/*
if ($db->query($sql) === TRUE) {
    echo "aritmetica1.estudiantes created successfully";
} else {
    echo "Error creating database: " . $db->error;
}
*/

$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['1'];
$count = mysqli_num_rows($result); 

//echo $sql;

	if($count == 1){
	echo '1';
	header("Location: http://www.sitefg.com/");
	exit;
	}else{
	echo '0';
	}
	
	

//mysqli_close($connect);
$db->close();
//$result= mysqli_query($connect, $sql);



?>