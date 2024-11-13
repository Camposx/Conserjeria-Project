<?php
    require_once("Components/layout.php");
?>
<body>
    <?php
        require_once("Components/header.php");
    ?>
    <main>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Room</th>
                    <th scope="col">Issue</th>
                    <th scope="col">Date Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data["call"] as $call) {
                        echo "
                            <tr>
                                <th>{$call->id}</th>
                                <td>{$call->room}</td>
                                <td>{$call->issue}</td>
                                <td>{$call->dateTime}</td>
                                <a href:'?action=delete&id={$call->id}'><i class='bi bi-trash-fill'></i></a>
                            </tr>";
                    }
                ?>                
            </tbody>
        </table>
    </main>
    <?php
    require_once("Components/footer.php");
    ?>
</body>