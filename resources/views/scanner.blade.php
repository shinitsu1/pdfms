<x-app-layout>



    <div class="fixed top-[86px]">
        <div class="row">
            <div class="col-md-6">
                <video id="preview" width="100%"></video>
            </div>
            <div class="col-md-6">
                <button onclick="startScanner()">Open Camera</button>
                <button onclick="stopScanner()">Close Camera</button>
                <label>SCAN QRCODE</label>
                <input type="text" name="text" id="try" readonly="" placeholder="scan qrcode" class="form-control">

                <label>Model</label>
                <input type="model" name="model" id="model" readonly="" placeholder="Model" class="form-control">
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
