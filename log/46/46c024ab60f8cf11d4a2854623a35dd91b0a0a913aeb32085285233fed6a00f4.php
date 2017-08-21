<?php

/* tenmentCatalog/add.html */
class __TwigTemplate_4c293499df2353b58ead05555873cfa1c190e15722d7cbe5ee56806b64a23b6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "tenmentCatalog/add.html", 1);
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
        echo "<link rel=\"stylesheet\" href=\"/public/webuploader-0.1.5/dist/webuploader.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/webuploader-0.1.5/examples/image-upload/style.css\" />
";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<!-- Page -->
<div class=\"page animsition\">
    <div class=\"page-header\">
        <h1 class=\"page-title\"># 房屋管理</h1>
    </div>
    <div class=\"page-content\">
        <div class=\"panel\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">@ 添加出租房条目</h3>
            </div>
            <div id=\"wrapper\">
                <div id=\"container\">
                    <!--头部，相册选择和格式选择-->
                    <div id=\"uploader\">
                        <div class=\"queueList\">
                            <div id=\"dndArea\" class=\"placeholder\">
                                <div id=\"filePicker\"></div>
                                <p>请选择需要上传的轮播图片，单次最多可选300张</p>
                            </div>
                        </div>
                        <div class=\"statusBar\" style=\"display:none;\">
                            <div class=\"progress\">
                                <span class=\"text\">0%</span>
                                <span class=\"percentage\"></span>
                            </div><div class=\"info\"></div>
                            <div class=\"btns\">
                                <div id=\"filePicker2\"></div><div class=\"uploadBtn\">开始上传</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"newHouseCatalogForm\" action=\"/admin/tenmentCatalog/add/id/";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "id", array()), "html", null, true);
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"pid\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["pid"] ?? null), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"hcid\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, ($context["hcid"] ?? null), "html", null, true);
        echo "\">
                    <input type=\"hidden\" name=\"slideshow\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "slideshow", array()), "html", null, true);
        echo "\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">关联城市</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"cid\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cid", array()), "html", null, true);
        echo "\" placeholder=\"请输入城市名称\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">标题</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "title", array()), "html", null, true);
        echo "\" placeholder=\"请输入标题\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">小区</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"community\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "community", array()), "html", null, true);
        echo "\" placeholder=\"请输入小区\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"house_type\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "house_type", array()), "html", null, true);
        echo "\" placeholder=\"请输入房型，以英文逗号隔开，例如：AAA,BBB,CCC\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">租金</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"rent\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "rent", array()), "html", null, true);
        echo "\" placeholder=\"请输入租金\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">展示祖金</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"show_rent\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "show_rent", array()), "html", null, true);
        echo "\" placeholder=\"请输入展示价格\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">备注</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"remark\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "remark", array()), "html", null, true);
        echo "\" placeholder=\"请输入备注\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">装修类型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"radio\" class=\"dtype\" name=\"dtype\"  value=\"0\"> 精装
                            <input type=\"radio\" class=\"dtype\" name=\"dtype\" value=\"1\"> 中装
                            <input type=\"radio\" class=\"dtype\" name=\"dtype\" value=\"2\"> 简装
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">租房类型</label>
                        <div class=\"col-sm-10\">
                                <input type=\"radio\" class=\"htype\" name=\"htype\"  value=\"0\"> 整租
                                <input type=\"radio\" class=\"htype\" name=\"htype\" value=\"1\"> 合租
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <button type=\"submit\" class=\"btn btn-success\">下一步</button>
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

    // line 115
    public function block_js($context, array $blocks = array())
    {
        // line 116
        echo "<script src=\"/public/webuploader-0.1.5/dist/webuploader.js\"></script>
<script type=\"text/javascript\" src=\"/public/webuploader-0.1.5/examples/image-upload/upload.js\"></script>
<script src=\"/apps/admin/views/tenmentCatalog/js/add.js\"></script>
<script>
    var _htype='";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "htype", array()), "html", null, true);
        echo "';
    var _dtype='";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "dtype", array()), "html", null, true);
        echo "';
</script>
";
    }

    public function getTemplateName()
    {
        return "tenmentCatalog/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 121,  195 => 120,  189 => 116,  186 => 115,  150 => 83,  141 => 77,  132 => 71,  123 => 65,  114 => 59,  105 => 53,  96 => 47,  89 => 43,  85 => 42,  81 => 41,  77 => 40,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layouts.html\" %}
{% block css %}
<link rel=\"stylesheet\" href=\"/public/webuploader-0.1.5/dist/webuploader.css\">
<link rel=\"stylesheet\" type=\"text/css\" href=\"/public/webuploader-0.1.5/examples/image-upload/style.css\" />
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
                <h3 class=\"panel-title\">@ 添加出租房条目</h3>
            </div>
            <div id=\"wrapper\">
                <div id=\"container\">
                    <!--头部，相册选择和格式选择-->
                    <div id=\"uploader\">
                        <div class=\"queueList\">
                            <div id=\"dndArea\" class=\"placeholder\">
                                <div id=\"filePicker\"></div>
                                <p>请选择需要上传的轮播图片，单次最多可选300张</p>
                            </div>
                        </div>
                        <div class=\"statusBar\" style=\"display:none;\">
                            <div class=\"progress\">
                                <span class=\"text\">0%</span>
                                <span class=\"percentage\"></span>
                            </div><div class=\"info\"></div>
                            <div class=\"btns\">
                                <div id=\"filePicker2\"></div><div class=\"uploadBtn\">开始上传</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"newHouseCatalogForm\" action=\"/admin/tenmentCatalog/add/id/{{ data.id }}\" method=\"post\">
                    <input type=\"hidden\" name=\"pid\" value=\"{{ pid }}\">
                    <input type=\"hidden\" name=\"hcid\" value=\"{{ hcid }}\">
                    <input type=\"hidden\" name=\"slideshow\" value=\"{{ data.slideshow }}\">
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">关联城市</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"cid\" value=\"{{ data.cid }}\" placeholder=\"请输入城市名称\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">标题</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"title\" value=\"{{ data.title }}\" placeholder=\"请输入标题\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">小区</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"community\" value=\"{{ data.community }}\" placeholder=\"请输入小区\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"house_type\" value=\"{{ data.house_type }}\" placeholder=\"请输入房型，以英文逗号隔开，例如：AAA,BBB,CCC\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">租金</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"rent\" value=\"{{ data.rent }}\" placeholder=\"请输入租金\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">展示祖金</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"show_rent\" value=\"{{ data.show_rent }}\" placeholder=\"请输入展示价格\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">备注</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"remark\" value=\"{{ data.remark }}\" placeholder=\"请输入备注\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">装修类型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"radio\" class=\"dtype\" name=\"dtype\"  value=\"0\"> 精装
                            <input type=\"radio\" class=\"dtype\" name=\"dtype\" value=\"1\"> 中装
                            <input type=\"radio\" class=\"dtype\" name=\"dtype\" value=\"2\"> 简装
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">租房类型</label>
                        <div class=\"col-sm-10\">
                                <input type=\"radio\" class=\"htype\" name=\"htype\"  value=\"0\"> 整租
                                <input type=\"radio\" class=\"htype\" name=\"htype\" value=\"1\"> 合租
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <button type=\"submit\" class=\"btn btn-success\">下一步</button>
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
<script src=\"/apps/admin/views/tenmentCatalog/js/add.js\"></script>
<script>
    var _htype='{{data.htype}}';
    var _dtype='{{data.dtype}}';
</script>
{% endblock %}", "tenmentCatalog/add.html", "D:\\UPUPWAP\\vhosts\\dev.tfw.local\\apps\\admin\\views\\tenmentCatalog\\add.html");
    }
}
