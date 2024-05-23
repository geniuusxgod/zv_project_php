<?php
    class User extends Database{
        private $db;

        public function __construct() {
            $this->db = $this->db_connection(); 
        }

        public function login($username, $password){
            try{
                $data = array(
                    'user_name'=>$username,
                    'user_password'=>md5($password),
                );
                $sql = "SELECT * FROM user WHERE (email = :user_name OR nickname = :user_name) AND password = :user_password";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
                $n_rows = $query_run->rowCount();
                if($n_rows == 1) {
                    // login je uspesny
                    $_SESSION['logged_in'] = true;
                    $_SESSION['is_admin'] =  $query_run->fetch()->role;
                    return true;
                }else {
                    return false;
                }
            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }
        function register($nickname, $email, $password){
            try{
                
                $check_sql = "SELECT * FROM user WHERE email = :user_email";
                $check_query = $this->db->prepare($check_sql);
                $check_query->bindParam(':user_email', $email);
                $check_query->execute();
                $existing_user = $check_query->fetch(PDO::FETCH_ASSOC);
                if ($existing_user) {
                    echo "User with this email already exists";
                    return false;
                }
                
                $hashed_password = md5($password);
    
                $data = array(
                    'user_nickname' => $nickname,
                    'user_email' => $email,
                    'user_password' => $hashed_password,
                    'user_role' => '0'
                );
    
                $sql = "INSERT INTO user (nickname, email, password, role) VALUES (:user_nickname, :user_email, :user_password, :user_role)";
                $query_run = $this->db->prepare($sql);
                $query_run->execute($data);
                return true;
            }catch(PDOException $e){
                echo "There was an error during registration: ".$e->getMessage();
                return false;
            }
        }
    }
?>