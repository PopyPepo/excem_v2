<?php $ID = isset($_GET['id_address']) ? $_GET['id_address'] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/address/controller/addressController.js"></script>
<?php include "app/address/view/_menu.php"; ?>
<section id="main-content" ng-controller="addressController" ng-init="addressShow('<?php echo $ID; ?>');">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3>แก้ไขข้อมูลaddress
						<small>
							<a href="<?php echo $LINK_URL; ?>address/show/{{addressInstance.id_address}}/" ng-attr-title="{{ 'กลับไปหน้า แสดงข้อมูล '+addressInstance.build }}">
								<i class="fas fa-hand-point-left"></i> 
								{{ "#"+addressInstance.id_address }}
							</a>
						</small>
					</h3>
				</div>	

				<div class="panel-body">
					<form name="addressEdit" method="post" ng-submit="addressUpdate();">
						<?php include("app/address/view/_form.php"); ?>		
						<button type="reset" class="btn btn-light float-right"><i class="fas fa-broom"></i> ล้างข้อมูล</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</section>