</head>
<body OnLoad="document.login.username.focus">
<br>
<br>
<br>
<br>
<main>
	<div class="valign-wrapper blue-grey lighten-5 z-depth-3 container">
		<div class="row">
            <?php if(isset($_SESSION)) {
                echo "</br>";
                echo "<h4 class='message center red-text'>";
                echo $this->session->flashdata('flash_data');
                echo "</h4>";
            } ?>   
            <div class="col s5 loginlogo">
                <br>
                <br>
                <br>
                <a href="#"><img src="<?php echo base_url()?>public/media/Badge2.png"></a>
            </div>
            <div class="col s7">
				<br>
				<br>
                <h5 class="">Login | WebAdmin for <b>Fins, Tails n Feathers</b></h5>
                <?php 
                    $attributes = array('name' => 'login');
                    echo form_open('Web_Access',$attributes); 
                ?>
                    <div class="row_1">
                        <div class="input-field col s12">
                            <i class="large material-icons prefix">account_circle</i>
                            <input id="username" type="text" class="validate" maxlength="12" length="12" name="username" size="50">
                            <label for="username">Username</label>
                        </div>

                        <div class="input-field col s12">	
                            <i class=" material-icons prefix ">https</i>
                            <input id="password" type="password" class="validate" maxlength="45" name="password">
                            <label for="password">Password</label>
                        </div>
                    </div>

                    <button class="btn waves-effect waves-blue  blue darken-3 tooltipped indeterminate" data-position="bottom" data-delay="10" data-tooltip="Log In Now!" type="submit" name="action">
                        Log in
                    </button>

                    <p>
                        <?php 
                           echo anchor('Web_Admin_ctr/forgotpassword','Forgot Password?');
                        ?>
                    </p>
                </form>
            </div>
		</div>
	</div>
</main> 