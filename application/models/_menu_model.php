<?php
class _menu_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
		
		public function get_menu($slug = TRUE)
		{
		header("Content-Type: text/html;charset=UTF-8");
		$sql = "1 order by _parent , _tp";
				if ($slug === FALSE)
			{
					$query = $this->db->get('_Menu');
					return $query->result_array();
			}

			$query = $this->db->get_where('_Menu', array('1' => $sql));
			return $query->result_array();
			
	 
		}
		
		
		
}
?>
