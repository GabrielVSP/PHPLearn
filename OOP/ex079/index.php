<?php

interface IPayments {
    public function payNow();
    public function paymentProccess();
}

interface ILogin {
    public function loginFirst();
}

interface IBankData {
  
}

class Paypal implements IPayments, ILogin {

    public function loginFirst() {}
    public function payNow() {

    }
    public function paymentProccess() {
        $this->loginFirst();
        $this->payNow();
    }

}

class BankTransfer implements IPayments, ILogin, IBankData {

    private $CVV;
    private $number;
    protected $name;

    public function loginFirst() {}
    public function payNow() {

    }
    public function paymentProccess() {
        $this->loginFirst();
        $this->payNow();
    }

}


class Visa implements IPayments {

    public function payNow() {
        
    }
    public function paymentProccess() {
        $this->payNow();
    }

}

class Cash implements IPayments {

    public function payNow() {
        
    }
    public function paymentProccess() {
        $this->payNow();
    }

}

class BuyProducts {

    public function pay(IPayments $paymentType) {

        $paymentType->paymentProccess();

    }

    public function onlinePay(IPayments $paymentType) {
        $paymentType->paymentProccess();
    }

}

$paymentType = new Cash();
$buyProducts = new BuyProducts();

$buyProducts->pay($paymentType);