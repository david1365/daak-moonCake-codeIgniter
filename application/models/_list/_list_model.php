<?php
class _list_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		public function get_tbl($slug = True , $requestData1)
		{
		header("Content-Type: text/html;charset=UTF-8");
		$requestData= $this->input->get();
		$columns = array( 
		// datatable column index  => database column name
			0 => 'employee_name', 
			1 => 'employee_salary',
			2 => 'employee_position',
			3 => 'employee_city',
			4 => 'employee_extension',
			5 => 'employee_joining_date'
		);


		$sql = "SELECT employee_id,employee_name, employee_salary, employee_position, employee_city, employee_extension, employee_joining_date, employee_age ";
		$sql.=" FROM employee WHERE 1=1 ";
		if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
			$sql.=" AND ( employee_name LIKE '".$requestData['search']['value']."%' ";    
			$sql.=" OR employee_salary LIKE '".$requestData['search']['value']."%' ";
			$sql.=" OR employee_position LIKE '".$requestData['search']['value']."%' ";
			$sql.=" OR employee_city LIKE '".$requestData['search']['value']."%' ";
			$sql.=" OR employee_extension LIKE '".$requestData['search']['value']."%' ";
			$sql.=" OR employee_joining_date LIKE '".$requestData['search']['value']."%' ";
			$sql.=" OR employee_age LIKE '".$requestData['search']['value']."%' )";
		} 
		if( !empty($requestData['length']) ) { 
		$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
			}
			$query = $this->db->query($sql);
			return $query->result_array();
			
	 
		}
		
	public function get_tbl_count($Tblname)
		{
		header("Content-Type: text/html;charset=UTF-8");
		
		$sql = "SELECT employee_id FROM ";
		$sql.= $Tblname.";";
		$query = $this->db->query($sql);
		$res = $query->num_rows();
		return $res;
		
		}
		
}
?>
