<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Gerenciamento das Partes Interessadas</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
	<script type="text/javascript">
		function avg(){
			document.getElementById('average').value = 0
			var interest = document.getElementById('interest').value;
			var power = document.getElementById('power').value;
			var influence = document.getElementById('influence').value;
			var impact = document.getElementById('impact').value;

			var aux  = (((interest * 10) + (power * 10) + (influence * 10) + (impact * 10)) / 4) / 10;
			document.getElementById('average').value = parseFloat(aux.toFixed(2)); 
		}
	</script>
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Gerenciamento das Partes Interessadas</h1>
	<center><h2>Editar Stakeholder-mp</h2></center>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h3><span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a></span>
			</h3>
			<hr>
			<?php extract($stakeholder_mp); ?>
			<form method="POST" action="<?php echo base_url(); ?>index.php/stakeholder_mp/update/<?php echo $stakeholder_mp_id; ?>">
				<div class="row">
				<div class="form-group col-md-2">
					<label>ID:</label>
					<input type="text" class="form-control" value="<?php echo $stakeholder_mp_id; ?>" name="stakeholder_mp_id" readonly>
				</div>
			</div>
				<div class="row">
				<div class="form-group col-md-6">
					<label>Stakeholder:</label>
						<select name="stakeholder_id" class="form-control" required>
							<?php
								foreach ($stakeholders as $stakeholder) {
							?>
								<option value="<?php echo $stakeholder->stakeholder_id;?>"> <?php echo $stakeholder->name;?> </option>	
							<?php
								}
							?>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label>Projeto:</label>
					<select name="project_id" class="form-control" required>
						<?php
							foreach ($projects as $project) {
						?>
							<option value="<?php echo $project->project_id;?>"> <?php echo $project->title;?> </option>	
						<?php
							}
						?>
					</select>
				</div>
			</div>
				<div class="row">
				<div class="form-group col-md-2">
					<label>Interesse:</label>
					<select class="form-control" id="interest" name="interest" required>
						<?php
							if($interest == 10){
						?>
						<option value="10" selected>10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>
						
						<?php
							}elseif ($interest == 30) {
						?>
						<option value="10">10%</option>
						<option value="30" selected>30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>

						<?php
							}elseif ($interest == 50) {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50" selected>50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>
						<?php
							}elseif ($interest == 70) {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70" selected>70%</option>
						<option value="90">90%</option>
						<?php
							}else {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90" selected>90%</option>
						<?php
							}
						?>
					</select>

				</div>
				<div class="form-group col-md-2">
					<label>Poder:</label>
					<select class="form-control" id="power" name="power" required>
						<?php
							if($power == 10){
						?>
						<option value="10" selected>10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>
						
						<?php
							}elseif ($power == 30) {
						?>
						<option value="10">10%</option>
						<option value="30" selected>30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>

						<?php
							}elseif ($power == 50) {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50" selected>50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>
						<?php
							}elseif ($power == 70) {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70" selected>70%</option>
						<option value="90">90%</option>
						<?php
							}else {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90" selected>90%</option>
						<?php
							}
						?>				
					</select>
				</div>
				<div class="form-group col-md-2">
					<label>Influência:</label>
					<select class="form-control" id="influence" name="influence" required>
						<?php
							if($influence == 10){
						?>
						<option value="10" selected>10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>
						
						<?php
							}elseif ($influence == 30) {
						?>
						<option value="10">10%</option>
						<option value="30" selected>30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>

						<?php
							}elseif ($influence == 50) {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50" selected>50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>
						<?php
							}elseif ($influence == 70) {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70" selected>70%</option>
						<option value="90">90%</option>
						<?php
							}else {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90" selected>90%</option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="form-group col-md-2">
					<label>Impacto:</label>
					<select class="form-control" id="impact" name="impact" required>
						<?php
							if($impact == 10){
						?>
						<option value="10" selected>10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>
						
						<?php
							}elseif ($impact == 30) {
						?>
						<option value="10">10%</option>
						<option value="30" selected>30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>

						<?php
							}elseif ($impact == 50) {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50" selected>50%</option>
						<option value="70">70%</option>
						<option value="90">90%</option>
						<?php
							}elseif ($impact == 70) {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70" selected>70%</option>
						<option value="90">90%</option>
						<?php
							}else {
						?>
						<option value="10">10%</option>
						<option value="30">30%</option>
						<option value="50">50%</option>
						<option value="70">70%</option>
						<option value="90" selected>90%</option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="form-group col-md-2">
					<label>Média:</label>
					<input type="text" class="form-control" id="average" name="average" required readonly>
				</div>
				<div class="form-group col-md-2">
					<br>
					<input type="button" class="form-control btn btn-primary" value="Calcular" name="btCalcular" onclick="avg()">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label>Engajamento Desejado:</label>
					<select class="form-control" name="expectedengagement" required>
						<?php
							if($expectedengagement == "Alheio"){
						?>
						<option value="Alheio" selected>Alheio</option>
						<option value="Apoiador">Apoiador</option>
						<option value="Engajado">Engajado</option>
						<option value="Neutro">Neutro</option>
						<option value="Resistente">Resistente</option>
						<?php
							}elseif ($expectedengagement == "Apoiador") {
						?>
						<option value="Alheio">Alheio</option>
						<option value="Apoiador" selected>Apoiador</option>
						<option value="Engajado">Engajado</option>
						<option value="Neutro">Neutro</option>
						<option value="Resistente">Resistente</option>
						<?php
							}elseif ($expectedengagement == "Engajado") {
						?>
						<option value="Alheio">Alheio</option>
						<option value="Apoiador">Apoiador</option>
						<option value="Engajado" selected>Engajado</option>
						<option value="Neutro">Neutro</option>
						<option value="Resistente">Resistente</option>
						<?php
							}elseif ($expectedengagement == "Neutro") {
						?>
						<option value="Alheio">Alheio</option>
						<option value="Apoiador">Apoiador</option>
						<option value="Engajado">Engajado</option>
						<option value="Neutro" selected>Neutro</option>
						<option value="Resistente">Resistente</option>
						<?php
							}else{
						?>
						<option value="Alheio">Alheio</option>
						<option value="Apoiador">Apoiador</option>
						<option value="Engajado">Engajado</option>
						<option value="Neutro">Neutro</option>
						<option value="Resistente" selected>Resistente</option>
						<?php
							}
						?>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label>Engajamento Atual:</label>
					<input type="text" class="form-control" name="currentengagement" value="<?php echo $currentengagement; ?>" required maxlength="45">
				</div>
			</div>
				<div class="form-group">
					<label>Estratégia:</label>
					<textarea class="form-control" name="strategy" required maxlength="4000"><?php echo $strategy;?></textarea>
				</div>
				<div class="form-group">
					<label>Escopo:</label>
					<textarea class="form-control" name="scope" required maxlength="4000"><?php echo $scope;?></textarea>
				</div>
				<div class="form-group">
					<label>Observação:</label>
					<textarea class="form-control" name="observation" required maxlength="4000"><?php echo $observation;?></textarea>
				</div>
				
				<div class="form-group">
					<label>Status:</label>
					<?php 
						if($status == 1){
					?>
						<input type="radio" checked name="status" value="1">
						<label>On</label>
						<input type="radio" name="status" value="0">
						<label>Off</label>

					<?php
						}else{
					?>
						<input type="radio" name="status" value="1">
						<label>On</label>
						<input type="radio" checked name="status" value="0">
						<label>Off</label>
					<?php
						}
					?>
				</div>
				<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Alterar</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>