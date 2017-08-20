<?php

/* tenmentCatalog/index.html */
class __TwigTemplate_5bf10aea7a7c2eef7bd2dd6aa2d242e88f20e1aa0a19ca2f8154fea930bd1521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "tenmentCatalog/index.html", 1);
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
                <h3 class=\"panel-title\">@ 租房条目列表</h3>
            </div>

            <form action=\"/admin/tenmentCatalog/index\" method=\"get\">
                <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
                    <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入关键字\">
                    <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
                </div>
            </form>
            <ul class=\"nav nav-pills\" style=\"margin-left: 25px;\">
                <li role=\"presentation\" ";
        // line 26
        if ((($context["status"] ?? null) == 0)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/tenmentCatalog/index/status/0\">待审核</a></li>
                <li role=\"presentation\" ";
        // line 27
        if ((($context["status"] ?? null) == 1)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/tenmentCatalog/index/status/1\">未通过</a></li>
                <li role=\"presentation\" ";
        // line 28
        if ((($context["status"] ?? null) == 2)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/tenmentCatalog/index/status/2\">已通过</a></li>
            </ul>
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>所属城市</th>
                        <th>标题</th>
                        <th>展示租金</th>
                        <th>装修类型</th>
                        <th>出租类型</th>
                        <th>时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 45
        if (($context["data"] ?? null)) {
            // line 46
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 47
                echo "                    <tr>
                        <td>
                            ";
                // line 49
                if ((($context["status"] ?? null) == 4)) {
                    // line 50
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 1)) {
                        // line 51
                        echo "                            <span class=\"text-danger\">{隐藏}</span>
                            ";
                    } else {
                        // line 53
                        echo "                            <span class=\"text-success\">{展示}</span>
                            ";
                    }
                    // line 55
                    echo "                            ";
                }
                // line 56
                echo "                        </td>
                        <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cityname", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "title", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "show_rent", array()), "html", null, true);
                echo "</td>
                        <td>
                            ";
                // line 61
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "dtype", array()) == 0)) {
                    // line 62
                    echo "                            精装
                            ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 63
$context["v"], "dtype", array()) == 1)) {
                    // line 64
                    echo "                            中装
                            ";
                } else {
                    // line 66
                    echo "                            简装
                            ";
                }
                // line 68
                echo "                        </td>
                        <td>
                            ";
                // line 70
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "htype", array()) == 0)) {
                    // line 71
                    echo "                            整租
                            ";
                } else {
                    // line 73
                    echo "                            合租
                            ";
                }
                // line 75
                echo "                        </td>
                        <td>";
                // line 76
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ctime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                        <td>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"uhInfo(";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">详细信息</button>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"update_info(";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">修改</button>
                            <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del_info(";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                    ";
        } else {
            // line 85
            echo "                    <tr>
                        <td colspan=\"4\">
                            <blockquote>
                                <p>暂无数据 :(</p>
                            </blockquote>
                        </td>
                    </tr>
                    ";
        }
        // line 93
        echo "                    </tbody>
                </table>
                <div style=\"float: right;\">
                    ";
        // line 97
        echo "                    ";
        echo ($context["page"] ?? null);
        echo "
                    ";
        // line 99
        echo "                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Page -->
";
    }

    // line 108
    public function block_js($context, array $blocks = array())
    {
        // line 109
        echo "<script src=\"/apps/admin/views/tenmentCatalog/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "tenmentCatalog/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 109,  229 => 108,  218 => 99,  213 => 97,  208 => 93,  198 => 85,  195 => 84,  185 => 80,  181 => 79,  177 => 78,  172 => 76,  169 => 75,  165 => 73,  161 => 71,  159 => 70,  155 => 68,  151 => 66,  147 => 64,  145 => 63,  142 => 62,  140 => 61,  135 => 59,  131 => 58,  127 => 57,  124 => 56,  121 => 55,  117 => 53,  113 => 51,  110 => 50,  108 => 49,  104 => 47,  99 => 46,  97 => 45,  75 => 28,  69 => 27,  63 => 26,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
                <h3 class=\"panel-title\">@ 租房条目列表</h3>
            </div>

            <form action=\"/admin/tenmentCatalog/index\" method=\"get\">
                <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
                    <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入关键字\">
                    <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
                </div>
            </form>
            <ul class=\"nav nav-pills\" style=\"margin-left: 25px;\">
                <li role=\"presentation\" {% if status == 0 %}class=\"active\"{% endif %}><a href=\"/admin/tenmentCatalog/index/status/0\">待审核</a></li>
                <li role=\"presentation\" {% if status == 1 %}class=\"active\"{% endif %}><a href=\"/admin/tenmentCatalog/index/status/1\">未通过</a></li>
                <li role=\"presentation\" {% if status == 2 %}class=\"active\"{% endif %}><a href=\"/admin/tenmentCatalog/index/status/2\">已通过</a></li>
            </ul>
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>所属城市</th>
                        <th>标题</th>
                        <th>展示租金</th>
                        <th>装修类型</th>
                        <th>出租类型</th>
                        <th>时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% if data %}
                    {% for k,v in data %}
                    <tr>
                        <td>
                            {% if status == 4 %}
                            {% if v.type == 1 %}
                            <span class=\"text-danger\">{隐藏}</span>
                            {% else %}
                            <span class=\"text-success\">{展示}</span>
                            {% endif %}
                            {% endif %}
                        </td>
                        <td>{{ v.cityname }}</td>
                        <td>{{ v.title }}</td>
                        <td>{{ v.show_rent }}</td>
                        <td>
                            {% if v.dtype == 0 %}
                            精装
                            {% elseif v.dtype == 1 %}
                            中装
                            {% else %}
                            简装
                            {% endif %}
                        </td>
                        <td>
                            {% if v.htype == 0 %}
                            整租
                            {% else %}
                            合租
                            {% endif %}
                        </td>
                        <td>{{ v.ctime|date(\"Y-m-d H:i\") }}</td>
                        <td>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"uhInfo({{ v.id }});\">详细信息</button>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"update_info({{ v.id }});\">修改</button>
                            <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del_info({{ v.id }});\">删除</button>
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
<script src=\"/apps/admin/views/tenmentCatalog/js/index.js\"></script>
{% endblock %}", "tenmentCatalog/index.html", "F:\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\tenmentCatalog\\index.html");
    }
}
