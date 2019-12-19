<html>
<head></head>    
<body>
<form action="{{url('faqs/create')}}" method="post">
    @csrf
<input type="text" name="question" required>
<textarea rows="4" cols="50" name="reponse" required></textarea>
<button type="submit">done</button>
</form>
</body>
<html>