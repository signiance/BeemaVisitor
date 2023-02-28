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
            <main class="content">
				<div class="container-fluid">
                <div class="row">
						<div class="col-12">
							<div class="card">
								<h3 style="color:green;text-align:center;margin-top:10px">Payment Successfull</h3>
								<div class="card-body m-sm-3 m-md-5">
									<div class="mb-4">
										Hello <strong id="nofcust">Name of the customer</strong>,
										<br />
										Your payment of <strong id="amt1">KWD 00</strong> you made to Beema is Failed.
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

									<div class="text-center">
										<p class="text-sm">
											<strong>Extra note:</strong>
											Your payment is failed. Please try again later.
											Thanks in advance.
										</p>

										<a href="#" class="btn btn-primary">
											Print this receipt
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
			</main>


<?php
    include("footer.php");
?>



<script src="<?php echo BASE_URL;?>publicAssets/js/insuranceFailed.js"></script>