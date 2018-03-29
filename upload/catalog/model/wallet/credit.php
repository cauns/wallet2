<?php
class ModelWalletCredit extends Model {

  public function getCredits($data = array()) {
    $sql = "SELECT cp.*,c.firstname,c.lastname,c.email from ".  DB_PREFIX . "customer_payment cp LEFT JOIN " . DB_PREFIX . "customer c ON (c.customer_id = cp.customer_id) where cp.status = 1 and cp.customer_id = ".(int)$this->customer->getId();

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

  public function getTotalCredits() {//$filter_data
    $sql = "SELECT COUNT(*) as total FROM " . DB_PREFIX . "customer_payment where status = 1";

    //if (isset($data['customer_id'])) {
      $sql .= " and customer_id = ".(int)$this->customer->getId();
    //}
      $query = $this->db->query($sql);

    return $query->row['total'];
  }
  
   public function getTotalBalance() {
     $sql = "select sum(amount) as total FROM " . DB_PREFIX . "customer_payment where status = 1";
      $sql .= " and customer_id = ".(int)$this->customer->getId();
      $query = $this->db->query($sql);
    return $query->row['total'];
  }
}