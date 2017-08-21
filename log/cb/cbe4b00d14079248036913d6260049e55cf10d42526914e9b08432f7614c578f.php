<?php

/* loan/add.html */
class __TwigTemplate_9804d57ee82cf06d1d52c60b0dc694f1b0a36195e9847f216439e0e94b468720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "loan/add.html", 1);
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
        <h1 class=\"page-title\"># 金融贷款</h1>
    </div>
    <div class=\"page-content\">
        <div class=\"panel\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">@ 添加金融贷款</h3>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"usedHouseInfoForm\" action=\"/admin/loan/add\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">姓名</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"cname\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cname", array()), "html", null, true);
        echo "\" placeholder=\"请输入姓名\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">电话号码</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"phone\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "phone", array()), "html", null, true);
        echo "\" placeholder=\"请输入电话号码\">
                        </div>
                    </div>
                     <div class=\"form-group\">
                        <label for=\"inputPassword3\"  class=\"col-sm-2 control-label\">类型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"radio\" class=\"dtype\" id=\"dtype\" name=\"type\" value=\"0\"> 抵押贷款
                            <input type=\"radio\" class=\"dtype\" id=\"dtype\" name=\"type\" value=\"1\"> 信用贷款
                            <input type=\"radio\" class=\"dtype\" id=\"dtype\" name=\"type\" value=\"2\"> 组合贷款
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

    // line 50
    public function block_js($context, array $blocks = array())
    {
        // line 51
        echo "<script src=\"/public/webuploader-0.1.5/dist/webuploader.js\"></script>
<script type=\"text/javascript\" src=\"/public/webuploader-0.1.5/examples/image-upload/upload.js\"></script>
<script src=\"/apps/admin/views/loan/js/add.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "loan/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 51,  94 => 50,  67 => 27,  58 => 21,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
        <h1 class=\"page-title\"># 金融贷款</h1>
    </div>
    <div class=\"page-content\">
        <div class=\"panel\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">@ 添加金融贷款</h3>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"usedHouseInfoForm\" action=\"/admin/loan/add\" method=\"post\">
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">姓名</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"cname\" value=\"{{ data.cname }}\" placeholder=\"请输入姓名\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">电话号码</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"phone\" value=\"{{ data.phone }}\" placeholder=\"请输入电话号码\">
                        </div>
                    </div>
                     <div class=\"form-group\">
                        <label for=\"inputPassword3\"  class=\"col-sm-2 control-label\">类型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"radio\" class=\"dtype\" id=\"dtype\" name=\"type\" value=\"0\"> 抵押贷款
                            <input type=\"radio\" class=\"dtype\" id=\"dtype\" name=\"type\" value=\"1\"> 信用贷款
                            <input type=\"radio\" class=\"dtype\" id=\"dtype\" name=\"type\" value=\"2\"> 组合贷款
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
<script src=\"/public/webuploader-0.1.5/dist/webuploader.js\"></script>
<script type=\"text/javascript\" src=\"/public/webuploader-0.1.5/examples/image-upload/upload.js\"></script>
<script src=\"/apps/admin/views/loan/js/add.js\"></script>
{% endblock %}", "loan/add.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\loan\\add.html");
    }
}
