<?php include 'header.php';?>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="pick-date-time">Pasirinkite datą ir laiką</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div>
                    <div onchange="changeDate(this.value)" id="js-date-picker-field"></div>
                </div>
            </div>
            <div class="col-md-8">
                <div id="js-available-times"></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-wrapper">
                    <form action="register.php">
                        <div class="form-row">
                            <div class="col-3">
                                <input type="text" class="form-control" placeholder="Vardas pavardė" required>
                            </div>
                            <div class="col-2">
                                <input type="text" class="form-control" placeholder="Tel. nr" required>
                            </div>
                            <div class="col-5">
                                <input type="text" class="form-control" placeholder="Pastabos">
                            </div>
                            <input class="btn-submit-reg" type="submit" value="Registruotis">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>



