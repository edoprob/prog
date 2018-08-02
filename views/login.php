<?php  ?>

<div class="row">
	<div class="col-md">

		<a href="<?php BASE_URL ?>home"><button class="btn btn-info" style="margin-right: 5px;">Home</button></a>
		<a href="<?php BASE_URL ?>login"><button class="btn btn-info" style="margin-right: 5px;">Login</button></a>
		<br/>

		<div class="login_box">
			
			<form method="POST">
				<h5>Login</h5><br/>
				
			 	<div class="input-group mb-3">
			 		<div class="input-group-prepend">
			 			<span style="width:40px;" class="input-group-text">@</span>
			 		</div>
					<input type="text" class="form-control" placeholder="Username" name="user" autocomplete="off">
			 	</div><br/>
			 	
			 	<div class="input-group mb-3">
			 		<div class="input-group-prepend">
			 			<span style="width:40px;padding-left:15px;" class="input-group-text">#</span>
			 		</div>
					<input type="password" class="form-control" placeholder="Password" name='pass'>
			 	</div><br/>

			 	<button style="width:100%;" class="btn btn-info" type="submit">Enter</button>

			</form>
			
		</div>
	</div>
</div>