<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

   Class Login_model extends CI_Model { 
	
   
      public function user_login_data_check(){

        $username= $this->input->post('User_name');
        $password= md5($this->input->post('Userpassword'));

         $attr= array(

            'Name'    =>  $username,
            'Password'=>  $password

            );
         $result= $this->db->get_where('student', $attr);
         if( $result->num_rows()==1){
            
            $attr=array(
               'current_user_id'   => $result->row(0)->id,
               'current_user_name' => $username
               );
            $this->session->set_userdata($attr);

            return true;
         }
         else{

            return false;
         }
      }

      public function is_user_login(){

         return $this->session->userdata('current_user_id')!=false;
      }
   			
   }

