<?php

/* wallet/credit_list.twig */
class __TwigTemplate_f6088c90249aa25c0416708283d08874a0ecafea4360c9940630a5367ae603ae extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <h1>";
        // line 5
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h1>
      <ul class=\"breadcrumb\">
          ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo "      
          <li><a href=\"";
            // line 8
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "      </ul>
      <div class=\"pull-right\"><button data-toggle=\"modal\" data-target=\"#addCredit\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i> ";
        // line 11
        echo (isset($context["text_add"]) ? $context["text_add"] : null);
        echo "</button></div>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i>";
        // line 17
        echo (isset($context["text_list"]) ? $context["text_list"] : null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 24
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo " </label>
                <input type=\"text\" name=\"filter_name\" value=\"\" placeholder=\"";
        // line 25
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "\" id=\"input-name\" class=\"form-control\" autocomplete=\"off\">
                <input type=\"hidden\" name=\"filter_customer_id\" id=\"input-customer-filter\" class=\"form-control\" value=\"\">
                <ul class=\"dropdown-menu\" style=\"top: 74px; left: 15px; display: none;\"></ul>
              </div>
             <!--  <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-email\">E-mail</label>
                <input type=\"text\" name=\"filter_email\" value=\"\" placeholder=\"E-mail\" id=\"input-email\" class=\"form-control\" autocomplete=\"off\"><ul class=\"dropdown-menu\"></ul>
              </div> -->
            </div>
            <!-- <div class=\"col-sm-4\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-order-id\">Order ID</label>
                <input type=\"text\" name=\"filter_order_id\" value=\"\" placeholder=\"Order ID\" id=\"input-order-id\" class=\"form-control\">
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-amount\">Amount</label>
                <input type=\"text\" name=\"filter_amount\" value=\"\" placeholder=\"Amount\" id=\"input-amount\" class=\"form-control\">
              </div>
            </div> -->
            <div class=\"col-sm-4\">
             <!--  <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-added\">Date Added</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"filter_date_added\" value=\"\" placeholder=\"Date Added\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\">
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div> -->
              <button style =\"margin-top: 37px\" type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-left\"><i class=\"fa fa-search\"></i> ";
        // line 53
        echo (isset($context["text_filter"]) ? $context["text_filter"] : null);
        echo "</button>
            </div>
          </div>
        </div>
        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-left\">                  <a href=\"#\">";
        // line 61
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</a>
                  </td>
                <td class=\"text-left\">                  <a href=\"#\">";
        // line 63
        echo (isset($context["column_email"]) ? $context["column_email"] : null);
        echo "</a>
                  </td>
              <!--   <td class=\"text-right\">                  <a href=\"http://oc.webkul.com/Wallet-System/admin/index.php?route=wallet/wk_credits&amp;user_user_token=Sob0USzRWvAIvqty9wXMzF9k4hwXSGdn&amp;sort=order_id&amp;order=ASC\">Order ID</a>
                  </td> -->
                <td class=\"text-left\">                  <a href=\"#\">";
        // line 67
        echo (isset($context["column_date_added"]) ? $context["column_date_added"] : null);
        echo "</a>
                  </td>
                <td class=\"text-left\">                  <a href=\"#\">";
        // line 69
        echo (isset($context["column_amount"]) ? $context["column_amount"] : null);
        echo "</a>
                  </td>
                <td class=\"text-left\">";
        // line 71
        echo (isset($context["column_description"]) ? $context["column_description"] : null);
        echo "</td>
                <td class=\"text-left\">";
        // line 72
        echo (isset($context["column_action"]) ? $context["column_action"] : null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
                ";
        // line 76
        if ((isset($context["credits"]) ? $context["credits"] : null)) {
            // line 77
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["credits"]) ? $context["credits"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["credit"]) {
                echo "      
               <tr>
                <td class=\"text-left\">";
                // line 79
                echo $this->getAttribute($context["credit"], "customer_name", array());
                echo "</td>
                <td class=\"text-left\">";
                // line 80
                echo $this->getAttribute($context["credit"], "email", array());
                echo "</td>
<!--                 <td class=\"text-right\">68</td>
 -->                <td class=\"text-left\">";
                // line 82
                echo $this->getAttribute($context["credit"], "date", array());
                echo "</td>
                <td class=\"text-left\">";
                // line 83
                echo $this->getAttribute($context["credit"], "amount", array());
                echo "</td>
                <td class=\"text-left\">";
                // line 84
                echo $this->getAttribute($context["credit"], "description", array());
                echo "</td>
                  <td class=\"text-right\">
                    ";
                // line 86
                if (($this->getAttribute($context["credit"], "type", array()) == 1)) {
                    // line 87
                    echo "                     <a onclick = \"deleteCreditView('";
                    echo $this->getAttribute($context["credit"], "credit_id", array());
                    echo "')\"  data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_delete"]) ? $context["button_delete"] : null);
                    echo "\" class=\"btn btn-warning\"><i class=\"fa fa-unlock\"></i></a>

                    <a onclick = \"editCreditView('";
                    // line 89
                    echo $this->getAttribute($context["credit"], "credit_id", array());
                    echo "')\"  data-toggle=\"tooltip\" title=\"";
                    echo (isset($context["button_edit"]) ? $context["button_edit"] : null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a>
                  </td>
                ";
                }
                // line 91
                echo "           
               </tr>
               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['credit'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                ";
        } else {
            // line 95
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 96
            echo (isset($context["text_no_results"]) ? $context["text_no_results"] : null);
            echo "</td>
                </tr>
                ";
        }
        // line 98
        echo "           
                                        </tbody>
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 103
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 104
        echo (isset($context["results"]) ? $context["results"] : null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <div id=\"addCredit\" class=\"modal fade\" role=\"dialog\" tabindex=\"-1\" style=\"display: none;\">
    <div class=\"modal-dialog\">
      <div class=\"modal-content\">
        <div class=\"modal-header\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\">×</button>
          <h4 class=\"modal-title\">";
        // line 114
        echo (isset($context["text_add"]) ? $context["text_add"] : null);
        echo "</h4>
        </div>
        <div class=\"modal-body\">
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-customer-name\">";
        // line 118
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "</label>
            <input type=\"text\" name=\"name\" placeholder=\"";
        // line 119
        echo (isset($context["column_name"]) ? $context["column_name"] : null);
        echo "\" id=\"input-customer-name\" class=\"form-control customerName\" autocomplete=\"off\"><ul class=\"dropdown-menu\" style=\"top: 89px; left: 15px; display: none;\"></ul>
            <input type=\"hidden\" name=\"customer_id\" id=\"input-customer\" class=\"form-control\" value=\"\">
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-credit-amount\">";
        // line 123
        echo (isset($context["column_amount"]) ? $context["column_amount"] : null);
        echo "</label>
            <input type=\"number\" step=\"10\" name=\"amount\" placeholder=\"";
        // line 124
        echo (isset($context["column_amount"]) ? $context["column_amount"] : null);
        echo "\" id=\"input-credit-amount\" class=\"form-control\">
          </div>
          <div class=\"form-group\">
            <label class=\"control-label\" for=\"input-description\">";
        // line 127
        echo (isset($context["column_description"]) ? $context["column_description"] : null);
        echo "</label>
            <textarea name=\"description\" placeholder=\"";
        // line 128
        echo (isset($context["column_description"]) ? $context["column_description"] : null);
        echo "\" id=\"input-description\" class=\"form-control\"></textarea>
          </div>
          <input type=\"submit\" class=\"btn btn-primary\" id=\"button-credit\"> <!-- <i class=\"fa fa-spinner fa-spin\"></i> -->
        </div>
        <div class=\"modal-footer\">
          <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
        // line 133
        echo (isset($context["text_close"]) ? $context["text_close"] : null);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
 
</div>

";
        // line 141
        echo (isset($context["footer"]) ? $context["footer"] : null);
        echo "


<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
  url = 'index.php?route=wallet/credit&user_token=";
        // line 146
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "';

/*  var filter_order_id = \$('input[name=\\'filter_order_id\\']').val();

  if (filter_order_id) {
    url += '&filter_order_id=' + encodeURIComponent(filter_order_id);
  }*/

  /*var filter_name = \$('input[name=\\'filter_name\\']').val();

  if (filter_name) {
    url += '&filter_name=' + encodeURIComponent(filter_name);
  }*/
  var filter_customer_id = \$('input[name=\\'filter_customer_id\\']').val();

  if (filter_customer_id) {
    url += '&filter_customer_id=' + encodeURIComponent(filter_customer_id);
  }

  /*var filter_email = \$('input[name=\\'filter_email\\']').val();

  if (filter_email) {
    url += '&filter_email=' + encodeURIComponent(filter_email);
  }

  var filter_amount = \$('input[name=\\'filter_amount\\']').val();

  if (filter_amount) {
    url += '&filter_amount=' + encodeURIComponent(filter_amount);
  }

  var filter_date_added = \$('input[name=\\'filter_date_added\\']').val();

  if (filter_date_added) {
    url += '&filter_date_added=' + encodeURIComponent(filter_date_added);
  }*/

  location = url;
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter_name\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 190
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'],
            value: item['customer_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'filter_name\\']').val(item['label']);
    \$('input[name=\\'filter_customer_id\\']').val(item['value']);
  }
});

