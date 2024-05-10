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
                        <h3 class="card-title">About</h3>
                    </div>
                    <!-- ./card-header -->
                    <!--<div class="card-body">-->

                    <!---->
                    <div class="card-body" style="display: block;">
                        <div class="table-responsive">
                            <form action="passer?p=about" id="foo">
                                <?= $c->create_form($about); ?>
                                <input type="hidden" name="about" value="">
                                <div id="custommessage"></div>
                                <input type="submit" style="width:50%;" class="btn btn-primary" value="submit">
                            </form>
                        </div>
                    </div>
                    <!---->
                    <div class="card-body">
                    <h1>Below Image</h1>
                
                        <hr />
                        <form action="passer?p=about" id="foo" onsubmit="return false">


                            <?= $c->create_form($about_down); ?>

                            <input type="hidden" name="upload_about">
                            <div id="custommessage"></div>

                            <input type="submit" style="width:100%;" value="Submit" class="btn btn-primary">
                        </form>
                        <!--</div>-->
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </section>