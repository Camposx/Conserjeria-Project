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
        <form action='?action=update$id=<?php echo $data["call"]->getId() ?>' method="post">
            <div class="input-group">
                <span class="input-group-text">Room</span>
                <input type="text" class="form-control" name="room" required value='<?php echo $data["call"]->getRoom() ?>'>
            </div>
            <div class="input-group">
                <span class="input-group-text">Issue description</span>
                <textarea type="text" class="form-control" area-label="With textarea" name="issue" required value='<?php echo $data["call"]->getIssue() ?>'></textarea>
            </div>
            <div class="input-group">
                <span class="input-group-text">Date</span>
                <input type="date" class="form-control" name="dateTime" required value='<?php echo $data["call"]->getDateTime() ?>'>
            </div>

            <div class="buttons">
                <input type="submit"  value="Edit" class="btn btn-success">
                <input type="reset" value="Reset" class="btn btn-warning">
            </div>
        </form>
    </main>
<?php
    require_once("Components/footer.php")
?>
</body>