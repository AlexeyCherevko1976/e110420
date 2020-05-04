<?php
session_start();

if (!$_SESSION['signup']){
	echo '<form>
	  <div class="form-group">
	    <label for="login1">Login</label>
	    <input type="text" class="form-control" id="login1"  placeholder="Enter login">
	    <small id="loginHelp" class="form-text text-muted">Введите логин</small>
	  </div>
	  <div class="form-group">
	    <label for="password1">Password</label>
	    <input type="password" class="form-control" id="password1" placeholder="Password">
	  </div>
	  <div class="form-check">
	    <input type="checkbox" class="form-check-input" id="exampleCheck1">
	    <label class="form-check-label" for="exampleCheck1">Check me out</label>
	  </div>
	  <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
	  <input type="button" name="submit" id="authorization" value="submit" onClick = "authorization()" />
	</form>
	';
	exit();
}else{
	echo "Alles gut!";
	exit();
}

?>