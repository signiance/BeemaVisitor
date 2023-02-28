<?php
require_once('../config/config.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Modern, flexible and responsive Bootstrap 5 admin &amp; dashboard template">
	<meta name="author" content="Bootlab">

	<title>Beema</title>

	<!-- PICK ONE OF THE STYLES BELOW -->
	<link href="<?php echo BASE_URL;?>publicAssets/css/modern.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo BASE_URL;?>publicAssets/css/main-min.css">
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

	<style>
		.imgActive{
			opacity: 1 !important;
		}
		#employeeDiv{
			opacity: 0.3; 
		}
		/* on hover employee-img change the opacity */
		#employeeDiv:hover {
			opacity: 0.7;
			cursor:pointer;
		}

		#visitorDiv{
			opacity: 0.3;
		}
		/* on hover employee-img change the opacity */
		#visitorDiv:hover {
			opacity: 0.7;
			cursor:pointer;
		}
		
	</style>
	
</head>
<!-- SET YOUR THEME -->

<body class="theme-blue">
	<div class="splash active">
		<div class="splash-icon"></div>
	</div>

	<main class="main">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table">
					
					<!-- Validate  -->
					<div id="validatePaci" class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">Welcome to Beema</h1>
							<p class="lead">
								TPL
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img style="" src="<?php echo BASE_URL;?>publicAssets/img/Beema_logo.png" alt="Beema Logo" class=" img-fluid" width="152" height="152" />
									</div>
									<form id="visitorForm">
										<div class="mb-3">
											<label id="emailLabel">Civil id</label>		
											<input id="paci" class="form-control" type="number" tel="numeric" name="civilId" placeholder="Enter Civil ID Number" />
											<p style="color:red" id="visitorError"></p>
										</div>
										<div id="SignInBtn" class="text-center mt-3">
											<a id="paciBtn" class="btn btn-md" style="background:#153d77; color:#fff">Send authentication request</a>
										</div>										
                                    </form>


									<!-- Create Employee form -->
									<form id="employeeForm">
										<div class="mb-3">
											<label id="emailLabel">Username</label>		
											<input id="username" class="form-control form-control-lg" type="text" name="username" placeholder="Enter Username " />
										</div>
										<div class="mb-3">
											<label id="emailLabel">Password</label>		
											<input id="password" class="form-control form-control-lg" type="password" name="password" placeholder="Enter Password" autocomplete="true" />
										</div>
										<p style="color:red" id="employeeError"></p>
										<div id="SignInBtn" class="text-center mt-3">
											<a href="#" id="companySignIn" style="background:#153d77; color:#fff" class="btn btn-md">Sign in</a>											
										</div>
										<!-- p label with red text -->										
                                    </form>
 
									<form id="didAuthForm">
										<div class="mb-3">
											<h6 style="text-align:center">Request has been sent.
											<a href="#" id="resend-request" >Resend..</a>
											</h6>																						
										</div>										
										<div id="SignInBtn" class="text-center mt-3">
											<a id="approvedBtn" class="btn btn-md" style="background:#153d77; color:#fff">I approved the request via Mobile ID</a>
											<p style="color:red" id="authError"></p>
										</div>										
                                    </form>

                                    <!-- Switch between visitor and employee -->
									<div class="container mt-4">
										<div id="rowPaciEmp" class="row flex-nowrap">
											<div class="col mt-2 text-center md:text-center lg:text-center" id="employeeDiv">
												<img id="company-img" style="text-align: center;" width="40%" src="<?php echo BASE_URL;?>publicAssets/img/iru-logo.png" alt="">
												<p class="mt-3" style="margin-bottom: 5px;">Employee</p>
                                                <p style="font-size: 10px;">Login of employees within IRU and licensed entities.</p>
											</div>
											<div class="col mt-2 text-center md:text-center lg:text-center imgActive" id="visitorDiv">
												<img id="visitor-img" style="text-align: center;" width="40%" src="<?php echo BASE_URL;?>publicAssets/img/paci.png" alt="">
												<p class="mt-3" style="margin-bottom: 5px;">Visitors</p>
                                                <p style="font-size: 10px;">Visitors login using PACI Mobile ID application.</p>
											</div>
                                        </div>
									</div>										
								</div>
							</div>
						</div>

					</div>
					<!-- ./Validate  -->
					
					
					<!-- I did authenticate -->
					
					<div id="iDidAuthenticate" class="container d-none">
						<div class="col">														
							<div class="row">
                                <div class="mt-9 d-flex align-items-center justify-content-center" style="height: 40em;">
                                    <div  class="card mt-9" style="width: 30em; height: 25em" >
                                        <div class="card-body">									
									        <div class="text-center">
										        <img style="" src="<?php echo BASE_URL;?>publicAssets/img/Beema_logo.png" alt=""" class=" img-fluid" width="152" height="152" />
									        </div>									
									        <div class="mt-9">
                                                <h3>Please authenticate with mobile id and allow</h3>
                                                <div class="d-flex align-items-center justify-content-center">
                                                <button id="didAuthBtn" class="btn-primary btn-lg" type="button">I did authenticate</button>
									        </div>
                                        </div>
							        </div>
							    </div>							
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>	
	</main>


	<!-- Modal -->
<div class="modal fade" id="useMobileIdModal" tabindex="-1" role="dialog" aria-labelledby="useMobileIdModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document" style="max-width: 350px;">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Action Required</h5>        
      </div>
      <div class="modal-body">
	  	<p>Authentication request has been sent to
			the Public Authority for Civil Information.
			To retrieve your civil information, please use
			MobileID app to approve IruSoft's
			authentication request. Once you're done
			with authorizing IruSoft, please come back
			to this page and press on approved the
			request via MobilelD button.
		</p>
      </div>
      <div class="modal-footer">
        <button type="button" id="closeMobileIDModal" class="btn btn-primary" data-dismiss="modal">Close</button>        
      </div>
    </div>
  </div>
</div>
	
	
	
	<!-- Modal bootstarp -->
	<div id="myModal" class="modal" tabindex="-1" role="dialog">
	  <div class="modal-dialog modal-xs" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title">Something went wrong</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			<p>Please try again</p>
		  </div>
		  <div class="modal-footer">
			<button id="closeModal" type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
		  </div>
		</div>
	  </div>
	</div>	
	<!-- ./Modal -->
	
	<script src="<?php echo BASE_URL;?>publicAssets/js/app.js"></script>

	<script type="text/javascript">
		var baseURL = "<?php echo BASE_URL.$lang; ?>";
		var apiURL = "<?php echo API_URL; ?>";
	</script>

	<script src="<?php echo BASE_URL;?>publicAssets/js/visitorLogin.js"></script>
 
	



</body>

</html>