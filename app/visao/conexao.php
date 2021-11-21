<?php

//acesso ao banco de dados
//$enderecobd = "127.0.0.1:49750";
//$dbname = "localdb";

//dados do banco
//$usuariobd = "kiqqjusnpt";
//$senhabd = "0367L3V1BX862M75$";


$host = 'minhacritica-server.mysql.database.azure.com';
$username = 'kiqqjusnpt@minhacritica-server.mysql.database.azure.com';
$password = '0367L3V1BX862M75$';
$db_name = 'minhacritica-server.mysql.database.azure.com';



//Initializes MySQLi
$conn = mysqli_init();

mysqli_ssl_set($conn,NULL,NULL, "/var/www/html/DigiCertGlobalRootG2.crt.pem", NULL, NULL);

// Establish the connection
mysqli_real_connect($conn, 'minhacritica-server.mysql.database.azure.com', 'kiqqjusnpt@minhacritica-server.mysql.database.azure.com', '0367L3V1BX862M75$', 'quickstartdb', 3306, NULL, MYSQLI_CLIENT_SSL);

//If connection failed, show the error
if (mysqli_connect_errno($enderecobd,$usuariobd,$senhabd))
{
    die('Erro na conexão do Banco de Dados! '.mysqli_connect_error());
}

//conectar ao banco
//$con   = mysql_connect($enderecobd,$usuariobd,$senhabd) or die ("Erro na conexão do Banco de Dados!");

//acessou ao banco dados
//$selbd = mysql_select_db($dbname,$con) or die ("Erro em selecionar Tabela!");

?>




