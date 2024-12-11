<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>TOR Form</title>
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

  <div class="form-container">
    <h1>Transcript of Records</h1>
    <form>
      <div class="form-row">
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="year-graduate">Year Graduated:</label>
          <input type="text" id="year-graduate" name="year-graduate" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="section">Section:</label>
          <input type="text" id="section" name="section" required>
        </div>
        <div class="form-group">
          <label for="course">Course:</label>
          <select id="course" name="course" required>
            <option value="">-- Select Course --</option>
            <option value="ACT">Associative in Computer Technology</option>
            <option value="BACOMM">Bachelor of Arts in Communication</option>
            <option value="BSBA">Bachelor of Science in Business Administration</option>
            <option value="BSCRIM">Bachelor of Science in Criminology</option>
            <option value="BSCS">Bachelor of Science in Computer Science</option>
            <option value="BSED">Bachelor of Secondary Education</option>
            <option value="BPED">Bachelor in Primary Education</option>
            <option value="BSN">Bachelor of Science in Nursing</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="cellphone">Cellphone Number:</label>
          <input type="text" id="cellphone" name="cellphone" required>
        </div>
        <div class="form-group">
          <label for="gender">Gender:</label>
          <select id="gender" name="gender" required>
            <option value="">-- Select Gender --</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="appointment-date">Preferred Appointment Date:</label>
          <input type="date" id="appointment-date" name="appointment-date" required>
        </div>
        <div class="form-group">
          <label for="appointment-time">Preferred Appointment Time:</label>
          <input type="time" id="appointment-time" name="appointment-time" required>
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
  max-width: 600px;
  text-align: center;
}

h1 {
  margin-bottom: 20px;
  color: var(--danger);
}

.form-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 20px;
  margin-bottom: 20px;
}

.form-group label {
  display: block;
  font-weight: 500;
  color: var(--dark);
  margin-bottom: 8px;
}

.form-group input,
.form-group select {
  width: 100%;
  padding: 10px;
  font-size: 16px;
  border: 1px solid var(--grey);
  border-radius: 5px;
}

.form-group input:focus,
.form-group select:focus {
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
  .form-row {
    grid-template-columns: 1fr;
  }

  .form-container {
    padding: 20px;
  }
}

    </style>

</body>
</html>
