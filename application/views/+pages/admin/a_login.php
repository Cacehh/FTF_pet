<br>
<br>
<br>
<br>
<?php
if (isset($logout_message)) {
    echo "<div class='message'>";
    echo $logout_message;
    echo "</div>";
}
?>
<main>
        <?php
        if (isset($message_display)) {
            echo "<div class='message center red-text'>";
            echo "<h4>";
            echo $message_display;
            echo "</h4>";
            echo "</div>";
        }
        ?>
    <div class="blue-grey lighten-5 z-depth-3 ">
		<div class="row ">
            <div class="col l2 m2 s0"></div>
            <div class="col l4 m4 s11">
				<br>
				<br>
                <h5 class="">Login | Admin <b>Fins, Tails n Feathers</b></h5>
                <?php echo form_open('Access_ctr/process'); ?>  
                    <?php
                        echo "<div class='error_msg'>";
                        if (isset($error_message)) {
                        echo $error_message;
                        }
                        echo validation_errors();
                        echo "</div>";
                    ?>     
                    <div class="row">
                        <div class="input-field">
                            <i class="large material-icons prefix">account_circle</i>
                            <input id="username" type="text" class="validate" maxlength="12" length="12" name="username" size="50">
                            <label for="username">Username</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="input-field">   
                            <i class=" material-icons prefix ">https</i>
                            <input id="password" type="password" class="validate" maxlength="45" name="password">
                            <label for="password">Password</label>
                        </div>
                    </div>

                    <button class="btn waves-effect waves-orange  orange darken-3 tooltipped indeterminate" data-position="bottom" data-delay="10" data-tooltip="Log In" type="submit" name="action">
                        Log in
                    </button>

                    <p>
                        <?php 
                           echo anchor('Admin_ctr/forgotpassword','Forgot Password?');
                        ?>
                    </p>
                </form>
            </div>
            <div class="col l6 m6 s1"></div>
		</div>
	</div>
</main> 