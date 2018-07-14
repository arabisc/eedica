@extends('layouts.client.app') 

@section('title', 'All Courses')
@section('content')
<div class="uk-container-expand uk-padding-small" id="courses">
  <div class="uk-child-width-1-1" uk-grid>
    {{-- <div>
      <h2>
        <span class="uk-text-bold uk-text-danger"
        uk-icon="icon: info; ratio: 3"></span>
      </h2>
      <h2>أي أيديكا</h2>
    </div> --}}

    <div>
      <h4>فلترة نتائج البحث</h4>
      <p class="uk-text-small uk-text-muted">
        يمكن فلترة ابحث في الدورات بحسب عنوان الدورة
      </p>
      <div class="uk-width-1-1 uk-inline">
        <a class="uk-form-icon uk-button-danger uk-padding-small"
        uk-icon="icon: search; ratio: 1.3">
        </a>
        <input
        id="search" type="text"
        class="uk-input uk-padding-small"
        name="search"
        placeholder="أدخل اسم الدورة هنا"
        required autofocus>
      </div>
    </div>
  </div>
  <hr class="uk-box-shadow-small uk-margin-medium uk-margin-medium-left">

  <div class="uk-grid-small" uk-grid uk-height-viewport>
    <div class="uk-width-1-5">
      <h4>اختيارات البحث</h4>
      <div class="uk-grid-collapse uk-child-width-1-2 uk-margin" uk-grid>
        <div>
          <span>الأقسام</span>
        </div>
        <div class="uk-text-left">
          <span uk-icon="icon: chevron-down; ratio: 1"></span>
        </div>
      </div>

      <div class="uk-overflow-auto uk-height-medium">
        <ul class="uk-list">
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
        </ul>
      </div>
      <hr class="ee-border">

      <div class="uk-grid-collapse uk-child-width-1-2 uk-margin" uk-grid>
        <div>
          <span>الأقسام</span>
        </div>
        <div class="uk-text-left">
          <span uk-icon="icon: chevron-down; ratio: 1"></span>
        </div>
      </div>
      <div class="uk-overflow-auto uk-height-medium">
        <ul class="uk-list">
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> العلوم الطبيعية</label></li>
          <li><label><input class="uk-checkbox" type="checkbox"> اللغة العربية</label></li>
        </ul>
      </div>
      <hr class="ee-border">

    </div>{{-- Filter Section Column 1 - 5  --}}

    <div class="uk-width-4-5">
      <div class="uk-child-width-1-2@s" uk-grid>
        @foreach($courses as $course)
        <div>
          <div class="uk-panel uk-background-default ee-border">
            <div class="uk-height-medium uk-flex uk-flex-bottom uk-background-cover"
            data-src="{{ asset('img/banner2.png') }}" uk-img>
              <div class="uk-padding-small">
                <p class="uk-text-lead uk-light" style="margin-bottom: 0px">
                  <a class="uk-link-reset ee-en" href="">{{ $course->title }}</a>
                </p>
              </div>
            </div>
            <div class="uk-background-default uk-padding-small uk-width-1-1">
              <p class="uk-article-meta" style="margin: 0px">تأليف الأستاذ:
                <a href="{{ route('users.show', $course->user->id)}}" class="uk-text-primary ee-en">{{ $course->user->name }}</a>
                <span class="uk-margin-small-right">تم النشر يتاريخ:
                  <span class="ee-en uk-text-primary">
                    {{ $course->created_at->toFormattedDateString() }}
                  </span>
                </span>
              </p>
              <p>
                @if($course->free_course)
                  <span class="uk-margin-right uk-label uk-background-muted ee-border uk-text-success">
                    دورة مجانية
                  </span>
                @endif
              </p>
              <small class="ee-en">{{ $course->description }}</small>
              <div class="uk-grid-small uk-child-width-1-2 uk-margin-top" uk-grid>
                <p>
                  <a href="{{ route('courses.clientShow', $course->slug) }}">
                    <span uk-icon="icon: arrow-left; ratio: 1.5;" class="uk-text-danger uk-text-bold"></span>
                    تفاصيل الدورة
                  </a>
                </p>
                @if($course->price)
                  <p>
                    <a href="#" class="uk-button ee-border-blue uk-text-primary">
                      شراء الدورة
                      <span class="ee-en  uk-text-danger">{{ $course->price }}$</span>
                    </a>
                  </p>
                @else
                  <p>
                    <a href="#" class="uk-button ee-border-blue uk-text-success">
                      اشترك في الدورة
                    </a>
                  </p>
                @endif
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>{{-- Content Column 4 - 5  --}}

  </div>{{-- Grid  --}}

</div>{{-- Container  --}}
@endsection
