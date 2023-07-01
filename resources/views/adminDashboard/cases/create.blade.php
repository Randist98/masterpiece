@extends('adminDashboard.Layout.master')

@section('content')

   <!--**********************************
            Content body start
        ***********************************-->

<div class="content-body">
    <div class="container-fluid">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo"></div>
                            <div class="profile-photo">
                                <img src="./assest/images/profile/profile.png" class="img-fluid rounded-circle" alt="">
                            </div>
                        </div>
                        <div class="profile-info">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <div class="row">


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-tab">
                            <div class="custom-tab-1">

                                <div class="tab-content">
                                    <li class="nav-item">
                                        <a href="#profile-settings" data-toggle="tab" class="nav-link">Add New Account</a>
                                    </li>

                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Account Setting</h4>
                                                <form action="{{ route('casesTable.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label>Case Name</label>
                                                            <input type="text" name="name" placeholder="Enter Case Name" class="form-control">
                                                        </div>
                                                        {{-- <div class="form-group col-md-6">
                                                            <label>License Number</label>
                                                            <input type="text" name="license_number" placeholder="License Number" class="form-control">
                                                        </div> --}}
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Beneficiary	</label>
                                                            <input type="text" name="Beneficiary" placeholder="Beneficiary" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>Number of Beneficiary</label>
                                                            <input type="text" name="NoBeneficiary" placeholder="Number of Beneficiary" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Address</label>
                                                            <input type="text" name="address" placeholder="1234 Main St" class="form-control">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>City</label>
                                                            <select name="city" class="form-control">
                                                                <option value="">--Select City--</option>
                                                                <option value="Amman">Amman</option>
                                                                <option value="Zarqa">Zarqa</option>
                                                                <option value="Irbid">Irbid</option>
                                                                <option value="Ajloun">Ajloun</option>
                                                                <option value="Al-Salt">Al-Salt</option>
                                                                <option value="Madaba">Madaba</option>
                                                                <option value="Jerash">Jerash</option>
                                                                <option value="Karak">Karak</option>
                                                                <option value="Tafilah">Tafilah</option>
                                                                <option value="Ma'an">Ma'an</option>
                                                                <option value="Aqaba">Aqaba</option>
                                                                <option value="Mafraq">Mafraq</option>
                                                                <!-- Add more options as needed -->
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label>Image</label>
                                                            <input type="file" name="image" class="form-control">
                                                        </div>
                                                        {{-- <div class="form-group col-md-6">
                                                            <label>License Doc </label>
                                                            <input type="file" name="license_doc" class="form-control">
                                                        </div> --}}
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label>Description</label>
                                                            <textarea name="description" rows="5" cols="100" placeholder="Write the description" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Add Case</button>
                                                </form>

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
</div>
   <!--**********************************
            Content body end
        ***********************************-->

@endsection
