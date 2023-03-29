@extends('client.layouts.app')

@section('content')
    <div class="pt-4">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/site">@lang('messages.general.main')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('messages.pages.staticServices.onlineServicesForTheAspiringEntrepreneur')</li>
                </ol>
            </nav>
            <div class="mb-4 pb-2">
                <div class="header">@lang('messages.pages.staticServices.onlineServicesForTheAspiringEntrepreneur')</div>
            </div>
            <div class="row mx-0 ">
                <div class="col-sm-2 service-group me-4 px-0">
                    <a href="https://edu.qolday.kz/course/view.php?id=91">
                        <div class="card mb-3  py-5 h-100 text-center">
                            <div class="card-img-top">
                                {!! file_get_contents('storage/serviceGroup/service1.svg') !!}
                            </div>
                            <div class="card-body py-0 pt-3">
                                <div class="card-text mt-auto">@lang('messages.pages.staticServices.freeEducation')</div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-2 service-group me-4 px-0">
                    <a href="{{route('services.form', ['service_groups_id' => '08ff3cab-5127-4237-8b93-54bd8764b4f5'])}}">
                        <div class="card mb-3  py-5 h-100 text-center">
                            <div class="card-img-top">
                                {!! file_get_contents('storage/serviceGroup/service5.svg') !!}
                            </div>
                            <div class="card-body py-0 pt-3">
                                <div class="card-text mt-auto">@lang('messages.pages.staticServices.startBusiness')</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-2 service-group me-4 px-0">
                    <a href="{{route('services.form', ['service_groups_id' => 'fa8e1bd0-c01b-4492-8d57-b4510cdf5324'])}}">
                        <div class="card mb-3  py-5 h-100 text-center">
                            <div class="card-img-top">
                                {!! file_get_contents('storage/serviceGroup/service4.svg') !!}
                            </div>
                            <div class="card-body py-0 pt-3">
                                <div class="card-text mt-auto">@lang('messages.pages.staticServices.businessPlanPreparation')</div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-sm-2 service-group me-4 px-0">
                    <a href="{{route('services.form', ['service_groups_id' => '86fb5edc-82db-47d4-ab31-e9a9285b16ab'])}}">
                        <div class="card mb-3  py-5 h-100 text-center">
                            <div class="card-img-top">
                                {!! file_get_contents('storage/serviceGroup/service2.svg') !!}
                            </div>
                            <div class="card-body py-0 pt-3">
                                <div class="card-text mt-auto">@lang('messages.pages.permittingDocuments.permittingDocuments')</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
