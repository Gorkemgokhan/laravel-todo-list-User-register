<x-app-layout>
    <div style="width: 480px;"class="max-w-full mx-auto mt-10 px-4 py-8 text-gray-500">
        <h1 class="text-xl uppercase text-gray-500 mb-4">Parolanızı Güncelleyin:</h1>
        @if(session('msg') !== null)
            <p class="text-green-600 p-2 bg-gray-300 rounded mt-2">{{session('msg')}}</p>
        @endif
        @if(session('error') !== null)
            <p class="text-red-600 p-2 bg-gray-300 rounded mt-2">{{session('error')}}</p>
        @endif
        <form action="{{route('user.passwordUpdate')}}" method="POST" class="mt-4">
            @csrf
            <label class="block" for="oldPassword">Mevcut Şifre: </label>
            <input class="w-full mb-2 rounded-lg bg-gray-200" type="password" name="oldPassword">
            @error('oldPassword')
                <p class="text-base pb-4 text-red-400">{{$message}}</p>
            @enderror
            <label class="block" for="password">Yeni Şifre: </label>
            <input class="w-full mb-4 rounded-lg bg-gray-200" type="password" name="password">
            @error('password')
                <p class="text-base pb-4 text-red-400">{{$message}}</p>
            @enderror
            <label class="block" for="password_confirmation">Yeni Şifreyi Doğrulayın: </label>
            <input class="w-full mb-4 rounded-lg bg-gray-200" type="password" name="password_confirmation">
            @error('password_confirmation')
                <p class="text-base pb-4 text-red-400">{{$message}}</p>
            @enderror
            <button class="block bg-gray-500 py-2 px-4 rounded-lg text-gray-100 hover:bg-gray-400 focus:outline-none">Güncelle</button>
        </form>
        <div class="mt-8 text-center">
            <a href="{{route('user.index')}}">
                <svg class="w-8 inline hover:text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm.707-10.293a1 1 0 00-1.414-1.414l-3 3a1 1 0 000 1.414l3 3a1 1 0 001.414-1.414L9.414 11H13a1 1 0 100-2H9.414l1.293-1.293z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
    </div>
</x-app-layout>
