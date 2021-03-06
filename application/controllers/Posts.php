<?php
	class Posts extends CI_Controller{
		public function index(){		
			$data['title'] = 'Post';

			$data['posts'] = $this->post_model->get_posts();

			$this->load->view('templates/header');
			$this->load->view('posts/index', $data);
			$this->load->view('templates/footer');
		}
		public function create(){
			$data['title'] = 'Create';

			$this->form_validation->set_rules('title', 'Title', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('posts/create', $data);
				$this->load->view('templates/footer');
			} else {
				$this->post_model->create_post();

				// Set message
				$this->session->set_flashdata('post_created', '登録が完了しました');

				redirect('posts');
			}
		}

		public function view($id = NULL){
			$data['post'] = $this->post_model->get_posts($id);

			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = $data['post']['title'];

			$this->load->view('templates/header');
			$this->load->view('posts/view', $data);
			$this->load->view('templates/footer');
		}

		public function delete($id){

			$data['post'] = $this->post_model->get_posts($id);
			$this->post_model->delete_post($id);

			// Set message
			$this->session->set_flashdata('post_deleted', '削除が完了しました');

			redirect('posts');
		}

		public function edit($id){

			$data['post'] = $this->post_model->get_posts($id);

			if(empty($data['post'])){
				show_404();
			}

			$data['title'] = 'Edit';

			$this->load->view('templates/header');
			$this->load->view('posts/edit', $data);
			$this->load->view('templates/footer');
		}

		public function update(){
			$this->post_model->update_post();
			$this->session->set_flashdata('post_updated', '更新が完了しました');
			redirect('posts');
		}

	}