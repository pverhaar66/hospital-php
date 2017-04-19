<main>
	<section id="create">
		<form action="<?= URL ?>patient/editSave" method="post">
		
		
		<p>patient name</p><input type="text" value="<?= $patient['patient_name'] ?>" name="patient_name" class="inputtext">
		<p>client</p><section>
			<?php foreach ($patient as $patients): ?>
				<option value="<?= $patients['client_id'] ?>"> <?= $patients['client_id']</option>
			<?php endforeach ?>
		</section>
<!-- 		<p>Specie</p><input type="text" value="<?= $patient['species_id'] ?>" name="specie_id" class="inputtext">
		<p>client</p><input type="text" value="<?= $patient['client_id'] ?>" name="client_id" class="inputtext"> -->
		<p>patient Status</p><input type="text" value="<?= $patient['patient_status'] ?>" name="patient_status" class="inputtext">
		<input type="hidden" value="<?= $patient['patient_id'] ?>" name="patient_id">


		
		
			<input type="submit" value="submit" id="submitedit">
			</form>
		<a href="<?= URL ?>Patient/index"><button id="createbutton">Back</button></a> 	
	</section>

</main>
