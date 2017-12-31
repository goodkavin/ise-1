<?php
require 'resources/session.php';
include 'header.php';
$university = "Dartmouth College";
$country = "USA";
?>
<script type="text/javascript">
  $(document).ready(function () {
    $.ajax({
      url: "resources/query.php",
      type: "post",
      cache: false,
      data: {
        query:'course',
        key: 'Dartmouth College'
      },
      success: function (data) {
          $("#result_1").html(data);
      }
    });
    $.ajax({
      url: "resources/query.php",
      type: "post",
      cache: false,
      data: {
        query:'application_course',
        application_id : $('#application').val(),
        university_no : $('#university_no').val()
      },
      success: function (data) {
          $("#application_course").html(data);
      }
    });
    $("#btnRequest").click(function () {
      $.ajax({
          url: "resources/query.php",
          type: "post",
          cache: false,
          data: {
            query: 'request',
            program: $('input[name="program"]:checked').val(),
            course_1_number : $('#course_1_number').val(),
            course_1_title : $('#course_1_title').val(),
            course_1_credit : $('#course_1_credit').val(),
            course_1_hour : $('#course_1_hour').val(),
            course_2_number : $('#course_2_number').val(),
            course_2_title : $('#course_2_title').val(),
            course_2_credit : $('#course_2_credit').val(),
            course_2_hour : $('#course_2_hour').val(),
            course_2_detail : $('#course_2_detail').val(),
            course_2_university : $('#university').val(),
            course_2_country : $('#country').val(),
          },
          success: function (data) {
            if(data==1) {
              alert('Request has been sent!');
              location.reload();
            } else {
              alert(data);
            }
          }
      });
    });
  });
  $(function() {
    $(document).on('click', '#add', function() {
      //console.log($(this).parent().find("input[type='hidden']").val());
      /*
      $('#course tbody:last-child').append('\
              <tr> \
                <td>Add</td> \
                <td>Add</td> \
                <td>Add</td> \
                <td>Add</td> \
                <td>Add</td> \
                <td>Add</td> \
                <td>Add</td> \
                <td>Add</td> \
                <td>Add</td> \
                <td>Add</td> \
              </tr>');
      */
      $.ajax({
        url: "resources/query.php",
        type: "post",
        cache: false,
        data: {
          query: 'take',
          application_id : $('#application').val(),
          university_no : $('#university_no').val(),
          course_id : $(this).parent().find("input[type='hidden']").val(),
        },
        success: function (data) {
          if(data==1) {
            alert('Course has been added');
            location.reload();
          } else {
            alert(data);
          }
        }
      });
    });
    $(document).on('click', '#remove', function() {
      $.ajax({
        url: "resources/query.php",
        type: "post",
        cache: false,
        data: {
          query: 'remove',
          application_id : $('#application').val(),
          university_no : $('#university_no').val(),
          course_id : $(this).parent().find("input[type='hidden']").val(),
        },
        success: function (data) {
          if(data==1) {
            alert('Course has been removed');
            location.reload();
          } else {
            alert(data);
          }
        }
      });
    });
  });
</script>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="panel_title">
              <div>
                University 1 : Dartmouth College, USA
                <input type="hidden" id="application" value="1">
                <input type="hidden" id="university_no" value="1">
                <input type="hidden" id="university" value="<?=$university?>">
                <input type="hidden" id="country" value="<?=$country?>">
              </div>
            </div>
            <div class="panel_title" style="margin-top: 15px;">Courses :</div>
            <div id="application_course"></div>
          </div>
        </div>
      </div>
      <div class="col-sm-12" style="margin-bottom: 15px; text-align: right;">
        <div class="request" data-toggle="modal" data-target="#myModal">Request new Course</div>
        <label>Status : </label>
        <label style="margin-left: 5px;"><img src="img/ok.png" width="24"> Approved</label>
        <label style="margin-left: 15px;"><img src="img/hold.png" width="24"> Pending</label> 
        <label style="margin-left: 15px;"><img src="img/no.png" width="24"> Cancle </label>
      </div>
      <div class="col-sm-12">
        <div id="result_1"></div>
      </div>
    </div>
  </div>

</body>
</html>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Request new Course</h4>
      </div>
      <div class="modal-body">
        <div style="font-weight: bold; font-size: 18px;">Chulalongkorn :</div>
        <form class="form-inline">
        <div class="request_input">
          <div class="form-group">
            <label for="course_1_number">Course # </label>
            <input type="text" class="form-control" id="course_1_number">
          </div>
          <div class="form-group">
            <label for="course_1_title">Course Title: </label>
            <input type="text" class="form-control" id="course_1_title">
          </div>
          <div class="form-group">
            <label for="course_1_credit">Course Credit: </label>
            <input type="text" class="form-control" id="course_1_credit">
          </div>
          <div class="form-group">
            <label for="course_1_hour">Course Hour: </label>
            <input type="text" class="form-control" id="course_1_hour">
          </div>
          <div class="radio-toolbar" style="margin-top: 10px; margin-bottom: -5px;">
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
        <div style="font-weight: bold; font-size: 18px; margin-top: 20px;">External Institution :</div>
        <div class="request_input">
          <div class="form-group">
            <label for="course_2_number">Course # </label>
            <input type="text" class="form-control" id="course_2_number">
          </div>
          <div class="form-group">
            <label for="course_2_title">Course Title: </label>
            <input type="text" class="form-control" id="course_2_title">
          </div>
          <div class="form-group">
            <label for="course_2_credit">Course Credit: </label>
            <input type="text" class="form-control" id="course_2_credit">
          </div>
          <div class="form-group">
            <label for="course_2_hour">Course Hour: </label>
            <input type="text" class="form-control" id="course_2_hour">
          </div>
          </form>
           <label for="course_2_detail">Course Detail: </label>
          <textarea class="form-control" id="course_2_detail" style="width: 80%;" rows="2"></textarea> 
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" id="btnRequest">Request</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
