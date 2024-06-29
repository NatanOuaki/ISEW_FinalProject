document.addEventListener('DOMContentLoaded', function() {
    loadOrders();
});

function loadOrders() {
    const ordersList = document.getElementById('orders-list');

    // This is a placeholder. In a real app, you'd fetch this data from a server.
    const orders = [
        { id: 1, customer: 'John Doe', total: 25, status: 'Pending' },
        { id: 2, customer: 'Jane Smith', total: 35, status: 'Completed' }
    ];

    orders.forEach(order => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${order.id}</td>
            <td>${order.customer}</td>
            <td>$${order.total}</td>
            <td>${order.status}</td>
            <td>
                <button onclick="updateOrderStatus(${order.id}, 'Completed')">Mark Completed</button>
                <button onclick="deleteOrder(${order.id})">Delete</button>
            </td>
        `;
        ordersList.appendChild(row);
    });
}

function updateOrderStatus(orderId, newStatus) {
    // In a real app, you'd send this update to a server
    console.log(`Updating order ${orderId} to ${newStatus}`);
    alert(`Order ${orderId} marked as ${newStatus}`);
}

function deleteOrder(orderId) {
    // In a real app, you'd send a delete request to a server
    console.log(`Deleting order ${orderId}`);
    alert(`Order ${orderId} deleted`);
}