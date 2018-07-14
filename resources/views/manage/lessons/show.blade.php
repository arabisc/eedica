@extends('layouts.manage.manageApp')

@section('title', $lesson->title)

@section('content')
<div class="uk-grid-large uk-child-width-1-2 uk-background-default uk-padding-small ee-border-bottom" uk-grid>
  <div>
    <h3 class="uk-text-primary">تفاصيل الدرس</h3>
  </div>
  <div>
    <ul class="uk-breadcrumb uk-float-left">
      <li>
        <a href="{{ route('courses.show', $lesson->course->id) }}" class="uk-text-small ee-en">{{ $lesson->course->title }}</a>
      </li>
      <li class="uk-disabled uk-text-small">
        <a href="#" class="uk-disabled uk-text-small ee-en">{{ $lesson->title }}</a>
      </li>
    </ul>
  </div>
</div>

<div class="uk-container uk-padding">
  <article class="uk-article">

    <h1 class="uk-article-title"><a class="uk-link-reset ee-en" href="">{{ $lesson->title }}</a></h1>

    <p class="uk-article-meta">تأليف الأستاذ:
      <a href="{{ route('users.show', $lesson->course->user->id)}}" class="uk-text-primary ee-en">{{ $lesson->course->user->name }}</a>
      <span class="uk-margin-right">تم النشر يتاريخ:
        <span class="ee-en uk-text-primary">{{ $lesson->created_at->toFormattedDateString() }}</span>
      </span>
      @if($lesson->publish > 0)
      <span class="uk-margin-right uk-text-success">الدرس في النشر</span>
      @else
      <span class="uk-margin-right uk-text-danger">الدرس لم ينشر بعد</span>
      @endif
    </p>

    <p class="uk-text-lead ee-en">{{ $lesson->description }}</p>

    <div class="uk-panel uk-background-default uk-padding ee-border">
      <p class="ee-en">{{ $lesson->lesson_content }}</p>
    </div>

    <div class="uk-grid-small uk-child-width-auto" uk-grid>
        <div>
          <a class="uk-button uk-button-text" href="#">next</a>
        </div>
        <div>
          <a class="uk-button uk-button-text" href="#">previous lesson</a>
        </div>
    </div>

  </article>
</div>
@endsection
