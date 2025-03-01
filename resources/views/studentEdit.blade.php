<link href="{{ mix('css/app.css') }}" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage User</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>



    <!-- Notification Image in the top-right corner -->


    <div class="container mx-auto mt-16">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg shadow-md">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Name</th>
                    <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Email</th>
                    <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Avatar</th>
                    <th class="py-3 px-4 text-left text-sm font-semibold text-gray-600">Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Row 1 -->
                @foreach ($userEdit as $user)
                <tr class="border-b hover:bg-gray-50">
                    <td class="py-3 px-4 text-sm text-gray-700">{{$user->name}}</td>
                    <td class="py-3 px-4 text-sm text-gray-700">{{$user->email}}</td>
                    <td class="py-3 px-4 text-sm text-gray-700"><img src="{{asset($user->avatar)}}" alt="Avatar" style="height:45px;width:60px;"></td>
                    <td class="py-3 px-4 text-sm text-gray-700">
                       <a href="edit/{{$user->id}}"> <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Edit</button></a>
                       <a href="delete/{{$user->id}}"> <button class="bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600">Delete</button></a>
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
