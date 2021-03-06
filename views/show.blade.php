@extends(Config::get('logviewer.layout'))

@section('content')
    <div class="first-content-block alert alert-white clearfix">
        <h3 class="content-title pull-left">
            {{ trans('main.sys_log') }}
        </h3>

        <div class="content-button pull-right">
            <a class="btn btn-sm btn-{{ $current === null || $current === 'all' ? 'primary' : 'default'}}" href="{{ Request::root() }}/{{ $url.'/'.$date.'/all' }}">
                {{ trans('main.all') }}
            </a>
            @foreach ($levels as $level)
                <a class="btn btn-sm btn-{{ $current === $level ? 'primary' : 'default' }}" href="{{ Request::root() }}/{{ $url.'/'.$date.'/'.$level }}">{{ trans('main.' . $level) }}</a>
            @endforeach
            <button data-toggle="modal" data-target="#delete_modal" id="btn-delete" type="button"
                    class="btn btn-sm btn-danger">{{ trans('main.delete_current_log') }}</button>
        </div>
    </div>

    <div class="container-fluid mt10" id="main-container">
        <div class="row">
            @if($logs)
                <div class="col-lg-3">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-primary">
                            <div id="collapse-log-list" class="panel-collapse panel-primary collapse">
                                <div class="panel-heading">
                                    <h5>Available Logs:</h5>
                                </div>
                                <div class="panel-body">
                                    <ul class="nav nav-list">
                                        @foreach ($logs as $file)
                                            <li class="list-group-item">
                                                <a href="{{ Request::root() }}/{{ $url.'/'.$file.'/all' }} ">{{ $file }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12" id="data">
                            <p class="lead"><i class="fa fa-refresh fa-spin fa-lg"></i> Loading...</p>
                        </div>
                    </div>
                </div>
            @else
                <div class="col-lg-12">
                    <div class="alert alert-danger"><p class="lead">There are no logs!</p></div>
                </div>
            @endif
        </div>
    </div>
    <div id="delete_modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Are you sure?</h4>
                </div>
                <div class="modal-body">
                    <p>You are about to delete this log! This process cannot be undone.</p>
                    <p>Are you sure you wish to continue?</p>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-success" href="{{ $url.'/'.$date.'/delete' }}">Yes</a>
                    <button class="btn btn-danger" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/logviewer.css') }}">
@endsection

@section('js')
    <script>
        var laravelLogViewerURL = '{{ $data_url }}';
    </script>
    <script type="text/javascript" src="{{ asset('assets/scripts/logviewer.js') }}"></script>
@endsection