<script src="<?php echo $ASSETS_URL; ?>app/member/controller/memberController.js"></script>
<?php include "app/member/view/_menu.php"; ?>
<section id="main-content" ng-controller="memberController" ng-init="memberList();">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3>รายการข้อมูลสมาชิก</h3>
				</div>

				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-hover table-sm">
							<thead class="thead-light">
								<tr>
									<th>#</th>
									<th>ชื่อจริง</th>
									<th>นามสกุล</th>
									<th>เบอร์โทรศัพท์</th>
									<th>อีเมล</th>
									<th>เพศ [1: ชาย, 2: หญิง]</th>
									<th class="text-center"><i class="fas fa-bars"></i></th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="member in memberInstanceList">
									<td>{{ member.id }}</td>
									
									<td>{{ member.name }}</td>
									<td>{{ member.lastname }}</td>
									<td>{{ member.phone }}</td>
									<td>{{ member.email }}</td>
									<td>{{ member.gender }}</td>

									<td class="text-center">
										<div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
											<a href="<?php echo $LINK_URL; ?>member/show/{{member.id}}/" data-toggle="tooltip" data-placement="bottom" title="แสดงข้อมูล" class="btn btn-info">
												<i class="fas fa-info-circle"></i> 
												
											</a>
											<button type="button" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" title="ลบข้อมูล" confirmed-click="memberDelete(member.id);">
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
								<button class="btn btn-sm btn-light" ng-click="pagination.page=1;memberList();" ng-disabled="pagination.page<=1"> 
									<i class="fas fa-angle-double-left"></i>
								</button> &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=pagination.page-1;memberList();" ng-disabled="pagination.page<=1"> 
									<i class="fas fa-angle-left"></i>
								</button>  &nbsp;

								<input class="form-control input-sm" type="number" ng-model="pagination.page" min="1" max="{{ pagination.total/pagination.perPage | roundup }}" ng-change="memberList();" style="text-align: center;">  &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=pagination.page+1;memberList();" ng-disabled="pagination.page>=(pagination.total/pagination.perPage | roundup)"> 
									<i class="fas fa-angle-right"></i>
								</button>  &nbsp;

								<button class="btn btn-sm btn-light" ng-click="pagination.page=(pagination.total/pagination.perPage | roundup);memberList();" 
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
								<input type="number" class="form-control input-sm" type="number" id="perPage" ng-model="pagination.perPage" ng-change="memberList();" min="1" style="text-align: center;">
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
