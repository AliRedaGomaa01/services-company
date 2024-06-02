@extends('layouts.dashboard')

@section('description')
    <meta name="description" content="website services create page in the dashboard">
@endsection

@section('title', 'Service Create')

@section('content')
    <!-- Basic form layout section start -->
    <section id="basic-form-layouts">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form">Add New Service</h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-minus"></i></a></li>
                                <li><a data-action="reload"><i class="feather icon-rotate-cw"></i></a></li>
                                <li><a data-action="expand"><i class="feather icon-maximize"></i></a></li>
                                <li><a data-action="close"><i class="feather icon-x"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                          <div class="d-flex flex-row justify-content-center align-items-center my-3"
                              style="gap : 1rem">
                              <h5 class="text-center  bg-secondary rounded text-white m-0 "
                                  style="padding:1.5rem">
                                  Services Section In The Services Page </h5>
                              <a href="{{ route('services') }}" class="text-white" target="_blank">
                                  <button class="btn btn-primary">
                                      <i class="fa fa-eye"></i> Click Here To Preview In Website
                                  </button>
                              </a>
                          </div>
                            @include('components.dashboard.services.form' , [
                              'formUrl' => route('dashboard.services.store'),
                              'method' => 'POST',
                            ])

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic form layout section end -->
@endsection


