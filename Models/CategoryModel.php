<?php

class CategoryModel extends BaseModel
{

    const TABLE = 'categories';

    public function getALL($select = ['*'], $orderBys = [], $limit = 10)
    {
        return $this->all(self::TABLE, $select, $orderBys, $limit);
    }

    public function findById($id)
    {
        return $this->find(self::TABLE, $id);
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