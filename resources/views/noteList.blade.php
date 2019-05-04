<html>
<body>
<table border="1">
    <thead>
    <tr>
        <th>#</th>
        <th>Title</th>
        <th>Content</th>
    </tr>
    </thead>
    <tbody>
    @foreach($notes as $note)
        <tr>
            <td style="color: yellow">{{ $note->id }}</td>
            <td style="color: yellow">{{ $note->note_title }}</td>
            <td style="color: yellow">{{$note->note_content}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
