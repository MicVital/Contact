@extends('layouts.master')

@section('title')
    Contact | @parent
@stop
@section('meta')
    <meta name="title" content="Contact @setting('core::site-name')" />
    <meta name="description" content="Contact @setting('core::site-name')" />
@stop

@section('content')
    <!-- ========================
      page title
   =========================== -->
    <section id="pageTitle" class="page-title text-center bg-overlay bg-overlay-3 bg-parallax">
        <div class="bg-img"><img src="{{ asset('themes/afrovolunteer/images/page-titles/1.jpg') }}" alt="background"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
                    <h1 class="pagetitle__heading">Contact Afro Empire</h1>
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ========================
  Default Page Layout
=========================== -->
    <section id="aboutLayout2" class="about about-layout2 pt-30 pb-40">
        <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-9 offset-xl-1">
                        <div class="heading heading-3 mb-50">
                            <span class="heading__subtitle">Have some misgivings or require more information?</span>
                            <h2 class="heading__title">Contact Us</h2>
                        </div><!-- /heading -->
                    </div><!-- /.col-xl-9 -->
                </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="content-block --contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-10 col-md-5 col-lg-4">
                                    <div class="contact-panel mb-40 feature-item feature-list-item">
                                        <h6 class="contact__panel-title">Contact Details</h6>
                                        <ul class="contact__panel-list list-unstyled">
                                            <li><i class="fa fa-envelope-o"></i><span>Post Office office box 2210</span></li>
                                            <li><i class="fa fa-map-marker"></i><span>Koforidua Mile 50-Eastern Region Ghana - West Africa</span></li>
                                            <li><i class="fa fa-envelope"></i><span>Email: info@afrovolunteer.org </span></li>
                                            <li><i class="fa fa-envelope"></i><span>Email: afroempire14@gmail.com </span></li>
                                            <li><i class="icon-phone"></i><span> (+233) 209 415 003 </span></li>
                                            <li><i class="icon-phone"></i><span> (+19) 294 167 463</span></li>
                                        </ul>
                                    </div>
                                    <div class="contact-panel feature-item feature-list-item">
                                        <h6 class="contact__panel-title">Social Media</h6>
                                        <ul class="contact__panel-list list-unstyled">
                                            <li><i class="fa fa-facebook"></i><span> https://fb.me/afroempire</span></li>
                                            <li><i class="fa fa-twitter"></i><span> @afroempire</span></li>
                                            <li><i class="fa fa-instagram"></i><span>   @afroempire</span></li>
                                        </ul>
                                    </div>
                                </div><!-- /.col-lg-4 -->
                                <div class="col-md-7 col-lg-8">
                                    {!! Form::open(['route' => 'public.contact.submit', 'method' => 'post']) !!}
                                    @include('partials.notifications')
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                <label for="name" class="control-label">{{ trans('contact::contact.full-name') }}<span>*</span></label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                                {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                                <label for="email" class="control-label">{{ trans('contact::contact.email') }}<span>*</span></label>
                                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                                {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('company') ? 'has-error' : '' }}">
                                                <label for="company" class="control-label">{{ trans('contact::contact.company') }}</label>
                                                <input type="text" class="form-control" name="company" id="company" value="{{ old('company') }}">
                                                {!! $errors->first('company', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group {{ $errors->has('phone') ? 'has-error' : '' }}">
                                                <label for="phone" class="control-label">{{ trans('contact::contact.phone') }}</label>
                                                <input type="text" class="form-control" name="phone" id="phone" value="{{ old('phone') }}">
                                                {!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                                                <label for="message" class="control-label">{{ trans('contact::contact.message') }}</label><br>
                                                <textarea name="message" id="message" class="form-control">{{ old('message') }}</textarea>
                                                {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-primary" value="{{ trans('contact::contact.send') }}"/>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop
