<center>
 <h2>User Login</h2>
 <form action="userl" method="POST">
  @csrf
  <input type="text" name="user" placeholder="Enter username"><br><br>
  <input type="password" name="pass" placeholder="Enter password"><br><br>
  <button type="submit">Login</button>
 </form>
</center>