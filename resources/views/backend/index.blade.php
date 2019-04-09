@extends('backend.master')
@section('main')
    <div class="large-10 medium-12 small-12 columns light-grey-bg-pattern">
        <div class="row">
            <div class="large-10 columns">
                <div class="page-name">
                    <h3 class="left">{{ trans('message.dashboard') }}</h3>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div id="dashboard">
            <div class="row">
                <div class="large-3 medium-6 small-12 columns">
                    <div class="stats border">
                        <div class="left">
                            {{ trans('message.sales') }}
                            <h3>$97334001</h3>
                        </div>
                        <i class="fi-price-tag right sales"></i>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="large-3 medium-6 small-12 columns">
                    <div class="stats border">
                        <div class="left">
                            {{ trans('message.orders') }}
                            <h3>400</h3>
                        </div>
                        <i class="fi-shopping-cart right orders"></i>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="large-3 medium-6 small-12 columns">
                    <div class="stats border">
                        <div class="left">
                            {{ trans('message.profit') }}
                            <h3>$600</h3>
                        </div>
                        <i class="fi-dollar right profit"></i>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="large-3 medium-6 small-12 columns">
                    <div class="stats border">
                        <div class="left">
                            {{ trans('message.users') }}
                            <h3>100</h3>
                        </div>
                        <i class="fi-torso right user"></i>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="large-8 columns">
                    <div class="custom-panel">
                        <div class="custom-panel-heading">
                            <h4>{{ trans('message.charts') }}</h4>
                        </div>
                        <div class="custom-panel-body">
                            <div id="morris-area-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="large-4 columns">
                    <div class="custom-panel">
                        <div class="custom-panel-heading">
                            <h4>{{ trans('message.charts') }}</h4>
                        </div>
                        <div class="custom-panel-body">
                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>
                </div>
            </div>
            <br />
            <div class="row">
                <div class="large-6 columns">
                    <div class="custom-panel">
                        <div class="custom-panel-heading">
                            <h4>{{ trans('message.quick-message') }}</h4>
                        </div>
                        <div class="custom-panel-body">
                            <label>{{ trans('message.address') }}</label>
                            <input id="Text2" type="text" />
                            <label>{{ trans('message.subject') }}</label>
                            <input id="Text3" type="text" />
                            <label>{{ trans('message.message') }}</label>
                            <textarea></textarea>
                            <a href="#" class="button tiny radius coral-bg right">{{ trans('message.send') }}</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="large-6 columns">
                    <div class="custom-panel">
                        <div class="custom-panel-heading">
                            <h4>{{ trans('message.to-do') }}</h4>
                        </div>
                        <div class="custom-panel-body">
                            <input id="new-todo" type="text" placeholder="{{ trans('message.need-done') }}">
                            <ul id="todo-list">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
