@extends('layouts.generalLayouts')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow-sm border-0">

            <div class="card-content collapse show">
                <div class="card-body">

                    <div class="text-left mb-3">
                        <a href="{{ route('rooms.register') }}" class="btn btn-primary btn-sm">
                            <i class="la la-plus"></i> ثبت اتاق جدید
                        </a>
                    </div>

                    {{-- آمار --}}
                    <div class="row mb-3">
                        <div class="col-md-4 col-6 mb-2 mb-md-0">
                            <div class="card border h-100 mb-0">
                                <div class="card-body py-2 d-flex align-items-center">
                                    <span class="badge badge-primary badge-pill p-2 mr-2">
                                        <i class="la la-home font-medium-3"></i>
                                    </span>
                                    <div>
                                        <h3 class="mb-0 font-weight-bold" id="statTotal">۴</h3>
                                        <small class="text-muted">کل اتاق‌ها</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-6 mb-2 mb-md-0">
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
                        <div class="col-md-4 col-6">
                            <div class="card border h-100 mb-0">
                                <div class="card-body py-2 d-flex align-items-center">
                                    <span class="badge badge-warning badge-pill p-2 mr-2">
                                        <i class="la la-exclamation-circle font-medium-3"></i>
                                    </span>
                                    <div>
                                        <h3 class="mb-0 font-weight-bold" id="statOther">۲</h3>
                                        <small class="text-muted">پر / تعمیر</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- فیلتر --}}
                    <div class="card border-primary bg-light mb-3">
                        <div class="card-body py-2">
                            <div class="row align-items-end">
                                <div class="col-md-4 form-group mb-0">
                                    <label class="font-weight-bold font-small-3" for="filterSearch">
                                        <i class="la la-search text-primary"></i> جستجو
                                    </label>
                                    <input type="text" id="filterSearch" class="form-control border-primary"
                                           placeholder="شماره یا نوع اتاق...">
                                </div>
                                <div class="col-md-3 form-group mb-0">
                                    <label class="font-weight-bold font-small-3" for="filterType">
                                        <i class="la la-th-large text-primary"></i> نوع اتاق
                                    </label>
                                    <select id="filterType" class="form-control border-primary">
                                        <option value="">همه</option>
                                        <option value="تک‌نفره">تک‌نفره</option>
                                        <option value="دو‌نفره">دو‌نفره</option>
                                        <option value="گروهی">گروهی</option>
                                    </select>
                                </div>
                                <div class="col-md-3 form-group mb-0">
                                    <label class="font-weight-bold font-small-3" for="filterStatus">
                                        <i class="la la-toggle-on text-primary"></i> وضعیت
                                    </label>
                                    <select id="filterStatus" class="form-control border-primary">
                                        <option value="">همه</option>
                                        <option value="فعال">فعال</option>
                                        <option value="پر">پر</option>
                                        <option value="در حال تعمیر">در حال تعمیر</option>
                                        <option value="غیرفعال">غیرفعال</option>
                                    </select>
                                </div>
                                <div class="col-md-2 form-group mb-0">
                                    <button type="button" class="btn btn-primary btn-block" id="btnFilter">
                                        <i class="la la-filter"></i> فیلتر
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- جدول --}}
                    <div class="card border mb-0">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered mb-0" id="roomsTable" data-demo-type="room">
                                <thead class="bg-primary white">
                                    <tr>
                                        <th class="border-0">#</th>
                                        <th class="border-0">شماره اتاق</th>
                                        <th class="border-0">ظرفیت</th>
                                        <th class="border-0">نوع اتاق</th>
                                        <th class="border-0">وضعیت</th>
                                        <th class="border-0 text-center">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody id="roomsBody">
                                    <tr data-number="A-12" data-capacity="2" data-type="دو‌نفره" data-status="فعال">
                                        <td>۱</td>
                                        <td><span class="badge badge-primary">A-12</span></td>
                                        <td><span class="badge badge-info">۲ نفر</span></td>
                                        <td>دو‌نفره</td>
                                        <td><span class="badge badge-success">فعال</span></td>
                                        <td class="text-center text-nowrap">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-outline-primary btn-demo-view" title="مشاهده"><i class="la la-eye"></i></button>
                                                <button type="button" class="btn btn-outline-info" title="ویرایش"><i class="la la-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger btn-delete" title="حذف"><i class="la la-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-number="B-07" data-capacity="1" data-type="تک‌نفره" data-status="فعال">
                                        <td>۲</td>
                                        <td><span class="badge badge-primary">B-07</span></td>
                                        <td><span class="badge badge-info">۱ نفر</span></td>
                                        <td>تک‌نفره</td>
                                        <td><span class="badge badge-success">فعال</span></td>
                                        <td class="text-center text-nowrap">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-outline-primary btn-demo-view" title="مشاهده"><i class="la la-eye"></i></button>
                                                <button type="button" class="btn btn-outline-info" title="ویرایش"><i class="la la-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger btn-delete" title="حذف"><i class="la la-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-number="C-03" data-capacity="6" data-type="گروهی" data-status="پر">
                                        <td>۳</td>
                                        <td><span class="badge badge-primary">C-03</span></td>
                                        <td><span class="badge badge-info">۶ نفر</span></td>
                                        <td>گروهی</td>
                                        <td><span class="badge badge-warning">پر</span></td>
                                        <td class="text-center text-nowrap">
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button type="button" class="btn btn-outline-primary btn-demo-view" title="مشاهده"><i class="la la-eye"></i></button>
                                                <button type="button" class="btn btn-outline-info" title="ویرایش"><i class="la la-edit"></i></button>
                                                <button type="button" class="btn btn-outline-danger btn-delete" title="حذف"><i class="la la-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr data-number="D-01" data-capacity="4" data-type="گروهی" data-status="در حال تعمیر">
                                        <td>۴</td>
                                        <td><span class="badge badge-primary">D-01</span></td>
                                        <td><span class="badge badge-info">۴ نفر</span></td>
                                        <td>گروهی</td>
                                        <td><span class="badge badge-secondary">در حال تعمیر</span></td>
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
                            <span class="text-muted font-small-3" id="tableInfo">نمایش ۴ اتاق از ۴</span>
                            <span class="text-muted font-small-3">
                                <i class="la la-info-circle text-primary"></i>
                                برای افزودن اتاق جدید از دکمه بالا استفاده کنید
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
    const rows = Array.from(document.querySelectorAll('#roomsBody tr[data-number]'));
    const totalRows = rows.length;

    function applyFilter() {
        const q = (document.getElementById('filterSearch').value || '').trim().toLowerCase();
        const type = document.getElementById('filterType').value;
        const status = document.getElementById('filterStatus').value;
        let visible = 0, active = 0, other = 0;

        rows.forEach(function (row) {
            const matchSearch = !q || [
                row.dataset.number,
                row.dataset.type,
                row.dataset.capacity
            ].some(function (v) { return (v || '').toLowerCase().indexOf(q) !== -1; });

            const matchType = !type || row.dataset.type === type;
            const matchStatus = !status || row.dataset.status === status;
            const show = matchSearch && matchType && matchStatus;

            row.style.display = show ? '' : 'none';
            if (show) {
                visible++;
                row.cells[0].textContent = visible;
                if (row.dataset.status === 'فعال') active++;
                else other++;
            }
        });

        document.getElementById('statTotal').textContent = visible.toLocaleString('fa-IR');
        document.getElementById('statActive').textContent = active.toLocaleString('fa-IR');
        document.getElementById('statOther').textContent = other.toLocaleString('fa-IR');
        document.getElementById('tableInfo').textContent =
            'نمایش ' + visible.toLocaleString('fa-IR') + ' اتاق از ' + totalRows.toLocaleString('fa-IR');

        let emptyRow = document.getElementById('emptyFilterRow');
        if (visible === 0) {
            if (!emptyRow) {
                emptyRow = document.createElement('tr');
                emptyRow.id = 'emptyFilterRow';
                emptyRow.innerHTML = '<td colspan="6" class="text-center text-muted py-4">' +
                    '<i class="la la-inbox font-large-2 d-block mb-1"></i>اتاقی با این فیلتر یافت نشد</td>';
                document.getElementById('roomsBody').appendChild(emptyRow);
            }
            emptyRow.style.display = '';
        } else if (emptyRow) {
            emptyRow.style.display = 'none';
        }
    }

    document.getElementById('btnFilter').addEventListener('click', applyFilter);
    document.getElementById('filterSearch').addEventListener('keyup', function (e) {
        if (e.key === 'Enter') applyFilter();
    });
    ['filterType', 'filterStatus'].forEach(function (id) {
        document.getElementById(id).addEventListener('change', applyFilter);
    });

    document.querySelectorAll('.btn-delete').forEach(function (btn) {
        btn.addEventListener('click', function () {
            if (confirm('آیا از حذف این اتاق مطمئن هستید؟')) {
                alert('حذف اتاق — پس از اتصال به سرور فعال می‌شود.');
            }
        });
    });
})();
</script>

@endsection
