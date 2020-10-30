<?php include("includes/header.php"); ?>

	
	<section class="rental-section">
		<div class="container">
			<div class="card">
				<div class="card-header">
					<h4>Submit a ticket</h4>
				</div>
				<div class="card-body">
					<form id="create_tic" method="post">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-left mb-3">
									<h5>Ticket Information</h5>
								</div>
							</div>
							<div class="col-md-4 col-12">
								<div class="form-group">
									<label>Department *</label>
								</div>
							</div>
							<div class="col-md-8 col-12">
								<div class="form-group">
									<select class="form-control" name="support" id="support">
										<option value="PWSLab DevOps Support" selected>PWSLab DevOps Support</option>
										<option value="iSupport">iSupport</option>
									</select>
								</div>
							</div>
								<div class="col-md-4 col-12 devops-support">
									<div class="form-group">
										<label>Category *</label>
									</div>
								</div>
								<div class="col-md-8 col-12 devops-support">
									<div class="form-group">
										<select class="form-control" name="category">
											<option value="">-None-</option>
											<option value="NEW Project CI/CD Pipeline Setup">NEW Project CI/CD Pipeline Setup</option>
											<option value="Update CI/CD Pipeline Configuration">Update CI/CD Pipeline Configuration</option>
											<option value="DevSecOps Pipeline Setup">DevSecOps Pipeline Setup</option>
											<option value="CI/CD pipeline failure">CI/CD pipeline failure</option>
											<option value="Automated Deployment failure">Automated Deployment failure</option>
											<option value="Docker and Containers">Docker and Containers</option>
										</select>
									</div>
								</div>
								<div class="col-md-4 col-12 devops-support">
									<div class="form-group">
										<label>PWSLab Project URL *</label>
									</div>
								</div>
								<div class="col-md-8 col-12 devops-support">
									<div class="form-group">
										<input type="text" name="project_url" id="project_url" class="form-control">
									</div>
								</div>
								<div class="col-md-4 col-12 devops-support">
									<div class="form-group">
										<label>Subject *</label>
									</div>
								</div>
								<div class="col-md-8 col-12 devops-support">
									<div class="form-group">
										<input type="text" name="subject" class="form-control">
									</div>
								</div>
								<div class="col-md-4 col-12 devops-support">
									<div class="form-group">
										<label>Description *</label>
									</div>
								</div>
								<div class="col-md-8 col-12 devops-support">
									<div class="form-group">
										<textarea class="form-control" name="desc"></textarea>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="text-left mb-3">
										<h5>Contact Details</h5>
									</div>
								</div>
								<div class="col-md-4 col-12 devops-support">
									<div class="form-group">
										<label>Contact Name *</label>
									</div>
								</div>
								<div class="col-md-8 col-12 devops-support">
									<div class="form-group">
										<input type="text" name="contact_name" id="contact_name" class="form-control" value="<?php echo $_SESSION['user_name']; ?>">
									</div>
								</div>
								<div class="col-md-4 col-12 devops-support">
									<div class="form-group">
										<label>Email *</label>
									</div>
								</div>
								<div class="col-md-8 col-12 devops-support">
									<div class="form-group">
										<input type="text" name="email" class="form-control" value="<?php echo $_SESSION['user_email']; ?>">
									</div>
								</div>
								<div class="col-md-4 col-12 devops-support">
									<div class="form-group">
										<label>Phone Number</label>
									</div>
								</div>
								<div class="col-md-8 col-12 devops-support">
									<div class="form-group">
										<input type="text" name="phno" class="form-control" value="<?php echo $_SESSION['user_phno']; ?>">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="text-left mb-3">
										<h5>Additional Information</h5>
									</div>
								</div>
								<div class="col-md-4 col-12 devops-support">
									<div class="form-group">
										<label>Priority *</label>
									</div>
								</div>
								<div class="col-md-8 col-12 devops-support">
									<div class="form-group">
										<select class="form-control" name="priority">
											<option value="">-None-</option>
											<option value="1">High - Production System Down</option>
											<option value="2">Medium - System Impaired</option>
											<option value="3">Low - General Guidance</option>
										</select>
									</div>
								</div>
								<div class="col-md-4 col-12 devops-support">
									<div class="form-group">
										<label>Attach a file</label>
									</div>
								</div>
								<div class="col-md-8 col-12 devops-support">
									<div class="form-group">
										<input type="file" name="attach_file" class="form-control">
									</div>
								</div>
								<div class="col-md-4 col-12 isupport">
									<div class="form-group">
										<label>Contact Name *</label>
									</div>
								</div>
								<div class="col-md-8 col-12 isupport">
									<div class="form-group">
										<input type="text" name="sup_contact_name" class="form-control" value="<?php echo $_SESSION['user_name']; ?>">
									</div>
								</div>
								<div class="col-md-4 col-12 isupport">
									<div class="form-group">
										<label>Email</label>
									</div>
								</div>
								<div class="col-md-8 col-12 isupport">
									<div class="form-group">
										<input type="text" name="sup_email" class="form-control" value="<?php echo $_SESSION['user_email']; ?>">
									</div>
								</div>
								<div class="col-md-4 col-12 isupport">
									<div class="form-group">
										<label>Phone Number</label>
									</div>
								</div>
								<div class="col-md-8 col-12 isupport">
									<div class="form-group">
										<input type="text" name="sup_phno" class="form-control" value="<?php echo $_SESSION['user_phno']; ?>">
									</div>
								</div>
								<div class="col-md-4 col-12 isupport">
									<div class="form-group">
										<label>Subject *</label>
									</div>
								</div>
								<div class="col-md-8 col-12 isupport">
									<div class="form-group">
										<input type="text" name="sup_subject" class="form-control">
									</div>
								</div>
								<div class="col-md-4 col-12 isupport">
									<div class="form-group">
										<label>Description</label>
									</div>
								</div>
								<div class="col-md-8 col-12 isupport">
									<div class="form-group">
										<textarea class="form-control" name="sup_desc"></textarea>
									</div>
								</div>
								<div class="col-lg-12 isupport">
									<div class="text-left mb-3">
										<h5>Additional Information</h5>
									</div>
								</div>
								<div class="col-md-4 col-12 isupport">
									<div class="form-group">
										<label>Priority</label>
									</div>
								</div>
								<div class="col-md-8 col-12 isupport">
									<div class="form-group">
										<select class="form-control" name="sup_priority">
											<option value="0">-None-</option>
											<option value="1">High - Production System Down</option>
											<option value="2">Medium - System Impaired</option>
											<option value="3">Low - General Guidance</option>
										</select>
									</div>
								</div>
								<div class="col-md-4 col-12 isupport">
									<div class="form-group">
										<label>Attach a file</label>
									</div>
								</div>
								<div class="col-md-8 col-12 isupport">
									<div class="form-group">
										<input type="file" name="sup_file" class="form-control">
									</div>
								</div>
							<input type="hidden" name="mode" value="CreateTicket">
							<input type="hidden" name="email" value="<?php echo $_SESSION['user_email']; ?>">
							<div class="col-lg-12">
								<div class="text-center mt-3">
									<button type="submit" class="btn btn-primary">Create Ticket</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
