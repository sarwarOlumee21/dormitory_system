@extends('layouts.generalLayouts')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-content collapse show">
                <div class="card-body">

                    <div class="text-left mb-3">
                        <a href="{{ route('resident.register') }}" class="btn btn-primary btn-sm">
                            <i class="la la-plus"></i> ثبت ساکن جدید
                        </a>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-4 col-6 mb-2">
                            <div class="card border mb-0">
                                <div class="card-body py-2 d-flex align-items-center">
                                    <span class="badge badge-primary badge-pill p-2 mr-2"><i class="la la-users font-medium-3"></i></span>
                                    <div>
                                        <h3 class="mb-0 font-weight-bold">۴۸</h3>
                                        <small class="text-muted">کل ساکنین</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 mb-2">
                            <div class="card border mb-0">
                                <div class="card-body py-2 d-flex align-items-center">
                                    <span class="badge badge-success badge-pill p-2 mr-2"><i class="la la-check font-medium-3"></i></span>
                                    <div>
                                        <h3 class="mb-0 font-weight-bold">۴۵</h3>
                                        <small class="text-muted">با قرارداد فعال</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="card border mb-0">
                                <div class="card-body py-2 d-flex align-items-center">
                                    <span class="badge badge-warning badge-pill p-2 mr-2"><i class="la la-user font-medium-3"></i></span>
                                    <div>
                                        <h3 class="mb-0 font-weight-bold">۳</h3>
                                        <small class="text-muted">بدون اتاق</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card border-primary bg-light mb-3">
                        <div class="card-body py-2">
                            <div class="row">
                                <div class="col-md-10 form-group mb-0">
                                    <input type="text" id="filterResident" class="form-control border-primary" placeholder="جستجو: نام، اتاق، تلفن...">
                                </div>
                                <div class="col-md-2 form-group mb-0">
                                    <button type="button" class="btn btn-primary btn-block" id="btnFilterResident">
                                        <i class="la la-search"></i> جستجو
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table table-striped table-hover table-bordered mb-0" id="residentsTable">
                            <thead class="bg-primary white">
                                <tr>
                                    <th class="border-0">#</th>
                                    <th class="border-0">کد</th>
                                    <th class="border-0">نام کامل</th>
                                    <th class="border-0">نام پدر</th>
                                    <th class="border-0">شهر</th>
                                    <th class="border-0">نمبر اتاق</th>
                                    <th class="border-0">شغل</th>
                                    <th class="border-0">شماره تلیفون</th>
                                    <th class="border-0">موقعیت شغل</th>
                                    <th class="border-0 text-center">عملیات</th>
                                </tr>
                            </thead>
                            <tbody id="residentsBody">
                                <tr data-search="1001 احمد نوری محمد نوری کابل A-12 محصل 0700123456 پوهنتون کابل">
                                    <td>۱</td>
                                    <td><span class="badge badge-primary">1001</span></td>
                                    <td class="font-weight-bold">احمد نوری</td>
                                    <td>محمد نوری</td>
                                    <td>کابل</td>
                                    <td><span class="badge badge-info">A-12</span></td>
                                    <td>محصل</td>
                                    <td dir="ltr" class="text-right">0700123456</td>
                                    <td>پوهنتون کابل</td>
                                    <td class="text-center text-nowrap">
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('contracts.register') }}" class="btn btn-outline-success" title="قرارداد"><i class="la la-file-text"></i></a>
                                            <button class="btn btn-outline-primary"><i class="la la-eye"></i></button>
                                            <button class="btn btn-outline-info"><i class="la la-edit"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-search="1002 علی رحیمی عبدالرحیم هرات B-07 کارمند 0700554433 شرکت خصوصی">
                                    <td>۲</td>
                                    <td><span class="badge badge-primary">1002</span></td>
                                    <td class="font-weight-bold">علی رحیمی</td>
                                    <td>عبدالرحیم</td>
                                    <td>هرات</td>
                                    <td><span class="badge badge-info">B-07</span></td>
                                    <td>کارمند</td>
                                    <td dir="ltr" class="text-right">0700554433</td>
                                    <td>شرکت خصوصی</td>
                                    <td class="text-center text-nowrap">
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('contracts.register') }}" class="btn btn-outline-success"><i class="la la-file-text"></i></a>
                                            <button class="btn btn-outline-primary"><i class="la la-eye"></i></button>
                                            <button class="btn btn-outline-info"><i class="la la-edit"></i></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr data-search="1003 حسین احمدی کریم احمدی کابل C-03 دانشجو 0788991122 پلی تکنیک">
                                    <td>۳</td>
                                    <td><span class="badge badge-primary">1003</span></td>
                                    <td class="font-weight-bold">حسین احمدی</td>
                                    <td>کریم احمدی</td>
                                    <td>کابل</td>
                                    <td><span class="badge badge-info">C-03</span></td>
                                    <td>دانشجو</td>
                                    <td dir="ltr" class="text-right">0788991122</td>
                                    <td>پوهنتون پلی‌تکنیک</td>
                                    <td class="text-center text-nowrap">
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('contracts.register') }}" class="btn btn-outline-success"><i class="la la-file-text"></i></a>
                                            <button class="btn btn-outline-primary"><i class="la la-eye"></i></button>
                                            <button class="btn btn-outline-info"><i class="la la-edit"></i></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('btnFilterResident').addEventListener('click', function () {
    var q = (document.getElementById('filterResident').value || '').trim().toLowerCase();
    var rows = document.querySelectorAll('#residentsBody tr[data-search]');
    var n = 0;
    rows.forEach(function (row) {
        var show = !q || row.getAttribute('data-search').toLowerCase().indexOf(q) !== -1;
        row.style.display = show ? '' : 'none';
        if (show) { n++; row.cells[0].textContent = n; }
    });
});
document.getElementById('filterResident').addEventListener('keyup', function (e) {
    if (e.key === 'Enter') document.getElementById('btnFilterResident').click();
});
</script>

@endsection
