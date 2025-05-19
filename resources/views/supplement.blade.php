<!DOCTYPE html>
<html>
<head>
    <title>Supplement Form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <h2>Add Supplement</h2>

    <form id="supplementForm">
        <input type="text" name="name" placeholder="Supplement Name" required><br>
        <input type="text" name="description" placeholder="Description"><br>
        <input type="number" name="quantity" placeholder="Quantity" required><br>
        <button type="submit">Submit</button>
    </form>

    <script>
        const form = document.getElementById('supplementForm');

        form.addEventListener('submit', function (e) {
            e.preventDefault();

            const data = {
                name: form.name.value,
                description: form.description.value,
                quantity: form.quantity.value
            };

            if (!navigator.onLine) {
                let offlineSupplements = JSON.parse(localStorage.getItem('supplements')) || [];
                offlineSupplements.push(data);
                localStorage.setItem('supplements', JSON.stringify(offlineSupplements));
                alert('No internet. Data saved locally.');
            } else {
                sendToServer(data);
            }

            form.reset();
        });

        window.addEventListener('online', function () {
            let offlineSupplements = JSON.parse(localStorage.getItem('supplements')) || [];

            offlineSupplements.forEach(data => {
                sendToServer(data);
            });

            localStorage.removeItem('supplements');
        });

        function sendToServer(data) {
            fetch('supplements', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                },
                body: JSON.stringify(data)
            })
            .then(res => res.json())
            .then(response => {
                console.log('Data synced', response);
                alert('Supplement saved to server.');
            })
            .catch(err => {
                console.log('Failed to sync:', err);
            });
        }
    </script>
</body>
</html>