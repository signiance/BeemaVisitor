<?php
    include("menu.php");    
?>

<!-- cdn bootstrap bundle js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>

<!-- add css insurance Details -->
<link rel="stylesheet" href="<?php echo BASE_URL;?>publicAssets/css/insuranceDetails.css">

        <div class="main">
			<nav class="navbar navbar-expand navbar-theme" style="margin-top: 15px;">
				<a class="sidebar-toggle d-flex me-2">
					<i class="hamburger align-self-center"></i>					
				</a>
				<div class="header">
					<h1 class="header-title">
						Vehicle Details
					</h1>						
				</div>
			</nav>
            <main class="content">
				<div class="container-fluid">
                    <div class="row" id="numberPlateForm">
						<div class="col-12">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Select Vehicle To Renew Insurance</h5>									
								</div>
								<div class="card-body">
									<table id="multi" class="table" style="width:100%">
										<thead>
											<tr>
                                                <th></th>
                                                <th>Status</th>
												<th>Plate Number</th>
												<th>Make</th>
												<th>Model</th>
												<th>Color</th>
												<th>Year of Manufacture</th>
												<th>Insurance Expiration Date</th>
											</tr>
										</thead>
										<tbody>                                                                                                     
                                        </tbody>                                           
									</table>       
                                    <p id="getCarError" style="color:red"></p>
                                    <button type="button" id="renewIns" class="btn btn-primary" style="float: right; margin-top: 10px;" >Renew Insurance</button>
                                    <!-- disabled="true" -->
								</div>                                
							</div>
						</div>
					</div>                    


                    <!-- form with 2 input element in html5 -->
                    <div class="row" id="detailsForm">
                        <div class="col-12 col-xxl-6">
							<div id="smartwizard-arrows-primary" class="wizard wizard-primary mb-4">
								<ul class="nav">
									<li class="nav-item"><a class="nav-link" href="#arrows-primary-step-1">Vehicle Details<br /><small>Details related to vehicle</small></a>
									</li>
									<li class="nav-item"><a class="nav-link" href="#arrows-primary-step-2">Personal Details<br /><small>Details related to Owner</small></a>
									</li>
									<li class="nav-item"><a class="nav-link" href="#arrows-primary-step-3">Insurance Details<br /><small>Details regarding Insurance company</small></a>
									</li>									
								</ul>

								<div class="tab-content">
                                    <div id="arrows-primary-step-1" class="tab-pane" role="tabpanel">
                                        <div class="row">                                             
                                            <div class="col-md-6">
                                                <label class="form-label">Plate Number</label>
                                                <label class="form-control" id="plateNo"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Make</label>
                                                <label class="form-control" id="make"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Major Color</label>
                                                <label class="form-control" id="majorColor"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Plate Purpose Type</label>
                                                <label class="form-control" id="platePurposeType"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Year of Manufacture</label>
                                                <label class="form-control" id="yearOfManufacture"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Height</label>
                                                <label class="form-control" id="height"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Shape</label>
                                                <label class="form-control" id="shape"></label>
                                            </div>
                                            <!-- Second column -->
                                            <div class="col-md-6">
                                                <label class="form-label">Number of Passengers</label>
                                                <label class="form-control" id="numberOfPassengers"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Model</label>
                                                <label class="form-control" id="model"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Minor Color</label>
                                                <label class="form-control" id="minorColor"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label"> Towing Permitted </label>
                                                <label class="form-control" id="towingPermitted"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">VIN Number</label>
                                                <label class="form-control" id="vinNumber"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Weight</label>
                                                <label class="form-control" id="weight"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Cubic Capacity</label>
                                                <label class="form-control" id="cubicCapacity"></label>
                                            </div>                                
                                        </div>
									</div>

									<div id="arrows-primary-step-2" class="tab-pane" role="tabpanel">
                                        <!-- create row to display car details -->
                                        <div class="row" style="border:2px solid">
                                            <div class="col-sm-6 col-md-3">
                                                <label class="form-label">Number Plate: </label>
                                                <b id="frm2noplate"></b>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <label class="form-label">Make: </label>
                                                <b id="frm2make"></b>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <label class="form-label">Model: </label>
                                                <b id="frm2model"></b>
                                            </div>
                                            <div class="col-sm-6 col-md-3">
                                                <label class="form-label">Major Color: </label>
                                                <b id="frm2color"></b>
                                            </div>                                           
                                        </div>
										<!-- create form to dispaly customer personal details -->                                        
                                        <div class="row">
                                            <!-- First column -->
                                            <div class="col-md-6">
                                                <label class="form-label">Name (English)</label>
                                                <label class="form-control" id="nameEn"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Name (Arabic)</label>
                                                <label class="form-control" id="nameAr"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Nationality (English)</label>
                                                <label class="form-control" id="nationalityEn"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Nationality (Arabic)</label>
                                                <label class="form-control" id="nationalityAr"></label>
                                            </div>

                                            <div class="col-md-6">
                                                <label class="form-label">Date of Birth</label>
                                                <label class="form-control" id="dob"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Gender</label>
                                                <label class="form-control" id="gender"></label>
                                            </div> 

                                            <div class="col-md-6">
                                                <label class="form-label">Paci Building Number</label>
                                                <label class="form-control" id="paciBno"></label>
                                            </div>
                                            
                                            <div class="col-md-6">
                                                <label class="form-label">Governate</label>
                                                <label class="form-control" id="governate"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Area</label>
                                                <label class="form-control" id="area"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Block Number</label>
                                                <label class="form-control" id="blockNo"></label>
                                                <label style="display:none" id="requestId"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Street Name</label>
                                                <label class="form-control" id="streetName"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Unit Number</label>
                                                <label class="form-control" id="UnitNo"></label>
                                            </div>
                                            <div class="col-md-6 was-validated">
                                                <label class="form-label">Home / Mobile Number</label>
                                                <!-- input type number without up down arrow -->
                                                <input type="number" tel="numeric" class="form-control" id="mobile" name="mobile" placeholder="Enter your Mobile number" required>
                                                <p id="mobileError" style="color:red"></p>
                                            </div>                                            
                                            <div class="col-md-6 was-validated">
                                                <label class="form-label">Email Id</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your Email ID" required>
                                                <p id="emailError" style="color:red"></p>
                                            </div>
                                            <div class="col-md-6 was-validated">
                                                <label class="form-label">Profession</label>
                                                <input type="text" class="form-control" id="profession" name="profession" placeholder="Enter your profession" required>
                                                <p id="professionError" style="color:red"></p>
                                            </div>
                                            
                                        </div>            
									</div>

									<div id="arrows-primary-step-3" class="tab-pane" role="tabpanel">
                                        <div class="row"  style="border:2px solid">
                                            <div class="col-md-3 col-sm-6">
                                                <label class="form-label">Number Plate: </label>
                                                <b id="frm3noplate"></b>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <label class="form-label">Make: </label>
                                                <b id="frm3make"></b>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <label class="form-label">Model: </label>
                                                <b id="frm3model"></b>
                                            </div>
                                            <div class="col-md-3 col-sm-6">
                                                <label class="form-label">Major Color: </label>
                                                <b id="frm3color"></b>
                                            </div>                                           
                                        </div>
                                        <div class="row">
                                            <!-- First column -->
                                            <div class="col-md-6">
                                                <label class="form-label">Previous Company Number</label>
                                                <label class="form-control" id="prevCompcode"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Previous Company Name</label>
                                                <label class="form-control" id="prevCompName"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Document Number</label>
                                                <label class="form-control" id="documentNo"></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Expiry Date</label>
                                                <label class="form-control" id="expiryDate"></label>
                                            </div>                                            
                                            <div class="row" style="padding-right: 0px;">
                                                <div class="col-md-12" style="padding-right: 0px;">
                                                    <div class="container" style="padding: 0px;">
                                                        <div class="mb-3" id="search">
                                                            <label for="filter-search" class="form-label">Search Company</label>
                                                            <input type="text" class="form-control" placeholder="Enter Company Name" id="filter-search" />
                                                        </div>
                                                        <div id="gallery" class="col-container">
                                                            
                                                        </div>
                                                    </div>
                                                    <p id="formErrorlst" style="color:red"></p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Total Amount</label>
                                                <label class="form-control" id="grandTotal"></label>
                                            </div>                                                                                    
                                            <div class="col-md-6">
                                                <label class="form-label">Total Amount in Words</label>
                                                <label class="form-control" id="grandTotalInWords"></label>                                
                                            </div>
                                        </div>
									</div>
                                </div>								
							</div>							
						</div>
                    </div>                    
				</div>
			</main>


<?php
    include("footer.php");
?>
<script src="<?php echo BASE_URL;?>publicAssets/js/insuranceDetails.js"></script>




