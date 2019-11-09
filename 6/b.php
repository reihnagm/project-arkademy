<?php include_once 'db.php'; ?>


<?php 
        $sql = "select a.name cashier, b.name product, c.name category, b.price 
        from cashier a 
        inner join product b on b.id_cashier = a.id  
        inner join category c on b.id_category = c.id
        order by b.price";
        $query = mysqli_query($conn, $sql);  
    ?>


<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="assets/materialize/css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <style>
        table {
          margin-top: 50px;
          border-collapse: separate;
        }
        table thead tr th {
          background: #bdbdbd ;
          color: white;
        }
      </style>
    </head>

    <body>

    <nav class="transparent">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo"><img src="assets/logo/logo.png" alt="" width="90" style="margin-left: 30px; margin-top: 10px; display: block;">
      </a>
      <ul id="nav-mobile" class="hide-on-med-and-down">
        <li style="margin-top: 8px; margin-left: 150px;"><h6 style="color: pink; font-weight: bold;" href="#">ARKADEMY</h6></li>
        <li style="color: black; margin-top: 8px; margin-left: 10px;"><h6 style="color: black; font-weight: bold;" href="#">COFFE SHOP</h6></li>

        <li style="color: black; margin-left: 10px; float: right;">
        <a id="add" href="#" style="background: #f48fb1;" class="waves-effect waves-light btn">ADD</a></li>
      </ul>
    </div>
  </nav>

    <div class="container">
    
      <table style="border-collapse: none !important;">
          <thead>
            <tr>
                <th style="border-top-left-radius: 8px;">No</th>
                <th>Cashier</th>
                <th>Product</th>
                <th>Category</th>
                <th>Price</th>
                <th style="border-top-right-radius: 8px;">Action</th>
            </tr>
          </thead>

          <tbody>
          <?php $id = 1;?>
          <?php while($row = mysqli_fetch_object($query)):  ?>
            <tr>
              <td><?php echo $id++; ?></td>
              <td><?php echo $row->cashier; ?></td>
              <td><?php echo $row->product; ?></td>
              <td><?php echo $row->category; ?></td>
              <td><?php echo $row->price; ?></td>
              <td><a style="color: #66bb6a;" href="">Edit</a> | <a style="color: #ff1744;" href="">Delete</a></td>
            </tr>
          <?php  endwhile; ?>
          </tbody>
        </table>  
      </div>

  <div id="modal-add" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>

      <script
			  src="https://code.jquery.com/jquery-3.4.1.min.js"
			  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
			  crossorigin="anonymous"></script>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="assets/materialize/js/materialize.min.js"></script>
   
      <script>
      
        $("#add").click(function() {
          $('.modal').modal();
        })

        $("#edit").click(function() {
          
        })

        $("#delete").click(function() {

        })
      </script>
    </body>
  </html>