<?php
    require_once("Components/layout.php");
?>
<body>
    <?php
        require_once("Components/header.php");
    ?>
    <main>

    <div>
        <a href='?action=create'>
            <button class="btn btn-primary" type="button">Add issue</button>
        </a>
    </div>

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
                                <th>{$call->getId()}</th>
                                <td>{$call->getRoom()}</td>
                                <td>{$call->getIssue()}</td>
                                <td>{$call->getDateTime()}</td>
                                <td><a href='?action=delete&id={$call->getId()}'><i class='bi bi-trash-fill'></i></a></td>
                                <td><a href='?action=edit&id={$call->getId()}'><i class='bi bi-pen'></i></a></td>
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