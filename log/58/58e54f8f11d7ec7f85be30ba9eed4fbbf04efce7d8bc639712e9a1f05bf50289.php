<?php

/* buyHouseCatagory/index.html */
class __TwigTemplate_a036ebca9fce5df8e752364875b8a2e95384ff0646dc3d99fe7ac1d37fe2d21c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "buyHouseCatagory/index.html", 1);
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
                <h3 class=\"panel-title\">@ 购房百科列表</h3>
            </div>
            <form action=\"/admin/buyHouseCatagory/index\" method=\"post\">
                <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
                    <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入关键字\">
                    <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
                </div>
            </form>
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>图标</th>
                        <th>名称</th>
                        <th>父级名称</th>
                        <th>排序</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 37
        if (($context["data"] ?? null)) {
            // line 38
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 39
                echo "                    <tr>
                        <td>
                            ";
                // line 41
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 1)) {
                    // line 42
                    echo "                            <span class=\"text-danger\">{隐藏}</span>
                            ";
                } else {
                    // line 44
                    echo "                            <span class=\"text-success\">{显示}</span>
                            ";
                }
                // line 46
                echo "                        </td>
                        <td>
                            <img src=\"";
                // line 48
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "icon_path", array()), "html", null, true);
                echo "\" class=\"img-responsive\" style=\"width: 50px; height: 50px;\">
                        </td>
                        <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 52
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "pcname", array())) {
                    // line 53
                    echo "                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "pcname", array()), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 55
                    echo "                            顶级
                            ";
                }
                // line 57
                echo "                        </td>
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "sort", array()), "html", null, true);
                echo "</td>
                        <td>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit(";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">修改</button>
                            <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del(";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"add(";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">添加下一级</button>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"view_next(";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">查看下一级</button>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"add_article(";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ",'";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "');\">添加文章</button>
                            <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"show_article_list(";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">查看文章列表</button>
                            ";
                // line 66
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "status", array()) == 1)) {
                    // line 67
                    echo "                            <button type=\"button\" class=\"btn btn-success btn-xs\" onclick=\"flag(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",0);\">显示</button>
                            ";
                } else {
                    // line 69
                    echo "                            <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"flag(";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                    echo ",1);\">隐藏</button>
                            ";
                }
                // line 71
                echo "                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "                    ";
        } else {
            // line 75
            echo "                    <tr>
                        <td colspan=\"4\">
                            <blockquote>
                                <p>暂无数据 :(</p>
                            </blockquote>
                        </td>
                    </tr>
                    ";
        }
        // line 83
        echo "                    </tbody>
                </table>

                <div style=\"float: right;\">
                    ";
        // line 88
        echo "                    ";
        echo ($context["page"] ?? null);
        echo "
                    ";
        // line 90
        echo "                </div>

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
        echo "<script src=\"/apps/admin/views/buyHouseCatagory/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "buyHouseCatagory/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 100,  212 => 99,  201 => 90,  196 => 88,  190 => 83,  180 => 75,  177 => 74,  169 => 71,  163 => 69,  157 => 67,  155 => 66,  151 => 65,  145 => 64,  141 => 63,  137 => 62,  133 => 61,  129 => 60,  124 => 58,  121 => 57,  117 => 55,  111 => 53,  109 => 52,  104 => 50,  99 => 48,  95 => 46,  91 => 44,  87 => 42,  85 => 41,  81 => 39,  76 => 38,  74 => 37,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
                <h3 class=\"panel-title\">@ 购房百科列表</h3>
            </div>
            <form action=\"/admin/buyHouseCatagory/index\" method=\"post\">
                <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
                    <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入关键字\">
                    <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
                </div>
            </form>
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>图标</th>
                        <th>名称</th>
                        <th>父级名称</th>
                        <th>排序</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% if data %}
                    {% for k,v in data %}
                    <tr>
                        <td>
                            {% if v.status == 1 %}
                            <span class=\"text-danger\">{隐藏}</span>
                            {% else %}
                            <span class=\"text-success\">{显示}</span>
                            {% endif %}
                        </td>
                        <td>
                            <img src=\"{{ v.icon_path }}\" class=\"img-responsive\" style=\"width: 50px; height: 50px;\">
                        </td>
                        <td>{{ v.cname }}</td>
                        <td>
                            {% if v.pcname %}
                            {{ v.pcname }}
                            {% else %}
                            顶级
                            {% endif %}
                        </td>
                        <td>{{ v.sort }}</td>
                        <td>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"edit({{ v.id }});\">修改</button>
                            <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del({{ v.id }});\">删除</button>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"add({{ v.id }});\">添加下一级</button>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"view_next({{ v.id }});\">查看下一级</button>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"add_article({{ v.id }},'{{v.cname}}');\">添加文章</button>
                            <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"show_article_list({{ v.id }});\">查看文章列表</button>
                            {% if v.status == 1 %}
                            <button type=\"button\" class=\"btn btn-success btn-xs\" onclick=\"flag({{ v.id }},0);\">显示</button>
                            {% else %}
                            <button type=\"button\" class=\"btn btn-danger btn-xs\" onclick=\"flag({{ v.id }},1);\">隐藏</button>
                            {% endif %}
                        </td>
                    </tr>
                    {% endfor %}
                    {% else %}
                    <tr>
                        <td colspan=\"4\">
                            <blockquote>
                                <p>暂无数据 :(</p>
                            </blockquote>
                        </td>
                    </tr>
                    {% endif %}
                    </tbody>
                </table>

                <div style=\"float: right;\">
                    {% autoescape false %}
                    {{ page }}
                    {% endautoescape %}
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Page -->
{% endblock %}

{% block js %}
<script src=\"/apps/admin/views/buyHouseCatagory/js/index.js\"></script>
{% endblock %}", "buyHouseCatagory/index.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\buyHouseCatagory\\index.html");
    }
}
