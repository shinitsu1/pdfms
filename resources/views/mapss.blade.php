<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>QR Code Scanner</title>
    <!-- Include Instascan library -->
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>
<body>
    <video id="preview"></video>

    <script>
      // ... (Previous code for scanner initialization)
  
      scanner.addListener('scan', function (content) {
          // Content scanned from QR code
          console.log('Scanned content:', content);
  
          // AJAX request to verify login
          fetch('/verify-login', {
              method: 'POST',
              headers: {
                  'Content-Type': 'application/json',
                  'X-CSRF-TOKEN': '{{ csrf_token() }}' // Add Laravel CSRF token if using it
              },
              body: JSON.stringify({ content: content })
          })
          .then(response => response.json())
          .then(data => {
              // Handle the response from the backend
              if (data.success) {
                  console.log(data.message); // Login successful
                  // Redirect to a logged-in area or perform other actions
              } else {
                  console.error(data.message); // Login failed
                  // Handle failed login (e.g., show an error message)
              }
          })
          .catch(error => {
              console.error('Error:', error);
              // Handle any errors that occurred during the request
          });
      });
  </script>
  
</body>
</html>
