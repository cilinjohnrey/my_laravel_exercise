@include('partials.header', ['title' => 'Register'])

<header class="max-w-lg mx-auto">
    <h1 class="text-center">
        <a href="#" class="text-4xl font-bold text-white">Student Register</a>
    </h1>
</header>
<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
   <section>
      <h3 class="font-bold text-2xl">Welcome</h3>
      <p class="text-gray-600 pt-2">Sign In to your account</p>
   </section>
   <section class="mt-10">
      <form action="" class="flex flex-col">
         <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Name</label>
            <input type="text" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3 pb-1" id="name">
         </div>
         <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
            <input type="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3 pb-1" id="email">
         </div>
         <div class="mb-6 pt-3 rounded bg-gray-200">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Password</label>
            <input type="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3 pb-1" id="password">
         </div>
         <button class="bg-purple-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Log In</button>
      </form>
   </section>
</main>

@include('partials.footer')
