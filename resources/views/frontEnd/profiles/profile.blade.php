@extends('frontEnd.layouts.master')

@section('title')
   Profile
@endsection

@section('content')
    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}
            </div>
        @endforeach
    @endif

    @if(session('response'))
        <div class="alert alert-success">{{ session('response')}}</div>
    @endif
    <section class="comment-section center-text">
        <div class="container">
            <h4><b>ADD PROFILE</b></h4>
            <form class="form-horizontal" method="POST" action="{{ url('/addProfile') }}" enctype="multipart/form-data">

                {{ csrf_field() }}
                <div class="row">


                    <div class="col-lg-2 col-md-0"></div>

                    <div class="col-lg-8 col-md-12">
                        <div class="comment-form">

                            <div class="row">


                                <div class="col-sm-6 {{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input id="name" type="text" aria-required="true" name="name" class="form-control"
                                           placeholder="Name" value="{{ old('name') }}" aria-invalid="true" required >

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div><!-- col-sm-6 -->



                                <div class="col-sm-12 {{ $errors->has('designation') ? ' has-error' : '' }}">
                                <textarea id="designation" type="text" aria-required="true" name="designation" class="form-control"
                                          value="{{ old('designation') }}" placeholder="Designation" aria-invalid="true" required ></textarea>

                                    @if ($errors->has('designation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                                    @endif
                                </div><!-- col-sm-6 -->




                                <div class="col-sm-12 {{ $errors->has('profile_image') ? ' has-error' : '' }}">
                                    <div class="col-md-6">
                                        <input id="profile_image" type="file" class="form-control" name="profile_image"
                                               required>

                                        @if ($errors->has('profile_image'))
                                            <span class="help-block">
                              <strong>{{ $errors->first('profile_image') }}</strong>
                          </span>
                                        @endif
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <button class="submit-btn" type="submit" id="form-submit"><b>POST PROFILE</b></button>
                            </div><!-- col-sm-12 -->

                        </div><!-- row -->
                    </div>
                </div>
            </form>
        </div>
        </div><!-- comment-form -->

        </div>
        </div>
        </div>

        </div>
    </section>
@endsection