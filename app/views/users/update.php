<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Student</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gradient-to-br from-green-600 via-emerald-500 to-lime-400 min-h-screen flex items-center justify-center font-sans">

  <div class="bg-white p-8 rounded-3xl shadow-2xl w-full max-w-md animate-fadeIn border border-gray-200">
    
    <!-- Header -->
    <div class="flex flex-col items-center mb-6">
      <div class="bg-gradient-to-br from-green-500 to-emerald-600 rounded-full p-4 shadow-lg">
        <i class="fa-solid fa-user text-white text-3xl"></i>
      </div>
      <h2 class="text-2xl font-bold text-gray-800 mt-3">Update Student Info</h2>
    </div>

    <!-- Update Form -->
    <form action="<?=site_url('users/update/'.$user['id'])?>" method="POST" class="space-y-5">
      
      <!-- First Name -->
      <div>
        <label class="block text-gray-700 mb-1 font-medium">First Name</label>
        <input type="text" name="fname" value="<?= html_escape($user['fname'])?>" required
               class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:outline-none shadow-sm transition duration-200 hover:border-green-400">
      </div>

      <!-- Middle Name -->
      <div>
        <label class="block text-gray-700 mb-1 font-medium">Middle Name</label>
        <input type="text" name="mname" value="<?= html_escape($user['mname'])?>" required
               class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:outline-none shadow-sm transition duration-200 hover:border-green-400">
      </div>

      <!-- Last Name -->
      <div>
        <label class="block text-gray-700 mb-1 font-medium">Last Name</label>
        <input type="text" name="lname" value="<?= html_escape($user['lname'])?>" required
               class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:outline-none shadow-sm transition duration-200 hover:border-green-400">
      </div>

      <!-- Email -->
      <div>
        <label class="block text-gray-700 mb-1 font-medium">Email Address</label>
        <input type="email" name="email" value="<?= html_escape($user['email'])?>" required
               class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:outline-none shadow-sm transition duration-200 hover:border-green-400">
      </div>

      <!-- Update Button -->
      <button type="submit"
              class="w-full bg-gradient-to-r from-green-600 via-emerald-500 to-lime-400 hover:from-green-700 hover:via-emerald-600 hover:to-lime-500 text-white font-semibold py-3 rounded-xl shadow-lg transition duration-300 transform hover:scale-105">
        Update Info
      </button>
    </form>
  </div>

  <!-- Animation -->
  <style>
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .animate-fadeIn {
      animation: fadeIn 0.8s ease;
    }
  </style>

</body>
</html>
