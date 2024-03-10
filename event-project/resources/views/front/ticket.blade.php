<!DOCTYPE html>
<html>

<head>
    <title>Reservation Details</title>
</head>

<body>
    
    

    </div>
    <p>Thank you for your reservation. Here are the details:</p>
    {{-- <p>Event: {{ $userid }}</p> --}}
    
    <p>event title: {{ $event->title }}</p>
    <p>event location: {{ $event->location }}</p>
    <p>Date: {{ $event->start_date }}</p>
    <!-- Add more reservation details as needed -->
</body>

</html>
