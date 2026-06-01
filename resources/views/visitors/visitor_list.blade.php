@extends('layouts.generalLayouts')
@section('content')
<div class="row"><div class="col-12"><div class="card shadow-sm border-0">
<div class="card-content collapse show"><div class="card-body">
<div class="text-left mb-3"><a href="{{ route('visitors.register') }}" class="btn btn-primary btn-sm"><i class="la la-plus"></i> ثبت مهمان</a></div>
<div class="row mb-3">
<div class="col-md-4"><div class="card border mb-0"><div class="card-body py-2 d-flex align-items-center">
<span class="badge badge-info badge-pill p-2 mr-2"><i class="la la-users font-medium-3"></i></span>
<div><h3 class="mb-0 font-weight-bold">۲</h3><small class="text-muted">مهمان فعال (داخل)</small></div></div></div></div>
<div class="col-md-4"><div class="card border mb-0"><div class="card-body py-2 d-flex align-items-center">
<span class="badge badge-primary badge-pill p-2 mr-2"><i class="la la-history font-medium-3"></i></span>
<div><h3 class="mb-0 font-weight-bold">۱۵</h3><small class="text-muted">کل بازدیدها (ماه جاری)</small></div></div></div></div>
<div class="col-md-4"><div class="card border mb-0"><div class="card-body py-2 d-flex align-items-center">
<span class="badge badge-success badge-pill p-2 mr-2"><i class="la la-sign-out font-medium-3"></i></span>
<div><h3 class="mb-0 font-weight-bold">۱۳</h3><small class="text-muted">خروج ثبت‌شده</small></div></div></div></div>
</div>
<div class="table-responsive"><table class="table table-striped table-hover table-bordered mb-0">
<thead class="bg-primary white"><tr>
<th class="border-0">#</th><th class="border-0">مهمان</th><th class="border-0">میزبان</th><th class="border-0">اتاق</th>
<th class="border-0">ورود</th><th class="border-0">خروج</th><th class="border-0">وضعیت</th><th class="border-0 text-center">عملیات</th>
</tr></thead>
<tbody>
<tr><td>۱</td><td class="font-weight-bold">فاطمه نوری</td><td>احمد نوری</td><td><span class="badge badge-info">A-12</span></td><td>1404/03/10 14:00</td><td>—</td><td><span class="badge badge-info">داخل</span></td>
<td class="text-center"><button class="btn btn-sm btn-success"><i class="la la-sign-out"></i> ثبت خروج</button></td></tr>
<tr><td>۲</td><td class="font-weight-bold">محمد رحیمی</td><td>علی رحیمی</td><td><span class="badge badge-info">B-07</span></td><td>1404/03/09 10:30</td><td>1404/03/09 18:00</td><td><span class="badge badge-secondary">خروج</span></td>
<td class="text-center"><div class="btn-group btn-group-sm"><button class="btn btn-outline-primary"><i class="la la-eye"></i></button></div></td></tr>
</tbody></table></div>
</div></div></div></div></div>
@endsection
