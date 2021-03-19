@extends('layouts.guest')
@section('title', 'cgpa calculator for lecturer and student')
@section('content1')
    {{-- instructions --}}
    <div class="container my-5">
        <div class="row justify-content-center">
            {{-- image header --}}
            <div class="col-11">
                <!-- ====headers=== -->
                <div class="d-flex row mx-auto p-1 justify-content-center">
                    <div class="col-sm-3 col-lg-2">
                        <img src="/image/Bitmap.png" alt="uniabuja-logo" class="img-fluid">
                    </div>
                    <div class="col-8 my-auto">
                        <h1 class="text-center unifont text-uppercase">University of Abuja <br><span>faculty of
                                science</span></h1>
                    </div>
                </div>
            </div>
            <!-- headers end here -->

            {{-- school image and instructions --}}
            <div class="col-md-6 col-lg-5 d-md-block school-image"
                style="background-image: url('image/uabuja-square.jpg'); background-size: cover;">
                <!-- <img src="image/uabuja-square.jpg" class="img-fluid m-auto rounded" alt="UniAbuja"> -->
            </div>
            <div class="col-sm-6 col-lg-7" style="background-color: rgba(0, 0, 0, .2)">
                <div class="instructions mx-auto w-100 rounded my-2 my-lg-4">
                    <h2 class="w-100 text-center head">INSTRUCTI0NS</h2>
                    <ol>
                        <li>This Web App is develop by Bowofade for Calculation of <span>G.P.A</span> &
                            <span>C.G.P.A</span>
                        </li>
                        <li>The Calculation is based on per semester. To calculate, click on respective number of
                            semester</li>
                        <li>For a single semester, Input the total number of courses. If more than one semester input
                            the total number of courses offer for each semester</li>
                        <li>Kindly input all the course name follow by allocated unit and grade(A, B, C, D and F) in
                            uppercase</li>
                        <li>Cross-check for any error. Click on Calculate button to caclculate</li>
                        <li>Once clicked, it loaded the statement of result </li>
                        <li>To Download the result, click the download button to print in pdf</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    {{-- calculation button --}}
    <div class="mx-auto d-block text-center mb-n3">
        <a href="{{route('calculate')}}" class="btn btn-primary">Calculate</a>
    </div>
    <div class="container-fluid p-5" style="background-color: rgba(255, 255, 255, .5)"></div>
@endsection
