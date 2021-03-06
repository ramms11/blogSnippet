@extends('layouts.backend.app')

@section('title','Ads')

@push('css')

@endpush

@section('content')
    <div class="content-page">
        <div class="content">
            <div class="container-fluid">
                <!-- Vertical Layout | With Floating Label -->
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card-box widget-box-one">
                            <div class="header">
                                <h4>
                                    Add New Ads
                                </h4>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="demo-box">
                                        <select class="bootstrap-select" >
                                            <option>Select</option>
                                            <option>Header</option>
                                            <option>Body</option>
                                            <option>Footer</option>
                                            <option>All</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="body">
                                <label class="form-label">Code Ads</label>
                                <form action="{{ route('admin.ads.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" id="name" class="form-control" name="name">

                                        </div>
                                    </div>

                                    <a  class="btn btn-sm btn-danger m-t-15 waves-effect" href="{{ route('admin.ads.index') }}">BACK</a>
                                    <button type="submit" class="btn btn-sm btn-primary m-t-15 waves-effect">SUBMIT</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

@endpush