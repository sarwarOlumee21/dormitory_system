@extends('layouts.generalLayouts')
@section('content')
<div class="row"><div class="col-12"><div class="card shadow-sm border-0">
<div class="card-content collapse show"><div class="card-body">

<div class="row mb-3">
<div class="col-lg-3 col-md-6 mb-2">
<div class="card border-primary text-center mb-0"><div class="card-body py-2">
<h2 class="text-primary font-weight-bold mb-0">۴۸</h2><small class="text-muted">ساکن فعال</small>
<p class="mb-0 font-small-3 text-success"><i class="la la-arrow-up"></i> +۳ این ماه</p>
</div></div></div>
<div class="col-lg-3 col-md-6 mb-2">
<div class="card border-info text-center mb-0"><div class="card-body py-2">
<h2 class="text-info font-weight-bold mb-0">۲۴</h2><small class="text-muted">اتاق</small>
<p class="mb-0 font-small-3">۸۵٪ اشغال</p>
</div></div></div>
<div class="col-lg-3 col-md-6 mb-2">
<div class="card border-success text-center mb-0"><div class="card-body py-2">
<h2 class="text-success font-weight-bold mb-0">۱۵۶,۰۰۰</h2><small class="text-muted">درآمد ماه (افغانی)</small>
<p class="mb-0 font-small-3">۹ از ۱۲ پرداخت</p>
</div></div></div>
<div class="col-lg-3 col-md-6">
<div class="card border-warning text-center mb-0"><div class="card-body py-2">
<h2 class="text-warning font-weight-bold mb-0">۵</h2><small class="text-muted">درخواست باز</small>
<p class="mb-0 font-small-3">۱ فوری</p>
</div></div></div>
</div>

<div class="row">
<div class="col-lg-6 mb-3">
<div class="card border h-100 mb-0">
<div class="card-header bg-light"><h6 class="mb-0 font-weight-bold"><i class="la la-home text-primary"></i> اشغال اتاق‌ها</h6></div>
<div class="card-body">
@foreach([['A','12','75'],['B','8','50'],['C','6','100'],['D','4','25']] as $b)
<div class="mb-2">
<div class="d-flex justify-content-between font-small-3"><span>بلوک {{ $b[0] }}</span><span>{{ $b[2] }}٪</span></div>
<div class="progress" style="height:8px">
<div class="progress-bar bg-primary" style="width:{{ $b[2] }}%"></div>
</div>
<small class="text-muted">{{ $b[1] }} اتاق</small>
</div>
@endforeach
</div></div></div>
<div class="col-lg-6 mb-3">
<div class="card border h-100 mb-0">
<div class="card-header bg-light"><h6 class="mb-0 font-weight-bold"><i class="la la-money text-primary"></i> وضعیت پرداخت‌ها (۶ ماه)</h6></div>
<div class="card-body">
<table class="table table-sm table-bordered mb-0 font-small-3">
<thead class="bg-light"><tr><th>ماه</th><th>مبلغ</th><th>وضعیت</th></tr></thead>
<tbody>
<tr><td>حمل ۱۴۰۴</td><td>۱۵۶,۰۰۰</td><td><span class="badge badge-success">۷۵٪</span></td></tr>
<tr><td>جوزا ۱۴۰۴</td><td>۱۶۸,۰۰۰</td><td><span class="badge badge-success">۱۰۰٪</span></td></tr>
<tr><td>جوزا ۱۴۰۳</td><td>۱۴۲,۰۰۰</td><td><span class="badge badge-warning">۹۰٪</span></td></tr>
</tbody></table>
</div></div></div>
</div>

<div class="card border">
<div class="card-header bg-light"><h6 class="mb-0 font-weight-bold"><i class="la la-download text-primary"></i> خروجی گزارش (دیمو)</h6></div>
<div class="card-body">
<div class="btn-group flex-wrap">
<button class="btn btn-outline-primary mb-1"><i class="la la-file-pdf-o"></i> PDF ساکنین</button>
<button class="btn btn-outline-primary mb-1"><i class="la la-file-excel-o"></i> Excel پرداخت‌ها</button>
<button class="btn btn-outline-primary mb-1"><i class="la la-file-text-o"></i> گزارش قراردادها</button>
<button class="btn btn-outline-primary mb-1"><i class="la la-print"></i> چاپ خلاصه</button>
</div>
<div class="alert alert-info mt-2 mb-0 py-1 font-small-3"><i class="la la-info-circle"></i> در نسخه نهایی، گزارش‌ها از دیتابیس تولید می‌شوند.</div>
</div>
</div>

</div></div></div></div></div>
@endsection
