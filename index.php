<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Responsive Dashboard</title>
</head>
<body>
  <!-- Sidebar -->
  <div class="sidebar">
    <a href="#" class="logo">
      <i class="bx bx-code-alt"></i>
      <div class="logo-name"><span>On_</span>A.ment</div>
    </a>
    <ul class="side-menu">
      <li>
        <a href="dashboard.php"><i class="bx bxs-dashboard"></i>Dashboard</a>
      </li>
      <li>
        <a href="request.php"><i class="bx bx-store-alt"></i>Request</a>
      </li>
      <li class="active">
        <a href="index.html"><i class="bx bx-analyse"></i>Appointment</a>
      </li>
      <li>
        <a href="registrar.php"><i class="bx bx-group"></i>Registrar</a>
      </li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="login.php" class="logout"><i class="bx bx-log-out-circle"></i>Logout</a>
      </li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="content">
    <nav>
      <i class="bx bx-menu"></i>
      <input type="checkbox" id="theme-toggle" hidden>
      <label for="theme-toggle" class="theme-toggle"></label>
    </nav>

    <main>
      <div class="header">
        <h1>Appointments</h1>
      </div>

      <div class="insights">
        <div class="card" id="tor-card">
          <div class="card-front">
            <i class="bx bx-file"></i>
            <div class="info">
              <h3>TOR (Transcript of Records)</h3>
            </div>
          </div>
          <div class="card-back">
            <div class="requirements">
              <p>Requirements: Any valid ID</p>
            </div>
            <a href="mix.php" class="appoint-now">Appoint Now</a>
          </div>
        </div>
        <!-- Additional cards for GWA, COR, etc. can be added here -->
      </div>
    </main>
  </div>

    <script src="script.js"></script>

    <style>
      /* General Card Styles */
.insights {
  display: flex;
  justify-content: space-between;
  gap: 20px;
}

.card {
  width: 220px;
  height: 300px;
  perspective: 1000px; /* Enables 3D effect */
}

.card-front,
.card-back {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  backface-visibility: hidden; /* Hides the back when flipped */
  transition: transform 0.5s;
  position: absolute;
  top: 0;
  left: 0;
}

.card-front {
  background: #f1f1f1;
  border-radius: 10px;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
}

.card-back {
  background: #d32f2f;
  color: white;
  border-radius: 10px;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
  transform: rotateY(180deg);
}

.card:hover .card-front {
  transform: rotateY(180deg);
}

.card:hover .card-back {
  transform: rotateY(0);
}

.card .info {
  text-align: center;
}

.card .info h3 {
  font-size: 22px;  /* Adjusted to match TOR card */
  margin: 0;
}

.card .info p {
  font-size: 16px;  /* Adjusted to match TOR card */
  margin: 5px 0;
}

.card .info strong {
  font-weight: bold;
}

.card i {
  font-size: 50px;
  margin-bottom: 10px;
}

.card .requirements p {
  font-size: 18px;
  margin: 10px 0;
}

.card .appoint-now {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  color: #0a0500;
  text-transform: uppercase;
}

.card .appoint-now:hover {
  background-color: #0a0500;
  color: white;
}

/* Adjusting for smaller screens */
@media (max-width: 768px) {
  .insights {
    flex-direction: column;
    align-items: center;
  }

  .card {
    width: 100%;
    margin-bottom: 20px;
  }
}

    </style>
  </body>
</html>
