<?php 
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	class RegModel extends CI_Model{
		# Define Constructor #
		function __construct() {
			$this->LoginTbl = 'tblWebLogin';
            $this->Date = date("Y-m-d H:i:s", strtotime("+5 hours 30 minutes"));
            if(Date('H:i') > '18:30'){
                $this->CurDate = date("d/m/Y", strtotime("+1 day"));
            } else {
                $this->CurDate = date("d/m/Y");
            }
            $this->TmrwDate = date("d/m/Y", strtotime("+1 day"));
            //$this->CurDate = date("d/m/Y");
        }      


		public function CheckLogin($username, $pwd){
			$this->db->select('*')->from($this->LoginTbl);
			$where_array = array('LoginUsername' => $username, 'LoginPassword' => $pwd, 'LoginStatus' => 1);
			$this->db->where($where_array); 
			$query = $this->db->get();
			if($query->num_rows() <> 0){
                $insert_array =  array("Username" => $username, "Date" => $this->Date);
				return $query->result_array();
			} else {
				return false;
			}
		}

		
}
?>