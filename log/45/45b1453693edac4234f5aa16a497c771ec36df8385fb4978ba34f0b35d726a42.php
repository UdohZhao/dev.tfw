<?php

/* usedHouseCatalog/add.html */
class __TwigTemplate_a8dc73ebf5fcbd35ab75e0dfc6e29e35907b3ebd7eee3f21493de9ba8a51aa5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "usedHouseCatalog/add.html", 1);
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
                <h3 class=\"panel-title\">@ 添加二手房条目</h3>
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
                <form class=\"form-horizontal\" id=\"newHouseCatalogForm\" action=\"/admin/usedHouseCatalog/add/id/";
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
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">出售价格</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"selling_price\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "selling_price", array()), "html", null, true);
        echo "\" placeholder=\"请输入售价\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">展示价格</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"show_price\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "show_price", array()), "html", null, true);
        echo "\" placeholder=\"请输入展示价格\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">特点</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"trait\" value=\"";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "trait", array()), "html", null, true);
        echo "\" placeholder=\"请输入特点（以英文逗号分隔）例如：AAA,BBB,CCC\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">面积</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"area\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "area", array()), "html", null, true);
        echo "\" placeholder=\"请输入面积\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">备注</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"remark\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "remark", array()), "html", null, true);
        echo "\" placeholder=\"请输入备注\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">户型</label>
                        <div class=\"col-sm-10\">
                            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["htype"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 97
            echo "                            <label class=\"checkbox-inline\">
                                ";
            // line 98
            if (twig_in_filter($context["v"], twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "htype", array()))) {
                // line 99
                echo "                                <input type=\"checkbox\" id=\"htype\" name=\"htype[]\" checked value=\"";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "
                                ";
            } else {
                // line 101
                echo "                                <input type=\"checkbox\" id=\"htype\" name=\"htype[]\"  value=\"";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "
                                ";
            }
            // line 103
            echo "                            </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 105
        echo "                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">产权类型</label>
                        <div class=\"col-sm-10\">
                            ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["prtype"] ?? null));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            // line 111
            echo "                            <label class=\"radio-inline\">
                                ";
            // line 112
            if (((twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "prtype", array()) == $context["k"]) && (twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "prtype", array()) != ""))) {
                // line 113
                echo "                                <input type=\"radio\" name=\"prtype\" checked value=\"";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "
                                ";
            } else {
                // line 115
                echo "                                <input type=\"radio\" name=\"prtype\" value=\"";
                echo twig_escape_filter($this->env, $context["k"], "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, $context["v"], "html", null, true);
                echo "
                                ";
            }
            // line 117
            echo "                            </label>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                        </div>
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

    // line 134
    public function block_js($context, array $blocks = array())
    {
        // line 135
        echo "<script src=\"/public/webuploader-0.1.5/dist/webuploader.js\"></script>
<script type=\"text/javascript\" src=\"/public/webuploader-0.1.5/examples/image-upload/upload.js\"></script>
<script src=\"/apps/admin/views/usedHouseCatalog/js/add.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "usedHouseCatalog/add.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 135,  258 => 134,  240 => 119,  233 => 117,  225 => 115,  217 => 113,  215 => 112,  212 => 111,  208 => 110,  201 => 105,  194 => 103,  186 => 101,  178 => 99,  176 => 98,  173 => 97,  169 => 96,  160 => 90,  150 => 83,  141 => 77,  132 => 71,  123 => 65,  114 => 59,  105 => 53,  96 => 47,  89 => 43,  85 => 42,  81 => 41,  77 => 40,  42 => 7,  39 => 6,  33 => 3,  30 => 2,  11 => 1,);
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
                <h3 class=\"panel-title\">@ 添加二手房条目</h3>
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
                <form class=\"form-horizontal\" id=\"newHouseCatalogForm\" action=\"/admin/usedHouseCatalog/add/id/{{ data.id }}\" method=\"post\">
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
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">出售价格</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"selling_price\" value=\"{{ data.selling_price }}\" placeholder=\"请输入售价\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">展示价格</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"show_price\" value=\"{{ data.show_price }}\" placeholder=\"请输入展示价格\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">特点</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"trait\" value=\"{{ data.trait }}\" placeholder=\"请输入特点（以英文逗号分隔）例如：AAA,BBB,CCC\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">面积</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"area\" value=\"{{ data.area }}\" placeholder=\"请输入面积\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">备注</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" class=\"form-control\" name=\"remark\" value=\"{{ data.remark }}\" placeholder=\"请输入备注\">
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">户型</label>
                        <div class=\"col-sm-10\">
                            {% for k,v in htype %}
                            <label class=\"checkbox-inline\">
                                {% if v in data.htype %}
                                <input type=\"checkbox\" id=\"htype\" name=\"htype[]\" checked value=\"{{ v }}\"> {{ v }}
                                {% else %}
                                <input type=\"checkbox\" id=\"htype\" name=\"htype[]\"  value=\"{{ v }}\"> {{ v }}
                                {% endif %}
                            </label>
                            {% endfor %}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">产权类型</label>
                        <div class=\"col-sm-10\">
                            {% for k,v in prtype %}
                            <label class=\"radio-inline\">
                                {% if data.prtype == k and  data.prtype != '' %}
                                <input type=\"radio\" name=\"prtype\" checked value=\"{{ k }}\"> {{ v }}
                                {% else %}
                                <input type=\"radio\" name=\"prtype\" value=\"{{ k }}\"> {{ v }}
                                {% endif %}
                            </label>
                            {% endfor %}
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
<script src=\"/apps/admin/views/usedHouseCatalog/js/add.js\"></script>
{% endblock %}", "usedHouseCatalog/add.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\usedHouseCatalog\\add.html");
    }
}
