<?php

/* propertyConsultant/index.html */
class __TwigTemplate_8a91ad7b3a9bea0f5acecfe10c9edb706c4775f048a69adc38367f56b9c7867c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "propertyConsultant/index.html", 1);
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
    <h1 class=\"page-title\"># 置业顾问管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 置业顾问列表</h3>
      </div>
      <form action=\"/admin/propertyConsultant/index\" method=\"post\">
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
              <th>头像</th>
              <th>姓名</th>
              <th>电话</th>
              <th>所属地产公司</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 37
        if (($context["data"] ?? null)) {
            // line 38
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 39
                echo "            <tr>
              <td>
              ";
                // line 41
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 1)) {
                    // line 42
                    echo "                <span class=\"text-danger\">{禁用}</span>
              ";
                } else {
                    // line 44
                    echo "                <span class=\"text-success\">{启用}</span>
              ";
                }
                // line 46
                echo "              </td>
              <td>
                <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "head_portrait", array()), "html", null, true);
                echo "\" class=\"img-responsive\" alt=\"Responsive image\" style=\"width: 90px; height: 90px;\">
              </td>
              <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "phone", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 52
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "belong_company", array()), "html", null, true);
                echo "</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit(";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">修改</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
                ";
                // line 56
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 1)) {
                    // line 57
                    echo "                  <button type=\"button\" class=\"btn btn-success btn-xs\" onclick=\"flag(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",0);\">启用</button>
                ";
                } else {
                    // line 59
                    echo "                  <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"flag(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",1);\">禁用</button>
                ";
                }
                // line 61
                echo "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "          ";
        } else {
            // line 65
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 73
        echo "          </tbody>
        </table>

          <div style=\"float: right;\">
            ";
        // line 78
        echo "              ";
        echo ($context["page"] ?? null);
        echo "
            ";
        // line 80
        echo "          </div>

      </div>
    </div>
  </div>
</div>
<!-- End Page -->
";
    }

    // line 89
    public function block_js($context, array $blocks = array())
    {
        // line 90
        echo "<script src=\"/apps/admin/views/propertyConsultant/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "propertyConsultant/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 90,  182 => 89,  171 => 80,  166 => 78,  160 => 73,  150 => 65,  147 => 64,  139 => 61,  133 => 59,  127 => 57,  125 => 56,  121 => 55,  117 => 54,  112 => 52,  108 => 51,  104 => 50,  99 => 48,  95 => 46,  91 => 44,  87 => 42,  85 => 41,  81 => 39,  76 => 38,  74 => 37,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
    <h1 class=\"page-title\"># 置业顾问管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 置业顾问列表</h3>
      </div>
      <form action=\"/admin/propertyConsultant/index\" method=\"post\">
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
              <th>头像</th>
              <th>姓名</th>
              <th>电话</th>
              <th>所属地产公司</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
              {% if v.status == 1 %}
                <span class=\"text-danger\">{禁用}</span>
              {% else %}
                <span class=\"text-success\">{启用}</span>
              {% endif %}
              </td>
              <td>
                <img src=\"{{ v.head_portrait }}\" class=\"img-responsive\" alt=\"Responsive image\" style=\"width: 90px; height: 90px;\">
              </td>
              <td>{{ v.cname }}</td>
              <td>{{ v.phone }}</td>
              <td>{{ v.belong_company }}</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit({{ v.id }});\">修改</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">删除</button>
                {% if v.status == 1 %}
                  <button type=\"button\" class=\"btn btn-success btn-xs\" onclick=\"flag({{ v.id }},0);\">启用</button>
                {% else %}
                  <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"flag({{ v.id }},1);\">禁用</button>
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
{% endblock %}

{% block js %}
<script src=\"/apps/admin/views/propertyConsultant/js/index.js\"></script>
{% endblock %}", "propertyConsultant/index.html", "D:\\UPUPWAP\\vhosts\\dev.tfw.local\\apps\\admin\\views\\propertyConsultant\\index.html");
    }
}
