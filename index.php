<?php
    ob_start();
    include 'index.html';

    function calculate_shipping() {
        $data = array(
            "from" => array(
                "postal_code" => "23812310"
            ),
            "to" => array(
                "postal_code" => "49010440"
            ),
            "products" => array(
                array(
                    "id" => 1,
                    "width" => 11,
                    "height" => 17,
                    "length" => 11,
                    "weight" => 0.3,
                    "insurance_value" => 10.1,
                    "quantity" => 1
                )
            ),
            "options" => array(
                "receipt" => false,
                "own_hand" => false
            ),
            "services" => ""
        );
        return $data;
    }    
?>