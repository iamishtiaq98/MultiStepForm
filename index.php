<?php 
include('header.php');
?>
<title>Multi Step Form using jQuery, Bootstrap and PHP</title>
<script type="text/javascript" src="script/form.js"></script>

<style type="text/css">
  #register_form fieldset:not(:first-of-type) {
    display: none;
  }
</style>
<?php include('container.php');?>

<div class="container">
	<h2>Multi Step Form using jQuery, Bootstrap and PHP</h2>		
	<div class="progress">
	<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
	</div>
	<div class="alert alert-success hide"></div>	
	<form id="register_form" novalidate action="multi_form_action.php"  method="post">	
	<fieldset>
	<h2>Step 1: Add Account Details</h2>
	<div class="form-group">
	<label for="email">Email address*</label>
	<input type="email" class="form-control" required id="email" name="email" placeholder="Email">
	</div>
	<div class="form-group">
	<label for="password">Password*</label>
	<input type="password" class="form-control" name="password" id="password" placeholder="Password">
	</div>
	<input type="button" class="next-form btn btn-info" value="Next" />
	</fieldset>	
	<fieldset>
	<h2> Step 2: Add Personal Details</h2>
	<div class="form-group">
	<label for="first_name">First Name</label>
	<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
	</div>
	<div class="form-group">
	<label for="last_name">Last Name</label>
	<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
	</div>
	<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
	<input type="button" name="next" class="next-form btn btn-info" value="Next" />
	</fieldset>
	
	<fieldset>
	<h2>Step 3: Add Contact Information</h2>
	<div class="form-group">
	<label for="mobile">Mobile*</label>
	<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number">
	</div>
	<div class="form-group">
	<label for="address">Address</label>
	<textarea  class="form-control" name="address" placeholder="Communication Address"></textarea>
	</div>
	<input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
	<input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
	</fieldset>
	</form>
		
			
</div>	
<?php include('footer.php');?> 