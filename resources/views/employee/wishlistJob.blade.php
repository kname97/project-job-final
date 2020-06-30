@extends('layouts.master')
@section('title','Danh sách các công việc yêu thích')
@section('content')



    <div class="list-company">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="row">
                <div class="col-md-12">
                    <div class="review-list ">
                        <div class="review-list-item row" href="#myModal" data-toggle="modal">
                            <img class="review-list-item-img col-2"
                                 src="https://cdn.itviec.com/employers/toshiba-software-development-viet-nam-co-ltd/logo/w170/qmEermNPcp6FuQfTvY7J91na/toshiba-software-development-viet-nam-co-ltd-logo.png"
                                 alt="List user">
                            <div class="review-list-item-text col-10">
                                <h3>
                                    <a href="#">Công ty trách nhiệm hữu hạng</a>
                                    <span class="company-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                             <i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    <span class="badge badge-pill badge-primary">
                                            260
                                        </span>
                                </h3>
                                <h4>Brunch this weekend?</h4>
                                <p> I'll be in your neighborhood doing errands</p>
                            </div>
                            <div class="list-item-right"></div>
                        </div>
                        <div class="review-list-item row">
                            <img class="review-list-item-img col-2"
                                 src="https://cdn.itviec.com/employers/toshiba-software-development-viet-nam-co-ltd/logo/w170/qmEermNPcp6FuQfTvY7J91na/toshiba-software-development-viet-nam-co-ltd-logo.png"
                                 alt="List user">
                            <div class="review-list-item-text col-10">
                                <h3><a href="#">Catherine Crawford</a></h3>
                                <h4>Brunch this weekend?</h4>
                                <p> I'll be in your neighborhood doing errands</p>
                            </div>
                        </div>
                        <div class="review-list-item row">
                            <img class="review-list-item-img col-2"
                                 src="https://cdn.itviec.com/employers/toshiba-software-development-viet-nam-co-ltd/logo/w170/qmEermNPcp6FuQfTvY7J91na/toshiba-software-development-viet-nam-co-ltd-logo.png"
                                 alt="List user">
                            <div class="review-list-item-text col-10">
                                <h3><a href="#">Rosemary Jimenez</a></h3>
                                <h4>Brunch this weekend?</h4>
                                <p> I'll be in your neighborhood doing errands</p>
                            </div>
                        </div>
                        <div class="review-list-item row">
                            <img class="review-list-item-img col-2"
                                 src="https://cdn.itviec.com/employers/toshiba-software-development-viet-nam-co-ltd/logo/w170/qmEermNPcp6FuQfTvY7J91na/toshiba-software-development-viet-nam-co-ltd-logo.png"
                                 alt="List user">
                            <div class="review-list-item-text col-9">
                                <h3><a href="#">Guy Carpenter</a></h3>
                                <h4>Brunch this weekend?</h4>
                                <p> I'll be in your neighborhood doing errands</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <nav aria-label="Page navigation example">
                <ul class="pagination pg-blue justify-content-end">
                    <li class="page-item disabled">
                        <a class="page-link" tabindex="-1">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item">
                        <a class="page-link">Next</a>
                    </li>
                </ul>
            </nav>
        </div>


    </div>

@endsection
