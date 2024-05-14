<nav class="bg-white border-gray-200 fixed top-0 left-0 right-0 z-10 transition-opacity duration-400 ease-in-out opacity-100 block">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto px-4 py-8">
      <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">          
          <span class="self-center text-2xl font-semibold whitespace-nowrap">Adopets</span>
      </a>    
      <div class="hidden w-full md:block md:w-auto" id="navbar-default">
        <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-10 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
            <li>
                <a href="/login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-400 md:p-0 ">Adopt</a>
            </li>
            <li>
                <a href="/login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-400 md:p-0 ">How it works</a>
            </li>
            <li>
                <a href="/login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-400 md:p-0 ">Help Us</a>
            </li>
            <li>
                <a href="/login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-400 md:p-0 ">Contact</a>
            </li>
            <li>
              <a href="/register" class="block py-2 px-3 text-white rounded md:bg-transparent md:text-primary-400 md:p-0" aria-current="page">Login</a>            
            </li>
          {{-- @auth
            <li>
              <form action="/logout" method="post">
              @csrf
              <button type="submit" class="block py-2 px-3 text-white bg-primary-400 rounded md:bg-transparent md:text-primary-400 md:p-0" aria-current="page">Log Out</button>            
              </form>            
            </li>
          @else          
            <li>
              <a href="/login" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary-400 md:p-0 ">Log In</a>
            </li>
            <li>
              <a href="/register" class="block py-2 px-3 text-white rounded md:bg-transparent md:text-primary-400 md:p-0" aria-current="page">Sign Up</a>            
            </li>
          @endif --}}
        </ul>
      </div>
    </div>
  </nav>
  
  