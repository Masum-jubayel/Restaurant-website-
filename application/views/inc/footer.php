<!-- Defolt Javascript -->
		<script src="<?php echo base_url(); ?>resource/js/jarallax.js"></script>
		<script src="<?php echo base_url(); ?>resource/js/SmoothScroll.min.js"></script>
		<script type="text/javascript">
			/* init Jarallax */
			$('.jarallax').jarallax({
				speed: 0.5,
				imgWidth: 1366,
				imgHeight: 768
			})
		</script>
		<script type="text/javascript" src="<?php echo base_url(); ?>resource/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>resource/js/easing.js"></script>
		<!-- here stars scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
									
				$().UItoTop({ easingType: 'easeOutQuart' });
									
				});
		</script>
	<!-- //here ends scrolling icon -->


	<!-- Date-Picker-JavaScript -->
		<script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
			});
		</script>
	<!-- //Date-Picker-JavaScript -->

	<!-- banner text effect js file -->
			<script src="<?php echo base_url();?>resource/js/modernizr.custom.72111.js"></script>
	<!-- banner text effect js file -->


</body>
<!-- //Body -->

</html>