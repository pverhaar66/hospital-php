<main>
	<section id="create">
		<form action="<?= URL ?>patient/createSave" method="post">

		<p>Name</p><input type="text" placeholder="darius" name="name" class="inputtext">
		<p>Specie</p><input type="text" placeholder="wolf" name="specie" class="inputtext">
		<p>Status</p><input type="text" placeholder="broken leg" name="status" class="inputtext">
		
		
			<input type="submit" value="submit" id="submitcreate">
			</form>
		<a href="<?= URL ?>Patient/index"><button id="createbutton">Back</button></a> 	
	</section>

</main>
