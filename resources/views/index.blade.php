@extends('layouts.master')
@section('title','Chào mừng bạn đến với chúng tôi')
@section('content')

        <div class=" back-ground-index jumbotron card card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Others/gradient1.jpg);">
            <div class="text-white text-center py-5 px-4">

                    <h2 class="card-title h1-responsive pt-3 mb-5 font-bold"><strong>Chào mừng đến với trang tin
                            tuyển dụng và tìm kiếm việc làm của chúng tôi</strong></h2>
                    <p class=" mb-5">Đây là trang mà các nhà tuyển dụng có thể dễ dàng đăng các tin tuyển dụng đẻ tìm kiếm nhân
                        sự cho công ty tổ chức của mình và Người tìm việc có nhiều cơ hội hơn tìm kiếm các viêc làm phù hợp với
                        bản thân.
                    </p>
                <div class="mt-lg-3">
                    @include('form.formFindJob')
                </div>


            </div>



    </div>
    <div class="container">
        <section class="top-jobs" id="feature-jobs">
            <div class="row" id="title-topper">
                <div class=" col-12 text-center">
                    <h2>Các tin tuyển dụng</h2>
                </div>
                <div class="col-12 text-bold text-center">
                    <h2>
                        Tin tuyển dụng <span class="txt-primary">mới nhất</span>
                    </h2>
                </div>
            </div>
            <div class="feature-jobs">
                <div class="row">
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="holder.js/100x180/" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Title</h4>
                                <p class="card-text">Text</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- feature employer --}}
        <section id="feature-employee">
            <div class="row" id="title-toper">
                <div class=" col-12 text-center">
                    <h2>Nhà tuyển dụng tiêu biểu</h2>
                </div>
                <div class="col-12 text-bold text-center">
                    <h2>
                        Các công ty <span class="txt-primary">Hàng đầu</span>
                    </h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="feature-career">
            <div class="row" id="title-toper">
                <div class=" col-12 text-center">

                    <h2>Việc làm theo ngành nghề</h2>
                </div>
                <div class="col-12 text-bold text-center">
                    <h2>
                        Nghành nghề <span class="txt-primary">tuyển dụng</span>
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-3">
                    <div class="card text-white bg-primary">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-white bg-primary">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-white bg-primary">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-white bg-primary">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-white bg-primary">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-white bg-primary">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-white bg-primary">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card text-white bg-primary">
                        <img class="card-img-top" src="holder.js/100px180/" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
