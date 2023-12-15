<x-app-layout>

<x-message />

    <div class="">
        <div class="row">
            <div class="col-md-6">
                <video id="preview" width="100%"></video>
            </div>
            <div class="col-md-6">
                <button onclick="startScanner()">Open Camera</button>
                <button onclick="stopScanner()">Close Camera</button><br>

                <form action="{{ route('vehicles.borrow') }}" method="post"
                            enctype="multipart/form-data" class="pl-5 pr-5 pt-3 pb-3">
                            @csrf

                <div class="p-4 md:p-5 space-y-4">
                    <div class="grid gap-4 mb-4 sm:grid-cols-2">

                        <div>
                            <label>Plate Number: </label>
                            <input type="text" name="plate" id="plate" readonly=""
                                placeholder="Plate Number" class="form-control">
                        </div>

                        <div>
                            <label>Model: </label>
                            <input type="text" name="model" id="model" readonly="" placeholder="Model"
                                class="form-control">
                        </div>
                        <div>
                            <label>Brand: </label>
                            <input type="text" name="brand" id="brand" readonly="" placeholder="Brand"
                                class="form-control">
                        </div>
                        <div>
                            <label>VIN: </label>
                            <input type="text" name="vin" id="vin" readonly="" placeholder="vin"
                                class="form-control">
                        </div>
                        <div>
                            <label>Lastname </label>
                            <input type="text" name="last_name" id="last_name" readonly="" placeholder="last_name"
                                class="form-control" value="{{ Auth::user()->last_name }}">
                        </div>
                        <div>
                            <label>Firstname </label>
                            <input type="text" name="first_name" id="first_name" readonly="" placeholder="vin"
                                class="form-control" value="{{ Auth::user()->first_name }}">
                        </div>
                        <div>
                            <label>EmployeeID </label>
                            <input type="text" name="employee_id" id="employee_id" readonly="" placeholder="vin" value="{{ Auth::user()->employee_id }}"
                                class="form-control">
                        </div>
                        <div>
                            <label>Position </label>
                            <input type="text" name="position" id="position" readonly="" placeholder="vin" value="{{ Auth::user()->position }}"
                                class="form-control">
                        </div>
                        <div>
                            <label>Department </label>
                            <input type="text" name="department" id="department" readonly="" placeholder="vin" value="{{ Auth::user()->department}}"
                                class="form-control">
                        </div>

                    </div>
                </div>

                <button type="submit"
                                    class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                                    Use
                                </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        let scanner;

        function startScanner() {
            scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });

            Instascan.Camera.getCameras().then(function(cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    alert('No cameras found');
                }
            }).catch(function(e) {
                console.error(e);
            });

            scanner.addListener('scan', function(c) {
                let qrData = c.split(' ');

                // Set the plate information to the "try" input field
                document.getElementById('plate').value = qrData[0] || '';

                // Set the model information to the "model" input field
                document.getElementById('model').value = qrData[1] || '';

                document.getElementById('brand').value = qrData[2] || '';

                document.getElementById('vin').value = qrData[3] || '';

                updateStatus(qrData[0]);

            });
        }




        function updateStatus(plate) {
            fetch(`/vehicle/status/${plate}`, {
                    method: 'PATCH',
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log(data); // Log the response from the server
                })
                .catch(error => {
                    console.error('There was a problem with the fetch operation:', error);
                });
        }

        function stopScanner() {
            if (scanner) {
                scanner.stop();
                document.getElementById('try').value = '';
                document.getElementById('model').value = '';
            }
        }
    </script>








</x-app-layout>
