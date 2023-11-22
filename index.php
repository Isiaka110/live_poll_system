<?php
//index.php

?>

<html>  
    <head>  
        <title>GROUP E (Live Poll System in PHP Mysql using Ajax)</title>
		<link rel="stylesheet" href="index.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
		
    </head>  
    <body style="background-color:22223; color:white;">  
        <div class="container">  
            <br />  
            <br />
			<br />
			<h1 align="center" style="font-family:cursive; font-size:bold; text-shadow: 2px 1px 1px red;">Which course is your most favourite this Semester</h1><br />
			<div class="row">
				<div class="col-md-6"> 
					<form method="post" id="poll_form">
						<h3 style="font-family:monospace;">Vote according to your preference</h3>
						<br />
						<div class="radio">
							<label><h4><input type="radio" name="poll_option" class="poll_option" value="Csc201" /> Web Development  (CSC201)</h4></label>
						</div>
						
						<div class="radio">
							<label><h4><input type="radio" name="poll_option" class="poll_option" value="Csc202" /> File Organization  (CSC202)</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="poll_option" class="poll_option" value="Csc203" /> Java Programming  (CSC203)</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="poll_option" class="poll_option" value="Csc204" /> Object Oriented Programming in C++  (CSC204)</h4></label>
						</div>
						<div class="radio">
							<label><h4><input type="radio" name="poll_option" class="poll_option" value="Csc205" /> Computer Hardware  (CSC205)</h4></label>
						</div>
						<br />
						<input type="submit" name="poll_button" id="poll_button" class="btn btn-primary" />
					</form>
					<br />
				</div>
				<div class="col-md-6">
					<br />
					<br />
					<br />
					<h4>Live Poll Result</h4>
					<div id="poll_result" style="text-shadow: 2px 1px 1px 006D77;"></div>
					<h2 id="total_participants" style="font-family:serif;"></h2>
				</div>
			</div>
			
			
			<br />
			<br />
			<br />
		</div>
    </body>  
</html>  
<script>  
$(document).ready(function(){
	
	fetch_poll_data();

	function fetch_poll_data()
	{
		$.ajax({
			url:"fetch_poll_data.php",
			method:"POST",
			success:function(data)
			{
				$('#poll_result').html(data);
				updateTotalParticipants(); // Update the total participants after fetching poll data
			}
		});
	}
	
	function updateTotalParticipants() {
		$.ajax({
			url:"fetch_total_participants.php",
			method:"POST",
			success:function(data)
			{
				$('h2#total_participants').text("Total Participants: " + data);
			}
		});
	}
	
	$('#poll_form').on('submit', function(event){
		event.preventDefault();
		var poll_option = '';
		$('.poll_option').each(function(){
			if($(this).prop("checked"))
			{
				poll_option = $(this).val();
			}
		});
		if(poll_option != '')
		{
			$('#poll_button').attr('disabled', 'disabled');
			var form_data = $(this).serialize();
			$.ajax({
				url:"poll.php",
				method:"POST",
				data:form_data,
				success:function()
				{
					$('#poll_form')[0].reset();
					$('#poll_button').attr('disabled', false);
					fetch_poll_data();
					updateTotalParticipants(); // Update the total participants after submitting the poll
					alert("Poll Submitted Successfully");
				}
			});
		}
		else
		{
			alert("Please Select Option");
		}
	});
	
});  
</script>
