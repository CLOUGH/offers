@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Add an Offer
                </div>

                <div class="panel-body">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{route('admin.offers.index')}}">Offers</a>
                        </li>
                        <li class="active">Create</li>
                    </ol>
                    <form class="form-horizontal" method="POST" action="{{route('admin.offers.store')}}">
                        <fieldset>

                            {{ csrf_field() }}

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="name">Name</label>
                                <div class="col-md-8">
                                    <input id="name" name="name" placeholder="" class="form-control input-md" required=""
                                        type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="description">Description</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="description" name="description" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="image_50">50x50 Image</label>
                                <div class="col-md-8">
                                    <input id="image_50" name="image_50" placeholder="http://" class="form-control input-md"
                                        required="" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="image_350">350x500 Image</label>
                                <div class="col-md-8">
                                    <input id="image_350" name="image_350" placeholder="http://" class="form-control input-md"
                                        required="" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="link">Link</label>
                                <div class="col-md-8">
                                    <input id="link" name="link" placeholder="http://" class="form-control input-md"
                                        required="" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="submit"></label>
                                <div class="col-md-4">
                                    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection