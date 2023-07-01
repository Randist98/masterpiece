@extends('adminDashboard.Layout.master')

@section('content')


     {{-- Content body start
        ***********************************--> --}}
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->

                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title" style="font-size: 20px">Cases Table</h4>
                               <a href="{{route('casesTable.create')}}"> <button class="my-button" >Add</button></a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle table-responsive-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col">Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">beneficiary</th>
                                                <th scope="col">NoBeneficiary</th>
                                                <th scope="col">image</th>
                                                <th scope="col">Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cases as $case )

                                            <tr>
                                                <td>{{$case->name}}</td>
                                                <td>
                                                    {{$case->description}}
                                                </td>
                                                <td> {{$case->address}}</td>
                                                <td>
                                                    {{$case->beneficiary}}
                                                </td>
                                                <td>
                                                    {{$case->NoBeneficiary}}
                                                </td>

                                                <td style="width: 100px" >
                                                    @if($case->image)
                                                    <img  src="{{ asset('assest/images/'. $case->image) }}" alt="Office Image" class="img-thumbnail" style="width: 100px;">
                                                    @else
                                                    <i class="fa fa-picture-o fa-5x" aria-hidden="true"></i>
                                                    @endif
                                                </td>
                                                {{-- <td>
                                                    {{$case->city}}
                                                </td> --}}
                                                <td style="width: 130px">

                                                    <form method="POST" action="{{ route('casesTable.destroy', $case->id) }}" accept-charset="UTF-8" style="display:inline">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button style="background-color: white; color: red; border: none; width: 40px; height:40px;" type="submit" class="btn btn-danger btn-lg" title="Delete Profile" onclick="return confirm(&quot;Confirm delete?&quot;)">
                                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                                        </button>
                                                    </form>

                                                    <a href="{{ route('casesTable.edit', $case->id) }}" title="Edit Office">
                                                       <button style="background-color: white; color: blue; border: none; width: 40px; height:40px;" class="btn btn-primary btn-lg"> <i class="fas fa-edit" style="color: blue"></i></button>
                                                    </a>
                                                </td>



                                            </tr>
                                            <tr>

                                            @endforeach
                                        </tbody>
                                    </table>
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
