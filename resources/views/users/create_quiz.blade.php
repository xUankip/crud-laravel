<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


  <div class="card-body">
    <div class="form-group">
      <label for="inputName">Tên Game</label>
      <input type="text" id="inputName" class="form-control">
    </div>
    <div class="form-group">
      <label for="inputClientCompany">Tên Chủ Đề</label>
      <input type="text" id="inputClientCompany" class="form-control">
    </div>


    <div class="form-group">
      <label for="inputClientCompany">Danh Mục</label>
      <input type="text" id="inputClientCompany" class="form-control">
    </div>


    <div class="form-group">
      <label for="inputStatus">Độ Khó</label>
      <select id="inputStatus" class="form-control custom-select">
        <option selected="" disabled="">Select one</option>
        <option>Easy</option>
        <option>Medium</option>
        <option>Hard</option>
        <option>Very Hard</option>
      </select>
    </div>
    <div class="col-3 mb-3">
      <input type="number" class="form-control" placeholder="Số Lượng Câu Hỏi" min="1" step="1" oninput="this.value = this.value.replace(/[^0-9]/g, '')">
    </div>
    <div class="pb-3">
      <a href="{{route('users.home')}}" class="btn btn-secondary">Cancel</a>
        <a href="{{route('questions.question-list')}}" class="btn btn-primary">Generate</a>
    </div>
  </div>
    </div>
</body>

<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Quiz AI</b> 1.0
  </div>
  <strong>Copyright © 2077 <a href="#">QUIZAI</a>.</strong> All rights reserved.
</footer>


</html>