<div class="modal" id="Modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><i class="fas fa-exclamation-circle"></i>Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>The information previously entered will not be retained. Are you sure you want to switch department?</p>
      </div>
      <div class="modal-footer">
        <button type="button" id="ok_click" class="btn btn-primary">OK</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<script>
$('.isupport').hide();
$('#support').on('change', function(){
	console.log($('#support').val())
	if($('#support').val() == 'PWSLab DevOps Support'){
		if($('#sup_subject').val()){
			$('#Modal').modal('show')
		}else{
			$('.devops-support').show();
			$('.isupport').hide();
		}
	}else{
		
		if ($('#project_url').val()) {
			$('#Modal').modal('show')
		}
		else{
			$('.devops-support').hide();
			$('.isupport').show();
		}
	}
	
});
$('#ok_click').on('click', function(){
	$('#Modal').modal('hide')
	if($('#support').val() == 'PWSLab DevOps Support'){
		
		$('.devops-support').show();
		$('.isupport').hide();
		
	}else{
		 
		$('.devops-support').hide();
		$('.isupport').show();
		
	}
});

$('#create_tic').validate({
        rules: {
            support: {
                required: true
            },
            category: {
                required: true
            },
            project_url: {
                required: true,
				url: true
            },
            subject: {
                required: true
            },
            desc: {
                required: true
            },
            priority: {
                required: true
            },
            contact_name: {
                required: true
            },
            email: {
                required: true,
				laxEmail: true
            },
            phno: {
                required: true
            },
            sup_contact_name: {
                required: true
            },
            sup_email: {
                required: true,
				laxEmail: true
            }, 
            sup_subject: {
                required: true
            },
            sup_desc: {
                required: true
            },
            sup_priority: {
                required: true
            },
            txt_password: {
                required: !0
            },
        },
        submitHandler: function(form) {
            var formData = new FormData($('#create_tic')[0]);
            $.ajax({
                url: "modules/ticket_creation/functions.php",
                data: formData,
                type: 'post',
                async: !1,
                dataType: 'json',
                success: function(response) {
                     console.log(response);
                    
                },
                error: function(response) {
                    console.log(response)
                },
                cache: !1,
                contentType: !1,
                processData: !1
            })
        },
    })
</script>

	
<?php include("includes/footer.php"); ?>