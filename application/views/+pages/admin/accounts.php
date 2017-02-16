<br>
<main>
	<div class="row">
		<div class="row">
			<a href="<?php echo base_url()?>index.php/Admin_ctr/accounts">
				<h4 class="offset-s1 col s11 black-text">Accounts</h4>
			</a>
		</div>

		<div class="row grey lighten-1">
			<div class="offset-s1 col s8">
				<p class="flow-text">View, Edit and Add Accounts</p>
			</div>
			<div class="col s3">
				<p class="flow-text">
				<a href="<?php echo base_url()?>index.php/Register_ctr" class="waves-effect waves-light btn"><i class="material-icons left">library_add</i>Add User</a>
				</p>
			</div>
		</div>

        <div class="row">
			<div class="col s12 ">
				<?php 
			       $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
			       echo form_open("Admin_ctr/searchAccounts", $attr);
			    ?>
                <div class="row">
                    <div class="offset-s2 col s6 input-field">
						<i class="material-icons prefix">search</i>
                        <input class="form-control" id="icon_prefix" name="account_name" type="text" value="<?php echo set_value('account_name'); ?>" />
						<label for="icon_prefix">Search for Users</label>
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

		<div class="row">
			<div class="col s1"></div>
			<div class="col s10">
			<table class="bordered highlight responisve-table highlight">
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
			<div class="col s1"></div>
		</div>
	</div>
</main>