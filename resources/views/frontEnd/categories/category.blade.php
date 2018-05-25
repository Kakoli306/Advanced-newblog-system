@extends('frontEnd.layouts.master')

@section('title')
    Category
@endsection

@section('content')
    <div class="container">
            <h4><b>CATEGORY</b></h4>
        <form class="form-horizontal" method="POST" action="{{ url('/addCategory') }}">
            {{ csrf_field() }}
            <div class="row">

                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif

                @if(session('response'))
                    <div class="alert alert-success">{{ session('response')}}</div>
                @endif

                    <div class="col-lg-4 col-md-4"></div>



                        <div class="col-lg-8 col-md-12">

                    <div class="comment-form">

                            <div class="row">


                                <div class="col-sm-6{{ $errors->has('category') ? ' has-error' : '' }}">
                                <div class="col-sm-12">
                                    <input id="category" type="category" class="form-control" name="category" aria-required="true"
                                           placeholder="Enter new category" aria-invalid="true" value="{{ old('category') }}" required autofocus>

                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                  <strong>{{ $errors->first('category') }}</strong>
                              </span>
                               @endif
                                </div><!-- col-sm-6 -->
                                </div>



                                <div class="col-sm-12">
                                    <button class="submit-btn" type="submit" id="form-submit"><b>ADD CATEGORY</b></button>
                                </div><!-- col-sm-12 -->

                            </div><!-- row -->
                    </div>
                        </div>
                        </form>
                    </div><!-- comment-form -->

                </div>
            </div>
        </div>

    @endsection