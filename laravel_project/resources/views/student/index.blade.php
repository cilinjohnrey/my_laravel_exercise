@include('partials.header', ['title' => 'Student List'])

<header class="max-w-lg mx-auto">
    <h1 class="text-center">
        <a href="#" class="text-4xl font-bold text-white">Student List</a>
    </h1>
</header>
<section>
    <div class="overflow-x-auto relative">
        <table class="w-full taxt-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        First Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Last Name
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Email
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Age
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Gender
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class="bg-gray-800 border-b text-white">
                    <td class="py-4 px-6">
                        {{ $student->first_name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $student->last_name }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $student->email }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $student->age }}
                    </td>
                    <td class="py-4 px-6">
                        {{ $student->gender }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>

@include('partials.footer')

{{-- <ol>
    <h1>Title - Laravel</h1>
    @foreach ($students as $student)

    <li>
        {{ $student->gender }} - {{ $student->total_gender }}
    </li>

    @endforeach
</ol> --}}