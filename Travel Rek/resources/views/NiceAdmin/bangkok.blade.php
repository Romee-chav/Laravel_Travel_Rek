@extends('layouts.app')
@section('title', 'Travel Rek - Bangkok')
@section('content')
    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Bangkok</h1>
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
                            <h5 class="card-title">Basic Details</h5>
                            @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session()->has('danger'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('danger') }}
                                </div>
                            @endif
                            <!-- General Form Elements -->
                            <form method="POST" action="{{ route('bangkok-store-basic') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-3">
                                    <label for="inputText" class="col-sm-2 col-form-label">Agency Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="agency_name" class="form-control">
                                        <span class="text-danger">
                                            @error('agency_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputEmail" class="col-sm-2 col-form-label">Guest Name</label>
                                    <div class="col-sm-10">
                                        <input type="name" name="guest_name" class="form-control">
                                        <span class="text-danger">
                                            @error('guest_name')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Arrival Flight</label>
                                    <div class="col-sm-10">
                                        <input type="time" id="CheckIn" name="arrival_flight" class="form-control"
                                            placeholder="SQ-423">
                                        <span class="text-danger">
                                            @error('arrival_flight')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Dept Flight</label>
                                    <div class="col-sm-10">
                                        <input type="time" id="" name="dept_flight" class="form-control"
                                            placeholder="SQ-423">
                                        <span class="text-danger">
                                            @error('dept_flight')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputNumber" class="col-sm-2 col-form-label">Check In /out</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="date" name="check-in" id="formFile">
                                        <span class="text-danger">
                                            @error('check-in')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputDate" class="col-sm-2 col-form-label">Rooms</label>
                                    <div class="col-sm-10">
                                        <select class="form-select" name="room" id="inputCountry"
                                            aria-label="Default select example" required="">
                                            <option>Choose an option</option>
                                            @foreach ($room as $rooms)
                                                <option value="{{ $rooms->room_id }}">{{ $rooms->room_number }}</option>
                                            @endforeach
                                            <span class="text-danger">
                                                @error('room')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputTime" class="col-sm-2 col-form-label">Adults</label>
                                    <div class="col-sm-10">
                                        <input type="numbers" name="adults" class="form-control">
                                        <span class="text-danger">
                                            @error('adults')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="inputTime" class="col-sm-2 col-form-label">Child</label>
                                    <div class="col-sm-10">
                                        <input type="numbers" name="child" class="form-control">
                                        <span class="text-danger">
                                            @error('child')
                                                {{ $message }}
                                            @enderror
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-10">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                    </div>
                                </div>
                            </form><!-- End General Form Elements -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            {{-- <h5 class="card-title">Thailand: Bangkok</h5> --}}
                            {{-- @if (session()->has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session()->has('danger'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('danger') }}
                                </div>
                            @endif --}}
                            <!-- Advanced Form Elements -->
                            <div class="col-sm">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Generate Invoice</h5>
                                        <span>Invoice Date:</span>
                                        <span>20-Apr-2023</span>
                                        <div class="invoice_Id pull-right">
                                            <span>Invoice Id:</span>
                                            <span id="invoice_id" value="200423-509">200423-509</span>
                                            <input type="hidden" id="lolz" value="200423-509">
                                        </div>
                                        <table class="table table-bordered table_invoice">
                                            <tbody>
                                                <tr>
                                                    <td class="width_35 title-more">Guest Name :</td>
                                                    <td class="width_65" id="showguest_name">-</td>
                                                </tr>
                                                <tr>
                                                    <td class="width_35 title-more">Hotel Name :</td>
                                                    <td class="width_65" id="hotel_name">-</td>
                                                </tr>

                                                <tr>
                                                    <td class="width_35 title-more">No.of Nights :</td>
                                                    <td class="width_65" id="no_nights">0</td>
                                                </tr>
                                                <tr>
                                                    <td class="width_35 title-more">Room Plan :</td>
                                                    <td class="width_65" id="roomplan">0</td>
                                                </tr>
                                                <tr>
                                                    <td class="width_35 title-more">Pax :</td>
                                                    <td class="width_65" id="pax">0</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="row mb-3">
                                            <label for="inputText" class="col-sm-2 col-form-label">Grand Total USD
                                                :</label>
                                            <div class="col-sm-10">
                                                <input type="block" name="agency_name" class="form-control"
                                                    placeholder="0" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                {{-- <form method="POST" action="{{ route('thailand-store') }}"
                                    enctype="multipart/form-data">
                                    @csrf --}}
                                <fieldset class="row mb-3">
                                    <div class="col-sm-10">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="hotel_season_siam"
                                                id="gridRadios1" value="1">
                                            <label class="form-check-label" for="gridRadios1">
                                                Hotel Season Siam
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="ecotel_bangkok"
                                                id="gridRadios2" value="2">
                                            <label class="form-check-label" for="gridRadios2">
                                                Ecotel Bangkok
                                            </label>
                                        </div>
                                        <div class="form-check disabled">
                                            <input class="form-check-input" type="radio"
                                                name="ibis_bangkok_sukhumvit_4" id="gridRadios" value="3">
                                            <label class="form-check-label" for="gridRadios3">
                                                Ibis Bangkok Sukhumvit 4
                                            </label>
                                        </div>
                                    </div>
                                </fieldset>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="meals" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option>Choose an option</option>
                                        @foreach ($meal as $meals)
                                            <option value="{{ $meals->meals_id }}">{{ $meals->meals_number }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelect">Meals</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" name="dinner" id="floatingSelect"
                                        aria-label="Floating label select example">
                                        <option>Choose an option</option>
                                        @foreach ($dinner as $dinners)
                                            <option value="{{ $dinners->dinner_id }}">{{ $dinners->dinner_number }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <label for="floatingSelect">Dinner</label>
                                </div>
                                <div class="checkbox checkbox-inline checkbox-inline-shift">
                                    <input type="checkbox" name="bkk[]" value="BKK-APT-PTY-HTL-BKK HTL-BKK-APT">
                                    <label for="pattaya_apt" style="padding-left: 2px;">
                                        BKK APT-PTY HTL-BKK HTL- BKK APT
                                    </label>
                                </div>
                                {{-- <div class="row mb-3">
                                        <div class="col-sm-10">
                                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                        </div>
                                    </div> --}}
                                {{-- </form><!-- End General Form Elements --> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="estimate_button">
                            <button type="button" class="btn btn-danger btn-lg btn-block btn-color">I AM
                                FEELING
                                LUCKY
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main><!-- End #main -->
@endsection
