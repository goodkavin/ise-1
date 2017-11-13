<!DOCTYPE html>
<html lang="en">
<head>
  <title>Application Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/isetheme.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="iseNav">
    <div class="container"><h1>Application Form</h1></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="panel_title">Student's information</div>
            <form class="form-horizontal">
               <div class="form-group">
                <img id="picture" src="img/profile.png" width="68" style="padding: 5px;">
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Name:</label>
                <div class="col-sm-8">
                  <p class="form-control-static">Kavin Sermsaksakoon</p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Nationality:</label>
                <div class="col-sm-8">
                  <p class="form-control-static">Thai</p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Date of birth:</label>
                <div class="col-sm-8">
                  <p class="form-control-static">14/4/1997</p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Age:</label>
                <div class="col-sm-8">
                  <p class="form-control-static">20</p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">School year:</label>
                <div class="col-sm-8">
                  <p class="form-control-static">3</p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Program:</label>
                <div class="col-sm-8">
                  <p class="form-control-static">ICE</p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Age:</label>
                <div class="col-sm-8">
                  <p class="form-control-static">20</p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">Student ID number:</label>
                <div class="col-sm-8">
                  <p class="form-control-static">5831205621</p>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4">GPAX:</label>
                <div class="col-sm-8">
                  <p class="form-control-static">3.15</p>
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
      <div class="col-sm-8  ">
        <div class="panel_title">Language competency</div>
        <div class="panel panel-default">
          <div class="panel-body">
            <form class="form-inline">
              <div class="form-group">
                <label for="language">Language 1:</label>
                <input type="text" class="form-control" id="language1">
              </div> 
              <div class="form-group">
                <label >Level:</label>
                <div class="radio-toolbar" style="margin-bottom: 0px;">
                <input type="radio" id="lv1_4" name="level1" value="4">
                <label for="lv1_4">Excellent</label>
                <input type="radio" id="lv1_3" name="level1" value="3">
                <label for="lv1_3">Good</label>
                <input type="radio" id="lv1_2" name="level1" value="2">
                <label for="lv1_2">Fair</label>
                <input type="radio" id="lv1_1" name="level1" value="1">
                <label for="lv1_1">Poor</label>
                </div>
              </div> 
              <div class="form-group">
                <label >Test taken:</label>
                 <input type="text" class="form-control" id="test1" placeholder="eg. IELTS">
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
        <div class="panel panel-default">
          <div class="panel-body">
            <form class="form-inline">
              <div class="form-group">
                <label for="language">Language 2:</label>
                <input type="text" class="form-control" id="language2">
              </div> 
              <div class="form-group">
                <label >Level:</label>
                <div class="radio-toolbar" style="margin-bottom: 0px;">
                <input type="radio" id="lv2_4" name="level2" value="4">
                <label for="lv1_4">Excellent</label>
                <input type="radio" id="lv2_3" name="level2" value="3">
                <label for="lv1_3">Good</label>
                <input type="radio" id="lv2_2" name="level2" value="2">
                <label for="lv1_2">Fair</label>
                <input type="radio" id="lv2_1" name="level2" value="1">
                <label for="lv1_1">Poor</label>
                </div>
              </div> 
              <div class="form-group">
                <label >Test taken:</label>
                 <input type="text" class="form-control" id="test2" placeholder="eg. IELTS">
              </div>
              <div class="form-group" >
                <label for="score1">Test score:</label>
                <input type="number" class="form-control" id="score2" placeholder="eg. 6.5">
              </div>
              <div class="form-group">
                <label for="date1">Date taken:</label>
                <input type="month" class="form-control" id="date2">
              </div>
            </form>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <form class="form-inline">
              <div class="form-group">
                <label for="language">Language 3:</label>
                <input type="text" class="form-control" id="language3">
              </div> 
              <div class="form-group">
                <label >Level:</label>
                <div class="radio-toolbar" style="margin-bottom: 0px;">
                <input type="radio" id="lv3_4" name="level3" value="4">
                <label for="lv1_4">Excellent</label>
                <input type="radio" id="lv3_3" name="level3" value="3">
                <label for="lv1_3">Good</label>
                <input type="radio" id="lv3_2" name="level3" value="2">
                <label for="lv1_2">Fair</label>
                <input type="radio" id="lv3_1" name="level3" value="1">
                <label for="lv1_1">Poor</label>
                </div>
              </div> 
              <div class="form-group">
                <label >Test taken:</label>
                 <input type="text" class="form-control" id="test3" placeholder="eg. IELTS">
              </div>
              <div class="form-group" >
                <label for="score1">Test score:</label>
                <input type="number" class="form-control" id="score3" placeholder="eg. 6.5">
              </div>
              <div class="form-group">
                <label for="date1">Date taken:</label>
                <input type="month" class="form-control" id="date3">
              </div>
            </form>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <form class="form-inline">
              <div class="form-group">
                <label for="language">Language 4:</label>
                <input type="text" class="form-control" id="language4">
              </div> 
              <div class="form-group">
                <label >Level:</label>
                <div class="radio-toolbar" style="margin-bottom: 0px;">
                <input type="radio" id="lv4_4" name="level4" value="4">
                <label for="lv1_4">Excellent</label>
                <input type="radio" id="lv4_3" name="level4" value="3">
                <label for="lv1_3">Good</label>
                <input type="radio" id="lv4_2" name="level4" value="2">
                <label for="lv1_2">Fair</label>
                <input type="radio" id="lv4_1" name="level4" value="1">
                <label for="lv1_1">Poor</label>
                </div>
              </div> 
              <div class="form-group">
                <label >Test taken:</label>
                 <input type="text" class="form-control" id="test4" placeholder="eg. IELTS">
              </div>
              <div class="form-group" >
                <label for="score1">Test score:</label>
                <input type="number" class="form-control" id="score4" placeholder="eg. 6.5">
              </div>
              <div class="form-group">
                <label for="date1">Date taken:</label>
                <input type="month" class="form-control" id="date4">
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