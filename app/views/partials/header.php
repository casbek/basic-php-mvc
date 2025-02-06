
      <!-- Header -->
      <header class="bg-white shadow">
          <div class="container mx-auto px-4 sm:px-6 lg:px-8">
              <div class="flex justify-between items-center py-4">
                  <!-- Logo -->
                  <a href="#" class="text-2xl font-bold text-blue-600">MyWebsite</a>

                  <!-- Navigation -->
                  <nav class="hidden md:flex space-x-6">
                      <a href="#" class="  hover:bg-sky-700">Home</a>
                      <a href="#" class="text-gray-600 hover:text-blue-600">About</a>
                      <a href="#" class="text-gray-600 hover:text-blue-600">Services</a>
                      <a href="#" class="text-gray-600 hover:text-blue-600">Contact</a>
                  </nav>

                  <!-- Mobile Menu Button -->
                  <button @click="open = !open" class="md:hidden text-gray-600 focus:outline-none" x-data="{ open: false }">
                      <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"></path>
                      </svg>
                  </button>
              </div>

              <!-- Mobile Menu -->
              <div class="md:hidden" x-show="open" x-transition>
                  <nav class="space-y-2 px-4 pb-4">
                      <a href="#" class="block text-gray-600 hover:text-blue-600">Home</a>
                      <a href="#" class="block text-gray-600 hover:text-blue-600">About</a>
                      <a href="#" class="block text-gray-600 hover:text-blue-600">Services</a>
                      <a href="#" class="block text-gray-600 hover:text-blue-600">Contact</a>
                  </nav>
              </div>
          </div>
      </header>