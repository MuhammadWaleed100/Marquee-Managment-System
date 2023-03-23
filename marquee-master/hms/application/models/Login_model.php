<?php
class Login_model extends CI_Model
{
 function can_login($email, $password,$type)
 {
   $connect = mysqli_connect('localhost','root','','arms'); 
    $query=mysqli_query($connect,"select * from codeigniter_register WHERE email='$email' AND type='$type' AND password='$password'");


  //$this->db->where('email', $email);
  //$query = $this->db->get('codeigniter_register');
  if(mysqli_fetch_array($query) > 0)
  {
   //foreach(mysqli_fetch_array($query) as $row)
   //{
    while ($row= mysqli_fetch_array($query))
          {
    if($row->is_email_verified == 'yes')
    {
     //$store_password = $this->encrypt->decode($row->password);
     if($password == $row['password'])
     {
      $this->session->set_userdata('id', $row['id']);
     }
     else
     {
      return 'Wrong Password';
     }
    }
    else
    {
     return 'First verified your email address';
    }
   }
  }
  else
  {
   return 'Wrong Email Address';
  }
 }
}

?>
