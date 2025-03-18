<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings - EduPredict</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="bg-gray-100">

<!-- Main Content -->
<div class="ml-6 p-6">

    <!-- Header -->
    <header class="flex justify-between items-center mb-6">
        <div class="text-3xl font-semibold">Settings</div>
        <div class="flex items-center space-x-4">
            <span class="font-medium">Patrick Omary</span>
            <img src="{{ asset('images\icons8-admin-48.png') }}" alt="profile" class="rounded-full">
        </div>
    </header>

    <!-- Account Settings Section -->
    <section class="bg-white p-6 rounded-lg shadow-lg mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Account Settings</h2>
        <form action="#" method="POST">
            <div class="mb-4">
                <label for="name" class="block text-gray-700">Name</label>
                <input type="text" id="name" name="name" class="mt-2 px-4 py-2 w-full bg-gray-50 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter your name">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email Address</label>
                <input type="email" id="email" name="email" class="mt-2 px-4 py-2 w-full bg-gray-50 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter your email">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" name="password" class="mt-2 px-4 py-2 w-full bg-gray-50 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600" placeholder="Enter new password">
            </div>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">Save Changes</button>
        </form>
    </section>

    <!-- Notification Preferences Section -->
    <section class="bg-white p-6 rounded-lg shadow-lg mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Notification Preferences</h2>
        <form action="#" method="POST">
            <div class="flex items-center justify-between mb-4">
                <label for="email-notifications" class="text-gray-700">Email Notifications</label>
                <input type="checkbox" id="email-notifications" class="form-checkbox h-5 w-5 text-blue-600">
            </div>
            <div class="flex items-center justify-between mb-4">
                <label for="sms-notifications" class="text-gray-700">SMS Notifications</label>
                <input type="checkbox" id="sms-notifications" class="form-checkbox h-5 w-5 text-blue-600">
            </div>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">Save Preferences</button>
        </form>
    </section>

    <!-- Theme Settings Section -->
    <section class="bg-white p-6 rounded-lg shadow-lg mb-8">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Theme Settings</h2>
        <form action="#" method="POST">
            <div class="flex items-center justify-between mb-4">
                <label for="theme" class="text-gray-700">Choose Theme</label>
                <select id="theme" class="bg-gray-50 border border-gray-300 rounded-md p-2 text-gray-700 focus:ring-2 focus:ring-blue-600">
                    <option value="light">Light Mode</option>
                    <option value="dark">Dark Mode</option>
                </select>
            </div>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-500">Save Theme</button>
        </form>
    </section>

</div>

</body>
</html>
