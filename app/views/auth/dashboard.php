<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Information</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="<?=base_url();?>/public/style.css">
</head>
<body class="bg-gray-100 font-sans">

  <!-- Navbar -->
  <nav class="bg-gradient-to-r from-green-600 to-cyan-400 shadow-md">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
      <h1 class="text-xl font-bold text-white tracking-wide">
        Student Information
      </h1>
    </div>
  </nav>

  <!-- Content -->
  <div class="max-w-6xl mx-auto mt-8 px-4">
    <div class="bg-white shadow-2xl rounded-2xl p-6 border border-gray-200">

      <!-- Search -->
      <form method="get" action="<?=site_url('/auth/dashboard')?>" class="mb-4 flex justify-end">
        <input 
          type="text" 
          name="q" 
          value="<?=html_escape($_GET['q'] ?? '')?>" 
          placeholder="Search student..." 
          class="px-4 py-2 border border-gray-300 rounded-l-lg focus:outline-none focus:ring-2 focus:ring-green-500 w-64">
        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-r-lg shadow transition-all duration-300">
          Search
        </button>
      </form>

      <!-- Table -->
      <div class="overflow-x-auto rounded-xl border border-gray-200 shadow">
        <table class="w-full text-center border-collapse">
          <thead>
            <tr class="bg-gradient-to-r from-green-600 to-cyan-400 text-white text-sm uppercase tracking-wide">
              <th class="py-3 px-4">ID</th>
              <th class="py-3 px-4">Lastname</th>
              <th class="py-3 px-4">Firstname</th>
              <th class="py-3 px-4">Middlename</th>
              <th class="py-3 px-4">Email</th>
            </tr>
          </thead>
          <tbody class="text-gray-700 text-sm">
            <?php if(!empty($users)): ?>
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
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="5" class="py-4 text-gray-500">No students found.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

      <!-- Pagination -->
      <div class="mt-6 flex justify-center">
        <div class="pagination flex space-x-2">
          <?php
            if (!empty($page)) {
              echo str_replace(
                ['<a ', '<strong>', '</strong>'],
                [
                  '<a class="hp-page"',
                  '<span class="hp-current">',
                  '</span>'
                ],
                $page
              );
            }
          ?>
        </div>
      </div>

      <!-- Logout -->
      <div class="mt-4 flex justify-end">
        <a href="<?=site_url('auth/logout');?>"
           class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg shadow transition-all duration-300">
          Logout
        </a>
      </div>

    </div>
  </div>

</body>
</html>
