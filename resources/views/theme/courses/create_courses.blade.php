@extends('theme.master')
@section('title', '-New Course')
@section('content')

    @include('theme.partials.hero', ['title' => ' Add New Course'])
    <!--? Start Align Area -->
    <style>
        /* التنسيقات العامة للحاوية */
        .whole-wrap {
            padding: 80px 0;
            background-color: #f0f2f5;
            /* خلفية خفيفة للقسم بالكامل */
        }

        .container.box_1170 {
            max-width: 900px;
            /* تقليل عرض النموذج قليلاً */
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-top-border {
            padding: 40px;
            background: #ffffff;
            /* خلفية بيضاء للنموذج */
            border-radius: 12px;
            /* حواف دائرية أكبر */
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            /* إضافة ظل خفيف لإبراز النموذج */
        }

        /* تنسيقات العنوان */
        .mb-30 {
            font-size: 28px;
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
            text-align: center;
        }

        /* تنسيقات حقول الإدخال والاختيار والنص */
        .single-input,
        .single-textarea,
        .form-control {
            width: 100%;
            padding: 14px 20px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            color: #555;
            background-color: #fdfdfd;
            transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        .single-input:focus,
        .single-textarea:focus,
        .form-control:focus {
            border-color: #4a90e2;
            /* لون أزرق جذاب عند التركيز */
            box-shadow: 0 0 10px rgba(74, 144, 226, 0.2);
            outline: none;
        }

        .single-textarea {
            resize: vertical;
            min-height: 180px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        /* تنسيق زر الإرسال */
        .button.button--active.button-contactForm {
            background-image: linear-gradient(to right, #4a90e2 0%, #007bff 100%);
            /* تدرج لوني للزر */
            color: #fff;
            padding: 15px 40px;
            border: none;
            border-radius: 8px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
            display: block;
            width: 100%;
            /* الزر يملأ عرض الحاوية */
        }

        .button.button--active.button-contactForm:hover {
            transform: translateY(-3px);
            /* تأثير رفع عند مرور الماوس */
            box-shadow: 0 8px 20px rgba(0, 123, 255, 0.3);
        }

        /* تنسيقات أخرى */
        .text-right {
            text-align: right;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border: 1px solid #c3e6cb;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .mt-2 {
            margin-top: 5px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-12 {
            width: 100%;
        }
    </style>
    <style>
        /* التنسيقات العامة للحاوية */
        .whole-wrap {
            padding: 80px 0;
            background-color: #f0f2f5;
        }

        .container.box_1170 {
            max-width: 900px;
            width: 100%;
            margin: 0 auto;
            padding: 0 20px;
        }

        .section-top-border {
            padding: 40px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        /* تنسيقات العنوان */
        .mb-30 {
            font-size: 28px;
            font-weight: 600;
            color: #333;
            margin-bottom: 25px;
            text-align: center;
        }

        /* تنسيقات حقول الإدخال والاختيار والنص */
        .single-input,
        .single-textarea,
        .form-control {
            width: 100%;
            padding: 14px 20px;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            color: #555;
            background-color: #fdfdfd;
            transition: border-color 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        .single-input:focus,
        .single-textarea:focus,
        .form-control:focus {
            border-color: #4a90e2;
            box-shadow: 0 0 10px rgba(74, 144, 226, 0.2);
            outline: none;
        }

        .single-textarea {
            resize: vertical;
            min-height: 180px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        /* تنسيق حقل اختيار الصورة خصيصاً */
        .form-control[type="file"] {
            padding: 12px 15px;
            /* تقليل الـ padding ليناسب حقل الملفات */
            cursor: pointer;
        }

        /* تنسيق زر الإرسال */
        .button.button--active.button-contactForm {
            background-image: linear-gradient(to right, #2c7be5 0%, #175ecf 100%);
            /* تدرج لوني أزرق غامق للزر */
            color: #fff;
            padding: 18px 45px;
            /* زيادة حجم الزر */
            border: none;
            border-radius: 8px;
            font-size: 20px;
            /* زيادة حجم الخط */
            font-weight: bold;
            /* جعل الخط عريضاً */
            cursor: pointer;
            transition: transform 0.2s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: 0 6px 20px rgba(0, 123, 255, 0.3);
            /* ظل أقوى */
            display: block;
            width: 100%;
            letter-spacing: 1px;
            /* مسافة بين الحروف */
        }

        .button.button--active.button-contactForm:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 123, 255, 0.4);
        }

        /* تنسيقات أخرى */
        .text-right {
            text-align: right;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border: 1px solid #c3e6cb;
            border-radius: 8px;
            margin-bottom: 20px;
            text-align: center;
        }

        .mt-10 {
            margin-top: 10px;
        }

        .mt-2 {
            margin-top: 5px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-12 {
            width: 100%;
        }
    </style>
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-12">
                        <h3 class="mb-30">Add New Course</h3>
                        <form action="{{ route('addcourse.store') }}" method="POST" novalidate="novalidate"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <input class="form-control fs-4" name="image" type="file" style="height: 70px;"
                                    value="{{ old('image') }}">
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-10">
                                <input type="text" name="user_id" placeholder="Enter Your Name"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'user_id'" required
                                    class="single-input"value="{{ old('user_id') }}">
                                @error('user_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-10 text-center">
                                <input type="text" name="title" placeholder="Add  Title Course"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'add ctitleourse'" required
                                    class="single-input" value="{{ old('title') }}">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-10">
                                <textarea class="single-textarea" name="description" placeholder="Enter Your Course Description"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'description'" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mt-5 text-center">
                                <input type="text" name=" price" placeholder="Enter Price"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'price '" required
                                    class="single-input" value="{{ old('price') }}">
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group text-right mt-3">
                                <button type="submit"
                                    class="button button--active button-contactForm btn btn-sm px-3 py-1 d-inline-block">
                                    Submit
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
