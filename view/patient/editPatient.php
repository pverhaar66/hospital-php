<main>
	<section id="create">
		<form action="<?= URL ?>patient/editSave" method="post">
		
		
		<p>Name</p><input type="text" value="<?= $patient['name'] ?>" name="name" class="inputtext">
		<p>Specie</p><input type="text" value="<?= $patient['species'] ?>" name="specie" class="inputtext">
		<p>Status</p><input type="text" value="<?= $patient['status'] ?>" name="status" class="inputtext">
		<input type="hidden" value="<?= $patient['id'] ?>" name="id">


		
		
			<input type="submit" value="submit" id="submitcreate">
			</form>
		<a href="<?= URL ?>Patient/index"><button id="createbutton">Back</button></a> 	
	</section>

</main>
