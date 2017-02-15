<br>
<main>
  <div>
    <div class="row">
			<h4 class="offset-s1 col s11">Edit Pet</h4>
		</div>

    <div class="divider"></div>

    <div class="row">
      <form action="<?php echo base_url()?>index.php/Inventory_ctr/savePet/" method="post" name="invSaveEditPet">
        <div class="row">
    			<div class="col s12">
    				<table class="bordered centered highlight">
    				<!-- <table class="bordered stripped centered responsive-table"> -->
    	                <thead>
    	                    <tr>
    	                    <th data-field ="productID">Product ID</th>
    	                    <th data-field ="">Product Name</th>
    	                    <th data-field ="">Category</th>
    	                    <th data-field ="">Amount</th>
    	                    <th data-field ="">Quantity</th>
    	                    <th></th>
    	                    </tr>
    	                </thead>

    	                <tbody>
    	                    <?php foreach($petinvlist as $value) { ?>
    	                    <tr>
    	                        <td><input name="ProdID" type='text' readonly value='<?php echo $value->ProdID; ?>'></input></td>
    	                        <td><input name="ProdName" type='text'value='<?php echo $value->ProdName; ?>'></input></td>
    	                        <td><input name="Category" type='text' value='<?php echo $value->Category; ?>'></input></td>
    	                        <td><input name="Amount" type='text' value='<?php
    	                        	echo "&#8369;";
    	                        	echo $value->Amount; ?>'></td>
    	                        <td><input name="Quantity" type='text' value='<?php echo $value->Quantity; ?>'></input></td>
    	                        <td><input type="submit" value="Save"/></td>
    	                    </tr>
    	                    <?php } ?>
    	                </tbody>
                	</table>

    			</div>
    		</div>
      </form>
    </div>

  </div>
</main>
