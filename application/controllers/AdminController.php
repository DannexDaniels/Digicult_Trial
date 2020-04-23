<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 8/14/18
 * Time: 6:17 PM
 */

class AdminController extends CI_Controller
{
    public function index(){
        if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']){
            $data['all'] = $this->adminModel->getAllCounts();
            $data['notseen'] = $this->adminModel->countRequests("not seen");
            $data['pending'] = $this->adminModel->countRequests("pending");
            $data['solved'] = $this->adminModel->countRequests("solved");
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

    public function farmers(){
        $data['list'] = $this->adminModel->getFarmers();
        $this->load->view('template/admin_nav_bar');
        $this->load->view('farmers',$data);
        $this->load->view('template/admin_footer');
    }

    public function agrovets(){
        $data['list'] = $this->adminModel->getAgrovets();
        $this->load->view('template/admin_nav_bar');
        $this->load->view('agrovets',$data);
        $this->load->view('template/admin_footer');
    }

    public function specialists(){
        $data['list'] = $this->adminModel->getSpecialists();
        $this->load->view('template/admin_nav_bar');
        $this->load->view('specialists',$data);
        $this->load->view('template/admin_footer');
    }

    public function requests(){
        $data['list'] = $this->adminModel->getRequests();
        $this->load->view('template/admin_nav_bar');
        $this->load->view('requests',$data);
        $this->load->view('template/admin_footer');
    }

    public function affectedAreas(){
        $data['locs'] = $this->adminModel->getAffectedAreas();
        //$this->load->view('template/admin_nav_bar');
        $this->load->view('mapvisual',$data);
        //$this->load->view('template/admin_footer');
    }
    public function logout(){
        session_destroy();

        //loading the login form
        $this->load->view('template/home_header');
        $this->load->view('index');
        $this->load->view('template/home_footer');
    }
}