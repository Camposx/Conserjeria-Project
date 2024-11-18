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

    <section class="formSection">
        <form action='?action=update&id=<?php echo $data["call"]->getId() ?>' method="post">
            <div class="roomDate">
                <div class="mb-3 smallForm">
                    <label class="form-label">Room</label>
                    <input type="text" class="form-control" name="room" required  value='<?php echo $data["call"]->getRoom() ?>'>
                </div>

                <div class="mb-3 smallForm">
                    <label area-label="With textarea" class="form-label">Date</label>
                    <input type="date" class="form-control" name="dateTime" required value='<?php echo $data["call"]->getDateTime() ?>'>
                </div>
            </div>
            <div class="mb-3">
                <label area-label="With textarea" class="form-label">Issue</label>
                <input type="text" class="form-control issueText" name="issue" required value='<?php echo $data["call"]->getIssue() ?>'>
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