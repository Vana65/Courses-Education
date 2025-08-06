   @extends('theme.master')
   @section('title', '-About')
   @section('content')
       @include('theme.partials.hero', ['title' => 'About '])
       @include('theme.partials.service_area')
       @include('theme.partials.learn_new')
       @include('theme.partials.top_subject')
       @include('theme.partials.learn_outcomes')
       @include('theme.partials.team')

   @endsection
