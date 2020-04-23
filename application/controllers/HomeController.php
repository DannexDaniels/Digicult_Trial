<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/14/18
 * Time: 6:30 PM
 */

class HomeController extends CI_Controller
{
    public function index(){
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
            $data = $this->adminModel->getAllCounts();
            $this->load->view('template/admin_nav_bar');
            $this->load->view('admin_home',$data);
            $this->load->view('template/admin_footer');
        }else{
            //$data['posts'] = $this->PostModel->getAllPosts();
            $this->load->view('template/home_header');
            $this->load->view('index');
            $this->load->view('template/home_footer');
        }

    }

    public function loginAdmin(){
        $admin = $this->input->post('email');
        $pass = $this->input->post('password');
        if ($this->homeModel->getPassword($admin) != null) {

            if ($this->homeModel->getPassword($admin) === $pass){
                $this->session->set_userdata('logged_in', TRUE);
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
                    redirect(base_url('admin'));
                }
            }else{
                echo '<script>alert("Wrong password");</script>';
                $this->index();
            }

        }
    }

    public function addAgrovet(){
        $data = array(
            'agrovet_id' => $this->input->post('idno'),
            'agrovet_name' => $this->input->post('fname').' '.$this->input->post('lname'),
            'agrovet_phone' => $this->input->post('phone'),
            'agrovet_email' => $this->input->post('email'),
            'agrovet_location' => $this->input->post('location'),
            'agrovet_address' => $this->input->post('address')
        );

        $this->homeModel->addAgrovet($data);

        echo '<script>alert("Agrovet Added Successfully");</script>';
        $this->index();


    }
}