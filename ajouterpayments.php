<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E CLASSE</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/styile.css">
</head>

<body class="main-colo">
  <main class=" p-2 vh-100 d-flex justify-content-center align-items-center ">
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="bg-white col-12 p-3 rounded-4 shadow form form-main">
      <svg class="ms-4 mt-2" width="152" height="39" viewBox="0 0 152 39" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M35.5 26.84V31H18.156V8.6H35.084V12.76H23.308V17.624H33.708V21.656H23.308V26.84H35.5ZM38.0078 19.992H47.0638V23.992H38.0078V19.992ZM59.624 31.256C57.7893 31.256 56.136 30.8827 54.664 30.136C53.2133 29.368 52.072 28.312 51.24 26.968C50.4293 25.624 50.024 24.0987 50.024 22.392C50.024 20.6853 50.4293 19.16 51.24 17.816C52.072 16.472 53.2133 15.4267 54.664 14.68C56.136 13.912 57.7893 13.528 59.624 13.528C61.4373 13.528 63.016 13.912 64.36 14.68C65.7253 15.4267 66.7173 16.504 67.336 17.912L63.464 19.992C62.568 18.4133 61.2773 17.624 59.592 17.624C58.2907 17.624 57.2133 18.0507 56.36 18.904C55.5067 19.7573 55.08 20.92 55.08 22.392C55.08 23.864 55.5067 25.0267 56.36 25.88C57.2133 26.7333 58.2907 27.16 59.592 27.16C61.2987 27.16 62.5893 26.3707 63.464 24.792L67.336 26.904C66.7173 28.2693 65.7253 29.336 64.36 30.104C63.016 30.872 61.4373 31.256 59.624 31.256ZM70.0853 7.256H75.0773V31H70.0853V7.256ZM86.6543 13.528C89.3209 13.528 91.3689 14.168 92.7983 15.448C94.2276 16.7067 94.9423 18.616 94.9423 21.176V31H90.2703V28.856C89.3316 30.456 87.5823 31.256 85.0223 31.256C83.6996 31.256 82.5476 31.032 81.5663 30.584C80.6063 30.136 79.8703 29.5173 79.3583 28.728C78.8463 27.9387 78.5903 27.0427 78.5903 26.04C78.5903 24.44 79.1876 23.1813 80.3823 22.264C81.5983 21.3467 83.4649 20.888 85.9823 20.888H89.9503C89.9503 19.8 89.6196 18.968 88.9583 18.392C88.2969 17.7947 87.3049 17.496 85.9823 17.496C85.0649 17.496 84.1583 17.6453 83.2623 17.944C82.3876 18.2213 81.6409 18.6053 81.0223 19.096L79.2303 15.608C80.1689 14.9467 81.2889 14.4347 82.5903 14.072C83.9129 13.7093 85.2676 13.528 86.6543 13.528ZM86.2703 27.896C87.1236 27.896 87.8809 27.704 88.5423 27.32C89.2036 26.9147 89.6729 26.328 89.9503 25.56V23.8H86.5263C84.4783 23.8 83.4543 24.472 83.4543 25.816C83.4543 26.456 83.6996 26.968 84.1903 27.352C84.7023 27.7147 85.3956 27.896 86.2703 27.896ZM105.252 31.256C103.823 31.256 102.426 31.0853 101.06 30.744C99.6949 30.3813 98.6069 29.9333 97.7963 29.4L99.4603 25.816C100.228 26.3067 101.156 26.712 102.244 27.032C103.332 27.3307 104.399 27.48 105.444 27.48C107.556 27.48 108.612 26.9573 108.612 25.912C108.612 25.4213 108.324 25.0693 107.748 24.856C107.172 24.6427 106.287 24.4613 105.092 24.312C103.684 24.0987 102.522 23.8533 101.604 23.576C100.687 23.2987 99.8869 22.808 99.2043 22.104C98.5429 21.4 98.2122 20.3973 98.2122 19.096C98.2122 18.008 98.5216 17.048 99.1403 16.216C99.7803 15.3627 100.698 14.7013 101.892 14.232C103.108 13.7627 104.538 13.528 106.18 13.528C107.396 13.528 108.602 13.6667 109.796 13.944C111.012 14.2 112.015 14.5627 112.804 15.032L111.14 18.584C109.626 17.7307 107.972 17.304 106.18 17.304C105.114 17.304 104.314 17.4533 103.78 17.752C103.247 18.0507 102.98 18.4347 102.98 18.904C102.98 19.4373 103.268 19.8107 103.844 20.024C104.42 20.2373 105.338 20.44 106.596 20.632C108.004 20.8667 109.156 21.1227 110.052 21.4C110.948 21.656 111.727 22.136 112.388 22.84C113.05 23.544 113.38 24.5253 113.38 25.784C113.38 26.8507 113.06 27.8 112.42 28.632C111.78 29.464 110.842 30.1147 109.604 30.584C108.388 31.032 106.938 31.256 105.252 31.256ZM122.252 31.256C120.823 31.256 119.426 31.0853 118.06 30.744C116.695 30.3813 115.607 29.9333 114.796 29.4L116.46 25.816C117.228 26.3067 118.156 26.712 119.244 27.032C120.332 27.3307 121.399 27.48 122.444 27.48C124.556 27.48 125.612 26.9573 125.612 25.912C125.612 25.4213 125.324 25.0693 124.748 24.856C124.172 24.6427 123.287 24.4613 122.092 24.312C120.684 24.0987 119.522 23.8533 118.604 23.576C117.687 23.2987 116.887 22.808 116.204 22.104C115.543 21.4 115.212 20.3973 115.212 19.096C115.212 18.008 115.522 17.048 116.14 16.216C116.78 15.3627 117.698 14.7013 118.892 14.232C120.108 13.7627 121.538 13.528 123.18 13.528C124.396 13.528 125.602 13.6667 126.796 13.944C128.012 14.2 129.015 14.5627 129.804 15.032L128.14 18.584C126.626 17.7307 124.972 17.304 123.18 17.304C122.114 17.304 121.314 17.4533 120.78 17.752C120.247 18.0507 119.98 18.4347 119.98 18.904C119.98 19.4373 120.268 19.8107 120.844 20.024C121.42 20.2373 122.338 20.44 123.596 20.632C125.004 20.8667 126.156 21.1227 127.052 21.4C127.948 21.656 128.727 22.136 129.388 22.84C130.05 23.544 130.38 24.5253 130.38 25.784C130.38 26.8507 130.06 27.8 129.42 28.632C128.78 29.464 127.842 30.1147 126.604 30.584C125.388 31.032 123.938 31.256 122.252 31.256ZM150.324 22.456C150.324 22.52 150.292 22.968 150.228 23.8H137.204C137.439 24.8667 137.994 25.7093 138.868 26.328C139.743 26.9467 140.831 27.256 142.132 27.256C143.028 27.256 143.818 27.128 144.5 26.872C145.204 26.5947 145.855 26.168 146.452 25.592L149.108 28.472C147.487 30.328 145.119 31.256 142.004 31.256C140.063 31.256 138.346 30.8827 136.852 30.136C135.359 29.368 134.207 28.312 133.396 26.968C132.586 25.624 132.18 24.0987 132.18 22.392C132.18 20.7067 132.575 19.192 133.364 17.848C134.175 16.4827 135.274 15.4267 136.66 14.68C138.068 13.912 139.636 13.528 141.364 13.528C143.05 13.528 144.575 13.8907 145.94 14.616C147.306 15.3413 148.372 16.3867 149.14 17.752C149.93 19.096 150.324 20.664 150.324 22.456ZM141.396 17.304C140.266 17.304 139.316 17.624 138.548 18.264C137.78 18.904 137.311 19.7787 137.14 20.888H145.62C145.45 19.8 144.98 18.936 144.212 18.296C143.444 17.6347 142.506 17.304 141.396 17.304Z" fill="black" />
        <path d="M3 0L3 39" stroke="#00C1FE" stroke-width="6" />
      </svg>

      <div class="text-center mt-3">
        <h1>payement</h1>

      </div>
      <div class="mt-2">
        <div class="form-group mt-3 input-group-lg">
          <label for="email" class="form-label mt-2">Name</label>
          <input type="text" id="" class="form-control" name="name"  required autofocus  placeholder="Enter Your Name" autofocus />
        </div>
        <div class="form-group mt-2 input-group-lg">
          <label for="password" class="form-label">payment schedule</label>
          <input type="text" name="payment_schedule" class="form-control" placeholder="Enter Your Email" />
        </div>
        <div class="form-group mt-2 input-group-lg">
          <label for="password" class="form-label">bill number</label>
          <input type="text" class="form-control" name="bill_number"   required autofocus placeholder="Enter Your Phone" />
        </div>
        <div class="form-group mt-2 input-group-lg">
          <label for="password" class="form-label">amount paid</label>
          <input type="text" id="password" name="amount_paid" class="form-control"  required autofocus  placeholder="Enter amount paid" />
        </div>
        <div class="form-group mt-2 input-group-lg">
          <label for="password" class="form-label">balance amount</label>
          <input type="text" id="password" name="balance_amount" class="form-control" placeholder="Enter balance amount" />
        </div>
        <div class="form-group mt-2 input-group-lg">
          <label for="password" class="form-label"> date</label>
          <input type="date" id="password" name="date" class="form-control"   required autofocus placeholder="Enter date" />
        </div>

        <div class="form-group mt-3 input-group-lg btnA">
          <input type="submit" name="submit"  required autofocus class="btn btn-primary text-white form-control">
          <a href="payements.php" class="btn text-info">
            < Retour</a>
              </input>
        </div>
      </div>
    </form>
    <script src="./bootstrap/js/bootstrap.js"></script>
  </main>
</body>

</html>
<?php



include 'conexion.php';
//  check if the butoon is clicked
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $schedule = $_POST['payment_schedule'];
  $bill = $_POST['bill_number'];
  $amount = $_POST['amount_paid'];
  $balance = $_POST['balance_amount'];
  $date = $_POST['date'];
 
    $insert = "INSERT INTO payment_details (name,payment_schedule,bill_number,amount_paid,balance_amount,date) VALUES ('$name','$schedule','$bill','$amount','$balance','$date')";
    $result = $conn->query($insert);
    echo "
    <script>
    window.location.href = 'payements.php';
    </script>
  ";
    }
 

  // check if the inputs validation 



  // if(!emtpy(input))


  // if resalt 

  // go to the next step page ....

?>