@section('title', '-Register')

@include('theme.partials.head_login')
@include('theme.partials.preloader_login')


<!-- Register -->
<main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
    <!-- Login Admin -->
    <form class="form-default" action="{{ route('register') }}" method="POST">
        @csrf
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="assets/img/logo/loder.png" alt=""></a>
            </div>
            <h2>Registration Here</h2>

            <div class="form-input">
                <label for="name">Full name</label>
                <input type="text" name="name" placeholder="Full name" value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                {{-- <x-input-error :messages="$errors->get('name')" class="mt-2" /> --}}

            </div>
            <div class="form-input">
                <label for="name">Email Address</label>
                <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                {{-- <x-input-error :messages="$errors->get('email')" class="mt-2" />  --}}


            </div>
            <div class="form-input">
                <label for="name">Password</label>
                <input type="password" name="password" placeholder="Password">
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
            </div>
            <div class="form-input">
                <label for="name">Confirm Password</label>
                <input type="password" name="password_confirmation" placeholder="Confirm Password">
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                {{-- <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />  --}}

            </div>
            <div class="form-input pt-30" href="{{ route('theme.index') }}">
                <input type="submit" name="submit" value="Registration">
            </div>
            <!-- Forget Password -->
            <a href="{{ route('login') }}" class="registration">login</a>
        </div>
    </form>
    <!-- /end login form -->
</main>
@include('theme.partials.scripts_login')
