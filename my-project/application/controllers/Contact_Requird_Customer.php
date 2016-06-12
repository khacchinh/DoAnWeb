<?php 
	/**
	* 
	*/
	class Contact_Requird_Customer extends MY_Controller
	{

		function index(){
			$this->load->model('Requird_Customer_Model');
			$this->data['temp'] = 'admin/contact/requird';
			$this->data['total'] = $this->Requird_Customer_Model->get_total();
			$this->data['list'] = $this->Requird_Customer_Model->get_list();
			$this->load->view('admin/main', $this->data);
		}

		
		function addRequird(){
			$this->load->model('Requird_Customer_Model');
			if ($this->input->post()){
				$name = $this->input->post('name');
				$email = $this->input->post('email');
				$subject = $this->input->post('subject');
				$content = $this->input->post('mess');

				$data = array('name_customer' => $name,
					'email_customer' => $email,
					'subject' => $subject,
					'content' => $content,
					'status' => 0,
					'created_at' => now());

				if ($this->Requird_Customer_Model->insert($data)){
					$this->session->set_flashdata('message', 'Lưu thông tin thành công');
					}
				else {
					$this->session->set_flashdata('message', 'Lưu thông tin thất bại');
				}
                redirect(base_url('contact'));
			}
		}

		function progress(){
			$this->load->model('Requird_Customer_Model');
			$id = $this->uri->rsegment('3');
		    $id = intval($id);
		        
		    $info = $this->Requird_Customer_Model->get_info($id);
		    if(!$info)
		    {
		        $this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
		        redirect(base_url('Contact_Requird_Customer'));
		    }

		    $data = array('status' => 1);

		    if ($this->Requird_Customer_Model->update($id, $data)){
				$this->session->set_flashdata('message', 'Sửa dữ liệu thành công');
				}
			else {
				$this->session->set_flashdata('message', 'Xóa dữ liệu thất bại');
			}
			
            redirect(base_url('Contact_Requird_Customer'));

		}

		function delete(){
			$this->load->model('Requird_Customer_Model');

			$id = $this->uri->rsegment('3');
		    $id = intval($id);
		        
		    $info = $this->Requird_Customer_Model->get_info($id);
		    if(!$info)
		    {
		        $this->session->set_flashdata('message', 'Không tồn tại quản trị viên');
		        redirect(base_url('Contact_Requird_Customer'));
		    }
		  
		    $this->Requird_Customer_Model->delete($id);
		        
		    $this->session->set_flashdata('message', 'Xóa dữ liệu thành công');
		    redirect(base_url('Contact_Requird_Customer'));
		}
	}
 ?>