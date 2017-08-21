<?php

/* about/index.html */
class __TwigTemplate_bf746f2300e5aa8f3a0b3cf85a5582251ab2ac9a9d78666068a41c1d173fa259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layouts.html", "about/index.html", 1);
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
    <h1 class=\"page-title\"># Layouts</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 关于我们列表</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>内容</th>
              <th>时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 27
        if (($context["data"] ?? null)) {
            // line 28
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["data"] ?? null));
            foreach ($context['_seq'] as $context["k"] => $context["v"]) {
                // line 29
                echo "            <tr>
              <td>
              </td>
              <td>";
                // line 33
                echo "              ";
                echo twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "content", array());
                echo " 
            ";
                // line 34
                echo "</td>
              <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "ctime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"ePass('";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "','";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "content", array()), "html", null, true);
                echo "');\">修改内容</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del('";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["v"], "id", array()), "html", null, true);
                echo "');\">删除</button>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "          ";
        } else {
            // line 43
            echo "            <tr>
              <td colspan=\"4\">
                <blockquote>
                  <p>暂无数据 :(</p>
                </blockquote>
              </td>
            </tr>
          ";
        }
        // line 51
        echo "          </tbody>
        </table>

          <div style=\"float: right;\">
            ";
        // line 56
        echo "              ";
        echo ($context["page"] ?? null);
        echo "
            ";
        // line 58
        echo "          </div>

      </div>
    </div>
  </div>
</div>

<div id=\"ePassModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">修改密码</h4>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" id=\"ePassForm\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">用户名</label>
          
             <script class=\"form-control\" id=\"container\" readonly=\"readonly\" name=\"content\" type=\"text/plain\" style=\"height: 300px;\">";
        // line 77
        echo twig_get_attribute($this->env, $this->getSourceContext(), ($context["data"] ?? null), "content", array());
        echo "</script>
            
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
    }

    // line 92
    public function block_js($context, array $blocks = array())
    {
        // line 93
        echo "
<script src=\"/apps/admin/views/about/js/index.js\"></script>

<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container');
</script>

";
    }

    public function getTemplateName()
    {
        return "about/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 93,  168 => 92,  150 => 77,  129 => 58,  124 => 56,  118 => 51,  108 => 43,  105 => 42,  95 => 38,  89 => 37,  84 => 35,  81 => 34,  76 => 33,  71 => 29,  66 => 28,  64 => 27,  41 => 6,  38 => 5,  33 => 3,  30 => 2,  11 => 1,);
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
    <h1 class=\"page-title\"># Layouts</h1>
  </div>
  <div class=\"page-content\">
    <div class=\"panel\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\">@ 关于我们列表</h3>
      </div>
      <div class=\"panel-body\">
        <table class=\"table table-hover\">
          <thead>
            <tr>
              <th>#</th>
              <th>内容</th>
              <th>时间</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          {% if data %}
          {% for k,v in data %}
            <tr>
              <td>
              </td>
              <td>{% autoescape false %}
              {{ v.content }} 
            {% endautoescape %}</td>
              <td>{{ v.ctime|date(\"Y-m-d H:i\") }}</td>
              <td>
                <button type=\"button\" class=\"btn btn-primary btn-xs\" onclick=\"ePass('{{ v.id }}','{{ v.content }}');\">修改内容</button>
                <button type=\"button\" class=\"btn btn-default btn-xs\" onclick=\"del('{{ v.id }}');\">删除</button>
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

<div id=\"ePassModal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
        <h4 class=\"modal-title\">修改密码</h4>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-horizontal\" id=\"ePassForm\" method=\"post\">
          <div class=\"form-group\">
            <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">用户名</label>
          
             <script class=\"form-control\" id=\"container\" readonly=\"readonly\" name=\"content\" type=\"text/plain\" style=\"height: 300px;\">{% autoescape false %}{{ data.content }}{% endautoescape %}</script>
            
          </div>
          <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
              <button type=\"submit\" class=\"btn btn-default\">提 交</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block js %}

<script src=\"/apps/admin/views/about/js/index.js\"></script>

<script src=\"/public/ueditor/ueditor.config.js\"></script>
<script src=\"/public/ueditor/ueditor.all.js\"></script>
<script>
    var ue = UE.getEditor('container');
</script>

{% endblock %}
", "about/index.html", "D:\\UPUPWAP\\vhosts\\dev.tfw.local\\apps\\admin\\views\\about\\index.html");
    }
}
