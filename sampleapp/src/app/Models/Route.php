<?php

class Route {
    private $route_id;
    private $start_point;
    private $end_point;
    private $stops = [];

    public function __construct($route_id, $start_point, $end_point, $stops) {
        $this->route_id = $route_id;
        $this->start_point = $start_point;
        $this->end_point = $end_point;
        $this->stops = $stops;
    }

    public function getRouteId() {
        return $this->route_id;
    }

    public function getStartPoint() {
        return $this->start_point;
    }

    public function getEndPoint() {
        return $this->end_point;
    }

    public function getStops() {
        return $this->stops;
    }
}
?>
