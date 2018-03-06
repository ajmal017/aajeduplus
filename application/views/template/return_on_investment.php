<?php $this->view('template/includes/header'); ?>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.form.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ng/packages.js"></script>
<section class="content">
    <div class="container-fluid">
        <?php $this->view('template/includes/slider'); ?>
        <!--<div class="block-header">
            <h2>PACKAGES</h2>
        </div>-->
        <!-- Tabs With Custom Animations -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            Return on investment
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>Username</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                      x  <th>Status</th>
                                        <th>Created Date</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Created Date</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $result = getReturnOnInvestment($session_data['logged_in']['userid']);
                                    foreach($result as $row){ ?>
                                    <tr>
                                      <td><?= $row['amount']; ?></td>
                                      <td><?= $row['description']; ?></td>
                                      <td><?= $row['status']; ?></td>
                                      <td><?= $row['created_date']; ?></td>  
                                    </tr>
                                    <?php } ?>
                                  </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</section>
<?php $this->view('template/includes/footer'); ?>
<script>
$(function () {
    $('.js-basic-example').DataTable({
        responsive: true
    });
});
</script>