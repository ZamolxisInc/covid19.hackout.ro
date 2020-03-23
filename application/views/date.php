
 
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 mb-0 text-gray-800"><b>Date persoane</b></h1>
    </div>


<!-- TABEL -->
<div class="row table-responsive">
  <table class="table table-striped table-responsive" id="dataTable" cellspacing="0">
      <thead>
					<tr>
						<th >Nr </td>
						<th >Judet</th>
						<th >Varsta</th>
						<th > Sex</th>
				
						<th >Carantina</th>
						<th >A Calatorit</th>
						<th >Asimptomatic</th>
						<th >A luat virusul de la</th>
						<th >Stare grava</th>
						<th >Decedat</th>
						<th >Vindecat</th>
						<th >Alte afectiuni</th>
						<th >Data infectiei</th>
						
					</tr>

        </thead>
        <tbody>
          <?php  foreach($all_person as $person): ?>
					<tr>
          <td ><?= $person->numar_infectie; ?></td>
          <td ><?= $person->judet; ?></td>
          <td ><?= $person->varsta; ?></td>
          <td > <?= $person->sex; ?></td>
          
          <td ><?= $person->was_carantina; ?></td>
          <td ><?= $person->from_country; ?></td>
          <td >
          <?php if( $person->asimptomatic != NULL){
            if( $person->asimptomatic == 0){
              echo "Nu";
            }else{
              echo "Da";
            }
          } else{
            echo "Necunoscut";
          }
          ?></td>
          <td ><?= $person->virus_from_persoana; ?></td>
          <td >
          <?php if( $person->grav == 0){
            echo "Nu";
          } else{
            echo "Da";
          }
          ?></td>
           <td >
          <?php if( $person->decedat == 0){
            echo "Nu";
          } else{
            echo "Da";
          }
          ?></td>
           <td >
          <?php if( $person->vindecat == 0){
            echo "Nu";
          } else{
            echo "Da";
          }
          ?></td>
          <td ><?= $person->alta_boala; ?></td>
          <td ><?= $person->data_infectiei; ?></td>
					</tr>
					<?php endforeach; ?>
      </tbody>
    </table>
</div>
   <!-- END TABEL -->



   



</div>




<script src="<?php echo base_url(); ?>assets/jquery/jquery-ui.js"></script>

<script>
$(document).ready(function() {

$('#dataTable').DataTable();
});


</script>