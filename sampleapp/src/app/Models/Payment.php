<?php

class Payment {
    private $payment_id;
    private $user_id;
    private $amount;
    private $status;
    private $payment_method;

    public function __construct($payment_id, $user_id, $amount, $status, $payment_method) {
        $this->payment_id = $payment_id;
        $this->user_id = $user_id;
        $this->amount = $amount;
        $this->status = $status;
        $this->payment_method = $payment_method;
    }

    public function getPaymentId() {
        return $this->payment_id;
    }

    public function getUserId() {
        return $this->user_id;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getPaymentMethod() {
        return $this->payment_method;
    }
}
?>
