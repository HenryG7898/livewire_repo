<div>

    <div class="text-center">
        <div class="my-7"></div>
        <div class=" w-1/4 text-white rounded bg-black hover:bg-green-500 hover:text-black flex flex-col p-6 justify-center items-center bg-white shadow-md my-5 rounded m-auto">

            <div class="text-2xl text-center text-black   font-bold">
                <h1 class="text-red-900 text-5xl font-bold"> Student List</h1>
            </div>

        </div>
    </div>

    <div class="mx-auto w-3/3 flex flex-wrap justify-center items-center">
        <div class=" shadow-md rounded">
            <table class=" border-collapse ">
                <thead class="bg-black rounded-full">
                <tr>
                    <th class="p-3 font-bold uppercase text-white ">First Name</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Last Name</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Date Of Birth</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Phone Number</th>
                    <th class="p-3 font-bold uppercase text-white hidden lg:table-cell">Actions</th>
                </tr>
                </thead>
                @if (isset($studs))
                @foreach ($studs as $item)


                    <tr class="bg-white lg:hover:bg-gray-100 flex lg:table-row flex-row lg:flex-row flex-wrap lg:flex-no-wrap mb-10 lg:mb-0">

                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $item->First_nm }}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $item->Last_nm }}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">{{ $item->DOB }}</td>
                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static"></td>

                        <td class="w-full lg:w-auto p-3 text-gray-800 text-center  border-b text-center block lg:table-cell relative lg:static">

                            <a wire:click.prevent="editStudent({{ $item }})" href="#"  class="cursor-pointer btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black">Edit</a>

                            <a href="" class="btn btn-primary p-2 text-white rounded bg-black hover:bg-green-500 hover:text-black" >View</a>

                        </td>
                    </tr>

                @endforeach
                @endif
            </table>
{{--            {{ $studs->links() }}--}}
        </div>

    </div>

</div>
{{--    <div>--}}

{{--        <a href="{{ url('addstudent') }}" class="cursor-pointer w-1/4 text-white rounded bg-black hover:bg-green-500 hover:text-black flex flex-col p-6 justify-center items-center bg-white shadow-md my-10 rounded m-auto">--}}

{{--            <div class="text-2xl text-center text-black   font-bold">--}}
{{--                <h1> Add New Student Add</h1>--}}
{{--            </div>--}}

{{--        </a>--}}

{{--    </div>--}}
