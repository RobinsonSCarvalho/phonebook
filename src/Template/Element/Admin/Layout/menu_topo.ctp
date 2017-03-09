<ul class="nav navbar-top-links pull-left">

    <!--Navigation toogle button-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <li class="tgl-menu-btn">
        <a class="mainnav-toggle" href="#">
            <i class="demo-pli-view-list"></i>
        </a>
    </li>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End Navigation toogle button-->



    <!--Notification dropdown-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <li class="dropdown">
        <!--a href="#" data-toggle="dropdown" class="dropdown-toggle">
            <i class="demo-pli-bell"></i>
            <span class="badge badge-header badge-danger"></span>
        </a-->

        <!--Notification dropdown menu-->
        <div class="dropdown-menu dropdown-menu-md">
            <div class="pad-all bord-btm">
                <p class="text-semibold text-main mar-no">You have 9 notifications.</p>
            </div>
            <div class="nano scrollable">
                <div class="nano-content">
                    <ul class="head-list">

                        <!-- Dropdown list-->
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <p class="pull-left">Database Repair</p>
                                    <p class="pull-right">70%</p>
                                </div>
                                <div class="progress progress-sm">
                                    <div style="width: 70%;" class="progress-bar">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <!-- Dropdown list-->
                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <p class="pull-left">Upgrade Progress</p>
                                    <p class="pull-right">10%</p>
                                </div>
                                <div class="progress progress-sm">
                                    <div style="width: 10%;" class="progress-bar progress-bar-warning">
                                        <span class="sr-only">10% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li>

                        <!-- Dropdown list-->
                        <li>
                            <a class="media" href="#">
                                <span class="badge badge-success pull-right">90%</span>
                                <div class="media-left">
                                    <i class="demo-pli-data-settings icon-2x"></i>
                                </div>
                                <div class="media-body">
                                    <div class="text-nowrap">HDD is full</div>
                                    <small class="text-muted">50 minutes ago</small>
                                </div>
                            </a>
                        </li>

                        <!-- Dropdown list-->
                        <li>
                            <a class="media" href="#">
                                <div class="media-left">
                                    <i class="demo-pli-file-edit icon-2x"></i>
                                </div>
                                <div class="media-body">
                                    <div class="text-nowrap">Write a news article</div>
                                    <small class="text-muted">Last Update 8 hours ago</small>
                                </div>
                            </a>
                        </li>

                        <!-- Dropdown list-->
                        <li>
                            <a class="media" href="#">
                                <span class="label label-danger pull-right">New</span>
                                <div class="media-left">
                                    <i class="demo-pli-speech-bubble-7 icon-2x"></i>
                                </div>
                                <div class="media-body">
                                    <div class="text-nowrap">Comment Sorting</div>
                                    <small class="text-muted">Last Update 8 hours ago</small>
                                </div>
                            </a>
                        </li>

                        <!-- Dropdown list-->
                        <li>
                            <a class="media" href="#">
                                <div class="media-left">
                                    <i class="demo-pli-add-user-plus-star icon-2x"></i>
                                </div>
                                <div class="media-body">
                                    <div class="text-nowrap">New User Registered</div>
                                    <small class="text-muted">4 minutes ago</small>
                                </div>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

            <!--Dropdown footer-->
            <div class="pad-all bord-top">
                <a href="#" class="btn-link text-dark box-block">
                    <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications
                </a>
            </div>
        </div>
    </li>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End notifications dropdown-->


</ul>
<ul class="nav navbar-top-links pull-right">
    <!--User dropdown-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <li id="dropdown-user" class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
            <span class="pull-right">
                <?= $this->Html->image($this->request->session()->read('Auth.User.url'), ['class' => 'img-responsive img-rounded', 'style' => 'max-height: 30px;']); ?>
            </span>
            <div class="username hidden-xs"><?= $this->request->session()->read('Auth.User.nome') ?></div>

        </a>


        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right panel-default">
            <!-- User dropdown menu -->
            <ul class="head-list">
                <li>
                    <?= $this->Html->link('<i class="demo-pli-male icon-lg icon-fw"></i> Perfil', ['controller' => 'Usuarios', 'action' => 'edit', $this->request->session()->read('Auth.User.id')], ['escape' => false]) ?>
                </li>
                <li>
                    <?= $this->Html->link('<i class="demo-pli-gear icon-lg icon-fw"></i> Parametros', ['controller' => 'Parametros', 'action' => 'index'], ['escape' => false]) ?>
                </li>
            </ul>

            <!-- Dropdown footer -->
            <div class="pad-all text-right">
                <?= $this->Html->link('<i class="demo-pli-unlock"></i> Sair', '/logout', ['escape' => false, 'class' => 'btn btn-primary']) ?>
            </div>
        </div>
    </li>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End user dropdown-->
</ul>
