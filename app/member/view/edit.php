<?php $ID = isset($_GET['id']) ? $_GET['id'] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/member/controller/memberController.js"></script>
<?php include "app/member/view/_menu.php"; ?>
<section id="main-content" ng-controller="memberController" ng-init="memberShow('<?php echo $ID; ?>');">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3>แก้ไขข้อมูลสมาชิค
						<small>
							<a href="<?php echo $LINK_URL; ?>member/show/{{memberInstance.id}}/" ng-attr-title="{{ 'กลับไปหน้า แสดงข้อมูล '+memberInstance.name }}">
								<i class="fas fa-hand-point-left"></i> 
								{{ "#"+memberInstance.id }}
							</a>
						</small>
					</h3>
				</div>	

				<div class="panel-body">
					<form name="memberEdit" method="post" ng-submit="memberUpdate();">
						<?php include("app/member/view/_form.php"); ?>		
						<button type="reset" class="btn btn-light float-right"><i class="fas fa-broom"></i> ล้างข้อมูล</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</section>