 <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title"><?php echo $text_edit; ?></h4>
        </div>
        <div class="modal-body">
          <!-- <div class="form-group">
            <label class="control-label" for="input-customer-name">Customer Name</label>
            <input type="text" name="name" placeholder="Customer Name" id="input-customer-name" class="form-control customerName" autocomplete="off"><ul class="dropdown-menu" style="top: 89px; left: 15px; display: none;"><li data-value="5"><a href="#">John Doe (demo@webkul.com)</a></li><li data-value="6"><a href="#">Shane Smith (demo1@webkul.com)</a></li></ul>
            <input type="hidden" name="customer_id" id="input-customer" class="form-control" value="5">
          </div> -->
           <input type="hidden" name="credit_id" id="input-credit-id" class="form-control" value="<?php echo $customer_payment['credit_id']?>">
            <input type="hidden" name="customer_id" id="input-customer" class="form-control" value=" <?php echo $customer_payment['customer_id']?>">

          <div class="form-group">
            <label class="control-label" for="input-credit-amount"><?php echo $column_amount; ?></label>
            <input value = <?php echo $customer_payment['amount']?> type="number" step="10" name="amount" placeholder="<?php echo $column_amount; ?>" id="input-credit-amount" class="form-control">
          </div>
          <div class="form-group">
            <label class="control-label" for="input-description"><?php echo $column_description; ?></label>
            <textarea  <?php echo $customer_payment['description']?>  name="description" placeholder="<?php echo $column_description; ?>" id="input-description" class="form-control"></textarea>
          </div>
          <input type="submit" class="btn btn-primary" id="button-credit-edit"><!--  <i class="fa fa-spinner fa-spin"></i> -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $text_close; ?></button>
        </div>
      </div>
    </div>

<script type="text/javascript">
   $('#button-credit-edit').on('click', function () {
    //var customer_id = $('#input-customer').val();
    var amount = $('#input-credit-amount').val();
    var description = $('#input-description').val();
   var credit_id = $('#input-credit-id').val();
   var customer_id = $('#input-customer').val();

    var thisthis = $(this);

    $.ajax({
      url: 'index.php?route=wallet/credit/edit&token=<?php echo $token; ?>',
      dataType: 'json',
      type: 'post',
      data: {customer_id: customer_id,type: 1, credit_id: credit_id, amount: amount, description: description},
      beforeSend: function () {
        $('.alert').remove();
        $('.text-danger').remove();
        thisthis.after(' <i class="fa fa-spinner fa-spin"></i>');
      },
      success: function (json) {//alert(json);
        $('.fa-spinner').remove();
        console.log(json);
        if (json['error']) {
          html = '<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button data-dismiss="alert" class="close" type="button">×</button></div>';
          $('.modal-body').prepend(html);
          if (json['customer']) {
            html = '<div class="text-danger">' + json['customer'] + '</div>';
            $('#input-customer').after(html);
          };
          if (json['amount']) {
            html = '<div class="text-danger">' + json['amount'] + '</div>';
            $('#input-credit-amount').after(html);
          };
          if (json['description']) {
            html = '<div class="text-danger">' + json['description'] + '</div>';
            $('#input-description').after(html);
          };
        };
        if (json['success']) {
          html = '<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button data-dismiss="alert" class="close" type="button">×</button></div>';
          $('.panel').before(html);
          $('#input-customer-name').val('');
          $('#input-customer_id').val('');
          $('#input-credit-amount').val('');
          $('#input-description').val('');
          $('.in').trigger('click');
          location.reload();
        };
      }
    });
  });
</script>