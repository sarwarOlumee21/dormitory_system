@extends('layouts.generalLayouts')

@section('content')

<div class="row justify-content-center">
    <div class="col-12 col-xl-10">

        <div class="page-banner">
            <div class="banner-icon">
                <i class="la la-users text-white"></i>
            </div>
            <h5 class="mb-1 font-weight-bold" style="direction:rtl;">لیست ساکنین</h5>
            <p class="mb-0 text-white-75" style="direction:rtl;">تمام ساکنین، اطلاعات اتاق و وضعیت قرارداد را در یک نگاه ببینید.</p>
        </div>

        <div class="card-soft">

            <div class="filter-card p-3 mb-4">
                <div class="row gx-2 gy-2 align-items-end">
                    <div class="col-md-10">
                        <label class="form-label fw-bold" style="direction:rtl;">جستجو</label>
                        <input type="text" id="filterResident" class="form-control border-primary" placeholder="نام، اتاق، تلفن...">
                    </div>
                    <div class="col-md-2">
                        <button type="button" class="btn btn-primary btn-block" id="btnFilterResident">
                            <i class="la la-search"></i> جستجو
                        </button>
                    </div>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-hover mb-0" id="residentsTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>کد</th>
                            <th>نام کامل</th>
                            <th>نام پدر</th>
                            <th>شهر</th>
                            <th>نمبر اتاق</th>
                            <th>شغل</th>
                            <th>شماره تلیفون</th>
                            <th>موقعیت شغل</th>
                            <th class="text-center">عملیات</th>
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
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('contracts.register') }}" class="btn btn-outline-success" title="قرارداد"><i class="la la-file-text"></i></a>
                                    <button class="btn btn-outline-primary" type="button"><i class="la la-eye"></i></button>
                                    <button class="btn btn-outline-info" type="button"><i class="la la-edit"></i></button>
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
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('contracts.register') }}" class="btn btn-outline-success"><i class="la la-file-text"></i></a>
                                    <button class="btn btn-outline-primary" type="button"><i class="la la-eye"></i></button>
                                    <button class="btn btn-outline-info" type="button"><i class="la la-edit"></i></button>
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
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('contracts.register') }}" class="btn btn-outline-success"><i class="la la-file-text"></i></a>
                                    <button class="btn btn-outline-primary" type="button"><i class="la la-eye"></i></button>
                                    <button class="btn btn-outline-info" type="button"><i class="la la-edit"></i></button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
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
