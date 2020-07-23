<?php

    http_response_code(200);

    MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");

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