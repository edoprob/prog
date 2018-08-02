<?php  ?>

<!--container-->

<div class='row'>
	<div class='col-4'>
		<a href="<?php BASE_URL ?>home"><button class="btn btn-info" style="margin-right: 5px;">Home</button></a>
		<a href="<?php BASE_URL ?>login"><button class="btn btn-info" style="margin-right: 5px;">Login</button></a>
		<a href="<?php BASE_URL ?>login/sair"><button class="btn btn-info" style="margin-right: 5px;">Sair</button></a>
	</div>
</div>
<br/>
<div class="row">
	<div class="col">
		<div class="system_box">
			<h4>Reservas do Sistema</h4>
			<table border='1' style='width:50%;text-align: center'>
				<tr>
					<th>Dom</th>
					<th>Seg</th>
					<th>Ter</th>
					<th>Qua</th>
					<th>Qui</th>
					<th>Sex</th>
					<th>Sab</th>
				</tr>
				<?php  ?>
			</table>
		</div>
	</div>
</div>