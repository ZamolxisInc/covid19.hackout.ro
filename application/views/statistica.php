
 
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 mb-0 text-gray-800"><b>Statistica</b></h1>
    </div>


 <div class="row">

   
   


    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Varsta medie a persoanelor  <span style="color:gray">decedate</span></h6>
          </div>
          <div class="card-body">
            <?php 
            $sum = 0;
            $k=0;

            foreach($all_person as $person){
              if($person->decedat == 1){
                $sum += $person->varsta;
                $k++;
              }
            }
            if($k!=0)
            {
              $x = $sum/$k;
              echo  number_format((float)$x, 0, '.', '');
            }else{
              echo 0;
            }

            ?>
          </div>
        </div>
    </div>


    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Varsta medie a persoanelor  <span style="color:green">vindecate</span></h6>
          </div>
          <div class="card-body">
            <?php 
            $sum = 0;
            $k=0;

            foreach($all_person as $person){
              if($person->vindecat == 1){
                $sum += $person->varsta;
                $k++;
              }
            }
            $x = $sum/$k;
            echo  number_format((float)$x, 0, '.', '');

            ?>
          </div>
        </div>
    </div>

    <div class="col-xl-4 col-md-6 mb-4">
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Varsta medie a persoanelor <span style="color:red">infectate</span></h6>
          </div>
          <div class="card-body">
            <?php 
            $sum = 0;
            $k=0;

            foreach($all_person as $person){
              
                $sum += $person->varsta;
                $k++;
              
            }
            $x = $sum/$k;
            echo  number_format((float)$x, 0, '.', '');

            ?>
          </div>
        </div>
    </div>
  </div>
  <div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Persoane infectate care au fost in <span style="color:orange">carantina</span></h6>
          </div>
          <div class="card-body">
            <?php 
            
            $k=0;

            foreach($all_person_null as $person){
              if($person->was_carantina == "Da"){
                $k++;
              }
              
            }
            echo  $k;

            ?>
          </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Persoane infectate care au fost in izolare</h6>
          </div>
          <div class="card-body">
            <?php 
            
            $k=0;

            foreach($all_person_null as $person){
              if($person->was_izolare == "Da"){
                $k++;
              }
              
            }
            echo  $k;

            ?>
          </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Persoane infectate declarate asimptomatice</h6>
          </div>
          <div class="card-body">
            <?php 
            
            $k=0;

            foreach($all_person_null as $person){
              if($person->asimptomatic == 1){
                $k++;
              }
              
            }
            echo  $k;

            ?>
          </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Persoane infectate declarate in stare <span style="color:red">grava</span></h6>
          </div>
          <div class="card-body">
            <?php 
            
            $k=0;

            foreach($all_person_null as $person){
              if($person->grav == 1){
                $k++;
              }
              
            }
            echo  $k;

            ?>
          </div>
        </div>
    </div>
  </div>
  <div class="row">

  

    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Numarul de pers.  <span style="color:red">infectate</span> pe varste</h6>
          </div>
          <div class="card-body">
          <div class="chart-area">
            <canvas id="varsteChart"></canvas>
        </div>
          </div>
        </div>
    </div>

    <div class="col-xl-6 col-md-6 mb-4">
      <div class="card shadow mb-4">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Numarul de pers. <span style="color:green">vindecate</span> pe varste</h6>
          </div>
          <div class="card-body">
          <div class="chart-area">
            <canvas id="vindecateChart"></canvas>
        </div>
          </div>
        </div>
    </div>



</div>


<div class="row">


  <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Persoane infectate</h6>
            </div>
            <div class="card-body">
            <div class="chart-area">
              <canvas id="sexeChart"></canvas>
          </div>
            </div>
          </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Persoane vindecate</h6>
            </div>
            <div class="card-body">
            <div class="chart-area">
              <canvas id="VsexeChart"></canvas>
          </div>
            </div>
          </div>
  </div>






</div>


   



</div>

<?php

$M_inf_varsta = 0;
$M_inf_count = 0;

$F_inf_varsta = 0;
$F_inf_count = 0;
$unknw = 0;

