<?php

/* usedHouseCatalog/index.html */
class __TwigTemplate_b465e791a1e56327907ad3055966453bcebc6d919a1aa7d62954cae61e97a24e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "usedHouseCatalog/index.html", 1);
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
                <h3 class=\"panel-title\">@ 二手房条目列表</h3>
            </div>

            <form action=\"/admin/usedHouseCatalog/index\" method=\"get\">
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
        echo "><a href=\"/admin/usedHouseCatalog/index/status/0\">待审核</a></li>
                <li role=\"presentation\" ";
        // line 27
        if ((($context["status"] ?? null) == 1)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/usedHouseCatalog/index/status/1\">未通过</a></li>
                <li role=\"presentation\" ";
        // line 28
        if ((($context["status"] ?? null) == 2)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/usedHouseCatalog/index/status/2\">已通过</a></li>
            </ul>
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>所属城市</th>
                        <th>标题</th>
                        <th>展示价格</th>
                        <th>特点</th>
                        <th>面积</th>
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
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "show_price", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "trait", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "area", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ctime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                        <td>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"uhInfo(";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">详细信息</button>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"update_info(";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">修改</button>
                            <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del_info(";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                    ";
        } else {
            // line 71
            echo "                    <tr>
                        <td colspan=\"4\">
                            <blockquote>
                                <p>暂无数据 :(</p>
                            </blockquote>
                        </td>
                    </tr>
                    ";
        }
        // line 79
        echo "                    </tbody>
                </table>
                <div style=\"float: right;\">
                    ";
        // line 83
        echo "                    ";
        echo ($context["page"] ?? null);
        echo "
                    ";
        // line 85
        echo "                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Page -->
";
    }

    // line 94
    public function block_js($context, array $blocks = array())
    {
        // line 95
        echo "<script src=\"/apps/admin/views/usedHouseCatalog/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "usedHouseCatalog/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 95,  204 => 94,  193 => 85,  188 => 83,  183 => 79,  173 => 71,  170 => 70,  160 => 66,  156 => 65,  152 => 64,  147 => 62,  143 => 61,  139 => 60,  135 => 59,  131 => 58,  127 => 57,  124 => 56,  121 => 55,  117 => 53,  113 => 51,  110 => 50,  108 => 49,  104 => 47,  99 => 46,  97 => 45,  75 => 28,  69 => 27,  63 => 26,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
                <h3 class=\"panel-title\">@ 二手房条目列表</h3>
            </div>

            <form action=\"/admin/usedHouseCatalog/index\" method=\"get\">
                <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
                    <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入关键字\">
                    <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
                </div>
            </form>
            <ul class=\"nav nav-pills\" style=\"margin-left: 25px;\">
                <li role=\"presentation\" {% if status == 0 %}class=\"active\"{% endif %}><a href=\"/admin/usedHouseCatalog/index/status/0\">待审核</a></li>
                <li role=\"presentation\" {% if status == 1 %}class=\"active\"{% endif %}><a href=\"/admin/usedHouseCatalog/index/status/1\">未通过</a></li>
                <li role=\"presentation\" {% if status == 2 %}class=\"active\"{% endif %}><a href=\"/admin/usedHouseCatalog/index/status/2\">已通过</a></li>
            </ul>
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>所属城市</th>
                        <th>标题</th>
                        <th>展示价格</th>
                        <th>特点</th>
                        <th>面积</th>
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
                        <td>{{ v.show_price }}</td>
                        <td>{{ v.trait }}</td>
                        <td>{{ v.area }}</td>
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
<script src=\"/apps/admin/views/usedHouseCatalog/js/index.js\"></script>
{% endblock %}", "usedHouseCatalog/index.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\usedHouseCatalog\\index.html");
    }
}
