<nav class="bg-white border-gray-200 fixed top-0 left-0 right-0 z-10 transition-opacity duration-400 ease-in-out opacity-100 block">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-8">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
          <span class="self-center text-2xl font-semibold whitespace-nowrap">Adopets</span>
      </a>
      <div class="hidden w-full md:flex md:items-center md:w-auto" id="navbar-default">
          <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-10 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
              <li class="flex items-center">
                  <a href="/dashboard" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-400 md:p-0">Home</a>
              </li>
              <li class="flex items-center">
                  <a href="/login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-400 md:p-0">Adopt</a>
              </li>
              <li class="flex items-center">
                  <a href="/dashboard/rehome" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-400 md:p-0">Rehome</a>
              </li>
              <li class="flex items-center">
                  <button id="dropdownUserAvatarButton" data-dropdown-toggle="dropdownAvatar" class="flex text-sm bg-gray-800 rounded-full md:me-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" type="button">
                      <span class="sr-only">Open user menu</span>
                      <img class="w-8 h-8 rounded-full bg-white" src="img/user.png" alt="user photo">
                  </button>
              </li>
          </ul>
      </div>
  </div>
</nav>

<!-- Dropdown menu -->
<div id="dropdownAvatar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
  <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
    <div>Bonnie Green</div>
  </div>
  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownUserAvatarButton">
    <li>
      <a href="/dashbord" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
    </li>
    <li>
      <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
    </li>
    
  </ul>
  <div class="py-2">
    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
  </div>
</div>