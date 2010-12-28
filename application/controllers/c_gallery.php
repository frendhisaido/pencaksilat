<?php

class c_gallery extends Controller {

        function c_gallery() {
            parent::Controller();
        }

        function index() {
            $this->load->view('gallery');
        }

}

?>