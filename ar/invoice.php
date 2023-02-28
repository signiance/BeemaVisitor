
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
						Invoice
					</h1>						
				</div>
			</nav>
            <main class="content" id="printThis">
				<div class="container-fluid">
                <div class="row">
						<div class="col-12">
							<div class="card">
								<h3 style="color:green;text-align:center;margin-top:10px">Payment Successfull</h3>
								<div class="card-body m-sm-3 m-md-5">
									<div class="mb-4">
										Hello <strong id="nofcust">Name of the customer</strong>,
										<br />
										Your payment of <strong id="amt1">KWD 00</strong> you made to Beema is Successful.
									</div>

									<div class="row">
										<div class="col-md-6">
											<div class="text-muted">Payment No.</div>
											<strong id="PNO"></strong>
										</div>
										<div class="col-md-6 text-md-end">
											<div class="text-muted">Payment Date</div>
											<strong id="PDATE"></strong>
										</div>
									</div>

									<hr class="my-4" />

									<div class="row mb-4">
										<div class="col-md-6">
											<div class="text-muted">Customer Details</div>
											<strong id="nofcust2">
												Name
											</strong>
											<p>
												<div id="civilID">Civil Id</div> 
												<div id="address">Address </div>
												<div id="city">City </div>
												<div id="country">Country</div>
												<a href="#" id="EMail">
													Email:
												</a><br>
												<a href="#" id="Mobile">
													Mobile: 
												</a>
											</p>
										</div>
										<div class="col-md-6 text-md-end">
											<div class="text-muted">Payment Details:</div>
											<strong>
											<div id="PaID"></div>
											</strong>
											<p> 
											<div id="TRID"> </div>
											<div id="Auth">  </div>
											<div id="PMODE"></div>
											</p>
										</div>
									</div>

									<table class="table table-sm">
										<thead>
											<tr>
												<th>Plate Number</th>
												<th>Make</th>
												<th>Model</th>
												<th>Color</th>
												<th class="text-end">Year Of Manufacture</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td id="PLNO">123</td>
												<td id="Make">2</td>
												<td id="Model">2</td>
												<td id="Color">2</td>
												<td class="text-end" id="YEAR">KWD 150.00</td>
											</tr>
											
											<tr>
												<th>&nbsp;</th>
												<th>&nbsp;</th>
												<th>&nbsp;</th>
												<th>Total </th>
												<th class="text-end" id="total">KWD  268.85</th>
											</tr>
										</tbody>
									</table>

									<table class="table table-sm">
										<thead>
											<tr>
												<th>Company Name</th>
												<th>Document Number</th>
												<th>Issue Date</th>
												<th>Start From</th>
												<th>End Date</th>
												<th>Phone</th>
												<th class="text-end">Insurance PDF</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td id="companyName">123</td>
												<td id="dNumber">2</td>
												<td id="iDate">2</td>
												<td id="sDate">2</td>
												<td id="eDate">2</td>
												<td id="phone">2</td>
												<td class="text-end">
													<a href="#" class="btn btn-sm btn-primary" id="pdf"><i class='fa fa-file-pdf'></i>Download</a>
												</td>
											</tr>
										</tbody>
									</table>

									<div class="text-center">
										<p class="text-sm">
											<strong>Extra note:</strong>
											Your payment is Successfull. Download the insurance from Insurance History.
											Thanks in advance.
										</p>

										<!-- button to click and print page -->
										<button class="btn btn-primary" id="Print">Print</button>

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
	<script src="<?php echo BASE_URL;?>publicAssets/js/invoice.js"></script>


<script>
	// click Print button to print the tag
	$("#Print").click(function () {
		// get the div to print with same css and style		
		var divToPrint = document.getElementById('printThis');
		// create a new window same as the current window
		var newWin = window.open('', 'Print-Window');
		// set the content of the new window to the div to print
		newWin.document.open();
		newWin.document.write('<html><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');
		newWin.document.close();
		// close the new window after printing
		setTimeout(function () {
			newWin.close();
		}, 10);
	});
</script>
