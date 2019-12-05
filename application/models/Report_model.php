<?php
class Report_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }
    public function info($id=""){
      $this->db->select('details');
      $this->db->where('id',$id);
      $query = $this->db->get('publicInfo');
      return $query->result_array();
    }
    public function updates($title=""){
        $this->db->select('event_title,short_details,start_date,link,event_image');
        if($title!=""){
          $this->db->select('event_title,event_details,start_date,link,event_image,event_image_2,end_date,facebook,instagram,youtube,twitter,Fee,event_venue');
          $this->db->where('link',$title);
        }
        $query = $this->db->get('updates');
        return $query->result_array();
    }
    public function blogs($title=""){
        $this->db->select('b_title,b_author,link,b_date,b_s_details,b_img_1,b_views,b_cat');
        if($title!=""){
          $this->db->select('b_title,b_author,link,b_date,b_details,b_img_1,b_views,b_cat,b_instagram,b_youtube,b_twitter,b_facebook,b_img_2
,b_img_3');
          $this->db->where('link',$title);
        }
        $query = $this->db->get('blog');
        return $query->result_array();
    }
    public function subscribe($emai){
        $this->db->insert('subscribtions', $data);
    }
    public function login(){
     $user_email = $this->security->xss_clean($this->input->post('user_email'));
     $password = $this->security->xss_clean($this->input->post('password'));

     $this->db->where('user_email',$user_email);

     $query=$this->db->get('login_users');
     $data = $query->row_array();
     $status = $data['active_status'];
     // echo $status;exit;
     if($status == 1){
         $num_rows=$query->num_rows();
         if($num_rows == 1)
         {
               $row = $query->row();
               if (password_verify($password, $row->user_password)) {
                   $data = array(
                       'lid' => $row->lid,
                       'user_email' => $row->user_email,
                       'validated' => true
                   );
                   $this->session->set_userdata($data);
                   return true;
               }
               else {
                   return false;
               }

               return true;

           }
           return false;
      }
      else {
        return 'fail';
      }
   }
   public function form($data){
     $this->db->insert('feedHome', $data);
   }
   public function userRegister($data){
     $this->db->insert('login_users', $data);
   }
   public function getUser($phone){
    $query = $this->db->get_where('login_users',array('phone'=>$phone));
 		return $query->row_array();
   }
   public function userActivateAccount($data,$phone){
     $this->db->where('login_users.phone', $phone);
     return $this->db->update('login_users', $data);
   }
   public function userSession($email=""){
     $this->db->where('user_email',$email);
     $query = $this->db->get('login_users');
     return $query->result_array();
   }
   public function userHome($showStatus){
       $this->db->where('showStatus',$showStatus);
       $query = $this->db->get('feedHome');
       return $query->result_array();
   }
   public function userUploads($user_email){
     $this->db->where('user_email',$user_email);
     $query = $this->db->get('feedHome');
     return $query->result_array();
   }
   public function latestNews(){
     $query = $this->db->get('latestNews');
     return $query->result_array();
   }
   public function postVerify($code){
      $query = $this->db->get_where('feedHome',array('code'=>$code));
      return $query->row_array();
   }
   public function updatePostStatus($data,$code){
     $this->db->where('feedHome.code', $code);
     return $this->db->update('feedHome', $data);
   }

}
