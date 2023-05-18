<?php
 
class Accounts{
    public function login(){
        session_start();
        $email = $_POST['email'];
        $password = $_POST['password'];

        $pdo = new PDO('mysql:host=localhost;dbname=bsit201_deleonbenj_chatroom','root','');

        $account = $pdo->prepare('SELECT * FROM accounts WHERE email=:email and password=:password');
        $account->bindValue('email',$email);
        $account->bindValue('password',$password);
        $account->execute();

        $data = $account->fetchAll(PDO::FETCH_ASSOC);

        if(count ($data) == 1){
            echo 'success';
            $_SESSION['auth'] = $data;
        }else{
            echo 'error';
        }
    }

    public function register(){
        
    }
}