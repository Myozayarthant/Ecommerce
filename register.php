<?php
    include "head.php";
?>

<?php
    include "nav.php";
?>
<!--content-->
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
    <!--register form-->
    <div class="col-md-9 col-sm-12">
    <form class="form-horizontal" action='' method="POST">
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Username</label>
      <div class="controls">
        <input type="text" id="username" name="username" placeholder="" class="input-xlarge">
        <p class="help-block">Username can contain any letters or numbers, without spaces</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Password should be at least 4 characters</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password -->
      <label class="control-label"  for="password_confirm">Password (Confirm)</label>
      <div class="controls">
        <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
        <p class="help-block">Please confirm password</p>
      </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
</form>
    </div>
    </div>
</div>

<?php
    include "footer_nav.php";
    include "footer.php";
?>