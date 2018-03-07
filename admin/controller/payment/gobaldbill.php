<?php 
class ControllerPaymentGobaldbill extends Controller {
	private $error = array(); 

	public function index() {
		$this->load->language('payment/gobaldbill');
  

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('gobaldbill', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/payment', 'token=' . $this->session->data['token'], 'SSL'));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['entry_order_status'] = $this->language->get('entry_order_status');	
		$data['entry_order_fail_status'] = $this->language->get('entry_order_fail_status');	
		$data['entry_status'] = $this->language->get('entry_status');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		
		$data['entry_key'] = $this->language->get('entry_key');
		$data['entry_merchantno'] = $this->language->get('entry_merchantno');
		$data['entry_referer'] = $this->language->get('entry_referer');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_gateway'] = $this->language->get('entry_gateway');
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_payment'),
			'href' => $this->url->link('extension/payment', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('payment/gobaldbill', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['action'] = $this->url->link('payment/gobaldbill', 'token=' . $this->session->data['token'], 'SSL');

		$data['cancel'] = $this->url->link('extension/payment', 'token=' . $this->session->data['token'], 'SSL');
		
		if (isset($this->request->post['gobaldbill_menchantno'])) {
			$data['gobaldbill_merchantno'] = $this->request->post['gobaldbill_merchantno'];
		} else {
			$data['gobaldbill_merchantno'] = $this->config->get('gobaldbill_merchantno');
		}

		if (isset($this->request->post['gobaldbill_key'])) {
			$data['gobaldbill_key'] = $this->request->post['gobaldbill_key'];
		} else {
			$data['gobaldbill_key'] = $this->config->get('gobaldbill_key');
		}
		
		if (isset($this->request->post['gobaldbill_referer'])) {
			$data['gobaldbill_referer'] = $this->request->post['gobaldbill_referer'];
		} else {
			$data['gobaldbill_referer'] = $this->config->get('gobaldbill_referer');
		}
		
		if (isset($this->request->post['gobaldbill_gateway'])) {
			$data['gobaldbill_gateway'] = $this->request->post['gobaldbill_gateway'];
		} else {
			$data['gobaldbill_gateway'] = $this->config->get('gobaldbill_gateway');
		}	
		
		$data['error_gobaldbill'] = '';
		if (($this->config->get('gobaldbill_key') == '')
		|| ($this->config->get('gobaldbill_gateway') == '') ) {
			$data['error_gobaldbill'] = $this->language->get('error_gobaldbill');
		}
		
		$this->load->model('localisation/order_status');
		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		
		if (isset($this->request->post['gobaldbill_status'])) {
			$data['gobaldbill_status'] = $this->request->post['gobaldbill_status'];
		} else {
			$data['gobaldbill_status'] = $this->config->get('gobaldbill_status');
		}
		
		if (isset($this->request->post['gobaldbill_order_status_id'])) {
			$data['gobaldbill_order_status_id'] = $this->request->post['gobaldbill_order_status_id'];
		} else {
			$data['gobaldbill_order_status_id'] = $this->config->get('gobaldbill_order_status_id'); 
			if(!$data['gobaldbill_order_status_id']){
				$data['gobaldbill_order_status_id'] = 2;
			}
		}
		
		if (isset($this->request->post['gobaldbill_order_fail_status_id'])) {
			$data['gobaldbill_order_fail_status_id'] = $this->request->post['gobaldbill_order_fail_status_id'];
		} else {
			$data['gobaldbill_order_fail_status_id'] = $this->config->get('gobaldbill_order_fail_status_id'); 
			if(!$data['gobaldbill_order_fail_status_id']){
				$data['gobaldbill_order_fail_status_id'] = 10;
			}
		}
		
		if (isset($this->request->post['gobaldbill_sort_order'])) {
			$data['gobaldbill_sort_order'] = $this->request->post['gobaldbill_sort_order'];
		} else {
			$data['gobaldbill_sort_order'] = $this->config->get('gobaldbill_sort_order');
		}
	
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('payment/gobaldbill.tpl', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'payment/gobaldbill')) {
			$this->error['error_gobaldbill'] = $this->language->get('error_gobaldbill');
		}

		if (!$this->error) {
			return TRUE;
		} else {
			return FALSE;
		}	
	}
}
?>