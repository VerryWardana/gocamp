<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* Sidebar Styling */
    .sidebar {
      width: 240px;
      height: 100vh;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #2f855a;
      color: white;
      padding: 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }
    .sidebar a {
      color: white;
      display: block;
      padding: 10px;
      margin-bottom: 5px;
      border-radius: 5px;
      text-decoration: none;
      font-size: 16px;
    }
    .sidebar a:hover {
      background-color: #38a169;
    }
    .sidebar .logout {
      margin-top: auto;
      padding-top: 10px;
      border-top: 1px solid #fff;
    }
    /* Main Content Area */
    .content {
      margin-left: 260px;
      padding: 20px;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #2f855a;
      color: white;
      padding: 15px;
    }
    .table-container {
      margin-top: 20px;
    }
    .table {
      width: 100%;
      border-collapse: collapse;
    }
    .table th, .table td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }
    .table th {
      background-color: #2f855a;
      color: white;
    }
    .table tr:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <div class="header">
      <span class="text-lg">Hello, Admin</span>
      <div>
        <button class="bg-green-400 text-white py-2 px-4 rounded-md hover:bg-green-500">Logout</button>
      </div>
    </div>

  <!-- Sidebar -->
  <div class="sidebar">
    <h2 class="text-2xl font-bold text-white mb-6">Admin Dashboard</h2>
    <div>
    <a href="{{ route('admin.dashboard') }}">Dashboard</a>
      <a href="{{ route('admin.category') }}">Category</a>
      <a href="{{ route('admin.product') }}">Product</a>
    </div>
    <div class="logout">
      <a href="#" class="text-white">Logout</a>
    </div>
  </div>

  <!-- Main Content -->
  <main class="content">
    @yield('content')
  </main>

</body>
</html>
