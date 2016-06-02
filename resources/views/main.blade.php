@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">@lang('Welkom bij de portal van Oberr')</div>

                <div class="panel-body">
                    @lang('Klik') <a href="{{ url('/login') }}">@lang('hier')</a> @lang('om in te loggen')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

