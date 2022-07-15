<?php

class UserModel extends BaseModel
{

    const TABLE = 'users';

    public function getALL($select = ['*'], $orderBys = [], $limit)
    {
        return $this->all(self::TABLE, $select, $orderBys, $limit);
    }

    public function findById($id)
    {
        return $this->find(self::TABLE, $id);
    }

    public function findByName($name)
    {
        $sql = "SELECT * from users where name LIKE '%$name%'";
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