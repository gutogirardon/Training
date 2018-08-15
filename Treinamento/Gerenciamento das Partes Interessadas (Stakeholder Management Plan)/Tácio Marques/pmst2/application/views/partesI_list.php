<!DOCTYPE html>
<html>
<body>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Partes Interessadas</title>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body   style="background-color:#DCDCDC;">
  <h1 class="page-header text-center">View Stakeholder Management Plan</h1>
      <h3 class="page-header text-center">
        <span class="pull-right"><a href="<?php echo base_url(); ?>" class="btn btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a></span>
      </h3>
<table style="width:100%" class="table table-bordered table-striped">
  <thead>
					<tr>
      				<th>ID Stakelholder</th>
      				<th>Name Stakelholder</th>
      				<th>Interest</th>
      				<th>Power</th>
      				<th>Influence</th>
      				<th>Impact</th>
      				<th>Average</th>
      				<th>Expectedengagement</th>
      				<th>Currentengagement</th>
      				<th>Strategy</th>
      				<th>Scope</th>
      				<th>Observation</th>
      				<th>ID Project</th> 
    		    	<th>Status</th> 
  				</tr>
				</thead>
				<tbody><?php
					foreach($stakelholder as $stakeholder){
            			foreach($stakeholder_mp as $stakeholdermp){
              				if($stakeholder->stakelholder_id==$stakeholdermp->stakelholder_id){
            ?>
            <tr>
              <td><input name="stakelholder_id" type="text" value="<?php echo $stakeholdermp->stakelholder_id; ?>" readonly="readonly" /></td>
              <td><input name="name" type="text" value="<?php echo $stakeholder->name; ?>" readonly="readonly" /></td>
              <td><input name="interest" type="text" value="<?php echo $stakeholdermp->interest; ?>" readonly="readonly" /></td>
              <td><input name="power" type="text" value="<?php echo $stakeholdermp->power; ?>" readonly="readonly" /></td>
              <td><input name="influence" type="text" value="<?php echo $stakeholdermp->influence; ?>" readonly="readonly" /></td>
              <td><input name="average" type="text" value="<?php echo $stakeholdermp->average; ?>" readonly="readonly" /></td>
              <td><input name="expectedengagement" type="text" value="<?php echo $stakeholdermp->expectedengagement; ?>" readonly="readonly" /></td>
              <td><input name="currentengagement" type="text" value="<?php echo $stakeholdermp->currentengagement; ?>" readonly="readonly" /></td>
              <td><input name="strategy" type="text" value="<?php echo $stakeholdermp->strategy; ?>" readonly="readonly" /></td>
              <td><input name="scope" type="text" value="<?php echo $stakeholdermp->scope; ?>" readonly="readonly" /></td>
              <td><input name="observation" type="text" value="<?php echo $stakeholdermp->observation; ?>" readonly="readonly" /></td>
              <td><input name="project_id" type="text" value="<?php echo $stakeholdermp->project_id; ?>" readonly="readonly" /></td>
              <td><input name="status" type="text" value="<?php echo $stakeholdermp->status; ?>" readonly="readonly" /></td>
            </form>
            </tr>
            <?php
          }
        }
      }
          ?>
          </tbody>
</table>
</body>
</html>