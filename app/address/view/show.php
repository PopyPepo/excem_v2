<?php $ID = isset($_GET['id_address']) ? $_GET['id_address'] : $ID; ?>
<script src="<?php echo $ASSETS_URL; ?>app/address/controller/addressController.js"></script>
<?php include "app/address/view/_menu.php"; ?>
<section id="main-content" ng-controller="addressController" ng-init="addressShow('<?php echo $ID; ?>');">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-default">

				<div class="panel-heading">
					<h3>แสดงข้อมูลaddress : {{ "#"+addressInstance.id_address }}</h3>
				</div>

				<div class="panel-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<tbody>
								<tr>
									<th>อาคาร/ห้อง</th>
									<td>{{ addressInstance.build }}</td>
								</tr>
										
								<tr>
									<th>บ้านเลขที่</th>
									<td>{{ addressInstance.home_number }}</td>
								</tr>
										
								<tr>
									<th>หมู่ที่</th>
									<td>{{ addressInstance.village }}</td>
								</tr>
										
								<tr>
									<th>ถนน</th>
									<td>{{ addressInstance.road }}</td>
								</tr>
										
								<tr>
									<th>ตำบล</th>
									<td>{{ addressInstance.district }}</td>
								</tr>
										
								<tr>
									<th>อำเภอ</th>
									<td>{{ addressInstance.amphur }}</td>
								</tr>
										
								<tr>
									<th>จังหวัด</th>
									<td>{{ addressInstance.province }}</td>
								</tr>
										
								<tr>
									<th>รหัสไปรษณีย์</th>
									<td>{{ addressInstance.zipcode }}</td>
								</tr>
										
								<tr>
									<th>member_id</th>
									<td>{{ addressInstance.member_id }}</td>
								</tr>
										
							</tbody>
						</table>
					</div>

					<hr>
					<a class="btn btn-warning float-right" href="<?php echo $LINK_URL; ?>address/edit/{{ addressInstance.id_address }}/"> 
						<i class="fas fa-edit"></i>
						แก้ไขข้อมูล
					</a> 

					<button type="button" class="btn btn-danger float-right" ng-confirm-click="คุณแน่ใจว่าต้องการลบข้อมูล ใช่หรือไม่?" confirmed-click="addressDelete(addressInstance.id_address);"> 
						<i class="fas fa-trash-alt"></i> ลบข้อมูล 
					</button>
				</div>

			</div>
		</div>
	</div>
</section>