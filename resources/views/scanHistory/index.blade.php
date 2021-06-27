<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Scan History') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">


            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Scanned Website History</div>

                        <div class="card-body">
                                <table class="table-auto self-auto">
                                <thead>
                                <tr>

                                    <th scope="col">Name</th>
                                    <th scope="col">Action</th>

                                </tr>
                                </thead>
                                <tbody>

                                @foreach($files as $file)
                                    <tr>
                                        <th scope="row" class="right-5">{{ $file }}</th>
                                        <th>
                                            <form method="post" action="/scanHistory/result" id="file" name="file" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input type="hidden" value={{$file}} name="fileName">
                                                <input type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" value="View">
                                            </form>
                                        <th>
                                            <form method="post" action="/scanHistory/delete" id="file" name="file" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input type="hidden" value={{$file}} name="fileName">
                                                <input type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" value="Delete">
                                            </form>
                                        </th>
                                        </th>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


    </div>
</div>
</div>
</div>

    {{--  <div><br><br>
        <div class="wrap">
            <div class="search" style="text-align: center">
               <input type="text" class="searchTerm" placeholder="Please enter scanned website">
               <button type="submit" class="searchButton">
                 <i class="fa fa-search"></i>
              </button>
            </div>
     </div> </div> --}}
</x-app-layout>
