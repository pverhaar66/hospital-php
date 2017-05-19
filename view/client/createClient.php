<center>
	<main>
		<section id="create">
			<form action="<?= URL ?>client/createSave" method="post">

			<p>First name</p><input type="text" placeholder="darius" name="client_firstname" class="inputtext">
			<p>Last name</p><input type="text" placeholder="darius" name="client_lastname" class="inputtext">

			
			
				<input type="submit" value="submit" id="submitcreate">
				</form>
			<a href="<?= URL ?>client/index"><button id="createbutton">Back</button></a> 	
		</section>

	</main>
</center>