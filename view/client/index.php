<center>
	<main>
		<table>

				<tr>
					<td class="top">Client_firstname</td>
					<td class="top">Client_lastname</td>
					<td class="top" colspan="3">options</td>
				</tr>

				<?php foreach ($clients as $client) {  ?>
				<tr>
					<td class="bottom"><?= $client['client_firstname'];?></td>
				 	<td class="bottom"><?= $client['client_lastname'];?></td>
					<td class="bottom"> <a href="<?= URL ?>client/readclient/<?= $client['client_id'];?>"><button class="indexbutton">Info</button></a> </td>
					<td class="bottom">	<a href="<?= URL ?>client/editclient/<?= $client['client_id'];?>"><button class="indexbutton">Edit</button></a> </td>
					<td class="bottom">	<a href="<?= URL ?>client/deleteclient/<?= $client['client_id'];?>"><button class="indexbutton">Delete</button></a></td>

				</tr>
				<?php } ?>
				 <a href='<?= URL ?>client/create'><button id="addbutton">Add Client</button></a>

			</table>	

			 <aside>
			 <a href='<?= URL ?>patient/index'><button class="navbutton">Go to patients</button></a>
			 <a href='<?= URL ?>specie/index'><button class="navbutton">Go to species</button></a>
			 </aside>	
	</main>
</center>

