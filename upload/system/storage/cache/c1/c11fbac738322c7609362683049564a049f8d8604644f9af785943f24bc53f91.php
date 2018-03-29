<?php

/* wallet/credit_form.twig */
class __TwigTemplate_f9eec0150588b6645959ec6c375c7c92785f80abdef595f4e55d074987b8f52d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo " <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
          <h4 class=\"modal-title\">";
        // line 5
        echo (isset($context["text_edit"]) ? $context["text_edit"] : null);
        echo "</h4>
        </div>
        <div class=\"modal-body\">
          <!-- <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer-name\">Customer Name</label>
            <input type=\"text\" name=\"name\" placeholder=\"Customer Name\" id=\"input-customer-name\" class=\"form-control customerName\" autocomplete=\"off\"><ul class=\"dropdown-menu\" style=\"top: 89px; left: 15px; display: none;\"><li data-value=\"5\"><a href=\"#\">John Doe (demo@webkul.com)</a></li><li data-value=\"6\"><a href=\"#\">Shane Smith (demo1@webkul.com)</a></li></ul>
            <input type=\"hidden\" name=\"customer_id\" id=\"input-customer\" class=\"form-control\" value=\"5\">
          </div> -->
           <input type=\"hidden\" name=\"credit_id\" id=\"input-credit-id\" class=\"form-control\" value=\"";
        // line 13
        echo $this->getAttribute((isset($context["customer_payment"]) ? $context["customer_payment"] : null), "credit_id", array());
        echo "\">
            <input type=\"hidden\" name=\"customer_id\" id=\"input-customer\" class=\"form-control\" value=\" ";
        // line 14
        echo $this->getAttribute((isset($context["customer_payment"]) ? $context["customer_payment"] : null), "customer_id", array());
        echo "\">

          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-credit-amount\">";
        // line 17
        echo (isset($context["column_amount"]) ? $context["column_amount"] : null);
        echo "</label>
            <input value = ";
        // line 18
        echo $this->getAttribute((isset($context["customer_payment"]) ? $context["customer_payment"] : null), "amount", array());
        echo " type=\"number\" step=\"10\" name=\"amount\" placeholder=\"";
        echo (isset($context["column_amount"]) ? $context["column_amount"] : null);
        echo "\" id=\"input-credit-amount\" class=\"form-control\">
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-description\">";
        // line 21
        echo (isset($context["column_description"]) ? $context["column_description"] : null);
        echo "</label>
            <textarea    name=\"description\" placeholder=\"";
        // line 22
        echo (isset($context["column_description"]) ? $context["column_description"] : null);
        echo "\" id=\"input-description\" class=\"form-control\">";
        echo $this->getAttribute((isset($context["customer_payment"]) ? $context["customer_payment"] : null), "description", array());
        echo "
            </textarea>
          </div>
          <input type=\"submit\" class=\"btn btn-primary\" id=\"button-credit-edit\"><!--  <i class=\"fa fa-spinner fa-spin\"></i> -->
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 28
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
        </div>
      </div>
    </div>

<script type=\"text/javascript\">
   \$('#button-credit-edit').on('click', function () {
    //var customer_id = \$('#input-customer').val();
    var amount = \$('#input-credit-amount').val();
    var description = \$('#input-description').val();
   var credit_id = \$('#input-credit-id').val();
   var customer_id = \$('#input-customer').val();

    var thisthis = \$(this);

    \$.ajax({
      url: 'index.php?route=wallet/credit/edit&user_token=";
        // line 44
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
      dataType: 'json',
      type: 'post',
      data: {customer_id: customer_id,type: 1, credit_id: credit_id, amount: amount, description: description},
      beforeSend: function () {
        \$('.alert').remove();
        \$('.text-danger').remove();
        thisthis.after(' <i class=\"fa fa-spinner fa-spin\"></i>');
      },
      success: function (json) {//alert(json);
        \$('.fa-spinner').remove();
        console.log(json);
        if (json['error']) {
          html = '<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button></div>';
          \$('.modal-body').prepend(html);
          if (json['customer']) {
            html = '<div class=\"text-danger\">' + json['customer'] + '</div>';
            \$('#input-customer').after(html);
          };
          if (json['amount']) {
            html = '<div class=\"text-danger\">' + json['amount'] + '</div>';
            \$('#input-credit-amount').after(html);
          };
          if (json['description']) {
            html = '<div class=\"text-danger\">' + json['description'] + '</div>';
            \$('#input-description').after(html);
          };
        };
        if (json['success']) {
          html = '<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '<button data-dismiss=\"alert\" class=\"close\" type=\"button\">×</button></div>';
          \$('.panel').before(html);
          \$('#input-customer-name').val('');
          \$('#input-customer_id').val('');
          \$('#input-credit-amount').val('');
          \$('#input-description').val('');
          \$('.in').trigger('click');
          location.reload();
        };
      }
    });
  });
