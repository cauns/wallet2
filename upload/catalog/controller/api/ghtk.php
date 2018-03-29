<?php
class ControllerApiGhtk extends Controller {
	public function index() {echo 1;die;
		$json =array();
		if (isset($this->request->post['label_id'])||isset($this->request->post['partner_id'])) {
	      $json['error']['warning'] = $this->language->get('error');
	    } else {
	       $json['success'] =true;
	       $json['data'] =array('label_id'=>$this->request->post['label_id'] , 'partner_id'=>$this->request->post['partner_id'] );
	    }
	    if (isset($this->request->server['HTTP_ORIGIN'])) {
	      $this->response->addHeader('Access-Control-Allow-Origin: ' . $this->request->server['HTTP_ORIGIN']);
	      $this->response->addHeader('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	      $this->response->addHeader('Access-Control-Max-Age: 1000');
	      $this->response->addHeader('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
	    }
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}