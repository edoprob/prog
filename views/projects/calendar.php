<div class="container">
	<div class="row">
		<div class="col">
			<h4>Sistema de Reservas</h4>
			<h6><span style="font-size:30px;"><?php echo $mes_nome ; ?></span> <?php echo ' / '.date('Y') ?></h6>
			<br/>
		</div>		
	</div>
	<div class="row">
		<div class="col">
			<p>
			  <button style="width:220px;letter-spacing:5px;font-size:18px;" class="btn" type="button" data-toggle="collapse" data-target="#locate" aria-expanded="false" aria-controls="locate">
			    Reservar
			  </button>
			</p>
			<div class="collapse" id="locate">
			  <div class="card card-body">
<!-- list of roms to locate  -->
			    <div id="accordion">
<!-- list -->
<!-- rom's name -->
<?php //AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA ?>
<?php for ($g=0; $g < 2; $g++) : ?>
				  <div class="card">
				    <div class="card-header" id="h2">
				      <h5 class="mb-0">
				        <button class="btn btn-link" data-toggle="collapse" data-target="#c2" aria-expanded="true" aria-controls="c2">
				          Collapsible Group Item #1
				        </button>
				      </h5>
				    </div>
<!-- rom's info -->
				    <div id="c2" class="collapse show" aria-labelledby="h2" data-parent="#accordion">
				      <div style="color:blue" class="card-body">
				        seila
				      </div>
				    </div>
				  </div>
<?php endfor; ?>				  
				  
				</div>
			  </div>
			</div>
		</div>
	</div>
	<br/><br/>
	<div class="row">
		<div class="col">
			<div class="calendar-box">
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
	<br/><br/>
<!-- rest  -->
	<div class="row">
		<div class="col">
			<div style="text-align: center;" class="calendar-obs">
				<h3>Games</h3>
				<p>
					<?php foreach ($roms as $game) {
						echo ' - - - '.$game['rom'].' ('.$game['amout'].') - - - ';
					} ; ?>
					
				</p>

			</div>
		</div>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	</div>
	<!-- end  -->
</div>