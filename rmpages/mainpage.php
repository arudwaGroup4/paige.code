<!DOCTYPE html>
<html lang="en">

<!-- RM Dasboard -->

<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="mainpage.css">
  <style>
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }

    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }
  </style>
</head>

<body>
  <input type="checkbox" id="checkbox">
  <header class="header">
    <h2 class="u-name">Intelligent <b>Investments</b>
      <label for="checkbox">
        <ion-icon id="navbtn" name="menu-outline"></ion-icon> <!--menu bar checking the top box left corner-->
      </label>
    </h2>

    <div class="button">
      <a href="http://127.0.0.1:5500/E/rmpages/homepage.html"><button>Sign out</button></a>
      
      <!--<ion-icon name="person-circle-outline"></ion-icon>-->
      <!--<button onclick="myFunction()" class="dropbtn">Dropdown</button>-->
      <div id="myDropdown" class="dropdown-content"> <!--Div created for Dropdown menu-->
        
      </div>
    </div>
  </header>

  <div class="body">
    <nav class="side-bar">
      <div class="user-p">
        <img src="imgs/Default_pfp.jpg">
        <h4>RM: Mr John Stevens </h4>
        <small>213-789-09</small>
      </div>
           <!-- Side-bar links to settings, profile and client list -->
      <ul>
        <li>
          <a href="http://localhost/mystore/clienttable.php">
            <ion-icon name="desktop-outline"></ion-icon>
            <span>Dashboard</span>
          </a>
        </li>

        <li>
          <a href="https://www.google.com">
            <ion-icon name="mail-outline"></ion-icon>
            <span>Messages</span>
          </a>
        </li>

        <li>
          <a href="https://www.google.com">
            <ion-icon name="settings-outline"></ion-icon>
            <span>Settings</span>
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <!--Opening links side tabs ends-->

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <script>
    /* When the user clicks on the button, toggle between hiding and showing the dropdown content */
    function myFunction() /*intialise function? */ {
      document.getElementById("myDropdown").classList.toggle("show");
    }

    // Close the dropdown if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
  </script>

</body>
</html>