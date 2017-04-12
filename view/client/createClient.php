<main>
	<section id="create">
		<form action="<?= URL ?>client/createSave" method="post">

		<p>Name</p><input type="text" placeholder="darius" name="name" class="inputtext">
		<p>phone</p><input type="text" placeholder="0698763527" maxlength="10" name="phone" class="inputtext">
		<p>e-mail</p><input type="text" placeholder="darius@myhotmail.com" name="email" class="inputtext">
		
		
			<input type="submit" value="submit" id="submitcreate">
			</form>
		<a href="<?= URL ?>client/index"><button id="createbutton">Back</button></a> 	
	</section>

</main>
