<script src="<?php echo $ASSETS_URL; ?>app/member/controller/memberController.js"></script>
<?php include "app/member/view/_menu.php"; ?>
<section id="main-content" ng-controller="memberController" >
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3>เพิ่มข้อมูลสมาชิค</h3>
				</div>	

				<div class="panel-body">
					<form name="memberCreate" method="post" ng-submit="memberInsert();">
						<?php include("app/member/view/_form.php"); ?>		
						<button type="reset" class="btn btn-light float-right"><i class="fas fa-broom"></i> ล้างข้อมูล</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</section>