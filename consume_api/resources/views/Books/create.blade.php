<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('book.store')}}" method="post">
    @csrf
    <label for="">Name</label>
    <input type="text" name="name">
    <br>
    <label for="">Price</label>
    <input type="number" name="price">
    <br>
    <label for="">Description</label>
    <textarea name="desc" id="" cols="30" rows="10"></textarea>
    <br>
    <label for="">Status</label>
    <select name="status" id="">
        <option value="lama">Lama</option>
        <option value="baru">Baru</option>
    </select>
    <br>
    <label for="">Penerbit</label>
    <select name="penerbit_id" id="">
       @foreach($penerbit as $a)
        <option value="{{$a->id}}">{{$a->name}}</option>
       @endforeach
    </select>
    <button type="submit">
        Submit
    </button>
    </form>
</body>
</html>
