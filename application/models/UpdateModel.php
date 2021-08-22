<?php
class UpdateModel extends CI_Model
{
  public function update_contact_details($post)
  {
    $q  = $this->db->where('id',$post['id'])
                  ->set('adventure',$post['adventure'])
                  ->set('font',$post['font'])
                  ->set('sales',$post['sales'])
                  ->update('contact_details');
  }
  public function update_social_links($post)
  {
    $q = $this->db->where('id',$post['id'])
                  ->set('facebook',$post['facebook'])
                  ->set('instagram',$post['instagram'])
                  ->set('twitter',$post['twitter'])
                  ->set('linkden',$post['linkden'])
                  ->set('youtube',$post['youtube'])
                  ->set('whatsapp',$post['whatsapp'])
                  ->set('header_phone',$post['header_phone'])
                  ->set('footer_email',$post['footer_email'])
                  ->set('footer_mobile',$post['footer_mobile'])
                  ->update('social_links');
  }
  public function update_cabs_packages($post)
  {
    $q = $this->db->where('id',$post['id'])
                  ->set('destinations',$post['destinations'])
                  ->set('price',$post['price'])
                  ->update('cabspackage');
  }
  public function update_about_content($post)
  {
    $q = $this->db->where('id',$post['id'])
                  ->set('abouttext',$post['abouttext'])
                  ->set('home_about_content',$post['home_about_content'])
                  ->update('aboutcontent');
  }
  public function update_terrif($post)
  {
    return $q = $this->db->where('id',$post['id'])
                         ->set('room_type',$post['room_type'])
                         ->set('ep',$post['ep'])
                         ->set('cp',$post['cp'])
                         ->set('map',$post['map'])
                         ->update('terrif');
                         
  }
 public function update_tems_conditions($post)
 {
  return $q = $this->db->where('id',$post['id'])
                       ->set('content',$post['content'])
                       ->update('termsandcondition');
 }





 
 public function update_query_status($id)
 {
    return $q = $this->db->where('id',$id)
                         ->set('respond_status',1)
                         ->update('query_form');
 }
 public function update_corporate_events($post)
 {
   return $q = $this->db->where('id',$post['id'])
                     ->set('title',$post['title'])
                    ->set('description',$post['description'])
                    ->update('corporateevent');
 }
 public function update_package_details($post)
 {
  return $q = $this->db->where('id',$post['id'])
                      ->set('title',$post['title'])
                      ->set('cat_id',$post['cat_id'])
                      ->set('price',$post['price'])
                      ->set('duration',$post['duration'])
                      ->set('itinerary',$post['itinerary'])
                      ->set('Inclusion',$post['Inclusion'])
                      ->set('exclusion',$post['exclusion'])
                      ->update('package');
 }
 public function update_things_content($post)
 {
  return $q = $this->db->where('id',$post['id'])
                     ->set('title',$post['title'])
                     ->set('description',$post['description'])
                     ->update('things');
 }
 
 public function update_nightlife_content($post)
 {
  return $q = $this->db->where('id',$post['id'])
                     ->set('title',$post['title'])
                     ->set('description',$post['description'])
                     ->update('nightlife');
 }
 
 public function update_gallery_title($post)
 {
  return $q = $this->db->where('id',$post['id'])
                        ->set('title',$post['title'])
                        ->update('gallery');
 }
 public function update_model($id)
 {
  return $q = $this->db->where('id',$id)
                      ->set('respond_status',1)
                      ->update('book_modal');
 }
 public function update_response($id)
 {
  return $q = $this->db->where('id',$id)
                       ->set('respond_status',1)
                       ->update('contact_query');
 }
 public function update_cabs($post)
 {
   return $q = $this->db->where('id',$post['id'])
                        ->set('location',$post['location'])
                        ->set('Destination',$post['Destination'])
                        ->set('Price',$post['Price'])
                        ->update('cabs');
 }
 public function update_places_content($post)
 {
  return $q = $this->db->where('id',$post['id'])
                      ->set('title',$post['title'])
                      ->set('description',$post['description'])
                      ->set('tmode',$post['tmode'])
                      ->update('places');
 }
 public function update_category($post)
 {
 	return $q  = $this->db->where('id',$post['id'])
 	                     ->set('cat_name',$post['cat_name'])
 	                     ->update('package_category');
 }
 public function update_offers($post)
 {
 	return $q = $this->db->where('id',$post['id'])
 	                     ->set('title',$post['title'])
 	                     ->set('link',$post['link'])
 	                     ->update('offers');
 }
 public function update_room_details($post)
 {
     return $q = $this->db->where('id',$post['id'])
                          ->set('title',$post['title'])
                          ->set('size',$post['size'])
                          ->set('view',$post['view'])
                          ->set('beds',$post['beds'])
                          ->set('bathroom',$post['bathroom'])
                          ->set('amenities',$post['amenities'])
                          ->set('description',$post['description'])
                          ->update('roomslider');
 }
 
 public function Update_password($user_id,$hash_password)
 {
 	$q = $this->db->set('password',$hash_password)
 	               ->where('id',$user_id)
 	         ->update('admin');
 	        return   $q;
  }

  
}


?>