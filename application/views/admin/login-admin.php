<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login Form</title>  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <link rel="stylesheet" href="<?=assets_url()?>css/stylee.css"> 
</head>

<body>
  <div class="login-wrap">
   <div class="login-html">
    <input type="radio" class="sign-in"><label class="tab">LOG IN STAFF</label>
    <div class="login-form">
      <?=form_open('administrator', array('class' => 'form-auth-small')) ?>
      <?=validation_errors('<div>', '</div>')?>
      <?=($this->session->flashdata('gagal') ? '<div><b>'.$this->session->flashdata('gagal').'</b></div>' : '') ?>
      <div class="group">
       <label for="user" class="label">Username</label>
       <input id="username" name="username" type="text" class="input">
     </div>
     <div class="group">
       <label for="pass" class="label">Password</label>
       <input id="password" name="password" type="password" class="input" data-type="password">
     </div>
     <div class="group">
       <input id="check" type="checkbox" class="check" >
       <label for="check"><span class="icon"></span> Remember me</label>
     </div>
     <div class="group">
       <input type="submit" class="button" value="LOG IN">
     </div>
     <div class="hr"></div>
     <div class="foot-lnk">
       <a href="#forgot">Forgot Password?</a>
     </div>
   </form>
 </div>
</div>
</div>
</body>

</html>
