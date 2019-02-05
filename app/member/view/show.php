<?php $ID = isset($_GET['id']) ? $_GET['id'] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/member/controller/memberController.js"></script>
<?php include "app/member/view/_menu.php"; ?>
<section id="main-content" ng-controller="memberController" ng-init="memberShow('<?php echo $ID; ?>');">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3>แสดงข้อมูลสมาชิก : {{ "#"+memberInstance.id }}</h3>
				</div>

				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<tbody>
								<tr>
									<th>ชื่อจริง</th>
									<td>{{ memberInstance.name }}</td>
								</tr>
										
								<tr>
									<th>นามสกุล</th>
									<td>{{ memberInstance.lastname }}</td>
								</tr>
										
								<tr>
									<th>เบอร์โทรศัพท์</th>
									<td>{{ memberInstance.phone }}</td>
								</tr>
										
								<tr>
									<th>อีเมล</th>
									<td>{{ memberInstance.email }}</td>
								</tr>
										
								<tr>
									<th>เพศ </th>
									<td>{{ memberGender[memberInstance.gender] }}</td>
								</tr>
										
								<tr>
									<th>วันเกิด</th>
									<td>{{ memberInstance.birthday }}</td>
								</tr>
										
							</tbody>
						</table>
					</div>

					<hr>
					<a class="btn btn-warning float-right" href="<?php echo $LINK_URL; ?>member/edit/{{ memberInstance.id }}/"> 
						<i class="fas fa-edit"></i>
						แก้ไขข้อมูล
					</a> 

					<button type="button" class="btn btn-danger float-right" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" confirmed-click="memberDelete(memberInstance.id);"> 
						<i class="fas fa-trash-alt"></i> ลบข้อมูล 
					</button>
				</div>

			</div>
		</div>
	</div>
</section>