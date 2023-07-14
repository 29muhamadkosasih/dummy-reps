@extends('layout.app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-12 mb-4">
            <small class="text-light fw-semibold mt-2">Basic</small>
            <div class="bs-stepper wizard-modern wizard-modern-example mt-2">
                <div class="bs-stepper-header">
                    <div class="step" data-target="#account-details-modern">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle">1</span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Account Details</span>
                                <span class="bs-stepper-subtitle">Setup Account Details</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#personal-info-modern">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle">2</span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Personal Info</span>
                                <span class="bs-stepper-subtitle">Add personal info</span>
                            </span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="ti ti-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#social-links-modern">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-circle">3</span>
                            <span class="bs-stepper-label">
                                <span class="bs-stepper-title">Social Links</span>
                                <span class="bs-stepper-subtitle">Add social links</span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <form onSubmit="return false">
                        <!-- Account Details -->
                        <div id="account-details-modern" class="content">
                            <div class="content-header mb-3">
                                <h6 class="mb-0">Account Details</h6>
                                <small>Enter Your Account Details.</small>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="username-modern">Username</label>
                                    <input type="text" id="username-modern" class="form-control"
                                        placeholder="johndoe" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="email-modern">Email</label>
                                    <input type="email" id="email-modern" class="form-control"
                                        placeholder="john.doe@email.com" aria-label="john.doe" />
                                </div>
                                <div class="col-sm-6 form-password-toggle">
                                    <label class="form-label" for="password-modern">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password-modern" class="form-control"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="password2-modern" />
                                        <span class="input-group-text cursor-pointer" id="password2-modern"><i
                                                class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                                <div class="col-sm-6 form-password-toggle">
                                    <label class="form-label" for="confirm-password-modern">Confirm Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="confirm-password-modern" class="form-control"
                                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                            aria-describedby="confirm-password-modern2" />
                                        <span class="input-group-text cursor-pointer" id="confirm-password-modern2"><i
                                                class="ti ti-eye-off"></i></span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev" disabled>
                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Personal Info -->
                        <div id="personal-info-modern" class="content">
                            <div class="content-header mb-3">
                                <h6 class="mb-0">Personal Info</h6>
                                <small>Enter Your Personal Info.</small>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="first-name-modern">First Name</label>
                                    <input type="text" id="first-name-modern" class="form-control" placeholder="John" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="last-name-modern">Last Name</label>
                                    <input type="text" id="last-name-modern" class="form-control" placeholder="Doe" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="country-modern">Country</label>
                                    <select class="select2" id="country-modern">
                                        <option label=" "></option>
                                        <option>UK</option>
                                        <option>USA</option>
                                        <option>Spain</option>
                                        <option>France</option>
                                        <option>Italy</option>
                                        <option>Australia</option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="language-modern">Language</label>
                                    <select class="selectpicker w-auto" id="language-modern"
                                        data-style="btn-transparent" data-icon-base="ti"
                                        data-tick-icon="ti-check text-white" multiple>
                                        <option>English</option>
                                        <option>French</option>
                                        <option>Spanish</option>
                                    </select>
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev">
                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-primary btn-next">
                                        <span class="align-middle d-sm-inline-block d-none me-sm-1">Next</span>
                                        <i class="ti ti-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Social Links -->
                        <div id="social-links-modern" class="content">
                            <div class="content-header mb-3">
                                <h6 class="mb-0">Social Links</h6>
                                <small>Enter Your Social Links.</small>
                            </div>
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <label class="form-label" for="twitter-modern">Twitter</label>
                                    <input type="text" id="twitter-modern" class="form-control"
                                        placeholder="https://twitter.com/abc" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="facebook-modern">Facebook</label>
                                    <input type="text" id="facebook-modern" class="form-control"
                                        placeholder="https://facebook.com/abc" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="google-modern">Google+</label>
                                    <input type="text" id="google-modern" class="form-control"
                                        placeholder="https://plus.google.com/abc" />
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label" for="linkedin-modern">LinkedIn</label>
                                    <input type="text" id="linkedin-modern" class="form-control"
                                        placeholder="https://linkedin.com/abc" />
                                </div>
                                <div class="col-12 d-flex justify-content-between">
                                    <button class="btn btn-label-secondary btn-prev">
                                        <i class="ti ti-arrow-left me-sm-1 me-0"></i>
                                        <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                    </button>
                                    <button class="btn btn-success btn-submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
