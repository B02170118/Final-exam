<h1>register</h1>
<h3><span style="color:#B22222;text-align:center;"> register error </span></h3>


			<form method="post" action="<?php echo base_url(); ?>Home/register_validation">

				<div class="form-group">
					<label for="username">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="Enter a username" required>
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="Enter a password" required>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Signup">
				</div>
			</form>
