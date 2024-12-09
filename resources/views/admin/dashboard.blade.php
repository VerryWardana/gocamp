@extends('admin.layouts')

@section('title', 'Dashboard')

@section('content')
<div class="header mb-6">
  <span class="text-lg">Hello, Admin</span>
</div>
<h2 class="text-2xl font-bold text-gray-700 mb-4">All Customers</h2>
<table class="table w-full border-collapse">
  <thead>
    <tr>
      <th class="border p-2 bg-green-500 text-white">S.N.</th>
      <th class="border p-2 bg-green-500 text-white">Username</th>
      <th class="border p-2 bg-green-500 text-white">Email</th>
    </tr>
  </thead>
  <tbody>
    <tr><td class="border p-2">1</td><td class="border p-2">reza</td><td class="border p-2">rezabagus795@gmail.com</td></tr>
    <tr><td class="border p-2">2</td><td class="border p-2">reza</td><td class="border p-2">chikkiafiani@gmail.com</td></tr>
    <tr><td class="border p-2">3</td><td class="border p-2">faridpendaki</td><td class="border p-2">farid@gmail.com</td></tr>
  </tbody>
</table>
@endsection
