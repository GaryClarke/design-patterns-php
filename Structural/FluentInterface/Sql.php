<?php

namespace Structural\FluentInterface;

class Sql {

    private $fields = [];
    
    private $from = [];
    
    private $where = [];

    public function select(array $fields)
    {
        $this->fields = $fields;
        
        return $this;
    }

    public function from(string $table, string $alias)
    {
        $this->from[] = $table . ' AS ' . $alias;

        return $this;
    }

    public function where(string $condition)
    {
        $this->where[] = $condition;

        return $this;
    }

    public function __toString()
    {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(', ', $this->from),
            join(' AND ', $this->where)
        );
    }
}