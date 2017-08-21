<?php

/* newHouseCatalog/index.html */
class __TwigTemplate_b14a025644dfe46664de188afdf14fd1afa9cfb376806b275aad17bf9f46f952 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "newHouseCatalog/index.html", 1);
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
    <h1 class=\"page-title\"># 房屋管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 新房条目列表</h3>
      </div>
      <form action=\"/admin/newHouseCatalog/index\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入关键字\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <ul class=\"nav nav-pills\" style=\"margin-left: 25px;\">
        <li role=\"presentation\" ";
        // line 25
        if ((($context["status"] ?? null) == 0)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/newHouseCatalog/index/status/0\">默认</a></li>
        <li role=\"presentation\" ";
        // line 26
        if ((($context["status"] ?? null) == 1)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/newHouseCatalog/index/status/1\">待审核</a></li>
        <li role=\"presentation\" ";
        // line 27
        if ((($context["status"] ?? null) == 2)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/newHouseCatalog/index/status/2\">未通过</a></li>
        <li role=\"presentation\" ";
        // line 28
        if ((($context["status"] ?? null) == 3)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/newHouseCatalog/index/status/3\">已通过</a></li>
      </ul>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>所属城市</th>
              <th>标题</th>
              <th>展示价格</th>
              <th>特点</th>
              <th>面积</th>
              <th>地址</th>
              <th>时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 46
        if (($context["data"] ?? null)) {
            // line 47
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 48
                echo "            <tr>
              <td>
                ";
                // line 50
                if ((($context["status"] ?? null) == 4)) {
                    // line 51
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 1)) {
                        // line 52
                        echo "                    <span class=\"text-danger\">{隐藏}</span>
                  ";
                    } else {
                        // line 54
                        echo "                    <span class=\"text-success\">{展示}</span>
                  ";
                    }
                    // line 56
                    echo "                ";
                }
                // line 57
                echo "              </td>
              <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cityname", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "title", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "show_price", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "trait", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "area", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "address", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ctime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"nhInfo(";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">详细信息</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"nhmInfo(";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">主力户型</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">提交审核</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit(";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">修改</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "          ";
        } else {
            // line 75
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 83
        echo "          </tbody>
        </table>

          <div style=\"float: right;\">
            ";
        // line 88
        echo "              ";
        echo ($context["page"] ?? null);
        echo "
            ";
        // line 90
        echo "          </div>

      </div>
    </div>
  </div>
</div>
<!-- End Page -->
";
    }

    // line 99
    public function block_js($context, array $blocks = array())
    {
        // line 100
        echo "<script src=\"/apps/admin/views/newHouseCatalog/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "newHouseCatalog/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 100,  223 => 99,  212 => 90,  207 => 88,  201 => 83,  191 => 75,  188 => 74,  178 => 70,  174 => 69,  170 => 68,  166 => 67,  162 => 66,  157 => 64,  153 => 63,  149 => 62,  145 => 61,  141 => 60,  137 => 59,  133 => 58,  130 => 57,  127 => 56,  123 => 54,  119 => 52,  116 => 51,  114 => 50,  110 => 48,  105 => 47,  103 => 46,  80 => 28,  74 => 27,  68 => 26,  62 => 25,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
    <h1 class=\"page-title\"># 房屋管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 新房条目列表</h3>
      </div>
      <form action=\"/admin/newHouseCatalog/index\" method=\"post\">
        <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
          <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入关键字\">
          <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
        </div>
      </form>
      <ul class=\"nav nav-pills\" style=\"margin-left: 25px;\">
        <li role=\"presentation\" {% if status == 0 %}class=\"active\"{% endif %}><a href=\"/admin/newHouseCatalog/index/status/0\">默认</a></li>
        <li role=\"presentation\" {% if status == 1 %}class=\"active\"{% endif %}><a href=\"/admin/newHouseCatalog/index/status/1\">待审核</a></li>
        <li role=\"presentation\" {% if status == 2 %}class=\"active\"{% endif %}><a href=\"/admin/newHouseCatalog/index/status/2\">未通过</a></li>
        <li role=\"presentation\" {% if status == 3 %}class=\"active\"{% endif %}><a href=\"/admin/newHouseCatalog/index/status/3\">已通过</a></li>
      </ul>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>所属城市</th>
              <th>标题</th>
              <th>展示价格</th>
              <th>特点</th>
              <th>面积</th>
              <th>地址</th>
              <th>时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
                {% if status == 4 %}
                  {% if v.type == 1 %}
                    <span class=\"text-danger\">{隐藏}</span>
                  {% else %}
                    <span class=\"text-success\">{展示}</span>
                  {% endif %}
                {% endif %}
              </td>
              <td>{{ v.cityname }}</td>
              <td>{{ v.title }}</td>
              <td>{{ v.show_price }}</td>
              <td>{{ v.trait }}</td>
              <td>{{ v.area }}</td>
              <td>{{ v.address }}</td>
              <td>{{ v.ctime|date(\"Y-m-d H:i\") }}</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"nhInfo({{ v.id }});\">详细信息</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"nhmInfo({{ v.id }});\">主力户型</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">提交审核</button>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit({{ v.id }});\">修改</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">删除</button>
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
<script src=\"/apps/admin/views/newHouseCatalog/js/index.js\"></script>
{% endblock %}", "newHouseCatalog/index.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\newHouseCatalog\\index.html");
    }
}