</script>";
    }

    public function getTemplateName()
    {
        return "wallet/credit_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 44,  73 => 28,  62 => 22,  58 => 21,  50 => 18,  46 => 17,  40 => 14,  36 => 13,  25 => 5,  19 => 1,);
    }
}
/*  <div class="modal-dialog">*/
/*       <div class="modal-content">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal">×</button>*/
/*           <h4 class="modal-title">{{text_edit}}</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*           <!-- <div class="form-group">*/
/*             <label class="control-label" for="input-customer-name">Customer Name</label>*/
/*             <input type="text" name="name" placeholder="Customer Name" id="input-customer-name" class="form-control customerName" autocomplete="off"><ul class="dropdown-menu" style="top: 89px; left: 15px; display: none;"><li data-value="5"><a href="#">John Doe (demo@webkul.com)</a></li><li data-value="6"><a href="#">Shane Smith (demo1@webkul.com)</a></li></ul>*/
/*             <input type="hidden" name="customer_id" id="input-customer" class="form-control" value="5">*/
/*           </div> -->*/
/*            <input type="hidden" name="credit_id" id="input-credit-id" class="form-control" value="{{customer_payment.credit_id}}">*/
/*             <input type="hidden" name="customer_id" id="input-customer" class="form-control" value=" {{customer_payment.customer_id}}">*/
/* */
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-credit-amount">{{column_amount}}</label>*/
/*             <input value = {{customer_payment.amount}} type="number" step="10" name="amount" placeholder="{{column_amount}}" id="input-credit-amount" class="form-control">*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-description">{{column_description}}</label>*/
/*             <textarea    name="description" placeholder="{{column_description}}" id="input-description" class="form-control">{{customer_payment.description}}*/
/*             </textarea>*/
/*           </div>*/
/*           <input type="submit" class="btn btn-primary" id="button-credit-edit"><!--  <i class="fa fa-spinner fa-spin"></i> -->*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*           <button type="button" class="btn btn-default" data-dismiss="modal">{{text_close}}</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/* <script type="text/javascript">*/
/*    $('#button-credit-edit').on('click', function () {*/
/*     //var customer_id = $('#input-customer').val();*/
/*     var amount = $('#input-credit-amount').val();*/
/*     var description = $('#input-description').val();*/
/*    var credit_id = $('#input-credit-id').val();*/
/*    var customer_id = $('#input-customer').val();*/
/* */
/*     var thisthis = $(this);*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=wallet/credit/edit&user_token={{user_token}}',*/
/*       dataType: 'json',*/
/*       type: 'post',*/
/*       data: {customer_id: customer_id,type: 1, credit_id: credit_id, amount: amount, description: description},*/
/*       beforeSend: function () {*/
/*         $('.alert').remove();*/
/*         $('.text-danger').remove();*/
/*         thisthis.after(' <i class="fa fa-spinner fa-spin"></i>');*/
/*       },*/
/*       success: function (json) {//alert(json);*/
/*         $('.fa-spinner').remove();*/
/*         console.log(json);*/
/*         if (json['error']) {*/
/*           html = '<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '<button data-dismiss="alert" class="close" type="button">×</button></div>';*/
/*           $('.modal-body').prepend(html);*/
/*           if (json['customer']) {*/
/*             html = '<div class="text-danger">' + json['customer'] + '</div>';*/
/*             $('#input-customer').after(html);*/
/*           };*/
/*           if (json['amount']) {*/
/*             html = '<div class="text-danger">' + json['amount'] + '</div>';*/
/*             $('#input-credit-amount').after(html);*/
/*           };*/
/*           if (json['description']) {*/
/*             html = '<div class="text-danger">' + json['description'] + '</div>';*/
/*             $('#input-description').after(html);*/
/*           };*/
/*         };*/
/*         if (json['success']) {*/
/*           html = '<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '<button data-dismiss="alert" class="close" type="button">×</button></div>';*/
/*           $('.panel').before(html);*/
/*           $('#input-customer-name').val('');*/
/*           $('#input-customer_id').val('');*/
/*           $('#input-credit-amount').val('');*/
/*           $('#input-description').val('');*/
/*           $('.in').trigger('click');*/
/*           location.reload();*/
/*         };*/
/*       }*/
/*     });*/
/*   });*/
/* </script>*/
