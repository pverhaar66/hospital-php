
<main>
	<table>

			<tr>
				<td class="top">Patient</td>
				<td class="top">Species</td>
				<td class="top" colspan="1">Client</td>
				<td class="top">Status</td>		
				<td class="top" colspan="3">options</td>
			</tr>

			<?php foreach ($patient as $patients) {  ?>
			<tr>
				<td class="bottom"><?= $patients['patient_name'];?></td>
			 	<td class="bottom"><?= $patients['species_id'];?></td>
			 	<td class="bottom"><?= $patients['client_id'];?></td>
				<td class="bottom"><?= $patients['patient_status'];?></td>
				<td class="bottom"><a href="<?= URL ?>patient/readPatient/<?= $patients['patient_id'];?>"><button class="indexbutton">Info</button></a> </td>
				<td class="bottom"><a href="<?= URL ?>patient/editPatient/<?= $patients['patient_id'];?>"><button class="indexbutton">Edit</button></a> </td>
				<td class="bottom"><a href="<?= URL ?>patient/deletePatient/<?= $patients['patient_id'];?>"><button class="indexbutton">Delete</button></a></td>

			</tr>
			<?php } ?>
			 <a href='<?= URL ?>patient/create'><button id="addbutton">Add patient</button></a>

		</table>		

		 <aside>
		 <a href='<?= URL ?>client/index'><button class="navbutton">Go to clients</button></a>
		 <a href='<?= URL ?>specie/index'><button class="navbutton">Go to species</button></a>
		 </aside>
</main>