foreach($all_person_null as $person){
              
 if($person->sex == 'm'){
    $M_inf_varsta += $person->varsta;
    $M_inf_count++;
 }else if($person->sex == 'f'){
    $F_inf_varsta += $person->varsta;
    $F_inf_count++;
 }else{
   $unknw++;
 }

}

?>


<script src="<?php echo base_url(); ?>assets/jquery/jquery-ui.js"></script>
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("sexeChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['M','F'],
    datasets: [{
      data: [<?= $M_inf_count ?>,<?= $F_inf_count ?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: true
    },
    cutoutPercentage: 80,
  },
});

</script>


<?php

$VM = 0;
$VF = 0;

$Vunknw = 0;

foreach($all_person_null as $person){
              
 if($person->sex == 'm'){
    if($person->vindecat == 1){
      $VM++;
    }
 }else if($person->sex == 'f'){
  if($person->vindecat == 1){
    $VF++;
  }
 }else{
   $Vunknw++;
 }

}

?>
<script>
// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// Pie Chart Example
var ctx = document.getElementById("VsexeChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['M','F'],
    datasets: [{
      data: [<?= $VM ?>,<?= $VF ?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: true
    },
    cutoutPercentage: 80,
  },
});

</script>




<?php
$u18 =0;
$bet18to25=0;
$bet25to35=0;
$bet35to45=0;
$bet45to55=0;
$bet55to65=0;
$bet65plus=0;

foreach($all_person as $person){
              
 if($person->varsta > 18){
    if($person->varsta > 25){
      if($person->varsta > 35){
        if($person->varsta > 45){
          if($person->varsta > 55){
            if($person->varsta > 65){
              $bet65plus++;
            }else{
              $bet55to65++;
            }
          }else{
            $bet45to55++;
          }
        }else{
          $bet35to45++;
        }
      }else{
        $bet25to35++;
      }
    }else{
      $bet18to25++;
    }
 }else{
  $u18++;
 }

}
?>

<script>
// Set new default font family and font color to mimic Bootstrap's default styling
// Bar Chart Example

// Pie Chart Example
var ctx = document.getElementById("varsteChart");
var myPieChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["<18","18-25","25-35","35-45","45-55","55-65","65+"],
    datasets: [{
      data: [<?= $u18 ?>,<?= $bet18to25 ?>,<?= $bet25to35 ?>,<?= $bet35to45 ?>,<?= $bet45to55 ?>,<?= $bet55to65 ?>,<?= $bet65plus ?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

</script>


<?php
$Vu18 =0;
$Vbet18to25=0;
$Vbet25to35=0;
$Vbet35to45=0;
$Vbet45to55=0;
$Vbet55to65=0;
$Vbet65plus=0;

foreach($all_person as $person){
 if($person->vindecat == 1) 
 {
      if($person->varsta > 18 ){
        if($person->varsta > 25 ){
          if($person->varsta > 35){
            if($person->varsta > 45){
              if($person->varsta > 55){
                if($person->varsta > 65){
                  $Vbet65plus++;
                }else{
                  $Vbet55to65++;
                }
              }else{
                $Vbet45to55++;
              }
            }else{
              $Vbet35to45++;
            }
          }else{
            $Vbet25to35++;
          }
        }else{
          $Vbet18to25++;
        }
    }else{
      $Vu18++;
    }

 }            


}
?>

<script>
// Set new default font family and font color to mimic Bootstrap's default styling
// Bar Chart Example

// Pie Chart Example
var ctx = document.getElementById("vindecateChart");
var myPieChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ["<18","18-25","25-35","35-45","45-55","55-65","65+"],
    datasets: [{
      data: [<?= $Vu18 ?>,<?= $Vbet18to25 ?>,<?= $Vbet25to35 ?>,<?= $Vbet35to45 ?>,<?= $Vbet45to55 ?>,<?= $Vbet55to65 ?>,<?= $Vbet65plus ?>],
      backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc'],
      hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf'],
      hoverBorderColor: "rgba(234, 236, 244, 1)",
    }],
  },
  options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: "rgb(255,255,255)",
      bodyFontColor: "#858796",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: true,
      caretPadding: 10,
    },
    legend: {
      display: false
    },
    cutoutPercentage: 80,
  },
});

</script>


<script>
$(document).ready(function() {

$('#dataTable').DataTable();
});


</script>