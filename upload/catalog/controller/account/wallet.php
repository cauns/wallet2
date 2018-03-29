<?php
class ControllerAccountWallet extends Controller {
	public function index() {
		if (!$this->customer->isLogged()) {
			$this->session->data['redirect'] = $this->url->link('wallet/credit', '', true);

			$this->response->redirect($this->url->link('account/login', '', true));
		}

		$this->load->language('account/wallet');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('account/account', '', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_wallet'),
			'href' => $this->url->link('wallet/credit', '', true)
		);

		$this->load->model('wallet/credit');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['column_date_added'] = $this->language->get('column_date_added');
		$data['column_description'] = $this->language->get('column_description');
		$data['column_amount'] = sprintf($this->language->get('column_amount'), $this->config->get('config_currency'));

		$data['text_total'] = $this->language->get('text_total');
		$data['text_empty'] = $this->language->get('text_empty');

		$data['button_continue'] = $this->language->get('button_continue');

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$data['credits'] = array();

		$filter_data = array(
			'sort'  => 'date',
			'order' => 'DESC',
			'start' => ($page - 1) * 10,
			'limit' => 10
		);

		$count = $this->model_wallet_credit->getTotalCredits();

		$results = $this->model_wallet_credit->getCredits($filter_data);

		foreach ($results as $result) {
			$data['credits'][] = array(
				'amount'      => $this->currency->format($result['amount'], $this->config->get('config_currency')),
				'description' => $result['description'],
				'date'  => date($this->language->get('date_format_short'), strtotime($result['date']))
			);
		}
		$pagination = new Pagination();
		$pagination->total = $count;
		$pagination->page = $page;
		$pagination->limit = 10;
		$pagination->url = $this->url->link('account/wallet', 'page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($count) ? (($page - 1) * 10) + 1 : 0, ((($page - 1) * 10) > ($count - 10)) ? $count : ((($page - 1) * 10) + 10), $count, ceil($count / 10));

		$balance = $this->model_wallet_credit->getTotalBalance(); 
		$data['total'] = $this->currency->format($balance, $this->session->data['currency']);

		$data['continue'] = $this->url->link('account/account', '', true);

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('account/wallet', $data));
	}
}