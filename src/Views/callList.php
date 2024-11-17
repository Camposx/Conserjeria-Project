<?php
    require_once("Components/layout.php");
?>
<body>
    <?php
        require_once("Components/header.php");
    ?>
    <main>

    <div class="topBar">
        <h2>Service Requests</h2>

        <a href='?action=create'>
            <button class="btn btn-primary" type="button">Add request</button>
        </a>
    </div>
    <section>
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Room</th>
                    <th scope="col">Issue</th>
                    <th scope="col">Date Time</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($data["call"] as $call) {
                        echo "
                            <tr class='tableRow'>
                                <th>{$call->getId()}</th>
                                <td>{$call->getRoom()}</td>
                                <td>{$call->getIssue()}</td>
                                <td>{$call->getDateTime()}</td>
                                <td><a href='?action=delete&id={$call->getId()}'><i class='bi bi-trash-fill'></i></a></td>
                                <td><a href='?action=edit&id={$call->getId()}'><i class='bi bi-pencil-square'></i></a></td>
                            </tr>";
                    }
                ?>                
            </tbody>
        </table>

    </section>
    
    </main>
    <?php
    require_once("Components/footer.php");
    ?>
</body>