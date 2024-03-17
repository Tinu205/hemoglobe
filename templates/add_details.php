<style>
    .add_det {
        height: 70vh;
        text-align: center;
        max-width: 330px;
        padding-top: 7em;
        margin-left: 35vw;
    }

</style>

<main class="container add_det">
    <?php
        if(isset($_POST['month'])){
           $query=" INSERT INTO `blood_bank_year_data_1` (`month`, `blood_group`, `blood_collected`, `blood_used`, `remaining_blood`)
            VALUES ('December', 'O-', '456', '45454', '4545')";
        }
    ?>
    <form method="post" action="Add_details.php">
        <div class="mb-3">
            <label for="month" class="form-label">Month</label>
            <input type="text" class="form-control" id="month" name="month">
        </div>
        <div class="mb-3">
            <label for="blood_group" class="form-label">Blood Group</label>
            <input type="text" class="form-control" id="blood_group" name="blood_group">
        </div>
        <div class="mb-3">
            <label for="blood_collected" class="form-label">Blood Collected</label>
            <input type="number" class="form-control" id="blood_collected" name="blood_collected">
        </div>
        <div class="mb-3">
            <label for="blood_used" class="form-label">Blood Used</label>
            <input type="number" class="form-control" id="blood_used" name="blood_used">
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Year</label>
            <input type="number" class="form-control" id="blood_used" name="blood_used">
        </div>
        <!-- Separate div for buttons -->
        <div class="d-grid gap-2 d-md-block">
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" onclick="signOut()" class="btn btn-primary">Sign Out</button>
        </div>
    </form>
</main>
