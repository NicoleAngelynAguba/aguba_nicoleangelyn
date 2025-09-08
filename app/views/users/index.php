<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Students Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?=base_url();?>public/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-100 font-sans">

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-green-600 to-cyan-400 shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-xl font-bold text-white tracking-wide">Students Information</h1>
      <!-- Add User Button on Navbar -->
      <a href="<?=site_url('users/create')?>"
         class="inline-flex items-center gap-2 bg-white text-green-600 font-semibold px-4 py-2 rounded-full shadow-md transition-all duration-300 hover:bg-green-50 hover:scale-105">
        <i class="fa-solid fa-user-plus"></i> Create Record
      </a>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="max-w-6xl mx-auto mt-8 px-4">
    <div class="bg-white shadow-2xl rounded-2xl p-6 border border-gray-200">

      <!-- Table Container -->
      <div class="overflow-x-auto rounded-xl border border-gray-200 shadow">
        <table class="w-full text-center border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-green-600 to-cyan-400 text-white text-sm uppercase tracking-wide">
              <th class="py-3 px-4">ID</th>
              <th class="py-3 px-4">Lastname</th>
              <th class="py-3 px-4">Firstname</th>
              <th class="py-3 px-4">Middlename</th>
              <th class="py-3 px-4">Email</th>
              <th class="py-3 px-4">Action</th>
            </tr>
          </thead>
          <tbody class="text-gray-700 text-sm">
            <?php foreach(html_escape($users) as $user): ?>
              <tr class="hover:bg-green-50 transition duration-200 border-b border-gray-200">
                <td class="py-3 px-4 font-semibold text-gray-800"><?=($user['id']);?></td>
                <td class="py-3 px-4"><?=($user['lname']);?></td>
                <td class="py-3 px-4"><?=($user['fname']);?></td>
                <td class="py-3 px-4"><?=($user['mname']);?></td>
                <td class="py-3 px-4">
                  <span class="bg-green-100 text-green-700 text-xs font-medium px-3 py-1 rounded-full">
                    <?=($user['email']);?>
                  </span>
                </td>
                <td class="py-3 px-4 flex justify-center gap-3">
                  <!-- Update Button -->
                  <a href="<?=site_url('users/update/'.$user['id']);?>"
                     class="inline-flex items-center gap-2 bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-lg shadow transition-all duration-300">
                    <i class="fa-solid fa-pen-to-square"></i> Update
                  </a>
                  <!-- Delete Button -->
                  <a href="<?=site_url('users/delete/'.$user['id']);?>"
                     onclick="return confirm('Are you sure you want to delete this record?');"
                     class="inline-flex items-center gap-2 bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded-lg shadow transition-all duration-300">
                    <i class="fa-solid fa-trash"></i> Delete
                  </a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>

</body>
</html>
