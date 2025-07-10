<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Smooth transitions for all elements */
        * {
            transition: all 0.2s ease;
        }
        
        /* Custom focus styles */
        input:focus, textarea:focus {
            transform: translateY(-1px);
        }
        
        /* Button hover effects */
        button:hover, a:hover {
            transform: translateY(-1px);
        }
    </style>
</head>
<body class="bg-gray-100 font-sans antialiased">
    @yield('content')
</body>
</html>
