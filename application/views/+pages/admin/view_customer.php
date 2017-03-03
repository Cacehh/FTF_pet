<br>
<main>
	<div class="row">
		<div class="row">
			<a href="<?php echo base_url()?>index.php/Admin_ctr/customers">
				<h4 class="offset-s1 col s11 black-text">Customers</h4>
			</a>
		</div>

		<div class="row grey lighten-1 valign-wrapper">
			<div class="offset-s1 col s8">
				<p class="flow-text">View, Edit and Delete Customers</p>
			</div>
			<div class="col s3">
				<a href="<?php echo base_url()?>index.php/Admin_ctr/customerAdd" class="waves-effect waves-light btn"><i class="material-icons left">library_add</i>Add Customers</a>
			</div>
		</div>
		
		<div class="row">
			<div class="col s12">
				<?php 
               	    $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
               	    echo form_open("Admin_ctr/searchCustomer", $attr);
               	?>
                <div class="row">
                    <div class="input-field offset-s2 col s6">
						<i class="material-icons prefix">search</i>
                        <input class="form-control" id="icon_prefix" name="customer_name" type="text" value="<?php echo set_value('customer_name'); ?>" />
						<label for="icon_prefix">Search for Customer Names</label>
                    </div>

                    <div class="col s2">
                        <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Search" />
                    </div>
                </div>
                <?php 
                    echo form_close(); 
                ?>
			</div>
		</div>
		
		<div class="divider"></div>
		<br>
		<div class="row">
			<br>
			<div class="col s1"></div>
			<div class="col s12">
				<table class="bordered centered highlight responsive-table">
				<!-- <table class="bordered stripped centered responsive-table"> -->
	                <thead>
	                    <tr>
	                    <th data-field ="#">#</th>
	                    <th data-field ="customerID">Customer ID</th>
	                    <th data-field ="Fname">First Name</th>
	                    <th data-field ="Lname">Last Name</th>
	                    <th data-field ="Mname">Middle Name</th>
	                    <th data-field ="Gender">Gender</th>
	                    <th data-field ="Email">E-mail</th>
	                    <th data-field ="Mobile">Mobile Number</th>
	                    <th data-field ="Street">Street</th>
	                    <th data-field ="City">City</th>
	                    <th data-field ="Barsub">Barangay/Subdivision</th>
	                    <th></th>
	                    </tr>
	                </thead>

	                <tbody>
	                    <?php for ($i = 0; $i < count($customerlist); ++$i) { ?>
	                    <tr>
	                        <td><?php echo ($page+$i+1); ?></td>
	                        <td><?php echo $customerlist[$i]->CustomerID; ?></td>
	                        <td><?php echo $customerlist[$i]->FirstName; ?></td>
	                        <td><?php echo $customerlist[$i]->LastName; ?></td>
	                        <td><?php echo $customerlist[$i]->MiddleName; ?></td>
	                        <td><?php echo $customerlist[$i]->Customer_Gender; ?></td>
	                        <td><?php echo $customerlist[$i]->Customer_Email; ?></td>
	                        <td><?php echo $customerlist[$i]->Customer_Mobile; ?></td>
	                        <td><?php echo $customerlist[$i]->Customer_Street; ?></td>
	                        <td><?php echo $customerlist[$i]->Customer_City; ?></td>
	                        <td><?php echo $customerlist[$i]->Customer_Barsub; ?></td>
	                        <!-- <td>
								<a href="<?php echo base_url()?>index.php/Inventory_ctr/editCustomer/<?php echo $customerlist[$i]->ID ?>"><i class="material-icons">mode_edit</i></a>
								<a href="<?php echo base_url()?>index.php/Inventory_ctr/deleteCustomer/<?php echo $customerlist[$i]->ID ?>"><i class="material-icons">delete</i></a>
							</td> -->
	                    </tr>
	                    <?php } ?>
	                </tbody>
            	</table>
			</div>
			<div class="col s1"></div>
			<br>
		</div>
	</div>
</main>