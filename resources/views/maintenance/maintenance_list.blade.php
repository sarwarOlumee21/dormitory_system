@extends('layouts.generalLayouts')
@section('content')
<div class="row"><div class="col-12"><div class="card shadow-sm border-0">
<div class="card-content collapse show"><div class="card-body">
<div class="text-left mb-3"><a href="{{ route('maintenance.register') }}" class="btn btn-primary btn-sm"><i class="la la-plus"></i> درخواست جدید</a></div>
<div class="row mb-3">
<div class="col-md-3 col-6 mb-2"><div class="card border mb-0"><div class="card-body py-2 text-center">
<h3 class="mb-0 text-primary font-weight-bold">۵</h3><small class="text-muted">کل درخواست‌ها</small></div></div></div>
<div class="col-md-3 col-6 mb-2"><div class="card border mb-0"><div class="card-body py-2 text-center">
<h3 class="mb-0 text-warning font-weight-bold">۲</h3><small class="text-muted">در حال بررسی</small></div></div></div>
<div class="col-md-3 col-6 mb-2"><div class="card border mb-0"><div class="card-body py-2 text-center">
<h3 class="mb-0 text-danger font-weight-bold">۱</h3><small class="text-muted">فوری</small></div></div></div>
<div class="col-md-3 col-6"><div class="card border mb-0"><div class="card-body py-2 text-center">
<h3 class="mb-0 text-success font-weight-bold">۲</h3><small class="text-muted">انجام شده</small></div></div></div>
</div>
<div class="table-responsive"><table class="table table-striped table-hover table-bordered mb-0">
<thead class="bg-primary white"><tr>
<th class="border-0">#</th><th class="border-0">ساکن</th><th class="border-0">اتاق</th><th class="border-0">نوع</th>
<th class="border-0">اولویت</th><th class="border-0">تاریخ</th><th class="border-0">وضعیت</th><th class="border-0 text-center">عملیات</th>
</tr></thead>
<tbody>
<tr><td>۱</td><td>احمد نوری</td><td><span class="badge badge-info">A-12</span></td><td>تعمیر برق</td>
<td><span class="badge badge-danger">فوری</span></td><td>1404/03/11</td><td><span class="badge badge-warning">در حال بررسی</span></td>
<td class="text-center"><div class="btn-group btn-group-sm"><button class="btn btn-outline-success"><i class="la la-check"></i></button><button class="btn btn-outline-primary"><i class="la la-eye"></i></button></div></td></tr>
<tr><td>۲</td><td>علی رحیمی</td><td><span class="badge badge-info">B-07</span></td><td>تعمیر آب</td>
<td><span class="badge badge-warning">متوسط</span></td><td>1404/03/10</td><td><span class="badge badge-primary">جدید</span></td>
<td class="text-center"><div class="btn-group btn-group-sm"><button class="btn btn-outline-info"><i class="la la-edit"></i></button></div></td></tr>
<tr><td>۳</td><td>مدیریت</td><td><span class="badge badge-info">D-01</span></td><td>نظافت</td>
<td><span class="badge badge-secondary">عادی</span></td><td>1404/03/08</td><td><span class="badge badge-success">انجام شده</span></td>
<td class="text-center"><div class="btn-group btn-group-sm"><button class="btn btn-outline-primary"><i class="la la-eye"></i></button></div></td></tr>
</tbody></table></div>
</div></div></div></div></div>
@endsection
