<?php require_once "inis/ini.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <!-- START ACCORDION & CAROUSEL-->
        <!-- <h5 class="mt-4 mb-2">Your Templates</h5> -->
        <!-- /.row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Products Data</h3>
                    </div>
                    <!-- ./card-header -->
                    <!--<div class="card-body">-->

                    <!---->
                    <div class="card-body" style="display: block;">
                        <div class="table-responsive">
                            <form action="passer?p=view-video" id="foo">
                                <?= $c->create_form($video_edit); ?>
                                <input type="hidden" name="update_vid_pro" value="">
                                <div id="custommessage"></div>
                                <input type="submit" style="width:100%;" class="btn btn-primary" value="submit">
                            </form>
                        </div>
                    </div>
                    <!---->

                    <!--</div>-->
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </section>