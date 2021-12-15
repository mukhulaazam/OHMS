@extends('back-end.layouts.master')

@section('content')
    <!-- Start -->
	@if(Auth::user()->user_type == '7X707')
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="stats-card-box">
                <div class="icon-box">
                    <i class='bx bx-bar-chart'></i>
                </div>
                <span class="sub-title">New Patient</span>
                <h3>5.45% <span class="badge"><i class='bx bx-up-arrow-alt'></i> 56.9%</span></h3>

                <div class="progress-list">
                    <div class="bar-inner">
                        <div class="bar progress-line" data-width="56.9"></div>
                    </div>

                    <p>Ratio website’s visitors</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stats-card-box">
                <div class="icon-box">
                    <i class='bx bx-bar-chart-square'></i>
                </div>
                <span class="sub-title">Total Patient</span>
                <h3>4.75% <span class="badge"><i class='bx bx-up-arrow-alt'></i> 32.1%</span></h3>

                <div class="progress-list">
                    <div class="bar-inner">
                        <div class="bar progress-line" data-width="32.1"></div>
                    </div>

                    <p>Ratio website’s visitors</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stats-card-box">
                <div class="icon-box">
                    <i class='bx bx-bar-chart-alt'></i>
                </div>
                <span class="sub-title">Conversion Order</span>
                <h3>6.47% <span class="badge badge-red"><i class='bx bx-down-arrow-alt'></i> 45.5%</span></h3>

                <div class="progress-list">
                    <div class="bar-inner">
                        <div class="bar progress-line" data-width="45.5"></div>
                    </div>

                    <p>Ratio website’s visitors</p>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="stats-card-box">
                <div class="icon-box">
                    <i class='bx bx-paper-plane'></i>
                </div>
                <span class="sub-title">Subscribers Gained</span>
                <h3>92.6% <span class="badge"><i class='bx bx-up-arrow-alt'></i> 26.0%</span></h3>

                <div class="progress-list">
                    <div class="bar-inner">
                        <div class="bar progress-line" data-width="26.0"></div>
                    </div>

                    <p>Subscribe in month</p>
                </div>
            </div>
        </div>
    </div>
	@endif
    <!-- End -->
@endsection
