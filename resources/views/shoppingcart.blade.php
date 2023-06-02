@extends("layouts.app")
@section("content")
<div class="container">
  <h1 class="my-5">Shopping Cart</h1>
  <table class="table">
    <thead>
      <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <img src="product1.jpg" alt="Product 1" width="50">
          <span>Product 1</span>
        </td>
        <td>$10.99</td>
        <td>
          <button class="btn btn-sm btn-primary" onclick="decreaseQuantity(this)">-</button>
          <span class="quantity">1</span>
          <button class="btn btn-sm btn-primary" onclick="increaseQuantity(this)">+</button>
        </td>
        <td>$10.99</td>
        <td><button class="btn btn-danger" onclick="removeProduct(this)">Remove</button></td>
      </tr>
      <tr>
        <td>
          <img src="product2.jpg" alt="Product 2" width="50">
          <span>Product 2</span>
        </td>
        <td>$15.99</td>
        <td>
          <button class="btn btn-sm btn-primary" onclick="decreaseQuantity(this)">-</button>
          <span class="quantity">1</span>
          <button class="btn btn-sm btn-primary" onclick="increaseQuantity(this)">+</button>
        </td>
        <td>$15.99</td>
        <td><button class="btn btn-danger" onclick="removeProduct(this)">Remove</button></td>
      </tr>
      <!-- Add more product rows as needed -->
    </tbody>
  </table>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  function removeProduct(button) {
    var row = button.parentNode.parentNode;
    row.parentNode.removeChild(row);
  }
  
  function decreaseQuantity(button) {
    var quantitySpan = button.nextElementSibling;
    var currentQuantity = parseInt(quantitySpan.textContent);
    if (currentQuantity > 1) {
      quantitySpan.textContent = currentQuantity - 1;
    }
  }
  
  function increaseQuantity(button) {
    var quantitySpan = button.previousElementSibling;
    var currentQuantity = parseInt(quantitySpan.textContent);
    quantitySpan.textContent = currentQuantity + 1;
  }
</script>
@endsection