<div class="  m-auto my-16 ">
    @if(session()->has('message'))
        <div class="bg-green-200 px-6 py-4 mx-2 my-4 rounded-md text-lg flex items-center mx-auto w-3/4 xl:w-2/4">
            <svg viewBox="0 0 24 24" class="text-green-600 w-5 h-5 sm:w-5 sm:h-5 mr-3">
                <path fill="currentColor"
                      d="M12,0A12,12,0,1,0,24,12,12.014,12.014,0,0,0,12,0Zm6.927,8.2-6.845,9.289a1.011,1.011,0,0,1-1.43.188L5.764,13.769a1,1,0,1,1,1.25-1.562l4.076,3.261,6.227-8.451A1,1,0,1,1,18.927,8.2Z"
                ></path>
            </svg>
            <span class="text-green-800"> {{ session('message') }} </span>
        </div>
    @endif
    <div class="bg-white m-auto   p-16 rounded shadow-2xl w-4/6">

        <h2 class="text-3xl font-bold mb-10 text-gray-800 text-center">Add a phone number to student</h2>

        <form class="space-y-5 space-x-5 flex flex-col " wire:submit.prevent="addstudentnb">

            <div class="mx-52">
                <label class="block mb-1 font-bold text-gray-500">Student Name</label>

                <select wire:model="student_id" class="w-10/12 mb-5 border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500" id="Gender">
                    <option value="">Select Student</option>
                    @foreach ($studs as $item)
                    <option value="{{$item->id}}">{{$item->First_nm}} {{$item->Last_nm}}</option>
                    @endforeach
                </select><br>
                @error('student_id') <span class="error text-red-600">{{ $message }}</span> @enderror

                <label class="block mb-1 font-bold text-gray-500">Phone Number</label>
                <input type="text" wire:model="Phone_nb" class="w-10/12 mb-5 border-2 border-gray-200 p-3 rounded outline-none focus:border-purple-500"><br>
                @error('Phone_nb') <span class="error text-red-600">{{ $message }}</span> @enderror <br>
                <button type="submit" class=" p-2  w-1/6 font-bold  bg-yellow-400 hover:bg-blue-300 rounded text-yellow-900 hover:text-white text-2xl transition ">Add</button>
            </div>
        </form>

    </div>

</div>
