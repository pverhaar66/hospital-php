<main>
	<section id="create">
		<form action="<?= URL ?>client/editSave" method="post">
		
		
		<p>Name</p><input type="text" value="<?= $client['client_name'] ?>" name="name" class="inputtext">
		<p>phone</p><input type="text" value="<?= $client['client_phone'] ?>" name="phone" class="inputtext">
		<p>email</p><input type="text" value="<?= $client['client_email'] ?>" name="email" class="inputtext">
		<input type="hidden" value="<?= $client['client_id'] ?>" name="id">


		
		
			<input type="submit" value="submit" id="submitcreate">
			</form>
		<a href="<?= URL ?>client/index"><button id="createbutton">Back</button></a> 	
	</section>

</main>
