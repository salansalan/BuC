<html>

   <head>
      <title>View Student Records</title>
   </head>

   <body>
      <table border = 1>
         <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Created at</td>
            <td>Updated at</td>
         </tr>
         @foreach ($users as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->created_at}}</td>
            <td>{{ $user->updated_at}}</td>
         </tr>
         @endforeach
      </table>

   </body>
</html>
