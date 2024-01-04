<?php

    include_once "abstract/paymentTypes.php";
    include_once "classes/buyProduct.php";

    $buyProduct = new BuyProduct();
    echo $buyProduct->getPayment();