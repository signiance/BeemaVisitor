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
						Renew Insurance
					</h1>						
				</div>
			</nav>
            <main class="content">
				<div class="container-fluid">
                    <!-- form with 2 input element in html5 -->
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="card" style="margin-top: 50px;">
                                <div class="card-body">
                                    <h1 class="card-title">Renew Insurance</h1>
                                    <p class="card-text">Please enter your insurance details below.</p>
                                    <form id="insuranceForm">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Vehicle Plate Number</label>
                                            <input type="text" class="form-control" id="plateNumber" placeholder="Enter Vehicle Plate Number" name="plateNumber" required>
                                        </div>

                                        <a class="btn btn-primary" id="getSubmit" style="margin-top:10px">Get Details</a>
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
<!-- jquery to change the menu active class to renew insurance -->
<script>
    $(document).ready(function(){
        $("#renewInsurance").addClass("active");
        // remove the active class from dashboard
        $("#dashboard").removeClass("active");
        // remove acive class from insuranceHistory
        $("#insuranceHistory").removeClass("active");
    });
</script>

<script>
    // jquery to call ajax using platenumber and get response
    $(document).ready(function(){
        $("#getSubmit").click(function(){
            var plateNumber = $("#plateNumber").val();
            $.ajax({
                url: "<?php echo API_URL;?>getData",
                method: "POST",
                data: {plateNumber:plateNumber},
                success: function(data){
                    console.log(data);

                    //$("#plateNumber").html(data);
                }
            });
        });
    });
</script>