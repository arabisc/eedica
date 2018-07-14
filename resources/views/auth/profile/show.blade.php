@extends('layouts.client.app') 

@section('content')
<div class="uk-container-expand">
  <div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
    <div>
      <h4 class="uk-text-primary">
        <span uk-icon="icon: user" class="uk-margin-small-left"></span>
        الملف الشخصي
      </h4>
    </div>
    <div>
      <ul class="uk-breadcrumb uk-float-left">
        <li>
          <a href="#">الرئيسة</a>
        </li>
        <li class="uk-disabled">
          <a href="#" class="ee-en">{{ auth()->user()->name }}</a>
        </li>
      </ul>
    </div>
  </div>
</div>{{-- Breadcamp --}}

<div class="uk-container uk-margin uk-flex uk-flex-center">
  
  <div class="uk-width-1-3 uk-background-default uk-border-rounded uk-padding-small uk-margin-left ee-border">
    <p>الصورة الشخصية</p>
  </div>{{-- Column --}}
  
  <div class="uk-width-2-3 uk-background-default uk-padding-small uk-margin-right uk-border-rounded ee-border">
    <p>ألبوم الصور</p>
    <div uk-slider>
      <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-2@m">
        @foreach($avatars as $avatar)
        <li>
          <img src="{{ $avatar->getUrl() }}" alt="">
        </li>
        @endforeach
      </ul>
    </div>
  </div>{{-- Column --}}
</div>{{-- Grid --}}

{{-- @foreach($avatars as $avatar)
  {{ $avatar }}
  @endforeach --}}
  
  <form action="#" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="uk-margin">
      <div uk-form-custom="target: true">
        <input type="file" name="avatar">
        <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
      </div>
      <button class="uk-button uk-button-default">Submit</button>
    </div>
  </form>
  @endsection