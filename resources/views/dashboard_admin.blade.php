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
        <form method="post" name="runScript" action="/runScript" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="search" style="text-align: center">
               <input type="text" name="websiteName" class="shadow appearance-none border rounded w-1/6 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Please enter website"> <button type="submit" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Run</button> <br>
               <input type="radio" id="Scan" name="Scan" value="fullScan">
                <label for="fullScan">Full Scan</label>
                <input type="radio" id="Scan" name="Scan" value="defaultScan">
                <label for="defaultScan"> Default Scan  </label>
                <label for="typeOfCMS">| Type of CMD:</label>
                {{-- <input select="typeOfCMS" name="typeOfCMS" id="typeOfCMS"> --}}
                <select class="shadow appearance-none border rounded w-1/12 py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="typeofCMS" id="typeOfCMS">
                  <option value="Auto">Auto</option>
                  <option value="Wordpress">Wordpress</option>
                  <option value="Drupal">Drupal</option>
                  <option value="Joomla">Joomla</option>
                  <option value="Moodle">Moodle</option>
                  </select>
            </div>
        </form>
    </div>
</x-app-layout>
