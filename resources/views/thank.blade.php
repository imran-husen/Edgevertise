<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="icon" type="image/x-icon" href="static/css/style.css/main logo.jpeg">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Searching Screen -->
    <div class="searching-bg">
        <div class="loader"></div>
    </div>

    <!-- Thank You Screen -->
    <div class="thank-you-bg d-flex justify-content-center align-items-center text-center p-2">
        <div class="card thank-you-card p-4 text-dark" style="max-width: 600px; width: 100%; background: #fff; border: none; border-radius: 15px;">
            <div class="card-body">
                <div class="icon mb-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#28a745" class="bi bi-check-circle" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                        <path d="M10.97 5.97a.235.235 0 0 1 .03.022l-3.992 4.991L4.324 8.43a.75.75 0 1 1 1.06-1.06l1.658 1.658 3.48-4.35a.75.75 0 0 1 1.124.016z"/>
                    </svg>
                </div>
                <h1 class="card-title text-success glow mb-3">Thank You!</h1>
                <p class="card-text mb-4">
                    Your submission has been successfully received. We value your time and effort. 
                    If you have any questions, feel free to <a href="{{url('/contact')}}" class="text-primary">contact us</a>.
                </p>
                <a href="{{url('/')}}" class="btn btn-primary btn-lg">Return to Homepage</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script>
        // JavaScript to switch between loading and thank-you screen
setTimeout(() => {
    document.querySelector('.searching-bg').style.display = 'none';
    document.querySelector('.thank-you-bg').style.display = 'flex';
    }, 2000);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script> 
</body>
</html>
