<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Farmers</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Registered Farmers</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Farmer Name</th>
                            <th>Phone Number</th>
                            <th>Location</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Farmer Name</th>
                            <th>Phone Number</th>
                            <th>Location</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?
                            foreach ($list as $farmer) :
                        ?>
                        <tr>
                            <td><? echo $farmer['farmer_name'];?></td>
                            <td><? echo $farmer['farmer_phone'];?></td>
                            <td><? if ($farmer['farmer_location']==1){
                                    echo 'Lurambi East';
                                }else{
                                    echo 'Lurambi West';
                                }
                                ?>
                            </td>
                        </tr>
                        <?  endforeach;?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <!-- /.container-fluid-->