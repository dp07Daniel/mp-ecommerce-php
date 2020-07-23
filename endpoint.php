<?php

    header('HTTP/1.1 200 OK');
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

    MercadoPago\SDK::setAccessToken("TEST-8049437300582624-072304-d7af7ea61959047b81dd8b379f76ebdc-148176642");

    switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            break;
    }

    echo "<pre>";
    print_r($payment);
    print_r($plan);
    echo "</pre>";

    if (isset($payment)) {
        $dp_pay = json_encode($payment);
        $arpay = fopen("downloads/".$_POST["id"].".txt", "a") or
          die();
        fputs($arpay, $dp_pay);
        fputs($arpay, "\n");
        fputs($arpay, "--------------------------------------------------------");
        fputs($arpay, "\n");
        fclose($arpay);
    }

    if (isset($plan)) {
        $dp_plan = json_encode($plan);
        $arplan = fopen("downloads/".$_POST["id"].".txt", "a") or
          die();
        fputs($arplan, $dp_plan);
        fputs($arplan, "\n");
        fputs($arplan, "--------------------------------------------------------");
        fputs($arplan, "\n");
        fclose($arplan);
    }


?>