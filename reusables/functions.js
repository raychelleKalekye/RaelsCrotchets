document.addEventListener('DOMContentLoaded', function() {
    const cartButton = document.getElementsByClassName('fa fa shopping-basket');
    const cartContainer = document.getElementsByClassName('cartContainer');

    cartButton.addEventListener('click', function(event) {
        event.preventDefault();
        loadCartPage();
    });

    function loadCartPage() {
        fetch('cart.html')
            .then(response => response.text())
            .then(html => {
                cartContainer.innerHTML = html;
                cartContainer.classList.add('slide-in');
            })
            .catch(error => console.error('Error loading cart:', error));
    }
});
