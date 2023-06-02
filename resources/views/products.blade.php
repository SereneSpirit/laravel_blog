@extends("layouts.app")
@section("content")
  <div class="container">
    <h1>Product List</h1>

    <div class="row">
      <div class="col-md-4">
        <div class="card mb-3">
          <img src="product1.jpg" class="card-img-top" alt="Product 1">
          <div class="card-body">
            <h5 class="card-title">Product 1</h5>
            <p class="card-text">Description of Product 1</p>
            <button class="btn btn-primary" onclick="addToCart('Product 1')">Add to Cart</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3">
          <img src="product2.jpg" class="card-img-top" alt="Product 2">
          <div class="card-body">
            <h5 class="card-title">Product 2</h5>
            <p class="card-text">Description of Product 2</p>
            <button class="btn btn-primary" onclick="addToCart('Product 2')">Add to Cart</button>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="card mb-3">
          <img src="product3.jpg" class="card-img-top" alt="Product 3">
          <div class="card-body">
            <h5 class="card-title">Product 3</h5>
            <p class="card-text">Description of Product 3</p>
            <button class="btn btn-primary" onclick="addToCart('Product 3')">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>

   
  </div>

  <script>
    function addToCart(product) {
      var cartItems = document.getElementById("cartItems");
      var listItem = document.createElement("li");
      listItem.appendChild(document.createTextNode(product));
      cartItems.appendChild(listItem);
    }
  </script>
@endsection


