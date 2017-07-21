<?php

   class Model_get extends CI_Model{
   	function getData($page){
   		$query = $this->db->get_where("pageData",array("page" => $page));
   		return $query->result();
   	}
   }


?>