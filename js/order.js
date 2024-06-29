document.addEventListener('DOMContentLoaded', function() {
    const orderForm = document.getElementById('order-form');
    orderForm.addEventListener('submit', placeOrder);

    // Load cart items (this would typically come from localStorage or a server)
    displayCart();
});

function displayCart() {
    let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');

    // Clear the cart items
    cartItems.innerHTML = '';

    let total = 0;
    cart.forEach((item, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td style="border: 1px solid #ddd; padding: 8px; text-align: center;">${index + 1}</td>
            <td style="border: 1px solid #ddd; padding: 8px;">${item.name}</td>
            <td style="border: 1px solid #ddd; padding: 8px;">₪${item.price}</td>
            <td style="border: 1px solid #ddd; padding: 8px;"><input type="number" value="1" min="1" onchange="updateQuantity(${index}, this.value)" style="width: 60px;"></td>
            <td style="border: 1px solid #ddd; padding: 8px;"><span class="item-total">₪${item.price}</span></td>
            <td style="border: 1px solid #ddd; padding: 8px; text-align:center"><button onclick="removeFromCart(${index})" style="background-color: #dc3545; color: white; border: 1px solid #dc3545; cursor: pointer; border-radius: 50px; padding:10px">Remove</button></td>
        `;
        cartItems.appendChild(row);
        total += parseFloat(item.price);  // Ensure price is treated as a number
    });

    if (cart.length === 0) {
        const emptyRow = document.createElement('tr');
        emptyRow.innerHTML = '<td colspan="6" style="text-align: center; padding: 8px;">Your cart is empty.</td>';
        cartItems.appendChild(emptyRow);
    }

    cartTotal.textContent = total.toFixed(2);  // Display total with 2 decimal places
}

function updateQuantity(index, quantity) {
    let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    const itemTotal = document.querySelectorAll('.item-total')[index];
    const newTotal = parseFloat(cart[index].price) * parseInt(quantity);
    itemTotal.textContent = '₪' + newTotal.toFixed(2);

    // Update overall total
    let total = 0;
    document.querySelectorAll('.item-total').forEach(el => {
        total += parseFloat(el.textContent.replace('₪', ''));  // Remove currency symbol before converting to float
    });
    document.getElementById('cart-total').innerText = total.toFixed(2);  // Update total price
}

function removeFromCart(index) {
    let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    cart.splice(index, 1);
    sessionStorage.setItem('cart', JSON.stringify(cart));
    displayCart();
}

function placeOrder(event) {
    event.preventDefault();
    confirm("Do you want to place your order ?");
    alert("Order placed, thank you for your trust !");
}
