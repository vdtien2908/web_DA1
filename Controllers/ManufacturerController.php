<?php

class ManufacturerController extends BaseController
{

    public function index()
    {
        $this->view('admin.manufacturers.index');
    }

    public function create()
    {
        $this->view('admin.manufacturers.addManufacturer');
    }

    public function update()
    {
        $this->view('admin.manufacturers.updateManufacturer');
    }
}