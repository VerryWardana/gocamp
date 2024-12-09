@extends('admin.layouts')

@section('title', 'Category Management')

@section('content')
<div class="header mb-6">
  <span class="text-lg">Category Management</span>
</div>
<h2 class="text-2xl font-bold text-gray-700 mb-4">All Categories</h2>
<table class="table w-full border-collapse">
  <thead>
    <tr>
      <th class="border p-2 bg-green-500 text-white">S.N.</th>
      <th class="border p-2 bg-green-500 text-white">Category Name</th>
      <th class="border p-2 bg-green-500 text-white">Description</th>
      <th class="border p-2 bg-green-500 text-white">Action</th> <!-- Added Action column for Delete button -->
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border p-2">1</td>
      <td class="border p-2">Electronics</td>
      <td class="border p-2">Category for all electronic items.</td> <!-- Added description -->
      <td class="border p-2">
        <button class="btn-delete" onclick="deleteRow(this)">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border p-2">2</td>
      <td class="border p-2">Furniture</td>
      <td class="border p-2">Category for all furniture items.</td> <!-- Added description -->
      <td class="border p-2">
        <button class="btn-delete" onclick="deleteRow(this)">Delete</button>
      </td>
    </tr>
    <tr>
      <td class="border p-2">3</td>
      <td class="border p-2">Clothing</td>
      <td class="border p-2">Category for all clothing items.</td> <!-- Added description -->
      <td class="border p-2">
        <button class="btn-delete" onclick="deleteRow(this)">Delete</button>
      </td>
    </tr>
  </tbody>
</table>

<style>
  /* Style for the button */
  .btn-delete {
    background-color: #f44336; /* Red color */
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
    transition: background-color 0.3s ease;
  }

  .btn-delete:hover {
    background-color: #e53935; /* Darker red when hovered */
  }
</style>

<script>
  function deleteRow(button) {
    // Confirm deletion
    if (confirm('Are you sure you want to delete this category?')) {
      var row = button.closest('tr'); // Find the closest row to the button
      row.remove(); // Remove the row from the table
    }
  }
</script>
@endsection
