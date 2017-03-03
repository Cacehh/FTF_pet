<br>
<!-- initial test script for computation of total amount plus discount. -->
<script type="text/javascript">
// function calculate() {
//    var quant=0;
//    var price=0;
//    var discount=0;
//    var afterDiscount=0;
//
//     pack = Number(document.discountCalculator.pack.value);
//     price = Number(document.discountCalculator.price.value);
//     discount = Number(document.discountCalculator.discount.value);
//
//
//     subtotal=(pack*price);
//     disctotal=([pack*price]*discount/100);
//  	afterDiscount=(pack * [price - ( price*discount/100 )]);
//
//    document.discountCalculator.pack.value=pack.toFixed(0);
//    document.discountCalculator.price.value=price.toFixed(2);
//    document.discountCalculator.discount.value=discount.toFixed(2);
//    document.discountCalculator.subtotal.value=subtotal.toFixed(2);
//    document.discountCalculator.disctotal.value=disctotal.toFixed(2);
//    document.discountCalculator.afterDiscount.value=afterDiscount.toFixed(2);
//
// }
</script>

<body OnLoad="document.form1.prod_name.focus();">
<main >
<br>
	<div class="row">
		<div class="input-field col s7">
			<div class="row">
				<div class="col s12">

					<script type="text/javascript">
					//POST DELETE NOT WORKING
						// $(document).ready(function() {
						// 	$('#username').autocomplete({
						// 		source: "<?php echo site_url('prod_model/search/?'); ?>"
						// 	});
						// });
					</script>

					<?php
                  $attr = array("class" => "form-horizontal", "role" => "form", "id" => "form1", "name" => "form1");
                  echo form_open("POS_ctr/search", $attr);
               ?>

	                <div class="form-group">
	                    <div class="col-md-6">
							<i class="material-icons prefix">search</i>
	                        <input class="form-control" id="icon_prefix" name="prod_name" type="text" value="<?php echo set_value('prod_name'); ?>" />
							<label for="icon_prefix">Search for Pets and Products</label>
							<!-- <input id="icon_prefix" type="text" class="validate"> -->
	                    </div>

	                    <div class="col-md-6">
	                        <input id="btn_search" name="btn_search" type="submit" class="btn btn-danger" value="Search" />
	                        <?php
	                        	if ($acct_type == '1') {
	                        	/*
	                        		<a href="
	                        		<?php
	                        			echo base_url(). "index.php/POS_ctr/index";
	                        		?>
	                        		" class="btn btn-primary">Refresh Product List</a>
	                        	*/
	                        		echo anchor('POS_ctr/index', 'Refresh Product List', 'class=btn btn-primary');
	                        	} else {
	                        		echo anchor('POS_ctr/index', 'Refresh Product List', 'class=btn btn-primary');
	                        	}
	                         ?>
	                    </div>
	                </div>

	                <?php
	                    echo form_close();
	                ?>
				</div>
			</div>

			<div class="row">
				<table class="bordered centered highlight ">
				<!-- <table class="bordered stripped centered responsive-table"> -->
	                <thead>
	                    <tr>
	                    <!-- <th>#</th> -->
	                    <th>ID</th>
	                    <th>Name</th>
	                    <th>Category</th>
	                    <th>In-Stock</th>
	                    <th>Price</th>
	                    <th>Add</th>
	                    </tr>
	                </thead>

	                <tbody>
	                    <?php for ($i = 0; $i < count($prodlist); ++$i) { ?>
                        <tr>
	                        <!-- <td><?php echo ($page+$i+1); ?></td> -->
	                        <td><?php
                              $id = $prodlist[$i]->ID;
                              echo $id;
                           ?></td>
	                        <td><?php
                              $name = $prodlist[$i]->ProdName;
                              echo $name;
                           ?></td>
	                        <td><?php
                              $cat = $prodlist[$i]->Category;
                              echo $cat;
                           ?></td>
	                        <td><?php
                              $qty = $prodlist[$i]->Quantity;
                              echo $qty;
                           ?></td>
	                        <td>
                              <?php
	                    <tr>
	                        <td><?php echo ($page+$i+1); ?></td>
	                        <td><?php echo $prodlist[$i]->ProdID; ?></td>
	                        <td><?php echo $prodlist[$i]->ProdName; ?></td>
	                        <td><?php echo $prodlist[$i]->Category; ?></td>
	                        <td><?php echo $prodlist[$i]->Quantity; ?></td>
	                        <td><?php
		                        echo "&#8369;";
		                        $price = $prodlist[$i]->Amount;
                              echo $price;
                              ?>
                           </td>
	                        <td>
                              <?php
                                 echo form_open('POS_ctr/add');
                                 echo form_hidden('id', $id);
                                 echo form_hidden('qty', $qty);
                                 echo form_hidden('price', $price);
                                 echo form_hidden('name', $name);
                                 echo form_hidden('cat', $cat);
                                 $add = array(
                                    'class' => 'btn btn-primary form-control',
                                    'value' => 'Add to Cart',
                                    'name' => 'action', 'type' => 'submit');
                                 echo form_submit ($add);
                                 echo form_close();
                              ?>
	                        </td>
                        </tr>
	                    <?php } ?>
	                </tbody>
            	</table>
			</div>
		</div>

		<div class="col s5">
			<div class="card grey lighten-2">
				<div class="card-content white-text">
					<i class="material-icons prefix blue-text">perm_identity</i>
					<span class="card-title">
                  <b class="blue-text">Dela Cruz, Juan Tamad</b>
               </span>
				</div>
				<style type="text/css">
					#style-2::-webkit-scrollbar-track
					{
						-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
						border-radius: 10px;
						background-color: #F5F5F5;
					}

					#style-2::-webkit-scrollbar
					{
						width: 12px;
						background-color: #F5F5F5;
					}

					#style-2::-webkit-scrollbar-thumb
					{
						border-radius: 10px;
						-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
						background-color: #ff7043;
					}
					#style-2 {
						overflow: scroll;
                  /*height of the products scrollbar*/
						height: 300px;
						overflow-x: hidden;
					}
				</style>

            <?php
               $cart_check = $this->cart->contents();
               if (empty($cart_check)) {
                  echo 'Start a new sale! Add an item to the cart!';
               }
             ?>
             <?php
               if($cart = $this->cart->contents()){
             ?>
				<div class="card-action" id="style-2">
					<div class="col s1 center">
						<b>Quantity</b>
					</div>
					<div class="col s7 center">
						<b>Item Name</b>
					</div>
					<div class="col s4 center">
						<b>Price</b>
					</div>
					<br>
               <?php
               echo form_open('POS_ctr/update');
               $grand_total = 0;
               $i = 1;

               foreach ($cart as $item) {
                  echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                  echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                  echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                  echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                  echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                  ?>
                  <?php $grand_total = $grand_total + $item['subtotal']; ?>

					<ul class="collapsible" data-collapsible="accordion">
						<li>
							<div class="collapsible-header">
								<div class="row">
									<div class="col s2 center">
										<?php //echo $item['qty']; ?>
                              <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" Class="center"'); ?>
									</div>
									<div class="col s6 center">
										<?php echo $item['name']; ?>
									</div>
									<div class="col s4 right-align">
										&#x20B1; <?php echo number_format($item['price'],2) ?>
									</div>
								</div>
							</div>
							<div class="collapsible-body white">
								<div class="row">
									<!-- <div class="input-field col s3">
										<input id="qty" type="number" class="validate">
										<label for="qty">QTY</label>
									</div> -->
									<div class="input-field col s5">
										<input id="price" type="number" class="validate" value="<?php echo number_format($item['price'],2) ?>">
										<label for="price"><?php echo number_format($item['price'],2) ?></label>
									</div>
									<div class="input-field col s4">
										<input id="discount" type="number" class="validate">
										<label for="discount">Discount</label>
									</div>
									<!-- <div class="input-field col s12">
										<input id="note" type="text" class="validate">
										<label for="note">Add note...</label>
									</div> -->
								<a class="right" href="#">View product information.</a>
								</div>
							</div>
						</li>
					</ul>
               <?php }?>
				</div>
            <div class="row">
               <div class="col s9">
                  <input  class ='btn btn-danger' type="submit" value="Update" >
                  <a class="waves-effect waves-light btn red" type="submit"><i class="material-icons">refresh</i></a>
               </div>
               <div class="col s3">
                  <a onClick="clear_cart()" class="waves-effect waves-light btn red"><i class="material-icons">clear</i></a>
               </div>
            </div>
            <?php form_close(); ?>

				<div class="card-action">
					<div class="row">
						<div class="col s6">
							<b>Sub-total</b>
						</div>
						<div class="right-align col s6">
							<!-- <b>&#x20B1; 4,600</b> -->
                     <b>&#x20B1;
                        <?php echo number_format($grand_total,2);  ?>
                     </b>
						</div>
						<div class="col s6">
							<b>Discount</b>
						</div>
						<div class="right-align col s6">
							<b>&#x20B1; 0</b>
						</div>
						<div class="col s6">
							<h5 style="font-size: 40px">TOTAL</h5>
						</div>
						<div class="right-align col s6">
							<h5 style="font-size: 40px">&#x20B1; 4,600</h5>
						</div>
					</div>
				</div>
				<div class="card-action">
					<a class="waves-effect waves-light btn-large"><i class="material-icons left">payment</i>Pay</a>
					<a class="waves-effect waves-light btn-large"><i class="material-icons left">payment</i>Park Order</a>
				</div>
			</div>
		</div>
	</div>

	<br>
	<br>
	<br>
</main>
<?php } ?>
