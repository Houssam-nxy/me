<nav class="fixed flex justify-center items-center w-full p-10">
  <button class="menu-icon p-3 bg-green-800 text-white rounded-lg mr-4 cursor-pointer focus:outline-none" tabindex="0">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5 0M3.75 12h16.5 0m-16.5 5.25h16.5 0" />
    </svg>
  </button>
  <div class="navbar-items flex flex-col justify-center items-center hidden bg-gray-800 rounded-lg">
    <div class="p-3 bg-green-800 text-white rounded-lg mb-2">
      <a href="#" class="nav-link">Home</a>
    </div>
    <div class="p-3 bg-green-800 text-white rounded-lg mb-2">
      <a href="#" class="nav-link">About</a>
    </div>
    <div class="p-3 bg-green-800 text-white rounded-lg mb-2">
      <a href="#" class="nav-link">Contact</a>
    </div>
    <div class="p-3 bg-green-800 text-white rounded-lg mb-2">
      <a href="#" class="nav-link">Pricing</a>
    </div>
  </div>
</nav>

<style>
  .menu-icon:focus + .navbar-items {
    display: flex;
  }

  .navbar-items .nav-link {
    display: none;
  }

  .menu-icon:focus + .navbar-items .nav-link {
    display: block;
  }
</style>
