<?php
    require_once("Components/layout.php");
?>
<body>
    <?php
        require_once("Components/header.php");
    ?>
    <main>
        <?php
            foreach($data["call"] as $call) {
                echo "  {$call->id}";
        }
        
        ?>
   
    </main>
    <?php
    require_once("Components/footer.php");
    ?>
</body>