\$('input[name=\\'name\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 211
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['name'] + ' (' + item['email'] + ')',
            value: item['customer_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'name\\']').val(item['label']);
    \$('input[name=\\'customer_id\\']').val(item['value']);
  }
});

\$('input[name=\\'filter_email\\']').autocomplete({
  'source': function(request, response) {
    \$.ajax({
      url: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 232
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "&filter_name=' +  encodeURIComponent(request),
      dataType: 'json',
      success: function(json) {
        response(\$.map(json, function(item) {
          return {
            label: item['email'],
            value: item['customer_id']
          }
        }));
      }
    });
  },
  'select': function(item) {
    \$('input[name=\\'filter_email\\']').val(item['label']);
  }
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
  pickTime: false
});
//--></script>
<script type=\"text/javascript\">
  \$('#button-credit').on('click', function () {
    var customer_id = \$('#input-customer').val(); 
    var amount = \$('#input-credit-amount').val();
    var description = \$('#input-description').val();
    var thisthis = \$(this);

    \$.ajax({
      url: 'index.php?route=wallet/credit/add&user_token=";
        // line 262
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "',
      dataType: 'json',
      type: 'post',
      data: {customer_id: customer_id, amount: amount, description: description},
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

  function  editCreditView(credit_id){
      var thisthis = \$(this);
     var url = 'index.php?route=wallet/credit/getForm&user_token=";
        // line 306
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "'+'&credit_id='+credit_id;//alert(url);
        \$.ajax({
      url: url,
      dataType: 'html',
      type: 'post',
      data: {credit_id: credit_id},
      beforeSend: function () {
       /* \$('.alert').remove();
        \$('.text-danger').remove();
        thisthis.after(' <i class=\"fa fa-spinner fa-spin\"></i>');*/
      },
      success: function (html) {//alert(html);
         \$(\"#addCredit\").html(html);
       \$(\"#addCredit\").modal();
/*
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
        };*/
      }
    });
  }


  function  deleteCreditView(credit_id){
      var thisthis = \$(this);
     var url = 'index.php?route=wallet/credit/delete&user_token=";
        // line 356
        echo (isset($context["user_token"]) ? $context["user_token"] : null);
        echo "'+'&credit_id='+credit_id;//alert(url);
        \$.ajax({
      url: url,
      dataType: 'html',
      type: 'get',
      data: {credit_id: credit_id},
      beforeSend: function () {
       /* \$('.alert').remove();
        \$('.text-danger').remove();
        thisthis.after(' <i class=\"fa fa-spinner fa-spin\"></i>');*/
      },
      success: function (html) {//alert(html);
         location.reload();
      }
    });
  }
</script>";
    }

    public function getTemplateName()
    {
        return "wallet/credit_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 356,  477 => 306,  430 => 262,  397 => 232,  373 => 211,  349 => 190,  302 => 146,  294 => 141,  283 => 133,  275 => 128,  271 => 127,  265 => 124,  261 => 123,  254 => 119,  250 => 118,  243 => 114,  230 => 104,  226 => 103,  219 => 98,  213 => 96,  210 => 95,  207 => 94,  199 => 91,  191 => 89,  183 => 87,  181 => 86,  176 => 84,  172 => 83,  168 => 82,  163 => 80,  159 => 79,  151 => 77,  149 => 76,  142 => 72,  138 => 71,  133 => 69,  128 => 67,  121 => 63,  116 => 61,  105 => 53,  74 => 25,  70 => 24,  60 => 17,  51 => 11,  48 => 10,  38 => 8,  32 => 7,  27 => 5,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/*   <div class="page-header">*/
/*     <div class="container-fluid">*/
/*       <h1>{{text_list }}</h1>*/
/*       <ul class="breadcrumb">*/
/*           {% for breadcrumb in breadcrumbs %}      */
/*           <li><a href="{{breadcrumb.href}}">{{breadcrumb.text}}</a></li>*/
/*           {% endfor %}*/
/*       </ul>*/
/*       <div class="pull-right"><button data-toggle="modal" data-target="#addCredit" class="btn btn-primary"><i class="fa fa-plus"></i> {{text_add }}</button></div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="container-fluid">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-heading">*/
/*         <h3 class="panel-title"><i class="fa fa-list"></i>{{text_list }}</h3>*/
/*       </div>*/
/*       <div class="panel-body">*/
/*         <div class="well">*/
/*           <div class="row">*/
/*             <div class="col-sm-4">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-name">{{column_name}} </label>*/
/*                 <input type="text" name="filter_name" value="" placeholder="{{column_name}}" id="input-name" class="form-control" autocomplete="off">*/
/*                 <input type="hidden" name="filter_customer_id" id="input-customer-filter" class="form-control" value="">*/
/*                 <ul class="dropdown-menu" style="top: 74px; left: 15px; display: none;"></ul>*/
/*               </div>*/
/*              <!--  <div class="form-group">*/
/*                 <label class="control-label" for="input-email">E-mail</label>*/
/*                 <input type="text" name="filter_email" value="" placeholder="E-mail" id="input-email" class="form-control" autocomplete="off"><ul class="dropdown-menu"></ul>*/
/*               </div> -->*/
/*             </div>*/
/*             <!-- <div class="col-sm-4">*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-order-id">Order ID</label>*/
/*                 <input type="text" name="filter_order_id" value="" placeholder="Order ID" id="input-order-id" class="form-control">*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="control-label" for="input-amount">Amount</label>*/
/*                 <input type="text" name="filter_amount" value="" placeholder="Amount" id="input-amount" class="form-control">*/
/*               </div>*/
/*             </div> -->*/
/*             <div class="col-sm-4">*/
/*              <!--  <div class="form-group">*/
/*                 <label class="control-label" for="input-date-added">Date Added</label>*/
/*                 <div class="input-group date">*/
/*                   <input type="text" name="filter_date_added" value="" placeholder="Date Added" data-date-format="YYYY-MM-DD" id="input-date-added" class="form-control">*/
/*                   <span class="input-group-btn">*/
/*                   <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                   </span></div>*/
/*               </div> -->*/
/*               <button style ="margin-top: 37px" type="button" id="button-filter" class="btn btn-primary pull-left"><i class="fa fa-search"></i> {{text_filter}}</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="table-responsive">*/
/*           <table class="table table-bordered table-hover">*/
/*             <thead>*/
/*               <tr>*/
/*                 <td class="text-left">                  <a href="#">{{column_name}}</a>*/
/*                   </td>*/
/*                 <td class="text-left">                  <a href="#">{{column_email}}</a>*/
/*                   </td>*/
/*               <!--   <td class="text-right">                  <a href="http://oc.webkul.com/Wallet-System/admin/index.php?route=wallet/wk_credits&amp;user_user_token=Sob0USzRWvAIvqty9wXMzF9k4hwXSGdn&amp;sort=order_id&amp;order=ASC">Order ID</a>*/
/*                   </td> -->*/
/*                 <td class="text-left">                  <a href="#">{{column_date_added}}</a>*/
/*                   </td>*/
/*                 <td class="text-left">                  <a href="#">{{column_amount}}</a>*/
/*                   </td>*/
/*                 <td class="text-left">{{column_description}}</td>*/
/*                 <td class="text-left">{{column_action}}</td>*/
/*               </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 {% if credits %}*/
/*                 {% for credit in credits %}      */
/*                <tr>*/
/*                 <td class="text-left">{{credit.customer_name}}</td>*/
/*                 <td class="text-left">{{credit.email}}</td>*/
/* <!--                 <td class="text-right">68</td>*/
/*  -->                <td class="text-left">{{credit.date}}</td>*/
/*                 <td class="text-left">{{credit.amount}}</td>*/
/*                 <td class="text-left">{{credit.description}}</td>*/
/*                   <td class="text-right">*/
/*                     {% if credit.type == 1 %}*/
/*                      <a onclick = "deleteCreditView('{{credit.credit_id}}')"  data-toggle="tooltip" title="{{button_delete}}" class="btn btn-warning"><i class="fa fa-unlock"></i></a>*/
/* */
/*                     <a onclick = "editCreditView('{{credit.credit_id}}')"  data-toggle="tooltip" title="{{button_edit}}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>*/
/*                   </td>*/
/*                 {% endif %}           */
/*                </tr>*/
/*                {% endfor %}*/
/*                 {% else %}*/
/*                 <tr>*/
/*                   <td class="text-center" colspan="4">{{ text_no_results }}</td>*/
/*                 </tr>*/
/*                 {% endif %}           */
/*                                         </tbody>*/
/*           </table>*/
/*         </div>*/
/*         <div class="row">*/
/*           <div class="col-sm-6 text-left">{{pagination}}</div>*/
/*           <div class="col-sm-6 text-right">{{results}}</div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div id="addCredit" class="modal fade" role="dialog" tabindex="-1" style="display: none;">*/
/*     <div class="modal-dialog">*/
/*       <div class="modal-content">*/
/*         <div class="modal-header">*/
/*           <button type="button" class="close" data-dismiss="modal">×</button>*/
/*           <h4 class="modal-title">{{text_add}}</h4>*/
/*         </div>*/
/*         <div class="modal-body">*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-customer-name">{{column_name}}</label>*/
/*             <input type="text" name="name" placeholder="{{column_name}}" id="input-customer-name" class="form-control customerName" autocomplete="off"><ul class="dropdown-menu" style="top: 89px; left: 15px; display: none;"></ul>*/
/*             <input type="hidden" name="customer_id" id="input-customer" class="form-control" value="">*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-credit-amount">{{column_amount}}</label>*/
/*             <input type="number" step="10" name="amount" placeholder="{{column_amount}}" id="input-credit-amount" class="form-control">*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <label class="control-label" for="input-description">{{column_description}}</label>*/
/*             <textarea name="description" placeholder="{{column_description}}" id="input-description" class="form-control"></textarea>*/
/*           </div>*/
/*           <input type="submit" class="btn btn-primary" id="button-credit"> <!-- <i class="fa fa-spinner fa-spin"></i> -->*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*           <button type="button" class="btn btn-default" data-dismiss="modal">{{text_close}}</button>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*  */
/* </div>*/
/* */
/* {{ footer }}*/
/* */
/* */
/* <script type="text/javascript"><!--*/
/* $('#button-filter').on('click', function() {*/
/*   url = 'index.php?route=wallet/credit&user_token={{user_token}}';*/
/* */
/* /*  var filter_order_id = $('input[name=\'filter_order_id\']').val();*/
/* */
/*   if (filter_order_id) {*/
/*     url += '&filter_order_id=' + encodeURIComponent(filter_order_id);*/
/*   }*//* */
/* */
/*   /*var filter_name = $('input[name=\'filter_name\']').val();*/
/* */
/*   if (filter_name) {*/
/*     url += '&filter_name=' + encodeURIComponent(filter_name);*/
/*   }*//* */
/*   var filter_customer_id = $('input[name=\'filter_customer_id\']').val();*/
/* */
/*   if (filter_customer_id) {*/
/*     url += '&filter_customer_id=' + encodeURIComponent(filter_customer_id);*/
/*   }*/
/* */
/*   /*var filter_email = $('input[name=\'filter_email\']').val();*/
/* */
/*   if (filter_email) {*/
/*     url += '&filter_email=' + encodeURIComponent(filter_email);*/
/*   }*/
/* */
/*   var filter_amount = $('input[name=\'filter_amount\']').val();*/
/* */
/*   if (filter_amount) {*/
/*     url += '&filter_amount=' + encodeURIComponent(filter_amount);*/
/*   }*/
/* */
/*   var filter_date_added = $('input[name=\'filter_date_added\']').val();*/
/* */
/*   if (filter_date_added) {*/
/*     url += '&filter_date_added=' + encodeURIComponent(filter_date_added);*/
/*   }*//* */
/* */
/*   location = url;*/
/* });*/
/* //--></script>*/
/*   <script type="text/javascript"><!--*/
/* $('input[name=\'filter_name\']').autocomplete({*/
/*   'source': function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/autocomplete&user_token={{user_token}}&filter_name=' +  encodeURIComponent(request),*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         response($.map(json, function(item) {*/
/*           return {*/
/*             label: item['name'],*/
/*             value: item['customer_id']*/
/*           }*/
/*         }));*/
/*       }*/
/*     });*/
/*   },*/
/*   'select': function(item) {*/
/*     $('input[name=\'filter_name\']').val(item['label']);*/
/*     $('input[name=\'filter_customer_id\']').val(item['value']);*/
/*   }*/
/* });*/
/* */
/* $('input[name=\'name\']').autocomplete({*/
/*   'source': function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/autocomplete&user_token={{user_token}}&filter_name=' +  encodeURIComponent(request),*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         response($.map(json, function(item) {*/
/*           return {*/
/*             label: item['name'] + ' (' + item['email'] + ')',*/
/*             value: item['customer_id']*/
/*           }*/
/*         }));*/
/*       }*/
/*     });*/
/*   },*/
/*   'select': function(item) {*/
/*     $('input[name=\'name\']').val(item['label']);*/
/*     $('input[name=\'customer_id\']').val(item['value']);*/
/*   }*/
/* });*/
/* */
/* $('input[name=\'filter_email\']').autocomplete({*/
/*   'source': function(request, response) {*/
/*     $.ajax({*/
/*       url: 'index.php?route=customer/customer/autocomplete&user_token={{user_token}}&filter_name=' +  encodeURIComponent(request),*/
/*       dataType: 'json',*/
/*       success: function(json) {*/
/*         response($.map(json, function(item) {*/
/*           return {*/
/*             label: item['email'],*/
/*             value: item['customer_id']*/
/*           }*/
/*         }));*/
/*       }*/
/*     });*/
/*   },*/
/*   'select': function(item) {*/
/*     $('input[name=\'filter_email\']').val(item['label']);*/
/*   }*/
/* });*/
/* //--></script>*/
/*   <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/*   pickTime: false*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript">*/
/*   $('#button-credit').on('click', function () {*/
/*     var customer_id = $('#input-customer').val(); */
/*     var amount = $('#input-credit-amount').val();*/
/*     var description = $('#input-description').val();*/
/*     var thisthis = $(this);*/
/* */
/*     $.ajax({*/
/*       url: 'index.php?route=wallet/credit/add&user_token={{user_token}}',*/
/*       dataType: 'json',*/
/*       type: 'post',*/
/*       data: {customer_id: customer_id, amount: amount, description: description},*/
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
/* */
/*   function  editCreditView(credit_id){*/
/*       var thisthis = $(this);*/
/*      var url = 'index.php?route=wallet/credit/getForm&user_token={{user_token}}'+'&credit_id='+credit_id;//alert(url);*/
/*         $.ajax({*/
/*       url: url,*/
/*       dataType: 'html',*/
/*       type: 'post',*/
/*       data: {credit_id: credit_id},*/
/*       beforeSend: function () {*/
/*        /* $('.alert').remove();*/
/*         $('.text-danger').remove();*/
/*         thisthis.after(' <i class="fa fa-spinner fa-spin"></i>');*//* */
/*       },*/
/*       success: function (html) {//alert(html);*/
/*          $("#addCredit").html(html);*/
/*        $("#addCredit").modal();*/
/* /**/
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
/*         };*//* */
/*       }*/
/*     });*/
/*   }*/
/* */
/* */
/*   function  deleteCreditView(credit_id){*/
/*       var thisthis = $(this);*/
/*      var url = 'index.php?route=wallet/credit/delete&user_token={{user_token}}'+'&credit_id='+credit_id;//alert(url);*/
/*         $.ajax({*/
/*       url: url,*/
/*       dataType: 'html',*/
/*       type: 'get',*/
/*       data: {credit_id: credit_id},*/
/*       beforeSend: function () {*/
/*        /* $('.alert').remove();*/
/*         $('.text-danger').remove();*/
/*         thisthis.after(' <i class="fa fa-spinner fa-spin"></i>');*//* */
/*       },*/
/*       success: function (html) {//alert(html);*/
/*          location.reload();*/
/*       }*/
/*     });*/
/*   }*/
/* </script>*/
