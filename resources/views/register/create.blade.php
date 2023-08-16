@extends('layout')

@section('title')
    Register
@endsection

@section('content')
    <section class="py-6">
        <div class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-lg">
            <h2 class="text-2xl font-semibold mb-4">Register</h2>
            <form action="register" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-medium mb-1">Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200" required>
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-medium mb-1">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200" required>
                        @error('email')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 text-sm font-medium mb-1">Password</label>
                    <input type="password" id="password" name="password"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200" required>
                        @error('password')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 text-sm font-medium mb-1">Retype
                        Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                        class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-indigo-200" required>
                        @error('password_confirmation')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                </div>
                <button type="submit"
                    class="bg-indigo-500 text-white px-4 py-2 rounded-lg hover:bg-indigo-600">Register</button>
            </form>
        </div>
    </section>
@endsection
