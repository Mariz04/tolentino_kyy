<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Students List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black p-8">

    <div class="max-w-5xl mx-auto bg-gray-900 shadow-lg shadow-sky-500/50 rounded-2xl p-6 border border-sky-500">
        <h1 class="text-3xl font-bold mb-6 text-sky-400 text-center drop-shadow-[0_0_8px_#38bdf8]">
             Students List
        </h1>

        
        <div class="flex gap-3 justify-center mb-6">
            <a href="/students/create" 
               class="bg-sky-500 hover:bg-sky-600 text-black font-semibold px-5 py-2 rounded-lg shadow-md shadow-sky-500/70 transition transform hover:scale-105">
                 Add Student
            </a>

            <a href="/students/delete_all"
               onclick="return confirm('⚠ Are you sure you want to delete ALL records?')"
               class="bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg shadow-md shadow-red-500/50 transition transform hover:scale-105">
                 Delete All
            </a>
        </div>


        <div class="overflow-x-auto">
            <table class="min-w-full border border-sky-500 shadow-md shadow-sky-500/40 rounded-lg overflow-hidden">
                <thead>
                    <tr class="bg-sky-600 text-black">
                        <th class="py-3 px-4 border-b border-sky-500">ID</th>
                        <th class="py-3 px-4 border-b border-sky-500">Last Name</th>
                        <th class="py-3 px-4 border-b border-sky-500">First Name</th>
                        <th class="py-3 px-4 border-b border-sky-500">Email</th>
                        <th class="py-3 px-4 border-b border-sky-500 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-black text-white">
                    <?php if (!empty($students)): ?>
                        <?php foreach ($students as $student): ?>
                            <tr class="hover:bg-gray-800 transition">
                                <td class="py-2 px-4 border-b border-sky-500"><?= $student['id'] ?></td>
                                <td class="py-2 px-4 border-b border-sky-500"><?= $student['last_name'] ?></td>
                                <td class="py-2 px-4 border-b border-sky-500"><?= $student['first_name'] ?></td>
                                <td class="py-2 px-4 border-b border-sky-500"><?= $student['email'] ?></td>
                                <td class="py-2 px-4 border-b border-sky-500 text-center">
                                    <a href="/students/edit/<?= $student['id'] ?>" 
                                       class="bg-sky-500 hover:bg-sky-600 text-black px-3 py-1 rounded-lg shadow-md shadow-sky-500/70 transition transform hover:scale-105">
                                         Edit
                                    </a>
                                    <a href="/students/delete/<?= $student['id'] ?>" 
                                       onclick="return confirm('Are you sure you want to delete this student?')"
                                       class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg shadow-md shadow-red-500/50 transition transform hover:scale-105 ml-1">
                                         Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="5" class="text-center py-6 text-sky-300 drop-shadow-[0_0_6px_#38bdf8]">
                                 No students found.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
