<x-app-layout>

@if (Auth::user()->role == 'admin')
    <div class="fixed left-3 top-[87px] w-[240px] h-[86%] bg-blue-200 rounded-3xl p-4">
        <ul class="mt-2" >
            <li class="mb-1 group active">
                <a href="{{ asset('dashboard')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-blue-500 group-[.selected]:text-white">
                    <i class="ri-dashboard-fill mr-3 text-lg"></i>
                    <span class="font-poppins">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ asset('supervisors')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-blue-500 group-[.selected]:text-white">
                    <i class="ri-admin-fill mr-3 text-lg"></i>
                    <span class="font-poppins">Supervisors</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ asset('accounts')}}"  class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-blue-500 group-[.selected]:text-white">
                    <i class="ri-account-pin-box-line mr-3 text-lg"></i>
                    <span class="font-poppins">Accounts</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ asset('vehicles')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-blue-500 group-[.selected]:text-white">
                    <i class="ri-user-fill mr-3 text-lg"></i>
                    <span class="font-poppins">Vehicles</span>
                </a>
            </li>
        </ul>
    </div>

<!-- START MAIN -->
<main class="fixed top-[86px] w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
    <!-- START DASHBOARD -->
    <div class="bg-slate-200 h-screen w-full overflow-y-auto">
        <main>
            <!-- Content -->
            <div class="mt-2">
              <!-- State cards -->
                <div class="grid grid-cols-1 gap-8 p-4 lg:grid-cols-2 xl:grid-cols-4">

                <!-- Value card -->
                    <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                        <div>
                            <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                            Supervisors
                            </h6>
                            <span class="text-xl font-semibold">{{ $countSupervisor }}</span>
                            <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                            +4.14%
                            </span>
                        </div>
                        <div>
                            <span>
                                <i class="ri-shield-user-fill ml-3 text-6xl text-blue-500"></i>
                            </span>
                        </div>
                    </div>

                <!-- Users card -->
                    <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                        <div>
                            <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                            Police Accounts
                            </h6>
                            <span class="text-xl font-semibold">{{ $countAccount }}</span>
                            <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                            +2.6%
                            </span>
                        </div>
                        <div>
                            <span>
                                <i class="ri-star-smile-fill ml-3 text-6xl text-blue-500"></i>
                            </span>
                        </div>
                    </div>

                <!-- Orders card -->
                    <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                        <div>
                            <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                            Vehicles
                            </h6>
                            <span class="text-xl font-semibold">{{ $countVehicle }}</span>
                            <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                            +3.1%
                            </span>
                        </div>
                        <div>
                            <span>
                                <i class="ri-steering-2-line ml-3 text-6xl text-blue-500"></i>
                            </span>
                        </div>
                    </div>

                <!-- Tickets card -->
                    <div class="flex items-center justify-between p-4 bg-white rounded-md dark:bg-darker">
                        <div>
                            <h6 class="text-xs font-medium leading-none tracking-wider text-gray-500 uppercase dark:text-primary-light">
                            Available Vehicle
                            </h6>
                            <span class="text-xl font-semibold">{{ $countVehicle }}</span>
                            <span class="inline-block px-2 py-px ml-2 text-xs text-green-500 bg-green-100 rounded-md">
                            +3.1%
                            </span>
                        </div>
                        <div>
                            <span>
                                <i class="ri-steering-2-line ml-3 text-6xl text-blue-500"></i>
                            </span>
                        </div>
                    </div>
                </div>

              <!-- Charts -->
              <div class="grid grid-cols-1 p-4 space-y-8 lg:gap-8 lg:space-y-0 lg:grid-cols-3">
                <!-- Bar chart card -->
                <div class="col-span-2 bg-white rounded-md dark:bg-darker" x-data="{ isOn: false }">
                  <!-- Card header -->
                  <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                    <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Bar Chart</h4>
                    <div class="flex items-center space-x-2">

                    </div>
                  </div>

                  <!-- Chart -->
                  <div class="relative p-4 h-72">
                    <canvas id="barChart"></canvas>
                  </div>
                </div>

                <!-- Doughnut chart card -->
                <div class="bg-white rounded-md dark:bg-darker" x-data="{ isOn: false }">
                  <!-- Card header -->
                  <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                    <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Doughnut Chart</h4>
                    <div class="flex items-center">

                    </div>
                  </div>
                  <!-- Chart -->
                  <div class="relative p-4 h-72">
                    <canvas id="doughnutChart"></canvas>
                  </div>
                </div>
              </div>

              <!-- Two grid columns -->
              <div class="grid grid-cols-1 p-4 space-y-8 lg:gap-8 lg:space-y-0 lg:grid-cols-3">
                <!-- Active users chart -->
                <div class="col-span-1 bg-white rounded-md dark:bg-darker">
                  <!-- Card header -->
                  <div class="p-4 border-b dark:border-primary">
                    <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Active users right now</h4>
                  </div>
                  <p class="p-4">
                    <span class="text-2xl font-medium text-gray-500 dark:text-light" id="usersCount">0</span>
                    <span class="text-sm font-medium text-gray-500 dark:text-primary">Users</span>
                  </p>
                  <!-- Chart -->
                  <div class="relative p-4">
                    <canvas id="activeUsersChart"></canvas>
                  </div>
                </div>

                <!-- Line chart card -->
                <div class="col-span-2 bg-white rounded-md dark:bg-darker" x-data="{ isOn: false }">
                  <!-- Card header -->
                  <div class="flex items-center justify-between p-4 border-b dark:border-primary">
                    <h4 class="text-lg font-semibold text-gray-500 dark:text-light">Line Chart</h4>
                    <div class="flex items-center">
                      <button
                        class="relative focus:outline-none"
                        x-cloak
                        @click="isOn = !isOn; $parent.updateLineChart()"
                      >
                        <div
                          class="w-12 h-6 transition rounded-full outline-none bg-primary-100 dark:bg-primary-darker"
                        ></div>
                        <div
                          class="absolute top-0 left-0 inline-flex items-center justify-center w-6 h-6 transition-all duration-200 ease-in-out transform scale-110 rounded-full shadow-sm"
                          :class="{ 'translate-x-0  bg-white dark:bg-primary-100': !isOn, 'translate-x-6 bg-primary-light dark:bg-primary': isOn }"
                        ></div>
                      </button>
                    </div>
                  </div>
                  <!-- Chart -->
                  <div class="relative p-4 h-72">
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
        </main>
    </div>
