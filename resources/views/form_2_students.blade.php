<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User</title>
</head>

@vite(['resources/css/app.css','resources/js/app.js'])


    <!-- Notification Image in the top-right corner -->


    <div class="container mx-auto mt-16">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-yellow-500">
                <tr>
                   <th class="py-3 px-14 text-left text-sm font-semibold text-gray-800">cdn#</th>
                    <th class="py-3 px-14 text-left text-sm font-semibold text-gray-600">First Name</th>
                    <th class="py-3 px-14 text-left text-sm font-semibold text-gray-600">Surname</th>
                    <th class="py-3 px-14 text-left text-sm font-semibold text-gray-600">Last Name</th>
                    <th class="py-3 px-14 text-left text-sm font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                @foreach ($userEdit as $user)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4 text-sm text-gray-700">{{$user->cdn}}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{$user->first_name}}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{$user->surname}}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{$user->last_name}}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">
                       <a href="edit_form2/{{$user->id}}"> <button class="bg-blue-500 text-white px-2 py-1 rounded-md hover:bg-blue-600">Edit</button></a>
                       <a href="delete_form2/{{$user->id}}"> <button class="bg-red-500 text-white px-1 py-1 rounded-md hover:bg-red-600">Delete</button></a>
                       <a href="view_form2/{{$user->id}}"> <button class="bg-green-500 text-white px-2 py-1 rounded-md hover:bg-red-600">View</button></a>
                       

                    </td>
                </tr>
                @endforeach

                <!-- More rows can be added here -->
            </tbody>
        </table>
    </div>


    <script>
        var img=document.getElementById("img");
        var notify=document.getElementById("notify");
        var user=document.getElementById("user");
    </script>
</body>
</html>
</div>
