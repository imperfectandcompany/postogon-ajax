<!doctype html>
<html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js" defer></script>
  <!-- ... -->
</head>
<body>
<!-- component -->
<div class="flex flex-col justify-center min-h-screen bg-gray-100 sm:py-12">
  <div class="p-10 mx-auto xs:p-0 md:w-full md:max-w-md">
    <h1 class="mb-5 text-2xl font-bold text-center">Log In</h1>  
    <div class="w-full bg-white divide-y divide-gray-200 rounded-lg shadow">
    
      <div class="px-5 py-7" x-data="login()">
          <form>
        <label class="block pb-1 text-sm font-semibold text-gray-600">E-mail or Username</label>
        <input id="username" type="username" x-model="loginData.username" class="w-full px-3 py-2 mt-1 mb-5 text-sm border rounded-lg" />
        <label class="block pb-1 text-sm font-semibold text-gray-600">Password</label>
        <input id="password" autocomplete="new-password" type="password" x-model="loginData.password" class="w-full px-3 py-2 mt-1 mb-5 text-sm border rounded-lg" />
        <button type="button" @click="submitInfo()" :disableed="isLoading" class="transition duration-200 bg-blue-500 hover:bg-blue-600 focus:bg-blue-700 focus:shadow-sm focus:ring-4 focus:ring-blue-500 focus:ring-opacity-50 text-white w-full py-2.5 rounded-lg text-sm shadow-sm hover:shadow-md font-semibold text-center inline-block">
            <span class="inline-block mr-2">Login</span>
        </button>
</form>
        <span class="px-3 py-2 mt-1 font-bold tracking-wide text-md" x-text="status"></span>
      </div>

      <script>
          function login(){
              return {
                  loginData: {
                    username: '',
                  password: ''
                  },
                  status: '',
                  isLoading: false,
                  error: '',
                  submitInfo(){
                      isloading = true;
                      fetch(`https://api.postogon.com/auth/`, {
                          method: 'POST',
                          headers: { 'Content-Type': 'application/json' },
                          body: JSON.stringify(this.loginData)
                      })
                      .then(() => {
                        this.status = 'mission successs'
                      })
                      .catch(() => {
                        this.status = 'Oops. Something went wrong!'
                      })
                  }
              }
          }

          </script>


        <div class="py-5">
        <div class="grid grid-cols-2 gap-1">
          <div class="text-center sm:text-left whitespace-nowrap">
            <button class="px-5 py-4 mx-5 text-sm font-normal text-gray-500 transition duration-200 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="inline-block w-4 h-4 align-text-top">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11V7a4 4 0 118 0m-4 8v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2z" />
                </svg>
                <span class="inline-block ml-1">Forgot Password</span>
            </button>
          </div>
          <div class="text-center sm:text-right whitespace-nowrap">
            <button class="px-5 py-4 mx-5 text-sm font-normal text-gray-500 transition duration-200 rounded-lg cursor-pointer hover:bg-gray-100 focus:outline-none focus:bg-gray-200 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="inline-block w-4 h-4 align-text-bottom ">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
                </svg>
                <span class="inline-block ml-1">Help</span>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="py-5">
        <div class="grid grid-cols-2 gap-1">
          <div class="text-center sm:text-left whitespace-nowrap">
            <button class="px-5 py-4 mx-5 text-sm font-normal text-gray-500 transition duration-200 rounded-lg cursor-pointer hover:bg-gray-200 focus:outline-none focus:bg-gray-300 focus:ring-2 focus:ring-gray-400 focus:ring-opacity-50 ring-inset">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="inline-block w-4 h-4 align-text-top">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                <span class="inline-block ml-1">Back to postogon.com</span>
            </button>
          </div>
        </div>
      </div>
  </div>
</div>
</body>
</html>