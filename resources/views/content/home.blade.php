@extends('layouts/master')

@section('title', 'Home')

@section('content')

<!-- Invoice table -->
<div class="col-xl-12">
    <div class="faq-header d-flex flex-column justify-content-center align-items-center rounded">
        <h3 class="text-center ms-5 me-5">Hello {{ Auth::user()->name }}, how can we help?</h3>
    </div>

    <div class="row mt-4">
        <!-- Navigation -->
        <div class="col-lg-3 col-md-4 col-12 mb-md-0 mb-3">
            <div class="d-flex justify-content-between flex-column mb-2 mb-md-0">
                <ul class="nav nav-align-left nav-pills flex-column">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#payment">
                            <i class="ti ti-credit-card me-1 ti-sm"></i>
                            <span class="align-middle fw-semibold">Pengajuan</span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#delivery">
                            <i class="ti ti-briefcase me-1 ti-sm"></i>
                            <span class="align-middle fw-semibold">Peninjauan Permintaan</span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#cancellation">
                            <i class="ti ti-rotate-clockwise-2 me-1 ti-sm"></i>
                            <span class="align-middle fw-semibold">Persetujuan</span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#orders">
                            <i class="ti ti-box me-1 ti-sm"></i>
                            <span class="align-middle fw-semibold">Penggunaan Dana</span>
                        </button>
                    </li>
                </ul>
                <div class="d-none d-md-block">
                    <div class="mt-4">
                        <img src="{{ asset('assets/img/illustrations/page-misc-under-maintenance.png') }}"
                            class="img-fluid" width="270" alt="FAQ Image" />
                    </div>
                </div>
            </div>
        </div>
        <!-- /Navigation -->

        <!-- FAQ's -->
        <div class="col-lg-9 col-md-8 col-12">
            <div class="tab-content py-0">
                <div class="tab-pane fade show active" id="payment" role="tabpanel">
                    <div class="d-flex mb-3 gap-3">
                        <div>
                            <span class="badge bg-label-primary rounded-2 p-2">
                                <i class="ti ti-credit-card ti-lg"></i>
                            </span>
                        </div>
                        <div>
                            <h4 class="mb-0">
                                <span class="align-middle">Pengajuan</span>
                            </h4>
                        </div>
                    </div>
                    <div id="accordionPayment" class="accordion">
                        <div class="card accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    aria-expanded="true" data-bs-target="#accordionPayment-1"
                                    aria-controls="accordionPayment-1">
                                    Pengajuan Permintaan Dana
                                </button>
                            </h2>

                            <div id="accordionPayment-1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Karyawan yang membutuhkan dana harus mengajukan permintaan dana
                                    melalui formulir pengajuan dana yang
                                    telah disiapkan oleh departemen keuangan atau manajemen. Formulir tersebut harus
                                    mencakup informasi berikut:
                                    Nama lengkap pengaju dana.
                                    Tujuan penggunaan dana (deskripsi singkat kebutuhan dan alasan).
                                    Jumlah dana yang diminta.
                                    Tanggal perkiraan penggunaan dana.
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionPayment-2" aria-controls="accordionPayment-2">
                                    Bagiamana cara membuat form pengajuan?
                                </button>
                            </h2>
                            <div id="accordionPayment-2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Klik Create kemudian Isi Lengkap Nama pengajuan dana. Tujuan penggunaan dana
                                    (deskripsi singkat kebutuhan dan alasan). Jumlah dana yang diminta.
                                    Tanggal perkiraan penggunaan dana.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="delivery" role="tabpanel">
                    <div class="d-flex mb-3 gap-3">
                        <div>
                            <span class="badge bg-label-primary rounded-2 p-2">
                                <i class="ti ti-briefcase ti-lg"></i>
                            </span>
                        </div>
                        <div>
                            <h4 class="mb-0">
                                <span class="align-middle">Peninjauan Permintaan</span>
                            </h4>
                        </div>
                    </div>
                    <div id="accordionDelivery" class="accordion">
                        <div class="card accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    aria-expanded="true" data-bs-target="#accordionDelivery-1"
                                    aria-controls="accordionDelivery-1">
                                    Apa Harus saya lakukan?
                                </button>
                            </h2>

                            <div id="accordionDelivery-1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    Pengajuan anda akan ditinjau <br>
                                    anda cukup menugggu <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cancellation" role="tabpanel">
                    <div class="d-flex mb-3 gap-3">
                        <div>
                            <span class="badge bg-label-primary rounded-2 p-2">
                                <i class="ti ti-rotate-clockwise-2 ti-lg"></i>
                            </span>
                        </div>
                        <div>
                            <h4 class="mb-0"><span class="align-middle">
                                    Persetujuan</span></h4>
                        </div>
                    </div>
                    <div id="accordionCancellation" class="accordion">
                        <div class="card accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    aria-expanded="true" data-bs-target="#accordionCancellation-1"
                                    aria-controls="accordionCancellation-1">
                                    Jika pengajuan di reject?
                                </button>
                            </h2>

                            <div id="accordionCancellation-1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p>
                                        Pengajuan anda telah di cancel <br>
                                        dan tidak bisa melanjutkanya ke tahap berikutnya
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionCancellation-2" aria-controls="accordionCancellation-2">
                                    Jika Pengajuan di Approve?
                                </button>
                            </h2>
                            <div id="accordionCancellation-2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Pengajuan anda telah berhasil ditinjau <br>
                                    dan dalam process
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="tab-pane fade" id="orders" role="tabpanel">
                    <div class="d-flex mb-3 gap-3">
                        <div>
                            <span class="badge bg-label-primary rounded-2 p-2">
                                <i class="ti ti-box ti-lg"></i>
                            </span>
                        </div>
                        <div>
                            <h4 class="mb-0">
                                <span class="align-middle">Penggunaan Dana</span>
                            </h4>
                        </div>
                    </div>
                    <div id="accordionOrders" class="accordion">
                        <div class="card accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    aria-expanded="true" data-bs-target="#accordionOrders-1"
                                    aria-controls="accordionOrders-1">
                                    Jika berhasil?
                                </button>
                            </h2>

                            <div id="accordionOrders-1" class="accordion-collapse collapse show">
                                <div class="accordion-body">
                                    <p>
                                        Approval Akan menindaklanjuti pengajuan anda
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionOrders-2" aria-controls="accordionOrders-2">
                                    Dana Pengajuan masuk?
                                </button>
                            </h2>
                            <div id="accordionOrders-2" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    Anda perlu meng-klik Konfirmasi jika sudah menerima dana pengajuan
                                </div>
                            </div>
                        </div>

                        <div class="card accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#accordionOrders-3" aria-controls="accordionOrders-3">
                                    Apa langkah selanjutnya?
                                </button>
                            </h2>
                            <div id="accordionOrders-3" class="accordion-collapse collapse">
                                <div class="accordion-body">
                                    <p>
                                        Anda perlu meng-konfimasi pembayaran dan konfimasi pengembalian
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /FAQ's -->
    </div>

</div>
<!-- /Invoice table -->

<!-- Content wrapper -->
<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">

</div>
<!-- / Content -->

<div class="content-backdrop fade"></div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>
<!-- Content wrapper -->
@endsection
