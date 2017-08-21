<?php

/* buyHouseCatagory/add_article.html */
class __TwigTemplate_07926c6d5e477630bcf76c182690e645a7357c9ad6f1175f4122840b0611e273 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "buyHouseCatagory/add_article.html", 1);
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
                <h3 class=\"panel-title\">@ 添加租房详细</h3>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"buyHouseCatagory\" action=\"/admin/buyHouseCatagory/add_article/update_id/";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"hecid\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\">
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">标题</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "title", array()), "html", null, true);
        echo "\" placeholder=\"请输入标题\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">购房百科类别</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"cname\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, ($context["cname"] ?? null), "html", null, true);
        echo "\" readonly>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">内容</label>
                        <div class=\"col-sm-10\">
                            <script id=\"container\" name=\"content\" type=\"text/plain\" style=\"height: 300px;\">";
        // line 34
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "content", array());
        echo "</script>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <button type=\"submit\" class=\"btn btn-success\">提交信息</button>
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

    // line 49
    public function block_js($context, array $blocks = array())
    {
        // line 50
        echo "<script src=\"/apps/admin/views/buyHouseCatagory/js/add_article.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container');
</script>
";
    }

    public function getTemplateName()
    {
        return "buyHouseCatagory/add_article.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 50,  102 => 49,  83 => 34,  74 => 28,  65 => 22,  58 => 18,  54 => 17,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
                <h3 class=\"panel-title\">@ 添加租房详细</h3>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"buyHouseCatagory\" action=\"/admin/buyHouseCatagory/add_article/update_id/{{ data.id }}\" method=\"post\">
                    <input type=\"hidden\" name=\"hecid\" value=\"{{ id }}\">
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">标题</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ data.title }}\" placeholder=\"请输入标题\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">购房百科类别</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"cname\" value=\"{{ cname }}\" readonly>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">内容</label>
                        <div class=\"col-sm-10\">
                            <script id=\"container\" name=\"content\" type=\"text/plain\" style=\"height: 300px;\">{% autoescape false %}{{ data.content }}{% endautoescape %}</script>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <button type=\"submit\" class=\"btn btn-success\">提交信息</button>
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
<script src=\"/apps/admin/views/buyHouseCatagory/js/add_article.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container');
</script>
{% endblock %}", "buyHouseCatagory/add_article.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\buyHouseCatagory\\add_article.html");
    }
}
