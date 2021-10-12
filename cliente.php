<?php
    require_once "lib/nusoap.php";
    $clnt = new nusoap_client("http://localhost/Practica4EPF/server.php");

    $err = $clnt->getError();
    if($err){
        echo "<h2>Have error</h2><pre>" . $err . "</pre>";
    }
    $rslt = $clnt->call("getCellphones", array("dt" => "Cellphones"));
    $rslt2 = $clnt->call("getPrices", array("dt" => "Prices"));
    if($clnt->fault){
        echo "<h2>Fault</h2><pre>";
        print_r($rslt);
        echo "<br>";
        print_r($rslt2);
        echo  "</pre>";
    }
    else {
        $err = $clnt->getError();
        if($err){
            echo "<h2>Error</h2><pre>" . $err . "</pre>";
        }else{
            echo "<h2>Cellphones</h2><pre>";
            echo $rslt;
            echo "<br>";
            echo $rslt2;
            echo  "</pre>";
        }
    }
?>