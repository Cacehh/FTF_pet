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
                          <div class="row">
                                <form class="col s12">
                                    <div class="row">
                                        <h5>Pet ID: 00023</h5>
                                    </div>

                                    <div class="row">
                                        <div class="input-field col s4">
                                          <input id="last_name" type="text" class="validate" value="Siberian Husky">
                                          <label for="last_name">Breed</label>
                                        </div>
                                        
                                         <div class="input-field col s4">
                                          <input id="last_name" type="text" class="validate" value="Dog">
                                          <label for="last_name">Type</label>
                                        </div>
                                        
                                         <div class="input-field col s4">
                                            <input id="phone_num" type="text" class="validate" value="Female">
                                            <label for="phone_num">Gender</label>
                                        </div>
                                    </div>
                                </form>
                            </div>

                          <div class="row">

                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s6 ">
                                      <input id="phone_num" type="text" class="validate" value="3 months">
                                      <label for="phone_num">Age</label>
                                    </div>
                                    
                                    <div class="input-field col s6 ">
                                      <input id="phone_num" type="text" class="validate" value="3">
                                      <label for="phone_num">Quantity</label>
                                    </div>

                                    <div class="input-field col s6">
                                      <input id="mobile_num" type="text" class="validate" value="&#8369; 4,890">
                                      <label for="mobile_num">Price</label>
                                    </div>
                                </div>
                            </form>
                          </div>

                            <div class="row">
                                <form action="#">
                                    <div class="file-field input-field">
                                      <div class="btn">
                                        <span>File</span>
                                        <input type="file">
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text">
                                      </div>
                                    </div>
                                  </form>
                            </div>
                            
                             <div class = "row right">
                                <a class="waves-effect waves-light btn deep-orange darken-1">Cancel</a>
                                <a class="waves-effect waves-light btn deep-orange darken-1">Add Pet</a>
                            </div>
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