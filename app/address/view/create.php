<script src="<?php echo $ASSETS_URL; ?>app/address/controller/addressController.js"></script>
<?php include "app/address/view/_menu.php"; ?>
<section id="main-content" ng-controller="addressController" >
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3>เพิ่มข้อมูลaddress</h3>
				</div>	

				<div class="panel-body">
					<form name="addressCreate" method="post" ng-submit="addressInsert();">
						<?php include("app/address/view/_form.php"); ?>		
						<button type="reset" class="btn btn-light float-right"><i class="fas fa-broom"></i> ล้างข้อมูล</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</section>