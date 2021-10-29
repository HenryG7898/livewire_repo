<div>
    <div class="  m-auto my-16 ">
{{--        @if(session()->has('message'))--}}
{{--            <div class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">--}}
{{--                <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">--}}
{{--                    <path fill="currentColor"--}}
{{--                          d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"--}}
{{--                    ></path>--}}
{{--                </svg>--}}
{{--                <span class="text-green-800"> {{ 'Student Update' }} </span>--}}
{{--            </div>--}}
{{--        @endif--}}
        <div class="bg-white m-auto   p-16 rounded shadow-2xl w-4/6">



            <h2 class="text-3xl font-bold mb-10 text-gray-800 text-center">Edit Student</h2>

            <form class="space-y-5 space-x-5 grid md:grid-cols-3"  wire:submit.prevent="store">
                <div>
                    <label class="block mb-1 font-bold text-gray-500">First Name</label>
                    <input type="text" wire:model="First_nm"" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
{{--                    {{ dd($stud->First_nm) }}--}}
{{--                    <input type="hidden" value="" name="id" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">--}}
                                @error('First_nm') <span class="error text-red-600">{{ $message }}</span> @enderror
                </div>

                <div>
                    <label class="block mb-1 font-bold text-gray-500">Last Name</label>
                    <input type="text" wire:model="Last_nm" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    @error('Last_nm') <span class="error text-red-600"></span> @enderror
                </div >

                <div >
                    <label class="block mb-1 font-bold text-gray-500">Date of Birth</label>
                    <input type="date" wire:model="DOB" class="w-full border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500">
                    @error('DOB') <span class="error text-red-600"></span> @enderror
                </div>
                <br>
                <button type="submit" class=" p-2 w-4/6 font-bold  bg-yellow-400 hover:bg-blue-300 rounded text-yellow-900 hover:text-white text-2xl transition ">Add</button>

            </form>
{{--            @else--}}
{{--                <h2 class="text-5xl font-bold mb-10 text-gray-800 text-center">Sorry! No Student Available</h2>--}}

        </div>

    </div>
</div>
