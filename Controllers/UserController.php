<?php

class UserController extends BaseController
{
    public function index()
    {
        return $this->view('admin.users.index');
    }

    public function show()
    {
        return $this->view('admin.users.showUser');
    }

    public function find()
    {
        return $this->view('admin.users.searchUser');
    }

    public function create()
    {
        return $this->view('admin.users.addUser');
    }

    public function update()
    {
        return $this->view('fontEnd.users.updateUser');
    }

    public function delete()
    {
    }
}