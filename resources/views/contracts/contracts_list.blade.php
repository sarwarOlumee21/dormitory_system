@extends('layouts.generalLayouts')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow-sm border-0">

            <div class="card-content collapse show">
                <div class="card-body">

                    <div class="text-left mb-3">
                        <a href="{{ route('contracts.register') }}" class="btn btn-primary btn-sm">
                            <i class="la la-plus"></i> ثبت قرارداد جدید
                        </a>
                    </div>

                    {{-- آمار --}}
                    <div class="row mb-3">
                        <div class="col-md-3 col-6 mb-2 mb-md-0">
                            <div class="card border h-100 mb-0">
                                <div class="card-body py-2 d-flex align-items-center">
                                    <span class="badge badge-primary badge-pill p-2 mr-2">
                                        <i class="la la-file-text-o font-medium-3"></i>
                                    </span>
                                    <div>
                                        <h3 class="mb-0 font-weight-bold" id="statTotal">۳</h3>
                                        <small class="text-muted">کل قراردادها</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-2 mb-md-0">
                            <div class="card border h-100 mb-0">
                                <div class="card-body py-2 d-flex align-items-center">
                                    <span class="badge badge-success badge-pill p-2 mr-2">
                                        <i class="la la-check-circle font-medium-3"></i>
                                    </span>
                                    <div>
                                        <h3 class="mb-0 font-weight-bold" id="statActive">۲</h3>
                                        <small class="text-muted">فعال</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 mb-2 mb-md-0">
                            <div class="card border h-100 mb-0">
                                <div class="card-body py-2 d-flex align-items-center">
                                    <span class="badge badge-warning badge-pill p-2 mr-2">
                                        <i class="la la-clock-o font-medium-3"></i>
                                    </span>
                                    <div>
                                        <h3 class="mb-0 font-weight-bold" id="statPending">۱</h3>
                                        <small class="text-muted">در انتظار</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6">
                            <div class="card border h-100 mb-0">
                                <div class="card-body py-2 d-flex align-items-center">
                                    <span class="badge badge-danger badge-pill p-2 mr-2">
                                        <i class="la la-times-circle font-medium-3"></i>
                                    </span>
                                    <div>
                                        <h3 class="mb-0 font-weight-bold" id="statInactive">۰</h3>
                                        <small class="text-muted">غیرفعال</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- فیلتر --}}
                    <div class="card border-primary bg-light mb-3">
                        <div class="card-body py-2">
                            <div class="row align-items-end">
                                <div class="col-lg-3 col-md-6 form-group mb-0">
                                    <label class="font-weight-bold font-small-3" for="filterSearch">
                                        <i class="la la-search text-primary"></i> جستجو
                                    </label>
                                    <input type="text" id="filterSearch" class="form-control border-primary" placeholder="نام، کد یا اتاق...">
                                </div>
                                <div class="col-lg-2 col-md-6 form-group mb-0">
                                    <label class="font-weight-bold font-small-3" for="filterStatus">
                                        <i class="la la-toggle-on text-primary"></i> وضعیت
                                    </label>
                                    <select id="filterStatus" class="form-control border-primary">
                                        <option value="">همه</option>
                                        <option value="فعال">فعال</option>
                                        <option value="غیرفعال">غیرفعال</option>
                                        <option value="در انتظار">در انتظار</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-6 form-group mb-0">
                                    <label class="font-weight-bold font-small-3" for="filterCity">
                                        <i class="la la-map-marker text-primary"></i> شهر
                                    </label>
                                    <select id="filterCity" class="form-control border-primary">
                                        <option value="">همه</option>
                                        <option value="کابل">کابل</option>
                                        <option value="هرات">هرات</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 col-md-6 form-group mb-0">
                                    <label class="font-weight-bold font-small-3" for="filterRoom">
                                        <i class="la la-home text-primary"></i> اتاق
                                    </label>
                                    <input type="text" id="filterRoom" class="form-control border-primary" placeholder="مثلاً A-12">
                                </div>
                                <div class="col-lg-3 col-md-12 form-group mb-0">
                                    <button type="button" class="btn btn-primary btn-block" id="btnFilter">
                                        <i class="la la-filter"></i> اعمال فیلتر
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- جدول --}}
                    <div class="card border mb-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered mb-0" id="contractsTable" data-demo-type="contract">
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
                                        <th class="border-0">تاریخ قرارداد</th>
                                        <th class="border-0">مدت</th>
                                        <th class="border-0">وضعیت</th>
                                        <th class="border-0">مبلغ پرداختی</th>
                                        <th class="border-0">ماه پرداخت</th>
                                        <th class="border-0">وضعیت پرداخت</th>
                                        <th class="border-0 text-center">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody id="contractsBody">
                                    <tr
                                        data-code="1001"
                                        data-name="احمد نوری"
                                        data-father="محمد نوری"
                                        data-city="کابل"
                                        data-room="A-12"
                                        data-occupation="محصل"
                                        data-phone="0700123456"
                                        data-location="پوهنتون کابل"
                                        data-date="1404/02/15"
                                        data-duration="۱ سال"
                                        data-status="فعال"
                                        data-payment-amount="3500"
                                        data-months-paid="2"
                                        data-payment-status="پرداخت شده"
                                    >
                                        <td>۱</td>
                                        <td><span class="badge badge-primary">1001</span></td>
                                        <td class="font-weight-bold">احمد نوری</td>
                                        <td>محمد نوری</td>
                                        <td>کابل</td>
                                        <td><span class="badge badge-info">A-12</span></td>
                                        <td>محصل</td>
                                        <td dir="ltr" class="text-right">0700123456</td>
                                        <td>پوهنتون کابل</td>
                                        <td>1404/02/15</td>
                                        <td>۱ سال</td>
                                        <td><span class="badge badge-success">فعال</span></td>
                                        <td>۳,۵۰۰ افغانی</td>
                                        <td>۲ ماه</td>
                                        <td><span class="badge badge-success">پرداخت شده</span></td>
                                        <td class="text-center text-nowrap">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-outline-primary btn-demo-view" title="مشاهده"><i class="la la-eye"></i></button>
                                                <button type="button" class="btn btn-outline-info" title="ویرایش"><i class="la la-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger btn-delete" title="حذف"><i class="la la-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        data-code="1002"
                                        data-name="علی رحیمی"
                                        data-father="عبدالرحیم"
                                        data-city="هرات"
                                        data-room="B-07"
                                        data-occupation="کارمند"
                                        data-phone="0700554433"
                                        data-location="شرکت خصوصی"
                                        data-date="1404/01/20"
                                        data-duration="۶ ماه"
                                        data-status="فعال"
                                        data-payment-amount="3500"
                                        data-months-paid="1"
                                        data-payment-status="پرداخت شده"
                                    >
                                        <td>۲</td>
                                        <td><span class="badge badge-primary">1002</span></td>
                                        <td class="font-weight-bold">علی رحیمی</td>
                                        <td>عبدالرحیم</td>
                                        <td>هرات</td>
                                        <td><span class="badge badge-info">B-07</span></td>
                                        <td>کارمند</td>
                                        <td dir="ltr" class="text-right">0700554433</td>
                                        <td>شرکت خصوصی</td>
                                        <td>1404/01/20</td>
                                        <td>۶ ماه</td>
                                        <td><span class="badge badge-success">فعال</span></td>
                                        <td>۳,۵۰۰ افغانی</td>
                                        <td>۱ ماه</td>
                                        <td><span class="badge badge-success">پرداخت شده</span></td>
                                        <td class="text-center text-nowrap">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-outline-primary btn-demo-view" title="مشاهده"><i class="la la-eye"></i></button>
                                                <button type="button" class="btn btn-outline-info" title="ویرایش"><i class="la la-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger btn-delete" title="حذف"><i class="la la-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr
                                        data-code="1003"
                                        data-name="حسین احمدی"
                                        data-father="کریم احمدی"
                                        data-city="کابل"
                                        data-room="C-03"
                                        data-occupation="دانشجو"
                                        data-phone="0788991122"
                                        data-location="پوهنتون پلی‌تکنیک"
                                        data-date="1404/03/01"
                                        data-duration="۲ سال"
                                        data-status="در انتظار"
                                        data-payment-amount="0"
                                        data-months-paid="0"
                                        data-payment-status="معوق"
                                    >
                                        <td>۳</td>
                                        <td><span class="badge badge-primary">1003</span></td>
                                        <td class="font-weight-bold">حسین احمدی</td>
                                        <td>کریم احمدی</td>
                                        <td>کابل</td>
                                        <td><span class="badge badge-info">C-03</span></td>
                                        <td>دانشجو</td>
                                        <td dir="ltr" class="text-right">0788991122</td>
                                        <td>پوهنتون پلی‌تکنیک</td>
                                        <td>1404/03/01</td>
                                        <td>۲ سال</td>
                                        <td><span class="badge badge-warning">در انتظار</span></td>
                                        <td>—</td>
                                        <td>۰ ماه</td>
                                        <td><span class="badge badge-danger">معوق</span></td>
                                        <td class="text-center text-nowrap">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-outline-primary btn-demo-view" title="مشاهده"><i class="la la-eye"></i></button>
                                                <button type="button" class="btn btn-outline-info" title="ویرایش"><i class="la la-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger btn-delete" title="حذف"><i class="la la-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer bg-light d-flex align-items-center justify-content-between flex-wrap">
                            <span class="text-muted font-small-3" id="tableInfo">نمایش ۳ قرارداد از ۳</span>
                            <span class="text-muted font-small-3">
                                <i class="la la-info-circle text-primary"></i>
                                برای ثبت قرارداد جدید از دکمه بالا استفاده کنید
                            </span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
