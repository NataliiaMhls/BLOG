<x-app>

@section('content')
<header class="mb-6 relative">
    <div class="relative">
         <img src="/images/profileBanner.png"   
                alt="" 
                class="mb-2 rounded-lg"
        >
        <img src="{{$user->avatar}}" 
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2    translate-y-1/2"
                alt="" 
                width="150" 
                style="left:50%">
   </div>
   <div class="flex justify-between items-center mb-6">
        <div style="max-width:270px">
            <h2 class="font-bold text-xl mb-0">{{$user->name}}</h2>
            <p class="text-sm">Joined {{$user->created_at->diffForHumans()}}</p>
        </div>
        <div class="flex">
        @can ('edit', $user)
             <a href="{{$user->path('edit')}}" class=" rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">Edit Profile</a>
        @endcan
        <x-follow-button :user="$user"> </x-follow-button>
        </div>
    </div>
    <p class="text-sm"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
         incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation 
         ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in 
         voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    


</header>

   @include('_timeline',[
        "tweets"=>$tweets
    ])

   </x-app>
