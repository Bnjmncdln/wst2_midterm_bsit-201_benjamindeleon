<?php

$pdo = new PDO('mysql:host=localhost;dbname=bsit201_deleonbenj_chatroom','root','');

$query = 'INSERT INTO accounts (email,password,name) VALUES (:email,:password,:name)';

$stmt = $pdo->prepare($query);
$stmt ->bindValue('email',$_POST['email']);
$stmt ->bindValue('password',$_POST['password']);
$stmt ->bindValue('name',$_POST['name']);

$stmt -> execute();

header('location:login.php');