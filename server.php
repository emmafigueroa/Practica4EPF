<?php
    require_once "lib/nusoap.php";
    function getCellphones($dt){
        if($dt == "Cellphones"){
            return join(",", array(
                "Samsung Galaxy S21 Plus",
                "Samsung Galaxy S20 Plus",
                "Samsung Galaxy S21 Pro",
                "Samsung Galaxy S20 Pro",
                "Xiaomi Mi10 T",
                "Xiaomi Mi10 T Pro",
                "Xiaomi Mi11 T",
                "Xiaomi Mi11 T Pro",
                "Iphone 12 ",
                "Iphone 12 Pro",
                "Iphone 12 Pro Max"));
        }
        else {
            return "I don't found cellphones";
        }
    }
    function getPrices($dt){
        if($dt == "Prices"){
            return join(",", array(
                "$38,000.00             ",
                "$32,000.00             ",
                "$42,000.00            ",
                "$38,000.00            ",
                "$13,000.00   ",
                "$18,000.00       ",
                "$15,000.00   ",
                "$20,000.00       ",
                "$23,000.00",
                "$26,000.00   ",
                "$32,000.00"));
        }
        else {
            return "I don't found prices";
        }
    }
    $srvr = new soap_server();
    $srvr->register("getCellphones");
    $srvr->register("getPrices");
    if(!isset($HTTP_RAW_POST_DATA)) $HTTP_RAW_POST_DATA =file_get_contents('php://input');
        $srvr->service($HTTP_RAW_POST_DATA);
?>