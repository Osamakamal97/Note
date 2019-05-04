<html>
<head></head>
<body>
@if(session('success'))
        {{session('success')}}
@endif
<form method="POST" action="{{route('store')}}">
    @csrf
    <label>Note title:</label>
    <input type="text" name="noteTitle">
    <br>
    <label>Note Content:</label>
    <input type="text" name="noteContent">
    <br>
    <input type="submit" name="submit">
</form>
<form method="get" action="{{route('listNote')}}">
    <input type="submit" name="listSubmit" value="Show notes list">
</form>

</body>
</html>