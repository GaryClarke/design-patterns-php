<?php

namespace More\Repository;

interface Persistence {

    public function generateId();

    public function persist(array $data);

    public function retrieve(int $id);

    public function delete(int $id);
}