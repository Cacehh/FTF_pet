<br>
<main>
	<div class="row">
			<div class="row">
				<h4 class="offset-s1 col s11">Accounts</h4>
			</div>

			<div class="row grey lighten-1">
				<div class="offset-s1 col s11">
					<p class="flow-text">View, Edit and Add Accounts</p>
				</div>
			</div>

					<?php 
				       $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
				       echo form_open("Admin_ctr/searchAccounts", $attr);
				    ?>

			            <div class="row">
							<div class="col s12">
				                <div class="form-group">

				                    <div class="col-md-6">
										<i class="material-icons prefix">search</i>
				                        <input class="form-control" id="icon_prefix" name="account_name" type="text" value="<?php echo set_value('account_name'); ?>" />
										<label for="icon_prefix">Search for Users</label>
				                    </div>

				                    <div class="col-md-3">
				                        <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Search" />
				                    </div>

				                    <div class="col-md-3">
				                    	<?php			                        	
				                        	echo anchor('Admin_ctr/accounts', 'Refresh User List', 'class=btn btn-primary');
				                         ?>
				                    </div>
				                </div>

			                <?php 
			                    echo form_close(); 
			                ?>
					</div>
				</div>

			<div class="row">
				<div class="col S12">
					<a class="waves-effect waves-light btn right">Add User</a>
				</div>
			</div>
			
			<div class="bordered highlight centered responisve-table container">
				<table>
					<thead>
						<tr>
						<th>#</th>
		                <th>First Name</th>
		                <th>Last Name</th>
		                <th>M.I</th>
		                <th>Username</th>
		                <th>E-mail</th>
		                <th>Mobile</th>
		                <th>Account Type</th>
						</tr>
					</thead>

					<tbody>
						 <?php 
						 	for ($i = 0; $i < count($accountlist); ++$i) { ?>
		                    <tr>
		                    	<td><?php echo ($page+$i+1); ?></td>
		                        <td><?php echo $accountlist[$i]->FirstName; ?></td>
		                        <td><?php echo $accountlist[$i]->LastName; ?></td>
		                        <td><?php echo $accountlist[$i]->MiddleInitial; ?></td>
		                        <td><?php echo $accountlist[$i]->username; ?></td>
		                        <td><?php echo $accountlist[$i]->user_email; ?></td>
		                        <td><?php echo $accountlist[$i]->user_mobile; ?></td>
		                        <td><?php echo $accountlist[$i]->acct_type; ?></td>
		                    </tr>
		                <?php } ?>
					</tbody>
				</table>
			</div>
		</div>
</main>