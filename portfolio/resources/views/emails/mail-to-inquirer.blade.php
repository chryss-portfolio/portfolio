<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Submission</title>
    <style>
        /* Tailwind CDN */
        @import url('https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    </style>
</head>
<body class="bg-gray-100 text-gray-900 font-sans antialiased">

<div class="max-w-3xl mx-auto p-8 mt-6 bg-white rounded-lg shadow-lg">
    <div class="text-center mb-6">
        <h1 class="text-3xl font-bold text-green-600">Thank You for Contacting Us!</h1>
    </div>

    <div class="space-y-4">
        <p class="text-lg font-semibold">Hi {{ $data['name'] }},</p>
        <p class="text-base">
            Thank you for getting in touch with us! We’ve received your message and will get back to you shortly. Below are the details you submitted:
        </p>

        <div class="mt-4">
            <p class="text-lg font-medium text-gray-700"><strong>Your Name:</strong> {{ $data['name'] }}</p>
            <p class="text-lg font-medium text-gray-700"><strong>Your Email:</strong> {{ $data['email'] }}</p>
            <p class="text-lg font-medium text-gray-700"><strong>Your Message:</strong></p>
            <p class="text-base text-gray-600">{{ $data['message'] }}</p>
        </div>

        <p class="mt-4 text-base text-gray-800">
            We will get back to you as soon as possible. In the meantime, feel free to explore our website for more information.
        </p>
    </div>
</div>

</body>
</html>