(function () {
    const rows = Array.from(document.querySelectorAll('#contractsBody tr[data-code]'));
    const totalRows = rows.length;

    const filterSearch = document.getElementById('filterSearch');
    const filterStatus = document.getElementById('filterStatus');
    const filterCity = document.getElementById('filterCity');
    const filterRoom = document.getElementById('filterRoom');
    const tableInfo = document.getElementById('tableInfo');

    function applyFilter() {
        const q = (filterSearch.value || '').trim().toLowerCase();
        const status = filterStatus.value;
        const city = filterCity.value;
        const room = (filterRoom.value || '').trim().toLowerCase();
        let visible = 0;
        let active = 0, pending = 0, inactive = 0;

        rows.forEach(function (row) {
            const matchSearch = !q || [
                row.dataset.code,
                row.dataset.name,
                row.dataset.father,
                row.dataset.room,
                row.dataset.phone,
                row.dataset.occupation,
                row.dataset.location
            ].some(function (v) { return (v || '').toLowerCase().indexOf(q) !== -1; });

            const matchStatus = !status || row.dataset.status === status;
            const matchCity = !city || row.dataset.city === city;
            const matchRoom = !room || (row.dataset.room || '').toLowerCase().indexOf(room) !== -1;

            const show = matchSearch && matchStatus && matchCity && matchRoom;
            row.style.display = show ? '' : 'none';
            if (show) {
                visible++;
                row.cells[0].textContent = visible;
                const s = row.dataset.status;
                if (s === 'فعال') active++;
                else if (s === 'در انتظار') pending++;
                else inactive++;
            }
        });

        document.getElementById('statTotal').textContent = visible.toLocaleString('fa-IR');
        document.getElementById('statActive').textContent = active.toLocaleString('fa-IR');
        document.getElementById('statPending').textContent = pending.toLocaleString('fa-IR');
        document.getElementById('statInactive').textContent = inactive.toLocaleString('fa-IR');
        tableInfo.textContent = 'نمایش ' + visible.toLocaleString('fa-IR') + ' قرارداد از ' + totalRows.toLocaleString('fa-IR');

        let emptyRow = document.getElementById('emptyFilterRow');
        if (visible === 0) {
            if (!emptyRow) {
                emptyRow = document.createElement('tr');
                emptyRow.id = 'emptyFilterRow';
                emptyRow.innerHTML = '<td colspan="16" class="text-center text-muted py-4">' +
                    '<i class="la la-inbox font-large-2 d-block mb-1"></i>قراردادی با این فیلتر یافت نشد</td>';
                document.getElementById('contractsBody').appendChild(emptyRow);
            }
            emptyRow.style.display = '';
        } else if (emptyRow) {
            emptyRow.style.display = 'none';
        }
    }

    document.getElementById('btnFilter').addEventListener('click', applyFilter);
    filterSearch.addEventListener('keyup', function (e) {
        if (e.key === 'Enter') applyFilter();
    });
    [filterStatus, filterCity].forEach(function (el) {
        el.addEventListener('change', applyFilter);
    });
    filterRoom.addEventListener('keyup', function (e) {
        if (e.key === 'Enter') applyFilter();
    });

    document.querySelectorAll('.btn-delete').forEach(function (btn) {
        btn.addEventListener('click', function () {
            if (confirm('آیا از حذف این قرارداد مطمئن هستید؟')) {
                alert('حذف قرارداد — پس از اتصال به سرور فعال می‌شود.');
            }
        });
    });
})();
</script>

@endsection
