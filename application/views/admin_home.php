<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<? echo base_url('admin')?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row" style="height:150px; margin: 20px;">
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5"><? echo $all['farmer']; ?> Farmers!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<? echo base_url('farmers')?>">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5"><? echo $all['specialist']; ?> Specialists!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<? echo base_url('specialists')?>">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-success o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-shopping-cart"></i>
                        </div>
                        <div class="mr-5"><? echo $all['agrovets']; ?> agrovets!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<? echo base_url('agrovets')?>">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <div class="card text-white bg-danger o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-support"></i>
                        </div>
                        <div class="mr-5"><? echo $all['requests']; ?> Help Requests!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="<? echo base_url('requests')?>">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Area Chart Example-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-area-chart"></i>New Farmer Registration</div>
            <div class="card-body">
                <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <!-- Example Bar Chart Card-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-bar-chart"></i> Reported Cases Summary</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8 my-auto">
                                <canvas id="myBarChart" width="100" height="50"></canvas>
                            </div>
                            <div class="col-sm-4 text-center my-auto">
                                <div class="h4 mb-0 text-primary"><? echo $notseen;?></div>
                                <div class="small text-muted">Not Seen</div>
                                <hr>
                                <div class="h4 mb-0 text-warning"><? echo $pending;?></div>
                                <div class="small text-muted">Pending</div>
                                <hr>
                                <div class="h4 mb-0 text-success"><? echo $solved;?></div>
                                <div class="small text-muted">Solved</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <div class="col-lg-4">
                <!-- Example Pie Chart Card-->
                <div class="card mb-3">
                    <div class="card-header">
                        <i class="fa fa-pie-chart"></i> Detected Areas Status Summary</div>
                    <div class="card-body">
                        <canvas id="myPieChart" width="100%" height="100"></canvas>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid-->