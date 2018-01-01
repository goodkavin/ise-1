<?php
require 'resources/session.php';
require 'resources/header.php';
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Personal Information</h4>
            <p>
              <div>Photo: </div>
              <div>Name(English): </div>
              <div>Name(Thai): </div>
              <hr>
              <div>Nationality: </div>
              <div>Date of birth: </div>
              <hr>
              <div>Study Year: </div>
              <div>Study Faculty: </div>
              <div>Study Major: </div>
              <div>Student ID: </div>
              <div>GPAX: </div>
              <hr>
              <div>Mobile Phone: </div>
              <div>Home Phone: </div>
              <div>Email: </div>
            </p>
            <a href="#" class="btn btn-outline-primary">Edit Information</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Applications</h4>
            <p>Exchange 2018 <span class="badge badge-primary">1/1/2018</span></p>
            <a href="application_1.php" class="btn btn-outline-primary">Create Application</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php
require 'resources/footer.php';
?>