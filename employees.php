<?php include 'head.php';?>
<?php include 'employees-header.php';?>

<div class="page-wrapper">
    <div class="container">
        <div class="index-wrapper">
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
                    <div class="employees-search">
                        <form action="">
                            <input class="search-input" type="text" name="paieska" placeholder="paieška">
                            <a href="#"><i class="fas fa-search"></i></a>
                        </form>
                    </div>
                    <div>
                        <ul id="menu">
                            <li class="list-menu">Data ir laikas</li>
                            <li class="list-menu">Vardas Pavardė</li>
                            <li class="list-menu">Pastabos</li>
                            <li class="list-menu">Veiksmai</li>
                        </ul>
                        <ul id="menu">
                            <li>2019-01-23 12:45</li>
                            <li>Ona Onutė</li>
                            <li></li>
                            <li><a class="del-btn" href="#">Atšaukti</a></li>
                       </ul>
                        <ul id="menu">
                            <li>2019-02-23 16:00</li>
                            <li>Onytė Ona</li>
                            <li>Plaukų kirpimas</li>
                            <li><a class="del-btn" href="#">Atšaukti</a></li>
                        </ul>
                        <ul id="menu">
                            <li>2019-02-23 12:30</li>
                            <li>Ona Onutė</li>
                            <li>Šukuosena</li>
                            <li><a class="del-btn" href="#">Atšaukti</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php';?>


