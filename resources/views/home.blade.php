<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Performance Prediction</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="bg-gray-900 text-white">
    <!-- Navbar -->
    <nav class="flex items-center justify-between p-6">
        <div class="text-2xl font-semibold text-white">
            <a href="/">Prediction Platform</a>
        </div>
        <ul class="flex space-x-6 text-lg">
            <li><a href="#features" class="hover:text-gray-400">Features</a></li>
            <li><a href="#about" class="hover:text-gray-400">About</a></li>
            <li><a href="#contact" class="hover:text-gray-400">Contact</a></li>
        </ul>
    </nav>

    <!-- Hero Section and Register -->
    <header class="flex items-center justify-center h-screen bg-gradient-to-r from-gray-400 to-black-700 text-center">
        <div>
            <h1 class="text-5xl font-bold mb-4">Predict Your Academic Performance</h1>
            <p class="text-lg mb-6">Get accurate predictions about your academic future based on current performance.</p>
            <a href="login" class="bg-red-600 hover:bg-red-900 text-white py-2 px-6 rounded-full text-xl">
                Try It Now
            </a>
        </div>
    </header>


    <!-- Features Section -->
    <section id="features" class="py-20 bg-gray-900 text-center">
        <h2 class="text-3xl font-semibold mb-6">Key Features</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
            <div>
                <h3 class="text-xl font-semibold mb-4">Real-time Predictions</h3>
                <p class="text-gray-400">Get predictions based on current grades and previous performance data.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4">User-friendly Interface</h3>
                <p class="text-gray-400">An intuitive design that makes it easy to get started and analyze results.</p>
            </div>
            <div>
                <h3 class="text-xl font-semibold mb-4">Comprehensive Analytics</h3>
                <p class="text-gray-400">Detailed insights into performance trends and improvement areas.</p>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-gray-800 text-center">
        <h2 class="text-3xl font-semibold mb-6">About the Platform</h2>
        <p class="text-lg text-gray-300 max-w-4xl mx-auto mb-6">
            Our platform uses advanced algorithms to predict student performance based on their academic history.
            Whether you're a student looking to assess your progress or a teacher looking to help students succeed,
            we provide valuable insights.
        </p>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-gray-900 text-center">
    <h2 class="text-3xl font-semibold mb-6">Get In Touch</h2>
    <p class="text-lg text-gray-300 mb-6">For any inquiries or feedback, reach out to us.</p>
    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mushyp420@gmail.com" class="bg-indigo-600 hover:bg-indigo-700 text-white py-3 px-6 rounded-lg text-xl mb-4 inline-block">
        Email Us
    </a>
    <br><br>
    <a href="tel:+255616012915"><p><b>Tel: </b>+255 616 012915</p></a>

    <!-- Add WhatsApp and Instagram Links with Icons -->
    <div class="mt-6">
        <!-- WhatsApp Link -->
       <!-- WhatsApp Link -->
<a href="https://wa.me/255659435503" class="inline-block mx-4 text-green-500 hover:text-green-700">
    <img src="images\whatsapp_3536445.png" class="w-10 h-10" alt="WhatsApp">
</a>
<!-- Instagram Link -->
<a href="https://ig.me/m/petramfuture" class="inline-block mx-4 text-pink-600 hover:text-pink-800">
    <img src="images\instagram.png" class="w-10 h-10" alt="Instagram">
</a>
    </div>
</section>


    <!-- Footer -->
    <footer class="py-6 bg-gray-800 text-center">
        <p class="text-gray-400">&copy; 2025 Student Performance Prediction Platform. All rights reserved.</p>
    </footer>
</body>

</html>
