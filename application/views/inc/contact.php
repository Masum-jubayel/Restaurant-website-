	<!-- contact form -->
		<div class="contact-w3ls" id="contact">
			<div class="container">
				<h3>contact form</h3>
					<form action="<?php echo base_url(); ?>new_controller/contact_info" method="post">
						<div class="col-md-5 col-sm-5 contact-left agileits-w3layouts">
						
							<div class="form-control"> 
								<label class="header">Full Name <span>:</span></label>
								<input type="text" name="first_name" placeholder="Name" required="">
							</div>
							
							<div class="form-control"> 
								<label class="header">Email <span>:</span></label>
								<input type="email"  class="email" name="email" placeholder="Email" required="">
							</div>
							
							<div class="form-control">
								<label class="header">Mobile Number <span>:</span></label>
								<input type="text" name="number" placeholder="Mobile Number" required="">
							</div>	
							
						</div> 
						<div class="col-md-7 col-sm-7 contact-right agileits-w3layouts">
							<div class="form-control">
								<label class="header">Message <span>:</span></label>
								<textarea name="msg" placeholder="Message" required=""></textarea>
							</div>	
						<div class="clearfix"> </div> 
						</div>
							<input type="submit" value="Send">
					</form>
			</div>  
		</div>  
	<!-- //contact form -->