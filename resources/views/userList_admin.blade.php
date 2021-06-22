<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

     <div><br><br>
        <div class="wrap">
            <div class="search" style="text-align: center">
               <input type="text" class="searchTerm" placeholder="Please enter scanned website">
               <button type="submit" class="searchButton">
                 <i class="fa fa-search"></i>
              </button>
            </div>
     </div> </div>
</x-app-layout>
