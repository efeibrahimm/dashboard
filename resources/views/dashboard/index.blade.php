@extends('dashboard.layouts.template')

@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12 col-sm-12  ">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Site Ziyaretçi Sayısı</h2>
                        <ul class="nav navbar-right panel_toolbox">
                          <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Settings 1</a>
                                <a class="dropdown-item" href="#">Settings 2</a>
                              </div>
                          </li>
                          <li><a class="close-link"><i class="fa fa-close"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">

                        <div id="mainb" style="height:350px;"></div>

                      </div>
                    </div>
                  </div>
            </div>
            <div class="row">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-user-plus"></i>
                        </div>
                        <div class="count">179</div>

                        <h3>Admin</h3>
                        <p>Click for add an Admin user</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-user-plus"></i>
                        </div>
                        <div class="count">179</div>

                        <h3>Users</h3>
                        <p>Click for add an Admin user</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="glyphicon glyphicon-envelope"></i>
                        </div>
                        <div class="count">179</div>

                        <h3>Inbox</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-check-square-o"></i>
                        </div>
                        <div class="count">20</div>

                        <h3>Blogs</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-caret-square-o-right"></i>
                        </div>
                        <div class="count">8</div>

                        <h3>Rooms</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-comments-o"></i>
                        </div>
                        <div class="count">10</div>

                        <h3>Comments</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="fa fa-sort-amount-desc"></i>
                        </div>
                        <div class="count">25</div>

                        <h3>Pages</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6  ">
                    <div class="tile-stats">
                        <div class="icon"><i class="glyphicon glyphicon-signal"></i>
                        </div>
                        <div class="count">26</div>

                        <h3>Activity</h3>
                        <p>Lorem ipsum psdea itgum rixt.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
