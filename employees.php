<?php include 'employees-header.php';?>

<div class="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div onchange="changeDate(this.value)" id="js-date-picker-field"></div>
            </div>
            <div class="col-md-8">
                <div id="js-available-times"></div>
            </div>
        </div>
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
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table">
                    <div class="client-info-wrapper">
                        <h4>Data ir laikas</h4>
                        <h4>Vardas Pavardė</h4>
                        <h4>Pastabos</h4>
                        <h4>Veiksmai</h4>
                    </div>
                    <div class="client-info-wrapper2">
                        <div class="client1">2019-01-23 12:45</div>
                        <div class="client1">Ona Onutė</div>
                        <div class="client1">Plaukų dažymas</div>
                        <div class="client1"><a class="del-btn" href="#">Atšaukti</a></div>
                   </div>
                    <div class="client-info-wrapper3">
                        <div>2019-02-23 16:00</div>
                        <div>Onytė Ona</div>
                        <div>Plaukų kirpimas</div>
                        <div><a class="del-btn" href="#">Atšaukti</a></div>
                    </div>
                    <div class="client-info-wrapper4">
                        <div>2019-02-23 12:30</div>
                        <div>Ona Onutė</div>
                        <div></div>
                        <div><a class="del-btn" href="#">Atšaukti</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>


