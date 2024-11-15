<?php
    require_once("Components/layout.php");
?>

<body>

<?php
    require_once("Components/header.php");
?>

<main class="card">
    <h2>New Call</h2>

        <a href="./index.php"><button type="button-cancel" id="button-cancel" class="btn btn-danger">Cancel</button></a>
            <form action='?action=store' method="post">
                <div class="input-group">
                    <span class="input-group-text">Room</span>
                    <input type="text" class="form-control" name="room" required placeholder="Write the room:">
                </div>
                <div class="input-group">
                    <span class="input-group-text">Issue description</span>
                    <input type="text" class="form-control" area-label="With textarea" name="issue" required placeholder="Description of the problem:"></input>
                </div>
                <div class="input-group">
                    <span class="input-group-text">Date</span>
                    <input type="date" class="form-control" name="dateTime" required placeholder="Date of the call:">
                </div>

                <div class="buttons">
                    <input type="submit"  value="Create" class="btn btn-success">
                    <input type="reset" value="Reset" class="btn btn-warning">
                </div>
        </form>
    </main>
<?php
    require_once("Components/footer.php")
?>
</body>