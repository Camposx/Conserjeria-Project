<?php
    require_once("Components/layout.php");
?>

<body>

<?php
    require_once("Components/header.php");
?>

<main>
    <div class="topBar">
        <h2>Edit Request</h2>

        <a href="./index.php"><button type="button-cancel" id="button-cancel" class="btn btn-danger">Cancel</button></a>
    </div>


    <section>
     <!--    <form action='?action=update&id=<?php echo $data["call"]->getId() ?>' method="post">
            <div class="input-group">
                <span class="input-group-text">Room</span>
                <input type="text" class="form-control" name="room" required value='<?php echo $data["call"]->getRoom() ?>'>
            </div>
            <div class="input-group">
                <span class="input-group-text">Issue description</span>
                <input type="text" class="form-control" area-label="With textarea" name="issue" required value='<?php echo $data["call"]->getIssue() ?>'></input>
            </div>
            <div class="input-group">
                <span class="input-group-text">Date</span>
                <input type="date" class="form-control" name="dateTime" required value='<?php echo $data["call"]->getDateTime() ?>'>
            </div>

            <div class="buttons">
                <input type="submit"  value="Edit" class="btn btn-success">
                <input type="reset" value="Reset" class="btn btn-warning">
            </div>
        </form> -->


        <form action='?action=update&id=<?php echo $data["call"]->getId() ?>' method="post">
            <div class="mb-3">
                <label class="form-label">Room</label>
                <input type="text" class="form-control" name="room" required  value='<?php echo $data["call"]->getRoom() ?>'>
            </div>
            <div class="mb-3">
                <label area-label="With textarea" class="form-label">Issue</label>
                <input type="text" class="form-control" name="issue" required value='<?php echo $data["call"]->getIssue() ?>'>
            </div>
            <div class="mb-3">
                <label area-label="With textarea" class="form-label">Date</label>
                <input type="date" class="form-control" name="dateTime" required value='<?php echo $data["call"]->getDateTime() ?>'>
            </div>
            <div class="buttons">
                <input type="submit"  value="Edit" class="btn">
                <input type="reset" value="Reset" class="btn">
            </div>
        </form>
    </section>
        
    </main>
<?php
    require_once("Components/footer.php")
?>
</body>