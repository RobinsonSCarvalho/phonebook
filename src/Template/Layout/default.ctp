<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title . ' - ' . Cake\Core\Configure::read('Parametros.Titulo'); ?></title>
        <?=
        $this->Html->meta('favicon.ico', '/img/favicon.ico', ['type' => 'icon']
        );
        ?>
        <?php
        echo $this->Html->css('https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700');
        echo $this->Html->css('/css/bootstrap.min.css');
        echo $this->Html->css('/plugins/font-awesome/css/font-awesome.min.css');
        echo $this->Html->css('/css/nifty.min.css');
        echo $this->Html->css('/css/demo/nifty-demo-icons.min.css');
        echo $this->Html->css('/css/demo/nifty-demo.min.css');
        echo $this->Html->css('/plugins/magic-check/css/magic-check.min.css');
        echo $this->Html->css('/plugins/pace/pace.min.css');
        echo $this->Html->css('/css/admin.css');
        ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>

        <?php echo $this->element('header'); ?>
    </head>

    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="effect aside-float aside-bright mainnav-lg">

            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">

                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="<?= Cake\Routing\Router::url('/'); ?>" class="navbar-brand">
                            <?php echo $this->Html->image('/img/logo.png', ['class' => 'brand-icon']); ?>
                            <div class="brand-title">
                                <span class="brand-text">Phonebook</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->


                    <!--Navbar Dropdown-->
                    <!--================================-->
                    <div class="navbar-content clearfix">

                    </div>
                    <!--================================-->
                    <!--End Navbar Dropdown-->

                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->

            <div class="boxed">

                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">

                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <div id="page-title">
                        <h1 class="page-header text-overflow"><?= $title ?></h1>

                        <div class="searchbox text-right">
                            <?= $this->Html->getButton(); ?>
                        </div>

                    </div>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End page title-->


                    <!--Breadcrumb-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->

                    <?php
                    echo $this->Html->getCrumbList(
                            [
                        'firstClass' => false,
                        'lastClass' => 'active'
                            ], [
                        'url' => '/',
                        'text' => 'Home'
                            ]
                    );
                    ?>
                    <div id="page-content">
                        <?= $this->Flash->render() ?>
                        <?= $this->fetch('content') ?>
                    </div>
                </div>

                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">
                    <div id="mainnav">

                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                    <ul id="mainnav-menu" class="list-group">

                                        <li class="heading"><?= __('Actions') ?></li>
                                        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?></li>
                                        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?></li>

                                    </ul>
                                </div>
                            </div>
                        </div>




                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->

            </div>



            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <p class="pad-lft">&#0169; 2016 <?= Cake\Core\Configure::read('Parametros.Titulo'); ?></p>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->


            <!-- SCROLL PAGE BUTTON -->
            <!--===================================================-->
            <button class="scroll-top btn">
                <i class="pci-chevron chevron-up"></i>
            </button>
            <!--===================================================-->



        </div>
        <?php
        echo $this->Html->script('/plugins/pace/pace.min.js');
        echo $this->Html->script('/js/jquery-2.2.4.min.js');
        echo $this->Html->script('/js/bootstrap.min.js');
        echo $this->Html->script('/js/nifty.min.js');
        echo $this->Html->script('/plugins/masked-input/jquery.maskedinput.js');
        //echo $this->Html->script('/plugins/mask-money/jquery.maskMoney.min.js');
        echo $this->Html->script('/js/funcoes.js');
        //echo $this->Html->script('/js/demo/nifty-demo.min.js');
        ?>
        <?= $this->fetch('script') ?>
    </body>
</html>

