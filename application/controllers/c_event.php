<?php

class c_event extends Controller {

        function c_event() {
            parent::Controller();
        }

        function index() {
            $this->load->view('event');
        }

}

?>