<?php

class Ticket {
    private $ticket_id;
    private $user_id;
    private $bus_id;
    private $route_id;
    private $payment_id;
    private $status;

    public function __construct($ticket_id, $user_id, $bus_id, $route_id, $payment_id, $status) {
        $this->ticket_id = $ticket_id;
        $this->user_id = $user_id;
        $this->bus_id = $bus_id;
        $this->route_id = $route_id;
        $this->payment_id = $payment_id;
        $this->status = $status;
    }

    public function getTicketId() {
        return $this->ticket_id;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getBusId() {
        return $this->bus_id;
    }

    public function getRouteId() {
        return $this->route_id;
    }

    public function getPaymentId() {
        return $this->payment_id;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }
}
?>
