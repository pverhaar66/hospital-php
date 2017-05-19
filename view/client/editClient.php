<center>
	<main>
		<section id="create">
			<form action="<?= URL ?>client/editSave" method="post">
			
			
			<p>First name</p><input type="text" value="<?= $client['client_firstname'] ?>" name="client_firstname" class="inputtext">
			<p>Last name</p><input type="text" value="<?= $client['client_lastname'] ?>" name="client_lastname" class="inputtext">

			<input type="hidden" value="<?= $client['client_id'] ?>" name="client_id">


			
			
				<input type="submit" value="submit" id="submitcreate">
				</form>
			<a href="<?= URL ?>client/index"><button id="createbutton">Back</button></a> 	
		</section>

	</main>
</center>