<?php require_once 'includes/header.php'; ?>

<div class="row">
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<i class="glyphicon glyphicon-check"></i>Sipariş Raporu Hazırla
			</div>
			<!-- /panel-heading -->
			<div class="panel-body">
				
				<form class="form-horizontal" action="php_action/SiparisRapor.php" method="post" id="getOrderReportForm">
				  <div class="form-group">
				    <label for="startDate" class="col-sm-2 control-label">Başlama Tarihi</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="startDate" name="startDate" placeholder="Başlama Tarihini Giriniz" />
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="endDate" class="col-sm-2 control-label">Bitiş Tarihi</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="endDate" name="endDate" placeholder="Bitiş Tarihini Giriniz" />
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-success" id="generateReportBtn"> <i class="glyphicon glyphicon-ok-sign"></i> Rapor Oluştur</button>
				    </div>
				  </div>
				</form>

			</div>
			<!-- /panel-body -->
		</div>
	</div>
	<!-- /col-dm-12 -->
</div>
<!-- /row -->

<script src="custom/js/report.js"></script>

<?php require_once 'includes/footer.php'; ?>