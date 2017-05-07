<html>
   <head>
      <title>View User Data</title>
   </head>

   <body>

      <table border = "1">
         <tr>
            <td>ID</td>
            <td>Login</td>
            <td>Name</td>
            <td>Surname</td>
            <td>created at</td>
            <td>updated at</td>
            <td>deleted at</td>
            <td></td>
         </tr>
         @foreach ($user as $user)
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->login }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->surname }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
        
         </tr>
         @endforeach
      </table>

   </body>
</html>
