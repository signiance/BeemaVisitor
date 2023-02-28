<?php
    include("menu.php");    
?>
<style> 
    /* create class to make button one time clickable */
		.one-time-click {
			pointer-events: none;
		}
	</style>

        <div class="main">
			<nav class="navbar navbar-expand navbar-theme" style="margin-top: 15px;">
				<a class="sidebar-toggle d-flex me-2">
					<i class="hamburger align-self-center"></i>					
				</a>
				<div class="header">
					<h1 class="header-title">
						Insurance Summary
					</h1>						
				</div>
			</nav>
            <main class="content">
				<div class="container-fluid">
                <div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Insurance Summary</h5>									
								</div>
								<div class="card-body">
										<div class="row">
                                            <!-- create heading for this part -->
                                            <h4>Personal Details</h4>
                                            <hr>
											<div class="mb-3 col-md-6">
												<label>Civil Id: </label>
												<b id="civilnumber"></b>
											</div> 
                                            <div class="mb-3 col-md-6">
												<label>Person Name: </label>
												<b id="name"></b>
											</div>

                                            <div class="mb-3 col-md-6">
												<label>Nationality: </label>
												<b id="nationality"></b>
											</div>
                                            <div class="mb-3 col-md-6">
												<label>Gender: </label>
												<b id="gender"></b>
											</div>											
										</div>		
                                        
                                        <!-- Vehicle Details -->
										<div class="row">
                                            <h4>Vehicle Details</h4>
                                            <hr>
                                            <div class="mb-3 col-md-6">
												<label>Plate number: </label>
												<b id="plateNumber"></b>
											</div>
                                            <div class="mb-3 col-md-6">
												<label>Plate Purpose: </label>
												<b id="platePurpose"></b>
											</div>

                                            <div class="mb-3 col-md-6">
												<label>Make: </label>
												<b id="make"></b>
											</div>
                                            <div class="mb-3 col-md-6">
												<label>Model: </label>
												<b id="model"></b>
											</div>

                                            <div class="mb-3 col-md-6">
												<label>Year of Manufacture: </label>
												<b id="yearOfManufacture"></b>
											</div>
                                            <div class="mb-3 col-md-6">
												<label>Number Of Passenger: </label>
												<b id="noOfPassenger"></b>
											</div>

                                            <div class="mb-3 col-md-6">
												<label>Shape: </label>
												<b id="shape"></b>
											</div>                                            
                                            <div class="mb-3 col-md-6">
												<label>Major Color: </label>
												<b id="color"></b>
											</div>
										</div>

                                        <div class="row">
                                            <h4>Insurance Details</h4>
                                            <hr>


                                            <div class="row">                                            
                                                <div class="col-md-12" style="text-align: center;">
                                                    <div style="margin-right: auto;margin-left: auto;display: block;">
                                                        <!-- make image fixed in aspect ratio container responsive and center of the page -->
                                                        <img class="img-fluid" id="logo" style="width:100px;height:100px;object-fit:cover;object-position:center center;">
                                                    </div>                                                
                                                    <b id="cName"></b>
                                                    <hr style="width: 50%;margin-right: auto;margin-left: auto;display: block;height: 0.5px;">
                                                </div>
                                                
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label>Document Number: </label>
                                                <b id="dNumber"></b>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>Issued Date: </label>
                                                <b id="issueDate"></b>
                                            </div>


                                            <div class="mb-3 col-md-6">
                                                <label>Start Date: </label>
                                                <b id="sDate"></b>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label>Expiry Date: </label>
                                                <b id="eDate"></b>
                                            </div>                                           
                                            

                                            <!-- <div class="mb-3 col-md-6">
                                                <label>Basic Fee: </label>
                                                <b id="basicFee"></b>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>Total Additional Fee: </label>
                                                <b id="totAddFee"></b>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>Passengers Fee: </label>
                                                <b id="passengerFee"></b>
                                            </div>

                                            <div class="mb-3 col-md-6">
                                                <label>Cubic Capacity Fee: </label>
                                                <b id="CCfess"></b>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>Violations Fee: </label>
                                                <b id="violationFee"></b>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>Accidents Fee: </label>
                                                <b id="accidentFee"></b>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>Administrative Fee: </label>
                                                <b id="adminsFee"></b>
                                            </div> -->
                                            <div class="mb-3 col-md-6">
                                                <label>Grand Total: </label>
                                                <b id="gTotal"></b>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label>Grand Total In Words: </label>
                                                <b id="gTotalinWords"></b>
                                            </div>
                                        </div>
										<div class="mb-3">
											<label class="form-check m-0">
												<input type="checkbox" class="form-check-input" id="TandC" required onclick = "checkCheckmark()">
                                                <!-- click text to open modal popup -->
                                                I accept all <a class="form-check-label" data-toggle="modal" data-target="#tandCpop" id="tandcID">Terms & Conditions...</a>
											</label>
										</div>
                                        <div class="mb-3">
											<label class="form-check m-0">
												<input type="checkbox" class="form-check-input" id="chc2" required onclick = "checkCheckmark()">                                                
												<span class="form-check-label" >I hereby authorize IRU to renew my Insurance...</span>
											</label>
										</div>
                                        <div class="row">                                        
                                            <div class="mb-3 col-md-9"></div>
                                            <!-- create 2 button on right side of page -->
                                            <div class="mb-3 col-md-3">
                                                <button type="button" class="btn btn-success" id="payNow">Pay Now</button>
                                                <button type="button" class="btn btn-danger">Cancel</button>
                                            </div>
                                        </div>
                                        <!-- p tag to show error -->
                                        <p id="error" style="color:red"></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main>


<?php
    include("footer.php");
?>

<!-- Modal -->
<div class="modal fade" id="tandCpop" tabindex="-1" role="dialog" aria-labelledby="useMobileIdModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Terms & Conditions</h5>        
      </div>
      <div class="modal-body">
	  	<!-- open iframe with pdf -->
        <iframe type="application/pdf" src="<?php echo BASE_URL;?>publicAssets/Terms&conditions.pdf" style="width:100%;height:400px;"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" id="closeMobileIDModal" class="btn btn-primary" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>

<script src="<?php echo BASE_URL;?>publicAssets/js/summaryInsurance.js"></script>

