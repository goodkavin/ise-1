<?php
require 'resources/session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ISE Exchange Program</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/isetheme.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/ise.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
    $('#university').autocomplete({
      focus: function (event, ui) {
        $(".ui-helper-hidden-accessible").hide();
        event.preventDefault();
      },
      source: function( request, response ) {
        $.ajax({
          url : 'resources/list.php',
          type: "post",
          dataType: "json",
          data: {
            query:'university',
            key: $('input[name=university_1]').val()
          },
          success: function( data ) {
            response( $.map( data, function(item) {
              return {
                label: item,
                value: item
              }
            }));
          }
        });
      },
      autoFocus: true,
      minLength: 0,
      select: function (e, ui) {
        console.log(ui.item.value);
        //alert(ui.item.value);
        $.ajax({
          url: "resources/list.php",
          type: "post",
          cache: false,
          data: {
            query:'course',
            key: ui.item.value
          },
          success: function (data) {
              $("#result_1").html(data);
          }
        });
      }
    });
  });
  </script>
</head>
<body>

  <div class="iseNav">
    <div class="container"><h1>ISE Exchange Program</h1></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="panel_title">
              <div>University 1 :</div>
            </div>
            <div><input type="text" class="form-control" name="university_1" id="university" placeholder="Select University"></div>
            <div class="panel_title" style="margin-top: 15px;">Courses :</div>
            <div>
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                      <th colspan="4" style="border-bottom: 0px; border-radius: 6px 0 0 0;">Chulalongkorn</th>
                      <th colspan="4" style="border-bottom: 0px;">External Institution</th>
                      <th rowspan="2" style="border-bottom: 0px; border-radius: 0 6px 0 0; text-align: center; vertical-align: middle;"><img src="img/ok.png" width="24"></th>
                  </tr>
                  <tr>
                    <th>Course #</th>
                    <th>Course Title</th>
                    <th>Credit</th>
                    <th>Hours</th>
                    <th>Course #</th>
                    <th>Course Title</th>
                    <th>Credit/ECTS</th>
                    <th>Hours</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Add</td>
                    <td>Add</td>
                    <td>Add</td>
                    <td>Add</td>
                    <td>Add</td>
                    <td>Add</td>
                    <td>Add</td>
                    <td>Add</td>
                    <td>Add</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-12">
        <div id="result_1"></div>
      </div>
    </div>
  </div>

</body>
</html>
