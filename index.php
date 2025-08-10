<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Management</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <h1>Customer Management System</h1>
    </header>

    <main>
        <section class="form-section">
            <h2>Add Customer</h2>
            <form id="customerForm">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter customer name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter customer email" required>

                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter phone number" required>

                <button type="submit">Add Customer</button>
            </form>
        </section>

        <section class="list-section">
            <h2>Customer List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John Doe</td>
                        <td>john@example.com</td>
                        <td>+91 98765 43210</td>
                    </tr>
                    <tr>
                        <td>Jane Smith</td>
                        <td>jane@example.com</td>
                        <td>+91 98765 12345</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

</body>
</html>
