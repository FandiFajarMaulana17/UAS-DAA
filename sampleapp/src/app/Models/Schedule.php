<?php

class Schedule {
    private $schedule_id;
    private $bus_id;
    private $departure_time;
    private $arrival_time;

    public function __construct($schedule_id, $bus_id, $departure_time, $arrival_time) {
        $this->schedule_id = $schedule_id;
        $this->bus_id = $bus_id;
        $this->departure_time = $departure_time;
        $this->arrival_time = $arrival_time;
    }

    public function getScheduleId() {
        return $this->schedule_id;
    }

    public function getBusId() {
        return $this->bus_id;
    }

    public function getDepartureTime() {
        return $this->departure_time;
    }

    public function getArrivalTime() {
        return $this->arrival_time;
    }
}
?>
