// JavaScript Document
var addBtn = document.getElementById('addToList'); // Input
var elList = document.getElementById('list'); // Output
var elCount = parseInt(document.getElementById('counter').textContent); // Counter 
var elItem = document.getElementById('itemName'); // Element name

function addItem() {
	var itemName = elItem.value.trim();
	
	// Check if text is not null
	if (itemName) {
		var newEl, newElText;
		newEl = document.createElement('div');
		newElText = document.createTextNode(itemName);
		newEl.appendChild(newElText);
		newEl.classList.add('alert');
		newEl.classList.add('alert-info');
		newEl.classList.add('shopping-item');
		
		// Event to remove item
		newEl.addEventListener('click', removeItem);
		
		
		elList.appendChild(newEl);
		
		// Increase counter
		elCount++;
		document.getElementById('counter').textContent = elCount;
		
		
		elItem.value = '';
	}
}

function removeItem(event) {
	
	var itemToRemove = event.target;
	itemToRemove.remove();
	
	// Decrease counter
	elCount--;
	document.getElementById('counter').textContent = elCount;
}

addBtn.addEventListener('click', addItem, false);
