<?php include 'employees-header.php';?>

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
                <div onchange="changeDate(this.value)" id="js-date-picker-field"></div>
            </div>
            <div id="js-available-times">

            </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <tr>
                        <th>Data ir laikas</th>
                        <th>Vardas Pavardė</th>
                        <th>Pastabos</th>
                        <th>Veiksmai</th>
                    </tr>
                    <tr>
                        <td>2019-01-23 12:45</td>
                        <td>Ona Onutė</td>
                        <td>Plaukų dažymas</td>
                        <td><a class="del-btn" href="#">Atšaukti</a></td>
                   </tr>
                    <tr>
                        <td>2019-02-23 16:00</td>
                        <td>Onytė Ona</td>
                        <td>Plaukų kirpimas</td>
                        <td><a class="del-btn" href="#">Atšaukti</a></td>
                    </tr>
                    <tr>
                        <td>2019-02-23 12:30</td>
                        <td>Ona Onutė</td>
                        <td></td>
                        <td><a class="del-btn" href="#">Atšaukti</a></td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>


