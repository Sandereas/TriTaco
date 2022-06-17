<?php 
        $stmt = $pdo->prepare("SELECT * FROM users");
        $stmt->execute();
        $datageb = $stmt->fetchall();       
    ?>