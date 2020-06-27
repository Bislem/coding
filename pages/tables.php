<?php
use App\App;

if(isset($_GET['t'])){
    $t = $_GET['t'];
}else{
  $app::error404();
}
$Table = App::getTable($t);
$table = $Table->getAll_JSON();
$columns = $Table->getColumns(true); 


?>


<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                                
              <div class="table-responsive">
                  <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                  <thead>
         
                  </thead>
                  <tbody>

                    </tbody>
                </table>
    </div>
              
              </div>
            </div><div class="row"><div class="col-sm-12 col-md-5">
                </div></div>
              </div>
            </div>
          </div>

        </div>
        
    <script>
        var data = <?php echo $table; ?> ;
        $('#dataTable').DataTable( {
    data: data,
    columns: <?php echo $columns; ?>
    } );
    </script>


