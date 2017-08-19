<?php

/* city/add.html */
class __TwigTemplate_53ef4f85d5ad546abaa705f1c97b1aec328acabfa530d97cc98fa0c2731f4233 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "city/add.html", 1);
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
    <h1 class=\"page-title\"># 城市管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 添加城市";
        // line 14
        if (($context["type"] ?? null)) {
            echo " -> [";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cname", array()), "html", null, true);
            echo "] ";
        }
        echo "</h3>
      </div>
      <div class=\"panel-body\">
      ";
        // line 17
        if (($context["type"] ?? null)) {
            // line 18
            echo "        <form class=\"form-horizontal\" id=\"cityForm\" action=\"/admin/city/add\" method=\"post\">
          <input type=\"hidden\" name=\"pid\" value=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
            echo "\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">名称</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cname\" placeholder=\"请输入城市名称\" >
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">排序 </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"sort\" placeholder=\"请输入排序？数字越小越靠前\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      ";
        } else {
            // line 39
            echo "        <form class=\"form-horizontal\" id=\"cityForm\" action=\"/admin/city/add/id/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
            echo "\" method=\"post\">
          <input type=\"hidden\" name=\"pid\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["pid"] ?? null), "html", null, true);
            echo "\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">名称</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cname\" placeholder=\"请输入城市名称\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cname", array()), "html", null, true);
            echo "\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">排序 </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"sort\" placeholder=\"请输入排序？数字越小越靠前\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "sort", array()), "html", null, true);
            echo "\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      ";
        }
        // line 60
        echo "      </div>
    </div>
  </div>
</div>
<!-- End Page -->
";
    }

    // line 66
    public function block_js($context, array $blocks = array())
    {
        // line 67
        echo "<script src=\"/apps/admin/views/city/js/add.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "city/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 67,  132 => 66,  123 => 60,  110 => 50,  101 => 44,  94 => 40,  89 => 39,  66 => 19,  63 => 18,  61 => 17,  51 => 14,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
    <h1 class=\"page-title\"># 城市管理</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 添加城市{% if type %} -> [{{ data.cname }}] {% endif %}</h3>
      </div>
      <div class=\"panel-body\">
      {% if type %}
        <form class=\"form-horizontal\" id=\"cityForm\" action=\"/admin/city/add\" method=\"post\">
          <input type=\"hidden\" name=\"pid\" value=\"{{ data.id }}\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">名称</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cname\" placeholder=\"请输入城市名称\" >
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">排序 </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"sort\" placeholder=\"请输入排序？数字越小越靠前\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      {% else %}
        <form class=\"form-horizontal\" id=\"cityForm\" action=\"/admin/city/add/id/{{ data.id }}\" method=\"post\">
          <input type=\"hidden\" name=\"pid\" value=\"{{ pid }}\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">名称</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cname\" placeholder=\"请输入城市名称\" value=\"{{ data.cname }}\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">排序 </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"sort\" placeholder=\"请输入排序？数字越小越靠前\" value=\"{{ data.sort }}\">
            </div>
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      {% endif %}
      </div>
    </div>
  </div>
</div>
<!-- End Page -->
{% endblock %}
{% block js %}
<script src=\"/apps/admin/views/city/js/add.js\"></script>
{% endblock %}", "city/add.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\city\\add.html");
    }
}
