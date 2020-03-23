<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 mb-0 text-gray-800"><b>SLogs</b></h1>
    </div>


    <div class="row">

        <div class="col-xl-12 col-md-12 mb-12 ui-sortable-handle">
            <table class="table table-striped table-responsive p-3" id="dataTable" width="100%" cellspacing="0">
                <thead>
                                <tr>
                                    <th >Id_logs </td>
                                    <th >ip</th>
                                    <th >info</th>
                                    <th > userag</th>
                            
                                    <th >date</th>
                                    <th >time</th>
                                   
                                </tr>

                    </thead>
                    <tbody>
                    <?php  foreach($logs as $log): ?>
                                <tr>
                    <td ><?= $log->id_log; ?></td>
                    <td ><?= $log->ip; ?></td>
                    <td ><?= $log->info; ?></td>
                    <td > <?= $log->useragent; ?></td>
                    <td > <?= $log->date; ?></td>
                    <td > <?= $log->time; ?></td>
                   
                                </tr>
                                <?php endforeach; ?>
                </tbody>
                </table>
        </div>



    </div>

    <div class="row">

        <div class="col-xl-4 col-md-12 mb-12 ui-sortable-handle">
            <table class="table table-striped table-responsive p-3" id="dataTable2" width="100%" cellspacing="0">
                <thead>
                                <tr>
                                    <th >nr </td>
                                    <th >ip</th>
                                    
                                   
                                </tr>

                    </thead>
                    <tbody>
                    <?php  foreach($top as $t): ?>
                                <tr>
                    <td ><?= $t->nr; ?></td>
                    <td ><?= $t->ip; ?></td>
        
        
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                </table>
        </div>



    </div>

</div>

<script>
$(document).ready(function() {

$('#dataTable').DataTable();
$('#dataTable2').DataTable();
});


</script>