<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/14/18
 * Time: 6:55 PM
 */

class AdminModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getAllCounts(){
        $sql = "SELECT ( SELECT COUNT(*) FROM farmer ) AS farmer, ( SELECT COUNT(*) FROM smartfarmer ) AS specialist, ( SELECT COUNT(*) FROM agrovet ) AS agrovets, ( SELECT COUNT(*) FROM help_requests ) AS requests FROM dual";
        $query = $this->db->query($sql);
        return $query->row_array();
    }

    function getFarmers(){
        $query = $this->db->get('farmer');
        return $query->result_array();
    }

    function getAgrovets(){
        $query = $this->db->get('agrovet');
        return $query->result_array();
    }

    function getSpecialists(){
        $query = $this->db->get('smartfarmer');
        return $query->result_array();
    }

    function getRequests(){
        $sql = "SELECT help_id,help_farmer,help_specialist,help_status,smartfarmer.smart_name,farmer.farmer_name FROM `help_requests`,smartfarmer,farmer WHERE help_farmer=farmer.farmer_phone AND help_specialist=smartfarmer.smart_id";
        $query = $this->db->query($sql);
        return $query->result_array();
    }

    function countRequests($status){
        $query = $this->db->get_where('help_requests',array('help_status' => $status));
        return $query->num_rows();
    }

    function getAffectedAreas(){
        $query = $this->db->get('detected_areas');
        return $query->result_array();
    }
}