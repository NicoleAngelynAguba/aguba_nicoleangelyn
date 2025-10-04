<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative min-h-screen flex items-center justify-center bg-gradient-to-br from-green-100 via-blue-50 to-cyan-100 font-sans overflow-hidden">

  <!-- Decorative Background Shapes -->
  <div class="absolute top-0 left-0 w-72 h-72 bg-green-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
  <div class="absolute top-0 right-0 w-72 h-72 bg-cyan-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
  <div class="absolute bottom-0 left-20 w-72 h-72 bg-yellow-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-4000"></div>

  <!-- Card -->
  <div class="relative bg-white p-8 rounded-2xl shadow-2xl w-full max-w-md border border-gray-200 z-10">
    <!-- Header -->
    <div class="text-center mb-6">
      <h1 class="text-3xl font-extrabold text-green-700 tracking-wide">Student Portal</h1>
      <p class="text-gray-500 mt-2 text-sm">Create your account to get started</p>
    </div>

    <!-- Form -->
    <form method="post" class="space-y-4">
      <input 
        type="text" 
        name="username" 
        placeholder="Username" 
        required
        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 shadow-sm"
      >

      <input 
        type="password" 
        name="password" 
        placeholder="Password" 
        required
        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 shadow-sm"
      >

      <select 
        name="role" 
        class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500 shadow-sm"
      >
        <option value="user">User</option>
        <option value="admin">Admin</option>
      </select>

      <button 
        type="submit" 
        class="w-full py-3 bg-gradient-to-r from-green-600 to-cyan-500 text-white font-semibold rounded-xl hover:scale-[1.02] transform transition duration-300 shadow-lg"
      >
        Register
      </button>
    </form>

    <!-- Login -->
    <p class="text-center text-gray-600 mt-6 text-sm">
      Already have an account?  
      <a href="<?= site_url('auth/login') ?>" class="text-green-600 font-semibold hover:underline">Login</a>
    </p>
  </div>

  <!-- Animations -->
  <style>
    @keyframes blob {
      0% { transform: translate(0px, 0px) scale(1); }
      33% { transform: translate(30px, -50px) scale(1.1); }
      66% { transform: translate(-20px, 20px) scale(0.9); }
      100% { transform: translate(0px, 0px) scale(1); }
    }
    .animate-blob {
      animation: blob 8s infinite;
    }
    .animation-delay-2000 {
      animation-delay: 2s;
    }
    .animation-delay-4000 {
      animation-delay: 4s;
    }
  </style>

</body>
</html>
