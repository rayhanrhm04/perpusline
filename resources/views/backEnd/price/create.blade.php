@extends('layouts.main')
@section('title', config('app.name'))
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Form Price List</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Create Price List</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Price List</h3>
                    </div>
                    <div class="card-body">
                        <div id="stepperForm" class="bs-stepper">
                            <div class="bs-stepper-header" role="tablist">
                              <!-- your steps here -->
                              <div class="step" data-target="#price-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="price-part" id="price-part-trigger">
                                  <span class="bs-stepper-circle">1</span>
                                  <span class="bs-stepper-label">PRICE</span>
                                </button>
                              </div>
                              <div class="line"></div>
                              <div class="step" data-target="#discount-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="discount-part" id="discount-part-trigger">
                                  <span class="bs-stepper-circle">2</span>
                                  <span class="bs-stepper-label">DIRECT DISCOUNT</span>
                                </button>
                              </div>
                              <div class="line"></div>
                              <div class="step" data-target="#campaign-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="campaign-part" id="campaign-part-trigger">
                                  <span class="bs-stepper-circle">3</span>
                                  <span class="bs-stepper-label">CAMPAIGN DISCOUNT / MOQ</span>
                                </button>
                              </div>
                              <div class="line"></div>
                              <div class="step" data-target="#finish-part">
                                <button type="button" class="step-trigger" role="tab" aria-controls="finish-part" id="finish-part-trigger">
                                  <span class="bs-stepper-circle">4</span>
                                  <span class="bs-stepper-label">FINISH</span>
                                </button>
                              </div>
                            </div>
                            <div class="bs-stepper-content">
                                <form class="needs-validation" onSubmit="return false" novalidate>
                                    <!-- your steps content here -->
                                    <div id="price-part" class="bs-stepper-pane fade" role="tabpanel" aria-labelledby="price-part-trigger">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Merek</label>
                                                    <select name="merek" id="merek" class="form-control is_select2">
                                                        <option value="">Pilih Merek</option>
                                                        <option value="">Sharp</option>
                                                    </select>
                                                    <div class="invalid-feedback">Merek Wajib diisi</div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Divisi</label>
                                                    <select name="divisi" id="divisi" class="form-control is_select2">
                                                        <option value="">Pilih divisi</option>
                                                        <option value="">Sharp</option>
                                                    </select>
                                                    <div class="invalid-feedback">Divisi Wajib diisi</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Kategori</label>
                                                    <select name="kategori" id="kategori" class="form-control is_select2">
                                                        <option value="">Pilih Kategori</option>
                                                        <option value="1">Kategori A</option>
                                                    </select>
                                                    <div class="invalid-feedback">Kategori Wajib diisi</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Sub Kategori</label>
                                                    <select name="subkategori" id="subkategori" class="form-control is_select2">
                                                        <option value="">Pilih Sub Kategori</option>
                                                        <option value="1">Sub Kategori A</option>
                                                    </select>
                                                    <div class="invalid-feedback">Sub Kategori Wajib diisi</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Ukuran</label>
                                                    <select name="ukuran" id="ukuran" class="form-control is_select2">
                                                        <option value="">Pilih Ukuran</option>
                                                        <option value="20">20px</option>
                                                    </select>
                                                    <div class="invalid-feedback">Ukuran Wajib diisi</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Warna</label>
                                                    <select name="warna" id="warna" class="form-control is_select2">
                                                        <option value="">Pilih Warna</option>
                                                        <option value="hitam">Hitam</option>
                                                    </select>
                                                    <div class="invalid-feedback">Warna Wajib diisi</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Item Number</label>
                                                    <select name="item_number" id="item_number" class="form-control is_select2">
                                                        <option value="">Pilih Item Number</option>
                                                        <option value="A0001">A0001</option>
                                                    </select>
                                                    <div class="invalid-feedback">Item Number Wajib diisi</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Item Description</label>
                                                    <select name="item_description" id="item_description" class="form-control is_select2">
                                                        <option value="">Pilih Item Description</option>
                                                        <option value="ARISTON-ELCTWHSAPP-AEE2422E">ARISTON-ELCTWHSAPP-AEE2422E</option>
                                                    </select>
                                                    <div class="invalid-feedback">Item Description Wajib diisi</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Class</label>
                                                    <select name="class" id="class" class="form-control is_select2">
                                                        <option value="">Pilih Class</option>
                                                        <option value="Home">Home</option>
                                                        <option value="AccHome">AccHome</option>
                                                    </select>
                                                    <div class="invalid-feedback">Class Wajib diisi</div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Item Type</label>
                                                    <select name="item_type" id="item_type" class="form-control is_select2">
                                                        <option value="">Pilih Item Type</option>
                                                        <option value="Home">Sales Inventory</option>
                                                    </select>
                                                    <div class="invalid-feedback">Item Type Wajib diisi</div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>Price</label>
                                                    <input type="text" class="form-control currency" id="price" name="price" placeholder="Masukan Price List" autocomplete="off">
                                                    <p id="include_ppn"></p>
                                                    <input type="hidden" id="calculate_price" name="calculate_price">
                                                    <div class="invalid-feedback">Price Wajib diisi</div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="">PPN</label>
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control number-only" value="111" name="ppn" id="ppn" data-ppn="disabled" readonly placeholder="PPN" autofocus autocomplete="off">
                                                        <div class="input-group-append">
                                                            <div class="input-group-text">
                                                                <span toggle="#password-field" class="ppn-lock" role="button">%</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="invalid-feedback">PPN Wajib diisi</div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-next-form" onclick="stepper.next()">Next</button>
                                    </div>
                                    <div id="discount-part" class="bs-stepper-pane fade" role="tabpanel" aria-labelledby="discount-part-trigger">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                    <label>DIRECT DISCOUNT</label>
                                                    <input type="text" class="form-control number-only" id="direct_discount" name="direct_discount[]" placeholder="Masukan Direct Discont" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control number-only" id="direct_discount" name="direct_discount[]" placeholder="Masukan Direct Discont" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control number-only" id="direct_discount" name="direct_discount[]" placeholder="Masukan Direct Discont" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group mt-2">
                                                    <label></label>
                                                    <select name="discount_type[]" id="discount_type" class="form-control">
                                                        <option value="">Pilih Type</option>
                                                        <option value="%">%</option>
                                                        <option value="amount">Amount</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="discount_type[]" id="discount_type" class="form-control">
                                                        <option value="">Pilih Type</option>
                                                        <option value="%">%</option>
                                                        <option value="amount">Amount</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="discount_type[]" id="discount_type" class="form-control">
                                                        <option value="">Pilih Type</option>
                                                        <option value="%">%</option>
                                                        <option value="amount">Amount</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="fom-group">
                                                    <textarea name="keterangan" id="keterangan" class="form-control" placeholder="Keterangan Direct Discount" cols="30" rows="10"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 table-responsive mt-3">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>TOTAL DIRECT DISCOUNT (DD)</th>
                                                            <th>PRICE LIST SETELAH DIRECT DISCOUNT</th>
                                                            <th>HARGA HPP</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <input type="hidden" name="total_dd" id="total_dd">
                                                            <input type="hidden" name="total_price_after_dd" id="total_price_after_dd">
                                                            <input type="hidden" name="price_hpp" id="price_hpp">
                                                            <td class="t_dd">0</td>
                                                            <td class="t_price_list">0</td>
                                                            <td class="t_hpp">0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-2" onclick="stepper.previous()">Previous</button>
                                        <button class="btn btn-primary mt-2" onclick="stepper.next()">Next</button>
                                    </div>
                                    <div id="campaign-part" class="bs-stepper-pane fade" role="tabpanel" aria-labelledby="campaign-part-trigger">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>CAMPAIGN DISCOUNT / MOQ</label>
                                                    <input type="text" class="form-control campaign-input number-only" id="campaign" name="campaign[]" placeholder="Masukan Campaign Disc 1" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control campaign-input number-only" id="campaign" name="campaign[]" placeholder="Masukan Campaign Disc 2" autocomplete="off">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control campaign-input number-only" id="campaign" name="campaign[]" placeholder="Masukan Campaign Disc 3" autocomplete="off">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mt-2">
                                                    <label></label>
                                                    <select name="campaign_type[]" id="campaign_type" class="form-control">
                                                        <option value="">Pilih Type</option>
                                                        <option value="%">%</option>
                                                        <option value="amount">Amount</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="campaign_type[]" id="campaign_type" class="form-control">
                                                        <option value="">Pilih Type</option>
                                                        <option value="%">%</option>
                                                        <option value="amount">Amount</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="campaign_type[]" id="campaign_type" class="form-control">
                                                        <option value="">Pilih Type</option>
                                                        <option value="%">%</option>
                                                        <option value="amount">Amount</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group mt-2">
                                                    <label></label>
                                                    <textarea name="note[]" class="form-control note" placeholder="Keterangan Campaign Disc 1"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="note[]" class="form-control note" placeholder="Keterangan Campaign Disc 2"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="note[]" class="form-control note" placeholder="Keterangan Campaign Disc 3"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 table-responsive mt-3">
                                                <table class="table table-bordered text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>TOTAL POTONGAN TRADING TERM DISCOUNT</th>
                                                            <th>NET PRICE</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <input type="hidden" name="total_term_discount" id="total_term_discount">
                                                            <input type="hidden" name="net_price" id="net_price">
                                                            <td class="t_term_discount">0</td>
                                                            <td class="t_net_price">0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary mt-2" onclick="stepper.previous()">Previous</button>
                                        <button class="btn btn-primary mt-2" onclick="stepper.next()">Next</button>
                                    </div>
                                    <div id="finish-part" class="bs-stepper-pane fade" role="tabpanel" aria-labelledby="finish-part-trigger">
                                        <!-- Row start -->
                                        <div class="row m-b-30">
                                            <div class="col-lg-12 col-xl-612">
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs md-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#finish-price" role="tab">PRICE</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#finish-direct-discount" role="tab">DIRECT DISCOUNT</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#finish-campaign" role="tab">CAMPAIGN DISCOUNT / MOQ</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content card-block">
                                                    <div class="tab-pane active" id="finish-price" role="tabpanel">
                                                        <div class="table-responsive">
                                                            <table class="table table-borderless">
                                                                <tr>
                                                                    <td class="bold" style="width: 250px;">Merek</td>
                                                                    <td>-</td>
                                                                </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Divisi</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Kategori</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Sub Kategori</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Ukuran</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">warna</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Item Number</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Item Deskripsi</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Price List</td>
                                                                <td id="t-finish-price">-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">PPN</td>
                                                                <td id="t-finish-ppn">-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Price Include PPN</td>
                                                                <td id="t-finish-include-ppn">-</td>
                                                            </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="finish-direct-discount" role="tabpanel">
                                                        <table class="table table-borderless">
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Direct Discount</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Direct Discount</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Direct Discount</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Keterangan</td>
                                                                <td>-</td>
                                                            </tr>
                                                        </table>
                                                        <table class="table table-bordered text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th>TOTAL DIRECT DISCOUNT (DD)</th>
                                                                    <th>PRICE LIST SETELAH DIRECT DISCOUNT</th>
                                                                    <th>HARGA HPP</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="t_dd">0</td>
                                                                    <td class="t_price_list">0</td>
                                                                    <td class="t_hpp">0</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div class="tab-pane" id="finish-campaign" role="tabpanel">
                                                        <table class="table table-borderless">
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Campaign 1</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Campaign 2</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Campaign 3</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Keterangan 1</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Keterangan 2</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="bold" style="width: 250px;">Keterangan 3</td>
                                                                <td>-</td>
                                                            </tr>
                                                        </table>
                                                        <table class="table table-bordered text-center">
                                                            <thead>
                                                                <tr>
                                                                    <th>TOTAL POTONGAN TRADING TERM DISCOUNT</th>
                                                                    <th>NET PRICE</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td class="t_term_discount">0</td>
                                                                    <td class="t_net_price">0</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Row end -->
                                        <button type="submit" class="btn btn-success float-right ml-3">Submit</button>
                                        <button class="btn btn-warning float-right" onclick="stepper.previous()">Previous</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@push('styles')
  <link rel="stylesheet" href="{{asset('assets/plugins/bs-stepper/css/bs-stepper.min.css') }}">
