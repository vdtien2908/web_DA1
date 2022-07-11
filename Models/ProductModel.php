<?php

class ProductModel extends BaseModel
{
    const TABLE = 'products';


    public function getAll($select = [], $orderBys = [], $limit = 1000)
    {
        return $this->all(self::TABLE, $select, $orderBys, $limit);
    }

    public function show($id)
    {
        $sql = "SELECT *, products.name as nameProduct, manufacturers.name as nameManufacturer, categories.name as nameCategory FROM products, manufacturers, categories WHERE products.category_id = categories.id AND  products.manufacturer_id = manufacturers.id AND products.id = ${id}";
        return $this->getByQuery($sql);
    }

    public function detail($id)
    {
        return $this->detailMain(self::TABLE, $id);
    }


    public function searchName($name)
    {
        $sql = "SELECT * FROM products WHERE products.name like '%${name}%'";
        return $this->getByQuery($sql);
    }

    public function store($data)
    {
        return $this->create(self::TABLE, $data);
    }

    public function update($id, $data)
    {
        return $this->updateMain(self::TABLE, $id, $data);
    }

    public function delete($id)
    {
        return $this->deleteMain(self::TABLE, $id);
    }
}
