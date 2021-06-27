<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Users List</div>

                        <div class="card-body">

                                <table class="table-auto">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Created at</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td>
                                                <th>
                                                <form method="post" action="/escalate" id="userAction" name="userAction" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    {{-- <input type="hidden" value="" name="fileName"> --}}
                                                    <input type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded" value="Admin escalate">
                                                </form>
                                                </th>
                                                <th><form method="post" action="/delete" id="userAction" name="userAction" enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                    {{-- <input type="hidden" value="" name="fileName"> --}}
                                                    <input type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" value="Delete User">
                                                </form>
                                                </th>
                                            </td>
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
</div>


     </div>
</x-app-layout>
