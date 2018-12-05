<?php

namespace Creational\Pool;

class WorkerPool implements \Countable {

    /**
     * @var StringReverseWorker[]
     */
    private $occupiedWorkers = [];

    /**
     * @var StringReverseWorker[]
     */
    private $freeWorkers = [];


    /**
     * Get a StringReverseWorker from the pool
     *
     * @return StringReverseWorker
     */
    public function get()
    {
        if (count($this->freeWorkers) == 0) {

            $worker = new StringReverseWorker();

        } else {

            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }


    /**
     * Dispose of a worker
     *
     * In practice, this means transfer the worker from the occupied workers array to the free workers array
     *
     * @param StringReverseWorker $worker
     */
    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])) {

            unset($this->occupiedWorkers[$key]);

            $this->freeWorkers[$key] = $worker;
        }
    }


    /**
     * Count elements of an object
     * @link http://php.net/manual/en/countable.count.php
     * @return int The custom count as an integer.
     * </p>
     * <p>
     * The return value is cast to an integer.
     * @since 5.1.0
     */
    public function count()
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}