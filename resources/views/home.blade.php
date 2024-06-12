<x-app-layout>
    <main class="relative">
        <div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('Images/background.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="container mx-auto h-full flex flex-col justify-center items-center">
                <div class="relative text-white bg-opacity-70 p-8 text-shadow-lg rounded-lg text-center">
                    <h2 class="text-3xl font-semibold mb-4">Be Your True Self</h2>
                    <h1 class="text-9xl font-bold mb-8">Fit Fusion</h1>
                    <a href="#more-info">
                        <button class="bg-black text-white rounded-full py-2 px-6 text-lg font-semibold mb-4">LEARN MORE</button>
                    </a>
                </div>
            </div>
        </div>
        </div>
    </main>

    <!-- More information section -->
    <section id="more-info" class="relative bg-gray-800 py-12">
        <!-- Background image with darker tint -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('Images/background.jpg') }}'); opacity: 0.7;"></div>
        <!-- Content container -->
        <div class="container mx-auto text-center text-white relative z-10">
            <h2 class="text-4xl font-bold mb-4">What We Offer</h2>
            <p class="text-lg mb-8">Welcome to Fit Fusion! We're dedicated to helping you achieve your fitness goals while embracing your individuality.</p>
            <div class="flex flex-wrap justify-center">

                <!-- Card elements -->
                <!-- Card 1 -->
                <div class="max-w-md rounded-lg overflow-hidden shadow-lg bg-gray-700 mx-4 my-4 text-white transform transition duration-300 hover:scale-105">
                    <img class="w-full h-64 object-cover" src="{{ asset('Images/gym1.jpg') }}" alt="My Progress">
                    <!-- Increased height to h-64 -->
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-center">MY PROGRESS</div>
                        <p class="text-gray-300 text-base text-center">
                            Track your fitness progress and reach your goals with our comprehensive progress tracking tools. Whether you're looking to lose weight, gain muscle, or improve your overall health and wellness, our platform provides the tools and support you need to succeed on your fitness journey.
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="max-w-md rounded-lg overflow-hidden shadow-lg bg-gray-700 mx-4 my-4 text-white transform transition duration-300 hover:scale-105">
                    <img class="w-full h-64 object-cover" src="{{ asset('Images/gym2.jpg') }}" alt="My Plans">
                    <!-- Increased height to h-64 -->
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-center">MY PLANS</div>
                        <p class="text-gray-300 text-base text-center">
                            Access personalized workout plans designed to help you achieve your fitness objectives. Our plans are tailored to your specific needs and goals, whether you're a beginner looking to get started or an experienced athlete seeking to take your training to the next level. With our easy-to-follow workouts and expert guidance, you'll be on the path to success in no time.
                        </p>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="max-w-md rounded-lg overflow-hidden shadow-lg bg-gray-700 mx-4 my-4 text-white transform transition duration-300 hover:scale-105">
                    <img class="w-full h-64 object-cover" src="{{ asset('Images/gym3.jpg') }}" alt="My Coach">
                    <!-- Increased height to h-64 -->
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2 text-center">MY COACH</div>
                        <p class="text-gray-300 text-base text-center">
                            Get guidance and support from our expert coaches to stay motivated and on track. Our coaches are here to help you every step of the way, providing personalized advice, encouragement, and accountability to help you reach your fitness goals. Whether you need help with your workout routine, nutrition plan, or motivation, our team is dedicated to helping you succeed.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

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

    <script>
        // Smooth scroll function
        document.querySelector('a[href^="#"]').addEventListener('click', function (e) {
            e.preventDefault();

            const target = document.querySelector(this.getAttribute('href'));
            window.scrollTo({
                top: target.offsetTop,
                behavior: 'smooth',
            });
        });
    </script>
</x-app-layout>
