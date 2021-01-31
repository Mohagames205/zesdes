<style>
    table, td, th {
        border: 1px solid black;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }
</style>

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Upload
    </h2>
</x-slot>
<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">

                    <div class="mt-4 text-2xl">
                        Uw wachtlijst.
                    </div>

                </div>

                <div class="bg-gray-200 bg-opacity-25">

                    <div class="p-6">
                        <table>
                            <thead>
                                <tr>
                                    <th>Foto</th>
                                    <th>Status</th>
                                    <th>Geupload op</th>
                                </tr>
                            </thead>
                            <tbody>
                        @foreach(auth()->user()->pictures as $picture)
                            <tr class="pt-5">
                                <td><a href="{{ asset('/pictures/' . $picture->filename)  }}">Klik hier</a></td>
                                <td>{{ $picture->is_approved ? 'Goedgekeurd' : 'Afgewezen' }}</td>
                                <td>{{ $picture->created_at }}</td>
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
