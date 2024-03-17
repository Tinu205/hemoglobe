<style>
    .add_don {
        height: 70vh;
        text-align: center;
        max-width: 330px;
        padding-top: 7em;
        margin-left: 35vw;
    }

</style>
<?php
    if(isset($_POST['name'])&&isset($_POST['blood_group'])&&isset($_POST['age'])&&isset($_POST['address'])&&isset($_POST['mobile_no']))
    {
        $connection = database::getConnection($query);
        $query=" INSERT INTO `donor_list` (`name`, `blood_group`, `age`, `address`, `mobile_number`)
        VALUES ('".$_POST['name']."', '".$_POST['blood_group']."', '".$_POST['age']."', '".$_POST['address']."', '".$_POST['mobile_no']."')";
        $result = $connection->query($query);

    }
?>

<main class="container add_don">
    <form method="post" action="add_donors.php">
        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="blood_group" class="form-label">Blood Group</label>
            <input type="text" class="form-control" id="blood_group" name="blood_group">
        </div>
        <div class="mb-3">
            <label for="age" class="form-label">Age</label>
            <input type="number" class="form-control" id="age" name="age">
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address">
        </div>
        <div class="mb-3">
            <label for="mobile_no" class="form-label">Mobile no</label>
            <input type="number" class="form-control" id="mobile_no" name="mobile_no">
        </div>
        <!-- Separate div for buttons -->
        <div class="d-grid gap-2 d-md-block">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" onclick="signOut()" class="btn btn-primary">Sign Out</button>
        </div>
    </form>
</main>
