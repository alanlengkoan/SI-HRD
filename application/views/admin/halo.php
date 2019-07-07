<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="#">Home</a></li>
                <li class="active"><?=$title?></li>
            </ul>
            <h3 class="page-title"><?=$title?></h3>
                <?php if ($isi) $this->load->view($isi); ?>
        </div>
    </div>
<!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
<div class="clearfix"></div>