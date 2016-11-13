<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		
/*		DEFINED CSS IF ONLY IF NECESSARY*/
		
	</style>
</head>
<body>
	
    <!--PUT ALL CONTENT IN MAIN-->
    <!--	USE COLS AND ROWS FOR ALIGNMENT-->
    <main>
        <div class="container">
                  <h3>Product Inventory</h3>
                    <a class="waves-effect waves-light btn deep-orange darken-1 right">Add Product</a>

                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                      <i class="material-icons prefix">search</i>
                                      <input id="search" type="text" class="validate">
                                      <label for="icon_prefix">Search Pet</label>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <table class="highlight">
                            <thead>
                              <tr>
                                  <th data-field="id">Product ID</th>
                                  <th data-field="id">Data Created</th>
                                  <th data-field="name">Product Name</th>
                                  <th data-field="name">Type</th>
                                  <th data-field="name">Brand</th>
                                  <th data-field="price">Quantity</th>
                                  <th data-field="price">Price</th>
                                  <th data-field="price"></th>
                                  <th data-field="price"></th>
                                  <th data-field="price"></th>
                              </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>00001</td>
                                    <td>08/19/2016</td>
                                    <td>Red Dog Collar</td>
                                    <td>Dog Accessories</td>
                                    <td>Design D'Leash</td>
                                    <td>25</td>
                                    <td>&#8369; 570</td>
                                    <td><a href="">View</a></td>
                                    <td><a href=""><i class="material-icons prefix">mode_edit</i></a></td>
                                    <td><a href=""><i class="material-icons prefix">delete_forever</i></a></td>
                                </tr>

                                <tr>
                                    <td>00002</td>
                                    <td>08/19/2016</td>
                                    <td>Pink Cat Collar</td>
                                    <td>Cat Accessories</td>
                                    <td>Design D'Leash</td>
                                    <td>30</td>
                                    <td>&#8369; 640</td>
                                    <td><a href="">View</a></td>
                                    <td><a href=""><i class="material-icons prefix">mode_edit</i></a></td>
                                    <td><a href=""><i class="material-icons prefix">delete_forever</i></a></td>
                                </tr>

                                <tr>
                                    <td>00003</td>
                                    <td>08/19/2016</td>
                                    <td>Rottweiler</td>
                                    <td>Dog</td>
                                    <td>Male</td>
                                    <td>2 months</td>
                                    <td>&#8369; 5,400</td>
                                    <td><a href="">View</a></td>
                                    <td><a href=""><i class="material-icons prefix">mode_edit</i></a></td>
                                    <td><a href=""><i class="material-icons prefix">delete_forever</i></a></td>
                                </tr>

                                <tr>
                                    <td>00004</td>
                                    <td>08/19/2016</td>
                                    <td>Siberian</td>
                                    <td>Cat</td>
                                    <td>Male</td>
                                    <td>4 months</td>
                                    <td>&#8369; 5,100</td>
                                    <td><a href="">View</a></td>
                                    <td><a href=""><i class="material-icons prefix">mode_edit</i></a></td>
                                    <td><a href=""><i class="material-icons prefix">delete_forever</i></a></td>
                                </tr>

                                <tr>
                                    <td>00005</td>
                                    <td>08/19/2016</td>
                                    <td>Mouse Squeeky Toy</td>
                                    <td>Cat Toys</td>
                                    <td>Pet Fun Toys</td>
                                    <td>40</td>
                                    <td>&#8369; 149</td>
                                    <td><a href="">View</a></td>
                                    <td><a href=""><i class="material-icons prefix">mode_edit</i></a></td>
                                    <td><a href=""><i class="material-icons prefix">delete_forever</i></a></td>
                                </tr>

                                <tr>
                                    <td>00006</td>
                                    <td>08/19/2016</td>
                                    <td>Drawf Hamster</td>
                                    <td>Hamster</td>
                                    <td>Male</td>
                                    <td>2 months</td>
                                    <td>>&#8369; 200</td>
                                    <td><a href="">View</a></td>
                                    <td><a href=""><i class="material-icons prefix">mode_edit</i></a></td>
                                    <td><a href=""><i class="material-icons prefix">delete_forever</i></a></td>
                                </tr>

                                <tr>
                                    <td>00007</td>
                                    <td>08/19/2016</td>
                                    <td>Beta Fish Food</td>
                                    <td>Fish Treats</td>
                                    <td>Fishy Treats</td>
                                    <td>15</td>
                                    <td>&#8369; 99</td>
                                    <td><a href="">View</a></td>
                                    <td><a href=""><i class="material-icons prefix">mode_edit</i></a></td>
                                    <td><a href=""><i class="material-icons prefix">delete_forever</i></a></td>
                                </tr>
                            </tbody>
                        </table>

        </div>
    </main>
	
	
	
        <script type="text/javascript" src="jquery-3.0.0.min.js"></script>
        <script src="materialize.min.js"></script> 
        <script>
            $('.button-collapse').sideNav({
              menuWidth: 260, // Default is 240
              edge: 'left', // Choose the horizontal origin
              closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
              draggable: true // Choose whether you can drag to open on touch screens
            }
            );
        </script>
    </body>
</html>