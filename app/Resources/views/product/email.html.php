
<?php
/**
 * @var \Pimcore\Templating\PhpEngine $this
 * @var \Pimcore\Templating\PhpEngine $view
 * @var \Pimcore\Templating\GlobalVariables $app
 */

$this->extend('layout.html.php');
?>
<html>
<head>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #471f16;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #471f16;
}

.container {
  margin-top: 5px;
  
  border-radius: 5px;
  background-color: lightblue;
  padding: 20px;
}
</style>

</head>


<body>


<div class="container">
<i class='fas fa-bread-slice'></i>
<h3> Give us your valuable feedback..........</h3>
  <form >
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your first name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="india">India</option>
      <option value="uk">UK</option>
      <option value="usa">USA</option>
       <option value="australia">Australia</option>
        <option value="canada">Canada</option>
    </select>

    <label for="feedback">Feedback</label>
    <textarea id="feedback" name="feedback" placeholder="Write something.." style="height:200px"></textarea>

    <button onclick="location.href = 'http://project.local/thankyou';">Submit</button>
  </form>
</div>
</body></html>
