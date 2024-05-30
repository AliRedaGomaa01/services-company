@extends('layouts.dashboard')

@section('description')
    <meta name="description" content="website settings page in the dashboard">
@endsection

@section('title', 'Settings')

@section('content')
    <!-- Basic form layout section start -->
    <section id="basic-form-layouts">
        <div class="row match-height">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title" id="basic-layout-form">Website Settings</h4>
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
                            <div class="card-text">
                                <p></p>
                            </div>
                            <form class="form" action="{{ route('dashboard.settings.update') }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <div class="form-body">
                                    <h4 class="form-section"><i class="feather icon-user"></i> Contact & Social Media </h4>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput3">E-mail</label>
                                                <input type="text" class="form-control" required
                                                    placeholder="examlpe@example.com" name="email"
                                                    value="{{ $settings['email']['value'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Contact Number</label>
                                                <input type="text" class="form-control" required
                                                    placeholder="+0123456789" name="phone"
                                                    value="{{ $settings['phone']['value'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Location URL</label>
                                                <input type="text" class="form-control" required
                                                    placeholder="Location URL" name="location url"
                                                    value="{{ $settings['location url']['value'] ?? '#' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Facebook URL</label>
                                                <input type="text" class="form-control" required placeholder="#"
                                                    name="facebook" value="{{ $settings['facebook']['value'] ?? '#' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Twitter URL</label>
                                                <input type="text" class="form-control" required placeholder="#"
                                                    name="twitter" value="{{ $settings['twitter']['value'] ?? '#' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Instagram URL</label>
                                                <input type="text" class="form-control" required placeholder="#"
                                                    name="instagram" value="{{ $settings['instagram']['value'] ?? '#' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Linkedin URL</label>
                                                <input type="text" class="form-control" required placeholder="Linkedin"
                                                    name="linkedin" value="{{ $settings['linkedin']['value'] ?? '#' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Whatsapp URL</label>
                                                <input type="text" class="form-control" required
                                                    placeholder="wa.me/+123456789" name="whatsapp"
                                                    value="{{ $settings['whatsapp']['value'] ?? '#' }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Work Days English</label>
                                                <input type="text" class="form-control" required
                                                    placeholder="Sun - Thur: 9am - 5pm" name="work days english"
                                                    value="{{ $settings['work_days_english']['value'] }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Work Days Arabic</label>
                                                <input type="text" class="form-control" required
                                                    placeholder="أحد - خميس : 9 ص - 5 م " name="work days arabic"
                                                    value="{{ $settings['work_days_arabic']['value'] }}">
                                            </div>
                                        </div>
                                    </div>

                                    <h4 class="form-section"><i class="fa fa-code"></i> Content Of Pages </h4>

                                    <div class="d-flex flex-row justify-content-center align-items-center my-3"
                                        style="gap : 1rem">
                                        <h5 class="text-center  bg-secondary rounded text-white m-0 "
                                            style="padding:1.5rem">
                                            About Our Company Section </h5>
                                        <a href="{{ route('about-us') }}" class="text-white" target="_blank">
                                            <button class="btn btn-primary">
                                                <i class="fa fa-eye"></i> Click Here To Preview In Website
                                            </button>
                                        </a>
                                    </div>

                                    @include('components.dashboard.text-editor', [
                                        'label' => 'header arabic',
                                        'id' => 'editor1',
                                        'textareaName' => 'about_us_header_arabic',
                                        'value' => $settings['about_us_header_arabic']['value'] ?? '',
                                    ])

                                    @include('components.dashboard.text-editor', [
                                        'label' => 'header english',
                                        'id' => 'editor2',
                                        'textareaName' => 'about_us_header_english',
                                        'value' => $settings['about_us_header_english']['value'],
                                    ])

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput3">details arabic</label>
                                                <textarea name="about_us_details_arabic" class="form-control" rows='10' required> {{ $settings['about_us_details_arabic']['value'] }} </textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput3">details english</label>
                                                <textarea name="about_us_details_english" class="form-control" rows='10' required> {{ $settings['about_us_details_english']['value'] }} </textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row justify-content-center align-items-center my-3"
                                        style="gap : 1rem">
                                        <h5 class="text-center  bg-secondary rounded text-white m-0 "
                                            style="padding:1.5rem">
                                            Why Choose Us Section </h5>
                                        <a href="{{ route('about-us') }}" class="text-white" target="_blank">
                                            <button class="btn btn-primary">
                                                <i class="fa fa-eye"></i> Click Here To Preview In Website
                                            </button>
                                        </a>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Header English</label>

                                                <input type="text" class="form-control" required
                                                    name="why_choose_us_title_english"
                                                    value="{{ $settings['why_choose_us_title_english']['value'] }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Header Arabic</label>
                                                <input type="text" class="form-control" required
                                                    name="why_choose_us_title_arabic"
                                                    value="{{ $settings['why_choose_us_title_arabic']['value'] }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput3">Details Arabic</label>
                                                <textarea name="why_choose_us_details_arabic" rows="10" class="form-control" required> {{ $settings['why_choose_us_details_arabic']['value'] }} </textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput3">Details English</label>
                                                <textarea name="why_choose_us_details_english" rows="10" class="form-control" required> {{ $settings['why_choose_us_details_english']['value'] }} </textarea>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Features English <span
                                                        class="bg-danger text-white " style="padding:0.2rem"> split them
                                                        with '+' </span></label>
                                                <input type="text" class="form-control" required
                                                    name="why_choose_us_features_english"
                                                    value="{{ $settings['why_choose_us_features_english']['value'] }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="projectinput4">Features Arabic <span
                                                        class="bg-danger text-white  " style="padding:0.2rem"> split them
                                                        with '+' </span></label>
                                                <input type="text" class="form-control" required
                                                    name="why_choose_us_features_arabic"
                                                    value="{{ $settings['why_choose_us_features_arabic']['value'] }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-actions d-flex flex-row flex-wrap justify-content-start"
                                        style="gap:1em">
                                        <button type="reset" class="btn btn-warning">
                                            <i class="feather icon-x"></i> Cancel
                                        </button>

                                        <button type="submit" class="btn btn-primary">
                                            <i class="fa fa-check-square-o"></i> Save
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // Basic form layout section end -->
@endsection

@push('scripts')
    @include('components.dashboard.text-editor-script', [
        'id' => 'editor1',
        'value' => $settings['about_us_header_arabic']['value'],
        ])
    @include('components.dashboard.text-editor-script', [
        'id' => 'editor2',
        'value' => $settings['about_us_header_english']['value'],
        ])
@endpush
