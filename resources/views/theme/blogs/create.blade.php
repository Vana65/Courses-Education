@extends('theme.master')
@section('title', '-Contact')
@section('content')

    @include('theme.partials.hero', ['title' => 'Contact us'])
    <!--? Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-8 col-md-8">
                        <h3 class="mb-30">Form</h3>
                        <form action="{{ route('blogs.store') }}" method="POST" novalidate="novalidate"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mt-10">
                                <input type="text" name="name" placeholder="title" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'title'" required class="single-input"
                                    value="{{ old('name') }}">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                            </div>
                            <div class="form-group">
                                <input class="form-control border" name="image" type="file"
                                    placeholder="Enter your blog title">
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>
                            <div class="mt-10">
                                <select class="form-control border" name="category_id" placeholder="Enter your blog title">
                                    <option value="{{ old('category_id') }}">Select Category</option>
                                    @if (count($categories) > 0)
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                            </div>
                            <div class="mt-10">
                                <textarea class="single-textarea" name="description" placeholder="enter your blog description"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'enter your blog description'" required>{{ old('description') }}</textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />

                            </div>
                            <div class="form-group text-center text-md-right mt-3">
                                <button type="submit" class="button button--active button-contactForm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
