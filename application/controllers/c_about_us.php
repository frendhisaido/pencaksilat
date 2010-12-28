<?php

class c_about_us extends Controller {

        function c_about_us() {
            parent::Controller();
        }

        function index() {
            $this->load->view('about_us');
        }

}

?>