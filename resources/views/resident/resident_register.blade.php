@extends('layouts.generalLayouts')
@section('content')

            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h2 class="card-title" id="basic-layout-colored-form-control">ساکنین لیلیه</h2>
                </div>
                <div class="card-content collapse show">
                  <div class="card-body">
                    <form class="form">
                      <div class="form-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput1"> نام کامل</label>
                              <input type="text" id="userinput1" class="form-control border-primary" placeholder="نام کامل"
                              name="name">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput2"> نام پدر</label>
                              <input type="text" id="userinput2" class="form-control border-primary" placeholder="نام پدر"
                              name="father_name">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput3">شماره تلیفون</label>
                              <input type="text" id="userinput3" class="form-control border-primary" placeholder="شماره تلیفون"
                              name="phone_number">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput4"> نام شهر</label>
                              <input type="text" id="userinput4" class="form-control border-primary" placeholder="نام شهر"
                              name="city_name">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput3">نمبر اتاق </label>
                              <input type="text" id="userinput3" class="form-control border-primary" placeholder="نمبر اتاق "
                              name="room_number">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput4"> شغل </label>
                              <input type="text" id="userinput4" class="form-control border-primary" placeholder="شغل"
                              name="occupation">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput3">شماره تلیفون</label>
                              <input type="text" id="userinput3" class="form-control border-primary" placeholder="شماره تلیفون"
                              name="phone_number">
                            </div>
                          </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              <label for="userinput3">موقعیت شغل </label>
                              <input type="text" id="userinput3" class="form-control border-primary" placeholder="موقعیت شغل"
                              name="occupation_location">
                            </div>
                          </div>
                        </div>
                      <div class="form-actions right">
                        <button type="button" class="btn btn-warning mr-1">
                          <i class="ft-x"></i> Cancel
                        </button>
                        <button type="submit" class="btn btn-primary">
                          <i class="la la-check-square-o"></i> Save
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
 
@endsection