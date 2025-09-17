<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Add Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black p-8">
    <div class="max-w-lg mx-auto bg-gray-900 shadow-lg shadow-sky-500/50 rounded-2xl p-6 border border-sky-500">
        <h2 class="text-2xl font-bold mb-6 text-sky-400 text-center drop-shadow-[0_0_8px_#38bdf8]">
         ADD NEW STUDENT  
        </h2>
        <form action="/students/store" method="post" class="space-y-4">
            <div>
                <label class="block font-semibold text-sky-300 drop-shadow-[0_0_5px_#38bdf8]">Last Name</label>
                <input type="text" name="last_name" 
                       class="w-full border border-sky-500 bg-black text-white px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-sky-400 shadow-inner" 
                       required>
            </div>
            <div>
                <label class="block font-semibold text-sky-300 drop-shadow-[0_0_5px_#38bdf8]">First Name</label>
                <input type="text" name="first_name" 
                       class="w-full border border-sky-500 bg-black text-white px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-sky-400 shadow-inner" 
                       required>
            </div>
            <div>
                <label class="block font-semibold text-sky-300 drop-shadow-[0_0_5px_#38bdf8]">Email</label>
                <input type="email" name="email" 
                       class="w-full border border-sky-500 bg-black text-white px-3 py-2 rounded focus:outline-none focus:ring-2 focus:ring-sky-400 shadow-inner" 
                       required>
            </div>
            <div class="flex justify-between pt-4">
                <a href="/students/index" 
                   class="bg-gray-700 hover:bg-gray-600 text-white px-4 py-2 rounded-lg shadow-md shadow-sky-500/30 transition transform hover:scale-105">
                    Back
                </a>
                <button type="submit" 
                        class="bg-sky-500 hover:bg-sky-600 text-black font-semibold px-4 py-2 rounded-lg shadow-md shadow-sky-500/70 transition transform hover:scale-105">
                         Save
                </button>
            </div>
        </form>
    </div>
</body>
</html>
