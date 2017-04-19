
<main>
	<section>
		<p> Name : <?= $patient['patient_name'];?></p>
	 	<p> Specie : <?= $patient['species_id'];?></p>
	 	<p> client : <?= $patient['client_id'] ?></p>
		<p> Status : <?= $patient['patient_status'];?></p>
		
		<a href="<?= URL ?>patient/index"><button>Back</button></a>
	</section>
</main>


