<?php

class ProductController extends BaseController
{

    public function index()
    {
        return $this->view('admin.products.index');
    }

    public function find()
    {
        return $this->view('admin.products.searchProduct');
    }

    public function show()
    {
        return $this->view('admin.products.showProduct');
    }

    public function add()
    {
        return $this->view('admin.products.addProduct');
    }

    public function update()
    {
        return $this->view('admin.products.updateProduct');
    }
}