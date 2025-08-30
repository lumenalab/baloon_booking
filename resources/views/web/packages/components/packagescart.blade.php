<!-- Booking Section -->
<section class="booking-section">
    <div class="container">
        <h2 class="booking-title">Standard Hot Air Balloon Packages</h2>

        <div class="booking-grid">
            <!-- Header Row -->
            <div class="grid-header">Tour Option</div>
            <div class="grid-header">Transfer Option</div>
            <div class="grid-header">Tour Date</div>
            <div class="grid-header">Adult</div>
            <div class="grid-header">Child</div>
            <div class="grid-header">Total Amount</div>
            <div class="grid-header">Action</div>

            <!-- Package Row 1 -->
            <div class="grid-cell tour-option">
                <input type="checkbox" id="tour1" class="custom-checkbox">
                <label for="tour1">Standard Flight</label>
            </div>
            <div class="grid-cell">
                <select class="form-select">
                    <option>Shared Transfer</option>
                    <option>Private Transfer</option>
                </select>
            </div>
            <div class="grid-cell">
                <div class="date-input-wrapper">
                    <span class="date-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                    </span>
                    <input type="date" class="form-date" value="2025-04-05">
                </div>
            </div>
            <div class="grid-cell">
                <select class="form-select">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>
            <div class="grid-cell">
                <select class="form-select">
                    <option>0</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
            <div class="grid-cell">
                <div class="total-amount">AED 200.00</div>
            </div>
            <div class="grid-cell">
                <button class="btn-add-to-cart">Add to Cart</button>
            </div>

            <!-- Package Row 2 -->
            {{-- <div class="grid-cell tour-option">
                <input type="checkbox" id="tour2" class="custom-checkbox">
                <label for="tour2">Exclusive Flight (1 to 5 Pax)</label>
            </div> --}}
            {{-- <div class="grid-cell"><!-- ...repeat other inputs --></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"><button class="btn-add-to-cart">Add to Cart</button></div>

            <!-- Package Row 3 -->
            <div class="grid-cell tour-option">
                <input type="checkbox" id="tour3" class="custom-checkbox">
                <label for="tour3">Exclusive Group Flight (6 to 20 Pax)</label>
            </div>
            <div class="grid-cell"><!-- ...repeat other inputs --></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"></div>
            <div class="grid-cell"><button class="btn-add-to-cart">Add to Cart</button></div> --}}
        </div>
    </div>
</section>

<style>
/* You may need to import a font like Montserrat or Poppins if you don't have it globally */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap');

.booking-section {
    font-family: 'Poppins', sans-serif;
    margin-top: 4rem;
    margin-bottom: 4rem;
}

.booking-title {
    font-size: 1.75rem;
    font-weight: 600;
    color: #333;
    margin-bottom: 1.5rem;
}

.booking-grid {
    display: grid;
    /* Proportional column widths based on your design */
    grid-template-columns: 2fr 1.5fr 1.5fr 1fr 1fr 1.5fr 1.5fr;
    gap: 12px;
    align-items: center;
}

.grid-header {
    background-color: #f0f2f5;
    padding: 12px 15px;
    font-weight: 600;
    font-size: 14px;
    color: #222;
    text-align: left;
    border-radius: 8px;
}

.grid-cell {
    /* Base styling for all cells */
}

/* Custom Checkbox */
.tour-option {
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: 500;
    font-size: 14px;
}
.custom-checkbox {
    display: none; /* Hide default checkbox */
}
.custom-checkbox + label {
    cursor: pointer;
    display: flex;
    align-items: center;
}
.custom-checkbox + label::before {
    content: '';
    width: 22px;
    height: 22px;
    border: 2px solid #E07C24; /* Orange border */
    border-radius: 5px;
    background-color: #fff;
    margin-right: 12px;
    transition: background-color 0.2s, border-color 0.2s;
}
.custom-checkbox:checked + label::before {
    background-color: #E07C24;
    border-color: #E07C24;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='white' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='20 6 9 17 4 12'%3E%3C/polyline%3E%3C/svg%3E");
    background-size: 16px;
    background-repeat: no-repeat;
    background-position: center;
}

/* Input & Select Styling */
.form-select, .date-input-wrapper, .total-amount {
    background-color: #f0f2f5;
    border: none;
    border-radius: 8px;
    padding: 10px 15px;
    width: 100%;
    font-size: 14px;
    color: #333;
}
.form-select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='%23555' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'%3E%3C/polyline%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 16px;
    padding-right: 35px; /* Make space for arrow */
}

/* Date Input with Icon */
.date-input-wrapper {
    position: relative;
    padding-left: 40px;
}
.date-icon {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #E07C24; /* Orange icon color */
}
.form-date {
    background: transparent;
    border: none;
    width: 100%;
    color: #333;
    font-family: inherit;
    font-size: 14px;
}
.form-date::-webkit-calendar-picker-indicator {
    display: none;
}

.total-amount {
    font-weight: 600;
}

.btn-add-to-cart {
    background-color: #E07C24;
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 10px 15px;
    width: 100%;
    font-weight: 600;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.2s;
}
.btn-add-to-cart:hover {
    background-color: #d35400;
}

/* --- Responsive Adjustments --- */
@media (max-width: 1200px) {
    .booking-grid {
        grid-template-columns: 1fr; /* Stack everything into a single column */
        gap: 1.5rem; /* Increase gap for stacked layout */
    }
    .grid-header {
        display: none; /* Hide headers on mobile */
    }
    .grid-cell::before {
        /* Add labels before each input on mobile */
        content: attr(data-label);
        font-weight: 600;
        display: block;
        margin-bottom: 5px;
    }
    /* Manually add data-label attributes in HTML for mobile view */
    .tour-option::before { content: none; } /* The checkbox already has a label */
}
</style>

<!-- Add this script if you want the date to be non-editable by keyboard -->
<script>
document.querySelectorAll('.form-date').forEach(function(dateInput) {
    dateInput.addEventListener('keydown', function(e) {
        e.preventDefault();
    });
});
</script>