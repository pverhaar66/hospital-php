<center>
	<main>
		<section id="create">
			<form action="<?= URL ?>patient/editSave" method="post">

			
			<p>Client</p>
				<select name="client_id">
					<?php foreach ($clients as $client){ ?>
					<option value="<?= $client['client_id'] ?>"><?= $client['client_firstname'] ?> <?= $client['client_lastname'] ?></option>		
					<?php } ?>	
			</select>


			<p>patient name</p>	   <input  type="text" maxlength="30" value="<?= $patient['patient_name'] ?>" class="inputtext" name="patient_name">


			<p>patient Specie</p> 
				<select name="species_id">
					<?php foreach ($species as $specie){ ?>
					<option value="<?= $specie['species_id'] ?>"><?= $specie['species_description'] ?></option>		
					<?php } ?>	
				</select>


			<p>patient Status</p>	<input type="text" maxlength="30" value="<?= $patient['patient_status'] ?>" class="inputtext" name="patient_status" >


			<input type="hidden" value="<?= $patient['patient_id'] ?>" name="patient_id">
			
				<input type="submit" value="submit" id="submitedit">
				</form>
			<a href="<?= URL ?>Patient/index"><button id="createbutton">Back</button></a> 	
		</section>

	</main>
</center>