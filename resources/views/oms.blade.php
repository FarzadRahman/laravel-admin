@extends('main')

@section('content')


    <div class="pagetitle">
        <h1>Profile</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">OMS</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">


            <div class="col-xl-10">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Order</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label>Select Company</label>
                                        <select class="form-control">
                                            <option>comp 1</option>
                                            <option>comp 2</option>
                                            <option>comp 3</option>
                                            <option>comp 4</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label>Enter Quantity</label>
                                        <input type="number" class="form-control" placeholder="number of share" id="quantity" onchange="calculateTotal()">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label>Enter Price</label>
                                        <input type="number" class="form-control" placeholder="average rate" id="price" onchange="calculateTotal()">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label>Total Amount</label>
                                        <input type="number" class="form-control" placeholder="total" id="total_amt" readonly>
                                    </div>


                                    <div class="col-md-4 form-group">
                                        <label>Total Purchase Power</label>
                                        <input type="number" class="form-control" placeholder="total" id="purchase_power" value="5000">
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label>% of investment</label>
                                        <input type="number" class="form-control" placeholder="%" id="percent_of_investment" readonly>
                                    </div>

                                    <button class="btn btn-success" onclick="loadOnGrid()">Show on grid</button>
                                </div>


                            <div class="row">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>A/C</th>
                                        <th>available balance</th>
                                        <th>Number of Share</th>
                                        <th>purchase amount</th>
                                    </tr>

                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><input value="3000" class="form-control" name="ac_balance[]" id="ac_balance[1]" readonly></td>
                                            <td><input  class="form-control" id="ac_share0" ></td>
                                            <td><input  class="form-control" id="ac_purchase0" ></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><input value="2000" class="form-control" name="ac_balance[]" id="ac_balance[2]" readonly></td>
                                            <td><input  class="form-control" id="ac_share1" ></td>
                                            <td><input  class="form-control" id="ac_purchase1" ></td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>Total</td>
                                            <td>5000</td>
                                            <td><input  class="form-control" id="total_ac_share" ></td>
                                            <td><input  class="form-control" id="total_ac_purchase" ></td>

                                        </tr>
                                    </tfoot>
                                </table>
                            </div>



                            </div>

                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <form>
                                    <div class="row mb-3">
                                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                        <div class="col-md-8 col-lg-9">
                                            <img src="{{url('public/')}}/assets/img/profile-img.jpg" alt="Profile">
                                            <div class="pt-2">
                                                <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload"></i></a>
                                                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"><i class="bi bi-trash"></i></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Full Name</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="fullName" type="text" class="form-control" id="fullName" value="Kevin Anderson">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                        <div class="col-md-8 col-lg-9">
                                            <textarea name="about" class="form-control" id="about" style="height: 100px">Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.</textarea>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="company" class="col-md-4 col-lg-3 col-form-label">Company</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="company" type="text" class="form-control" id="company" value="Lueilwitz, Wisoky and Leuschke">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="country" type="text" class="form-control" id="Country" value="USA">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Address</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="address" type="text" class="form-control" id="Address" value="A108 Adam Street, New York, NY 535022">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Phone</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="phone" type="text" class="form-control" id="Phone" value="(436) 486-3538 x29071">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control" id="Email" value="k.anderson@example.com">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="twitter" type="text" class="form-control" id="Twitter" value="https://twitter.com/#">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="facebook" type="text" class="form-control" id="Facebook" value="https://facebook.com/#">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="instagram" type="text" class="form-control" id="Instagram" value="https://instagram.com/#">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin Profile</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="linkedin" type="text" class="form-control" id="Linkedin" value="https://linkedin.com/#">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End Profile Edit Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-settings">

                                <!-- Settings Form -->
                                <form>

                                    <div class="row mb-3">
                                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                        <div class="col-md-8 col-lg-9">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                                <label class="form-check-label" for="changesMade">
                                                    Changes made to your account
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                                <label class="form-check-label" for="newProducts">
                                                    Information on new products and services
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="proOffers">
                                                <label class="form-check-label" for="proOffers">
                                                    Marketing and promo offers
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                                <label class="form-check-label" for="securityNotify">
                                                    Security alerts
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form><!-- End settings Form -->

                            </div>

                            <div class="tab-pane fade pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form>

                                    <div class="row mb-3">
                                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="password" type="password" class="form-control" id="currentPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="newpassword" type="password" class="form-control" id="newPassword">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                            </div>

                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>
    </section>



@endsection

@section('js')
    <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"></script>
    <script>
        function calculateTotal(){


            quantity=$('#quantity').val();
            price=$('#price').val();
            purchasePower=$('#purchase_power').val();

            if(quantity && price){
                total=quantity*price;
                commission=total*0.35/100;
               $('#total_amt').val(total+commission);
               percent=((total+commission)/purchasePower)*100;
               $('#percent_of_investment').val(percent);
            }

        }

        function loadOnGrid(){
            var values = $("input[name='ac_balance[]']")
                .map(function(){return $(this).val();}).get();

            for (var i = 0; i <values.length; i++) {
                tmp=values[i];
                percent=$('#percent_of_investment').val();
                $('#ac_purchase'+i).val(tmp*percent/100);

                // Share Calculation
                quantity=$('#quantity').val();
                purchaseAmt=$('#ac_purchase'+i).val()*1;
                $('#ac_share'+i).val(Math.floor(purchaseAmt/price));



            }

            sumOfGrid();
        }

        function sumOfGrid(){
            var values = $("input[name='ac_balance[]']")
                .map(function(){return $(this).val();}).get();

            tmp=0*1;
            tmpShr=0*1;
            for (var i = 0; i <values.length; i++) {

                // percent=$('#percent_of_investment').val();
                // quantity=$('#quantity').val();
                // price=$('#price').val();
                // console.log(quantity);
                purchaseAmt=$('#ac_purchase'+i).val()*1;
                purchaseShr= $('#ac_share'+i).val()*1;
                // $('#ac_share'+i).val(Math.floor(purchaseAmt/price));

                // $("input[name='ac_balance["+i+"]']").val(tmp*percent/100);
                tmp=tmp+purchaseAmt;
                tmpShr=tmpShr+purchaseShr;

            }
            $('#total_ac_purchase').val(tmp);
            $('#total_ac_share').val(tmpShr);
        }
    </script>

@endsection

