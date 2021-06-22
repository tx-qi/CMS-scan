<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You logged in as admin!
                </div>
            </div>
        </div>
    </div>
     <div>
        <div class="wrap">
            <div class="search" style="text-align: center">
               <input type="text" class="searchTerm" placeholder="Please enter website"> <br>
               <input type="radio" id="Scan" name="fullScan" value="fullScan">
                <label for="fullScan">Full Scan</label>
                <input type="radio" id="Scan" name="defaultScan" value="defaultScan">
                <label for="defaultScan"> Default Scan</label>
                <label for="typeOfCMS">| Type of CMD:</label>
                <input list="typeOfCMS" name="typeOfCMS" id="typeOfCMS">
                <datalist id="typeOfCMS">
                  <option value="Auto">
                  <option value="Wordpress">
                  <option value="Drupal">
                  <option value="Joomla">
                  <option value="Moodle">
                </datalist>
               <button type="submit" class="searchButton">
                 <i class="fa fa-search"></i>
              </button>
            </div>
     </div> </div>
</x-app-layout>
