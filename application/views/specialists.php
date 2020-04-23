<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Specialists</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> All Specialists</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>ID Number</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID Number</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Location</th>
                            <th>Status</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?
                        foreach ($list as $specialist) :
                            ?>
                            <tr>
                                <td><? echo $specialist['smart_id'];?></td>
                                <td><? echo $specialist['smart_name'];?></td>
                                <td><? echo $specialist['smart_phone'];?></td>
                                <td><? echo $specialist['smart_email'];?></td>
                                <td><? if ($specialist['smart_location']==1){
                                        echo 'Lurambi East';
                                    }else{
                                        echo 'Lurambi West';
                                    }
                                    ?>
                                </td>
                                <td><? echo $specialist['status'];?></td>
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
