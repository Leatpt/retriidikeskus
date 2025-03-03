<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>
    <div class="min-h-screen flex items-center justify-center bg-gray-900 text-white">
        <div class="text-center">
            <h1 class="text-5xl font-bold">Welcome to My Website</h1>
            <p class="mt-4 text-lg">Scroll down to learn more</p>
        </div>
    </div>

    <div id="kuukava" class="bg-white text-gray-800 py-16">
        <x-calendar></x-calendar>
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-4">About Us</h2>
            <p class="text-lg leading-relaxed">
                This is the section after the hero. You can fill this with your content, images, or anything you need.
            </p>
            <p class="mt-4 text-lg leading-relaxed">
                Continue scrolling to see more sections.
            </p>
        </div>
    </div>

    <div class="bg-gray-100 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-4">Our Services</h2>
            <p class="text-lg leading-relaxed">
                Another section with more content.
            </p>
        </div>
    </div>

</x-layout>