    <!-- Navbar -->
    <nav class="bg-gray-500 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-white font-semibold text-lg">{{ config('app.name') }}</a>
            <ul class="flex space-x-4">
                @auth
                    <li><a href="register" class="text-white hover:text-gray-400">Home</a></li>
                    <form action="logout" method="POST">
                      @csrf
                      <button type="submit" class="text-white hover:text-gray-400 focus:outline-none">
                          Logout
                      </button>
                  </form>
                @else
                    <li><a href="register" class="text-white hover:text-gray-400">Register</a></li>
                    <li><a href="login" class="text-white hover:text-gray-400">Login</a></li>
                @endauth
            </ul>
        </div>
    </nav>
