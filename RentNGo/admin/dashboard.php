<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Rent N Go</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/admin-style.css">
    <style>
        .dashboard {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: var(--color-primary);
            padding: 2rem 1rem;
        }
        .sidebar h2 {
            color: var(--color-text);
            margin-bottom: 2rem;
            text-align: center;
        }
        .sidebar ul {
            list-style-type: none;
            padding: 0;
        }
        .sidebar ul li {
            margin-bottom: 1rem;
        }
        .sidebar ul li a {
            color: var(--color-text);
            text-decoration: none;
            display: flex;
            align-items: center;
            padding: 0.5rem;
            transition: var(--transition);
        }
        .sidebar ul li a:hover {
            background-color: var(--color-secondary);
            border-radius: 0.3rem;
        }
        .sidebar ul li a i {
            margin-right: 0.5rem;
        }
        .main-content {
            flex-grow: 1;
            padding: 2rem;
            background-color: var(--color-tertiary);
        }
        .crud-section {
            background-color: var(--color-text);
            padding: 2rem;
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
            color: var(--color-primary);
            margin-bottom: 2rem;
        }
        .crud-section h3 {
            color: var(--color-primary);
            margin-bottom: 1rem;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 0.5rem;
            text-align: left;
            border-bottom: 1px solid var(--color-bg);
            min-height: 40px;
        }
        .action-buttons {
            gap: 0.5rem;
        }
        .action-buttons button {
            padding: 0.3rem 0.5rem;
            border: none;
            border-radius: 0.3rem;
            cursor: pointer;
            transition: var(--transition);
        }
        .edit-btn {
            background-color: var(--color-secondary);
            color: var(--color-text);
        }
        .delete-btn {
            background-color: #ff4444;
            color: var(--color-text);
        }
        .edit-btn:hover, .delete-btn:hover {
            opacity: 0.8;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }
        .modal-content {
            background-color: var(--color-text);
            margin: 5% auto;
            padding: 1.5rem;
            border-radius: 0.5rem;
            width: 80%;
            max-width: 500px;
            color: var(--color-primary);
            justify-content: center;
        }
        .modal-content h3 {
            color: var(--color-primary);
            margin-bottom: 1rem;
        }
        .modal-content input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid var(--color-bg);
            border-radius: 0.3rem;
        }
        .modal-content .btn {
            background-color: var(--color-secondary);
            color: var(--color-text);
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 0.3rem;
            cursor: pointer;
            transition: var(--transition);
        }
        .modal-content .btn:hover {
            background-color: var(--color-primary);
        }

        .status-badge {
            padding: 0.3rem 0.6rem;
            border-radius: 1rem;
            font-size: 0.9rem;
            font-weight: 500;
        }
        .status-pending {
            background-color: #ffd700;
            color: #000;
        }
        .status-approved {
            background-color: #4CAF50;
            color: white;
        }
        .status-rejected {
            background-color: #ff4444;
            color: white;
        }
        .approval-buttons {
            display: flex;
            gap: 0.5rem;
        }
        .approve-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.3rem 0.8rem;
            border-radius: 0.3rem;
            cursor: pointer;
        }
        .reject-btn {
            background-color: #ff4444;
            color: white;
            border: none;
            padding: 0.3rem 0.8rem;
            border-radius: 0.3rem;
            cursor: pointer;
        }
        .view-details-btn {
            background-color: var(--color-secondary);
            color: white;
            border: none;
            padding: 0.3rem 0.8rem;
            border-radius: 0.3rem;
            cursor: pointer;
        }
        .rental-details-modal .modal-content {
            max-width: 600px;
        }
        .rental-details-modal .detail-row {
            display: flex;
            margin-bottom: 1rem;
            border-bottom: 1px solid #eee;
            padding-bottom: 0.5rem;
        }
        .rental-details-modal .detail-label {
            font-weight: bold;
            width: 150px;
        }
        #rentalDetailsContent{
            color: var(--color-primary);
        }

        .points-badge {
            background-color: #FFD700;
            color: #000;
            padding: 0.3rem 0.6rem;
            border-radius: 1rem;
            font-weight: bold;
        }
        
        .loyalty-actions {
            gap: 0.5rem;
            align-items: center;
        }
        
        .redeem-btn {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 0.3rem 0.8rem;
            border-radius: 0.3rem;
            cursor: pointer;
        }
        
        .loyalty-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
            margin-bottom: 2rem;
        }
        
        .stat-card {
            background-color: var(--color-text);
            padding: 1.5rem;
            border-radius: 0.5rem;
            box-shadow: var(--shadow);
        }
        
        .stat-card h4 {
            margin: 0 0 0.5rem 0;
            color: var(--color-primary);
        }
        
        .stat-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--color-secondary);
        }

        
    </style>
