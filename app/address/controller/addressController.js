angular.module("myApp").controller("addressController", ["$scope", "$http", "$window", "$filter", function($scope, $http, $window, $filter){
	
	$scope.addressInstanceList = [];
	$scope.addressInstance = {};
	$scope.pagination = {};
	$scope.pagination.page = 1;

	$scope.addressInsert = function(){
		$http({
			method: "POST",
			url: PATH+"app/address/model/?action=addressInsert",
			data: $.param($scope.addressInstance),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var last_id = response.data.last_id ? response.data.last_id : null;
			if (last_id){
				$window.location.href = LINK+"address/show/"+last_id+"/";
			}else{
				$scope.displayNotify('warning', "เพิ่มข้อมูล address ใหม่ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการเพิ่มข้อมูล address ใหม่");
			console.log("addressController save ERROR!!!");
			console.log(error);
		});
	};

	$scope.addressShow= function(id){
		$http({
			method: "GET",
			url: PATH+"app/address/model?action=addressShow",
			params: {id: id}
		}).then(function successCallback(response) {
			if (response.data.instance){
				$scope.addressInstance = response.data.instance;
			}
			else{
				$scope.displayNotify('warning', "แสดงข้อมูล  address  ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดงข้อมูล address  #"+id);
			console.log("addressController show ERROR!!!");
			console.log(error);
		});
	};

	$scope.addressList= function(){
		$http({
			method: "GET",
			url: PATH+"app/address/model/?action=addressList",
			params: $scope.pagination
		}).then(function successCallback(response) {
			$scope.addressInstanceList = response.data.instance;
			$scope.pagination = response.data.pagination;
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการแสดรายการข้อมูล address ");
			console.log("addressController list ERROR!!!");
			console.log(error);
		});
	};

	$scope.addressUpdate = function(){
		$http({
			method: "POST",
			url: PATH+"app/address/model/?action=addressUpdate",
			data: $.param($scope.addressInstance),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var update_id = response.data.update_id ? response.data.update_id : null;
			if (update_id){
				$window.location.href = LINK+"address/show/"+update_id+"/";
			}else{
				$scope.displayNotify('warning', "ปรับปรุงข้อมูล address ไม่สำเร็จ!!");
				console.log(response.data);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการปรับปรุงข้อมูล address !! #"+$scope.addressInstance.id_address);
			console.log("addressController update ERROR!!!");
			console.log(error);
		});
	};

	$scope.addressDelete = function(id){
		$http({
			method: "POST",
			url: PATH+"app/address/model/?action=addressDelete",
			data: $.param({id: id}),
			headers: {"Content-Type": "application/x-www-form-urlencoded"}
		}).then(function successCallback(response) {
			var status = response.data.status ? response.data.status : false;
			alert(response.data.message);
			if (status){
				$window.location.href = LINK+"address/list/";
			}else{
				$scope.displayNotify('warning', "ลบข้อมูล address ไม่สำเร็จ!!");
				console.log(response.data.sql);
			}
			
		}, function errorCallback(error) {
			$scope.displayNotify('error', "เกิดข้อผิดพลาด!! ในการลบข้อมูล address !! #"+id);
			console.log("addressController delete ERROR!!!");
			console.log(error);
		});
	};

}]);