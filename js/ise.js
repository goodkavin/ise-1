$(document).ready(function(){
	$("#btnSearch").click(function () {
	    $.ajax({
	        url: "resources/search.php",
	        type: "post",
	        cache: false,
	        data: {
	        	course_institute : $('input[name="course_institute"]:checked').val(),
	        	course_number : $('input[name="course_number"]').val(),
	        	course_title : $('input[name="course_title"]').val(),
	        	ins_country : $('select[name="ins_country"] option:selected').val(),
	        	ins_name : $('input[name="ins_name"]').val(),
	        	program : $('input[name="program"]:checked').val()
	        },
	        beforeSend: function () {
	            $(".loading").show();
	        },
	        complete: function () {
	            $(".loading").hide();
	        },
	        success: function (data) {
	            $("#result").html(data);
	        }
	    });
	});
	$('input[name=ins_name]').autocomplete({
      focus: function (event, ui) {
        $(".ui-helper-hidden-accessible").hide();
        event.preventDefault();
      },
      source: function( request, response ) {
        $.ajax({
          url : 'resources/query.php',
          type: "post",
          dataType: "json",
          data: {
            query:'university',
            key: $('input[name=ins_name]').val()
          },
          success: function(data) {
          	if(data.length==0) return;
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
    });
});