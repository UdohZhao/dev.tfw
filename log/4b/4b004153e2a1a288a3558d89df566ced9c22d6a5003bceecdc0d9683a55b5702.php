<?php

/* tenmentInfo/add.html */
class __TwigTemplate_8ee88b732edf73f70e2400afca65e306048603cce4658c3affba1e3689194108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "tenmentInfo/add.html", 1);
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
                <form class=\"form-horizontal\" id=\"usedHouseInfoForm\" action=\"/admin/tenmentInfo/add/id/";
        // line 17
        echo twig_escape_filter($this->env, ($context["tcid"] ?? null), "html", null, true);
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"tcid\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["tcid"] ?? null), "html", null, true);
        echo "\">
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">选择职业顾问</label>
                        <div class=\"col-sm-10\">
                            <select multiple class=\"form-control\" name=\"pcid\">
                                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pcData"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 24
            echo "                                ";
            if (($context["k"] == 0)) {
                // line 25
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "\" selected=\"selected\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo " # ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "phone", array()), "html", null, true);
                echo " # ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "belong_company", array()), "html", null, true);
                echo "</option>
                                ";
            } else {
                // line 27
                echo "                                <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo " # ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "phone", array()), "html", null, true);
                echo " # ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "belong_company", array()), "html", null, true);
                echo "</option>
                                ";
            }
            // line 29
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                            </select>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">楼层</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"tage\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "tage", array()), "html", null, true);
        echo "\" placeholder=\"请输入楼层\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">面积</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"area\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "area", array()), "html", null, true);
        echo "\" placeholder=\"请输入面积\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">朝向</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"orientation\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "orientation", array()), "html", null, true);
        echo "\" placeholder=\"请输入朝向\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房屋类型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"htype\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "htype", array()), "html", null, true);
        echo "\" placeholder=\"请输入房屋类型\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房屋配置</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"hconfig\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "hconfig", array()), "html", null, true);
        echo "\" placeholder=\"输入房屋配置,以英文逗号隔开，如:洗衣机,空调,宽带...\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">房源概况</label>
                        <div class=\"col-sm-10\">
                            <script id=\"container\" name=\"general_situation\" type=\"text/plain\" style=\"height: 300px;\">";
        // line 66
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "general_situation", array());
        echo "</script>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <button type=\"submit\" class=\"btn btn-success\">添加信息</button>
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

    // line 81
    public function block_js($context, array $blocks = array())
    {
        // line 82
        echo "<script src=\"/apps/admin/views/tenmentInfo/js/add.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container');
</script>
";
    }

    public function getTemplateName()
    {
        return "tenmentInfo/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 82,  175 => 81,  156 => 66,  147 => 60,  138 => 54,  129 => 48,  120 => 42,  111 => 36,  103 => 30,  97 => 29,  85 => 27,  73 => 25,  70 => 24,  66 => 23,  58 => 18,  54 => 17,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
                <form class=\"form-horizontal\" id=\"usedHouseInfoForm\" action=\"/admin/tenmentInfo/add/id/{{ tcid }}\" method=\"post\">
                    <input type=\"hidden\" name=\"tcid\" value=\"{{ tcid }}\">
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">选择职业顾问</label>
                        <div class=\"col-sm-10\">
                            <select multiple class=\"form-control\" name=\"pcid\">
                                {% for k,v in pcData %}
                                {% if k == 0 %}
                                <option value=\"{{ v.id }}\" selected=\"selected\">{{ v.cname }} # {{ v.phone }} # {{ v.belong_company }}</option>
                                {% else %}
                                <option value=\"{{ v.id }}\">{{ v.cname }} # {{ v.phone }} # {{ v.belong_company }}</option>
                                {% endif %}
                                {% endfor %}
                            </select>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">楼层</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"tage\" value=\"{{ data.tage }}\" placeholder=\"请输入楼层\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">面积</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"area\" value=\"{{ data.area }}\" placeholder=\"请输入面积\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">朝向</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"orientation\" value=\"{{ data.orientation }}\" placeholder=\"请输入朝向\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房屋类型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"htype\" value=\"{{ data.htype }}\" placeholder=\"请输入房屋类型\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">房屋配置</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"hconfig\" value=\"{{ data.hconfig }}\" placeholder=\"输入房屋配置,以英文逗号隔开，如:洗衣机,空调,宽带...\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">房源概况</label>
                        <div class=\"col-sm-10\">
                            <script id=\"container\" name=\"general_situation\" type=\"text/plain\" style=\"height: 300px;\">{% autoescape false %}{{ data.general_situation }}{% endautoescape %}</script>
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"col-sm-offset-2 col-sm-10\">
                            <button type=\"submit\" class=\"btn btn-success\">添加信息</button>
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
<script src=\"/apps/admin/views/tenmentInfo/js/add.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container');
</script>
{% endblock %}", "tenmentInfo/add.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\tenmentInfo\\add.html");
    }
}
