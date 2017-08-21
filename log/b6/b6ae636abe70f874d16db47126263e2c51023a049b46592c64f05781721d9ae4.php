<?php

/* propertyConsultant/add.html */
class __TwigTemplate_ceb0ffb4d84950806389eeed391c30b9745f898329512836afaec9eb279d07fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "propertyConsultant/add.html", 1);
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
        <h3 class=\"panel-title\">@ 添加置业顾问</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"propertyConsultantForm\" action=\"/admin/propertyConsultant/add/id/";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">头像 </label>
            <div class=\"col-sm-10\">
                <div id=\"preview\">
                  ";
        // line 22
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "head_portrait", array())) {
            // line 23
            echo "                    <img border=\"0\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "head_portrait", array()), "html", null, true);
            echo "\" width=\"90\" height=\"90\" onclick=\"delHp('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "head_portrait", array()), "html", null, true);
            echo "');\">
                    <input type=\"hidden\" name=\"hpPath\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "head_portrait", array()), "html", null, true);
            echo "\">
                  ";
        } else {
            // line 26
            echo "                    <img id=\"imghead\" border=\"0\" src=\"/apps/admin/views/assets/images/photo_icon.png\" width=\"90\" height=\"90\" onclick=\"\$('#previewImg').click();\">
                  ";
        }
        // line 28
        echo "                </div>
                <input type=\"file\" onchange=\"previewImage(this)\" style=\"display: none;\" id=\"previewImg\" name=\"head_portrait\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">姓名 </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cname\" placeholder=\"请输入姓名\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cname", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">电话 </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"请输入电话\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "phone", array()), "html", null, true);
        echo "\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">所属地产公司 </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"belong_company\" placeholder=\"请输入所属地产公司\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "belong_company", array()), "html", null, true);
        echo "\">
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
<!-- End Page -->
";
    }

    // line 62
    public function block_js($context, array $blocks = array())
    {
        // line 63
        echo "<script src=\"/apps/admin/views/propertyConsultant/js/add.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "propertyConsultant/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 63,  126 => 62,  107 => 47,  98 => 41,  89 => 35,  80 => 28,  76 => 26,  71 => 24,  64 => 23,  62 => 22,  54 => 17,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
        <h3 class=\"panel-title\">@ 添加置业顾问</h3>
      </div>
      <div class=\"panel-body\">
        <form class=\"form-horizontal\" id=\"propertyConsultantForm\" action=\"/admin/propertyConsultant/add/id/{{ data.id }}\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">头像 </label>
            <div class=\"col-sm-10\">
                <div id=\"preview\">
                  {% if data.head_portrait %}
                    <img border=\"0\" src=\"{{ data.head_portrait }}\" width=\"90\" height=\"90\" onclick=\"delHp('{{ data.head_portrait }}');\">
                    <input type=\"hidden\" name=\"hpPath\" value=\"{{ data.head_portrait }}\">
                  {% else %}
                    <img id=\"imghead\" border=\"0\" src=\"/apps/admin/views/assets/images/photo_icon.png\" width=\"90\" height=\"90\" onclick=\"\$('#previewImg').click();\">
                  {% endif %}
                </div>
                <input type=\"file\" onchange=\"previewImage(this)\" style=\"display: none;\" id=\"previewImg\" name=\"head_portrait\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">姓名 </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"cname\" placeholder=\"请输入姓名\" value=\"{{ data.cname }}\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">电话 </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"phone\" placeholder=\"请输入电话\" value=\"{{ data.phone }}\">
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">所属地产公司 </label>
            <div class=\"col-sm-10\">
              <input type=\"text\" class=\"form-control\" name=\"belong_company\" placeholder=\"请输入所属地产公司\" value=\"{{ data.belong_company }}\">
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
<!-- End Page -->
{% endblock %}
{% block js %}
<script src=\"/apps/admin/views/propertyConsultant/js/add.js\"></script>
{% endblock %}", "propertyConsultant/add.html", "D:\\UPUPWAP\\vhosts\\dev.tfw.local\\apps\\admin\\views\\propertyConsultant\\add.html");
    }
}
