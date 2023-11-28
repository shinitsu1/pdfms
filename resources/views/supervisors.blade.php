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
    <div class="relative top-[70px] md:w-[calc(100%-256px)] md:ml-64 xl:w-[80%] mx-auto px-2 p-5 rounded-lg bg-gray-100">
        <!--Card-->
        <div id='recipients' class="p-5 mt-5 lg:mt-0 rounded-2xl shadow bg-gray-200">
            <!--AlphineModal-->
            <div x-data="{ supervisorDelete: false, adminNewUsers: false, supervisorEdit: false, itemToDelete: null, itemToEdit: null}">
                <button @click="adminNewUsers = true" class="mb-2 text-white bg-blue-500 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2 text-center"><i class="ri-add-line mr-1 text-lg"></i>Add New Supervisor</button>
                <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                    <thead>
                        <tr>
                            <th>UserID</th>
                            <th>Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $supervisor)
                                <tr x-on:click="itemToEdit = {{ $supervisor->id }};">
                                <td class="text-center">{{ $supervisor->id }}</td>
                                <td class="text-center">{{ $supervisor->name }}</td>
                                <td class="text-center">{{ $supervisor->username }}</td>
                                <td class="text-center">{{ $supervisor->email }}</td>
                                <td class="text-center">{{ $supervisor->phone }}</td>
                                <td class="text-center ">
                                    <button @click="supervisorEdit = true; itemToEdit = $event.target.getAttribute('data-item-id')" data-item-id="{{ $supervisor->id }}" class="bg-sky-600 text-white px-6 py-2 rounded-xl">
                                        Edit
                                    </button>
                                </td>
                                <td class="text-red-500 text-center">
                                    <button @click="supervisorDelete = true; itemToDelete = $event.target.getAttribute('data-item-id')"
                                    data-item-id="{{ $supervisor->id }}" class="bg-red-600 text-white px-4 py-2 rounded-xl">
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
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white"><i class="ri-edit-2-fill mr-1 text-lg bg-blue-200 p-4 rounded-full"></i>
                Edit User Information
            </h3>
        </div>
            @foreach($data as $item)
            <div x-show="itemToEdit === {{ $item->id }}">
                    <form method="post" :action="`{{ route('supervisors.update', '') }}/${itemToEdit}`">
                    @csrf
                    @method('patch')

                    <div class="p-4 md:p-5 space-y-4">
                        <div class="grid gap-4 mb-4 sm:grid-cols-2">
                            <div>
                                <label for="UserID" class="block mb-2 text-sm font-medium text-gray-900">UserID</label>
                                <input type="text" name="id" value="{{ $item->id }}" class="bg-gray-100 border border-gray-300 text-gray-900" disabled>
                            </div>
                            <div>
                                <label for="created_at" class="block mb-2 text-sm font-medium text-gray-900">Account Created</label>
                                <input type="text" name="created_at" value="{{ $item->created_at }}" class="bg-gray-100 border border-gray-300 text-gray-900" disabled>
                            </div>
                            <div>
                                <label for="name">Name:</label>
                                <input type="text" name="name" value="{{ $item->name }}" class="bg-gray-100 border border-gray-600 text-gray-900" required>
                            </div>

                            <div>
                                <label for="username">Username</label>
                                <input type="text" name="username" value="{{ $item->username }}" class="bg-gray-100 border border-gray-600 text-gray-900" required>
                            </div>

                            <div>
                                <label for="email">Email</label>
                                <input type="text" name="email" value="{{ $item->email }}" class="bg-gray-100 border border-gray-600 text-gray-900" required>
                            </div>

                            <div>
                                <label for="phone">Phone Number</label>
                                <input type="text" name="phone" value="{{ $item->phone }}" class="bg-gray-100 border border-gray-600 text-gray-900" required>
                            </div>
                        </div>
                    </div>

                    <!--Buttons-->
                    <div class="flex items-center justify-end p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="submit"
                                class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        Update
                        </button>
                        <Button @click="supervisorEdit = false"
                                type="button"
                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                        Cancel
                        </Button>
                    </div>
                    <!--Buttons-->
                </form>
            </div>
            @endforeach
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
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white"><i class="ri-delete-bin-2-line mr-1 text-xl bg-red-300 p-4 rounded-full"></i>
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


<!--AdminModal-->
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
        <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
            <h3 class="text-xl font-semibold text-gray-900"><i class="ri-add-line mr-1 text-lg bg-blue-200 p-4 rounded-full"></i>
                Add New Supervisor
            </h3>
        </div>
            <hr class="bg-black w-[410px]">
            <form action="{{ route('supervisors.create_supervisor') }}" method="post" class="pl-5 pr-5 pt-3 pb-3">
                @csrf
                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">
                        <div>
                            <label for="created_at" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
                            <input type="text" name="name" class="bg-gray-100 border border-gray-300 text-gray-900" required>
                        </div>

                        <div>
                            <label for="created_at" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                            <input type="text" name="username" class="bg-gray-100 border border-gray-300 text-gray-900" required>
                        </div>

                        <div>
                            <label for="created_at" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                            <input type="text" name="email" class="bg-gray-100 border border-gray-300 text-gray-900" required>
                        </div>

                        <div>
                            <label for="created_at" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                            <input type="text" name="phone" class="bg-gray-100 border border-gray-300 text-gray-900" required>
                        </div>
                    </div>
                </div>

            <div class="flex justify-end mt-3">
                <button type="submit"
                        class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Create
                </button>
            </form>
            <div class="absolute mr-[90px]">
            <button type="button" @click="adminNewUsers = false"
                    class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                Cancel
            </button>
            </div>
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
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
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
