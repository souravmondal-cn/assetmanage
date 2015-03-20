<?php

namespace controllers;

use core\view;

/*
 * User controller
 *
 */

class User extends \core\controller {

    /**
     * Call the parent construct
     */
    public function __construct() {
        parent::__construct();

        $this->language->load('user');
    }

    /**
     * Define Index page title and load template files
     */
    public function login() {
        $data['title'] = $this->language->get('User Login');
        $data['welcome_message'] = $this->language->get('Welcome To the system');

        View::rendertemplate('header', $data);
        View::render('User/login', $data);
        View::rendertemplate('footer', $data);
    }

}
