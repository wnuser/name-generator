<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

   public function reset()
   {
   	$this->load->view('default/resetpass');
   }
    public function login()
    {
      $this->load->view('default/login');
    }

 public function Cheakauth()
    {
      $post = $this->input->post();
      // print_r($post);
      // exit();
      $user_name = $post['user-name'];
      $password = $post['password'];
      $hash_password = password_hash($password,PASSWORD_DEFAULT);
      $userData = array(
        'user_name' =>$user_name ,
        'password'=>$password 
      );
      $this->load->model('AdminModel');
      $id =  $this->AdminModel->isValidate($userData);
      if($id)
      {
          $this->session->set_userdata('id',$id);
          return redirect('admin');
      }else{
        $this->session->set_flashdata('Invalid','Invalid Credentials');
            return redirect('Auth/login');

              
      }

    }



    
   public function resetpassword()
   {
   	  $post = $this->input->post();
   	  $oldpassword = $post['password'];
      $newpassword = $post['npassword'];
      $confirm_password = $post['confirm-password'];
      if($newpassword != $confirm_password){
      	 $this->session->set_flashdata('confirm_not_match','Confirm Password Not Matched');
      	 return redirect('Auth/reset');
      }else{
      	$this->load->model('GetModel');
      	$details = $this->GetModel->get_all_admin();
      	$previous_password = $details['password'];
      	if(password_verify($oldpassword, $previous_password))
      	{
           $user_id =  $this->session->userdata('id');
           $hash_password = password_hash($confirm_password, PASSWORD_DEFAULT);

           $this->load->model('UpdateModel');
           $sql =  $this->UpdateModel->Update_password($user_id,$hash_password);
           if($sql == true){
           	 return redirect('admin/logout');
           }else{
           	 return redirect('auth/reset');
           }
      	}else{
            $this->session->set_flashdata('old_not_match','Old Password Not Matched');
      	    return redirect('Auth/reset');
      	}
      }

   }
}







?>