<!-- customer -->
		<div class="customer jarallax" id="customer">
		    <div class="agileinfo-dot">
				<div class="container">
					<h3>Customer Says</h3>


					

					<form action="<?php echo base_url(); ?>new_controller/review_info" method="post">
						<table>
							<tr> 	 	 
								<td><input type="text" name="re_name" placeholder="Name" required="">
									<input type="text" name="re_email" placeholder="Email" required="">
								</td>
							</tr>
							<tr>
								<td>
									<textarea name="re_body" placeholder="Say Something" required=""></textarea>
								</td>
							</tr>
							<tr>
								<td><input type="submit" value="Send As Review"></td>
							</tr>
						</table>
					</form>

						
							
						 
				<div class="customer-grids">
					<ul id="flexiselDemo1">	

					 <?php 
				        if ($fatch_data->num_rows()>0) {
				            foreach ($fatch_data->result() as $row){ ?>		
						<li>
							<div class="customer-grid">


							    <p><?php echo $row->re_body; ?></p>

								<h4><?php echo $row->re_name; ?></h4>
							     
							</div>
							<?php }
						    }else{ ?>

							    <p> No Data here </p>
						        <!-- <span>Daily customer</span> -->
						<?php }?>
						</li>

						


					</ul>
					<script type="text/javascript">
								$(window).load(function() {
									$("#flexiselDemo1").flexisel({
										visibleItems: 3,
										animationSpeed: 1000,
										autoPlay: true,
										autoPlaySpeed: 3000,    		
										pauseOnHover: true,
										enableResponsiveBreakpoints: true,
										responsiveBreakpoints: { 
											portrait: { 
												changePoint:480,
												visibleItems: 1
											}, 
											landscape: { 
												changePoint:640,
												visibleItems:3
											},
											tablet: { 
												changePoint:768,
												visibleItems: 3
											}
										}
									});
									
								});
						</script>
						<script type="text/javascript" src="<?php echo base_url(); ?>resource/js/jquery.flexisel.js"></script>
				</div>
			</div>
		</div>
	</div>
	<!-- //customer -->
