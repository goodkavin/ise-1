<?php include 'resources/header.php';?>
  <div class="container">
    <div class="row">

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">
            <div class="card_title">Course</div>
            <div class="radio-toolbar">
              <input type="radio" id="ise" name="course_institute" value="ise" checked>
              <label for="ise">ISE</label>

              <input type="radio" id="external" name="course_institute" value="external">
              <label for="external">External</label>
            </div>
            <div class="form-group"><input type="text" class="form-control" name="course_number" placeholder="Course #"></div>
            <input type="text" class="form-control" name="course_title" placeholder="Course Title">
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card card-default">
          <div class="card-body">
            <div class="card_title">Institution</div>
            <div class="form-group">
              <select class="form-control" name="ins_country">
                <option value="">Select Country</option>
                <option value="thailand">Thailand</option>
                <option value="usa">USA</option>
              </select>
            </div>
            <input type="text" class="form-control" name="ins_name" placeholder="Institution Name">
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card card-default">
          <div class="card-body">
            <div class="card_title">Program</div>
            <div class="radio-toolbar" style="margin-bottom: 0px;">
              <input type="radio" id="all" name="program" value="all" checked>
              <label for="all">ALL</label>

              <input type="radio" id="ice" name="program" value="ICE">
              <label for="ice">ICE</label>

              <input type="radio" id="adme" name="program" value="ADME">
              <label for="adme">ADME</label>

              <input type="radio" id="aero" name="program" value="AERO">
              <label for="aero">AERO</label>

              <input type="radio" id="nano" name="program" value="NANO">
              <label for="nano">NANO</label>
            </div>
          </div>
        </div>
      </div>

      <div class="col-sm-12" style="margin-bottom: 15px; margin-top: 15px;">
        <button type="submit" class="btn btn-block btn-outline-primary" id="btnSearch">Search</button>
      </div>

      <div class="col-sm-12" id="result">
      </div>

    </div>
  </div>

<?php
require 'resources/footer.php';
?>