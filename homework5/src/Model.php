<?php


namespace Hillel\Homework5;


abstract class Model
{
    protected static function ClassName()
    {
        $array = explode('\\', strtolower(static::class));
        return array_pop($array);
    }

    public static function find($id)
    {
        $sql = 'SELECT * FROM ' . static::ClassName() . ' WHERE id = :id';
        return $sql;
    }

    public function delete()
    {
        $sql = 'DELETE FROM ' . static::ClassName() . ' WHERE id = :id';

        return $sql;
    }

    public function create()
    {

        $cols = get_object_vars($this);

        $values = array_map(function ($item) {
            return ':' . $item;
        }, array_keys($cols));

        $sql = 'INSERT INTO ' . static::ClassName() . ' (' . implode(', ', array_keys($cols)) . ') VALUES (' . implode(', ', $values) . ')';

        return $sql;

    }

    public function update()
    {
        $cols = array_keys(get_object_vars($this));

        $colsId = array_shift($cols);

        $values = array_map(function ($item) {
            return $item . ' = :' . $item;
        }, $cols);

        $sql = 'UPDATE ' . static::ClassName() . ' SET ' . implode(', ', $values) . ' WHERE id = :id';

        return $sql;
    }


    public function save()
    {
        $array = get_object_vars($this);

        foreach ($array as $key => $value) {
            if (isset($value) && $key == 'id') {
                return $this->update();

            } else {
                return $this->create();
            }

        }
    }


}


