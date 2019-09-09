# example_v2


เปลี่ยนชื่อไฟล์ x.htaccess .htaccess (ลบ x ออก ให้เหลือแค่ .htaccess)
ไฟล์ .htaccess บรรทัดที่ 3 และ 7 แก้ไข ชื่อโฟลเดอร์โปรเจค

	<IfModule mod_rewrite.c>
		RewriteEngine On
		RewriteBase /ชื่อโฟลเดอร์โปรเจค/
		RewriteRule ^index\.php$ - [L]
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteRule . /ชื่อโฟลเดอร์โปรเจค/index.php [L]
		php_flag register_globals on
		php_value session.auto_start 1
	</IfModule>

	กรณีนำขึ้น HOST
	<IfModule mod_rewrite.c>
		RewriteEngine On
		RewriteBase /
		RewriteRule ^index\.php$ - [L]
		RewriteCond %{REQUEST_FILENAME} !-f
		RewriteCond %{REQUEST_FILENAME} !-d
		RewriteRule . /index.php [L]
		php_flag register_globals on
		php_value session.auto_start 1
	</IfModule>

ไฟล์ ./conf/_connect.php บรรทัดที่ 2-5 แก้ไขการเชื่อมต่อฐานข้อมูล
	
	<?php
	$servername = "localhost";		//ชื่อ database server 
	$database = "database_name";	//ชื่อฐานข้อมูล
	$username = "username";			//ชื่อผู้ใช้เข้าสู่ฐานข้อมูล
	$password = "password";			//รหัสผ่านเข้าสู่ฐานข้อมูล


	// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
	$conn->set_charset("utf8");

	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	?>

ไฟล์ index.php  บรรทัดที่ 7 แก้ไข ชื่อโฟลเดอร์โปรเจค
	$FORDER = "/ชื่อโฟลเดอร์โปรเจค";

ไฟล์ htaccess.php แก้ไข ชื่อไฟล์ที่ใช้เป็น template
	เปลี่ยน default layout บรรทัดที่ 23
	$_SESSION['LAYOUT'] = "home";

	เพิ่ม template บรรทัดที่ 24
	$template = array("admin", "auth");		//list template
