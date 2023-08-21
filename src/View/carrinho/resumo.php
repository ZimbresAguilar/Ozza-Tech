<?php
    $valorTotal = 0;
    
    foreach ($pedidos as $item) {
        $valorTotal += $item['total'];
    }

    echo $valorTotal;
?>