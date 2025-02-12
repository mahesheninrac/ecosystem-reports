<?php
defined('BASEPATH') or exit('No direct script access allowed');
require(APPPATH . 'controllers/Default_Controler.php');
class OpenAccess extends Default_Controler
{
    public function index()
    {
        $this->load->view('home');
    }

    public function product()
    {
        $this->load->view('product');
    }
    public function custom()
    {
        $this->load->view('custom');
    }
    public function contact()
    {
        $this->load->view('contact');
    }
    public function login()
    {
        $this->load->view('login');
    }
    public function event()
    {
        $this->load->view('event');
    }
    public function reports()
    {
        $this->load->view('reports');
    }
    public function survey()
    {
        $this->load->view('survey');
    }
    public function membership()
    {
        $this->load->view('membership');
    }

    public function test(){
        $this->load->view('testview');
    }

    public function test2(){
        $this->load->view('testview2');
    }

    public function landing_menu(){
        $this->load->view('landing_menu');
    }

}
