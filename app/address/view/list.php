<script src="<?php echo $ASSETS_URL; ?>app/address/controller/addressController.js"></script>
<?php include "app/address/view/_menu.php"; ?>
<section id="main-content" ng-controller="addressController" ng-init="addressList();">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3>รายการข้อมูลaddress</h3>
				</div>

				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover table-sm">
							<thead class="thead-light">
								<tr>
									<th>#</th>
									<th>อาคาร/ห้อง</th>
									<th>บ้านเลขที่</th>
									<th>หมู่ที่</th>
									<th>ถนน</th>
									<th>ตำบล</th>
									<th class="text-center"><i class="fas fa-bars"></i></th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="address in addressInstanceList">
									<td>{{ address.id_address }}</td>
									
									<td>{{ address.build }}</td>
									<td>{{ address.home_number }}</td>
									<td>{{ address.village }}</td>
									<td>{{ address.road }}</td>
									<td>{{ address.district }}</td>

									<td class="text-center">
										<div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
											<a href="<?php echo $LINK_URL; ?>address/show/{{address.id_address}}/" data-toggle="tooltip" data-placement="bottom" title="แสดงข้อมูล" class="btn btn-info">
												<i class="fas fa-info-circle"></i> 
												
											</a>
											<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" title="ลบข้อมูล" confirmed-click="addressDelete(address.id_address);">
												<i class="fas fa-trash-alt"></i> 
												
											</button>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>

				<div class="panel-footer">
					<div class="row">

						<div class="col-sm-9 form-inline" ng-show="pagination.perPage < pagination.total">
							<div ng-show="pagination.perPage < pagination.total">
								<button class="btn btn-sm btn-light" ng-click="pagination.page=1;addressList();" ng-disabled="pagination.page<=1"> 
									<i class="fas fa-angle-double-left"></i>
								</button> &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=pagination.page-1;addressList();" ng-disabled="pagination.page<=1"> 
									<i class="fas fa-angle-left"></i>
								</button>  &nbsp;

								<input class="form-control input-sm" type="number" ng-model="pagination.page" min="1" max="{{ pagination.total/pagination.perPage | roundup }}" ng-change="addressList();" style="text-align: center;">  &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=pagination.page+1;addressList();" ng-disabled="pagination.page>=(pagination.total/pagination.perPage | roundup)"> 
									<i class="fas fa-angle-right"></i>
								</button>  &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=(pagination.total/pagination.perPage | roundup);addressList();" 
									ng-disabled="pagination.page>=(pagination.total/pagination.perPage | roundup)"> 
									<i class="fas fa-angle-double-right"></i>
								</button>  &nbsp;
							</div>
						</div>

						<div class="col-sm-3 form-inline pull-right">
							<div class="input-group input-group-sm input-group-flat pull-right">
								<span class="input-group-btn">
									<button class="btn btn-light btn-sm" type="button">แสดงผล</button>
								</span>
								<input type="number" class="form-control input-sm" type="number" id="perPage" ng-model="pagination.perPage" ng-change="addressList();" min="1" style="text-align: center;width: 5rem;">
								<span class="input-group-btn">
									<button class="btn btn-light btn-sm" type="button">/ ผลลัพธ์ {{ pagination.total }} รายการ</button>
								</span>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>
</section>
