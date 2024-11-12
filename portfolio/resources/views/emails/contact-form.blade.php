<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <!-- Add Tailwind CSS CDN (if you don't have it installed via npm) -->
    <script src="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.js" integrity="sha384-SZADwzGoAk03ErG1Tbvl4WzfjJl5dln5J5Odb/xgsFttL7r5MSosykmBclc5Db7X" crossorigin="anonymous"></script>
</head>
<body class="bg-black text-white font-sans antialiased">

<!-- Container with black background -->
<div class="max-w-4xl mx-auto p-8 mt-10 bg-white rounded-lg shadow-lg">
    <!-- Main Heading -->
    <h2 class="text-4xl font-semibold text-center text-gray-800 mb-6">New Contact Form Submission</h2>

    <div class="space-y-6">
        <!-- Name Section -->
        <div>
            <p class="text-xl font-semibold text-gray-700"><strong>Name:</strong> {{ $data['name'] }}</p>
        </div>

        <!-- Email Section -->
        <div>
            <p class="text-xl font-semibold text-gray-700"><strong>Email:</strong> {{ $data['email'] }}</p>
        </div>

        <!-- Message Section -->
        <div>
            <p class="text-xl font-semibold text-gray-700"><strong>Message:</strong></p>
            <p class="text-lg text-gray-600">{{ $data['message'] }}</p>
        </div>
    </div>
</div>

</body>
</html>
