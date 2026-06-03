@extends('layouts.generalLayouts')

@section('content')

<style>
.top-banner {
    background: linear-gradient(135deg, #1a56db 0%, #1e3a8a 100%);
    border-radius: 16px 16px 0 0;
    padding: 28px 28px 48px;
    position: relative;
    overflow: hidden;
}
.top-banner::before {
    content: '';
    position: absolute;
    top: -40px; right: -40px;
    width: 180px; height: 180px;
    border-radius: 50%;
    background: rgba(255,255,255,.07);
}
.top-banner::after {
    content: '';
    position: absolute;
    bottom: -30px; left: 60px;
    width: 120px; height: 120px;
    border-radius: 50%;
    background: rgba(255,255,255,.05);
}
.banner-icon {
    width: 48px; height: 48px;
    background: rgba(255,255,255,.18);
    border-radius: 12px;
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 14px;
}
.form-outer {
    background: #fff;
    border: 1px solid #e2e8f0;
    border-top: none;
    border-radius: 0 0 16px 16px;
    padding: 28px;
}
.section-pill {
    display: inline-flex; align-items: center; gap: 7px;
    background: #e8f0fe;
    border-radius: 20px;
    padding: 5px 14px 5px 10px;
    margin-bottom: 18px;
    direction: rtl;
}
.section-pill i    { font-size: 15px; color: #1a56db; }
.section-pill span { font-size: 12px; font-weight: 600; color: #1a56db; }
.finput {
    width: 100%;
    padding: 9px 12px;
    font-size: 13.5px;
    direction: rtl;
    border: 1.5px solid #e2e8f0;
    border-radius: 10px;
    background: #fff;
    color: #1e293b;
    outline: none;
    transition: border-color .2s, box-shadow .2s;
}
.finput:focus {
    border-color: #1a56db;
    box-shadow: 0 0 0 3px rgba(26,86,219,.1);
}
.finput:hover:not(:focus) { border-color: #94a3b8; }
.flabel {
    font-size: 12.5px; font-weight: 600;
    color: #475569;
    direction: rtl;
    margin-bottom: 5px;
    display: flex; align-items: center; gap: 5px;
}
.flabel i { color: #1a56db; }
.required-star { color: #e24b4a; }
.sep { height: 1px; background: #f1f5f9; margin: 22px 0; }
</style>

<div class="row justify-content-center">
  <div class="col-12 col-xl-9">

    <div class="top-banner">
      <div class="banner-icon">
        <i class="la la-user-plus text-white" style="font-size:22px;"></i>
      </div>
      <h5 class="text-white mb-1 font-weight-bold" style="direction:rtl;">ثبت ساکن جدید</h5>
      <p class="mb-0" style="color:rgba(255,255,255,.75);font-size:13px;direction:rtl;">لطفاً اطلاعات ساکن را با دقت پُر کنید</p>
    </div>

    <div class="form-outer">
      <form>

        <div class="section-pill">
          <i class="la la-id-card"></i>
          <span>اطلاعات شخصی</span>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="flabel"><i class="la la-user"></i> نام کامل <span class="required-star">*</span></label>
            <input type="text" class="finput" name="name" placeholder="نام و تخلص">
          </div>
          <div class="col-md-6 mb-3">
            <label class="flabel"><i class="la la-male"></i> نام پدر <span class="required-star">*</span></label>
            <input type="text" class="finput" name="father_name" placeholder="نام پدر">
          </div>
          <div class="col-md-6 mb-3">
            <label class="flabel"><i class="la la-phone"></i> شماره تلیفون <span class="required-star">*</span></label>
            <input type="text" class="finput" name="phone_number" placeholder="07xx-xxx-xxxx">
          </div>
          <div class="col-md-6 mb-3">
            <label class="flabel"><i class="la la-map-marker"></i> شهر / ولایت</label>
            <input type="text" class="finput" name="city_name" placeholder="نام شهر یا ولایت">
          </div>
          <div class="col-md-6 mb-0">
            <label class="flabel"><i class="la la-home"></i> نمبر اتاق <span class="required-star">*</span></label>
            <select class="finput" name="room_number">
              <option value="">-- انتخاب اتاق --</option>
              <option>A-12</option>
              <option>B-07</option>
              <option>C-03</option>
            </select>
          </div>
        </div>

        <div class="sep"></div>

        <div class="section-pill">
          <i class="la la-briefcase"></i>
          <span>اطلاعات شغلی</span>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label class="flabel"><i class="la la-building"></i> شغل</label>
            <input type="text" class="finput" name="occupation" placeholder="عنوان شغلی">
          </div>
          <div class="col-md-6 mb-3">
            <label class="flabel"><i class="la la-phone-square"></i> شماره محل کار</label>
            <input type="text" class="finput" name="work_phone" placeholder="شماره تلیفون دفتر">
          </div>
          <div class="col-12 mb-0">
            <label class="flabel"><i class="la la-map-pin"></i> موقعیت شغل</label>
            <input type="text" class="finput" name="occupation_location" placeholder="آدرس کامل محل کار">
          </div>
        </div>

        <div class="sep"></div>

        <div class="d-flex justify-content-between align-items-center" style="direction:rtl;">
          <small class="text-muted"><i class="la la-info-circle"></i> فیلدهای ستاره‌دار اجباری است</small>
          <div class="d-flex gap-2">
            <a href="{{ route('resident.list') }}" class="btn btn-outline-secondary btn-sm px-4">
              <i class="ft-x mr-1"></i> لغو
            </a>
            <button type="submit" class="btn btn-primary btn-sm px-4" style="background:#1a56db;border:none;border-radius:10px;">
              <i class="la la-check-circle mr-1"></i> ثبت ساکن
            </button>
          </div>
        </div>

      </form>
    </div>

  </div>
</div>

@endsection