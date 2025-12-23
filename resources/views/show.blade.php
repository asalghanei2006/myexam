<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div style="margin: 7%;">
        <h2 align="center">لیست نمایش </h2>
<table class="table table-bordered table-hover">
     <tr class="table-secondary">
    <thead >
        <th>نام گیرنده</th>
        <th>قیمت محصول</th>
        <th>آدرس</th>
    </thead>
    </tr>
        <tbody>
    @foreach ($users as $user)
        <tr style="font-size: 20px;">
        <td>{{$user->name}}</td>
        <td>{{$user->price}}</td>
        <td>{{$user->adress}}</td>
       </tr>
      @endforeach

      </tbody>
      </table>
    </div>
</body>
</html>
