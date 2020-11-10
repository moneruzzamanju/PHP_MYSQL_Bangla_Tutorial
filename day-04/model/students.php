<?php
    class Students extends Dbconnection{
        public function __construct(){
            parent::__construct();
        }
public function getStudents(){
       	$sql = "SELECT * FROM student_info";
        	$query = $this->db->query($sql);
        	$data = $query->fetchAll(PDO::FETCH_ASSOC);
        	return $data;
    }
}
?>