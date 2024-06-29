// JavaScript for GourmetHub Restaurant Ordering System

// Handle adding items to the shopping cart
function addToCart(item) {
    let cart = JSON.parse(localStorage.getItem('cart')) || [];
    cart.push(item);
    localStorage.setItem('cart', JSON.stringify(cart));
    alert('Added to cart!');
}

// Validate order form on submission
function validateOrderForm() {
    const name = document.getElementById('name').value;
    const address = document.getElementById('address').value;
    const phone = document.getElementById('phone').value;

    if (!name || !address || !phone) {
        alert('Please fill out all fields.');
        return false;
    }

    // Optionally check for more complex conditions here
    return true;
}

// Display order history for the user
function displayOrderHistory() {
    const orders = JSON.parse(localStorage.getItem('orders')) || [];
    const list = document.querySelector('.order-history');
    list.innerHTML = '';

    orders.forEach(order => {
        const li = document.createElement('li');
        li.textContent = `Order #${order.id} - ${order.status}`;
        list.appendChild(li);
    });
}

// Save the order to localStorage (could be replaced by actual API call)
function placeOrder(event) {
    event.preventDefault();
    if (!validateOrderForm()) {
        return;
    }

    let orders = JSON.parse(localStorage.getItem('orders')) || [];
    const newOrder = {
        id: orders.length + 1,
        status: 'Pending',
        details: {
            name: document.getElementById('name').value,
            address: document.getElementById('address').value,
            phone: document.getElementById('phone').value
        }
    };

    orders.push(newOrder);
    localStorage.setItem('orders', JSON.stringify(orders));
    alert('Order placed successfully!');
    displayOrderHistory();
}

// Event listener for form submission
document.addEventListener('DOMContentLoaded', function() {
    const orderForm = document.querySelector('form');
    if (orderForm) {
        orderForm.addEventListener('submit', placeOrder);
    }

    const profilePage = document.querySelector('.order-history');
    if (profilePage) {
        displayOrderHistory();
    }
});

