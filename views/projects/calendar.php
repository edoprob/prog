<div class="container">
	<div class="row">
		<div class="col">
			<h4>Sistema de Reservas de Cartuchos</h4>
			<h6><span style="font-size:30px;"><?php echo $mes_nome ; ?></span> <?php echo ' / '.date('Y') ?></h6>
			<br/>
			<?php
				if (isset($_GET['err']) && !empty($_GET['err'])) {
					switch ($_GET['err']) {
					case 'd':
						echo "<p style='width:100%;text-align:center;' class='alert alert-danger'>Você deve selecionar uma data para a retirada do cartucho</p>";
						break;
					case 'p':
						echo "<p style='width:100%;text-align:center;' class='alert alert-danger'>Você deve selecionar quantos dias ficará com o cartucho alugado</p>";
						break;
					case 'f':
						echo "<p style='width:100%;text-align:center;' class='alert alert-danger'>Você deve colocar seu cadastro (Nome) para registro</p>";
						break;
					case 'l':
						echo "<p style='width:100%;text-align:center;' class='alert alert-danger'>Você deve colocar seu cadastro (Nome) para registro</p>";
						break;					
					}
				}
				if (isset($_GET['ren']) && !empty($_GET['ren']) && isset($_GET['dat']) && !empty($_GET['dat'])) {
					switch ($_GET['ren']) {
					case 'ok':
						echo "<p style='width:100%;text-align:center;' class='alert alert-success'>Seu cartucho está alugado em seu nome até dia ".$_GET['dat']."</p>";
						break;
					case 'not':
						echo "<p style='width:100%;text-align:center;' class='alert alert-danger'>Ops! Algo deu errado e seu cartucho não foi alugado </p>";
						break;				
					}
				}
			?>
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
<?php $c1 = new Calendar(); ?>
<?php for ($g=0; $g < $qt; $g++) : ?>
<?php $amountTotal = ($c1->getAmountTotal($roms[$g]['rom'])); ?>
<?php $amountStock = ($c1->getAmountStock($roms[$g]['rom'])); ?>
<?php $rom = $roms[$g]['rom'] ?>

				  <div class="card">
				    <div class="card-header" id="<?php echo "h".$g ?>">
				      <h5 class="mb-0">
				        <button style="text-decoration:none;" class="btn btn-link" data-toggle="collapse" data-target="#<?php echo "c".$g ?>" aria-expanded="true" aria-controls="<?php echo "c".$g ?>">
				          <?php echo $roms[$g]['rom']; ?>
				        </button>
				      </h5>
				    </div>
<!-- rom's info -->
				    <div id="<?php echo "c".$g ?>" class="collapse" aria-labelledby="<?php echo "h".$g ?>" data-parent="#accordion">
				      <div style="color:blue" class="card-body">
				        <div class="row" style="color:black;">
				        	<div class="col-md">
	<!-- form -->
				        		<form class="form-box" method="POST" action="<?php echo BASE_URL.'projects/calendarData' ?>">
						        	<div class="row">
						        		<input name="rom" type="hidden" value="<?php echo $rom; ?>" />
						        		<div class="col-5-md" style="margin-right:35px;align-self: center;">
						        			<p style="text-align:center;">Dias</p>
							        		<span>Retirada</span></br>
								        		<input style="width:100%" type="date" name="date" min="<?php echo date('Y-m-d') ?>" max="<?php echo date('Y-m-d', strtotime(date('Y-m-d')."+ 14 days")) ?>">
								        	<br/><br/>
								        	<span>Total</span><br/>
								        	<div style="width: 100%;padding: 5px;border: solid #dfdfdf 1px;border-radius: 1px;">
									        	<span>Total de dias</span><br/>
										        <input type="radio" name="days" value="1"> 1 <span> - R$ 5,00</span><br/>
										        <input type="radio" name="days" value="2"> 2 <span> - R$ 8,00</span><br/>
										        <input type="radio" name="days" value="3"> 3 <span> - R$ 10,00</span><br/>
										        <input type="radio" name="days" value="4"> 4 <span> - R$ 12,50</span><br/>
										        <input type="radio" name="days" value="5"> 5 <span> - R$ 14,00</span><br/>
								   			</div>
					        			</div>
						        		<div class="col-7-md">
						        			<p style="text-align:center;">Cadastro</p>
						        			<span>Seu primeiro nome para relatório</span>
						        			<br/>
										    <div class="row">
										    	<div class="col">
										    		<input type="radio" name="firstName" value="Mark"> Mark<br/>
												    <input type="radio" name="firstName" value="Cecilia"> Cecilia<br/>
												    <input type="radio" name="firstName" value="John"> John<br/><hr/>
										    	</div>
										    	<div class="col">
												    <input type="radio" name="firstName" value="Millena"> Millena<br/>
										    		<input type="radio" name="firstName" value="Oliver"> Oliver<br/>
												    <input type="radio" name="firstName" value="Nay"> Nay<br/><hr/>
										    	</div>
										    </div>
										    <span>Seu último nome para relatório</span>
						        			<br/>
										    <div class="row">
										    	<div class="col">
										    		<input type="radio" name="lastName" value="Smith"> Smith<br/>
												    <input type="radio" name="lastName" value="Reagen"> Reagen<br/>
												    <input type="radio" name="lastName" value="Onofre"> Onofre<br/>
												    <input type="radio" name="lastName" value="Marley"> Marley<br/>
										    	</div>
										    	<div class="col">
												    <input type="radio" name="lastName" value="Stone"> Stone<br/>
										    		<input type="radio" name="lastName" value="Baker"> Baker<br/>
												    <input type="radio" name="lastName" value="Montana"> Montana<br/>
												    <input type="radio" name="lastName" value="Marshall"> Marshall<br/>
										    	</div>
										    </div>
						        			<br/>
						        		</div>
						        		<button style="width:100%;" class="btn btn-info" type="submit">Alugar</button>
						        	</div>
				      			</form>
<!-- end form -->
				        	</div>

				        	<div class="col-md">
				        		<span>Quantidade no estoque: </span>
				        		<span 
				        		style="<?php
				        			if ($amountStock <= ceil($amountTotal/3)) {
				        				echo 'color:red;';
				        			} else if ($amountStock >= ceil($amountTotal/3) && $amountStock <= ceil($amountTotal/1.5)) {
				        				echo 'color:#b3991d;';
				        			} else if ($amountStock >= $amountTotal/2) {
				        				echo 'color:green;';
				        			}
				        		?>">
				        			<?php echo $amountStock; ?>	
				        		</span>
				        		<span> / </span>
				        		<span>
				        			<?php echo $amountTotal; ?>
				        		</span>
				        		<br/><br/>
				        		<p> - <?php echo $roms[$g]['description']; ?></p>
				        	</div>
				        </div>
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
		<div class="col" style="padding:0;">
			<div class="calendar-box">
<!-- calendar table -->
				<table border='1' style='width:100%;text-align: center'>
					<tr style="height: 40px;color: #f7fd9beb;">
						<th>D</th>
						<th>S</th>
						<th>T</th>
						<th>Q</th>
						<th>Q</th>
						<th>S</th>
						<th>S</th>
					</tr>
<!-- rows and columns  -->
					<?php for ($l=0; $l < ($linhas); $l++) : ?>
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
				<p>End</p>

			</div>
		</div>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	</div>
	<!-- end  -->
</div>