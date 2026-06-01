@extends('layouts.generalLayouts')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card shadow-sm border-0">

            <div class="card-content collapse show">
                <div class="card-body">

                    <form>

                        {{-- Step 1: Select User --}}
                        <div class="card border mb-3">
                            <div class="card-header bg-light d-flex align-items-center py-1">
                                <span class="badge badge-primary badge-pill mr-2">۱</span>
                                <span class="badge badge-light border mr-2 p-1">
                                    <i class="la la-search text-primary"></i>
                                </span>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 font-weight-bold">انتخاب ساکن</h6>
                                    <small class="text-muted">بر اساس کد شخص، اطلاعات به‌صورت خودکار پر می‌شود</small>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="card border-primary bg-light mb-3">
                                    <div class="card-body py-2">
                                        <div class="row align-items-end">
                                            <div class="col-lg-9 form-group mb-0">
                                                <label class="font-weight-bold font-small-3" for="userSelect">
                                                    <i class="la la-user text-primary"></i> کد و نام شخص
                                                </label>
                                                <select class="form-control form-control-lg border-primary" id="userSelect">
                                                    <option value="">— لطفاً یک شخص انتخاب کنید —</option>
                                                    <option
                                                        data-name="احمد نوری"
                                                        data-father="محمد نوری"
                                                        data-phone="0700123456"
                                                        data-city="کابل"
                                                        data-room="A-12"
                                                        data-occupation="محصل"
                                                        data-workphone="0799887766"
                                                        data-location="پوهنتون کابل"
                                                    >1001 — احمد نوری</option>
                                                    <option
                                                        data-name="علی رحیمی"
                                                        data-father="عبدالرحیم"
                                                        data-phone="0700554433"
                                                        data-city="هرات"
                                                        data-room="B-07"
                                                        data-occupation="کارمند"
                                                        data-workphone="0788112233"
                                                        data-location="شرکت خصوصی"
                                                    >1002 — علی رحیمی</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3 form-group mb-0">
                                                <button type="button" class="btn btn-primary btn-lg btn-block" onclick="document.getElementById('userSelect').focus()">
                                                    <i class="la la-filter"></i> جستجو
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <label class="text-muted font-small-3 mb-1">پیش‌نمایش انتخاب‌شده</label>
                                <div id="userPreview" class="card border text-muted text-center py-3 mb-0">
                                    <span><i class="la la-info-circle"></i> هنوز شخصی انتخاب نشده است</span>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8">

                                {{-- Step 2: Personal Info --}}
                                <div class="card border mb-3">
                                    <div class="card-header bg-light d-flex align-items-center py-1">
                                        <span class="badge badge-primary badge-pill mr-2">۲</span>
                                        <span class="badge badge-light border mr-2 p-1">
                                            <i class="la la-id-card text-primary"></i>
                                        </span>
                                        <div>
                                            <h6 class="mb-0 font-weight-bold">اطلاعات شخصی</h6>
                                            <small class="text-muted">نام، تماس و محل سکونت</small>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="font-weight-bold font-small-3" for="name">
                                                    <i class="la la-user text-primary"></i> نام کامل
                                                </label>
                                                <input type="text" id="name" class="form-control bg-light" placeholder="نام کامل" readonly>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-weight-bold font-small-3" for="father_name">
                                                    <i class="la la-male text-primary"></i> نام پدر
                                                </label>
                                                <input type="text" id="father_name" class="form-control bg-light" placeholder="نام پدر" readonly>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-weight-bold font-small-3" for="phone_number">
                                                    <i class="la la-phone text-primary"></i> شماره تلیفون
                                                </label>
                                                <input type="text" id="phone_number" class="form-control bg-light" placeholder="شماره تماس" readonly>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-weight-bold font-small-3" for="city_name">
                                                    <i class="la la-map-marker text-primary"></i> شهر
                                                </label>
                                                <input type="text" id="city_name" class="form-control bg-light" placeholder="نام شهر" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- Step 3: Job Info --}}
                                <div class="card border mb-3">
                                    <div class="card-header bg-light d-flex align-items-center py-1">
                                        <span class="badge badge-primary badge-pill mr-2">۳</span>
                                        <span class="badge badge-light border mr-2 p-1">
                                            <i class="la la-briefcase text-primary"></i>
                                        </span>
                                        <div>
                                            <h6 class="mb-0 font-weight-bold">اطلاعات شغلی و اتاق</h6>
                                            <small class="text-muted">اتاق، شغل و محل کار</small>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label class="font-weight-bold font-small-3" for="room_number">
                                                    <i class="la la-home text-primary"></i> نمبر اتاق
                                                </label>
                                                <input type="text" id="room_number" class="form-control bg-light" placeholder="نمبر اتاق" readonly>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-weight-bold font-small-3" for="occupation">
                                                    <i class="la la-graduation-cap text-primary"></i> شغل
                                                </label>
                                                <input type="text" id="occupation" class="form-control bg-light" placeholder="شغل" readonly>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-weight-bold font-small-3" for="work_phone">
                                                    <i class="la la-phone-square text-primary"></i> شماره محل کار
                                                </label>
                                                <input type="text" id="work_phone" class="form-control bg-light" placeholder="شماره محل کار" readonly>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="font-weight-bold font-small-3" for="occupation_location">
                                                    <i class="la la-map-pin text-primary"></i> موقعیت شغل
                                                </label>
                                                <input type="text" id="occupation_location" class="form-control bg-light" placeholder="موقعیت شغل" readonly>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            {{-- Sidebar: Contract details --}}
                            <div class="col-lg-4">
                                <div class="card border sticky-top mb-3">
                                    <div class="card-header bg-light d-flex align-items-center py-1">
                                        <span class="badge badge-primary badge-pill mr-2">۴</span>
                                        <span class="badge badge-light border mr-2 p-1">
                                            <i class="la la-calendar text-primary"></i>
                                        </span>
                                        <div>
                                            <h6 class="mb-0 font-weight-bold">جزئیات قرارداد</h6>
                                            <small class="text-muted">تاریخ، مدت، وضعیت و پرداخت</small>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label class="font-weight-bold font-small-3">
                                                <i class="la la-calendar-check-o text-primary"></i> تاریخ قرارداد
                                            </label>
                                            <input type="date" class="form-control border-primary">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold font-small-3">
                                                <i class="la la-clock-o text-primary"></i> مدت قرارداد
                                            </label>
                                            <select class="form-control border-primary">
                                                <option>۶ ماه</option>
                                                <option selected>۱ سال</option>
                                                <option>۲ سال</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold font-small-3">
                                                <i class="la la-toggle-on text-primary"></i> وضعیت قرارداد
                                            </label>
                                            <select class="form-control border-primary" name="contract_status" id="contract_status">
                                                <option selected>فعال</option>
                                                <option>غیرفعال</option>
                                                <option>در انتظار</option>
                                            </select>
                                        </div>
                                        <hr class="my-2">
                                        <h6 class="font-weight-bold font-small-3 text-primary mb-2">
                                            <i class="la la-money"></i> پرداخت اجاره
                                        </h6>
                                        <div class="form-group">
                                            <label class="font-weight-bold font-small-3" for="payment_amount">
                                                <i class="la la-dollar text-primary"></i> مبلغ پرداخت‌شده (افغانی)
                                            </label>
                                            <input type="number" id="payment_amount" name="payment_amount"
                                                   class="form-control border-primary" placeholder="3500" min="0" step="100">
                                        </div>
                                        <div class="form-group">
                                            <label class="font-weight-bold font-small-3" for="payment_status">
                                                <i class="la la-check-circle text-primary"></i> وضعیت پرداخت
                                            </label>
                                            <select id="payment_status" name="payment_status" class="form-control border-primary">
                                                <option value="">انتخاب وضعیت</option>
                                                <option selected>پرداخت شده</option>
                                                <option>پرداخت نشده</option>
                                                <option>معوق</option>
                                                <option>جزئی</option>
                                            </select>
                                        </div>
                                        <div class="form-group mb-0">
                                            <label class="font-weight-bold font-small-3" for="months_paid">
                                                <i class="la la-calendar text-primary"></i> تعداد ماه پرداخت‌شده
                                            </label>
                                            <input type="text" id="months_paid" name="months_paid"
                                                   class="form-control border-primary" placeholder="مثلاً 1 یا 2 یا 3">
                                            <small class="text-muted font-small-3">چند ماه اجاره تا این تاریخ پرداخت شده است</small>
                                        </div>
                                        <div class="alert alert-warning mt-2 mb-0 py-1 font-small-3" role="alert">
                                            <i class="la la-lightbulb-o"></i>
                                            پس از انتخاب ساکن، فیلدهای سمت راست به‌طور خودکار پر می‌شوند.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Step 5: Contract text --}}
                        <div class="card border mb-3">
                            <div class="card-header bg-light d-flex align-items-center py-1">
                                <span class="badge badge-primary badge-pill mr-2">۵</span>
                                <span class="badge badge-light border mr-2 p-1">
                                    <i class="la la-shield text-primary"></i>
                                </span>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 font-weight-bold">قرارداد و قوانین</h6>
                                    <small class="text-muted">متن قرارداد و شرایط را وارد کنید</small>
                                </div>
                                <span class="badge badge-warning">پیش‌نویس</span>
                            </div>
                            <div class="card-body">
                                <div class="btn-toolbar mb-2" role="toolbar">
                                    <div class="btn-group btn-group-sm mr-1 mb-1" role="group">
                                        <button type="button" class="btn btn-outline-secondary" onclick="contractInsert('**متن**')" title="پررنگ">
                                            <i class="la la-bold"></i> پررنگ
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" onclick="contractInsert('_متن_')" title="ایتالیک">
                                            <i class="la la-italic"></i> ایتالیک
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" onclick="contractInsert('\n• ')" title="لیست">
                                            <i class="la la-list"></i> بولت
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" onclick="contractInsert('\nماده (): ')" title="ماده">
                                            <i class="la la-paragraph"></i> ماده
                                        </button>
                                        <button type="button" class="btn btn-outline-secondary" onclick="contractInsert('\n---\n')" title="جداکننده">
                                            <i class="la la-minus"></i> جداکننده
                                        </button>
                                    </div>
                                    <button type="button" class="btn btn-sm btn-outline-danger mb-1" onclick="contractClear()">
                                        <i class="la la-trash"></i> پاک کردن
                                    </button>
                                </div>
                                <textarea
                                    id="contractTextarea"
                                    name="contract_text"
                                    class="form-control border-primary"
                                    rows="9"
                                    placeholder="متن قرارداد و قوانین را اینجا وارد کنید..."></textarea>
                                <div class="d-flex align-items-center justify-content-between mt-2">
                                    <small class="text-muted" id="contractCount">۰ کاراکتر</small>
                                    <small class="text-muted">
                                        <i class="la la-keyboard-o"></i> از دکمه‌های بالا برای قالب‌بندی سریع استفاده کنید
                                    </small>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer bg-light d-flex flex-wrap align-items-center justify-content-between">
                            <span class="text-muted font-small-3">
                                <i class="la la-check-circle text-success"></i>
                                قبل از ثبت، اطلاعات را یک‌بار مرور کنید
                            </span>
                            <div>
                                <button type="reset" class="btn btn-warning mr-1">
                                    <i class="ft-x"></i> لغو
                                </button>
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i> ثبت قرارداد
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.getElementById('userSelect').addEventListener('change', function () {
    const selected = this.options[this.selectedIndex];
    const preview = document.getElementById('userPreview');

    const fields = {
        name: selected.dataset.name || '',
        father_name: selected.dataset.father || '',
        phone_number: selected.dataset.phone || '',
        city_name: selected.dataset.city || '',
        room_number: selected.dataset.room || '',
        occupation: selected.dataset.occupation || '',
        work_phone: selected.dataset.workphone || '',
        occupation_location: selected.dataset.location || '',
    };

    Object.keys(fields).forEach(function (id) {
        const el = document.getElementById(id);
        if (el) el.value = fields[id];
    });

    if (this.value && fields.name) {
        preview.className = 'card border-primary mb-0';
        preview.innerHTML =
            '<div class="card-body py-2">' +
                '<div class="d-flex align-items-center justify-content-between flex-wrap">' +
                    '<div>' +
                        '<div class="font-weight-bold">' + fields.name + '</div>' +
                        '<small class="text-muted">' +
                            '<i class="la la-male"></i> ' + (fields.father_name || '—') +
                            ' &nbsp;|&nbsp; <i class="la la-phone"></i> ' + (fields.phone_number || '—') +
                            ' &nbsp;|&nbsp; <i class="la la-home"></i> اتاق ' + (fields.room_number || '—') +
                        '</small>' +
                    '</div>' +
                    '<span class="badge badge-primary badge-pill mt-1 mt-md-0">کد: ' + this.value + '</span>' +
                '</div>' +
            '</div>';
    } else {
        preview.className = 'card border text-muted text-center py-3 mb-0';
        preview.innerHTML = '<span><i class="la la-info-circle"></i> هنوز شخصی انتخاب نشده است</span>';
    }
});

const contractTa = document.getElementById('contractTextarea');
const contractCount = document.getElementById('contractCount');

contractTa.addEventListener('input', function () {
    contractCount.textContent = contractTa.value.length.toLocaleString('fa-IR') + ' کاراکتر';
});

function contractInsert(str) {
    const s = contractTa.selectionStart;
    const e = contractTa.selectionEnd;
    contractTa.value = contractTa.value.slice(0, s) + str + contractTa.value.slice(e);
    contractTa.focus();
    contractTa.selectionStart = contractTa.selectionEnd = s + str.length;
    contractTa.dispatchEvent(new Event('input'));
}

function contractClear() {
    if (confirm('آیا مطمئن هستید که می‌خواهید متن قرارداد را پاک کنید؟')) {
        contractTa.value = '';
        contractTa.dispatchEvent(new Event('input'));
    }
}
</script>

@endsection
