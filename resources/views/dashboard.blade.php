<x-app-layout>
    <main class="bg-gray-100">
        <!-- Hero Section -->
        <section class="bg-cover bg-center py-16 px-4 md:px-0 text-center text-white" style="background-image: url('{{ asset('Images/background.jpg') }}');">
            <div class="container mx-auto">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Welcome Admin!</h1>
                <p class="text-lg md:text-xl mb-12">Manage your Fit Fusion platform efficiently.</p>
                <a href="#analytics-section" class="bg-black hover:bg-blue-600 text-white font-bold py-2 px-6 rounded-full">View Analytics</a>
            </div>
        </section>

        <!-- Analytics Section -->
        <section id="analytics-section" class="py-16">
            <div class="container mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-center mb-8">Platform Analytics</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Total Users -->
                    <div class="analytics-card bg-white rounded-lg shadow-lg p-6 text-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-4">Total Users</h3>
                        <p class="text-4xl md:text-5xl font-bold text-gray-800">10,000</p>
                    </div>

                    <!-- Active Users -->
                    <div class="analytics-card bg-white rounded-lg shadow-lg p-6 text-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-4">Active Users</h3>
                        <p class="text-4xl md:text-5xl font-bold text-gray-800">2,500</p>
                    </div>

                    <!-- Monthly Growth -->
                    <div class="analytics-card bg-white rounded-lg shadow-lg p-6 text-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-4">Monthly Growth</h3>
                        <p class="text-4xl md:text-5xl font-bold text-green-500">5%</p>
                    </div>

                    <!-- User Engagement -->
                    <div class="analytics-card bg-white rounded-lg shadow-lg p-6 text-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-4">User Engagement</h3>
                        <p class="text-lg md:text-xl text-gray-800">Avg time per session: 35 mins</p>
                    </div>

                    <!-- Workout Completion -->
                    <div class="analytics-card bg-white rounded-lg shadow-lg p-6 text-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-4">Workout Completion</h3>
                        <p class="text-4xl md:text-5xl font-bold text-yellow-500">80%</p>
                    </div>

                    <!-- New Subscriptions -->
                    <div class="analytics-card bg-white rounded-lg shadow-lg p-6 text-center">
                        <h3 class="text-xl md:text-2xl font-bold mb-4">New Subscriptions</h3>
                        <p class="text-4xl md:text-5xl font-bold text-purple-500">300</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-black text-white py-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between">
                <!-- About Us -->
                <div class="w-full md:w-1/3 mb-6">
                    <h4 class="text-xl font-bold mb-2">About Us</h4>
                    <p class="text-gray-400">Fit Fusion is dedicated to helping you achieve your fitness goals while embracing your individuality. Join us and be a part of a community that supports and motivates each other.</p>
                </div>
                <!-- Contact -->
                <div class="w-full md:w-1/3 mb-6">
                    <h4 class="text-xl font-bold mb-2">Contact</h4>
                    <p class="text-gray-400">Email: support@fitfusion.com</p>
                    <p class="text-gray-400">Phone: (123) 456-7890</p>
                    <p class="text-gray-400">Address: 123 Fitness Street, Workout City, Country</p>
                </div>
                <!-- Quick Links -->
                <div class="w-full md:w-1/3 mb-6">
                    <h4 class="text-xl font-bold mb-2">Quick Links</h4>
                    <ul class="text-gray-400">
                        <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                        <li><a href="{{ route('about') }}" class="hover:text-white">About Us</a></li>
                        <li><a href="{{ route('privacy') }}" class="hover:text-white">Privacy Policy</a></li>
                        <li><a href="{{ route('terms') }}" class="hover:text-white">Terms of Service</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="flex justify-center mt-8">
                <a href="#" class="text-gray-400 mx-2 hover:text-white">Facebook</a>
                <a href="#" class="text-gray-400 mx-2 hover:text-white">Twitter</a>
                <a href="#" class="text-gray-400 mx-2 hover:text-white">Instagram</a>
                <a href="#" class="text-gray-400 mx-2 hover:text-white">LinkedIn</a>
            </div>
            <div class="text-center text-gray-400 mt-8">
                &copy; 2024 Fit Fusion. All rights reserved.
            </div>
        </div>
    </footer>
</x-app-layout>

