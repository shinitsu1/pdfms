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


            <!--AlphineModal-->
            <div x-data="{ supervisorDelete: false, adminNewUsers: false, supervisorEdit: false, itemToDelete: null, itemToEdit: null}">
                <button @click="adminNewUsers = true">Add New Users</button>
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $supervisor)
                                <tr x-on:click="itemToEdit = {{ $supervisor->id }};">
                                <td class="text-center">{{ $supervisor->id }}</td>
                                <td class="text-center">{{ $supervisor->name }}</td>
                                <td class="text-center">{{ $supervisor->email }}</td>
                                <td class="text-center ">
                                    <button @click="supervisorEdit = true; itemToEdit = $event.target.getAttribute('data-item-id')" data-item-id="{{ $supervisor->id }}" class="bg-sky-600 text-white px-6 py-2 rounded">
                                        Edit
                                    </button>
                                </td>
                                <td class="text-red-500 text-center">
                                    <button @click="supervisorDelete = true; itemToDelete = $event.target.getAttribute('data-item-id')"
                                    data-item-id="{{ $supervisor->id }}" class="bg-red-600 text-white px-4 py-2 rounded">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

<!-- Edit Modal -->
<div x-show="supervisorEdit" class="fixed inset-0 overflow-y-auto flex items-center justify-center z-20" x-cloak>
    <div class="fixed inset-0 transition-opacity" aria-hidden="true">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <div x-show="supervisorEdit" @click.away="supervisorEdit = false"
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 transform scale-95"
        x-transition:enter-end="opacity-100 transform scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 transform scale-100"
        x-transition:leave-end="opacity-0 transform scale-95"
        class="bg-white rounded-lg overflow-hidden transform transition-all sm:max-w-lg sm:w-full">
        <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-col sm:items-center">
            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to update this user?</h3>

            @foreach($data as $item)
            <div x-show="itemToEdit === {{ $item->id }}">
                    <form method="post" :action="`{{ route('supervisors.update', '') }}/${itemToEdit}`">
                    @csrf
                    @method('patch')
                    <label for="id">ID:</label>
                    <input type="text" name="id" value="{{ $item->id }}" disabled>
                    <br>
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{ $item->name }}" required>
                    <br>
                    <label for="email">Email:</label>
                    <input type="text" name="email" value="{{ $item->email }}" required>
                    <br>
                    <label for="password">Password:</label>
                    <input type="text" name="password" value="{{ $item->password }}" required>
                    <br>
                    <button type="submit"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        Update
                    </button>
                </form>
            </div>
            @endforeach

            <button @click="supervisorEdit = false"
                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                Cancel
            </button>
        </div>
    </div>
</div>












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

             <!-- Add New Users Modal -->
             <div x-show="adminNewUsers" class="fixed inset-0 overflow-y-auto flex items-center justify-center z-20" x-cloak>
                <div class="fixed inset-0 transition-opacity" aria-hidden="true">
                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                </div>

                <div x-show="adminNewUsers" @click.away="adminNewUsers = false"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-95"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-95"
                    class="bg-white rounded-lg overflow-hidden transform transition-all sm:max-w-lg sm:w-full">
                    <!--modal Header-->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                            Register New Supervisor
                        </h3>
                    </div>
                    <!-- ... (modal content) ... -->
                    <form action="" method="POST">
                    @csrf
                    <div class="p-4 md:p-5 space-y-4">

                            <div class="grid gap-4 mb-4 sm:grid-cols-2">
                                <div>
                                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                    <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="First name" required="" value={{old('first_name')}}>
                                </div>
                                <div>
                                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                    <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Last name" required="">
                                </div>
                                <div>
                                    <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                    <input type="text" name="brand" id="brand" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="sample@sample.com" required="">
                                </div>
                                <div>
                                    <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
                                    <input type="number" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="User Age" required="">
                                </div>


                            </div>

                        <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-400 rounded-b dark:border-gray-600">
                            <button type="submit"
                                    class="text-white bg-sky-600 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                                Create
                            </button>
                        </form>
                        </div>
                        <button @click="adminNewUsers = false"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                            Cancel
                        </button>
                    </div>


                </div>
            </div>


            </div>
        </div>
    </div>


        <script>
            function deleteItem(itemId) {
                // Set the itemToDelete value based on the clicked item's ID
                this.itemToDelete = itemId;
            }
        </script>

        <script>
            window.addEventListener('DOMContentLoaded', () => {
                Alpine.data('yourComponentName', () => ({
                    supervisorEdit: false,
                    itemToEdit: null, // Variable to store the selected item
                }));
            });
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
