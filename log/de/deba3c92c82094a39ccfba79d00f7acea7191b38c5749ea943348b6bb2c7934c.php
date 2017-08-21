<?php

/* loan/index.html */
class __TwigTemplate_9f7090d9b0040b91344f7484c0a115e71c6077f379c1be844b68c689ba077314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "loan/index.html", 1);
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
                <h3 class=\"panel-title\">@ 金融贷款列表</h3>
            </div>
            <ul class=\"nav nav-pills\" style=\"margin-left: 25px;\">
                <li role=\"presentation\" ";
        // line 17
        if ((($context["status"] ?? null) == 0)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/loan/index/status/0\">未读</a></li>
                <li role=\"presentation\" ";
        // line 18
        if ((($context["status"] ?? null) == 1)) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/admin/loan/index/status/1\">已读</a></li>
            </ul>
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>姓名</th>
                        <th>联系电话</th>
                        <th>贷款屋类型</th>
                        <th>时间</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 33
        if (($context["data"] ?? null)) {
            // line 34
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 35
                echo "                    <tr>
                        <td>
                            ";
                // line 37
                if ((($context["status"] ?? null) == 4)) {
                    // line 38
                    echo "                            ";
                    if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 1)) {
                        // line 39
                        echo "                            <span class=\"text-danger\">{隐藏}</span>
                            ";
                    } else {
                        // line 41
                        echo "                            <span class=\"text-success\">{展示}</span>
                            ";
                    }
                    // line 43
                    echo "                            ";
                }
                // line 44
                echo "                        </td>
                        
                        <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "cname", array()), "html", null, true);
                echo "</td>
                        <td>";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "phone", array()), "html", null, true);
                echo "</td>
                        <td>
                         ";
                // line 49
                if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "type", array()) == 0)) {
                    // line 50
                    echo "                        
                        <span>抵押贷款</span>
                         ";
                } elseif ((twig_get_attribute($this->env, $this->getSourceContext(),                 // line 52
$context["v"], "type", array()) == 1)) {
                    // line 53
                    echo "                         <span>信用贷款</span>
                         ";
                } else {
                    // line 55
                    echo "                         <span>组合贷款</span>
                          ";
                }
                // line 57
                echo "                           
                          

                        </td>
                        <td>";
                // line 61
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ctime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
                        <td>
                             <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"update_info(";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">修改</button>
                            <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del_info(";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo ");\">删除</button>
                        </td>
                    </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "                    ";
        } else {
            // line 69
            echo "                    <tr>
                        <td colspan=\"4\">
                            <blockquote>
                                <p>暂无数据 :(</p>
                            </blockquote>
                        </td>
                    </tr>
                    ";
        }
        // line 77
        echo "                    </tbody>
                </table>
                <div style=\"float: right;\">
                    ";
        // line 81
        echo "                    ";
        echo ($context["page"] ?? null);
        echo "
                    ";
        // line 83
        echo "                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Page -->
";
    }

    // line 92
    public function block_js($context, array $blocks = array())
    {
        // line 93
        echo "<script src=\"/apps/admin/views/loan/js/index.js\"></script>
";
    }

    public function getTemplateName()
    {
        return "loan/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 93,  195 => 92,  184 => 83,  179 => 81,  174 => 77,  164 => 69,  161 => 68,  151 => 64,  147 => 63,  142 => 61,  136 => 57,  132 => 55,  128 => 53,  126 => 52,  122 => 50,  120 => 49,  115 => 47,  111 => 46,  107 => 44,  104 => 43,  100 => 41,  96 => 39,  93 => 38,  91 => 37,  87 => 35,  82 => 34,  80 => 33,  60 => 18,  54 => 17,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
                <h3 class=\"panel-title\">@ 金融贷款列表</h3>
            </div>
            <ul class=\"nav nav-pills\" style=\"margin-left: 25px;\">
                <li role=\"presentation\" {% if status == 0 %}class=\"active\"{% endif %}><a href=\"/admin/loan/index/status/0\">未读</a></li>
                <li role=\"presentation\" {% if status == 1 %}class=\"active\"{% endif %}><a href=\"/admin/loan/index/status/1\">已读</a></li>
            </ul>
            <div class=\"panel-body\">
                <table class=\"table table-hover\">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>姓名</th>
                        <th>联系电话</th>
                        <th>贷款屋类型</th>
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
                        
                        <td>{{ v.cname }}</td>
                        <td>{{ v.phone }}</td>
                        <td>
                         {% if v.type == 0%}
                        
                        <span>抵押贷款</span>
                         {% elseif v.type == 1%}
                         <span>信用贷款</span>
                         {% else %}
                         <span>组合贷款</span>
                          {% endif %}
                           
                          

                        </td>
                        <td>{{ v.ctime|date(\"Y-m-d H:i\") }}</td>
                        <td>
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
<script src=\"/apps/admin/views/loan/js/index.js\"></script>
{% endblock %}", "loan/index.html", "D:\\UPUPWAP\\vhosts\\dev.tfw.local\\apps\\admin\\views\\loan\\index.html");
    }
}
