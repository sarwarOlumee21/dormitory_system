@extends('layouts.generalLayouts')
@section('content')
<div class="row"><div class="col-12"><div class="card shadow-sm border-0">
<div class="card-content collapse show"><div class="card-body">

<div class="row">
<div class="col-lg-6 mb-3">
<div class="card border mb-0">
<div class="card-header bg-light py-1"><h6 class="mb-0 font-weight-bold"><i class="la la-building text-primary"></i> اطلاعات خوابگاه</h6></div>
<div class="card-body">
<div class="form-group">
<label class="font-weight-bold font-small-3">نام خوابگاه</label>
<input type="text" class="form-control border-primary" value="خوابگاه لیلیه">
</div>
<div class="form-group">
<label class="font-weight-bold font-small-3">آدرس</label>
<input type="text" class="form-control border-primary" value="کابل، ناحیه ۱۰">
</div>
<div class="form-group">
<label class="font-weight-bold font-small-3">شماره تماس مدیریت</label>
<input type="text" class="form-control border-primary" value="0700000000">
</div>
<div class="form-group mb-0">
<label class="font-weight-bold font-small-3">ایمیل</label>
<input type="email" class="form-control border-primary" value="info@liliyeh.af">
</div>
</div></div>
</div>
<div class="col-lg-6 mb-3">
<div class="card border mb-0">
<div class="card-header bg-light py-1"><h6 class="mb-0 font-weight-bold"><i class="la la-money text-primary"></i> تنظیمات مالی</h6></div>
<div class="card-body">
<div class="form-group">
<label class="font-weight-bold font-small-3">اجاره ماهانه پیش‌فرض (افغانی)</label>
<input type="number" class="form-control border-primary" value="3500">
</div>
<div class="form-group">
<label class="font-weight-bold font-small-3">جریمه تأخیر (افغانی / روز)</label>
<input type="number" class="form-control border-primary" value="50">
</div>
<div class="form-group mb-0">
<label class="font-weight-bold font-small-3">روز سررسید پرداخت</label>
<select class="form-control border-primary">
@for($d=1;$d<=28;$d++)<option {{ $d==15?'selected':'' }}>{{ $d }} هر ماه</option>@endfor
</select>
</div>
</div></div>
</div>
</div>

<div class="card border mb-3">
<div class="card-header bg-light py-1"><h6 class="mb-0 font-weight-bold"><i class="la la-gavel text-primary"></i> قوانین عمومی (دیمو)</h6></div>
<div class="card-body">
<textarea class="form-control border-primary" rows="4">۱. رعایت سکوت بعد از ساعت ۱۰ شب الزامی است.
۲. ورود مهمان فقط با ثبت در سیستم مجاز است.
۳. پرداخت اجاره تا تاریخ ۱۵ هر ماه الزامی است.</textarea>
</div>
</div>

<div class="card border">
<div class="card-header bg-light py-1"><h6 class="mb-0 font-weight-bold"><i class="la la-users text-primary"></i> کاربران سیستم (دیمو)</h6></div>
<div class="table-responsive">
<table class="table table-bordered mb-0">
<thead class="bg-light"><tr><th>نام</th><th>نقش</th><th>وضعیت</th></tr></thead>
<tbody>
<tr><td>مدیر لیلیه</td><td><span class="badge badge-primary">مدیر</span></td><td><span class="badge badge-success">فعال</span></td></tr>
<tr><td>کارمند پذیرش</td><td><span class="badge badge-info">اپراتور</span></td><td><span class="badge badge-success">فعال</span></td></tr>
</tbody>
</table>
</div>
</div>

<div class="text-right mt-3">
<button type="button" class="btn btn-warning mr-1"><i class="ft-x"></i> بازنشانی</button>
<button type="button" class="btn btn-primary"><i class="la la-save"></i> ذخیره تنظیمات</button>
</div>

</div></div></div></div></div>
@endsection
