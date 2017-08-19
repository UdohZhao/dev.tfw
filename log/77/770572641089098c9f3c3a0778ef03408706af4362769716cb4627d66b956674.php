<?php

/* sellHouseInfo/add.html */
class __TwigTemplate_9e5f9147234c8afcddb1b633233788a13bcd766558af92fb04607acf66130006 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "sellHouseInfo/add.html", 1);
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
                <h3 class=\"panel-title\">@ 添加卖房房条目</h3>
            </div>
            <div id=\"wrapper\">
                <div id=\"container\">
                    <!--头部，相册选择和格式选择-->
                    <div id=\"uploader\">
                        <div class=\"queueList\">
                            <div id=\"dndArea\" class=\"placeholder\">
                                <div id=\"filePicker\"></div>
                                <p>请选择需要上传的房屋图片，单次最多可选300张</p>
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
                <form class=\"form-horizontal\" id=\"newHouseCatalogForm\" action=\"/admin/sellHouseInfo/add/id/";
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
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">小区</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"community\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "community", array()), "html", null, true);
        echo "\" placeholder=\"请输入小区\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"house_type\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "house_type", array()), "html", null, true);
        echo "\" placeholder=\"请输入房型，几室几厅几卫生，以英文逗号隔开，例如：AAA,BBB,CCC\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">售价</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"selling_price\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "selling_price", array()), "html", null, true);
        echo "\" placeholder=\"请输入售价\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房屋类型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"htype\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "htype", array()), "html", null, true);
        echo "\" placeholder=\"请输入房屋类型\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">朝向</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"orientation\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "orientation", array()), "html", null, true);
        echo "\" placeholder=\"请输入朝向\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">姓名</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"cname\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "cname", array()), "html", null, true);
        echo "\" placeholder=\"请输入姓名\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">联系电话</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"phone\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "phone", array()), "html", null, true);
        echo "\" placeholder=\"请输入联系电话\">
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
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">房源概况</label>
                        <div class=\"col-sm-10\">
                            <script id=\"container1\" name=\"general_situation\" type=\"text/plain\" style=\"height: 300px;\">";
        // line 105
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "general_situation", array());
        echo "</script>
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

    // line 121
    public function block_js($context, array $blocks = array())
    {
        // line 122
        echo "<script src=\"/public/webuploader-0.1.5/dist/webuploader.js\"></script>
<script type=\"text/javascript\" src=\"/public/webuploader-0.1.5/examples/image-upload/upload.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container1');
</script>
";
    }

    public function getTemplateName()
    {
        return "sellHouseInfo/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 122,  195 => 121,  175 => 105,  150 => 83,  141 => 77,  132 => 71,  123 => 65,  114 => 59,  105 => 53,  96 => 47,  89 => 43,  85 => 42,  81 => 41,  77 => 40,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
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
                <h3 class=\"panel-title\">@ 添加卖房房条目</h3>
            </div>
            <div id=\"wrapper\">
                <div id=\"container\">
                    <!--头部，相册选择和格式选择-->
                    <div id=\"uploader\">
                        <div class=\"queueList\">
                            <div id=\"dndArea\" class=\"placeholder\">
                                <div id=\"filePicker\"></div>
                                <p>请选择需要上传的房屋图片，单次最多可选300张</p>
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
                <form class=\"form-horizontal\" id=\"newHouseCatalogForm\" action=\"/admin/sellHouseInfo/add/id/{{ data.id }}\" method=\"post\">
                    <input type=\"hidden\" name=\"pid\" value=\"{{ pid }}\">
                    <input type=\"hidden\" name=\"hcid\" value=\"{{ hcid }}\">
                    <input type=\"hidden\" name=\"slideshow\" value=\"{{ data.slideshow }}\">
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">小区</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"community\" value=\"{{ data.community }}\" placeholder=\"请输入小区\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"house_type\" value=\"{{ data.house_type }}\" placeholder=\"请输入房型，几室几厅几卫生，以英文逗号隔开，例如：AAA,BBB,CCC\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">售价</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"selling_price\" value=\"{{ data.selling_price }}\" placeholder=\"请输入售价\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房屋类型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"htype\" value=\"{{ data.htype }}\" placeholder=\"请输入房屋类型\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">朝向</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"orientation\" value=\"{{ data.orientation }}\" placeholder=\"请输入朝向\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">姓名</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"cname\" value=\"{{ data.cname }}\" placeholder=\"请输入姓名\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">联系电话</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"phone\" value=\"{{ data.phone }}\" placeholder=\"请输入联系电话\">
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
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">房源概况</label>
                        <div class=\"col-sm-10\">
                            <script id=\"container1\" name=\"general_situation\" type=\"text/plain\" style=\"height: 300px;\">{% autoescape false %}{{ data.general_situation }}{% endautoescape %}</script>
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
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container1');
</script>
{% endblock %}", "sellHouseInfo/add.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\sellHouseInfo\\add.html");
    }
}
