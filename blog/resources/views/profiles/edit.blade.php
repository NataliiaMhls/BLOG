<x-app>
 <form method="POST" action="{{$user->path()}}" enctype="multipart/form-data">
    @csrf
    @method("PATCH")
    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="name">
            Name
        </label>

        <input class="border border-grey-400 p-2 w-full" type="text" value="{{$user->name}}" name="name" id="name" required>

        @error('name')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="username">
            Userame
        </label>

        <input class="border border-grey-400 p-2 w-full" type="text" name="username" value="{{$user->username}}" id="username" required>

        @error('username')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="avatar">
            Avatar
        </label>
        <div class="flex">
        <input class="border border-grey-400 p-2 w-full" type="file" name="avatar"  id="avatar" >
        <img src="{{$user->avatar}}" alt="your avatar" width="40">
        @error('avatar')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror
        </div>
    
    </div>
    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="email">
            Email
        </label>

        <input class="border border-grey-400 p-2 w-full" type="email" name="email" value="{{$user->email}}" id="email" required>

    </div>
    @error('email')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password">
            Password
        </label>

        <input class="border border-grey-400 p-2 w-full" type="password" name="password" id="napasswordme" required>

        @error('passford')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-6">

        <label class="block mb-2 uppercase font-bold text-xs text-grey-700" for="password_confirmation">
            Password Confirmation
        </label>

        <input class="border border-grey-400 p-2 w-full" type="password" name="password_confirmation" id="password_confirmation" required>

        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-6">

        <button type="submit"class="bg-blue-400 text-white py-2 px-4 hover:bg-blue-500">Submit</button>
        <a href="{{$user->path()}}" class="hover:underline">Cancel</a>
    </div>
 </form>

 </x-app>