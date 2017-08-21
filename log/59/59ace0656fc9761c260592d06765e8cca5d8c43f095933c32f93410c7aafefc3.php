<?php

/* about/index.html */
class __TwigTemplate_7ef4991a443bee30026aa13f17d3be5a0d8fba5db587e5d19a01ab04914cbbfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "about/index.html", 1);
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
    <h1 class=\"page-title\"># 关于我们</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 关于我们列表</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>内容</th>
              <th>录入时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 27
        if (($context["data"] ?? null)) {
            // line 28
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 29
                echo "            <tr>
              <td>
              </td>
              <td>";
                // line 33
                echo "              ";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "content", array());
                echo " 
            ";
                // line 34
                echo "</td>
              <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ctime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit('";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "');\">修改内容</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del('";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "');\">删除</button>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "          ";
        } else {
            // line 43
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 51
        echo "          </tbody>
        </table>

          <div style=\"float: right;\">
            ";
        // line 56
        echo "              ";
        echo ($context["page"] ?? null);
        echo "
            ";
        // line 58
        echo "          </div>

      </div>
    </div>
  </div>
</div>
";
    }

    // line 66
    public function block_js($context, array $blocks = array())
    {
        // line 67
        echo "
<script src=\"/apps/admin/views/about/js/index.js\"></script>

";
    }

    public function getTemplateName()
    {
        return "about/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 67,  137 => 66,  127 => 58,  122 => 56,  116 => 51,  106 => 43,  103 => 42,  93 => 38,  89 => 37,  84 => 35,  81 => 34,  76 => 33,  71 => 29,  66 => 28,  64 => 27,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
    <h1 class=\"page-title\"># 关于我们</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 关于我们列表</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>内容</th>
              <th>录入时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
              </td>
              <td>{% autoescape false %}
              {{ v.content }} 
            {% endautoescape %}</td>
              <td>{{ v.ctime|date(\"Y-m-d H:i\") }}</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit('{{ v.id }}');\">修改内容</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del('{{ v.id }}');\">删除</button>
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
{% endblock %}

{% block js %}

<script src=\"/apps/admin/views/about/js/index.js\"></script>

{% endblock %}
", "about/index.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\about\\index.html");
    }
}
