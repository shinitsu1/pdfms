<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Webpage with Calendar</title>

    <!-- FullCalendar dependencies -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <!-- Your custom styles or other dependencies go here -->
</head>

<body>
    <!-- Your page content goes here -->

    <!-- Calendar container -->
    <div id="calendar" class="max-w-screen-lg mx-auto my-8 bg-blue-200 p-4 rounded-lg"></div>

    <!-- Your custom scripts go here -->
</body>
<script>
    document.addEventListener('DOMContentLoaded', function () {
      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        eventRender: function (event, element) {
          element.css('background-color', '#2980b9'); /* Blue background for events */
          element.css('color', '#ffffff'); /* White text for events */
        },
        // Your other FullCalendar options and events go here
      });
    });
  </script>

</html>
