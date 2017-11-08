$(document).ready(function(){
	$("#btnSearch").click(function () {
	    $.ajax({
	        url: "search.php",
	        type: "post",
	        cache: false,
	        data: {
	        	program: "ICE",
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
});