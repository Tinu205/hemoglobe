<style>
    .blood-bank {
        background-color: #F7F6C5;
        padding: 20px;
    }

    .blood-bank h3 {
        color: #FF6659;
    }

    .storage-section {
        border-radius: 10px;
        padding: 10px;
        margin-bottom: 20px;
    }

    .donor-list {
        background-color: #FFFACD;
        border-radius: 10px;
        padding: 20px;
    }

    .donor-list h3 {
        color: #FF6659;
    }

    .donor-details {
        color: #686963;
    }

    .scrollable-list {
        max-height: 300px;
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: #FF6659 #FFFACD;
    }

    .scrollable-list::-webkit-scrollbar {
        width: 8px;
    }

    .scrollable-list::-webkit-scrollbar-thumb {
        background-color: #FF6659;
        border-radius: 10px;
    }

    .scrollable-list::-webkit-scrollbar-track {
        background-color: #FFFACD;
    }
</style>

<div class="text-center p-4 blood-bank">
    <div class="row">
        <div class="col-md-8">
            <h3>Blood Bank name</h3>
            <div class="row">
                <div class="col storage-section" id="minimumStorage">
                    <h3>Minimum storage</h3>
                    <?php for ($i = 0; $i < 4; $i++) { ?>
                        <div class="row py-3">
                            <p>Blood type</p>
                        </div>
                    <?php } ?>
                </div>
                <div class="col storage-section">
                    <h3>Maximum storage</h3>
                    <?php for ($i = 0; $i < 4; $i++) { ?>
                        <div class="row py-3">
                            <p>Blood type</p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4 donor-list">
            <div class="row">
                <h3>Donor list</h3>
            </div>
            <div class="row scrollable-list">
                <?php for ($i = 0; $i < 10; $i++) { ?>
                    <div class="row text-start donor-details">
                        <div class="dondet py-3">
                            <?php printf("Donor name: %d", $i + 1); ?><br>
                            <?php printf("Donor details: %d", $i + 1); ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
