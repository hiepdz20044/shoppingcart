function validateForm() {
    var size = document.getElementById('size').value;
    var color = document.getElementById('color').value;
    var quantity = document.getElementById('quantity').value;
 
    // Perform additional validation checks here
 
    // Example: Check if size, color, and quantity are selected
    if (size === "" || color === "" || quantity < 1) {
       alert("Please select size, color, and enter a valid quantity.");
       return false;
    }
 
    // If all checks pass, form submission is allowed
    return true;
 }
