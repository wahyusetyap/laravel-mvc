<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
  </head>
  <body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="post">
    @csrf
      <p>First Name:</p>
      <input type="text" name="firstName">

      <p>Last Name:</p>
      <input type="text" name="lastName">

      <p>Gender:</p>
      <input type="radio" name="gender" value="male" id="male">
      <label for="male">Male</label><br>
      <input type="radio" name="gender" value="female" id="female">
      <label for="female">Female</label><br>
      <input type="radio" name="gender" value="other" id="other">
      <label for="other">Other</label><br>

      <p>Nationality:</p>
      <select name="nationality">
        <option value="indonesian">Indonesian</option>
        <option value="singaporean">Singaporean</option>
        <option value="malaysian">Malaysian</option>
        <option value="australian">Australian</option>
      </select>

      <p>Language Spoken:</p>
      <input type="checkbox" name="lang" value="bahasa" id="bahasa">
      <label for="bahasa">Bahasa Indonesia</label><br>
      <input type="checkbox" name="lang" value="english" id="english">
      <label for="english">English</label><br>
      <input type="checkbox" name="lang" value="other" id="other-lang">
      <label for="other-lang">Other</label><br>

      <p>Bio:</p>
      <textarea name="bio" rows="15" cols="40"></textarea><br>

      <input type="submit" name="" value="Sign Up">

    </form>
  </body>
</html>
