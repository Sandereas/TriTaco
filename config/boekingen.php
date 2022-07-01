<?php 
        $stmt = $pdo->prepare("SELECT * FROM boekingen");
        $stmt->execute();
        $datageb = $stmt->fetchall();       
    ?>