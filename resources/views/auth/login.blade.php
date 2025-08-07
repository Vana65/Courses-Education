@section('title', '-Login')

@include('theme.partials.head_login')
@include('theme.partials.preloader_login')

<main class="login-body" data-vide-bg="assets/img/login-bg.mp4">
    <!-- Login Admin -->
    <form class="form-default" action="{{ route('login') }}" method="POST">
        @csrf
        <div class="login-form">
            <!-- logo-login -->
            <div class="logo-login">
                <a href="index.html"><img src="assets/img/logo/loder.png" alt=""></a>
            </div>
            <h2>Login Here</h2>
            <div class="form-input">
                <label for="name">Email</label>
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
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
            <div class="form-input pt-30">
                <input type="submit" name="submit" value="login">
            </div>
            <a href="{{ route('register') }}" class="registration">Registration</a>
        </div>
    </form>
    <!-- /end login form -->
</main>
@include('theme.partials.scripts_login')
