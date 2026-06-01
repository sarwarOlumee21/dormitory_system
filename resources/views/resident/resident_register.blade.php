@extends('layouts.generalLayouts')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-content collapse show">
                <div class="card-body">
                    <form class="form">
                        <div class="card border mb-0">
                            <div class="card-header bg-light py-1">
                                <h6 class="mb-0 font-weight-bold"><i class="la la-id-card text-primary"></i> اطلاعات ساکن</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="font-weight-bold font-small-3" for="name">
                                            <i class="la la-user text-primary"></i> نام کامل
                                        </label>
                                        <input type="text" id="name" class="form-control border-primary" placeholder="نام کامل" name="name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="font-weight-bold font-small-3" for="father_name">
                                            <i class="la la-male text-primary"></i> نام پدر
                                        </label>
                                        <input type="text" id="father_name" class="form-control border-primary" placeholder="نام پدر" name="father_name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="font-weight-bold font-small-3" for="phone_number">
                                            <i class="la la-phone text-primary"></i> شماره تلیفون
                                        </label>
                                        <input type="text" id="phone_number" class="form-control border-primary" placeholder="شماره تلیفون" name="phone_number">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="font-weight-bold font-small-3" for="city_name">
                                            <i class="la la-map-marker text-primary"></i> نام شهر / ولایت
                                        </label>
                                        <input type="text" id="city_name" class="form-control border-primary" placeholder="نام شهر" name="city_name">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="font-weight-bold font-small-3" for="room_number">
                                            <i class="la la-home text-primary"></i> نمبر اتاق
                                        </label>
                                        <select id="room_number" class="form-control border-primary" name="room_number">
                                            <option value="">انتخاب اتاق</option>
                                            <option>A-12</option>
                                            <option>B-07</option>
                                            <option>C-03</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="font-weight-bold font-small-3" for="occupation">
                                            <i class="la la-briefcase text-primary"></i> شغل
                                        </label>
                                        <input type="text" id="occupation" class="form-control border-primary" placeholder="شغل" name="occupation">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="font-weight-bold font-small-3" for="work_phone">
                                            <i class="la la-phone-square text-primary"></i> شماره محل کار
                                        </label>
                                        <input type="text" id="work_phone" class="form-control border-primary" placeholder="شماره محل کار" name="work_phone">
                                    </div>
                                    <div class="col-md-6 form-group mb-0">
                                        <label class="font-weight-bold font-small-3" for="occupation_location">
                                            <i class="la la-map-pin text-primary"></i> موقعیت شغل
                                        </label>
                                        <input type="text" id="occupation_location" class="form-control border-primary" placeholder="موقعیت شغل" name="occupation_location">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light text-right">
                                <a href="{{ route('resident.list') }}" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> لغو
                                </a>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> ثبت ساکن
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
