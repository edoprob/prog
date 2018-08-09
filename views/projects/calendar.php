<div class="container">
	<div class="row">
		<div class="col">
			<div class="system_box">
				<h4>Reservas do Sistema</h4>
				<h6>date() = <?php echo date('d / m / Y'); ?></h6>
				<br/><br/>
				<table border='1' style='width:100%;text-align: center'>
					<tr>
						<th>Dom</th>
						<th>Seg</th>
						<th>Ter</th>
						<th>Qua</th>
						<th>Qui</th>
						<th>Sex</th>
						<th>Sab</th>
					</tr>
					<?php for ($l=0; $l < $linhas; $l++) : ?>
					<tr>
						<?php for ($d=0; $d < 7; $d++) : ?>
							<td><?php echo date('d', strtotime(($d + ($l*7)).' days', strtotime($dia_inicio))); ?></td>
						<?php endfor; ?>
					</tr>
					<?php endfor; ?>
				</table>
			</div>
		</div>
	</div>
</div>