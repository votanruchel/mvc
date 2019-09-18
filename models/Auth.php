<?php 
namespace Models;
use \Core\Model;

class Auth extends Model{
    private $attempts = 0;
    //private $ip;
    
    public function __construct()
    {
        parent::__construct();
        $this->ip = $_SERVER['REMOTE_ADDR'];
        $this->verifyAttempts();
    }
    public function passwordHashCreator($string){
        $passwordHash = password_hash($string, PASSWORD_DEFAULT);
        return $passwordHash;
    }

    public function authUser($username,$password){
       // $password_hash = $this->passwordHashCreator($password);
        $sql_query = "SELECT * FROM users WHERE username = :username";
        $sql = $this->db->prepare($sql_query);  
        $sql->bindValue(':username',addslashes($username));
        $sql->execute();
        if($sql->rowCount() > 0 ){
            $sql = $sql->fetch();
            if(password_verify($password,$sql['pass'])){
                $_SESSION['userLogin'] = $sql['id'];
                //header('Location: '.BASE_URL.'panel');
                return true;
            }else{
                $_SESSION['NoUserLogin'] = 'Usuario nao encontrado ou dados nao conferem!';
                $this->updateAttempts();
                
                $this->db->query("INSERT INTO attempts(ip,attempts) VALUES ('$this->ip','$this->attempts')");
                return false;
            }
        }
    }

    private function updateAttempts(){
        $this->attempts+1;
    }

    private function verifyAttempts(){
        //$sql = $this->db->query("SELECT * FROM attempts WHERE ip = '$this->ip'");
        //if($sql->rowCount > 5){
            //echo 'Limite de tentativas de login excedido!';
            //exit;
        }
    }
