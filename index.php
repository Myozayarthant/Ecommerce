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
            <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/image/cal1.jpg" class="img-responsive" alt="Los Angeles" style="width:100%;height:400px">
                </div>
                <div class="carousel-item">
                    <img src="assets/image/cal2.png" class="img-responsive" alt="Chicago" style="width:100%;height:400px">
                </div>
                <div class="carousel-item">
                    <img src="assets/image/cal3.png" class="img-responsive" alt="New York" style="width:100%;height:400px"> 
                </div>
                </div>

                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
                </a>

            </div>
            <div class="row" style="margin-top:20px">
            <?php
                for($i=1;$i<=12;$i++){
                    ?>
             
                                <div class="col-md-4 col-sm-6 col-xs-12" style="margin-bottom:20px" >
                                <div class="card"  >
                                <img class="card-img-top img-responsive" src="assets/image/p1.jpeg" alt="Card image">
                                <div class="card-body">
                                    <h4 class="card-title">John Doe</h4>
                                    <p class="card-text">Some example text.</p>
                                    <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                                </div>
                                </div>
                                
                        
                    <?php
                }
            ?>
                </div>
        </div>
    </div>

       
</div>

<?php
    include "footer_nav.php";
    include "footer.php";
?>