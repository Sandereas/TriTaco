<?php 
        $stmt = $pdo->prepare("SELECT * FROM reismogelijkheden");
        $stmt->execute();
        $datageb = $stmt->fetchall();       
    ?>