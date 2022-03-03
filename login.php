<?php
    include "head.php";
?>

<?php
    include "nav.php";
?>

<!-- Content -->
<div class="container-fluid">
    <div class="row">
    <div class="col-md-3 col-sm-12">
        <button type="button" class="btn btn-primary" data-toggle="collapse" data-target="#side1">Item lists</button>
        <div id="side1" class="collapse">
        <ul class="list-group" style="border-radius:0px">
        <li class="list-group-item">First item</li>
        <li class="list-group-item">Second item</li>
        <li class="list-group-item">Third item</li>
        <li class="list-group-item" data-toggle="collapse" data-target="#fourth">Fourth item<i class="fa-solid fa-angle-down float-sm-right"></i></li>
        <div id="fourth" class="collapse">
        <li class="list-group-item">Item 4-1</li>
        <li class="list-group-item">Item 4-2</li>
        </div>
        <li class="list-group-item">Fifth item</li>
        <li class="list-group-item">Sixth item</li>
        <li class="list-group-item">Seventh item</li>
        <li class="list-group-item">Eighth item</li>
        <li class="list-group-item">Ninth item</li>
        <li class="list-group-item">Tenth item</li>
        </ul>
        </div>   
        </div>
        <div class="col-md-9 col-sm-12">
        <main class="login-form">
    <div class="cotainer" style="margin-top:30px;margin-bottom:30px">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="" method="">
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text" id="email_address" class="form-control" name="email-address" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                                <a href="#" class="btn btn-link">
                                    Forgot Your Password?
                                </a>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>
        </div>
    </div>

       
</div>

<?php
    include "footer_nav.php";
    include "footer.php";
?>