@endpush
@push('scripts')
    <script src="{{asset('assets/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            if ($("#form").length > 0) {
                $("#form").validate({
                    ignore: 'input[type=search], .tag-input, .fom-removed',
                    rules: {
                        merek: {
                            required: true,
                        },
                        kategori: {
                            required: true,
                        },
                        subkategori: {
                            required: true,
                        },
                        ukuran: {
                            required: true,
                        },
                        warna: {
                            required: true,
                        },
                        class: {
                            required: true,
                        },
                        item_type: {
                            required: true,
                        },
                        price: {
                            required: true,
                        },
                        'direct_discount[]':{
                            required: true,
                        },
                        'discount_type[]':{
                            required: true,
                        },
                        keterangan:{
                            required: true,
                        },
                        'campaign[]':{
                            required:true
                        },
                        'note[]':{
                            required:true
                        }
                    },
                    messages: {
                        merek: {
                            required: "Merek wajib diisi",
                        },
                        kategori: {
                            required: "Kategori wajib diisi",
                        },
                        subkategori: {
                            required: "Sub Kategori wajib diisi",
                        },
                        ukuran: {
                            required: "Ukuran Wajib diisi",
                        },
                        warna: {
                            required: "Warna wajib diisi",
                        },
                        class: {
                            required: "Class wajib diisi",
                        },
                        item_type: {
                            required: "item_type wajib di",
                        },
                        price: {
                            required: "Harga wajib diisi",
                        },
                        'direct_discount[]':{
                            required: "Direct Discount wajib diisi",
                        },
                        'discount_type[]':{
                            required: "Discount Type wajib diisi",
                        },
                        keterangan:{
                            required: "Keterangan wajib diisi",
                        },
                        'campaign[]':{
                            required:"Campaign Wajib diisi"
                        },
                        'note[]':{
                            required:"Keterangan Campaign Wajib diisi"
                        }

                    },
                    debug: true,
                    errorPlacement: function(error, element) {
                        var name = element.attr('name');
                        var errorSelector = '.form-control-feedback[for="' + name + '"]';
                        var $element = $(errorSelector);
                        if ($element.length) {
                            $(errorSelector).html(error.html());
                        } else {
                            error.insertAfter(element);
                        }
                    },
                    submitHandler : function(form) {
                        form.submit();
                    }


                })
            }
            $("body").on('click', '.ppn-lock', function() {
                // $(this).toggleClass("fa-eye-slash fa-eye");
                var ppnInput=$("#ppn");
                if(ppnInput.attr('data-ppn') == 'disabled')
                {
                    ppnInput.attr('data-ppn','enabled');
                    ppnInput.attr("readonly", false);
                }else{
                    ppnInput.attr('data-ppn','disabled');
                    ppnInput.attr("readonly", true);

                }
            })
            $("#price").on("change", function(){
                let ppn = $("#ppn").val();
                if($(this).val() != "" && ppn != ""){
                    let price = $(this).val().split(",").join("");
                    let calculate_price =  (parseFloat(price)/ppn)*100;
                    let result = formatRupiah(calculate_price);
                    $("#calculate_price").val(result);
                    let html = 'Include With PPN : ';
                    html    += `<strong>${result}</strong>`;
                    $("#include_ppn").html(html);
                    $("#t-finish-price").text($(this).val());
                    $("#t-finish-ppn").text(ppn+"%");
                    $("#t-finish-include-ppn").text(result);
                }
            });

            $('input[name="direct_discount[]"], select[name="discount_type[]"]').change(function(event) {

                let objPercent = {};
                let arrDiscountPercent = [];
                let arrCalculatePercent = [];
                let discountAmount = 0;
                let total_direct_discount = 0;

                $('select[name="discount_type[]"]').each(function(key, element) {
                    let typeVal = $(element).val();
                    if(typeVal == '%'){
                        objPercent[key] = typeVal;
                    }
                });

                $('input[name="direct_discount[]"]').each(function(key, element) {
                    let discountVal = $(element).val();
                    if(objPercent[key] == '%'){
                        arrDiscountPercent.push(discountVal);
                    }else{
                        discountAmount += parseInt(discountVal);
                    }
                });

                if(arrDiscountPercent.length > 0){
                    let calculate_price = $("#calculate_price").val();
                    for (let i = 0; i < arrDiscountPercent.length; i++) {
                        if(calculate_price != '' && arrDiscountPercent[i] != ''){
                            let calculate_percent = (parseFloat(calculate_price) * arrDiscountPercent[i]) / 100;
                            let formatRupiah = Number(calculate_percent).toLocaleString('en');
                            let removeDot = formatRupiah.toString().split('.').join("");
                            total_direct_discount += parseFloat(discountAmount) +parseFloat(removeDot);
                        }
                    }
                }else{
                    total_direct_discount += discountAmount;
                }

                if(total_direct_discount > 0){
                    let price = $("#price").val().split(",").join("");
                    let price_after_dd = parseFloat(price) - parseFloat(total_direct_discount);
                    let ppn = $("#ppn").val();
                    let total_hpp = (parseFloat(price_after_dd)/ppn)*100;
                    let result_hpp = formatRupiah(total_hpp)
                    $("#total_dd").val(total_direct_discount);
                    $("#total_price_after_dd").val(price_after_dd);
                    $("#price_hpp").val(result_hpp);
                    $(".t_dd").text(total_direct_discount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                    $(".t_price_list").text(price_after_dd.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                    $(".t_hpp").text(result_hpp);
                }

            });
            $('input[name="campaign[]"], select[name="campaign_type[]"]').change(function(event) {

                let objPercent = {};
                let arrCampaignPercent = [];
                let arrCalculatePercent = [];
                let campaignAmount = 0;
                let total_direct_campaign = 0;

                $('select[name="campaign_type[]"]').each(function(key, element) {
                    let typeVal = $(element).val();
                    if(typeVal == '%'){
                        objPercent[key] = typeVal;
                    }
                });
                $('input[name="campaign[]"]').each(function(key, element) {
                    let campaignVal = $(element).val();
                    if(objPercent[key] == '%'){
                        arrCampaignPercent.push(campaignVal);
                    }else{
                        campaignAmount += parseInt(campaignVal);
                    }
                });


                if(arrCampaignPercent.length > 0){
                    let price_hpp = $("#price_hpp").val();
                    for (let i = 0; i < arrCampaignPercent.length; i++) {
                        if(price_hpp != '' && arrCampaignPercent[i] != ''){
                            let calculate_percent = (parseFloat(price_hpp) * arrCampaignPercent[i]) / 100;
                            let formatRupiah = Number(calculate_percent).toLocaleString('en');
                            let removeDot = formatRupiah.toString().split('.').join("");
                            total_direct_campaign += parseFloat(campaignAmount) +parseFloat(removeDot);
                        }
                    }
                }else{
                    total_direct_campaign += campaignAmount;
                }
                if(total_direct_campaign > 0){
                    let total_price_after_dd = $("#total_price_after_dd").val();

                    let net_price = parseFloat(total_price_after_dd) - parseFloat(total_direct_campaign);
                    $("#total_term_discount").val(total_direct_campaign);
                    $("#net_price").val(net_price);
                    $(".t_term_discount").text(total_direct_campaign.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                    $(".t_net_price").text(net_price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ","));
                }

            });
            function formatRupiah(value) {
                let formatRupiah =  value.toLocaleString('id-ID', {
                    style: 'currency',
                    currency: 'IDR'
                });

                let resultFormatRupiah = formatRupiah.replace("Rp", "");

                return resultFormatRupiah;
            }
            var merek = $("#merek").val();

        });
        document.addEventListener('DOMContentLoaded', function () {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        });
        var stepperFormEl = document.querySelector('#stepperForm')
            stepperForm = new Stepper(stepperFormEl, {
                animation: true
        })
        var stepperPanList = [].slice.call(stepperFormEl.querySelectorAll('.bs-stepper-pane'));
        var form = stepperFormEl.querySelector('.bs-stepper-content form');
        stepperFormEl.addEventListener('show.bs-stepper', function (event) {
            form.classList.remove('was-validated')
            var nextStep = event.detail.indexStep
            var currentStep = nextStep

            if (currentStep > 0) {
            currentStep--
            }

            var stepperPan = stepperPanList[currentStep]
            console.log(merek.value)
            if (stepperPan.getAttribute('id') === 'price-part' && !merek.value.length) {
                event.preventDefault();
                $(".invalid-feedback").show()
            }
        })

    </script>
@endpush
