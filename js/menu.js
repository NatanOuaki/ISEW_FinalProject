document.addEventListener('DOMContentLoaded', function() {
    const menuCategories = document.querySelectorAll('.menu-category');

    menuCategories.forEach(category => {
        const toggleButton = category.querySelector('h2');
        toggleButton.addEventListener('click', () => {
            category.classList.toggle('expanded');
        });
    });

    // Add to cart functionality
    const addToCartButtons = document.querySelectorAll('.menu-item button');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', addToCart);
    });
});

function addToCart(event) {
    const menuItem = event.target.closest('.menu-item');
    const itemName = menuItem.querySelector('h3').textContent;
    const itemPriceElement = menuItem.querySelector('.menu-item-title p');
    const itemPriceText = itemPriceElement.textContent;
    const itemPrice = itemPriceText.substring(1);  // Remove the first character

    var item = {
        name:itemName,
        price:itemPrice
    }
    saveItemToCart(item);
}


function saveItemToCart(item) {
    let cart = JSON.parse(sessionStorage.getItem('cart')) || [];
    cart.push(item);
    sessionStorage.setItem('cart', JSON.stringify(cart));
    alert(`${item.name} added to cart!`);
}