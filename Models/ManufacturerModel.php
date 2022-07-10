<?php
class ManufacturerModel extends BaseModel
{
    const TABLE = 'manufacturers';

    public function getAll($select = [], $orderBys = [], $limit)
    {
        return $this->all(self::TABLE, $select, $orderBys, $limit);
    }

    public function store($data)
    {
        return $this->create(self::TABLE, $data);
    }

    public function findById($id)
    {
        return $this->find(self::TABLE, $id);
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