<?php

/* adminUser/index.html */
class __TwigTemplate_4d66c630f00340deb6a1765b5145abcc0fc037fe88d37390d6ee71c10b1389ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "adminUser/index.html", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'content' => array($this, 'block_content'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layouts.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 后台用户管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 后台用户列表</h3>
      </div>
      <form action=\"/admin/adminUser/index\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入关键字\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>用户名</th>
              <th>类型</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 35
        if (($context["data"] ?? null)) {
            // line 36
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 37
                echo "            <tr>
              <td>
              ";
                // line 39
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 1)) {
                    // line 40
                    echo "                <span class=\"text-danger\">{冻结}</span>
              ";
                } else {
                    // line 42
                    echo "                <span class=\"text-success\">{正常}</span>
              ";
                }
                // line 44
                echo "              </td>
              <td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "username", array()), "html", null, true);
                echo "</td>
              <td>
                ";
                // line 47
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 0)) {
                    // line 48
                    echo "                超级管理员
                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 49
$context["v"], "type", array()) == 1)) {
                    // line 50
                    echo "                资料审核员
                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 51
$context["v"], "type", array()) == 2)) {
                    // line 52
                    echo "                新房发布员
                ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 53
$context["v"], "type", array()) == 3)) {
                    // line 54
                    echo "                二手房发布员
                ";
                }
                // line 56
                echo "              </td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"ePass(";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ",'";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "username", array()), "html", null, true);
                echo "');\">修改密码</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
                ";
                // line 60
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 1)) {
                    // line 61
                    echo "                  <button type=\"button\" class=\"btn btn-success btn-xs\" onclick=\"flag(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",0);\">解冻</button>
                ";
                } else {
                    // line 63
                    echo "                  <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"flag(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",1);\">冻结</button>
                ";
                }
                // line 65
                echo "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "          ";
        } else {
            // line 69
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 77
        echo "          </tbody>
        </table>

          <div style=\"float: right;\">
            ";
        // line 82
        echo "              ";
        echo ($context["page"] ?? null);
        echo "
            ";
        // line 84
        echo "          </div>

      </div>
    </div>
  </div>
</div>
<!-- End Page -->
<!-- 修改密码modal start -->
<div id=\"ePassModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">修改密码</h4>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" id=\"ePassForm\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">用户名</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"username\" readonly=\"readonly\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">新密码</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"请输入新密码\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">确认密码</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" name=\"rPassword\" placeholder=\"请确认输入新密码\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- 修改密码modal end -->
";
    }

    // line 132
    public function block_js($context, array $blocks = array())
    {
        // line 133
        echo "<script src=\"/apps/admin/views/adminUser/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "adminUser/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 133,  232 => 132,  182 => 84,  177 => 82,  171 => 77,  161 => 69,  158 => 68,  150 => 65,  144 => 63,  138 => 61,  136 => 60,  132 => 59,  126 => 58,  122 => 56,  118 => 54,  116 => 53,  113 => 52,  111 => 51,  108 => 50,  106 => 49,  103 => 48,  101 => 47,  96 => 45,  93 => 44,  89 => 42,  85 => 40,  83 => 39,  79 => 37,  74 => 36,  72 => 35,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block css %}

{% endblock %}
{% block content %}
<!-- Page -->
<div class=\"page animsition\">
  <div class=\"page-header\">
    <h1 class=\"page-title\"># 后台用户管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 后台用户列表</h3>
      </div>
      <form action=\"/admin/adminUser/index\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入关键字\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>用户名</th>
              <th>类型</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
              {% if v.status == 1 %}
                <span class=\"text-danger\">{冻结}</span>
              {% else %}
                <span class=\"text-success\">{正常}</span>
              {% endif %}
              </td>
              <td>{{ v.username }}</td>
              <td>
                {% if v.type == 0 %}
                超级管理员
                {% elseif v.type == 1 %}
                资料审核员
                {% elseif v.type == 2 %}
                新房发布员
                {% elseif v.type == 3 %}
                二手房发布员
                {% endif %}
              </td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"ePass({{ v.id }},'{{ v.username }}');\">修改密码</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">删除</button>
                {% if v.status == 1 %}
                  <button type=\"button\" class=\"btn btn-success btn-xs\" onclick=\"flag({{ v.id }},0);\">解冻</button>
                {% else %}
                  <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"flag({{ v.id }},1);\">冻结</button>
                {% endif %}
              </td>
            </tr>
          {% endfor %}
          {% else %}
            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          {% endif %}
          </tbody>
        </table>

          <div style=\"float: right;\">
            {% autoescape false %}
              {{ page }}
            {% endautoescape %}
          </div>

      </div>
    </div>
  </div>
</div>
<!-- End Page -->
<!-- 修改密码modal start -->
<div id=\"ePassModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">修改密码</h4>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" id=\"ePassForm\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">用户名</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" id=\"username\" readonly=\"readonly\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">新密码</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"请输入新密码\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">确认密码</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" class=\"form-control\" name=\"rPassword\" placeholder=\"请确认输入新密码\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- 修改密码modal end -->
{% endblock %}

{% block js %}
<script src=\"/apps/admin/views/adminUser/js/index.js\"></script>
{% endblock %}", "adminUser/index.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\adminUser\\index.html");
    }
}
