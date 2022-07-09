<?php

class LoginController extends BaseController
{
    public function index()
    {
        return $this->view('admin.Login.index');
    }

    public function show()
    {
        echo __METHOD__;
    }
}