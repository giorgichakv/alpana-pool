<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitors Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6 font-sans">

<div class="max-w-7xl mx-auto bg-white shadow-lg rounded-lg p-6">

    <h1 class="text-2xl font-bold mb-4 text-gray-800">Visitors Dashboard</h1>

    <!-- Search Form -->
    <form method="GET" action="{{ url('/admin/visitors') }}" class="mb-4 flex">
        <input type="text" name="search" placeholder="Search by IP or Page"
               value="{{ request('search') }}"
               class="flex-grow px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-r-lg hover:bg-blue-600">Search</button>
    </form>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IP Address</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User Agent</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Visited Page</th>
                    <th class="px-4 py-2 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach($visitors as $v)
                <tr class="hover:bg-gray-50">
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $v->id }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $v->ip_address }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $v->user_agent }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $v->visited_page }}</td>
                    <td class="px-4 py-2 text-sm text-gray-700">{{ $v->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="mt-4">
        {{ $visitors->links() }}
    </div>
</div>

</body>
</html>
