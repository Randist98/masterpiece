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
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link">Setting</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                        <div class="pt-3">
                                            <div class="settings-form">
                                                <h4 class="text-primary">Update Account</h4>
                                                <form action="{{ route('casesTable.update', $case->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label>Name</label>
                                                            <input type="text" name="name" placeholder="Enter Charity's Name" class="form-control" value="{{ $case->name }}">
                                                        </div>

                                                    </div>

                                                    <div class="form-row">

                                                        <div class="form-group col-md-6">
                                                            <label>Beneficiary</label>
                                                            <input type="text" name="Beneficiary" placeholder="Beneficiary" class="form-control" value="{{ $case->beneficiary }}">
                                                        </div>
                                                        
                                                        <div class="form-group col-md-6">
                                                            <label>Number of Beneficiary</label>
                                                            <input type="text" name="NoBeneficiary" placeholder="Number of Beneficiary" class="form-control" value="{{ $case->NoBeneficiary }}">
                                                        </div>

                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label>Address</label>
                                                            <input type="text" name="address" placeholder="1234 Main St" class="form-control" value="{{ $case->address }}">
                                                        </div>
                                                        <div class="form-group col-md-6">
                                                            <label>City</label>
                                                            <select name="city" class="form-control">
                                                                <option value="">--Select City--</option>
                                                                <option value="Amman" {{ $case->city == 'Amman' ? 'selected' : '' }}>Amman</option>
                                                                <option value="Zarqa" {{ $case->city == 'Zarqa' ? 'selected' : '' }}>Zarqa</option>
                                                                <option value="Irbid" {{ $case->city == 'Irbid' ? 'selected' : '' }}>Irbid</option>
                                                                <option value="Ajloun" {{ $case->city == 'Ajloun' ? 'selected' : '' }}>Ajloun</option>
                                                                <option value="Al-Salt" {{ $case->city == 'Al-Salt' ? 'selected' : '' }}>Al-Salt</option>
                                                                <option value="Madaba" {{ $case->city == 'Madaba' ? 'selected' : '' }}>Madaba</option>
                                                                <option value="Jerash" {{ $case->city == 'Jerash' ? 'selected' : '' }}>Jerash</option>
                                                                <option value="Karak" {{ $case->city == 'Karak' ? 'selected' : '' }}>Karak</option>
                                                                <option value="Tafilah" {{ $case->city == 'Tafilah' ? 'selected' : '' }}>Tafilah</option>
                                                                <option value="Ma'an" {{ $case->city == 'Ma\'an' ? 'selected' : '' }}>Ma'an</option>
                                                                <option value="Aqaba" {{ $case->city == 'Aqaba' ? 'selected' : '' }}>Aqaba</option>
                                                                <option value="Mafraq" {{ $case->city == 'Mafraq' ? 'selected' : '' }}>Mafraq</option>
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
                                                            <label>License Doc</label>
                                                            <input type="file" name="license_doc" class="form-control" value="{{ $case->license}}">
                                                        </div> --}}
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label>Description</label>
                                                            <textarea name="description" rows="5" cols="100" placeholder="Write the description" class="form-control">{{ $case->description }}</textarea>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Update</button>
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
