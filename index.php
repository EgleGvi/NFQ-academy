<?php include 'head.php';?>
<?php include 'header.php';?>

<div class="page-wrapper">
    <div class="container">
        <div class="index-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h4 class="pick-date-time">Pasirinkite datą ir laiką</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="calendar">
                        <div onchange="changeDate(this.value)" id="js-date-picker-field"></div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="calendar">
                        <div id="js-available-times"></div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-wrapper">
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
                                <input class="btn-submit-reg" type="submit" value="Registruotis">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php';?>