</main>
@endif











@if (Auth::user()->role == 'supervisor')

    <div class="fixed left-3 top-[87px] w-[240px] h-[86%] bg-blue-200 rounded-3xl p-4">
        <ul class="mt-2" >
            <li class="mb-1 group active">
                <a href="{{ asset('dashboard')}}" class="flex items-center py-2 px-4 text-black hover:bg-blue-400 hover:text-gray-100 rounded-md group-[.active]:bg-blue-700 group-[.active]:text-white group-[.selected]:bg-blue-500 group-[.selected]:text-white">
                    <i class="ri-dashboard-fill mr-3 text-lg"></i>
                    <span class="font-poppins">Dashboard</span>
                </a>
            </li>
            <li class="mb-1 group">
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
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    {{-- <div class="fixed py-12 top-[60px] left-[240px]">
        <div class="max-w-5xl sm:px-6 lg:px-8">
            <div class="bg-white mx-auto dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in as Supervisor!") }}
                </div>
            </div>
        </div>
    </div> --}}

    <main class="fixed top-[86px] w-full md:w-[calc(100%-256px)] md:ml-64 bg-gray-50 min-h-screen transition-all main">
        <!-- START DASHBOARD -->
        <div class="bg-slate-200 h-screen w-full overflow-y-auto">
            <div class="p-8">
                <div class="grid grid-cols-1 md:cols-1 lg:grid-cols-4 gap-3 lg:gap-8">
                    <div class="p-4 bg-white rounded-lg flex items-center h-[140px] shadow-sm">
                        <div class=" flex justify-start">
                            <ul>
                                <i class="ri-shield-user-fill ml-3 text-4xl text-blue-900"></i>
                                <li class="font-extrabold text-slate-800 ml-4 mt-1 text-xl">{{ $countSupervisor }}</li>
                                <li class="font-bold ml-4 text-gray-400">Total Supervisors</li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-4 bg-white rounded-lg flex items-center h-[140px] shadow-sm">
                        <div class="flex justify-start">
                            <ul>
                                <i class="ri-star-smile-fill ml-3 text-4xl text-blue-900"></i>
                                <li class="font-extrabold text-slate-800 ml-4 mt-1 text-xl"> {{ $countAccount }}</li>
                                <li class="font-bold ml-4 text-gray-400"> Total Police Accounts</li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-4 bg-white rounded-lg flex items-center h-[140px] shadow-sm">
                        <div class="w-3/5 flex justify-start">
                            <ul>
                                <i class="ri-steering-2-line ml-3 text-4xl text-blue-900"></i>
                                <li class="font-extrabold text-slate-800 ml-4 mt-1 text-xl">
                                {{ $countVehicle }}
                                </li>
                                <li class="font-bold ml-4 text-gray-400">Total Vehicles</li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-4 bg-white rounded-lg flex items-center h-[140px] shadow-sm">
                        <div class="w-3/5 flex justify-start">
                            <ul>
                                <i class="ri-steering-2-line ml-3 text-4xl text-blue-900"></i>
                                <li class="font-extrabold text-slate-800 ml-4 mt-1 text-xl">
                                {{ $countVehicle }}
                                </li>
                                <li class="font-bold ml-4 text-gray-400">Total Vehicles</li>
                            </ul>
                        </div>
                    </div>




     <!-- Component Start -->
    <div class="flex flex-col items-center w-[70%] max-w-screen-md p-6 pb-6 bg-white rounded-lg shadow-xl sm:p-8 col-span-2 ">
        <h2 class="text-xl font-bold">Repair List</h2>
        <span class="text-sm font-semibold text-gray-500">OCTOBER 2023</span>
        <div class="flex items-end flex-grow w-full mt-2 space-x-2 sm:space-x-3">
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block"></span>
                <div class="relative flex justify-center w-full h-8 bg-indigo-200"></div>
                <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
                <div class="relative flex justify-center w-full h-16 bg-indigo-400"></div>
                <span class="absolute bottom-0 text-xs font-bold">178</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$45,000</span>
                <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
                <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
                <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
                <span class="absolute bottom-0 text-xs font-bold">179</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
                <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
                <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
                <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
                <span class="absolute bottom-0 text-xs font-bold">180</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$50,000</span>
                <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
                <div class="relative flex justify-center w-full h-6 bg-indigo-300"></div>
                <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
                <span class="absolute bottom-0 text-xs font-bold">181</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$47,500</span>
                <div class="relative flex justify-center w-full h-10 bg-indigo-200"></div>
                <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
                <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
                <span class="absolute bottom-0 text-xs font-bold">182</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$55,000</span>
                <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
                <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
                <span class="absolute bottom-0 text-xs font-bold">183</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$60,000</span>
                <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                <div class="relative flex justify-center w-full h-16 bg-indigo-300"></div>
                <div class="relative flex justify-center w-full h-20 bg-indigo-400"></div>
                <span class="absolute bottom-0 text-xs font-bold">184</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$57,500</span>
                <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
                <div class="relative flex justify-center w-full h-24 bg-indigo-400"></div>
                <span class="absolute bottom-0 text-xs font-bold">185</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$67,500</span>
                <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                <div class="relative flex justify-center w-full h-10 bg-indigo-300"></div>
                <div class="relative flex justify-center w-full h-32 bg-indigo-400"></div>
                <span class="absolute bottom-0 text-xs font-bold">186</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$65,000</span>
                <div class="relative flex justify-center w-full h-12 bg-indigo-200"></div>
                <div class="relative flex justify-center w-full h-12 bg-indigo-300"></div>
                <div class="relative flex justify-center w-full bg-indigo-400 h-28"></div>
                <span class="absolute bottom-0 text-xs font-bold">187</span>
            </div>
            <div class="relative flex flex-col items-center flex-grow pb-5 group">
                <span class="absolute top-0 hidden -mt-6 text-xs font-bold group-hover:block">$70,000</span>
                <div class="relative flex justify-center w-full h-8 bg-indigo-200"></div>
                <div class="relative flex justify-center w-full h-8 bg-indigo-300"></div>
                <div class="relative flex justify-center w-full h-40 bg-indigo-400"></div>
                <span class="absolute bottom-0 text-xs font-bold">188</span>
            </div>
        </div>
    </div>
    <!-- Bar Chart End  -->

    <!-- Pie Chart Start -->
                    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md lg:col-span-2">
                        <div class="flex justify-between mb-2 items-start">
                            <div class="font-medium">Barangay</div>
                        </div>

                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(drawChart);

                            function drawChart() {

                                var data = google.visualization.arrayToDataTable([
                                ['Task', 'Hours per Day'],
                                ['Brgy 178',     11],
                                ['Brgy 179',      2],
                                ['Brgy 180',  2],
                                ['Brgy 181', 2],
                                ['Brgy 182',    7]
                                ]);

                                var options = {

                                };

                                var chart = new google.visualization.PieChart(document.getElementById('piechart'));

                                chart.draw(data, options);
                            }
                        </script>
                        <div id="piechart" style="width: 420px; height: 295px;"></div>
                    </div>
                    <!-- Pie Chart End -->
                </div>
            </div>
        </div>
    </main>
@endif



</x-app-layout>
