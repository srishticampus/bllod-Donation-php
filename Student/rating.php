<?php 
session_start();
include('header.php');
$tutor_id=$_GET['tutor_id'];
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src="asset/js/rating.js"></script>
<link rel="stylesheet" href="asset/css/style4.css">
		
		<section id="events" class="events">
      <div class="container" data-aos="fade-up">

        <div class="row">
        	 <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
           
              <div class="card-body">
              	<br><br><br>
	
	<div id="ratingSection" style="margin-left: 100px;">
		<div class="row">
			<div class="col-sm-8">
				<form id="ratingForm" method="POST" action="rateing_action.php">
				<br>
				<br>

					<div class="form-group">
						<h4>Rate You Tutor</h4>
						<button type="button" class="btn btn-warning btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<button type="button" class="btn btn-default btn-grey btn-sm rateButton" aria-label="Left Align">
						  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
						</button>
						<input type="hidden" class="form-control" id="rating" name="rating" value="1">
						<input type="hidden" class="form-control" id="itemId" name="itemId" value="<?php echo $id; ?>">
						<input type="hidden" name="action" value="saveRating">
					</div>	
					<input type="hidden" name="tutor_id" value="<?php echo $tutor_id;?>">	
					<div class="form-group">
						<label for="usr">Title*</label>
						<input type="text" class="form-control" id="title" name="title" required>
					</div>
					<div class="form-group">
						<label for="comment">Comment*</label>
						<textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
					</div>

					<div class="form-group">
						<p>Do you want to continue with this Tutor</p>
						<input type="checkbox" name="yes" value="Yes"> Yes
						<input type="checkbox" name="yes" value="No">No
						</div>
					<div class="form-group">
						<button type="submit" class="btn btn-info" id="saveReview" style="background-color: #140fa3">Save Review</button> <button type="button" class="btn btn-info" id="cancelReview" style="background-color: #140fa3">Cancel</button>
					</div>			
				</form>
			</div>
		</div>		
	</div>
</div>
</div>
</div>
</div>
</div>
</section>
	<br>
	<br><br><br>	
<script type="text/javascript">
	$(function() {
	// $('#loginForm').on('submit', function(e){
	// 	$.ajax({
	// 		type: 'POST',
	// 		url : "action.php",
	// 		dataType: "json",			
	// 		data:$(this).serialize(),
	// 		success: function (response) {
	// 			if(response.success == 1) {
	// 				$('#loginModal').modal('hide');
	// 				$('#loggedPanel').removeClass('hidden');
	// 				$('#loggedUser').text(response.username);
	// 				$( "#rateProduct" ).addClass('login');
	// 				// rating section
	// 				$("#ratingDetails").hide();
	// 				$("#ratingSection").show();		
	// 			} else {
	// 				$('#loginError').show();
	// 			}				
	// 		}
	// 	});
	// 	return false;
	// });
	
	// rating form hide/show
 	$( "#rateProduct" ).click(function() {
		if(!$(this).hasClass('login')) {
			$('#loginModal').modal('show');
		} else {		
			$("#ratingDetails").hide();
			$("#ratingSection").show();
		}
	});	
	$( "#cancelReview" ).click(function() {
		$("#ratingSection").hide();
		$("#ratingDetails").show();		
	});	
	// implement start rating select/deselect
	$( ".rateButton" ).click(function() {
		if($(this).hasClass('btn-grey')) {			
			$(this).removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
			$(this).prevAll('.rateButton').removeClass('btn-grey btn-default').addClass('btn-warning star-selected');
			$(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');			
		} else {						
			$(this).nextAll('.rateButton').removeClass('btn-warning star-selected').addClass('btn-grey btn-default');
		}
		$("#rating").val($('.star-selected').length);		
	});
	// save review using Ajax
	// $('#ratingForm').on('submit', function(event){
	// 	event.preventDefault();
	// 	var formData = $(this).serialize();
	// 	$.ajax({
	// 		type : 'POST',
	// 		dataType: "json",	
	// 		url : 'action.php',					
	// 		data : formData,
	// 		success:function(response){
	// 			if(response.success == 1) {
	// 				$("#ratingForm")[0].reset();
	// 				window.location.reload();
	// 			}
	// 		}
	// 	});		
	// });
});
</script>
<?php include('footer.php');?>








