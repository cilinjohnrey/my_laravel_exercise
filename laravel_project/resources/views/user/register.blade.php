@include('partials.header', ['title' => 'Register'])

<header class="max-w-lg mx-auto">
    <h1 class="text-center">
        <a href="#" class="text-4xl font-bold text-white">Student Register</a>
    </h1>
</header>
<main class="max-w-lg p-8 mx-auto my-10 bg-white rounded-lg shadow-2xl">
   <section>
      <h3 class="text-2xl font-bold">Welcome</h3>
      <p class="pt-2 text-gray-600">Sign In to your account</p>
   </section>
   <section class="mt-10">
      <form action="/store" method="POST" class="flex flex-col">
         <div class="pt-3 mb-6 bg-gray-200 rounded">
            <label for="name" class="block mb-2 ml-3 text-sm font-bold text-gray-700">Name</label>
            <input type="text" class="w-full px-3 pb-1 text-gray-700 bg-gray-200 border-b-4 border-gray-400 rounded focus:outline-none" id="name" name="name">
         </div>
         <div class="pt-3 mb-6 bg-gray-200 rounded">
            <label for="email" class="block mb-2 ml-3 text-sm font-bold text-gray-700">Email</label>
            <input type="email" class="w-full px-3 pb-1 text-gray-700 bg-gray-200 border-b-4 border-gray-400 rounded focus:outline-none" id="email" name="email">
         </div>
         <div class="pt-3 mb-6 bg-gray-200 rounded">
            <label for="password" class="block mb-2 ml-3 text-sm font-bold text-gray-700">Password</label>
            <input type="password" class="w-full px-3 pb-1 text-gray-700 bg-gray-200 border-b-4 border-gray-400 rounded focus:outline-none" id="password" name="password">
         </div>
         <div class="pt-3 mb-6 bg-gray-200 rounded">
            <label for="password_confirmation" class="block mb-2 ml-3 text-sm font-bold text-gray-700">Confirm Password</label>
            <input type="password" class="w-full px-3 pb-1 text-gray-700 bg-gray-200 border-b-4 border-gray-400 rounded focus:outline-none" id="password_confirmation" name="password_confirmation">
         </div>
         <button class="py-2 font-bold text-white transition duration-200 bg-purple-600 rounded shadow-lg hover:bg-purple-700 hover:shadow-xl" type="submit">Log In</button>
      </form>
   </section>
</main>

@include('partials.footer')
