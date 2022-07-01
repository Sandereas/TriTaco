<?php include('../config/header.php'); ?>


<div class="container">
  <form action="action_page.php">

    <label for="fname">Full name</label>
    <input type="text" id="fullname" name="fullname" placeholder="Your full name..">

    <label for="lname">User Name</label>
    <input type="text" id="username" name="username" placeholder="Your user name..">

    <label for="lname">Email</label>
    <input type="email" id="email" name="Email" placeholder="Your email.">

    <label for="Type">Type mail</label>
    <select id="Type" name="Type">
      <option value="Vraag">Vraag</option>
      <option value="Klacht">Klacht</option>
      <option value="Opmerking">Opmerking</option>
      <option value="Overig">Overig</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>