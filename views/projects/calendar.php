<div class="container">
	<div class="row">
		<div class="col">
			<div class="calendar-box">
				<h4>Reservas do Sistema</h4>
				<h6>date() = <?php echo date('d / M / Y'); ?></h6>
				<br/><br/>

<!-- calendar table -->
				<table border='1' style='width:100%;text-align: center'>
					<tr style="height: 40px;color: #f7fd9beb;">
						<th>Dom</th>
						<th>Seg</th>
						<th>Ter</th>
						<th>Qua</th>
						<th>Qui</th>
						<th>Sex</th>
						<th>Sab</th>
					</tr>
<!-- rows and columns  -->
					<?php for ($l=0; $l < $linhas; $l++) : ?>
					<tr class="table-box-tr">

						<?php for ($d=0; $d < 7; $d++) : ?>
						<?php $dateTable = date('d', strtotime(($d + ($l*7)).' days', strtotime($dia_inicio))); ?>
<!-- daily color  -->
							<td>	
								<div class="dropdown">

								  <button class="btn" type="button" data-toggle="dropdown"><?php echo $dateTable; ?> <span class="caret"></span></button>
<!-- daily information  -->
								  <ul class="dropdown-menu">
								    <li><a href="#">HTML</a></li>
								    <li><a href="#">CSS</a></li>
								    <li><a href="#">JavaScript</a></li>
								  </ul>
								</div>
							</td>
						<?php endfor; ?>
					</tr>
					<?php endfor; ?>
				</table>
<!-- end  -->
			</div>
		</div>
	</div>
</div>