<?php
    class Users extends Dbconnection{
        public  $id;
        public  $name;
        public  $email;
        public  $password;
        public  $phone;
        public  $status;
        public  $updated_at;
        private $table_name="users";

        public function __construct(){
            parent::__construct();
        }
    
        public function getUserByEmail($email){
        $sql = "SELECT * FROM ".$this->table_name." WHERE email=?";
        $query = $this->db->prepare($sql);
        $query->execute([$email]);
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data ? $data : [];
    }

       


}
?>