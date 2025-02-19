<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        @vite('resources/css/app.css')
    <title>Document</title>
</head>
  <body class="p-6 bg-gray-100 ">

  <div class="relative min-h-screen bg-white">
    <div class="absolute top-0 left-0 h-full w-1/5 bg-cover bg-center" style="background-image: url('{{ asset('img/lines-bg.jpg') }}');"></div>

    <div class="relative z-10 mx-auto w-3/5 p-8">
          <div class="max-w-4xl mx-auto bg-white p-6 rounded-lg shadow-md">
      <h2 class="text-xl font-bold mb-4">Inventory</h2>
      <button
        class="mb-4 px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700"
      >
        Add Product
      </button>
      <div class="grid grid-cols-5 gap-4 bg-gray-200 p-4 rounded-lg font-bold">
        <div>Category</div>
        <div>Item Name</div>
        <div>Qty</div>
        <div>Price</div>
        <div>Action</div>
      </div>
      <div
        class="grid grid-cols-5 gap-4 p-4 border-b border-gray-300 items-center"
      >
        <div>Electronics</div>
        <div>Smartphone</div>
        <div>10</div>
        <div>$500</div>
        <div class="space-x-2">
          <button
            class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600"
          >
            Edit
          </button>
          <button
            class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600"
          >
            Delete
          </button>
        </div>
      </div>
    </div>
    </div>
  </div>



  </body>
</html>