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
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-3 col-form-label">Name:</label>
              <div class="col-sm-9">
                <select class="form-control" name="namePrefix">
                  <option value="">Select Prefix</option>
                  <option value="mr">Mr.</option>
                  <option value="miss">Miss</option>
                </select>
              </div>
              <label for="inputPassword" class="col-sm-3 col-form-label"></label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
              </div>
            </div>
            <div class="form-group row">
              <label for="inputPassword" class="col-sm-3 col-form-label">Name in Thai:</label>
              <div class="col-sm-9">
                <select class="form-control" name="namePrefix">
                  <option value="">Select Prefix</option>
                  <option value="mr">Mr.</option>
                  <option value="miss">Miss</option>
                </select>
              </div>
              <label for="inputPassword" class="col-sm-3 col-form-label"></label>
              <div class="col-sm-9">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card card-default">
          <div class="card-body">
            <div class="card_title">Personal information</div>
            <form class="form-horizontal">
              <div class="form-group">
                  <div class="col-sm-4"></div>
                  <img id="picture" src="img/profile.jpg" width="100" style="padding: 5px;">
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Name:</label>
                <div class="col-sm-8">
                  <!--<p class="form-control-static">Kavin Sermsaksakoon</p>-->
                  <select class="form-control" name="namePrefix">
                    <option value="">Select Prefix</option>
                    <option value="mr">Mr.</option>
                    <option value="miss">Miss</option>
                  </select>
                  <input type="text" class="form-control" name="firstName" placeholder="First name">
                  <input type="text" class="form-control" name="lastName" placeholder="Last name">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Name in Thai:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="firstNameTH" placeholder="ชื่อ">
                  <input type="text" class="form-control" name="lastNameTH" placeholder="นามสกุล">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Nationality:</label>
                <div class="col-sm-8">
                  <!--<p class="form-control-static">Thai</p>-->
                  <input type="text" class="form-control" name="nationality" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Date of birth:</label>
                <div class="col-sm-8">
                  <!--<p class="form-control-static">14/4/1997</p>-->
                  <input type="date" class="form-control" name="birthDate" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Age:</label>
                <div class="col-sm-8">
                  <!--<p class="form-control-static">20</p>-->
                  <!--should get from birthDate.value()-->
                  <input type="number" class="form-control" name="age" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Study year:</label>
                <div class="col-sm-8">
                  <!--<p class="form-control-static">3</p>-->
                  <input type="number" min="1" max="5" class="form-control" name="studyYear" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Program:</label>
                <div class="col-sm-8">
                  <!--<p class="form-control-static">ICE</p>-->
                  <select class="form-control" name="namePrefix">
                    <option value="">Select Program</option>
                    <option value="nano">NANO</option>
                    <option value="adme">ADME</option>
                    <option value="ice">ICE</option>
                    <option value="aero">AERO</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Student ID number:</label>
                <div class="col-sm-8">
                  <!--<p class="form-control-static">5831205621</p>-->
                  <input type="number" class="form-control" name="studentID" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">GPAX:</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="gpax" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Home telephone:</label>
                <div class="col-sm-8">
                  <input type="tel" class="form-control" name="phone" placeholder="Telephone number">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-4">Mobile phone:</label>
                <div class="col-sm-8">
                  <input type="tel" class="form-control" name="mobile" placeholder="Mobile number">
                </div>
              </div>
               <div class="form-group">
                <label class="control-label col-sm-4">Email:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card card-default">
          <div class="card-body">
            <div class="card_title">English competency</div>
            <form class="form-inline">
              <div class="form-group">
                <label >Laguage test:</label>
                    <select class="form-control" name="testTaken">
                    <option value="">Select</option>
                    <option value="ielts">IELTS</option>
                    <option value="toefl">TOEFL iBT</option>
                  </select>
              </div>
              <div class="form-group" >
                <label for="score1">Test score:</label>
                <input type="number" class="form-control" id="score1" placeholder="eg. 6.5">
              </div>
              <div class="form-group">
                <label for="date1">Date taken:</label>
                <input type="month" class="form-control" id="date1">
              </div>
            </form>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</body>
</html>