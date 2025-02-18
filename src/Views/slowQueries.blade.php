<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slow Queries</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">

    <div class="container mx-auto my-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-2xl font-bold mb-4 text-center text-blue-600">Slow Query Logs</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full border-collapse bg-white shadow-md rounded-lg">
                <thead class="bg-blue-600 text-white">
                    <tr>
                        <th class="p-3 text-left">ID</th>
                        <th class="p-3 text-left">Query</th>
                        <th class="p-3 text-left">Execution Time (ms)</th>
                        <th class="p-3 text-left">Timestamp</th>
                    </tr>
                </thead>
                <tbody class="divide-y">
                    @foreach ($slowQueries as $slowQuery)
                    <tr class="hover:bg-gray-100">
                        <td class="p-3">{{ $slowQuery->id }}</td>
                        <td class="p-3 max-w-lg overflow-auto">
                            <pre class="whitespace-pre-wrap break-words text-sm text-gray-700">{{ $slowQuery->query }}</pre>
                        </td>
                        <td class="p-3 text-red-500 font-semibold">{{ $slowQuery->execution_time }}</td>
                        <td class="p-3 text-gray-600">{{ $slowQuery->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-5 flex justify-center">
            {{ $slowQueries->links('pagination::tailwind') }}
        </div>
    </div>

</body>
</html>
