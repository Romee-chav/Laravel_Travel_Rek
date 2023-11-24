@extends('layouts.app')
@section('title', 'Travel Rek - Dubai')
@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dubai</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- Horizontal Form -->
                            <form>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Guest Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="agency_name" class="form-control" style="margin: 5px">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Mobile No.</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="mobile_no" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Check In</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" id="formFile" style="margin: 5px">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Check Out</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" id="formFile" style="margin: 5px">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Rooms</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="country" id="inputCountry"
                                            aria-label="Default select example" required="">
                                            <option>Choose an option</option>
                                            <option>Room 0</option>
                                            <option>Room 1</option>
                                            {{-- @foreach ($countries as $country) --}}
                                                {{-- <option value="{{ $country->id }}">{{ $country->name }}</option> --}}
                                            {{-- @endforeach --}}
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputTime" class="col-sm-2 col-form-label">Adults</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputTime" class="col-sm-2 col-form-label">Child</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                            </form><!-- End Horizontal Form -->
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <!-- Multi Columns Form -->
                            <h5 class="card-title">Tours & Transfers</h5>
                            <!-- Advanced Form Elements -->
                            <form>
                                <fieldset class="row mb-3">
                                    {{-- <legend class="col-form-label col-sm-2 pt-0">Radios</legend> --}}
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios1" value="option1">
                                            <label class="form-check-label" for="gridRadios1">
                                                SEAT IN COACH -
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gridRadios"
                                                id="gridRadios2" value="option2">
                                            <label class="form-check-label" for="gridRadios2">
                                                PRIVATE -
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-body">
                                <div class="invoice_Id pull-right mt-3">
                                    <h5>Apr:20-25 / Dubai-1N / 2 Adults / 0 Child / 1</h5><br>
                                    <h5 id="invoice_id" value="200423-509" style="margin-left: 150px">Room</h5>
                                    <input type="hidden" id="lolz" value="200423-509">
                                </div>
                                <table class="table table-bordered table_invoice">
                                    <tbody>
                                        <tr>
                                            <td class="width_35 title-more">Guest Name :</td>
                                            <td class="width_65" id="showguest_name">-</td>
                                        </tr>
                                        <tr>
                                            <td class="width_35 title-more">Mobile No :</td>
                                            <td class="width_65" id="hotel_name">-</td>
                                        </tr>
                                        <tr>
                                            <td class="width_35 title-more">Hotel :</td>
                                            <td class="width_65" id="no_nights">0</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Package Cost</label>
                                    <div class="col-sm-10">
                                        <span>USD $</span>
                                        <input type="block" name="agency_name" class="form-control" placeholder="0"
                                            disabled>
                                    </div>
                                </div>
                                <div class="estimate_button">
                                    <button type="button" class="btn btn-success btn-lg btn-block btn-color">Whatsapp Me
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
