
<main>
	<table>

			<tr>
				<td class="top">Patient</td>
				<td class="top">Species</td>
				<td class="top">Status</td>
				<td class="top">options</td>
			</tr>

			<?php foreach ($patient as $patients) {  ?>
			<tr>
				<td><?= $patients['name'];?></td>
			 	<td><?= $patients['species'];?></td>
				<td><?= $patients['status'];?></td>
				<td> <a href="<?= URL ?>patient/deletePatient/<?= $patients['id'];?>">Delete</a> 
				<a href="<?= URL ?>patient/readPatient/<?= $patients['id'];?>">Delete</a></td>
			</tr>
			<?php } ?>
			 <a href='<?= URL ?>patient/create'><button>Add patient</button></a>
		</table>		
</main>


