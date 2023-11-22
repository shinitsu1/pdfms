<x-app-layout>




 <div class="fixed left-3 top-[86px] w-[240px] h-[86%] bg-blue-200 rounded-3xl p-4">
        <ul class="mt-2" >
            <li class="mb-1 group">
                <a href="{{ asset('dashboard')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-[#4ECE5D] group-[.selected]:text-white">
                    <i class="ri-dashboard-fill mr-3 text-lg"></i>
                    <span class="font-poppins">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group active">
                <a href="{{ asset('supervisors')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-[#4ECE5D] group-[.selected]:text-white">
                    <i class="ri-admin-fill mr-3 text-lg"></i>
                    <span class="font-poppins">Supervisors</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ asset('accounts')}}"  class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-[#4ECE5D] group-[.active]:text-white group-[.selected]:bg-[#4ECE5D] group-[.selected]:text-white">
                    <i class="ri-account-pin-box-line mr-3 text-lg"></i>
                    <span class="font-poppins">Accounts</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ asset('vehicles')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-[#4ECE5D] group-[.active]:text-white group-[.selected]:bg-[#4ECE5D] group-[.selected]:text-white">
                    <i class="ri-user-fill mr-3 text-lg"></i>
                    <span class="font-poppins">Vehicles</span>
                </a>
            </li>
            {{-- <li class="mb-1 group">
                <a href="{{ asset('schedule')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-[#4ECE5D] group-[.active]:text-white group-[.selected]:bg-[#4ECE5D] group-[.selected]:text-white">
                    <i class="ri-calendar-2-fill mr-3 text-lg"></i>
                    <span class="font-poppins">Schedule</span>
                </a>
            </li> --}}
            {{-- <li class="mb-1 group">
                <a href="Settings.html" class="flex items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-settings-2-line mr-3 text-lg"></i>
                    <span class="text-sm">Settings</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="Login.html" class="flex items-center py-2 px-4 text-white hover:bg-gray-950 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white group-[.selected]:bg-gray-950 group-[.selected]:text-gray-100">
                    <i class="ri-logout-box-line mr-3 text-lg"></i>
                    <span class="text-sm">Logout</span>
                </a>
            </li> --}}
        </ul>
    </div>

    {{-- <div class="relative top-0 left-0 w-full h-full bg-black/50 z-40 md:hidden sidebar-overlay"></div> --}}

    <!--Container-->
    <div class="relative top-[86px] left-[3px] md:w-[calc(100%-256px)] md:ml-64 xl:w-[79%] mx-auto px-5 p-5 rounded-lg bg-gray-100 z-0">

        <!--Card-->
        <div id='recipients' class="p-8 mt-10 lg:mt-0 rounded shadow bg-gray-200">

            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th scope="col" class="py-3 px-6 font-poppins">
                            First Name
                        </th>
                        <th scope="col" class="py-3 px-6 font-poppins">
                            Last Name
                        </th>
                        <th scope="col" class="py-3 px-6 font-poppins">
                            Email
                        </th>
                        <th scope="col" class="py-3 px-6 font-poppins">
                            Age
                        </th>
                        <th scope="col" class="py-3 px-6 font-poppins">
                            Action
                        </th>
                        <th scope="col" class="py-3 px-6 font-poppins">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($supervisors as $supervisor)
                    <tr class="bg-gray-800 border-b text-white">
                        <td class="py-4 px-8 font-poppins">
                            {{ $supervisor->first_name }}
                        </td>
                        <td class="py-4 px-8 font-poppins">
                            {{ $supervisor->last_name }}
                        </td>
                        <td class="py-4 px-8 font-poppins">
                            {{ $supervisor->email }}
                        </td>
                        <td class="py-4 px-8 font-poppins">
                            {{ $supervisor->age }}
                        </td>
                        <td class="py-4 px-8 font-poppins">
                            {{-- <a href="/student/{{$supervisor->id}}" class="bg-sky-600 text-white px-4 py-2 rounded">
                                Edit
                            </a> --}}
                            <button class="modal-open bg-sky-600 text-white px-4 py-2 rounded">Edit</button>

  <!--Modal-->
  <div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
    <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>

    <div class="modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">

      <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
        <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
          <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
        </svg>
        <span class="text-sm">(Esc)</span>
      </div>

      <!-- Add margin if you want to see some of the overlay behind the modal-->
      <div class="modal-content py-4 text-left px-6">
        <!--Title-->
        <div class="flex justify-between items-center pb-3">
          <p class="text-2xl font-bold">Simple Modal!</p>
          <div class="modal-close cursor-pointer z-50">
            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
              <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
            </svg>
          </div>
        </div>

        <!--Body-->
        <p>Modal content can go here</p>
        <p>...</p>
        <p>...</p>
        <p>...</p>
        <p>...</p>

        <!--Footer-->
        <div class="flex justify-end pt-2">
          <button class="px-4 bg-transparent p-3 rounded-lg text-indigo-500 hover:bg-gray-100 hover:text-indigo-400 mr-2">Action</button>
          <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
        </div>

      </div>
    </div>
  </div>

  <script>
    var openmodal = document.querySelectorAll('.modal-open')
    for (var i = 0; i < openmodal.length; i++) {
      openmodal[i].addEventListener('click', function(event){
    	event.preventDefault()
    	toggleModal()
      })
    }

    const overlay = document.querySelector('.modal-overlay')
    overlay.addEventListener('click', toggleModal)

    var closemodal = document.querySelectorAll('.modal-close')
    for (var i = 0; i < closemodal.length; i++) {
      closemodal[i].addEventListener('click', toggleModal)
    }

    document.onkeydown = function(evt) {
      evt = evt || window.event
      var isEscape = false
      if ("key" in evt) {
    	isEscape = (evt.key === "Escape" || evt.key === "Esc")
      } else {
    	isEscape = (evt.keyCode === 27)
      }
      if (isEscape && document.body.classList.contains('modal-active')) {
    	toggleModal()
      }
    };


    function toggleModal () {
      const body = document.querySelector('body')
      const modal = document.querySelector('.modal')
      modal.classList.toggle('opacity-0')
      modal.classList.toggle('pointer-events-none')
      body.classList.toggle('modal-active')
    }


  </script>
                        </td>

                        <!--delete button-->
                        <form action="{{ url('delete/'.$supervisor->id)}}" method="POST">
                        <td class="py-4 px-6">
                            @csrf
                            @method('delete')
                            <button type="submit" class="bg-sky-600 text-white px-4 py-2 rounded" type="submit">Delete</button>
                        </td>
                        </form>
                    </tr>
                    @endforeach

                </tbody>

            </table>

            </div>
            <!--/Card-->


        </div>

</x-app-layout>
