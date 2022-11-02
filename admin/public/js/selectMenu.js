let selectedMenus = [];
let scheduleMenus = document.querySelectorAll('[data-id]');

scheduleMenus.forEach( scheduleMenu=> {
	selectedMenus.push({
		id: parseInt(scheduleMenu.dataset.id),
		name: scheduleMenu.dataset.name,
		price: parseFloat(scheduleMenu.dataset.price),
	})
});
updateMenuInput();
updatePriceInput();

if(selectedMenus.length == 0) {
    $('#schedule-menus').val('');
}

function addMenu(menu) {
    selectedMenus.push({
        id: menu.id,
        name: menu.name,
        price: +menu.price,
    })
}
    
function removeMenu(menuId) {
    selectedMenus = selectedMenus.filter(menu => menu.id !== menuId);
}

function updatePriceInput() {
    const totalPrice = selectedMenus.reduce((total, menu) => total + menu.price, 0);
    $('#total-price').val(formatPrice(totalPrice));
    $('#schedule-price').val(totalPrice);
}

function updateMenuInput() {
    const menus = selectedMenus.reduce((menus, menu) => menus + menu.name + ', ', '').slice(0, -2);
    $('#selected-menu').val(menus);
    if(selectedMenus.length > 0) {
        $('#schedule-menus').val(JSON.stringify(selectedMenus));
    } else {
        $('#schedule-menus').val('');
    }    
}

function selectMenu(menu) {
    if (this.checked) {
        addMenu(menu)
    } else {
        removeMenu(menu.id)
    }
}


