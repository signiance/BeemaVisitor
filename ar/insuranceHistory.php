<?php
    include("menu.php");    
?>

        <div class="main">
			<nav class="navbar navbar-expand navbar-theme" style="margin-top: 15px;">
				<a class="sidebar-toggle d-flex me-2">
					<i class="hamburger align-self-center"></i>					
				</a>
				<div class="header">
					<h1 class="header-title">
                    تاريخ التأمين
					</h1>
				</div>
			</nav>
            <main class="content">
				<div class="container-fluid">
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">تاريخ التأمين</h5>                                        
                                    </div>
                                    <div class="card-body">
                                        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>معرف بيما</th>
                                                    <th>تاريخ الإصدار</th>
                                                    <th>رقم لوحة</th>
                                                    <th>يجعلون </th>
                                                    <th>نموذج </th>
                                                    <th>اللون </th>
                                                    <th>سنة </th>
                                                    <th>تاريخ البدء </th>
                                                    <th>تاريخ الانتهاء </th>
                                                    <th>اسم الشركة </th>
                                                    <th>كود المصادقة </th>
                                                    <th>ملف </th>
                                                </tr>
                                            </thead>
                                            <tbody>                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
			</main>


<?php
    include("footer.php");
?>

<script type="text/javascript">
	var baseURL = "<?php echo BASE_URL.$lang; ?>";
	var apiURL = "<?php echo API_URL; ?>";
</script>

<script src="<?php echo BASE_URL;?>publicAssets/js/insuranceHistory.js"></script>