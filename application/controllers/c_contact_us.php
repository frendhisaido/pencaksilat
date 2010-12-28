<?php

class c_contact_us extends Controller {

        function c_contact_us() {
            parent::Controller();
        }

        function index() {
            $this->load->view('contact_us');
        }

}

?>