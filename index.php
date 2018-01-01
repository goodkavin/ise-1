<?php
require 'resources/session.php';
require 'resources/header.php';
?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12" style="margin-bottom: 15px;">
        <div class="progress" style="height:15px">
          <div class="progress-bar" style="width:100%;height:15px"></div>
        </div> 
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Online Courses Database</h4>
            <p class="card-text">Search equivalency of courses for Outbound students is available.</p>
            <a href="directory.php" class="card-link">Search now</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Exchange Student Program</h4>
            <p class="card-text">ISE exchange student program is open!</p>
            <a href="login.php" class="card-link">Apply Now!</a>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
require 'resources/footer.php';
?>