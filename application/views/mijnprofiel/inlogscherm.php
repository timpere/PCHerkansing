

<?php echo validation_errors(); ?>

<?php echo form_open('mijnprofiel/login'); ?>

<h5>Email Adres</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

<h5>Wachtwoord</h5>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<div><input type="submit" value="Login" /></div>

</form>


