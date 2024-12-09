@extends('admin.layouts')

@section('title', 'Product Management')

@section('content')
<div class="header mb-6">
  <span class="text-lg">Product Management</span>
</div>
<h2 class="text-2xl font-bold text-gray-700 mb-4">All Products</h2>
<table class="table w-full border-collapse">
  <thead>
    <tr>
      <th class="border p-2 bg-green-500 text-white">S.N.</th>
      <th class="border p-2 bg-green-500 text-white">Product Image</th>
      <th class="border p-2 bg-green-500 text-white">Product Name</th>
      <th class="border p-2 bg-green-500 text-white">Product Description</th>
      <th class="border p-2 bg-green-500 text-white">stock</th>
      <th class="border p-2 bg-green-500 text-white">Category name</th>
      <th class="border p-2 bg-green-500 text-white">unit Price</th>
      <th class="border p-2 bg-green-500 text-white">Action</th>
    </tr>
  </thead>
<tbody>
  <tr>
    <td class="border p-2">1</td>
    <td class="border p-2">
      <img src="path_to_image.jpg" alt="Smartphone" class="w-16 h-16 object-cover"> <!-- Add product image -->
    </td>
    <td class="border p-2">Smartphone</td>
    <td class="border p-2">Electronics</td>
    <td class="border p-2">$300</td>
    <td class="border p-2">50</td> <!-- Example stock value -->
    <td class="border p-2">Electronics</td>
    <td class="border p-2">
      <button class="btn-edit" onclick="editProduct(this)">Edit</button>
      <button class="btn-delete" onclick="deleteProduct(this)">Delete</button>
    </td>
  </tr>
  <!-- Add more rows as needed -->
</tbody>
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

  .btn-edit {
    background-color: #2196F3 ; /* Red color */
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
  </tbody>
</table>
@endsection
