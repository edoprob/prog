<div class="container">
	<div class="row">
		<div class="col">
			<div class="calendar-box">
				<h4>Sistema de Reservas</h4>
				<h6>Data de calculo = <span style="font-size:30px;"><?php echo $mes_nome ; ?></span></h6>
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
					<?php for ($l=0; $l < ($linhas+3); $l++) : ?>
					<tr class="table-box-tr">

						<?php for ($d=0; $d < 7; $d++) : ?>

						<?php $month = date('m', strtotime(($d + ($l*7)).' days', strtotime($dia_inicio))); ?>
						<?php $dateTable = date('d', strtotime(($d + ($l*7)).' days', strtotime($dia_inicio))); ?>
<!-- daily color  -->
							<td>	
								<div class="dropdown">

								  <button 
								  style="<?php 
								  if ($month != $mes_atual) {
								  	echo "-webkit-box-shadow: inset 0px 0px 100px 1px rgba(93, 92, 92, 0.49);
										-moz-box-shadow: inset 0px 0px 100px 1px rgba(93, 92, 92, 0.49);
										box-shadow: inset 0px 0px 100px 1px rgba(93, 92, 92, 0.49);";
								  }
								  ?>"
								  class="btn" type="button" data-toggle="dropdown"><?php echo $dateTable; ?> <span class="caret"></span></button>
<!-- daily information  -->
								  <ul class="dropdown-menu">
								    <li>Info 1</a></li>
								    <li>Info 2</li>
								    <li>Info 3</li>
								  </ul>
								</div>
							</td>
						<?php endfor; ?>
					</tr>
					<?php endfor; ?>
				</table>
			</div>
		</div>
	</div>
<!-- rest  -->
	<div class="row">
		<div class="col">
			<div class="calendar-obs">
				
			</div>
		</div>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	</div>
<!-- end  -->
</div>