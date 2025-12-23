<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
       <h1 align="center" class="bg-info">فرم تکمیل اطلاعات</h1>
       <div class="container" align="center">
        <div class="row">
        <div class="col-sm-4" >
            <img src="photo.webp" alt="login" width="200px">
       <form action="{{ route('login.store') }}" method="POST" class="form-group">
       @csrf
       
       <label for="name">
        نام گیرنده
        <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control">
       </label><br>
       <label for="price">
        قیمت محصول
    <input type="number" name="price" id="price" value="{{old('price')}}" class="form-control">
       </label><br>

       <label for="adress">
        آدرس
        <input type="text" name="adress" id="adress" value="{{old('adress')}}" class="form-control">
       </label><br>
       <button type="submit" name="action" value="save" class="btn">ذخیره اطلاعات</button>
<br>
<br>
       <button type="submit" name="action" value="print" class="btn btn-success" style="size:50px;">چاپ</button>
       </form>
       </div>
       </div>
    </div>
</body>
