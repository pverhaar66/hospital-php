<main>
	<section id="create">
		<form action="<?= URL ?>specie/editSave" method="post">
		
		
		<p>Name</p><input type="text" value="<?= $specie['specie_name'] ?>" name="specie_name" class="inputtext">
		<input type="hidden" value="<?= $specie['specie_id'] ?>" name="specie_id">
		
			<input type="submit" value="submit" id="submitcreate">
			</form>
		<a href="<?= URL ?>specie/index"><button id="createbutton">Back</button></a> 	
	</section>

</main>
