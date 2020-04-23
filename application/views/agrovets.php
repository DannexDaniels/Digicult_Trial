<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Agrovets</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Registered Agrovets</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Address</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Address</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?
                        foreach ($list as $agrovet) :
                            ?>
                            <tr>
                                <td><? echo $agrovet['agrovet_id'];?></td>
                                <td><? echo $agrovet['agrovet_name'];?></td>
                                <td><? echo $agrovet['agrovet_phone'];?></td>
                                <td><? echo $agrovet['agrovet_email'];?></td>
                                <td><? if ($agrovet['agrovet_location']==1){
                                        echo 'Lurambi East';
                                    }else{
                                        echo 'Lurambi West';
                                    }
                                    ?>
                                </td>
                                <td><? echo $agrovet['agrovet_address'];?></td>
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