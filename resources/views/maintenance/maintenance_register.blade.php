@extends('layouts.generalLayouts')
@section('content')
<div class="row"><div class="col-12"><div class="card shadow-sm border-0">
<div class="card-content collapse show"><div class="card-body">
<form>
<div class="card border mb-0">
<div class="card-header bg-light py-1"><h6 class="mb-0 font-weight-bold"><i class="la la-wrench text-primary"></i> جزئیات درخواست</h6></div>
<div class="card-body">
<div class="row">
<div class="col-md-6 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-user text-primary"></i> ساکن / گزارش‌دهنده</label>
<select class="form-control border-primary"><option>احمد نوری — A-12</option><option>علی رحیمی — B-07</option><option>مدیریت — عمومی</option></select>
</div>
<div class="col-md-6 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-home text-primary"></i> اتاق</label>
<input type="text" class="form-control border-primary" placeholder="A-12" value="A-12">
</div>
<div class="col-md-6 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-tags text-primary"></i> نوع درخواست</label>
<select class="form-control border-primary">
<option>تعمیر برق</option><option>تعمیر آب</option><option>تعمیر در</option>
<option>نظافت</option><option>شکایت</option><option>سایر</option>
</select>
</div>
<div class="col-md-6 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-flag text-primary"></i> اولویت</label>
<select class="form-control border-primary">
<option>عادی</option><option selected>متوسط</option><option>فوری</option>
</select>
</div>
<div class="col-12 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-align-right text-primary"></i> شرح مشکل</label>
<textarea class="form-control border-primary" rows="4" placeholder="مشکل را به‌طور کامل شرح دهید..."></textarea>
</div>
<div class="col-md-6 form-group mb-0">
<label class="font-weight-bold font-small-3"><i class="la la-toggle-on text-primary"></i> وضعیت</label>
<select class="form-control border-primary"><option selected>جدید</option><option>در حال بررسی</option><option>انجام شده</option></select>
</div>
</div>
</div>
<div class="card-footer bg-light text-right">
<button type="reset" class="btn btn-warning mr-1"><i class="ft-x"></i> لغو</button>
<button type="submit" class="btn btn-primary"><i class="la la-check-square-o"></i> ثبت درخواست</button>
</div>
</div>
</form>
</div></div></div></div></div>
@endsection
