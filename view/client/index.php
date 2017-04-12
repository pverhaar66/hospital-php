
<main>
	<table>

			<tr>
				<td class="top">Client_name</td>
				<td class="top">Client_phone</td>
				<td class="top">Client_e-mail</td>
				<td class="top">options</td>
			</tr>

			<?php foreach ($clients as $client) {  ?>
			<tr>
				<td class="bottom"><?= $client['client_name'];?></td>
			 	<td class="bottom"><?= $client['client_phone'];?></td>
				<td class="bottom"><?= $client['client_email'];?></td>
				<td class="bottom"> <a href="<?= URL ?>client/readclient/<?= $client['client_id'];?>">Info</a> / 
									<a href="<?= URL ?>client/editclient/<?= $client['client_id'];?>">Edit</a> / 
									<a href="<?= URL ?>client/deleteclient/<?= $client['client_id'];?>">Delete</a></td>

			</tr>
			<?php } ?>
			 <a href='<?= URL ?>client/create'><button id="addbutton">Add Client</button></a>

		</table>	

		 <aside>
		 <a href='<?= URL ?>patient/index'><button class="navbutton">Go to patients</button></a>
		 <a href='<?= URL ?>specie/index'><button class="navbutton">Go to species</button></a>
		 </aside>	
</main>


