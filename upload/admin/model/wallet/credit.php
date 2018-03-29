<?php
class ModelWalletCredit extends Model {
  public function addCredit($data) {
    $this->db->query("INSERT INTO " . DB_PREFIX . "customer_payment SET amount = '" . $data['amount'] . "', `type` = '" . (int)$data['type']  . "', `customer_id` = '" . (int)$data['customer_id'] . "', description = '" . $data['description'] . "', current_total = '" . $data['current_total'] . "', date = NOW(), status = 1, del_id = 0");

    $credit_id = $this->db->getLastId();
    return $credit_id;
  }

 
  public function editCredit($credit_id, $data) {
    $this->db->query("UPDATE " . DB_PREFIX . "customer_payment SET status = 0 where credit_id = ". $credit_id );
    $this->db->query("INSERT INTO " . DB_PREFIX . "customer_payment SET amount = '" . $data['amount'] . "', description = '" . $data['description'] . "', `type` = " . (int)$data['type']  . ", `customer_id` = '" . (int)$data['customer_id'] . "' , date = NOW(),status =1 ,del_id = ". (int)$credit_id );
  }

  public function deleteCredit($credit_id) {
    $this->db->query("UPDATE " . DB_PREFIX . "customer_payment SET status = 0,del_id = " . (int)$credit_id  . " where credit_id = ". (int)$credit_id ) ;
  }

  public function getCredit($credit_id) {
    $query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "customer_payment WHERE credit_id = " . (int)$credit_id );
    return $query->row;
  }

  public function getCredits($data = array()) {
    $sql = "SELECT cp.*,c.firstname,c.lastname,c.email from ".  DB_PREFIX . "customer_payment cp LEFT JOIN " . DB_PREFIX . "customer c ON (c.customer_id = cp.customer_id) where cp.status = 1";

    if (!empty($data['filter_customer_id'])) {
      $sql .= " AND cp.customer_id = " . (int)$data['filter_customer_id'];
    }

    $sort_data = array(
      'c.firstname',
      'credit_id'
    );

    if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
      $sql .= " ORDER BY " . $data['sort'];
    } else {
      $sql .= " ORDER BY credit_id";
    }

    if (isset($data['order']) && ($data['order'] == 'DESC')) {
      $sql .= " DESC";
    } else {
      $sql .= " ASC";
    }

    if (isset($data['start']) || isset($data['limit'])) {
      if ($data['start'] < 0) {
        $data['start'] = 0;
      }

      if ($data['limit'] < 1) {
        $data['limit'] = 20;
      }

      $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
    }

    $query = $this->db->query($sql);

    return $query->rows;
  }

  

  public function getTotalCredits($filter_data) {
    $sql = "SELECT COUNT(*) as total FROM " . DB_PREFIX . "customer_payment where status = 1";
     if (!empty($filter_data['filter_customer_id'])) {
      $sql .= " AND customer_id = " . (int)$filter_data['filter_customer_id'];
    }
    $query = $this->db->query($sql);

    return $query->row['total'];
  }
  
  public function getTotalBalance($filter_data) {
    $sql = "select sum(amount) as total FROM " . DB_PREFIX . "customer_payment where status = 1";
     if (!empty($filter_data['filter_customer_id'])) {
      $sql .= " AND customer_id = " . (int)$filter_data['filter_customer_id'];
    }
    $query = $this->db->query($sql);

    return $query->row['total'];
  }
  
}