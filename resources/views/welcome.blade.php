@extends('layouts.master')
@section('content')

<style>
    .title-bingo{
        font-size: 10px;
        margin-left: 0px;
    }

    .bingo-background-sm{
        display: none;
    }

    .bingo-background-md{
        display: none;
    }

    .bingo-background{
        display: none;
    }


    @media screen and (min-width: 300px) {
        .title-bingo{
            font-size: 40px;
        }

        .bingo-background-sm{
            display: block;
        }

        .bingo-background-md{
            display: none;
        }

        .bingo-background{
            display: none;
        }

    }

    @media screen and (min-width: 751px) {
        .title-bingo{
            font-size: 50px;
            margin-left: 10px;
        }

        .bingo-background-sm{
            display: none;
        }

        .bingo-background-md{
            display: block;
        }

        .bingo-background{
            display: none;
        }

        .font-size-h1{
            font-size: 20px !important;
        }
    }

    @media screen and (min-width: 1200px) {
        .title-bingo{
            font-size: 150px;
        }

        .bingo-background-sm{
            display: none;
        }

        .bingo-background-md{
            display: none;
        }

        .bingo-background{
            display: block;
        }

    }

</style>
<div class="container">
    <div class="bingo-background row bgi-size-cover bgi-position-center" style="background: url({{asset('img/fondo.png')}}) no-repeat center; background-size: contain; background-position: right;">
        <h1 class="col-12 error-title font-weight-boldest text-info mt-10 mt-md-0 mb-12 title-bingo" style="color: #842e52 !important;">RESTMENU</h1>
        <div class="col-lg-6 col-12 m-0 row">
            <div class="col-12 row">
                <p class="font-size-h1 font-weight-boldest text-dark-75 ml-5">Resmenú la nueva forma de revisar tu menu.</p>
            </div>
        </div>
    </div>

    <div class="container m-0 bingo-background-sm row">
        <h1 class="col-12 font-weight-boldest text-info title-bingo" style="text-align:center; white-space: nowrap;color: #842e52 !important;">RESTMENU</h1>
        <div class="container">
            <div class="bgi-size-cover bgi-position-center mr-15 mt-6" style="background: url({{asset('img/fondo.png')}}) no-repeat center; background-size: contain; background-position: center; height: 100px;">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12 m-0 row">
                <div class="col-12 row">
                    <p class="col-12 font-size-h1 font-weight-boldest text-dark-75">Resmenú la nueva forma de revisar tu menu.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bingo-background-md row bgi-size-cover bgi-position-center" style="background: url({{asset('img/fondo.png')}}) no-repeat center; background-size: contain; background-position: right;">
        <h1 class="col-12 error-title font-weight-boldest text-info mt-10 mt-md-0 mb-12 title-bingo" style="color: #842e52 !important;">RESTMENU</h1>
        <div class="col-lg-6 col-12 m-0 row">
            <div class="col-12 row">
                <p class="col-12 font-size-h1 font-weight-boldest text-dark-75">Resmenú la nueva forma de revisar tu menu.</p>
            </div>
        </div>
    </div>

    <div class="container pt-20">
        <div class="row">
            <div class="col-sm-6 col-12">
                <div class="card card-custom mb-2 bg-diagonal bg-diagonal-light-primary">
                    <div class="card-body">
                        <div class="row d-flex align-items-center justify-content-between p-4">
                            <div class="col-sm-12 d-flex flex-column mr-5">
                                <a class="h4 text-dark text-hover-primary mb-5">Escanea tu menú</a>
                            </div>
                            <div class="col-sm-12 flex-shrink-0">
                                <a href="{{asset('/escanear-menu')}}" class="btn font-weight-bolder text-uppercase font-size-lg btn-primary py-3 px-6">Escanear</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="card card-custom mb-2 bg-diagonal bg-diagonal-light-success">
                    <div class="card-body">
                        <div class="row d-flex align-items-center justify-content-between p-4">
                            <div class="col-sm-12 d-flex flex-column mr-5">
                                <a class="h4 text-dark text-hover-primary mb-5">Revisa tu menú</a>
                            </div>
                            <div class="col-sm-12 flex-shrink-0">
                                <a href="{{asset('/revisar-menu')}}" class="btn font-weight-bolder text-uppercase font-size-lg btn-success py-3 px-6">Revisar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop
