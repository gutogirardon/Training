<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Gerenciamento das Partes Interessadas</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Gerenciamento das Partes Interessadas</h1>
	<h2 class="text-center">Adicionar Carta de Projeto Stakeholder</h2>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<h3><span class="pull-right"><a href="<?php echo base_url(); ?>index.php/projectCharter_stakeholder/index" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Voltar</a></span></h3><br><hr>
			<form method="POST" action="<?php echo base_url(); ?>index.php/projectCharter_stakeholder/insert">
				<div class="row">
				<div class="form-group col-md-6">
					<label>ID do Projeto:</label>
					<select name="project_charter_id" class="form-control" required>
						<?php
							foreach ($projectCharters as $projectCharter) {
						?>
							<option value="<?php echo $projectCharter->project_charter_id;?>"> <?php echo $projectCharter->project_charter_id;?> </option>	
						<?php
							}
						?>
					</select>
				</div>
				<div class="form-group col-md-6">
					<label>ID do Stakeholder:</label>
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
					<label>Status:</label>
					<input type="radio" name="status" value="1">
					<label>On</label>
					<input type="radio" name="status" value="0">
					<label>Off</label>
				</div>
			</div>
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>