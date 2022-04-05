<?php

  $file = 'registered.json';
  $airline_data = array();
  $file_json = file_get_contents($file);
  $airline_data = json_decode($file_json, true);

  $origin_airport = array(
      "Soekarno-Hatta (CGK)" => 65000,
      "Husein Sastranegara (BDO)" => 50000,
      "Abdul Rahman Saleh (MLG)" => 40000,
      "Juanda (SUB)" => 30000);

  $destination_airport = array(
      "Ngurah Rai (DPS)" => 80000,
      "Sultan Hasanuddin (UPG)" => 70000,
      "Inanwatan (INX)" => 90000,
      "Sultan Iskandar Muda (BTJ)" => 70000);

  function getOriginTax($origin_airport, $destination)
  {
      $tax = $origin_airport[$destination];
      return $tax;
  }

  function getDestTax($destination_airport, $destination)
  {
      $tax = $destination_airport[$destination];
      return $tax;
  }

  if (isset($_POST['regis'])) {
    $tax = getOriginTax($origin_airport, $_POST['origin']) + getDestTax($destination_airport, $_POST['destination']);
    $total = $tax + $_POST['fare'];

    $newData = array(
      "Airline" => $_POST['airline'],
      "Origin" => $_POST['origin'],
      "Destination" => $_POST['destination'],
      "Fare" => $_POST['fare'],
      "Tax" => $tax,
      "Total_fare" => $total
    );

    array_push($airline_data, $newData);
    $data_json = json_encode($airline_data, JSON_PRETTY_PRINT);
    file_put_contents($file, $data_json);
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="Assets/icon.png"/>
    <title>Route Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"/>
    <link rel ="stylesheet" href="bandara.css"/>

</head>

<body>
  <script src = "bandara.js"></script>  
  <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <header class="header2">
    <nav class="navbar navbar-expand-lg mt-3">
      <div class="container-fluid">
        <img src="Assets/icon.png" width="50" height="50"></img>
          <h2><a class="navbar-brand" href="index.php" style="color:black; font-size: 32px;">XYZ Airport</a></h2>
      </div>
    </nav>
  </header>

  <section id="logo1">
      <div class="container" style="margin-top: 60px;">
          <div class="row text-center mb-1">
              <h2 class="greeting">Route Registration</h2>
          </div>
      </div>
  </section>

  <img src="Assets/airport1.png" style="width: 100%;">

  <section id="register" style="background-color: #4b4e50; padding-bottom: 5px;">
    <div class="container" style="width:80%;">
      <br><br><br>       
        <p class="mb-5" style="text-align: center; color: white;">
          Please input the airline name, origin and destination airport and the fare in the form below to register it.
        </p>

        <form action="" method="POST">
          <div class="row g-4 justify-content-center">         
            <div class="col-12">
              <label for="name" class="form-label">Airline Name</label>
                <input type="text" class="form-control" id="airline" name="airline" placeholder="Input Airline Name">
            </div>
              
            <div class="col-sm-6">
              <label class="form-label" for="origin">Select Origin of Departure :</label>
              <br>
                <select class="form-select" name="origin" id="origin">
                <option selected>Select Origin of Departure</option>
                    <?php foreach ($origin_airport as $airport => $tax) : ?>
                <option value="<?= $airport ?>"><?= $airport; ?></option>
                    <?php endforeach; ?>
              </select>
            </div>

            <div class="col-sm-6">
              <label class="form-label" for="destination">Select Arrival Destination :</label><br>
                <select class="form-select" name="destination" id="destination">
                <option selected>Select Arrival Destination</option>
                    <?php foreach ($destination_airport as $airport => $tax) : ?>
                <option value="<?= $airport ?>"><?= $airport; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="col-12">
              <label for="fare" class="form-label">Route Fare (Rp)</label>
              <input type="text" class="form-control" name="fare" id="fare" placeholder="Input Route Fare"/>
            </div>

            <div class="col-12">
              <input class="form-check-input" type="checkbox" value="" name="terms" id="terms" onclick = "check()">
              <label class="form-check-label" for="terms" style="color: white;">
              I have made sure the data entered is correct
              </label>
            </div>
          </div> 

      <button class="btn btn-dark mt-4 mb-3" id="regis" name="regis" disabled>Register Route</button>
      <div class="container" style="margin-top: 60px;">
          <div class="row text-center mb-1">
              <h3 class="greeting2">Registered Routes</h3>
          </div>
      </div>
    </div>
  </section>

  <section id="table" style="background-color: #4b4e50; padding-bottom: 5px;">
    <br><br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Airline</th>
          <th scope="col">Origin</th>
          <th scope="col">Destination</th>
          <th scope="col">Fare</th>
          <th scope="col">Tax</th>
          <th scope="col">Total Fare</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($airline_data as $data => $value) : ?>
          <tr>
            <td><?= $airline_data[$data]['Airline']; ?></td>
            <td><?= $airline_data[$data]['Origin']; ?></td>
            <td><?= $airline_data[$data]['Destination']; ?></td>
            <td><?= $airline_data[$data]['Fare']; ?></td>
            <td><?= $airline_data[$data]['Tax']; ?></td>
            <td><?= $airline_data[$data]['Total_fare']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </section>
  
  <section style="background-color: #4b4e50; padding-top: 100px;">
    <img src="Assets/airport2.png" style="width: 100%;">
  </section>

  <footer class="bg-dark text-white text-center pb-5";">
      <br><br><br>
      <p>&copy; 2022 Hagi Azzam Azzikri - 2010631170076 - 4C</p>
      <p>
        <a href=#>Back To Top</a>
      </p>
  </footer>

  

</body>
</html>