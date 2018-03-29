<?php
class ModelExtensionShippingCourier extends Model {
	public function getCourierByCode($code) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "shipping_courier` WHERE shipping_courier_code = '" . $code . "'");
		return $query->row;
	}
	public function createShipmentLabel($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "order_shipment SET order_id = '" . (int)$data['order_id'] . "',`tracking_number` = '" . $data['tracking_number'] . "', shipping_courier_id = '" . (int)$data['shipping_courier_id'] . "', date_added = NOW()");
		$order_shipment_id = $this->db->getLastId();		
		return $order_shipment_id;
	}
	public function getLabelByOrderId($orderId) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "order_shipment` WHERE order_id = '" . $orderId . " limit 1'");
		return $query->row;
	}
	public function updateOrder($order_id, $order_status_id, $comment = '', $notify = false) {
		$this->load->model('checkout/order');

		$this->db->query("UPDATE `" . DB_PREFIX . "order` SET order_status_id = " . (int)$order_status_id . " WHERE order_id = " . (int)$order_id);

		$this->model_checkout_order->addOrderHistory($order_id, $order_status_id, $comment, $notify);
	}
}	