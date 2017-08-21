<?php

/* usedHouseInfo/index.html */
class __TwigTemplate_696336d32a83431d3a5399a41929eb0c8c661304ee67798efdc05cdb14910ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "usedHouseInfo/index.html", 1);
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
                <h3 class=\"panel-title\">@ 二手房详细</h3>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"usedHouseInfoForm\" action=\"/admin/usedHouseInfo/index/id/";
        // line 17
        echo twig_escape_filter($this->env, ($context["uhcid"] ?? null), "html", null, true);
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"uhcid\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["uhcid"] ?? null), "html", null, true);
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
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()) == twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "pcid", array()))) {
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
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">单价</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"unit_price\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "unit_price", array()), "html", null, true);
        echo "\" placeholder=\"请输入单价\">
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
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">类型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"type\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "type", array()), "html", null, true);
        echo "\" placeholder=\"请输入类型\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">装修</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"upfitter\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "upfitter", array()), "html", null, true);
        echo "\" placeholder=\"装修\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">年代</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"era\" value=\"";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "era", array()), "html", null, true);
        echo "\" placeholder=\"输入年代\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">小区</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"community\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "community", array()), "html", null, true);
        echo "\" placeholder=\"输入小区\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">轨交</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"rail_transit\" value=\"";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "rail_transit", array()), "html", null, true);
        echo "\" placeholder=\"输入轨交,以英文逗号隔开\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">核心卖点</label>
                        <div class=\"col-sm-10\">
                            <script id=\"container\" name=\"selling_points\" type=\"text/plain\" style=\"height: 300px;\">";
        // line 84
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "selling_points", array());
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

    // line 99
    public function block_js($context, array $blocks = array())
    {
        // line 100
        echo "<script src=\"/apps/admin/views/usedHouseInfo/js/index.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container');
</script>
";
    }

    public function getTemplateName()
    {
        return "usedHouseInfo/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 100,  202 => 99,  183 => 84,  174 => 78,  165 => 72,  156 => 66,  147 => 60,  138 => 54,  129 => 48,  120 => 42,  111 => 36,  103 => 30,  97 => 29,  85 => 27,  73 => 25,  70 => 24,  66 => 23,  58 => 18,  54 => 17,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
                <h3 class=\"panel-title\">@ 二手房详细</h3>
            </div>
            <div class=\"panel-body\">
                <form class=\"form-horizontal\" id=\"usedHouseInfoForm\" action=\"/admin/usedHouseInfo/index/id/{{ uhcid }}\" method=\"post\">
                    <input type=\"hidden\" name=\"uhcid\" value=\"{{ uhcid }}\">
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">选择职业顾问</label>
                        <div class=\"col-sm-10\">
                            <select multiple class=\"form-control\" name=\"pcid\">
                                {% for k,v in pcData %}
                                {% if v.id == data.pcid %}
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
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">单价</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"unit_price\" value=\"{{ data.unit_price }}\" placeholder=\"请输入单价\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">朝向</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"orientation\" value=\"{{ data.orientation }}\" placeholder=\"请输入朝向\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">类型</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"type\" value=\"{{ data.type }}\" placeholder=\"请输入类型\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">装修</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"upfitter\" value=\"{{ data.upfitter }}\" placeholder=\"装修\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">年代</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"era\" value=\"{{ data.era }}\" placeholder=\"输入年代\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">小区</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"community\" value=\"{{ data.community }}\" placeholder=\"输入小区\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">轨交</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"rail_transit\" value=\"{{ data.rail_transit }}\" placeholder=\"输入轨交,以英文逗号隔开\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">核心卖点</label>
                        <div class=\"col-sm-10\">
                            <script id=\"container\" name=\"selling_points\" type=\"text/plain\" style=\"height: 300px;\">{% autoescape false %}{{ data.selling_points }}{% endautoescape %}</script>
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
<script src=\"/apps/admin/views/usedHouseInfo/js/index.js\"></script>
<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container');
</script>
{% endblock %}", "usedHouseInfo/index.html", "D:\\UPUPWAP\\vhosts\\dev.tfw.local\\apps\\admin\\views\\usedHouseInfo\\index.html");
    }
}
