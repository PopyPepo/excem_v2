<?php 
$txt .= '<script src="<?php echo $ASSETS_URL; ?>app/'.$table.'/controller/'.$table.'Controller.js"></script>
<?php include "app/'.$table.'/view/_menu.php"; ?>
<section id="main-content" ng-controller="'.$table.'Controller" '.$init.'>
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3>'.$title.'</h3>
				</div>'; 

			$boxL = '		
						<button type="reset" class="btn btn-light float-right"><i class="fas fa-broom"></i> ล้างข้อมูล</button>
					</form>
				</div>
				
			</div>
		</div>
	</div>
</section>';
?>