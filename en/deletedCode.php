<div class="row"  id="numberPlateForm">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="card" style="margin-top: 50px;">
                                    <div class="card-body">
                                        <h1 class="card-title"></h1>
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

                    <!-- <div class="container" id="numberPlateForm">
                        <div class="plans" id="CCCCPPPP">
                            <div class="title" style="margin-bottom: auto;" id="VehTitle">Select a Vehicle</div>


                            <label class="plan" for="sactive" id="clonePlan">
                                <input type="radio" name="plan" id="sactive" />
                                <div class="plan-content">
                                    <img loading="lazy" src="publicAssets/img/sport-car.png" alt="" />
                                    <div class="plan-details">
                                        <span>Plate Number: </span>
                                        <p>Make: </p>                                    
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div> -->




                    <script>
    // (function () {
    //     var $imgs = $("#gallery img");
    //     var $buttons = $("#buttons");
    //     var tagged = {};

    //     $imgs.each(function () {
    //         var img = this;
    //         var tags = $(this).data("tags");
    //         if (tags) {
    //             tags.split(",").forEach(function (tagName) {
    //                 if (tagged[tagName] == null) {
    //                     tagged[tagName] = [];
    //                 }
    //                 tagged[tagName].push(img);
    //             });
    //         }
    //     });
        // $("<button/>", {
        //     text: "Show All",
        //     class: "active",
        //     click: function () {
        //         $(this).addClass("active").siblings().removeClass("active");
        //         $imgs.show();
        //     }
        // }).appendTo($buttons);
        // $.each(tagged, function (tagName) {
        //     var $n = $(tagged[tagName]).length;
        //     $("<button/>", {
        //         text: tagName + "(" + $n + ")",
        //         click: function () {
        //             $(this).addClass("active").siblings().removeClass("active");
        //             $imgs.hide().filter(tagged[tagName]).show();
        //         }
        //     }).appendTo($buttons);
        // });
//     })()(
//     (function () {
//         var $imgs = $("#gallery img");
//         var $search = $("#filter-search");
//         var cache = [];

//         $imgs.each(function () {
//         cache.push({
//             element: this,
//             text: this.alt.trim().toLowerCase()
//         });
//     });

//     function filter() {
//         var query = this.value.trim().toLowerCase();
//         cache.forEach(function (img) {
//             var index = 0;
//             if (query) {
//                 index = img.text.indexOf(query);
//             }
//             img.element.style.display = index === -1 ? "none" : "";
//             // if img is not found hide label also
//             if (img.element.style.display === "none") {
//                 img.element.parentElement.style.display = "none";
//             } else {
//                 img.element.parentElement.style.display = "";
//             }
//         });
//     }
//     if ("oninput" in $search[0]) {
//         $search.on("input", filter);
//     } else {
//         $search.on("keyup", filter);
//     }
//   })()
// );
</script>


// jquery to check value on click next button sw-btn-next
    // $(document).ready(function(){        
    //     $('#nextBtn').addClass('disabled');
    //     $("#nextBtn").click(function(){
    //         var profession = $('#profession').val();
    //         var email = $('#email').val();
    //         var mobile = $('#mobile').val();

    //         if(profession == "" || email == "" || mobile == ""){                
    //             $('#formError').html('Please fill all the fields');                
    //         }else{
    //             $('#nextBtn').removeClass('disabled');
    //         }            
    //     });

    //     $('#profession').change(function(){
    //         var profession = $('#profession').val();
    //         var email = $('#email').val();
    //         var mobile = $('#mobile').val();

    //         if(profession == "" || email == "" || mobile == ""){                
    //             $('#formError').html('Please fill all the fields');
    //             $('#nextBtn').addClass('disabled');
    //         }else{
    //             $('#formError').html('');
    //             $('#nextBtn').removeClass('disabled');
    //         }
    //     });

    //     $('#email').change(function(){
    //         var profession = $('#profession').val();
    //         var email = $('#email').val();
    //         var mobile = $('#mobile').val();

    //         if(profession == "" || email == "" || mobile == ""){                
    //             $('#formError').html('Please fill all the fields');
    //             $('#nextBtn').addClass('disabled');
    //         }else if(!validateEmail(email)){
    //             $('#formError').html('Please enter a valid email');
    //             $('#nextBtn').addClass('disabled');
    //         }else if(!validateMobile(mobile)){
    //             $('#formError').html('Please enter a valid mobile number');
    //             $('#nextBtn').addClass('disabled');
    //         }else{               
    //             $('#formError').html('');
    //             $('#nextBtn').removeClass('disabled');
    //         }
    //     });
        
    //     $('#mobile').change(function(){
    //         var profession = $('#profession').val();
    //         var email = $('#email').val();
    //         var mobile = $('#mobile').val();

    //         if(profession == "" || email == "" || mobile == ""){                
    //             $('#formError').html('Please fill all the fields');
    //             $('#nextBtn').addClass('disabled');                
    //         }else if(!validateMobile(mobile)){
    //             $('#formError').html('Please enter valid mobile number');
    //             $('#nextBtn').addClass('disabled');
    //         }else if(!validateEmail(email)){
    //             $('#formError').html('Please enter a valid email');
    //             $('#nextBtn').addClass('disabled');
    //         }else{
    //             $('#formError').html('');
    //             $('#nextBtn').removeClass('disabled');
    //         }
    //     });
    // });