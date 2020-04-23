<%- include navbar.ejs %>
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
                            <th>ID</th>
                            <th>Farmer</th>
                            <th>Specialist</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Farmer</th>
                            <th>Specialist</th>
                            <th>Status</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        <?
                        foreach ($list as $request) :
                            ?>
                            <tr>
                                <td><? echo $request['help_id'];?></td>
                                <td><? echo $request['farmer_name'];?></td>
                                <td><? echo $request['smart_name'];?></td>
                                <td><? echo $request['help_status'];?></td>
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
