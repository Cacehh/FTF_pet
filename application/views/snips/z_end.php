    <!--Extra scripts if needed    -->
    <script>
	   if( !window.jQuery ) document.write('<script src="<?php echo base_url();?>public/js/jquery-3.0.0.min.js"><\/script>');
		
		$('.button-collapse').sideNav({
		menuWidth: 260, // Default is 240
		edge: 'left', // Choose the horizontal origin
		closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
		draggable: true // Choose whether you can drag to open on touch screens
		}
		);
		$(document).ready(function() {
		$('select').material_select();
		});
    </script> 
</body>
</html>

<!--END OF CODE-->