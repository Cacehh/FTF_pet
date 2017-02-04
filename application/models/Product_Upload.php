<?php

class Product_Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('+pages/web_admin/add_products2', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = 'C:\wamp64\www\_ITProject\_FTF_v2\database';
                $config['allowed_types']        = 'csv|sql|';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('+pages/web_admin/add_products2', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
}
?>