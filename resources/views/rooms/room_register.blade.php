@extends('layouts.generalLayouts')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow-sm border-0">

            <div class="card-content collapse show">
                <div class="card-body">

                    <form class="form">

                        <div class="card border mb-0">
                            <div class="card-header bg-light d-flex align-items-center py-1">
                                <span class="badge badge-primary badge-pill mr-2">۱</span>
                                <span class="badge badge-light border mr-2 p-1">
                                    <i class="la la-bed text-primary"></i>
                                </span>
                                <div>
                                    <h6 class="mb-0 font-weight-bold">اطلاعات اتاق</h6>
                                    <small class="text-muted">تمام فیلدهای زیر را تکمیل کنید</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label class="font-weight-bold font-small-3" for="room_number">
                                            <i class="la la-hashtag text-primary"></i> شماره اتاق
                                        </label>
                                        <input type="text" id="room_number" class="form-control border-primary"
                                               placeholder="مثلاً A-12" name="room_number">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="font-weight-bold font-small-3" for="room_capacity">
                                            <i class="la la-users text-primary"></i> ظرفیت اتاق
                                        </label>
                                        <input type="number" id="room_capacity" class="form-control border-primary"
                                               placeholder="تعداد نفرات" name="room_capacity" min="1">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="font-weight-bold font-small-3" for="room_type">
                                            <i class="la la-th-large text-primary"></i> نوع اتاق
                                        </label>
                                        <select id="room_type" class="form-control border-primary" name="room_type">
                                            <option value="">انتخاب نوع</option>
                                            <option>تک‌نفره</option>
                                            <option>دو‌نفره</option>
                                            <option>گروهی</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 form-group mb-0">
                                        <label class="font-weight-bold font-small-3" for="room_status">
                                            <i class="la la-toggle-on text-primary"></i> وضعیت اتاق
                                        </label>
                                        <select id="room_status" class="form-control border-primary" name="room_status">
                                            <option value="">انتخاب وضعیت</option>
                                            <option selected>فعال</option>
                                            <option>غیرفعال</option>
                                            <option>در حال تعمیر</option>
                                            <option>پر</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer bg-light d-flex flex-wrap align-items-center justify-content-between">
                                <span class="text-muted font-small-3">
                                    <i class="la la-info-circle text-primary"></i>
                                    پس از ثبت، اتاق در لیست اتاق‌ها نمایش داده می‌شود
                                </span>
                                <div>
                                    <a href="{{ route('rooms.list') }}" class="btn btn-warning mr-1">
                                        <i class="ft-x"></i> لغو
                                    </a>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="la la-check-square-o"></i> ثبت اتاق
                                    </button>
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
