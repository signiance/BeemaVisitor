<?php
// include header.php
include("header.php");
?>
<body>
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<div class="wrapper">
		<nav id="sidebar" class="sidebar">
			<img src="<?php echo BASE_URL;?>publicAssets/img/bluecurve.png" class="logo" alt="Beema" style="width: 250px;z-index: 1;position: absolute;">

			<a class="sidebar-brand" href="<?php echo BASE_URL;?>en/dashboard" style="z-index: 1000000000000000000;position: relative;">
				<img src="<?php echo BASE_URL;?>publicAssets/img/logo.png" style="width:200px">				
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">
					<img src="<?php echo BASE_URL;?>publicAssets/img/default.png" class="img-fluid rounded-circle mb-2" alt="profile image" />
					<div class="fw-bold" id="userName"></div>
					<p id="civilId"></p>
				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
					رئيسي
					</li>
					<li class="sidebar-item active" id="dashboard">
						<a href="dashboard" class="sidebar-link">
							<i class="align-middle me-2 fas fa-fw fa-home"></i> <span class="align-middle">لوحة القيادة</span>
						</a>						
					</li>


					<li class="sidebar-item" id="renewInsurance">
						<a href="insuranceDetails" class="sidebar-link">
							<i class="align-middle me-2 fas fa-fw fa-check-square"></i> <span class="align-middle">تجديد التأمين</span>
						</a>
					</li>

					<li class="sidebar-item" id="insuranceHistory">
						<a href="insuranceHistory" class="sidebar-link">
							<i class="align-middle me-2 fas fa-fw fa-book"></i> <span class="align-middle">تاريخ التأمين</span>
						</a>						
					</li>

					<li class="sidebar-item" id="logout">
						<a href="<?php echo BASE_URL;?>" class="sidebar-link">
							<i class="align-middle me-2 fas fa-fw fa-sign-out-alt"></i> <span class="align-middle">تسجيل خروج</span>
						</a>						
					</li>
				</ul>
			</div>
		</nav>

		<script>
			// jquery to show local storage name to the user
			$(document).ready(function(){
				$("#userName").html(localStorage.getItem("name_ar"));
				$("#civilId").html(localStorage.getItem("civilId"));
			});
			
			// jquery to clear local storage
			$("#logout").click(function(){
				localStorage.clear();
			});
		</script>
		<script type="text/javascript">
			var baseURL = "<?php echo BASE_URL.$lang; ?>";
			var apiURL = "<?php echo API_URL; ?>";
		</script>


