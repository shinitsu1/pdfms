<x-app-layout>

<x-message />


    <div class="fixed left-3 top-[86px] w-[240px] h-[86%] bg-blue-200 rounded-3xl p-4">
           <ul class="mt-2" >
               <li class="mb-1 group">
                   <a href="{{ asset('dashboard')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-[#4ECE5D] group-[.selected]:text-white">
                       <i class="ri-dashboard-fill mr-3 text-lg"></i>
                       <span class="font-poppins">Dashboard</span>
                   </a>
               </li>
               <li class="mb-1 group">
                   <a href="{{ asset('supervisors')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-[#4ECE5D] group-[.selected]:text-white">
                       <i class="ri-admin-fill mr-3 text-lg"></i>
                       <span class="font-poppins">Supervisors</span>
                   </a>
               </li>
               <li class="mb-1 group">
                   <a href="{{ asset('accounts')}}"  class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-[#4ECE5D] group-[.selected]:text-white">
                       <i class="ri-account-pin-box-line mr-3 text-lg"></i>
                       <span class="font-poppins">Accounts</span>
                   </a>
               </li>
               <li class="mb-1 group active">
                   <a href="{{ asset('vehicles')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-[#4ECE5D] group-[.selected]:text-white">
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
       <div class="relative top-[86px] left-[0px] md:w-[calc(100%-256px)] md:ml-64 xl:w-[79%] mx-auto px-5 p-5 rounded-lg bg-gray-100 z-0">

           <!--Card-->
           <div id='recipients' class="p-8 mt-10 lg:mt-0 rounded shadow bg-gray-200">

               <table id="myTable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                   <thead>
                       <tr>
                           <th>First Name</th>
                           <th>Last Name</th>
                           <th>Email</th>
                           <th>Age</th>
                           <th>Action</th>
                           <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($vehicles as $vehicle)
                       <tr>
                           <td>{{ $vehicle->first_name }}</td>
                           <td>{{ $vehicle->last_name }} </td>
                           <td>{{ $vehicle->email }}</td>
                           <td>{{ $vehicle->age }}</td>

                           <!--edit-modal-->
                           <td><a href="/student/{{$vehicle->id}}" class="bg-sky-600 text-white px-4 py-2 rounded">Edit</a></td>

                           <!--delete button-->
                           <form action="{{ url('delete-vehicle/'.$vehicle->id)}}" method="POST">
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


           



<!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {

        var table = $('#myTable').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();
    });
</script>




   </x-app-layout>
