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
						Insurance History
					</h1>						
				</div>
			</nav>
            <main class="content">
				<div class="container-fluid">
                    <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Insurance History</h5>                                        
                                    </div>
                                    <div class="card-body">
                                        <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Beema Id </th>
                                                    <th>Issue Date </th>
                                                    <th>Plate Number </th>
                                                    <th>Make </th>
                                                    <th>Model </th>
                                                    <th>Color </th>
                                                    <th>Year </th>
                                                    <th>Start Date </th>
                                                    <th>End Date </th>
                                                    <th>Company Name </th>
                                                    <th>Auth Code </th>
                                                    <th>File </th>
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