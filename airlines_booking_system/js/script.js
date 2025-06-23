// Set minimum date to today
document.addEventListener('DOMContentLoaded', function() {
    // Date picker restriction
    const dateInput = document.getElementById('departure_date');
    if (dateInput) {
        const today = new Date().toISOString().split('T')[0];
        dateInput.setAttribute('min', today);
        dateInput.value = today;
    }

    // City swap functionality
    const swapBtn = document.getElementById('swapCities');
    if (swapBtn) {
        swapBtn.addEventListener('click', function() {
            const origin = document.getElementById('origin');
            const destination = document.getElementById('destination');
            const temp = origin.value;
            origin.value = destination.value;
            destination.value = temp;
        });
    }

    // Form validation
    const searchForm = document.getElementById('searchForm');
    if (searchForm) {
        searchForm.addEventListener('submit', function(e) {
            const origin = document.getElementById('origin').value;
            const destination = document.getElementById('destination').value;
            
            if (origin === destination) {
                e.preventDefault();
                alert('Origin and destination cannot be the same');
            }
        });
    }
});

// Dynamic passenger form handling
function addPassengerForm() {
    const container = document.getElementById('passengerForms');
    const passengerCount = document.querySelectorAll('.passenger-form').length + 1;
    
    const newForm = document.createElement('fieldset');
    newForm.className = 'passenger-form';
    newForm.innerHTML = `
        <legend>Passenger ${passengerCount}</legend>
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="passengers[${passengerCount}][first_name]" required>
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="passengers[${passengerCount}][last_name]" required>
        </div>
    `;
    
    container.appendChild(newForm);
}