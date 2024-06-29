document.addEventListener("DOMContentLoaded", function() {
    // Load menu items for the order form
    if (document.getElementById('menuItem')) {
        fetch('./php/getMenuItems.php')
            .then(response => response.json())
            .then(data => {
                let menuItemSelect = document.getElementById('menuItem');
                data.forEach(item => {
                    let option = document.createElement('option');
                    option.value = item.id;
                    option.text = `${item.name} - $${item.price}`;
                    menuItemSelect.add(option);
                });
            })
            .catch(error => console.error('Error fetching menu items:', error));
    }




document.addEventListener("DOMContentLoaded", function() {
    if (document.getElementById('menuItem')) {
        fetch('./php/getMenuItems.php')
            .then(response => response.json())
            .then(data => {
                let menuItemSelect = document.getElementById('menuItem');
                data.forEach(item => {
                    let menuItemTitle = document.createElement('div');
                    let item_name = document.createElement('h4');
                    item_name.innerText = item.name;
                    let item_price = document.createElement('h4');
                    item_name.innerText = item.price;
                    menuItemTitle.appendChild(item_name);
                    menuItemTitle.appendChild(item_price);
                    menuItemSelect.appendChild(menuItemTitle);
                });
            })
            .catch(error => console.error('Error fetching menu items:', error));
    }


    // Fetch menu items and load into select dropdown and categories
    fetch('./php/getMenuItems.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Load menu items into select dropdown and categories
            loadMenuItems(data);
        })
        .catch(error => {
            console.error('Error fetching or processing menu items:', error);
        });
});
