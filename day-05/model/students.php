<?php
    class Students extends Dbconnection{
        public  $id;
        public  $student_id;
        public  $name;
        public  $father_name;
        public  $mohter_name;
        public  $email;
        public  $phone;
        public  $address;
        public  $status;

        public function __construct(){
            parent::__construct();
        }
public function getStudents(){
       	$sql = "SELECT * FROM student_info";
        	$query = $this->db->query($sql);
        	$data = $query->fetchAll(PDO::FETCH_ASSOC);
        	return $data;
    }

    public function save(){
        $sql = "INSERT INTO student_info(student_id, name, father_name, mother_name, email, phone, address) VALUE('".$this->student_id."','".$this->name."','".$this->father_name."','".$this->mother_name."','".$this->email."','".$this->phone."','".$this->address."')";

        $save = $this->db->exec($sql);
        return $save ? true : false;
    }

}
?>