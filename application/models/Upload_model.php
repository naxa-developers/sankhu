<?php
class Upload_model extends CI_Model {





public function get_emergency_con($cat){

$this->db->select('*');
$this->db->where('category',$cat);
$query=$this->db->get('emergency_contact');
return $query->result_array();


}
public function get_emergency_per($cat){

$this->db->select('*');
$this->db->where('category',$cat);
$query=$this->db->get('emergency_personnel');
return $query->result_array();


}

public function delete($id,$tbl){

$this->db->where('id',$id);
return $this->db->delete($tbl);

}





  public function do_upload($filename,$name)
  {

    $field_name                     ='back_pic';
    $config['upload_path']          = './assets/img/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 7000;
    $config['overwrite']             = TRUE;
    $config['file_name']           = $name;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload($field_name))
    {
      $error = array('error' => $this->upload->display_errors());
      return $error;


    }
    else
    {


      return 1;

    }
  }

  public function do_upload_icon($filename,$name)
  {

    $field_name                     ='back_pic';
    $config['upload_path']          = './uploads/icons/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['max_size']             = 7000;
    $config['overwrite']             = TRUE;
    $config['file_name']           = $name;

    $this->load->library('upload', $config);

    if ( ! $this->upload->do_upload($field_name))
    {
      $error = array('error' => $this->upload->display_errors());
      return $error;


    }
    else
    {


      return 1;

    }
  }


  public function update_data($data){

    $this->db->where('id',1);
    $q=$this->db->update('background',$data);
    if($q){
      return 1;
    }else{
      return 0;
    }

  }

public function insert_icon($data){

  $this->db->insert('icons',$data);
}

public function e_data($id){

$this->db->select('*');
$this->db->where('id',$id);
$query=$this->db->get('emergency_contact');
return $query->row_array();

}
public function e_data_personnel($id){

$this->db->select('*');
$this->db->where('id',$id);
$query=$this->db->get('emergency_personnel');
return $query->row_array();

}

public function update_emerg($id,$data,$tbl){

  $this->db->where('id',$id);
  return $this->db->update($tbl,$data);


}

public function insert_emrg($data){

return  $this->db->insert('emergency_contact',$data);
}
public function insert_emrg_personnel($data){

return  $this->db->insert('emergency_personnel',$data);
}

}
