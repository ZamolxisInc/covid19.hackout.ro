
 
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 mb-0 text-gray-800"><b>Conexiuni persoane</b></h1>
    </div>




<div class="row">



  <div class="col-xl-12 col-md-12 mb-12" id="vis-net">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Conexiuni persoane infectate</h6>
            </div>
            <div class="card-body">
            <span id="info-pers"></span>
          <script type="text/javascript" src="<?php echo base_url(); ?>assets/vis-network.min.js"></script>
          <style type="text/css">
            #mynetwork {
              width: auto;
              height: 520px;
              border: 1px solid lightgray;
            }        
          </style>
        <div id="mynetwork"></div>
        <script>
        var arz = [
        <?php foreach($all_person as $person) :?>
          { nr_infectie : '<?= $person->numar_infectie ?>', sex :  '<?= $person->sex ?>', varsta:  '<?= $person->varsta ?>', judet:  '<?= $person->judet ?>'},
        <?php endforeach; ?>
        ];
        

        // create an array with nodes
        var nodes = new vis.DataSet([
          <?php foreach($all_person as $person) :?>
          { id: <?php echo $person->numar_infectie ?>, label: "<?php echo $person->numar_infectie ?>" },
          <?php endforeach; ?>
          
        ]);

        // create an array with edges
        var edges = new vis.DataSet([
          { from: 1, to: 3 },
          <?php foreach($connections as $person) :?>
          { from: <?php echo $person->virus_from_persoana ?>, to: "<?php echo $person->numar_infectie ?>" },
          <?php endforeach; ?>
        ]);

        // create a network
        var container = document.getElementById("mynetwork");
        var data = {
          nodes: nodes,
          edges: edges
        };
        var options = {};
        var network = new vis.Network(container, data, options);
        network.on( 'click', function(properties) {
            var ids = properties.nodes;
            var clickedNodes = nodes.get(ids);
            //console.log(properties.nodes[0]);
            if(properties.nodes[0]){
              document.getElementById("info-pers").innerHTML = "Pacientul nr: "+arz[properties.nodes[0]-1].nr_infectie+" <br>Sex: "+arz[properties.nodes[0]-1].sex+ "<br>Varsta: "+arz[properties.nodes[0]-1].varsta+ "<br>Judet: "+arz[properties.nodes[0]-1].judet;
        
            }
            });

        

        </script>

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

foreach($all_person as $person){
              
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

foreach($all_person as $person){
              
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