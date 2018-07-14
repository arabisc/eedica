@extends('layouts.manage.manageApp') 

@section('title', $user->name)
@section('content')
<div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
  <div>
    <h3 class="uk-text-primary">ادارة المستخدمين</h3>
  </div>
  <div>
    <ul class="uk-breadcrumb uk-float-left">
      <li class="uk-text-small">
        <a href="#">
          ادارة المستخدمين
        </a>
      </li>
      <li class="uk-disabled uk-text-small">
        <a href="#">
          اضافة مستخدم جديد
        </a>
      </li>
    </ul>
  </div>
</div>
@endsection