</head>
<body>
    <div class="dashboard">
        <div class="sidebar">
            <h2>Admin Dashboard</h2>
            <ul>
                <li><a href="#" onclick="showSection('dashboard')"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="#" onclick="showSection('cars')"><i class="fas fa-car"></i> Manage Cars</a></li>
                <li><a href="#" onclick="showSection('users')"><i class="fas fa-users"></i> Manage Users</a></li>
                <li><a href="#" onclick="showSection('bookings')"><i class="fas fa-calendar-alt"></i> Bookings</a></li>
                <li><a href="#" onclick="showSection('rental-requests')"><i class="fas fa-clock"></i> Rental Requests</a></li>
                <li><a href="#" onclick="showSection('loyalty')"><i class="fas fa-gift"></i> Loyalty Program</a></li>
                <li><a href="#" onclick="logout()"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>
        <div class="main-content">
            <div id="dashboard-section" class="crud-section">
                <h3>Welcome to the Admin Dashboard</h3>
                <p>Select an option from the sidebar to manage cars, users, or bookings.</p>
            </div>
            <div id="cars-section" class="crud-section" style="display:none;">
                <h3>Manage Cars</h3>
                <button class="btn" onclick="showAddCarForm()">Add New Car</button>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Make</th>
                            <th>Model</th>
                            <th>Year</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="carTableBody">
                        <!-- Car data will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>
            <div id="users-section" class="crud-section" style="display:none;">
                <h3>Manage Users</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody id="userTableBody">
                        <!-- User data will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>
            <div id="bookings-section" class="crud-section" style="display:none;">
                <h3>Manage Bookings</h3>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Car</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="bookingTableBody">
                        <!-- Booking data will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>

            <div id="rental-requests-section" class="crud-section" style="display:none;">
                <h3>Rental Requests</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Request ID</th>
                            <th>User</th>
                            <th>Car</th>
                            <th>Dates</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="rentalRequestsTableBody">
                        <!-- Rental request data will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>

            <div id="loyalty-section" class="crud-section" style="display:none;">
                <h3>Loyalty Program Management</h3>
                
                <div class="loyalty-stats">
                    <div class="stat-card">
                        <h4>Total Active Users</h4>
                        <div class="stat-value">245</div>
                    </div>
                    <div class="stat-card">
                        <h4>Points Redeemed (This Month)</h4>
                        <div class="stat-value">1,234</div>
                    </div>
                    <div class="stat-card">
                        <h4>Active Discounts</h4>
                        <div class="stat-value">56</div>
                    </div>
                </div>

                <h4>Customer Points Overview</h4>
                <table>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Current Points</th>
                            <th>Total Rentals</th>
                            <th>Available Discounts</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="loyaltyTableBody">
                        <!-- Loyalty data will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>
        </div>
        </div>
    </div>

    <!--========================================= MODALS================================================ -->


    <!-- Add/Edit Car Form Modal -->
    <div id="carFormModal" class="modal">
        <div class="modal-content">
            <h3 id="formTitle">Add New Car</h3>
            <form id="carForm">
                <input type="hidden" id="carId">
                <input type="text" id="carMake" placeholder="Make" required>
                <input type="text" id="carModel" placeholder="Model" required>
                <input type="number" id="carYear" placeholder="Year" required>
                <button type="submit" class="btn">Save Car</button>
                <button type="button" class="btn" onclick="closeCarForm()">Cancel</button>
            </form>
        </div>
    </div>
    <!-- Add Rental Details Modal -->
    <div id="rentalDetailsModal" class="modal rental-details-modal">
        <div class="modal-content">
            <h3>Rental Request Details</h3>
            <div id="rentalDetailsContent">
                <!-- Rental details will be dynamically inserted here -->
            </div>
            <div class="approval-buttons">
                <button type="button" class="approve-btn" onclick="approveRequest(selectedRequestId)">Approve Request</button>
                <button type="button" class="reject-btn" onclick="rejectRequest(selectedRequestId)">Reject Request</button>
                <button type="button" class="btn" onclick="closeRentalDetails()">Close</button>
            </div>
        </div>
    </div>
    <!-- Add Loyalty Points Modal -->
    <div id="loyaltyModal" class="modal">
        <div class="modal-content">
            <h3>Manage Customer Points</h3>
            <form id="loyaltyForm">
                <input type="hidden" id="userId">
                <div class="detail-row">
                    <div class="detail-label">Current Points:</div>
                    <div id="currentPoints">0</div>
                </div>
                <div class="detail-row">
                    <div class="detail-label">Available Discounts:</div>
                    <div>
                        <button type="button" class="redeem-btn" onclick="redeemDiscount(3, 10)">Redeem 10% (3 points)</button>
                        <button type="button" class="redeem-btn" onclick="redeemDiscount(7, 30)">Redeem 30% (7 points)</button>
                    </div>
                </div>
                <button type="button" class="btn" onclick="closeLoyaltyModal()">Close</button>
            </form>
        </div>
    </div>

    <script>
        // Sample data (replace with actual data from your backend)
        let cars = [
            { id: 1, make: "Toyota", model: "Camry", year: 2022 },
            { id: 2, make: "Honda", model: "Civic", year: 2021 },
            { id: 3, make: "Ford", model: "Mustang", year: 2023 }
        ];

        let users = [
            { id: 1, name: "John Doe", email: "john@example.com", password: "user123" },
            { id: 2, name: "Jane Smith", email: "jane@example.com", password: "user1234" }
        ];

        let bookings = [
            { id: 1, user: "John Doe", car: "Toyota Camry", startDate: "2024-10-25", endDate: "2024-10-28", status: "Confirmed" },
            { id: 2, user: "Jane Smith", car: "Honda Civic", startDate: "2024-11-01", endDate: "2024-11-03", status: "Pending" }
        ];

        let rentalRequests = [
            {
                id: 1,
                userId: 1,
                userName: "John Doe",
                carId: 1,
                carName: "Toyota Camry",
                startDate: "2024-10-25",
                endDate: "2024-10-28",
                status: "pending",
                licenseNumber: "DL123456",
                phoneNumber: "+1234567890",
                purpose: "Business Trip",
                additionalNotes: "Prefer pickup in the morning"
            },
            {
                id: 2,
                userId: 2,
                userName: "Jane Smith",
                carId: 2,
                carName: "Honda Civic",
                startDate: "2024-11-01",
                endDate: "2024-11-03",
                status: "approved",
                licenseNumber: "DL789012",
                phoneNumber: "+9876543210",
                purpose: "Family Vacation",
                additionalNotes: "Need child seat"
            }
        ];

        let selectedRequestId = null;

        let loyaltyData = [
            { 
                userId: 1, 
                name: "John Doe", 
                points: 5, 
                totalRentals: 8,
                availableDiscounts: ["10% off"]
            },
            { 
                userId: 2, 
                name: "Jane Smith", 
                points: 8, 
                totalRentals: 12,
                availableDiscounts: ["10% off", "30% off"]
            }
        ];

        // Modify rental requests to include points
        rentalRequests = rentalRequests.map(request => ({
            ...request,
            pointsEarned: 1 // Each rental earns 1 point
        }));



        // Function to show different sections
        function showSection(sectionName) {
            document.getElementById('dashboard-section').style.display = 'none';
            document.getElementById('cars-section').style.display = 'none';
            document.getElementById('users-section').style.display = 'none';
            document.getElementById('bookings-section').style.display = 'none';
            document.getElementById('rental-requests-section').style.display = 'none';
            document.getElementById('loyalty-section').style.display = 'none';
            document.getElementById(sectionName + '-section').style.display = 'block';

            if (sectionName === 'cars') renderCarTable();
            if (sectionName === 'users') renderUserTable();
            if (sectionName === 'bookings') renderBookingTable();
            if (sectionName === 'rental-requests') renderRentalRequestsTable();
            if (sectionName === 'loyalty') renderLoyaltyTable();
        }

        // Render car table
        function renderCarTable() {
            const tableBody = document.getElementById('carTableBody');
            tableBody.innerHTML = '';
            cars.forEach(car => {
                const row = `
                    <tr>
                        <td>${car.id}</td>
                        <td>${car.make}</td>
                        <td>${car.model}</td>
                        <td>${car.year}</td>
                        <td class="action-buttons">
                            <button class="edit-btn" onclick="editCar(${car.id})">Edit</button>
                            <button class="delete-btn" onclick="deleteCar(${car.id})">Delete</button>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }

        // Render user table
        function renderUserTable() {
            const tableBody = document.getElementById('userTableBody');
            tableBody.innerHTML = '';
            users.forEach(user => {
                const row = `
                    <tr>
                        <td>${user.id}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.password}</td>
                        
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }

        // Render booking table
        function renderBookingTable() {
            const tableBody = document.getElementById('bookingTableBody');
            tableBody.innerHTML = '';
            bookings.forEach(booking => {
                const row = `
                    <tr>
                        <td>${booking.id}</td>
                        <td>${booking.user}</td>
                        <td>${booking.car}</td>
                        <td>${booking.startDate}</td>
                        <td>${booking.endDate}</td>
                        <td>${booking.status}</td>
                        <td class="action-buttons">
                            <button class="edit-btn" onclick="editBooking(${booking.id})">Edit</button>
                            <button class="delete-btn" onclick="deleteBooking(${booking.id})">Delete</button>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }

         // Add new function to render loyalty table
         function renderLoyaltyTable() {
            const tableBody = document.getElementById('loyaltyTableBody');
            tableBody.innerHTML = '';
            loyaltyData.forEach(user => {
                const row = `
                    <tr>
                        <td>${user.userId}</td>
                        <td>${user.name}</td>
                        <td><span class="points-badge">${user.points} points</span></td>
                        <td>${user.totalRentals}</td>
                        <td>${user.availableDiscounts.join(', ') || 'None'}</td>
                        <td class="loyalty-actions">
                            <button class="view-details-btn" onclick="manageLoyaltyPoints(${user.userId})">Manage Points</button>
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }

        // Show add car form
        function showAddCarForm() {
            document.getElementById('formTitle').textContent = 'Add New Car';
            document.getElementById('carId').value = '';
            document.getElementById('carForm').reset();
            document.getElementById('carFormModal').style.display = 'block';
        }

        // Edit car
        function editCar(id) {
            const car = cars.find(c => c.id === id);
            if (car) {
                document.getElementById('formTitle').textContent = 'Edit Car';
                document.getElementById('carId').value = car.id;
                document.getElementById('carMake').value = car.make;
                document.getElementById('carModel').value = car.model;
                document.getElementById('carYear').value = car.year;
                document.getElementById('carFormModal').style.display = 'block';
            }
        }

        // Delete car
        function deleteCar(id) {
            if (confirm('Are you sure you want to delete this car?')) {
                cars = cars.filter(c => c.id !== id);
                renderCarTable();
            }
        }

        // Close car form
        function closeCarForm() {
            document.getElementById('carFormModal').style.display = 'none';
        }

        // Handle form submission
        document.getElementById('carForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const id = document.getElementById('carId').value;
            const make = document.getElementById('carMake').value;
            const model = document.getElementById('carModel').value;
            const year = document.getElementById('carYear').value;

            if (id) {
                // Update existing car
                const index = cars.findIndex(c => c.id == id);
                cars[index] = { id: parseInt(id), make, model, year: parseInt(year) };
            } else {
                // Add new car
                const newId = Math.max(...cars.map(c => c.id)) + 1;
                cars.push({ id: newId, make, model, year: parseInt(year) });
            }

            renderCarTable();
            closeCarForm();
        });

        // Render rental requests table
        function renderRentalRequestsTable() {
            const tableBody = document.getElementById('rentalRequestsTableBody');
            tableBody.innerHTML = '';
            rentalRequests.forEach(request => {
                const statusClass = `status-${request.status}`;
                const row = `
                    <tr>
                        <td>${request.id}</td>
                        <td>${request.userName}</td>
                        <td>${request.carName}</td>
                        <td>${request.startDate} to ${request.endDate}</td>
                        <td><span class="status-badge ${statusClass}">${request.status}</span></td>
                        <td><span class="points-badge">+${request.pointsEarned}</span></td>
                        <td class="action-buttons">
                            <button class="view-details-btn" onclick="viewRentalDetails(${request.id})">View Details</button>
                            ${request.status === 'pending' ? `
                                <button class="approve-btn" onclick="approveRequest(${request.id})">Approve</button>
                                <button class="reject-btn" onclick="rejectRequest(${request.id})">Reject</button>
                            ` : ''}
                        </td>
                    </tr>
                `;
                tableBody.innerHTML += row;
            });
        }

        // Add loyalty management functions
        function manageLoyaltyPoints(userId) {
            const user = loyaltyData.find(u => u.userId === userId);
            if (user) {
                document.getElementById('userId').value = userId;
                document.getElementById('currentPoints').textContent = user.points;
                document.getElementById('loyaltyModal').style.display = 'block';
            }
        }

        function redeemDiscount(pointsRequired, discountPercentage) {
            const userId = parseInt(document.getElementById('userId').value);
            const user = loyaltyData.find(u => u.userId === userId);
            
            if (user && user.points >= pointsRequired) {
                user.points -= pointsRequired;
                user.availableDiscounts.push(`${discountPercentage}% off`);
                alert(`Successfully redeemed ${discountPercentage}% discount!`);
                closeLoyaltyModal();
                renderLoyaltyTable();
            } else {
                alert('Not enough points to redeem this discount.');
            }
        }

        


        // View rental details
        function viewRentalDetails(id) {
            const request = rentalRequests.find(r => r.id === id);
            selectedRequestId = id;
            
            if (request) {
                const detailsContent = `
                    <div class="detail-row">
                        <div class="detail-label">Request ID:</div>
                        <div>${request.id}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">User Name:</div>
                        <div>${request.userName}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Car:</div>
                        <div>${request.carName}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Dates:</div>
                        <div>${request.startDate} to ${request.endDate}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">License Number:</div>
                        <div>${request.licenseNumber}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Phone Number:</div>
                        <div>${request.phoneNumber}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Purpose:</div>
                        <div>${request.purpose}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Additional Notes:</div>
                        <div>${request.additionalNotes}</div>
                    </div>
                    <div class="detail-row">
                        <div class="detail-label">Status:</div>
                        <div><span class="status-badge status-${request.status}">${request.status}</span></div>
                    </div>
                `;
                
                document.getElementById('rentalDetailsContent').innerHTML = detailsContent;
                document.getElementById('rentalDetailsModal').style.display = 'block';
            }
        }

        // Approve rental request
        function approveRequest(id) {
            const request = rentalRequests.find(r => r.id === id);
            if (request && request.status === 'pending') {
                request.status = 'approved';
                // Add points to user's loyalty account
                const user = loyaltyData.find(u => u.userId === request.userId);
                if (user) {
                    user.points += request.pointsEarned;
                    user.totalRentals += 1;
                }
                renderRentalRequestsTable();
                renderLoyaltyTable();
                closeRentalDetails();
                alert('Rental request approved and points awarded!');
            }
        }

        // Reject rental request
        function rejectRequest(id) {
            const request = rentalRequests.find(r => r.id === id);
            if (request && request.status === 'pending') {
                request.status = 'rejected';
                // Here you would typically make an API call to update the status
                renderRentalRequestsTable();
                closeRentalDetails();
                alert('Rental request rejected.');
            }
        }

        // Close rental details modal
        function closeRentalDetails() {
            document.getElementById('rentalDetailsModal').style.display = 'none';
            selectedRequestId = null;
        }

        function closeLoyaltyModal() {
            document.getElementById('loyaltyModal').style.display = 'none';
        }

        // Logout function
        function logout() {
            // Implement logout logic here
            alert('Logging out...');
            // Redirect to login page or perform other logout actions
        }

        // Initial render
        showSection('dashboard');
    </script>
</body>
</html>