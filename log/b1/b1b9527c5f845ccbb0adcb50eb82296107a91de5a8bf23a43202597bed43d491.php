<?php

/* sellHouseInfo/index.html */
class __TwigTemplate_811b8181a42d46fa83f0e749e2e929b604c696d88987a7260d9c3f7cadf3dc8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "sellHouseInfo/index.html", 1);
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

            <form action=\"/admin/sellHouseInfo/index\" method=\"get\">
                <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
                    <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入小区名\">
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
        echo "><a href=\"/admin/sellHouseInfo/index/status/0\">未读</a></li>
                <li role=\"presentation\" ";
        // line 27
        if ((($context["status"] ?? null) == 1)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/sellHouseInfo/index/status/1\">已读</a></li>
            </ul>
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>小区</th>
                        <th>面积</th>
                        <th>房型</th>
                        <th>售价</th>
                        <th>房屋类型</th>
                        <th>姓名</th>
                        <th>联系电话</th>
                        <th>时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 46
        if (($context["data"] ?? null)) {
            // line 47
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 48
                echo "                    <tr>
                        <td>
                            ";
                // line 50
                if ((($context["status"] ?? null) == 4)) {
                    // line 51
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 1)) {
                        // line 52
                        echo "                            <span class=\"text-danger\">{隐藏}</span>
                            ";
                    } else {
                        // line 54
                        echo "                            <span class=\"text-success\">{展示}</span>
                            ";
                    }
                    // line 56
                    echo "                            ";
                }
                // line 57
                echo "                        </td>
                        <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "community", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "area", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "house_type", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "selling_price", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "htype", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "phone", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ctime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                        <td>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"shInfo(";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">详细信息</button>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 71
            echo "                    ";
        } else {
            // line 72
            echo "                    <tr>
                        <td colspan=\"4\">
                            <blockquote>
                                <p>暂无数据 :(</p>
                            </blockquote>
                        </td>
                    </tr>
                    ";
        }
        // line 80
        echo "                    </tbody>
                </table>
                <div style=\"float: right;\">
                    ";
        // line 84
        echo "                    ";
        echo ($context["page"] ?? null);
        echo "
                    ";
        // line 86
        echo "                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Page -->
";
    }

    // line 95
    public function block_js($context, array $blocks = array())
    {
        // line 96
        echo "
";
    }

    public function getTemplateName()
    {
        return "sellHouseInfo/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 96,  200 => 95,  189 => 86,  184 => 84,  179 => 80,  169 => 72,  166 => 71,  156 => 67,  151 => 65,  147 => 64,  143 => 63,  139 => 62,  135 => 61,  131 => 60,  127 => 59,  123 => 58,  120 => 57,  117 => 56,  113 => 54,  109 => 52,  106 => 51,  104 => 50,  100 => 48,  95 => 47,  93 => 46,  69 => 27,  63 => 26,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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

            <form action=\"/admin/sellHouseInfo/index\" method=\"get\">
                <div class=\"input-group\" style=\"width: 300px;float: right;margin-right: 30px;\">
                    <input type=\"text\" class=\"form-control\" name=\"search\" placeholder=\"请输入小区名\">
                    <span class=\"input-group-btn\">
            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon wb-search\" aria-hidden=\"true\"></i></button>
          </span>
                </div>
            </form>
            <ul class=\"nav nav-pills\" style=\"margin-left: 25px;\">
                <li role=\"presentation\" {% if status == 0 %}class=\"active\"{% endif %}><a href=\"/admin/sellHouseInfo/index/status/0\">未读</a></li>
                <li role=\"presentation\" {% if status == 1 %}class=\"active\"{% endif %}><a href=\"/admin/sellHouseInfo/index/status/1\">已读</a></li>
            </ul>
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>小区</th>
                        <th>面积</th>
                        <th>房型</th>
                        <th>售价</th>
                        <th>房屋类型</th>
                        <th>姓名</th>
                        <th>联系电话</th>
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
                        <td>{{ v.community }}</td>
                        <td>{{ v.area }}</td>
                        <td>{{ v.house_type }}</td>
                        <td>{{ v.selling_price }}</td>
                        <td>{{ v.htype }}</td>
                        <td>{{ v.cname }}</td>
                        <td>{{ v.phone }}</td>
                        <td>{{ v.ctime|date(\"Y-m-d H:i\") }}</td>
                        <td>
                            <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"shInfo({{ v.id }});\">详细信息</button>
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

{% endblock %}", "sellHouseInfo/index.html", "F:\\UPUPW_AP7.0_64-1512.1\\UPUPW_AP7.0_64\\vhosts\\dev.tfw.local\\apps\\admin\\views\\sellHouseInfo\\index.html");
    }
}
