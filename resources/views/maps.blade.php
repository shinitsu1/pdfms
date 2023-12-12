<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FleetLink</title>
    <style>
        body {
            margin: 0;
            display: flex;
        }

        #map {
            flex: 1;
            height: 100vh;
        }

        #sidebar {
            width: 170px;
            max-width: 100%;
            overflow: hidden;
            background-color: white;
            color: black;
            padding: 20px;
            order: -1;
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            transition: max-width 0.5s;
            position: relative;
        }

        #weather {
            margin-top: 20px;
        }

        #weather img {
            width: 30px;
            height: 30px;
            margin-right: 10px;
        }

        .label {
            font-weight: bold;
        }

        .value {
            margin-left: 5px;
            display: block;
        }

        .detail {
            margin-bottom: 5px;
            margin-top: 20px;
        }

        /* Added styles for different accuracy levels */
        .high-accuracy {
            color: green;
        }

        .moderate-accuracy {
            color: yellow;
        }

        .low-accuracy {
            color: red;
        }
    </style>
</head>

<body>
    <div id="sidebar">
        <div id="details"> </div>
        <div class="label" id="weather-label">🌦️ Weather:</div>
        <div id="weather">Loading weather...</div>
    </div>

    <div id="map"> </div>

    <script>
        const details = document.getElementById('details');
        const sidebar = document.getElementById('sidebar');
        const map = document.getElementById('map');

        navigator.geolocation.getCurrentPosition(position => {
            const { latitude, longitude } = position.coords;
            document.getElementById('map').innerHTML = '<iframe width="100%" height="100%" src="https://maps.google.com/maps?q=' + latitude + ',' + longitude + '&amp;z=15&amp;output=embed"></iframe>';

            const weatherUrl = `https://api.weatherbit.io/v2.0/current?key=aa47cf0292524e17b436ce4681c5313c&lat=${latitude}&lon=${longitude}`;
            
            fetch(weatherUrl)
                .then(response => response.json())
                .then(data => {
                    const weatherDetails = data.data[0];
                    const { temp, weather } = weatherDetails;

                    const weatherDiv = document.getElementById('weather');
                    weatherDiv.innerHTML = `<img src="https://www.weatherbit.io/static/img/icons/${weather.icon}.png" alt="${weather.description}">
                                            ${temp}°, ${weather.description}`;
                })
                .catch(error => {
                    console.error('Error fetching weather data:', error);
                    document.getElementById('weather').innerHTML = 'Failed to fetch weather';
                });
        });

        var reqcount = 0;

        navigator.geolocation.watchPosition(successCallback, errorCallback, options);

        function successCallback(position) {
            const { accuracy, latitude, longitude, altitude, heading, speed } = position.coords;

            reqcount++;

            let accuracyLevel;
            if (accuracy < 100) {
                accuracyLevel = 'High';
            } else if (accuracy < 300) {
                accuracyLevel = 'Moderate';
            } else {
                accuracyLevel = 'Low';
            }

            // Set the accuracy level color based on its value
            let accuracyClass;
            if (accuracyLevel === 'High') {
                accuracyClass = 'high-accuracy';
            } else if (accuracyLevel === 'Moderate') {
                accuracyClass = 'moderate-accuracy';
            } else {
                accuracyClass = 'low-accuracy';
            }
            
            details.innerHTML = "<div class='detail'><span class='label'>🎯Accuracy:</span><span class='value'>" + accuracy.toFixed(2) + " (" + "<span class='" + accuracyClass + "'>" + accuracyLevel + "</span>" + ")</span></div>";
            details.innerHTML += "<div class='detail'><span class='label'>🌐Latitude:</span><span class='value'>" + (latitude || 'N/A') + "</span></div><div class='detail'><span class='label'>🌐Longitude:</span><span class='value'>" + (longitude || 'N/A') + "</span></div>";
            details.innerHTML += "<div class='detail'><span class='label'>🌐Altitude:</span><span class='value'>" + (altitude || 'N/A') + "</span></div>";
            details.innerHTML += "<div class='detail'><span class='label'>🧭Direction:</span><span class='value'>" + (heading || 'N/A') + "</span></div>";
            details.innerHTML += "<div class='detail'><span class='label'>🚓Speed:</span><span class='value'>" + (speed || 'N/A') + "</span></div>";
            details.innerHTML += "<div class='detail'><span class='label'>🔄Request Count:</span><span class='value'>" + (reqcount || 'N/A') + "</span></div>";
        }

        function errorCallback(error) {
            // Handle geolocation error if needed
        }

        var options = {
            enableHighAccuracy: true,
            timeout: 1000,
            maximumAge: 0
        };
    </script>
</body>

</html>
