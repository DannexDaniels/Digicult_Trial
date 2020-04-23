<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/14/18
 * Time: 6:55 PM
 */

class HomeModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function getPassword($email){
        $query = $this->db->get_where('auth',array('username' => $email));
        if ($query->num_rows() > 0){
            return $query->row()->password;
        }else{
            return null;
        }
    }

    function addAgrovet($data){
        //inserting data into the table user
        $this->db->insert('agrovet',$data);
    }

}