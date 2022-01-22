<?php
//------------------------conect


$con =mysqli_connect("localhost","root","");
mysqli_select_db($con,"crudpdo");


//--------------------------insert

/*$con->query(" INSERT INTO pessoa(nome, telefone, email) VALUES 
('Dayaninha','785643','Daya@gmail.com')");*/

//--------------------------Delet/updade

//$con->query("DELETE FROM pessoa WHERE id ='6' "); 
//$con->query("UPDATE pessoa SET email ='1988paulosergio@gmail' WHERE id='2' ");
//$con->query("UPDATE pessoa SET nome ='Dayane Mariano' WHERE id='3' ");

//--------------------------Select
$coleta = "SELECT * FROM pessoa WHERE id ='2'";
$res =mysqli_query($con,$coleta);

echo $res;

mysqli_close($con);//fechamento do banco

