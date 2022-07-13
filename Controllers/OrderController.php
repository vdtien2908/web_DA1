<?php

class OrderController extends BaseController
{
    public function index()
    {
        return $this->view('admin.orders.index');
    }

    public function show()
    {
        return $this->view('admin.orders.showOrder');
    }

    public function find()
    {
        return $this->view('admin.orders.searchOrder');
    }

    public function create()
    {
        return $this->view('admin.orders.addOrder');
    }

    public function update()
    {
        return $this->view('admin.orders.updateOrder');
    }

    public function delete()
    {
    }
}