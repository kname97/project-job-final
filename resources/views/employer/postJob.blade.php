@extends('layouts.master')
@section('title','Trang đăng tin tuyển dụng')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card px-5 pt-5">
                    <h2 id="heading">Sign Up Your User Account</h2>
                    <form id="msform">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active" id="account"><strong>Thông tin cơ bản</strong></li>
                            <li id="personal"><strong>Personal</strong></li>
                            <li id="payment"><strong>Image</strong></li>
                            <li id="confirm"><strong>Finish</strong></li>
                        </ul>
                        <div class="progress">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                 aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <br> <!-- fieldsets -->
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Thông tin cơ bản</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Bước 1 - 3</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Tiêu đề: *</label>
                                <input type="text" name="title-job" id="title-job"
                                       placeholder="Tiêu đề đơn tuyển dụng"/>
                                <label class="fieldlabels">trực thuộc: *</label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="inputGroupSelect01">
                                        <option selected>Choose...</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <label class="fieldlabels">Mô tả : *</label>
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1"
                                          rows="10"></textarea>

                            </div>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Thông tin chi tiết:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Bước 2 - 3</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">First Name: *</label> <input type="text" name="fname"
                                                                                        placeholder="First Name"/>
                                <label class="fieldlabels">Last Name: *</label> <input type="text" name="lname"
                                                                                       placeholder="Last Name"/> <label
                                    class="fieldlabels">Contact No.: *</label> <input type="text" name="phno"
                                                                                      placeholder="Contact No."/> <label
                                    class="fieldlabels">Alternate Contact No.: *</label> <input type="text"
                                                                                                name="phno_2"
                                                                                                placeholder="Alternate Contact No."/>
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next"/> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Image Upload:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 3 - 4</h2>
                                    </div>
                                </div>
                                <label class="fieldlabels">Upload Your Photo:</label> <input type="file" name="pic"
                                                                                             accept="image/*"> <label
                                    class="fieldlabels">Upload Signature Photo:</label> <input type="file" name="pic"
                                                                                               accept="image/*">
                            </div>
                            <input type="button" name="next" class="next action-button" value="Submit"/> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous"/>
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Finish:</h2>
                                    </div>
                                    <div class="col-5">
                                        <h2 class="steps">Step 4 - 4</h2>
                                    </div>
                                </div>
                                <br><br>
                                <h2 class="purple-text text-center"><strong>SUCCESS !</strong></h2> <br>
                                <div class="row justify-content-center">
                                    <div class="col-3"><img src="https://i.imgur.com/GwStPmg.png" class="fit-image">
                                    </div>
                                </div>
                                <br><br>
                                <div class="row justify-content-center">
                                    <div class="col-7 text-center">
                                        <h5 class="purple-text text-center">You Have Successfully Signed Up</h5>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
