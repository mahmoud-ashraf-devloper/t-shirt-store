@extends('admin-dashboard.layouts.auth')
@section('content')
    <div class="flex items-center min-h-screen p-6 bg-gray-50">
        <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl">
            <div class="flex flex-col overflow-y-auto md:flex-row">
                <div class="h-32 md:h-auto md:w-1/2">
                    <img aria-hidden="true" class="object-cover w-full h-full" src="{{ asset('img/login-office.jpeg') }}"
                        alt="Office" />
                    <img aria-hidden="true" class="hidden object-cover w-full h-full"
                        src="{{ asset('img/login-office-dark.jpeg') }}" alt="Office" />
                </div>
                <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                    <div class="w-full">
                        <h1 class="mb-4 text-xl font-semibold text-gray-700">
                            Login as Admin
                        </h1>
                        @if (session('error'))
                            <div class="mb-3 px-1 py-2 bg-red-400 rounded-full text-center text-sm text-white">
                                {{ session('error') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('admin.login.check') }}">
                            @csrf
                            <label class="block text-sm">
                                <span class="text-gray-700">Email</span>
                                <input name="email" value="{{ old('email') }}"
                                    class="block w-full rounded-md border-gray-200 border mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                                    placeholder="Jane Doe" />
                                <span
                                    class="text-red-600">{{ $errors->has('email') ? $errors->first('email') : null }}</span>
                            </label>
                            <label class="block mt-4 text-sm">
                                <span class="text-gray-700">Password</span>
                                <input name="password"
                                    class="block w-full rounded-md border-gray-200 border mt-1 text-sm focus:border-purple-400 focus:outline-none focus:shadow-outline-purple form-input"
                                    placeholder="***************" type="password" />

                                <span
                                    class="text-red-600">{{ $errors->has('password') ? $errors->first('password') : null }}</span>
                            </label>
                            <div class="flex items-center py-4 px-2 ">
                                <input id="remember" name="remember" type="checkbox"
                                    class="text-purple-600 form-checkbox rounded-md focus:border-purple-400 focus:outline-none " />
                                <label for="remember" class="ml-2 block">
                                    Remember me
                                </label>
                            </div>
                            <button type="submit"
                                class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                                Log in
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
