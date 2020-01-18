<?php
// para criar a conexão utilizando PDO você precisa saber:
// sgbd, host, nome do banco de dados, usuario e senha
$user = 'root';
$pass = '';
$connection = new PDO('mysql:host=localhost;dbname=locadora', $user, $pass);
