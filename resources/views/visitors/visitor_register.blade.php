@extends('layouts.generalLayouts')
@section('content')
<div class="row"><div class="col-12"><div class="card shadow-sm border-0">
<div class="card-content collapse show"><div class="card-body">
<form>
<div class="card border mb-0">
<div class="card-header bg-light py-1"><h6 class="mb-0 font-weight-bold"><i class="la la-user-plus text-primary"></i> اطلاعات مهمان</h6></div>
<div class="card-body">
<div class="row">
<div class="col-md-6 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-user text-primary"></i> ساکن میزبان</label>
<select class="form-control border-primary"><option>احمد نوری — A-12</option><option>علی رحیمی — B-07</option></select>
</div>
<div class="col-md-6 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-user text-primary"></i> نام مهمان</label>
<input type="text" class="form-control border-primary" placeholder="نام کامل مهمان">
</div>
<div class="col-md-6 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-phone text-primary"></i> شماره تماس</label>
<input type="text" class="form-control border-primary" placeholder="07xxxxxxxx">
</div>
<div class="col-md-6 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-id-card text-primary"></i> تذکره / کارت</label>
<input type="text" class="form-control border-primary" placeholder="شماره تذکره">
</div>
<div class="col-md-4 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-calendar text-primary"></i> تاریخ ورود</label>
<input type="datetime-local" class="form-control border-primary">
</div>
<div class="col-md-4 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-calendar-check-o text-primary"></i> تاریخ خروج پیش‌بینی</label>
<input type="datetime-local" class="form-control border-primary">
</div>
<div class="col-md-4 form-group">
<label class="font-weight-bold font-small-3"><i class="la la-toggle-on text-primary"></i> وضعیت</label>
<select class="form-control border-primary"><option selected>داخل خوابگاه</option><option>خروج کرده</option></select>
</div>
<div class="col-12 form-group mb-0">
<label class="font-weight-bold font-small-3"><i class="la la-sticky-note text-primary"></i> هدف بازدید</label>
<input type="text" class="form-control border-primary" placeholder="دیدار خانوادگی، تحویل وسایل و...">
</div>
</div>
</div>
<div class="card-footer bg-light text-right">
<button type="reset" class="btn btn-warning mr-1"><i class="ft-x"></i> لغو</button>
<button type="submit" class="btn btn-primary"><i class="la la-check-square-o"></i> ثبت مهمان</button>
</div>
</div>
</form>
</div></div></div></div></div>
@endsection
