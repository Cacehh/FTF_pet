
<?php
// if (isset($this->session->userdata['logged_in'])) {
// 	$username = ($this->session->userdata['logged_in']['username']);
// 	// $email = ($this->session->userdata['logged_in']['email']);
// } else {
// 	header("location: login");
// }
?>
<main>
	<br>

	<div class="row">
		<div class="row">
			<h4 class="offset-s1 col s11">Retail Dashboard</h4>
		</div>
		<div class="row grey lighten-1">
			<div class="offset-s1 col s11">
				<p class="flow-text">Quick view of how the store is doing</p>
			</div>
		</div>
		<div class="col s12 center">
			<div class="col s12">
			<a class="waves-effect waves-light btn deep-orange accent-2">Day</a>
			<a class="waves-effect waves-light btn deep-orange accent-2">Week</a>
			<a class="waves-effect waves-light btn deep-orange accent-2">Month</a>
			</div>
		</div>
		<div class="col s3">
			<div class="card deep-orange accent-1">
				<div class="card-content ">
					<span class="card-title"><h6>Sale Count</h6></span>
					<br>
					<br>
					<p class="center">
						<i>Graph using <b>chart.js</b></i>
					</p>
					<br>
					<br>
				</div>
				<div class="card-action">
					<a class="white-text" href="#">Check whole report</a>
				</div>
			</div>
		</div>
		
		<div class="col s3">
			<div class="card deep-orange accent-1">
				<div class="card-content ">
					<span class="card-title"><h6>Customer Count</h6></span>
					<br>
					<br>
					<p class="center">
						<i>Graph using <b>chart.js</b></i>
					</p>
					<br>
					<br>
				</div>
				<div class="card-action">
					<a class="white-text" href="#">Check whole report</a>
				</div>
			</div>
		</div>
			
		<div class="col s3">
			<div class="card deep-orange accent-1">
				<div class="card-content ">
					<span class="card-title"><h6>Gross Profit</h6></span>
					<br>
					<br>
					<p class="center">
						<i>Graph using <b>chart.js</b></i>
					</p>
					<br>
					<br>
				</div>
				<div class="card-action">
					<a class="white-text" href="#">Check whole report</a>
				</div>
			</div>
		</div>
		
		<div class="col s3">
			<div class="card deep-orange accent-1">
				<div class="card-content ">
					<span class="card-title"><h6>Revenue</h6></span>
					<br>
					<br>
					<p class="center">
						<i>Graph using <b>chart.js</b></i>
					</p>
					<br>
					<br>
				</div>
				<div class="card-action">
					<a class="white-text" href="#">Check whole report</a>
				</div>
			</div>
		</div>
	</div>
	<div class="divider">
	</div>
	
	<div class="row">
		<div class="col s12">
		<br><br><br><br><br>
		<br><br><br><br><br>
		</div>
	</div>
</main>