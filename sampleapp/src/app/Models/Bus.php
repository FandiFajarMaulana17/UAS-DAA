<?php

class Bus {
    private $bus_id;
    private $number;
    private $capacity;
    private $status;

    public function __construct($bus_id, $number, $capacity, $status) {
        $this->bus_id = $bus_id;
        $this->number = $number;
        $this->capacity = $capacity;
        $this->status = $status;
    }

    public function getBusId() {
        return $this->bus_id;
    }

    public function getNumber() {
        return $this->number;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}
?>
