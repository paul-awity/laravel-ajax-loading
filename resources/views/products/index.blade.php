@extends('products.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center">Laravel 5.8 Application with Ajax Load More Button Tutorial</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom: 10px;">
            <a class="btn btn-success " href="{{ route('products.create') }}"> Add product</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    @if(sizeof($products) > 0)
        <table class="table table-bordered" id="post-data">
            <tr>
                <th>Name</th>
                <th>Details</th>
                <th width="280px">Actions</th>
            </tr>
            
            @include('products.data')
            
        </table>
    @else
        <div class="alert alert-alert">Start Adding to the Database.</div>
    @endif

                            <div class="section-row">
                                   <button id="load_more_button"class="primary-button center-block text-center">Load More</button>
                            </div>	
							<div class="ajax-load text-center" style="display:none">
                            	<p><img src="http://demo.itsolutionstuff.com/plugin/loader.gif">Loading More post</p>
                            </div>

@endsection
