@extends('layouts.generalLayouts')

@section('content')
<div class="container-fluid px-4">
    <div class="row">
        <div class="col-12">

            <!-- Main Dashboard Card -->
            <div class="card border-0 rounded-4 shadow-lg">

                <div class="card-body pt-3">

                    <!-- Statistics Row - Horizontal Scrollable -->
                    <div class="overflow-auto mb-4 mt-2" style="white-space: nowrap;">
                        <div class="d-inline-flex gap-3" style="min-width: min-content;">
                            
                            <!-- Resident Card - Blue -->
                            <div class="d-inline-block" style="width: 220px;">
                                <a href="{{ route('resident.list') }}" class="text-decoration-none">
                                    <div class="card border-0 rounded-3 shadow bg-primary text-white h-100">
                                        <div class="card-body p-2">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <small class="opacity-75">ساکنین</small>
                                                    <h3 class="fw-bold mb-0 text-white">۴۸</h3>
                                                </div>
                                                <i class="la la-users fs-3 text-white opacity-50"></i>
                                            </div>
                                            <div class="progress mt-2 bg-white bg-opacity-25" style="height: 3px;">
                                                <div class="progress-bar bg-white" style="width:80%"></div>
                                            </div>
                                            <small class="opacity-75 mt-1 d-block">↑ 12%</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Rooms Card - Green -->
                            <div class="d-inline-block" style="width: 220px;">
                                <a href="{{ route('rooms.list') }}" class="text-decoration-none">
                                    <div class="card border-0 rounded-3 shadow bg-success text-white h-100">
                                        <div class="card-body p-2">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <small class="opacity-75">اتاق‌ها</small>
                                                    <h3 class="fw-bold mb-0 text-white">۲۴</h3>
                                                </div>
                                                <i class="la la-home fs-3 text-white opacity-50"></i>
                                            </div>
                                            <div class="progress mt-2 bg-white bg-opacity-25" style="height: 3px;">
                                                <div class="progress-bar bg-white" style="width:60%"></div>
                                            </div>
                                            <small class="opacity-75 mt-1 d-block">۸ خالی</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Active Contracts Card - Cyan -->
                            <div class="d-inline-block" style="width: 220px;">
                                <a href="{{ route('contracts.list') }}" class="text-decoration-none">
                                    <div class="card border-0 rounded-3 shadow text-white h-100" style="background: linear-gradient(135deg, #00b4db, #0083b0);">
                                        <div class="card-body p-2">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <small class="opacity-75">قرارداد فعال</small>
                                                    <h3 class="fw-bold mb-0 text-white">۴۵</h3>
                                                </div>
                                                <i class="la la-file-text fs-3 text-white opacity-50"></i>
                                            </div>
                                            <div class="progress mt-2 bg-white bg-opacity-25" style="height: 3px;">
                                                <div class="progress-bar bg-white" style="width:75%"></div>
                                            </div>
                                            <small class="opacity-75 mt-1 d-block">درآمد: ۱۲۵M</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Overdue Payment Card - Orange -->
                            <div class="d-inline-block" style="width: 220px;">
                                <a href="{{ route('contracts.list') }}" class="text-decoration-none">
                                    <div class="card border-0 rounded-3 shadow bg-warning text-dark h-100">
                                        <div class="card-body p-2">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <small class="opacity-75 text-dark">پرداخت معوق</small>
                                                    <h3 class="fw-bold mb-0 text-dark">۳</h3>
                                                </div>
                                                <i class="la la-money fs-3 text-dark opacity-50"></i>
                                            </div>
                                            <div class="progress mt-2 bg-dark bg-opacity-25" style="height: 3px;">
                                                <div class="progress-bar bg-dark" style="width:30%"></div>
                                            </div>
                                            <small class="opacity-75 mt-1 d-block">مبلغ: ۴.۵M</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Visitors Inside Card - Purple -->
                            <div class="d-inline-block" style="width: 220px;">
                                <a href="{{ route('visitors.list') }}" class="text-decoration-none">
                                    <div class="card border-0 rounded-3 shadow text-white h-100" style="background: linear-gradient(135deg, #667eea, #764ba2);">
                                        <div class="card-body p-2">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <small class="opacity-75">مهمان داخل</small>
                                                    <h3 class="fw-bold mb-0 text-white">۲</h3>
                                                </div>
                                                <i class="la la-user-plus fs-3 text-white opacity-50"></i>
                                            </div>
                                            <div class="progress mt-2 bg-white bg-opacity-25" style="height: 3px;">
                                                <div class="progress-bar bg-white" style="width:20%"></div>
                                            </div>
                                            <small class="opacity-75 mt-1 d-block">۳ مهمان امروز</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Open Requests Card - Red -->
                            <div class="d-inline-block" style="width: 220px;">
                                <a href="{{ route('maintenance.list') }}" class="text-decoration-none">
                                    <div class="card border-0 rounded-3 shadow bg-danger text-white h-100">
                                        <div class="card-body p-2">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <small class="opacity-75">درخواست باز</small>
                                                    <h3 class="fw-bold mb-0 text-white">۵</h3>
                                                </div>
                                                <i class="la la-wrench fs-3 text-white opacity-50"></i>
                                            </div>
                                            <div class="progress mt-2 bg-white bg-opacity-25" style="height: 3px;">
                                                <div class="progress-bar bg-white" style="width:50%"></div>
                                            </div>
                                            <small class="opacity-75 mt-1 d-block">اولویت: ۲ مورد</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <!-- Extra Card Example - Dark -->
                            <div class="d-inline-block" style="width: 220px;">
                                <a href="#" class="text-decoration-none">
                                    <div class="card border-0 rounded-3 shadow bg-dark text-white h-100">
                                        <div class="card-body p-2">
                                            <div class="d-flex justify-content-between align-items-start">
                                                <div>
                                                    <small class="opacity-75">تخت خالی</small>
                                                    <h3 class="fw-bold mb-0 text-white">۱۲</h3>
                                                </div>
                                                <i class="la la-bed fs-3 text-white opacity-50"></i>
                                            </div>
                                            <div class="progress mt-2 bg-white bg-opacity-25" style="height: 3px;">
                                                <div class="progress-bar bg-white" style="width:40%"></div>
                                            </div>
                                            <small class="opacity-75 mt-1 d-block">ظرفیت: ۶۰</small>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- Quick Access & Announcements -->
                    <div class="row g-4 mb-4">
                        <div class="col-lg-8">
                            <div class="card border-0 shadow-lg rounded-4 h-100">
                                <div class="card-header bg-white border-bottom rounded-top-4 py-3">
                                    <h6 class="mb-0 fw-bold"><i class="la la-bolt text-primary"></i> دسترسی سریع</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-sm-6 col-md-4">
                                            <a href="{{ route('resident.register') }}" class="btn btn-primary w-100 py-2 rounded-3 shadow-sm">
                                                <i class="la la-user-plus"></i> ثبت ساکن
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <a href="{{ route('contracts.register') }}" class="btn btn-success w-100 py-2 rounded-3 shadow-sm">
                                                <i class="la la-file-text"></i> ثبت قرارداد
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <a href="{{ route('rooms.register') }}" class="btn btn-info w-100 py-2 rounded-3 shadow-sm text-white">
                                                <i class="la la-home"></i> ثبت اتاق
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <a href="{{ route('visitors.register') }}" class="btn btn-primary w-100 py-2 rounded-3 shadow-sm" style="background: #667eea; border-color: #667eea;">
                                                <i class="la la-user"></i> ثبت مهمان
                                            </a>
                                        </div>
                                        <div class="col-sm-6 col-md-4">
                                            <a href="{{ route('maintenance.register') }}" class="btn btn-warning w-100 py-2 rounded-3 shadow-sm">
                                                <i class="la la-wrench"></i> درخواست تعمیر
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card border-0 shadow-lg rounded-4 h-100">
                                <div class="card-header bg-white border-bottom rounded-top-4 py-3">
                                    <h6 class="mb-0 fw-bold"><i class="la la-bullhorn text-primary"></i> آخرین اعلانات</h6>
                                </div>
                                <div class="card-body p-3">
                                    <div class="list-group list-group-flush">
                                        <div class="list-group-item border-0 px-0 py-2">
                                            <small class="text-muted d-block">۱۰ دقیقه پیش</small>
                                            <span>🔔 قرارداد جدید ثبت شد</span>
                                        </div>
                                        <div class="list-group-item border-0 px-0 py-2">
                                            <small class="text-muted d-block">۱ ساعت پیش</small>
                                            <span>📝 درخواست تعمیر اتاق ۲۰۳</span>
                                        </div>
                                        <div class="list-group-item border-0 px-0 py-2">
                                            <small class="text-muted d-block">۳ ساعت پیش</small>
                                            <span>👤 ساکن جدید: محمد رضایی</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Demo Info Alert -->
                    <div class="alert alert-info border-0 rounded-4 py-3 small shadow-sm">
                        <i class="la la-info-circle fs-5"></i>
                        این نسخه <strong>دیمو</strong> است — داده‌ها نمونه‌اند و پس از اتصال دیتابیس ذخیره واقعی انجام می‌شود.
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection