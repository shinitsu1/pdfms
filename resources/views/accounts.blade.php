<x-app-layout>

@if (Auth::user()->role == 'admin')

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
        <li class="mb-1 group active">
            <a href="{{ asset('accounts')}}"  class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-[#4ECE5D] group-[.selected]:text-white">
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
    </ul>
</div>
    <!--Container-->
    <div class="relative top-[86px] left-[3px] md:w-[calc(100%-256px)] md:ml-64 xl:w-[79%] mx-auto px-5 p-5 rounded-lg bg-gray-100 z-0">
        <!--Card-->
        <div id='recipients' class="p-8 mt-10 lg:mt-0 rounded shadow bg-gray-200">
            <table id="myTable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $account)
                    <tr>
                        <td>{{ $account->id }}</td>
                        <td>{{ $account->first_name }}</td>
                        <td>{{ $account->last_name }}</td>
                        <td>{{ $account->email }}</td>
                        <td>{{ $account->age }}</td>
                        <td><a href="#" class="bg-sky-600 text-white px-4 py-2 rounded">Edit</a></td>
                        <td>
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
@endif
















@if (Auth::user()->role == 'supervisor')
<div class="fixed left-3 top-[87px] w-[240px] h-[86%] bg-blue-200 rounded-3xl p-4">
    <ul class="mt-2" >
        <li class="mb-1 group">
            <a href="{{ asset('dashboard')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-blue-500 group-[.selected]:text-white">
                <i class="ri-dashboard-fill mr-3 text-lg"></i>
                <span class="font-poppins">Dashboard</span>
            </a>
        </li>
        <li class="mb-1 group active">
            <a href="{{ asset('accounts')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-blue-500 group-[.selected]:text-white">
                <i class="ri-admin-fill mr-3 text-lg"></i>
                <span class="font-poppins">Officer Accounts</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="{{ asset('vehicles')}}"  class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-blue-500 group-[.selected]:text-white">
                <i class="ri-account-pin-box-line mr-3 text-lg"></i>
                <span class="font-poppins">Tracking</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="{{ asset('calendar')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-blue-500 group-[.selected]:text-white">
                <i class="ri-user-fill mr-3 text-lg"></i>
                <span class="font-poppins">Calendar</span>
            </a>
        </li>
        <li class="mb-1 group">
            <a href="{{ asset('messages')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-blue-500 group-[.selected]:text-white">
                <i class="ri-calendar-2-fill mr-3 text-lg"></i>
                <span class="font-poppins">Messages</span>
            </a>
        </li>
    </ul>
</div>

<!--Container-->
<div class="relative top-[86px] left-[3px] md:w-[calc(100%-256px)] md:ml-64 xl:w-[79%] mx-auto px-5 p-5 rounded-lg bg-gray-100 z-0">
    <!--Card-->
    <div id='recipients' class="p-8 mt-10 lg:mt-0 rounded shadow bg-gray-200">
        <table id="myTable" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($accounts as $account)
                    <tr>
                        <td>{{ $account->id }}</td>
                        <td>{{ $account->first_name }}</td>
                        <td>{{ $account->last_name }}</td>
                        <td>{{ $account->email }}</td>
                        <td>{{ $account->age }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!--/Card-->
</div>
<!--End of Container-->

@endif
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
