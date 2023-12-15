<x-app-layout>



    <div class="fixed top-[86px]">
        <div class="row">
            <div class="col-md-6">
                <video id="preview" width="100%"></video>
            </div>
            <div class="col-md-6">
                <button onclick="startScanner()">Open Camera</button>
                <button onclick="stopScanner()">Close Camera</button><br>
                <label>Plate Number: </label>
                <input type="text" name="text" id="try" readonly="" placeholder="Plate Number" class="form-control">
                <br>
                <label>Model: </label>
                <input type="text" name="model" id="model" readonly="" placeholder="Model" class="form-control">
                <br>
                <label>Brand: </label>
                <input type="text" name="brand" id="brand" readonly="" placeholder="Brand" class="form-control">
                <br>
                <label>VIN: </label>
                <input type="text" name="vin" id="vin" readonly="" placeholder="vin" class="form-control">
            </div>
        </div>
    </div>

    <script>
        let scanner;

        function startScanner() {
            scanner = new Instascan.Scanner({
                video: document.getElementById('preview')
            });

            Instascan.Camera.getCameras().then(function (cameras) {
                if (cameras.length > 0) {
                    scanner.start(cameras[0]);
                } else {
                    alert('No cameras found');
                }
            }).catch(function (e) {
                console.error(e);
            });

            scanner.addListener('scan', function (c) {
                let qrData = c.split(' ');

                // Set the plate information to the "try" input field
                document.getElementById('try').value = qrData[0] || '';

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
