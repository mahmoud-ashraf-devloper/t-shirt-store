@extends('designer-dashboard.layouts.auth')
@section('content')
<div class="flex items-center min-h-screen p-6 bg-gray-50">
    <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
        <div class="flex flex-col overflow-y-auto md:flex-row">
            <div class="h-32 md:h-auto md:w-1/2">
                <img aria-hidden="true" class="object-cover w-full h-full"
                    src="{{ asset('img/create-account-office.jpeg') }}" alt="Office" />
                <img aria-hidden="true" class="hidden object-cover w-full h-full"
                    src="{{ asset('img/create-account-office-dark.jpeg') }}" alt="Office" />
            </div>
            <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                <div class="w-full">
                    <h1 class="mb-4 text-xl font-semibold text-gray-700">
                        Create Designer account
                    </h1>
                    <form class="flex flex-col space-y-2 " method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="block text-sm">
                            <input name="first_name" value="{{ old('first_name') }}"
                                class="block rounded-sm border border-gray-200 w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                                placeholder="First Name" />
                            @if ($errors->has('first_name'))
                                <span class=" text-red-600 text-sm">{{ $errors->first('first_name') }}</span>
                            @endif
                        </div>
                        <div class="block text-sm">
                            <input name="last_name" value="{{ old('last_name') }}"
                                class="block rounded-sm border border-gray-200 w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                                placeholder="Last Name" />
                            @if ($errors->has('last_name'))
                                <span class=" text-red-600 text-sm">{{ $errors->first('last_name') }}</span>
                            @endif
                        </div>
                        <div class="block text-sm">
                            <input name="email" value="{{ old('email') }}"
                                class="block rounded-sm border border-gray-200 w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                                placeholder="Email" />
                            @if ($errors->has('email'))
                                <span class=" text-red-600 text-sm">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="block text-sm">
                            <input name="password" value="{{ old('password') }}"
                                class="block rounded-sm border border-gray-200 w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                                placeholder="Password" type="password" />
                            @if ($errors->has('password'))
                                <span class=" text-red-600 text-sm">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="block text-sm">
                            <input name="password_confirmation"
                                class="block rounded-sm border border-gray-200 w-full mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                                placeholder="Password Confirmation" type="password" />
                            @if ($errors->has('password_confirmation'))
                                <span
                                    class=" text-red-600 text-sm">{{ $errors->first('password_confirmation') }}</span>
                            @endif
                        </div>

                        <div class="flex flex-col py-4 text-sm">
                            <div class="flex items-center ">
                                <input id="terms" name="terms" type="checkbox"
                                    class="text-purple-600 form-checkbox rounded-sm focus:border-purple-400 focus:outline-none " />
                                <label for="terms" class="ml-2 block">
                                    I agree to the
                                    <a href="#" class="underline">privacy policy</a>
                                </label>
                            </div>
                            @if ($errors->has('terms'))
                                <div class=" text-red-600 text-sm">{{ $errors->first('terms') }}</div>
                            @endif
                        </div>

                        <!-- You should use a button here, as the anchor is only used for the example  -->
                        <button type="submit"
                            class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                            Create account
                        </button>
                    </form>

                    <hr class="my-8" />



                    <p class="mt-4">
                        <a class="text-sm font-medium text-purple-600 hover:underline" href="{{ route('login') }}">
                            Already have an account? Login
                        </a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
