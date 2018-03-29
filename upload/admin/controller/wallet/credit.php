<?php
class ControllerWalletCredit extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('wallet/credit');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('wallet/credit');

		$this->getList();
	}

	public function add() {
		$this->load->language('wallet/credit');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('wallet/credit');
		$json =array();
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$data = $this->request->post;
			$data['current_total'] =  1111; 
			$data['type'] =  1; 
			$this->model_wallet_credit->addCredit($data);
			$json['success'] =1;

			//		send mail
			//$this->sendMail($data );
			
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
		}
		
		
	}
	private function sendMail($postData ){
		$this->load->model('customer/customer');
		$data = array();
		$data['amount'] = $this->currency->format($postData['amount'], $this->config->get('config_currency'));

		$filter = array('filter_customer_id'=>$postData['customer_id'] );
		$data['totalBalance'] = $this->model_wallet_credit->getTotalBalance($filter);  
		$data['totalBalance'] = $this->currency->format($data['totalBalance'] , $this->config->get('config_currency'));

		$customer = $this->model_customer_customer->getCustomer($postData['customer_id'] );
		$mail = new Mail();
		$mail->protocol = $this->config->get('config_mail_protocol');
		$mail->parameter = $this->config->get('config_mail_parameter');
		$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
		$mail->smtp_username = $this->config->get('config_mail_smtp_username');
		$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
		$mail->smtp_port = $this->config->get('config_mail_smtp_port');
		$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');

		$mail->setTo($customer['email']);
		$mail->setFrom($this->config->get('config_email'));
		//$mail->setSender(html_entity_decode("", ENT_QUOTES, 'UTF-8'));
		$mail->setSubject(html_entity_decode($subject, ENT_QUOTES, 'UTF-8'));
		$mail->setHtml($this->load->view('wallet/mail', $data));
		$mail->setText($text);
		$mail->send();
		return 1;
	}
		protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'wallet/credit')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if ($this->error && !isset($this->error['warning'])) {
			$this->error['warning'] = $this->language->get('error_warning');
		}
		return 1;
		return !$this->error;
	}


	protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('wallet/credit', 'user_token=' . $this->session->data['user_token'] . $url, true)
		);

		$data['add'] = $this->url->link('wallet/credit/add', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['delete'] = $this->url->link('wallet/credit/delete', 'user_token=' . $this->session->data['user_token'] . $url, true);
		$data['repair'] = $this->url->link('wallet/credit/repair', 'user_token=' . $this->session->data['user_token'] . $url, true);

		$data['credits'] = array();

		$page_range = $this->config->get('config_limit_admin');
		$page_range  =10;
		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $page_range,  //$page_range
			'limit' => $page_range //$page_range
		);
		if (isset($this->request->get['filter_customer_id'])) {
			$url .= '&filter_customer_id=' . $this->request->get['filter_customer_id'];
			$filter_data['filter_customer_id'] = $this->request->get['filter_customer_id'];
		}
		//var_dump($filter_data);
		$count  = $this->model_wallet_credit->getTotalCredits($filter_data);

		$results = $this->model_wallet_credit->getCredits($filter_data);
		/*echo "<pre>";
		print_r($results);
		echo "</pre>";*/

		foreach ($results as $result) {
			$data['credits'][] = array(
				'credit_id' => $result['credit_id'],
				'amount'        => $result['amount'],
				'description'        => $result['description'],
				'email'        => $result['email'],
				'customer_name'        => $result['firstname'] . ' ' .$result['lastname']  ,
				'date'  => $result['date'],
				'type'  => $result['type'],
				'current_total'  => $result['current_total'],

				'edit'        => $this->url->link('wallet/credit/edit', 'user_token=' . $this->session->data['user_token'] . '&credit_id=' . $result['credit_id'] . $url, true),
				'delete'      => $this->url->link('wallet/credit/delete', 'user_token=' . $this->session->data['user_token'] . '&credit_id=' . $result['credit_id'] . $url, true)
			);
		}

		$data['heading_title'] = $this->language->get('heading_title');
		$data['text_add'] = $this->language->get('text_add'); 

		$data['text_list'] = $this->language->get('text_list'); 
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');
	/*	$data['text_edit'] = $this->language->get('text_edit');
		$data['text_delete'] = $this->language->get('text_delete');*/
		$data['text_filter'] = $this->language->get('text_filter');
		$data['text_close'] = $this->language->get('text_close');
		$data['column_name'] = $this->language->get('column_name'); 
		$data['column_email'] = $this->language->get('column_email');
		$data['column_status'] = $this->language->get('column_status');
		$data['column_date_added'] = $this->language->get('column_date_added'); 
		$data['column_action'] = $this->language->get('column_action');
		$data['column_amount'] = $this->language->get('column_amount');
		$data['column_description'] = $this->language->get('column_description');

		$data['column_name'] = $this->language->get('column_name');
		$data['column_sort_order'] = $this->language->get('column_sort_order');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_add'] = $this->language->get('button_add');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');
		$data['button_rebuild'] = $this->language->get('button_rebuild');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('wallet/credit', 'user_token=' . $this->session->data['user_token'] . '&sort=name' . $url, true);
		$data['sort_sort_order'] = $this->url->link('wallet/credit', 'user_token=' . $this->session->data['user_token'] . '&sort=sort_order' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $count;
		$pagination->page = $page;
		$pagination->limit = $page_range;
		$pagination->url = $this->url->link('wallet/credit', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($count) ? (($page - 1) * $page_range) + 1 : 0, ((($page - 1) * $page_range) > ($count - $page_range)) ? $count : ((($page - 1) * $page_range) + $page_range), $count, ceil($count / $page_range));

		$data['sort'] = $sort;
		$data['order'] = $order;
		
		$data['user_token'] = $this->session->data['user_token'];

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('wallet/credit_list', $data));
	}

	public function edit() {
	  $this->load->language('wallet/credit');

	  $this->document->setTitle($this->language->get('heading_title'));
	

	  $this->load->model('wallet/credit');
	  	$data = $this->request->post;
	  if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
	    $this->model_wallet_credit->editCredit($data['credit_id'], $this->request->post);
			$json['success'] =1;
			$this->response->addHeader('Content-Type: application/json');
			$this->response->setOutput(json_encode($json));
		  }else{
		  		$this->getForm();
		  }
	}

	public function delete() {
	  $this->load->language('wallet/credit');
	  $this->load->model('wallet/credit');

			if (($this->request->server['REQUEST_METHOD'] != 'POST')) {
				$credit_id =$this->request->get['credit_id'] ;
		    	$this->model_wallet_credit->deleteCredit($credit_id );
				$json['success'] =1;
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
			  }
		}

		public function getForm() {
					$this->load->model('wallet/credit');
		  //load language
		$this->load->language('wallet/credit');

	  $data['text_close'] = $this->language->get('text_close');
		$data['column_amount'] = $this->language->get('column_amount');
		$data['column_description'] = $this->language->get('column_description');
		$data['text_edit'] = $this->language->get('text_edit');
					
		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['user_token'] = $this->session->data['user_token'];

		if (!isset($this->request->get['credit_id'])) {
			$data['action'] = $this->url->link('wallet/credit/add', 'user_token=' . $this->session->data['user_token'] , true);
		} else {
			$data['action'] = $this->url->link('wallet/credit/edit', 'user_token=' . $this->session->data['user_token'] . '&credit_id=' . $this->request->get['credit_id'], true);
		}

		if (isset($this->request->get['credit_id'])) {
			$data['credit_id'] = $this->request->get['credit_id'];
		} else {
			$data['credit_id'] = 0;
		}

		if (isset($this->error['email'])) {
			$data['error_email'] = $this->error['email'];
		} else {
			$data['error_email'] = '';
		}

		
		
	//	$data['cancel'] = $this->url->link('customer/customer', 'user_token=' . $this->session->data['user_token'] , true);

		$data['customer_payment'] =array();
		if (isset($this->request->get['credit_id']) && ($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$data['customer_payment'] = $this->model_wallet_credit->getCredit($this->request->get['credit_id']);
		}
	
		/*if (isset($this->request->post['telephone'])) {
			$data['telephone'] = $this->request->post['telephone'];
		} elseif (!empty($customer_info)) {
			$data['telephone'] = $customer_info['telephone'];
		} else {
			$data['telephone'] = '';
		}
*/
		$this->response->setOutput($this->load->view('wallet/credit_form', $data));
	}
}	