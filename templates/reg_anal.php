<div class = "text-center p-4">
    <div class = "row border">
        <div class="col-md-8 border">
            <h3>Blood Bank name</h3>
            <div class="row ">
                <div class = "col border">
                    <h3>Minimum storage</h3>
                    <?php
                        for($i=0;$i<4;$i++){
                    ?>
                    <div class = "row     py-3" >
                        <p>Blood type</p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class = "col border ">
                    <h3>Maximum storage</h3>
                    <?php
                        for($i=0;$i<4;$i++){
                    ?>
                    <div class = "row     py-3">
                        <p>Blood type</p>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 border">
            <div class = "row border">
            <h3>Donor list</h3>
            </div>
            <div class = row>
            <?php
                for($i=0;$i<4;$i++){
            ?>
            <div class = "row    text-start">
                <div class="dondet py-3">
                    <?php
                        printf("Donor name: ");
                    ?>
                    <br>
                    <?php
                        printf("Donor name: ");
                    ?>
                </div>
            </div>
            <?php
                }
            ?>
            </div>
        </div>

    </div>
</div>
