<!DOCTYPE html>
<html>
<head>
    <title>Task List</title>
</head>
<body>

<h1>All Tasks</h1>

<a href="/">Home</a> |
<a href="/tasks">Task List</a> |
<a href="/profile">Profile</a> |
<a href="/about">About</a>

<hr>

<table border="1" cellpadding="10">
    <tr>
        <th>Title</th>
        <th>Status</th>
        <th>Task Date</th>
    </tr>

    @foreach($tasks as $task)
    <tr>
        <td>{{ $task->title }}</td>
        <td>{{ $task->status }}</td>
        <td>{{ $task->task_date }}</td>
    </tr>
    @endforeach

</table>

</body>
</html>