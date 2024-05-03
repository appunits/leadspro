@extends($global['base']['namespace'] . 'layouts.master')

@section('content')
    <div class="section-header">
        <h1>
            Edit Lead
            <a class="btn btn-success" href="{{ route($global['module']['routes']['index']) }}">
                <i class="fas fa-list-ul" aria-hidden="true"></i>
            </a>
        </h1>
        @include($global['base']['namespace'] . 'layouts.partials._breadcrumb')
    </div>

    <div class="section-body" ng-controller="leadCtrl">
        <h2 class="section-title">Edit Lead</h2>
        <p class="section-lead">edit the lead</p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>The Form</h4>
                    </div>
                    <div class="card-body">
                        @include($global['module']['path'] .'._form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <!-- Lead Service -->
    <script src="{{ URL::to('core/admin/app/services/lead.service.js') }}"></script>
    <!-- Lead Controller -->
    <script src="{{ URL::to('core/admin/app/controllers/lead.controller.js') }}"></script>
@endsection
