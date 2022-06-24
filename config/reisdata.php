<?php 
        $stmt = $pdo->prepare("SELECT * FROM reismogelijkheden");
        $stmt->execute();
        $datadest = $stmt->fetchall();       
    ?>