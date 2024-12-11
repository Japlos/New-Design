<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="style.css" />
  <title>Responsive Dashboard</title>
  <style>
    /* Add pop-up and card transition from registrar.php */
    .cards {
      display: grid;
      grid-template-columns: repeat(4, 1fr); /* 4 equal columns */
      gap: 20px; /* Adjust space between cards */
      margin-top: 30px;
      padding: 0 10px; /* Add some padding on the sides for better spacing */
    }

    .card {
      width: 100%;
      height: 250px;
      display: flex;
      justify-content: center;
      align-items: center;
      perspective: 1000px; /* Adds depth to the 3D effect */
      cursor: pointer;
    }

    .card-inner {
      width: 100%;
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.6s;
      transform-style: preserve-3d; /* Ensures both sides are visible */
    }

    /* Flip effect */
    .card.flipped .card-inner {
      transform: rotateY(180deg);
    }

    .card-front, .card-back {
      position: absolute;
      width: 100%;
      height: 100%;
      backface-visibility: hidden; /* Ensures that the back side is hidden when flipped */
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 20px;
      font-weight: bold;
      color: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card-front {
      background: linear-gradient(135deg, #6a89cc, #4a69bd);
    }

    .card-back {
      background: linear-gradient(135deg, #f39c12, #e67e22);
      transform: rotateY(180deg); /* Flip the back side */
      font-size: 16px; /* Adjust font size for the back side */
      padding: 20px;
      text-align: center;
    }

    /* Animation for the pop-up */
    @keyframes pop-up {
      to {
        transform: scale(1);
        opacity: 1;
      }
    }
  </style>
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
      <li>
        <a href="index.php"><i class="bx bx-analyse"></i>Appointment</a>
      </li>
      <li class="active">
        <a href="registrar.php"><i class="bx bx-group"></i>Registrar</a>
      </li>
    </ul>
    <ul class="side-menu">
      <li>
        <a href="login.php" class="logout">
          <i class="bx bx-log-out-circle"></i>
          Logout
        </a>
      </li>
    </ul>
  </div>
  <!-- End of Sidebar -->

  <!-- Main Content -->
  <div class="content">
    <!-- Dark Theme Toggle -->
    <nav>
      <i class="bx bx-menu"></i>
      <input type="checkbox" id="theme-toggle" hidden />
      <label for="theme-toggle" class="theme-toggle"></label>
    </nav>
    <!-- End of Dark Theme Toggle -->

    <main>
      <div class="header">
        <h1>Registrar</h1>
      </div>

      <!-- Booking Options Section -->
      <div class="cards">
        <div class="card" onclick="flipCard(this)">
          <div class="card-inner">
            <div class="card-front">Name 1</div>
            <div class="card-back">Information for Name 1</div>
          </div>
        </div>
        <div class="card" onclick="flipCard(this)">
          <div class="card-inner">
            <div class="card-front">Name 2</div>
            <div class="card-back">Information for Name 2</div>
          </div>
        </div>
        <div class="card" onclick="flipCard(this)">
          <div class="card-inner">
            <div class="card-front">Name 3</div>
            <div class="card-back">Information for Name 3</div>
          </div>
        </div>
        <div class="card" onclick="flipCard(this)">
          <div class="card-inner">
            <div class="card-front">Name 4</div>
            <div class="card-back">Information for Name 4</div>
          </div>
        </div>

        <div class="card" onclick="flipCard(this)">
          <div class="card-inner">
            <div class="card-front">Name 5</div>
            <div class="card-back">Information for Name 5</div>
          </div>
        </div>
        <div class="card" onclick="flipCard(this)">
          <div class="card-inner">
            <div class="card-front">Name 6</div>
            <div class="card-back">Information for Name 6</div>
          </div>
        </div>
        <div class="card" onclick="flipCard(this)">
          <div class="card-inner">
            <div class="card-front">Name 7</div>
            <div class="card-back">Information for Name 7</div>
          </div>
        </div>
        <div class="card" onclick="flipCard(this)">
          <div class="card-inner">
            <div class="card-front">Name 8</div>
            <div class="card-back">Information for Name 8</div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <script>
    function flipCard(card) {
  // Toggle the 'flipped' class on the clicked card
  card.classList.toggle('flipped');
}

// Dark Theme Toggle
const toggler = document.getElementById("theme-toggle");

// Check if dark mode is enabled from localStorage
document.addEventListener("DOMContentLoaded", () => {
  const darkMode = localStorage.getItem("darkMode");

  // If dark mode is stored in localStorage, apply it
  if (darkMode === "enabled") {
    document.body.classList.add("dark");
    toggler.checked = true; // Ensure the checkbox reflects the state
  }
});

// Listen for changes to the theme toggle
toggler.addEventListener("change", function () {
  if (this.checked) {
    document.body.classList.add("dark");
    // Save the dark mode preference in localStorage
    localStorage.setItem("darkMode", "enabled");
  } else {
    document.body.classList.remove("dark");
    // Remove the dark mode preference from localStorage
    localStorage.setItem("darkMode", "disabled");
  }
});

// Sidebar Link Toggle (active state)
const sideLinks = document.querySelectorAll(".sidebar .side-menu li a:not(.logout)");

sideLinks.forEach((item) => {
  const li = item.parentElement;

  item.addEventListener("click", () => {
    // Remove active class from all links
    sideLinks.forEach((i) => {
      i.parentElement.classList.remove("active");
    });

    // Add active class to the clicked link
    li.classList.add("active");

    // Toggle between Appointment, Request, and Dashboard content
    toggleContent(item);
  });
});

// Side Bar Toggle (for responsive menu)
const menuBar = document.querySelector(".content nav .bx.bx-menu");
const sideBar = document.querySelector(".sidebar");

menuBar.addEventListener("click", () => {
  sideBar.classList.toggle("close");
});

window.addEventListener("resize", () => {
  if (window.innerWidth < 768) {
    sideBar.classList.add("close");
  } else {
    sideBar.classList.remove("close");
  }
  if (window.innerWidth > 576) {
    searchBtnIcon.classList.replace("bx-x", "bx-search");
    searchForm.classList.remove("show");
  }
});

// Toggle content when switching between pages (Appointment, Request, Dashboard)
function toggleContent(item) {
  const appointmentContent = document.querySelector(".appointment-content");
  const requestContent = document.querySelector(".request-content");
  const dashboardContent = document.querySelector(".dashboard-content");

  // Hide all content sections initially
  appointmentContent.style.display = "none";
  requestContent.style.display = "none";
  dashboardContent.style.display = "none";

  // Show the appropriate content based on the clicked link
  if (item.textContent === "Appointment") {
    appointmentContent.style.display = "block";
    requestContent.style.display = "none"; // Hide Request content if Appointment is active
    dashboardContent.style.display = "none"; // Hide Dashboard content if Appointment is active
  } else if (item.textContent === "Request") {
    requestContent.style.display = "block";
    appointmentContent.style.display = "none"; // Hide Appointment content if Request is active
    dashboardContent.style.display = "none"; // Hide Dashboard content if Request is active
  } else if (item.textContent === "Dashboard") {
    dashboardContent.style.display = "block";
    appointmentContent.style.display = "none"; // Hide Appointment content if Dashboard is active
    requestContent.style.display = "none"; // Hide Request content if Dashboard is active
  }
}

// Initialize by hiding all content and showing default (e.g., "Appointment")
document.addEventListener("DOMContentLoaded", () => {
  const appointmentLink = document.querySelector("a[href='#appointment']");
  const requestLink = document.querySelector("a[href='#request']");
  const dashboardLink = document.querySelector("a[href='#dashboard']");

  // Ensure Appointment content is displayed by default
  if (appointmentLink.classList.contains("active")) {
    toggleContent(appointmentLink);
  } else if (requestLink.classList.contains("active")) {
    toggleContent(requestLink);
  } else if (dashboardLink.classList.contains("active")) {
    toggleContent(dashboardLink);
  }
});
  </script>

</body>
</html>
