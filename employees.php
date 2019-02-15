<?php include 'header.php';?>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="register.php">
                    <div class="form-row">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Vardas pavardė" required>
                        </div>
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Tel. nr" required>
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Pastabos">
                        </div>
                        <input class="btn-submit-reg employees-btn" type="submit" value="Registruoti">
                    </div>
                </form>
            </div>
            <div class="col-md-4">
                <div id="datepickerfield"></div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>


