<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <style>
    body {
      background-color: #f8f9fa;
    }
    .form-card {
      max-width: 500px;
      margin: 5% auto;
      padding: 30px;
      background-color: #fff;
      border-radius: 15px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    .form-title {
      text-align: center;
      margin-bottom: 25px;
    }
  </style>
</head>
<body>
<div class="form-card">
  <h4 class="form-title">Login Form</h4>
  <form action="{{ route('student.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Name</label>
      <input type="name" class="form-control" id="name" name="name" placeholder="Enter the name">
      <!-- <div id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</div> -->
    </div>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
      <div id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Password">
    </div>
    <!-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> -->
    <button type="submit" class="btn btn-primary w-100">Submit</button>
  </form>
</div>
</body>
</html>