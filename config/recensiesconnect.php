
<?php 
        $stmt = $pdo->prepare("SELECT * FROM recensies");
        $stmt->execute();
        $datadest = $stmt->fetchall();      
        
        

    ?>