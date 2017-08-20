<?php

/* buyHouseCatagory/add.html */
class __TwigTemplate_2f03037a688cc9e8e2f2f2a9de154608f71a93e14b3ab9b7c3d2a9c512cdb774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "buyHouseCatagory/add.html", 1);
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
        <h1 class=\"page-title\"># 购房百科管理</h1>
    </div>
    <div class=\"page-content\">
        <div class=\"panel\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">@ 添加购房百科</h3>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"houseCategoryForm\" action=\"/admin/buyHouseCatagory/add/id/";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">图标 </label>
                        <div class=\"col-sm-10\">
                            <div id=\"preview\">
                                ";
        // line 22
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "icon_path", array())) {
            // line 23
            echo "                                <img border=\"0\" src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "icon_path", array()), "html", null, true);
            echo "\" width=\"90\" height=\"90\" onclick=\"delIp('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "icon_path", array()), "html", null, true);
            echo "');\">
                                <input type=\"hidden\" name=\"ipPath\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "icon_path", array()), "html", null, true);
            echo "\">
                                ";
        } else {
            // line 26
            echo "                                <img id=\"imghead\" border=\"0\" src=\"/apps/admin/views/assets/images/photo_icon.png\" width=\"90\" height=\"90\" onclick=\"\$('#previewImg').click();\">
                                ";
        }
        // line 28
        echo "                            </div>
                            <input type=\"file\" onchange=\"previewImage(this)\" style=\"display: none;\" id=\"previewImg\" name=\"icon_path\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">名称 </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"cname\" placeholder=\"请输入购房百科名称\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cname", array()), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    ";
        // line 38
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "pid", array()) == 0)) {
            // line 39
            echo "                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">父级名称 </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"pcname\"  value=\"顶级\" readonly>
                        </div>
                    </div>
                    ";
        } else {
            // line 46
            echo "                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">父级名称 </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"pcname\"  value=\"";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "pcname", array()), "html", null, true);
            echo "\" readonly>
                        </div>
                    </div>
                    ";
        }
        // line 53
        echo "                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">排序 </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"sort\" placeholder=\"排序？数字越小越靠前\" value=\"";
        // line 56
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
            </div>
        </div>
    </div>
</div>
<!-- End Page -->
";
    }

    // line 71
    public function block_js($context, array $blocks = array())
    {
        // line 72
        echo "<script src=\"/apps/admin/views/buyHouseCatagory/js/add.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "buyHouseCatagory/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 72,  142 => 71,  123 => 56,  118 => 53,  111 => 49,  106 => 46,  97 => 39,  95 => 38,  89 => 35,  80 => 28,  76 => 26,  71 => 24,  64 => 23,  62 => 22,  54 => 17,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
        <h1 class=\"page-title\"># 购房百科管理</h1>
    </div>
    <div class=\"page-content\">
        <div class=\"panel\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">@ 添加购房百科</h3>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"houseCategoryForm\" action=\"/admin/buyHouseCatagory/add/id/{{ data.id }}\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">图标 </label>
                        <div class=\"col-sm-10\">
                            <div id=\"preview\">
                                {% if data.icon_path %}
                                <img border=\"0\" src=\"{{ data.icon_path }}\" width=\"90\" height=\"90\" onclick=\"delIp('{{ data.icon_path }}');\">
                                <input type=\"hidden\" name=\"ipPath\" value=\"{{ data.icon_path }}\">
                                {% else %}
                                <img id=\"imghead\" border=\"0\" src=\"/apps/admin/views/assets/images/photo_icon.png\" width=\"90\" height=\"90\" onclick=\"\$('#previewImg').click();\">
                                {% endif %}
                            </div>
                            <input type=\"file\" onchange=\"previewImage(this)\" style=\"display: none;\" id=\"previewImg\" name=\"icon_path\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">名称 </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"cname\" placeholder=\"请输入购房百科名称\" value=\"{{ data.cname }}\">
                        </div>
                    </div>
                    {% if data.pid == 0 %}
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">父级名称 </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"pcname\"  value=\"顶级\" readonly>
                        </div>
                    </div>
                    {% else %}
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">父级名称 </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"pcname\"  value=\"{{ data.pcname }}\" readonly>
                        </div>
                    </div>
                    {% endif %}
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">排序 </label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"sort\" placeholder=\"排序？数字越小越靠前\" value=\"{{ data.sort }}\">
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
<script src=\"/apps/admin/views/buyHouseCatagory/js/add.js\"></script>
{% endblock %}", "buyHouseCatagory/add.html", "F:\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\buyHouseCatagory\\add.html");
    }
}
