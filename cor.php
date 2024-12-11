<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Certificate of Registration</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css">
</head>

<body>



  <div class="sidebar">
    <a href="#" class="logo">
      <i class="bx bx-code-alt"></i>
      <div class="logo-name"><span>On_</span>A.ment</div>
    </a>
    <ul class="side-menu">
      <li>
        <a href="dashboard.php"><i class="bx bxs-dashboard"></i>Dashboard</a>
      </li>
      <li class="active">
        <a href="request.php"><i class="bx bx-store-alt"></i>Request</a>
      </li>
      <li>
        <a href="index.php"><i class="bx bx-analyse"></i>Appointment</a>
      </li>
      <li><a href="registrar.php"><i class="bx bx-group"></i>Registrar</a> </li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="logout.php" class="logout">
          <i class="bx bx-log-out-circle"></i>
          Logout
        </a>
      </li>
    </ul>
  </div>

  


  <div class="form-container">
    <h1>Certificate of Registration Form</h1>
    <form>
      <div class="form-row">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="student-number">Student Number:</label>
          <input type="text" id="student-number" name="student-number" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="appointment-date">Preferred Appointment Date:</label>
          <input type="date" id="appointment-date" name="appointment-date" required>
        </div>
      </div>
      <button type="submit" class="submit-btn">Submit</button>
    </form>
  </div>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap");

:root {
  --light: #f6f6f9;
  --primary: #1976d2;
  --grey: #eee;
  --dark: #363949;
  --danger: #d32f2f;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

body {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: var(--grey);
}

.form-container {
  background: var(--light);
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
  width: 100%;
  max-width: 400px;
  text-align: center;
}

h1 {
  margin-bottom: 20px;
  color: var(--danger);
}

.form-row {
  display: flex;
  flex-direction: column;
  gap: 20px;
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-weight: 500;
  color: var(--dark);
  margin-bottom: 8px;
}

.form-group input {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid var(--grey);
  border-radius: 5px;
}

.form-group input:focus {
  outline: none;
  border-color: var(--primary);
}

.submit-btn {
  background: var(--danger);
  color: #fff;
  border: none;
  padding: 12px;
  width: 100%;
  font-size: 16px;
  font-weight: 600;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s ease;
}

.submit-btn:hover {
  background: #b71c1c;
}

@media screen and (max-width: 768px) {
  .form-container {
    padding: 20px;
  }
}
    
  </style>
</body>

</html>