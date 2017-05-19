<center>
	<main>
		<table>

				<tr>
					<td class="top">Patient</td>
					<td class="top">Species</td>
					<td class="top">gender</td>
					<td class="top" colspan="2">Client</td>
					<td class="top">Status</td>		
					<td class="top" colspan="3">options</td>
				</tr>

				<?php foreach ($patients as $patient) {  ?>
				<tr>
					<td class="bottom"><?= $patient['patient_name'];?></td>
				 	<td class="bottom"><?= $patient['species_description'];?></td>
				 	<td class="bottom"><?= $patient['patient_gender'];?></td>
				 	<td class="bottom"><?= $patient['client_firstname'];?></td>
				 	<td class="bottom"><?= $patient['client_lastname'];?></td>
					<td class="bottom"><?= $patient['patient_status'];?></td>
					<td class="bottom"><a href="<?= URL ?>patient/readPatient/<?= $patient['patient_id'];?>"><button class="indexbutton">Info</button></a> </td>
					<td class="bottom"><a href="<?= URL ?>patient/editPatient/<?= $patient['patient_id'];?>"><button class="indexbutton">Edit</button></a> </td>
					<td class="bottom"><a href="<?= URL ?>patient/deletePatient/<?= $patient['patient_id'];?>"><button class="indexbutton">Delete</button></a></td>

				</tr>
				<?php } ?>
				 <a href='<?= URL ?>patient/create'><button id="addbutton">Add patient</button></a>

			</table>		

			 <aside>
			 <a href='<?= URL ?>client/index'><button class="navbutton">Go to clients</button></a>
			 <a href='<?= URL ?>specie/index'><button class="navbutton">Go to species</button></a>
			 </aside>
	</main>
</center>

