<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Research Innovation Platform</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        body { 
            font-family: 'Inter', sans-serif; 
        }
        .gradient-bg {
            background: linear-gradient(135deg, #3b82f6 0%, #6366f1 100%);
        }
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s;
        }
        .loader {
            width: 48px;
            height: 48px;
            border: 5px solid #3b82f6;
            border-bottom-color: transparent;
            border-radius: 50%;
            animation: rotation 1s linear infinite;
        }
        @keyframes rotation {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        @media (max-width: 768px) {
            .mobile-menu {
                transform: translateX(-100%);
                transition: transform 0.3s ease-in-out;
            }
            .mobile-menu.active {
                transform: translateX(0);
            }
        }
        .fade-up {
            opacity: 0;
            transform: translateY(20px);
        }
        .fade-in {
            opacity: 0;
        }
        .scale-in {
            opacity: 0;
            transform: scale(0.95);
        }
        .slide-in-right {
            opacity: 0;
            transform: translateX(30px);
        }
        .slide-in-left {
            opacity: 0;
            transform: translateX(-30px);
        }
        .floating {
            animation: float 3s ease-in-out infinite;
        }
        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
        .innovation-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .innovation-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">

    <!-- Preloader -->
    <div class="preloader" id="preloader">
        <div class="loader"></div>
    </div>

    <!-- Rest of the existing navigation code remains the same -->
    <!-- ... -->
     <!-- Mobile Navigation Menu -->
    <div id="mobileMenu" class="mobile-menu fixed top-0 left-0 h-full w-64 bg-white shadow-xl z-50 lg:hidden">
        <div class="p-4">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-xl font-bold text-blue-600">Menu</h2>
                <button id="closeMenu" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <nav class="space-y-4">
                <a href="#" class="block text-gray-700 hover:text-blue-600 transition duration-300">Home</a>
                <a href="#" class="block text-gray-700 hover:text-blue-600 transition duration-300">Innovations</a>
                <a href="#" class="block text-gray-700 hover:text-blue-600 transition duration-300">Categories</a>
            </nav>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="sticky top-0 z-40 bg-white shadow-md">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.071 0l-.172.495a2 2 0 01-1.894 1.362H9.269a2 2 0 01-1.894-1.362l-.172-.495z"/>
                    </svg>
                    <h1 class="text-xl md:text-2xl font-bold text-blue-600">Research Innovations</h1>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="menuButton" class="lg:hidden text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
                
                <!-- Desktop Navigation -->
                <div class="hidden lg:flex space-x-6">
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Home</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Innovations</a>
                    <a href="#" class="text-gray-700 hover:text-blue-600 transition duration-300">Categories</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <header class="gradient-bg text-white text-center py-12 md:py-20 px-4">
        <div class="max-w-3xl mx-auto">
            <h1 class="text-3xl md:text-5xl font-bold mb-6 leading-tight">Explore Cutting-Edge Research Innovations</h1>
            <p class="text-lg md:text-xl mb-10 text-blue-100">Discover plugins, services, and products that are pushing the boundaries of research and technology.</p>
            
            <form class="max-w-2xl mx-auto">
                <div class="flex flex-col md:flex-row shadow-2xl">
                    <div class="relative flex-grow">
                        <input type="text" name="q" placeholder="Search innovations..." 
                            class="w-full px-5 py-4 text-gray-800 rounded-t-lg md:rounded-l-lg md:rounded-tr-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </div>
                    </div>
                    <select name="type" 
                        class="bg-white text-gray-700 px-4 py-4 border-t border-b md:border-l md:border-r border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">All Types</option>
                        <option value="plugin">Plugins</option>
                        <option value="service">Services</option>
                        <option value="product">Products</option>
                    </select>
                    <button type="submit" 
                        class="bg-green-500 text-white px-8 py-4 rounded-b-lg md:rounded-r-lg md:rounded-bl-none hover:bg-green-600 transition duration-300 focus:outline-none focus:ring-2 focus:ring-green-500">
                        Search
                    </button>
                </div>
            </form>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto py-8 md:py-16 px-4">
        <!-- Popular Innovations Section -->
        <section class="mb-12 md:mb-16">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Popular Innovations</h2>
                <a href="#" class="text-sm md:text-base text-blue-600 hover:text-blue-800 transition duration-300">View All</a>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                <!-- Innovation Cards -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden transform transition hover:-translate-y-2 hover:shadow-2xl">
                    <div class="p-6">
                        <span class="bg-green-100 text-green-600 text-xs px-3 py-1 rounded-full mb-4 inline-block">Plugin</span>
                        <h3 class="text-xl font-bold mb-3 text-gray-800">Advanced Data Analyzer</h3>
                        <p class="text-gray-600 mb-4 text-sm">A powerful plugin for complex data processing and visualization in research environments.</p>
                        <div class="flex justify-between items-center">
                            <span class="font-semibold text-blue-600">Free</span>
                            <a href="#" class="text-sm text-blue-500 hover:text-blue-700 flex items-center">
                                Details
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Additional Innovation Cards (similar structure) -->
                <!-- ... -->
            </div>
        </section>

        <!-- Categories Section -->
        <section>
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Browse Categories</h2>
                <a href="#" class="text-sm md:text-base text-blue-600 hover:text-blue-800 transition duration-300">See All Categories</a>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Category Cards -->
                <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition duration-300">
                    <div class="mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 md:h-16 md:w-16 text-blue-500 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.04 3.586l.707-.707a2 2 0 012.828 0l5 5a2 2 0 010 2.828l-.707.707"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Nanotechnology</h3>
                    <p class="text-gray-500 text-sm md:text-base">Explore innovations in nanomaterials and molecular engineering.</p>
                </div>

                <!-- Additional Category Cards (similar structure) -->
                <!-- ... -->
            </div>
        </section>
    </main>

    <!-- Partnership Section (New) -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-12">Trusted by Leading Companies</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
                <div class="p-4 grayscale hover:grayscale-0 transition duration-300">
                    <img src="/api/placeholder/200/80" alt="Partner 1" class="mx-auto">
                </div>
                <div class="p-4 grayscale hover:grayscale-0 transition duration-300">
                    <img src="/api/placeholder/200/80" alt="Partner 2" class="mx-auto">
                </div>
                <div class="p-4 grayscale hover:grayscale-0 transition duration-300">
                    <img src="/api/placeholder/200/80" alt="Partner 3" class="mx-auto">
                </div>
                <div class="p-4 grayscale hover:grayscale-0 transition duration-300">
                    <img src="/api/placeholder/200/80" alt="Partner 4" class="mx-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section (New) -->
    <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-800 text-center mb-12">Why Choose Us</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                    <div class="text-blue-600 mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-3">Fast Integration</h3>
                    <p class="text-gray-600">Quick and seamless integration with your existing research workflow.</p>
                </div>
                <!-- Add 2 more similar feature cards -->
            </div>
        </div>
    </section>

    <!-- Newsletter Section (New) -->
    <section class="py-12 bg-blue-600">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-6">Stay Updated</h2>
                <form class="flex flex-col md:flex-row gap-4">
                    <input type="email" placeholder="Enter your email" class="flex-grow px-4 py-3 rounded-lg focus:outline-none focus:ring-2">
                    <button type="submit" class="bg-green-500 text-white px-8 py-3 rounded-lg hover:bg-green-600 transition duration-300">Subscribe</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Rest of the existing footer code remains the same -->
    <!-- ... -->
    <footer class="bg-gray-800 text-white text-center py-6">
        <p class="text-xs md:text-sm">© 2025 Research Innovations Platform. All rights reserved.</p>
    </footer>
    <script>
        // Initialize GSAP ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Preloader animation
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            gsap.to(preloader, {
                opacity: 0,
                duration: 0.5,
                onComplete: () => preloader.style.display = 'none'
            });

            // Animate header content
            gsap.from('.gradient-bg h1', {
                opacity: 0,
                y: 30,
                duration: 1,
                delay: 0.5
            });
            gsap.from('.gradient-bg p', {
                opacity: 0,
                y: 20,
                duration: 1,
                delay: 0.7
            });
            gsap.from('.gradient-bg form', {
                opacity: 0,
                y: 20,
                duration: 1,
                delay: 0.9
            });
        });

        // Scroll animations
        gsap.utils.toArray('.fade-up').forEach(element => {
            gsap.from(element, {
                scrollTrigger: {
                    trigger: element,
                    start: 'top 80%',
                    toggleActions: 'play none none reverse'
                },
                opacity: 0,
                y: 20,
                duration: 0.8
            });
        });

        // Innovation cards stagger animation
        gsap.from('.innovation-card', {
            scrollTrigger: {
                trigger: '.innovation-card',
                start: 'top 80%'
            },
            opacity: 0,
            y: 30,
            duration: 0.8,
            stagger: 0.2
        });

        // Category cards animation
        gsap.from('.category-card', {
            scrollTrigger: {
                trigger: '.category-card',
                start: 'top 80%'
            },
            opacity: 0,
            scale: 0.95,
            duration: 0.8,
            stagger: 0.1
        });

        // Partner logos animation
        gsap.from('.partner-logo', {
            scrollTrigger: {
                trigger: '.partner-logo',
                start: 'top 80%'
            },
            opacity: 0,
            x: -30,
            duration: 0.8,
            stagger: 0.2
        });

        // Features section animation
        gsap.from('.feature-card', {
            scrollTrigger: {
                trigger: '.feature-card',
                start: 'top 80%'
            },
            opacity: 0,
            y: 30,
            duration: 0.8,
            stagger: 0.2
        });

        // Newsletter section animation
        gsap.from('.newsletter-content', {
            scrollTrigger: {
                trigger: '.newsletter-content',
                start: 'top 80%'
            },
            opacity: 0,
            y: 30,
            duration: 0.8
        });

        // Mobile menu functionality
        const menuButton = document.getElementById('menuButton');
        const closeMenu = document.getElementById('closeMenu');
        const mobileMenu = document.getElementById('mobileMenu');

        menuButton.addEventListener('click', () => {
            mobileMenu.classList.add('active');
            gsap.from('#mobileMenu .nav-item', {
                opacity: 0,
                x: -20,
                duration: 0.3,
                stagger: 0.1
            });
        });

        closeMenu.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
        });

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    gsap.to(window, {
                        duration: 1,
                        scrollTo: target,
                        ease: 'power2.inOut'
                    });
                }
            });
        });
    </script>
</body>
</html>