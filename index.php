<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Banking System Navbar</title>
    <style>
      /* Basic Reset */
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, sans-serif;
      }

      /* Navbar Styling */
      .navbar {
        background-color: #004481;
        padding: 10px 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      /* Logo */
      .navbar .logo {
        color: #ffffff;
        font-size: 1.8em;
        font-weight: bold;
        text-decoration: none;
      }

      /* Navigation Links */
      .navbar ul {
        list-style: none;
        display: flex;
        align-items: center;
      }

      .navbar ul li {
        margin: 0 15px;
      }

      .navbar ul li a {
        color: #ffffff;
        text-decoration: none;
        font-size: 1.1em;
        transition: color 0.3s;
      }

      .navbar ul li a:hover {
        color: #00a9e0;
      }

      /* Login/Sign-Up Buttons */
      .navbar .auth-buttons {
        display: flex;
        gap: 15px;
      }

      .navbar .auth-buttons a {
        color: #004481;
        background-color: #ffffff;
        padding: 8px 16px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s, color 0.3s;
      }

      .navbar .auth-buttons a:hover {
        background-color: #00a9e0;
        color: #ffffff;
      }

      /* Responsive Navbar for Mobile */
      @media (max-width: 768px) {
        .navbar {
          flex-direction: column;
          align-items: flex-start;
        }

        .navbar ul {
          flex-direction: column;
          width: 100%;
        }

        .navbar ul li {
          margin: 10px 0;
        }

        .navbar .auth-buttons {
          width: 100%;
          justify-content: space-around;
          margin-top: 10px;
        }
      }

      #add {
        margin: 2rem;
        display: flex;
        justify-content: flex-end;
      }
    </style>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="logo">BankSystem</a>
      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#accounts">Accounts</a></li>
        <li><a href="#loans">Loans</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="auth-buttons">
        <a href="#login"> Admin Only</a>
        <!-- <a href="#signup">Sign Up</a> -->
      </div>
    </nav>
    <div id="btn">
      <a href="addpage.html" id="add">
        <button type="submit" class="btn btn-primary">Add customer</button>
      </a>
    </div>
    <table class="table container" border>
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">cname</th>
          <th scope="col">address</th>
          <th scope="col">D.O.B</th>
          <th scope="col">contact</th>
          <th scope="col">address proof</th>
          <th scope="col">aadhar number</th>
          <th scope="col">nominee</th>
          <th scope="col">relation</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">
        <?php 
    $conn=mysqli_connect("localhost","root","","bank");
    
    
    if($conn){
    
      $cmd="select * from `banks`";
    
      $query=mysqli_query($conn,$cmd);
      while($result=mysqli_fetch_array($query)){
        // echo $result['company'];
    ?>
        <tr>
          <td><?php echo $result['cid'] ?></td>
          <td><?php echo $result['name'] ?></td>
          <td><?php echo $result['address'] ?></td>
          <td><?php echo $result['birth date'] ?></td>
          <td><?php echo $result['contact'] ?></td>
          <td><?php echo $result['addressproof'] ?></td>
          <td><?php echo $result['aadharNumber'] ?></td>
          <td><?php echo $result['nominee'] ?></td>
          <td><?php echo $result['relation'] ?></td>
          <!-- <td><a href=.php"><button type="button" class="btn btn-success">buy</button></a></td> -->
        </tr>
      </tbody>
      <?php 
    }
      }
      ?>
    </table>
  </body>
</html>
