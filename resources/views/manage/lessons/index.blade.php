{{-- @extends('layouts.manage.manageApp') 

@section('title', 'manage users')
@section('content')
<div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
  <div>
    <h3 class="uk-text-primary">ادارة المستخدمين</h3>
  </div>
  <div>
    <ul class="uk-breadcrumb uk-float-left">
      <li class="uk-disabled uk-text-small">لوحة التحكم</li>
      <li class="uk-disabled uk-text-small">ادارة المستخدمين</li>
    </ul>
  </div>
</div>

<ul>
  @foreach($lessons as $lesson)
  <li>{{ $lesson->course->title }}</li>
  @endforeach
</ul>
@endsection --}}

@extends('layouts.manage.manageApp')

@section('title', 'manage courses')
@section('content')
<div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
  <div>
    <h3 class="uk-text-primary">ادارة الدروس</h3>
  </div>
  <div>
    <ul class="uk-breadcrumb uk-float-left">
      <li class="uk-disabled uk-text-small">لوحة التحكم</li>
      <li class="uk-disabled uk-text-small">ادارة الدورات</li>
    </ul>
  </div>
</div>

<div class="uk-container uk-margin-medium uk-margin-medium-bottom">
  <div class="uk-overflow-auto uk-background-default ee-border">
    <div class="uk-grid-large uk-child-width-1-2 uk-padding-small" uk-grid>
      <div>
        <h4>فلترة نتائج البحث</h4>
        <p class="uk-text-small uk-text-muted">
          يمكن فلترة ابحث في الدورات بحسب عنوان الدورة
        </p>
        <input class="uk-input uk-width-3-4 uk-border-rounded" type="text" placeholder="أدخل اسم المستخدم هنا">
      </div>
      <div class="uk-margin-small-top uk-text-left">
        <a href="#" class="uk-button uk-button-default uk-border-rounded">
          <span uk-icon="icon: plus" class="uk-margin-small-left"></span>
          أضف درسا جديدة
        </a>
      </div>
    </div>

    <table class="uk-table uk-table-hover uk-table-divider">
      <thead>
        <tr>
          <th class="uk-table-shrink">ID</th>
          <th class="uk-table-shrin">عنوان الدرس</th>
          <th class="uk-table-shrin">الدورة</th>
          <th class="uk-table-shrin">نشر الدرس</th>
          <th>تاريخ التسجيل</th>
          <th>المهام</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($lessons as $lesson)
        <tr class="uk-text-small">
          <td class="uk-text-primary ee-en">{{ $lesson->id }}</td>
          <td class="ee-en">{{ $lesson->title }}</td>
          <td class="ee-en">{{ $lesson->course->title }}</td>
          <td>
              @if($lesson->publish > 0)
              <span class="uk-label uk-label-success ee-border">
                الدرس في النشر
              </span>
              @else
              <span class="uk-label uk-background-muted ee-border uk-text-muted">
                الدرس لم ينشر بعد
              </span>
              @endif
          </td>
          <td  class="ee-en">{{ $lesson->created_at }}</td>
          <td>
            <a href="#" class="uk-label uk-background-default ee-border uk-text-muted">
              تعديل
            </a>
            <a href="{{ route('lessons.show', $lesson->slug) }}" class="uk-label uk-background-default ee-border ee-border-blue uk-text-primary">
              عرض
            </a>
            <a class="uk-label uk-background-default ee-border ee-border-red uk-text-danger">حذف</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
