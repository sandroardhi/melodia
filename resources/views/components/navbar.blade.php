<!-- Navbar.blade.php -->

<nav class="bg-blue-500 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <a href="/" class="text-white font-bold text-lg">Your App Name</a>
        <div class="relative">
            @guest
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @else
                <div class="group inline-block relative">
                    <button class="text-white focus:outline-none">
                        {{ Auth::user()->name }}
                    </button>
                    <ul class="absolute hidden text-gray-700 pt-1 group-active:block bg-white">
                        <li><a href="">Profile</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>
    </div>
</nav>

<script>
    // Add JavaScript for dropdown
    document.addEventListener('DOMContentLoaded', function () {
        const dropdowns = document.querySelectorAll('.group');

        dropdowns.forEach(dropdown => {
            dropdown.addEventListener('mouseenter', function () {
                this.querySelector('ul').classList.remove('hidden');
            });

            dropdown.addEventListener('mouseleave', function () {
                this.querySelector('ul').classList.add('hidden');
            });
        });
    });
</script>
