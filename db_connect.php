<?php

//conexao com banco de dados

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
	echo "Falha na conexão: ".msession_connect_error();
endif;