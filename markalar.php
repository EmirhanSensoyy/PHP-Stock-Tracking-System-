<?php require_once 'includes/header.php'; ?>


<div class="row">
	<div class="col-md-12">

		<ol class="breadcrumb">
		  <li><a href="anasayfa.php">AnaSayfa</a></li>		  
		  <li class="active">Markalar</li>
		</ol>

		<div class="panel panel-default">
			<div class="panel-heading">
				<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Markaları Yönet</div>
			</div> <!-- /panel-heading -->
			<div class="panel-body">

				<div class="remove-messages"></div>

				<div class="div-action pull pull-right" style="padding-bottom:20px;">
					<button class="btn btn-default button1" data-toggle="modal" data-target="#addBrandModel"> <i class="glyphicon glyphicon-plus-sign"></i>Marka Ekle </button>
				</div> <!-- /div-action -->				
				
				<table class="table" id="manageBrandTable">
					<thead>
						<tr>							
							<th>Marka Adı</th>
							<th>Durum</th>
							<th style="width:15%;">Ayarlar</th>
						</tr>
					</thead>
				</table>
				<!-- /table -->

			</div> <!-- /panel-body -->
		</div> <!-- /panel -->		
	</div> <!-- /col-md-12 -->
</div> <!-- /row -->

<div class="modal fade" id="addBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="submitBrandForm" action="php_action/MarkaEkle.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-plus"></i>Marka Ekle</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="add-brand-messages"></div>

	        <div class="form-group">
	        	<label for="brandName" class="col-sm-3 control-label">Marka Adı </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				       <input type="text" class="form-control" id="brandName" placeholder="Marka Adını Giriniz" name="brandName" autocomplete="off">
				    </div>
	        </div> <!-- /form-group-->	         	        
	        <div class="form-group">
	        	<label for="brandStatus" class="col-sm-3 control-label">Durum </label>
	        	<label class="col-sm-1 control-label">: </label>
				    <div class="col-sm-8">
				      <select class="form-control" id="brandStatus" name="brandStatus">
				      	<option value="">~~SEÇİNİZ~~</option>
				      	<option value="1">Mevcut</option>
				      	<option value="2">Mevcut Değil</option>
				      </select>
				    </div>
	        </div> <!-- /form-group-->	         	        

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>
	        
	        <button type="submit" class="btn btn-primary" id="createBrandBtn" data-loading-text="Yükleniyor..." autocomplete="off">Değişiklikleri Kaydet</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add modal -->

<!-- edit brand -->
<div class="modal fade" id="editBrandModel" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
    	
    	<form class="form-horizontal" id="editBrandForm" action="php_action/MarkaDüzenle.php" method="POST">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title"><i class="fa fa-edit"></i> Marka Düzenle</h4>
	      </div>
	      <div class="modal-body">

	      	<div id="edit-brand-messages"></div>

	      	<div class="modal-loading div-hide" style="width:50px; margin:auto;padding-top:50px; padding-bottom:50px;">
						<i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
						<span class="sr-only">Loading...</span>
					</div>

		      <div class="edit-brand-result">
		      	<div class="form-group">
		        	<label for="editBrandName" class="col-sm-3 control-label">Marka Adı </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="editBrandName" placeholder="Marka Adını Giriniz" name="editBrandName" autocomplete="off">
					    </div>
		        </div> <!-- /form-group-->	         	        
		        <div class="form-group">
		        	<label for="editBrandStatus" class="col-sm-3 control-label">Durum </label>
		        	<label class="col-sm-1 control-label">: </label>
					    <div class="col-sm-8">
					      <select class="form-control" id="editBrandStatus" name="editBrandStatus">
					      	<option value="">~~SEÇİNİZ~~</option>
					      	<option value="1">Mevcut</option>
					      	<option value="2">Mevcut Değil</option>
					      </select>
					    </div>
		        </div> <!-- /form-group-->	
		      </div>         	        
		      <!-- /edit brand result -->

	      </div> <!-- /modal-body -->
	      
	      <div class="modal-footer editBrandFooter">
	        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Kapat</button>
	        
	        <button type="submit" class="btn btn-success" id="editBrandBtn" data-loading-text="Yükleniyor..." autocomplete="off"> <i class="glyphicon glyphicon-ok-sign"></i> Değişiklikleri Kaydet</button>
	      </div>
	      <!-- /modal-footer -->
     	</form>
	     <!-- /.form -->
    </div>
    <!-- /modal-content -->
  </div>
  <!-- /modal-dailog -->
</div>
<!-- / add modal -->
<!-- /edit brand -->

<!-- remove brand -->
<div class="modal fade" tabindex="-1" role="dialog" id="removeMemberModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="glyphicon glyphicon-trash"></i> Marka Sil</h4>
      </div>
      <div class="modal-body">
        <p>Silmek İstediğinize Emin Misiniz ?</p>
      </div>
      <div class="modal-footer removeBrandFooter">
        <button type="button" class="btn btn-default" data-dismiss="modal"> <i class="glyphicon glyphicon-remove-sign"></i> Kapat</button>
        <button type="button" class="btn btn-primary" id="removeBrandBtn" data-loading-text="Yükleniyor..."> <i class="glyphicon glyphicon-ok-sign"></i> Değişiklikleri Kaydet</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- /remove brand -->

<script src="custom/js/brand.js"></script>

<?php require_once 'includes/footer.php'; ?>