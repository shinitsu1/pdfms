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
        </ul>
    </div>

    <!--Container-->
    <div class="relative top-[70px] left-[3px] md:w-[calc(100%-256px)] md:ml-64 xl:w-[79%] mx-auto px-5 p-5 rounded-lg bg-gray-100">
        <!--Card-->
        <div id='recipients' class="p-8 mt-10 lg:mt-0 rounded shadow bg-gray-200">
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="flex mb-3 items-center ml-[780px] text-black bg-[#edf2f7] hover:bg-blue-500 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" type="button">
                <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Add New Account
            </button>

            <!--AlphineModal-->
            <div x-data="{ supervisorDelete: false, supervisorEdit: false, itemToDelete: null, itemToEdit: null}">
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
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
                        @foreach ($data as $supervisor)
                            <tr>
                                <td class="text-center">{{ $supervisor->id }}</td>
                                <td class="text-center">{{ $supervisor->first_name }}</td>
                                <td class="text-center">{{ $supervisor->last_name }}</td>
                                <td class="text-center">{{ $supervisor->email }}</td>
                                <td class="text-center">{{ $supervisor->age }}</td>
                                <td class="text-sky-500 text-center">
                                    <button @click="supervisorEdit = true; itemToEdit = $event.target.getAttribute('data-item-id')"
                                    data-item-id="{{ $supervisor->id }}">
                                        Edit
                                    </button>
                                </td>
                                <td class="text-red-500 text-center">
                                    <button @click="supervisorDelete = true; itemToDelete = $event.target.getAttribute('data-item-id')"
                                    data-item-id="{{ $supervisor->id }}">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>


                <!-- Delete Modal -->
             <div x-show="supervisorDelete" class="fixed inset-0 overflow-y-auto flex items-center justify-center z-20" x-cloak>
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>
                    <div x-show="supervisorDelete" @click.away="supervisorDelete = false"
                        x-transition:enter="ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform scale-95"
                        x-transition:enter-end="opacity-100 transform scale-100"
                        x-transition:leave="ease-in duration-200"
                        x-transition:leave-start="opacity-100 transform scale-100"
                        x-transition:leave-end="opacity-0 transform scale-95"
                        class="bg-white rounded-lg overflow-hidden transform transition-all sm:max-w-lg sm:w-full">
                        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                User Confirmation Needed
                            </h3>
                        </div>
                            <!-- ... (modal content) ... -->
                        <div class="p-4 md:p-5 space-y-4">
                            <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                Are you sure you want to delete this account?
                            </p>
                            <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <form method="post" :action="`{{ route('supervisor_delete', '') }}/${itemToDelete}`">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                        Delete
                                    </button>
                                </form>
                                <button @click="supervisorDelete = false"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                    Cancel
                                </button>
                            </div>
                        </div>
                        <!--End of ModalContent-->
                    </div>
                </div>
            <!--End of AlphineModal-->
            </div>
        <!--End of Card-->
        </div>
    <!--End of Container-->
    </div>





        <script>
            function deleteItem(itemId) {
                // Set the itemToDelete value based on the clicked item's ID
                this.itemToDelete = itemId;
            }
        </script>


        <!-- jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<!--Datatables -->
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script>
    $(document).ready(function() {

        var table = $('#example').DataTable({


            lengthMenu: [
        [5, 10, 25, 50, 100, -1],
        [5, 10, 25, 50, 100, 'All']
        ]

            })
            .columns.adjust()
            .responsive.recalc();

            $('#example').DataTable();

    });



</script>

{{-- <x-edit /> --}}
</x-app-layout>
