<?php
class _list_controller extends CI_Controller {


public function __construct() {
parent::__construct();
 $this->load->model('_list/_list_model');
}
          
        
//This is Default function of controller
public function index() {
//Loading view file ci_sample_view.php
$this->load->view('_list/_list_group');
}

public function load_tbl(){
//$url = parse_url($_SERVER['REQUEST_URI']);
//parse_str($url['query'], $params);
$requestData = $this->input->get() ;
$_lst = $this->_list_model->get_tbl(true,$requestData);
$totalData = $this->_list_model->get_tbl_count('employee');
$totalFiltered =  count($_lst);
$totalFiltered = $totalData;
$i=0;
$data = array();
foreach ( $_lst as $row ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["employee_id"];
	$nestedData[] = $row["employee_name"];
	$nestedData[] = $row["employee_salary"];
	$nestedData[] = $row["employee_position"];
	$nestedData[] = $row["employee_city"];
	$nestedData[] = $row["employee_extension"];
	$nestedData[] = $row["employee_joining_date"];
$i++;
	
	$data[] = $nestedData;
}

$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" =>intval( $totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);

}

public function tst_load_tbl(){
//$url = parse_url($_SERVER['REQUEST_URI']);
//parse_str($url['query'], $params);
$requestData = $this->input->get() ;
$_lst = $this->_list_model->get_tbl(true,$requestData);

$i=0;
$data = array();
foreach ( $_lst as $row ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["employee_id"];
	$nestedData[] = $row["employee_name"];
$i++;
	
	$data[] = $nestedData;
}

$json_data = array(
			"data"            => $data   // total data array
			);

echo json_encode($json_data);

}

}
?>
